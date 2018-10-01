<?php

namespace Admin\Model;

use Think\Model;
use Admin\Controller\UploadController;

/**
* 学生表model操作
*/
class StudentModel extends Model 
{

	/**
	 * 将获取的excel数据插入数据库
	 */
	public function insertStd ($data) {
		$array_keys = array(
			'std_num',
			'std_name'
			);
		foreach ($data as $key=>$arr) {
			$array_new[] = array_combine($array_keys, $arr);
		}
		return $this->addall($array_new);
	}

	/**
	 * 增加小数量学生
	 */
	public function std_add ($num,$name) {
		$data = array(
			'std_num'  => $num,
			'std_name' => $name,
			);
		return $this->data($data)->add();
	}

	/**
	 * 删除学生
	 */
	public function std_del ($num) {
		return $this->where(array('std_num' => $num))->delete();
	}

	/**
	 * 更新学生信息
	 */
	public function std_update ($sid,$num,$name) {
		$data = array(
			'std_num' => $num,
			'std_name' => $name,
			);
		return $this->where(array('sid' => $sid))->save($data);
	}

	/**
	 * 查询学生信息
	 */
	public function std_search ($num) {
		return $this->where(array('std_num' => $num))->find();
	}
}