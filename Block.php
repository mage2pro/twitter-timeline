<?php
namespace Dfe\TwitterTimeline;
class Block extends \Magento\Framework\View\Element\AbstractBlock {
	/**
	 * 2015-11-09
	 * @override
	 * @see \Magento\Backend\Block\AbstractBlock::_toHtml()
	 * @return string
	 */
	protected function _construct() {
		xdebug_break();
	}

	/**
	 * 2015-11-09
	 * @override
	 * @see \Magento\Backend\Block\AbstractBlock::_toHtml()
	 * @return string
	 */
	protected function _toHtml() {
		return Settings::s()->html();
	}
}
