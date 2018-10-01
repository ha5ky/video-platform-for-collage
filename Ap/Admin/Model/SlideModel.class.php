<?php
namespace Admin\Model;

use Think\Model;

class SlideModel extends Model 
{

	public function _initialize() {

	}

	/**
	 * 
	 */
	public function slide_add($json) {
		$data = array(
			'slide_video' => $json,
			// 'slide_pic' => $json_p,
			'slide_time' => time()
			);
		return $this->add($data);
	}

	/**
	 * 修改状态
	 */
	public function slide_upd($id) {
		return $this->where(array('slide_id' => $id))->save(array('types' => 2));
	}

	/**
	 * 修改types
	 */
	public function slide_null($list) {
		
		foreach ($list as $key => $value) {
			$this->where(array('slide_id' => $value['slide_id']))->save(array('types' => 1));
			
		}
	}
}