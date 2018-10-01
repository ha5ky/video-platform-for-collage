<?php

namespace Home\Controller;

use Think\Controller;

class OperateController extends Controller {
	public function top_jump () {
		$sort = M('sort');
		$video = M('video');
        $course = $sort->where('sort_pid = 0')->select();
        // dump($course);die();
        foreach ($course as $key => $c) {
            $chapter = $sort->where(array('sort_pid' => $c['sort_id']))->select();
            $v1[] = $c;
            if ($chapter != null) {
                foreach ($chapter as $k => $v) {
                    $v2[] = $v;
                    // $v1['course_name'] = $c['sort_name'];
                    // $v2[] = $v1;
                }
                // $v1[$c['sort_name']] = $v2;
                // unset($v2);
            }
        }
		$id = $sort->where(array('sort_name' => I('course')))->getField('sort_id');
		// echo $id;die();
		#遍历所有课程视频赋值
		$list = $sort->field('sort_id')->where(array('sort_pid' => $id))->select();
		// dump($list);die();
		foreach ($list as $k => $v) {
			$v_list[] = $video->where(array('sort_id' => $v['sort_id']))->find();
		}
		// dump($v_list);die();
		$index = M('top');
		$top = $index->order('top_time desc')->limit(1)->select();
		// echo $list[0]['top_logo'];die();
        // 生成缩略图
        $saveName_logo = 'logo_'.time().'_'.mt_rand();
        // $saveName_pic  = 'pic_'.time().'_'.mt_rand();
        $savePath_logo = '/Public/thumb/'.$saveName_logo.'.png';
        // $savePath_pic = '/Public/thumb/'.$saveName_pic.'.png';
        $image = new \Think\Image();
        $image->open('.'.$top[0]['top_logo']);
        // $image->open('.'.$list[0]['top_pic']);
        $image->thumb(90,90)->save('.'.$savePath_logo);
        // $image->thumb(90,90)->save('.'.$savePath_pic);
        $v_small['top_logo'] = $savePath_logo;
        // echo $v_small['top_logo'];die();
        // $v_small['top_pic'] = $savePath_pic;
        $list1 = $index->order('top_time desc')->limit(1)->select();
        $arr_json = $list1[0]['top_course'];
        $arr = json_decode($arr_json,true);
        // $good = $sort->where('sort_pid = 0')->select();
        // dump($good);die();
        // $this->assign('good',$good);
        $this->assign('systemname',$top[0]['top_systemname']);
        $this->assign('v1',$v1);
        $this->assign('v2',$v2);
        $this->assign('img', $v_small);
        $this->assign('arr',$arr);
		$this->assign('list',$v_list);
		$this->assign('stdname',session('std_name'));
		$this->display('Index/video');
	}

	/**
	 * 回复
	 * @return [type] [description]
	 */
	public function reply() {
		$com = new \Admin\Model\CommentModel();                                          
		// echo I('get.vid');die();
		if ($com->com_add(I('com_content'),I('get.vid'))) {
			$this->success('发送成功');
		}else {
			$this->error('发送失败。。。');
		}
	}

	/**
	 * 发送评论
	 */
	public function send() {
		$com = new \Admin\Model\CommentModel();
		// echo I('reply_id');die();
		if (I('reply_id') == null) {
			if ($com->com_add(I('com_content'),$_GET['vid'])) {
				$this->success('发送成功');
			}else {
				$this->error('发送失败。。。');
			}
		}else{
			if ($com->reply_add(I('com_content'),$_GET['vid'],I('reply_id'))) {
				$this->success('发送成功');
			}else {
				$this->error('发送失败。。。');
			}
		}
		
	}
}