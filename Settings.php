<?php
namespace Dfe\TwitterTimeline;
/** @method static Settings s() */
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
}