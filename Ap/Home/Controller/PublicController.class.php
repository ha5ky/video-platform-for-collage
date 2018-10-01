<?php

namespace Home\Controller;

use Think\Controller;

class PublicController extends Controller {
	public function login () {
		$s = new \Admin\Model\StudentModel();

		if ($arr = $s->std_search(I('username'))) {
			$pwd = $s->where(array('std_num' => I('username')))->getField('std_pwd');
			if (I('password') == $pwd) {
				session("std_id",$arr['sid']);
				session('std_name',$arr['std_name']);
        		pop('登录成功！');
        		// $this->assign('std_name', session('std_name'));
        		$this->success('',U('Home/Index/index'));
			}else {
				pop('密码错误！');
        		$this->error('',U('Home/Index/index'));
			}
        }else {
        	pop('该账户不存在！');
        	$this->error('',U('Home/Index/index'));
        }
	}

	/**
	 * 退出登录
	 */
	public function logout() {
		session(null);
		$this->success('退出成功',U('Home/Index/index'));
	}

	/**
     * 搜索功能
     */
    public function search() {
    	$reg = new \Admin\Model\SortModel();
    	$res = $reg->reg(I('searchkey'));
        $sort = M('sort');
        // // $video = M('video');
        // // $video_id = $video->where(array('sort_id' => I('sort_id')))->getField('vid');
        // $chapter = $sort->where(array('sort_pid' => I('sort_id')))->select();
        // // dump($course);die();
        $course = $sort->where('sort_pid = 0')->select();
        foreach ($course as $key => $c) {
            $chapter1 = $sort->where(array('sort_pid' => $c['sort_id']))->select();
            $v1[] = $c;
            if ($chapter1 != null) {
                foreach ($chapter1 as $k => $v) {
                    $v2[] = $v;
                    // $v1['course_name'] = $c['sort_name'];
                    // $v2[] = $v1;
                }
                // $v1[$c['sort_name']] = $v2;
                // unset($v2);
            }
        }
        // $v3['course_name'] =$v1;
        // $v3['chapter_name'] = $v2;
        // dump($v1);die();
        $index = M('top');
        $list = $index->order('top_time desc')->limit(1)->select();
        $saveName_logo = 'logo_'.time().'_'.mt_rand();
        // $saveName_pic  = 'pic_'.time().'_'.mt_rand();
        $savePath_logo = '/Public/thumb/'.$saveName_logo.'.png';
        // $savePath_pic = '/Public/thumb/'.$saveName_pic.'.png';
        $image = new \Think\Image();
        $image->open('.'.$list[0]['top_logo']);
        // $image->open('.'.$list[0]['top_pic']);
        $image->thumb(90,90)->save('.'.$savePath_logo);
        // $image->thumb(90,90)->save('.'.$savePath_pic);
        $v_small['top_logo'] = $savePath_logo;
        $arr_json = $list[0]['top_course'];
        $arr = json_decode($arr_json,true);
        $this->assign('v1',$v1);
        $this->assign('v3',$v2);
        $this->assign('img',$img[1]);
        $this->assign('img1',$v_small['top_logo']);
        $this->assign('systemname',$list[0]['top_systemname']);
        $this->assign('v2',$res);
        $this->assign('arr',$arr);
        $this->assign('stdname',session('std_name'));
        $this->display('Index/sort_list');
    }
}