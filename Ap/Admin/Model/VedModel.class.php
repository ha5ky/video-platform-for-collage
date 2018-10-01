<?php

namespace Admin\Model;

use Think\Model;

/**
* 
*/
class VedModel extends Model
{
	
	/**
	 * 统计学生看过的视频数量
	 */
	public function countStudentVideo ($s_id) {
		$count = $this->where(array('sid' => $s_id))->count();
		return $count;
	}

	/**
	 * 添加观看过的视频
	 */
	public function ved_add($sid,$vid) {
		$data = array(
			'sid' => $sid,
			'vid' => $vid,
			'ved_time' => time()
			);
		return $this->add($data);
	}
}