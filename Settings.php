<?php
namespace Dfe\TwitterTimeline;
/** @method static Settings s() */
final class Settings extends \Df\Config\Settings {
	/** @used-by \Dfe\TwitterTimeline\Block::_toHtml() */
	function html():string {return $this->v('html');}

	/** @return int */
	function limit():int {return $this->i('limit');}

	/** @used-by \Dfe\TwitterTimeline\Block::_toHtml() */
	function transparent():bool {return $this->b('transparent');}

	/**
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 */
	protected function prefix():string {return 'dfe_twitter/timeline';}
}