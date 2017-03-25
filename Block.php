<?php
namespace Dfe\TwitterTimeline;
use Magento\Framework\View\Element\AbstractBlock;
// 2015-11-09
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Block extends AbstractBlock {
	/**
	 * 2015-11-09
	 * @override
	 * @see AbstractBlock::_toHtml()
	 * @return string
	 */
	final protected function _toHtml() {
		/** @var string $html */
		$html = Settings::s()->html();
		/**
		 * 2015-11-09
		 * Код виджета состоит из 2-х тегов: <a> и <script>, например:
		<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/mage2_pro" data-widget-id="663613566654787584">Tweets by @mage2_pro</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		 * Так вот, @uses \DOMDocument почему-то парсит это код не совсем корректно:
		 * после вызова @uses \DOMDocument::saveHTML() он помещает тег <script> внутрь тега <a>.
		 * Чтобы этого избежать — обрамляем всё в <div>.
		 */
		$html = '<div>' . $html . '</div>';
		/** @var \DOMDocument $dom */
		$dom = new \DOMDocument;
		/** http://stackoverflow.com/a/22490902 */
		$dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
		/** @var \DOMElement $a */
		$a = $dom->getElementsByTagName('a')->item(0);
		/** https://dev.twitter.com/web/embedded-timelines#dimensions */
		foreach (['height', 'data-tweet-limit' => 'limit'] as $attribute => $configKey) {
			/** @var int|string $attribute */
			/** @var string $configKey */
			/** @var int $value */
			$value = Settings::s()->i($configKey);
			if ($value) {
				$a->setAttribute(is_numeric($attribute) ? $configKey : $attribute, $value);
			}
		}
		/** @var string[] $chromeA */
		$chromeA = [];
		foreach (['borders', 'footer', 'header', 'scrollbar'] as $property) {
			/** @var string $property */
			if (!Settings::s()->b($property)) {
				$chromeA[]= 'no' . $property;
			}
		}
		if (Settings::s()->transparent())  {
			$chromeA[]= 'transparent';
		}
		if ($chromeA) {
			$a->setAttribute('data-chrome', df_cc_s($chromeA));
		}
		//data-chrome="nofooter noborders"
		/**
		 * 2015-11-09
		 * Выжно вызвать @uses df_trim(), потому что  @uses \DOMDocument::saveHTML()
		 * зачем-то добавляет пробел и перенос строки в конце.
		 */
		/** @var string $result */
		$result = df_trim($dom->saveHTML());
		$result = df_trim_text_left($result, '<div>');
		$result = df_trim_text_right($result, '</div>');
		return $result;
	}
}
