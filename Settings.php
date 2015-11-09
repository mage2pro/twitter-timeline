<?php
namespace Dfe\TwitterTimeline;
class Settings extends \Df\Core\Settings {
	/** @return string */
	public function html() {return $this->p('html');}

	/**
	 * @override
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'dfe_twitter/timeline/';}

	/** @return \Dfe\TwitterTimeline\Settings */
	public static function s() {static $r; return $r ? $r : $r = df_o(__CLASS__);}
}