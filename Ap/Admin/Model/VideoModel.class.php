<?php

namespace Admin\Model;

use Think\Model;

/**
* 
*/
class VideoModel extends Model
{
	
	/**
	 * 统计教师上传的视频数量
	 * @return [type] [description]
	 */
	public function countTeacherVideo ($t_id) {
		$count = $this->where(array('tid' => $t_id))->count();
		return $count;
	}

	/**
	 * 向数据库插入视频信息
	 * @param  [type] $savepath [description]
	 * @param  [type] $savename [description]
	 * @return [type]           [description]
	 */
	public function video_add ($v_name,$v_intro,$img,$sort_id,$url) {
		$data = array(
			'v_name' => $v_name,
			'v_intro' => $v_intro,
			'v_img' => $img,
			'sort_id' => $sort_id,
			'v_time' => time(),
			'v_content' => $url,
			'tid' => session('user_id'),
			'v_status' => 0
			);
		return $this->data($data)->add();
	}

	/**
	 * 删除视频
	 */
	public function video_del ($vid) {
		return $this->where(array('vid' => $v_id))->delete();
	}

	/**
	 * 更新视频
	 */
	public function video_update ($v_id,$data) {
		return $this->where(array('vid' => $v_id))->save($data);
	}

	/**
	 * 查询视频
	 */
	public function video_search ($v_id) {
		return $this->where(array('vid' => $v_id))->getField('v_addr');
	}

}