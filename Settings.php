<?php
namespace Dfe\TwitterTimeline;
class Settings extends \Df\Core\Settings {
	/** @return string */
	public function html() {return $this->v('html');}

	/** @return int */
	public function limit() {return $this->i('limit');}

	/** @return bool */
	public function transparent() {return $this->b('transparent');}

	/**
	 * @override
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'dfe_twitter/timeline/';}

	/** @return $this */
	public static function s() {static $r; return $r ? $r : $r = df_o(__CLASS__);}
}