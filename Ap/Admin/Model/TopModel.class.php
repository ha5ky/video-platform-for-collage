<?php
namespace Admin\Model;

use Think\Model;

class TopModel extends Model 
{
	public function _initialize() {

	}

	/**
	 * 存入json
	 */
	public function top_add($systemname,$json,$logo,$head,$foot) {
		$data = array(
			'top_systemname' => $systemname,
			'top_course' => $json,
			'top_logo' => $logo,
			'top_head' => $head,
			'top_foot' => $foot,
			'top_time' => time()
			);
		return $this->add($data);
	}
}