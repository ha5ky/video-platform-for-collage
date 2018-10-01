<?php

namespace Admin\Model;

use Think\Model;

/**
* 
*/
class SortModel extends Model
{
	
	public function sort_add ($sort_name,$sort_intro,$sort_pid,$url) {
		$data = array(
			'sort_name' => $sort_name,
			'sort_intro' => $sort_intro,
			'sort_pid' => $sort_pid,
			'sort_img' => $url
			);
		return $this->add($data);
	}

	public function sort_del ($sort_id) {
		return $this->where(array('sort_id' => $sort_id))->delete();
	}

	public function sort_upd ($id,$name,$intro,$pid) {
		$data = array(
			'sort_intro' => $intro,
			'sort_pid' => $pid,
			'sort_name' => $name
			);
		return $this->where(array('sort_id' => $id))->save($data);
	}

	/**
	 * 获取课程pid
	 */
	public function getPid ($name) {
		return $this->where(array('sort_name' => $name))->getField('sort_id');
	}

	/**
	 * 添加章节
	 */
	public function chapter_add($name,$intro,$pid,$url) {
		$data = array(
			'sort_name' => $name,
			'sort_intro' => $intro,
			'sort_pid' => $pid,
			'sort_img' => $url
			);
		return $this->add($data);
	}

	public function chapter_upd ($id,$name,$intro,$pid) {
		$data = array(
			'sort_name' => $name,
			'sort_intro' => $intro,
			'sort_pid' => $pid
			);
		return $this->where(array('sort_id' => $id))->save($data);
	}

	/**
	 * 搜索功能
	 */
	public function reg($intro) {
		$where['sort_name'] = array('like','%'.$intro.'%');
		return $this->where($where)->select();
	}
}