<?php

namespace Admin\Model;

use Think\Model;

/**
* 
*/
class CommentModel extends Model
{
	
	/**
	 * 发表评论
	 */
	public function com_add ($comment,$vid) {
		$data = array(
			'vid' => $vid,
			'sid' => session('std_id'),
			'com_content' => $comment,
			'com_time' =>time()
			);
		return $this->add($data);
	}

	/**
	 * 回复评论
	 */
	public function reply_add($comment,$vid,$pid) {
		$data = array(
			'vid' => $vid,
			'com_pid' => $pid,
			'sid' => session('std_id'),
			'com_content' => $comment,
			'com_time' =>time()
			);
		return $this->add($data);
	}

	/**
	 * 删除评论
	 */
	public function com_del($id) {
		return $this->where(array('com_id' => $id))->delete();
	}

	/**
	 * 审核
	 */
	public function update_comm($id,$status) {
		return $this->where(array('com_id' => $id))->save(array('com_status' => $status));
	}
}