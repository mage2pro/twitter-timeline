<?php
namespace Dfe\TwitterTimeline;
/** @method static Settings s() */
final class Settings extends \Df\Config\Settings {
	/** @return string */
	function html() {return $this->v('html');}

	/** @return int */
	function limit() {return $this->i('limit');}

	/** @return bool */
	function transparent() {return $this->b('transparent');}

	/**
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'dfe_twitter/timeline';}
}