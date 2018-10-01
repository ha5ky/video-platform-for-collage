<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function _initialize() {

    }

    public function index(){
        $index = M('top');
        $index1 = M('slide');
        $sort = M('sort');
        $video = M('video');
        $list = $index->order('top_time desc')->limit(1)->select();
        // echo $list[0]['top_systemname'];die();

        // 生成缩略图
        $saveName_logo = 'logo_'.time().'_'.mt_rand();
        $saveName_pic  = 'pic_'.time().'_'.mt_rand();
        $savePath_logo = '/Public/thumb/'.$saveName_logo.'.png';
        $savePath_pic = '/Public/thumb/'.$saveName_pic.'.png';
        $image = new \Think\Image();
        $image->open('.'.$list[0]['top_logo']);
        // $image->open('.'.$list[0]['top_pic']);
        $image->thumb(90,90)->save('.'.$savePath_logo);
        $image->thumb(90,90)->save('.'.$savePath_pic);
        $v_small['top_logo'] = $savePath_logo;
        $v_small['top_pic'] = $savePath_pic;
        // echo $v_small['top_logo'];die();
        // echo $v_small['top_pic'];die();

        $arr_json = $list[0]['top_course'];
        $arr = json_decode($arr_json,true);
        $list1 = $index1->order('slide_time desc')->limit(1)->select();
        $arr_json2 = $list1[0]['slide_video'];
        $arr2 = json_decode($arr_json2,true);
        foreach ($arr2 as $k1 => $v1) {
            $p_arr2[] = $video->where(array('sort_id' => $v1))->find();
        }
        if($head = $index1->where('types = 2')->order('slide_time desc')->limit(1)->find()){
            $arr3_json = $head['slide_video'];
            $arr3 = json_decode($arr3_json,true);
            foreach ($arr3 as $k1 => $v1) {
                $p_arr3[] = $video->where(array('sort_id' => $v1))->find();
            }
        }
        
        
        // $logo = '/Public/thumb/thumb.png';
        // echo $logo;die();
        $sort_course = $sort->where('sort_pid = 0')->select();
        $config = M('config');
        $this->assign('config_name',$config->order('conf_id desc')->limit(1)->getField('conf_name'));
        $this->assign('course', $sort_course);
        $this->assign('std_name', session('std_name'));
        $this->assign('arr',$arr);
        $this->assign('arr1', $p_arr3);
        $this->assign('arr2', $p_arr2);
        $this->assign('img', $v_small);
        $this->assign('systemname',$list[0]['top_systemname']);
        // $this->assign('list', $list);
        $this->display('Index/index');
    }
    public function news () {
        $sort = M('sort');
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
        // $v3['course_name'] =$v1;
        // $v3['chapter_name'] = $v2;
        // dump($v1);die();
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
        $list1 = $index->order('top_time desc')->limit(1)->select();
        $arr_json = $list1[0]['top_course'];
        $arr = json_decode($arr_json,true);
        $this->assign('img', $v_small);
        $this->assign('v1',$v1);
        $this->assign('v2',$v2);
        $this->assign('arr',$arr);
        $this->assign('stdname',session('std_name'));
        $this->assign('systemname',$top[0]['top_systemname']);
    	$this->display('news');
    }
    public function single () {
        $ved = new \Admin\Model\VedModel();
        $vedid = $ved->ved_add(session('user_id'),I('video_id'));
        // echo $vedid;die();
        $url = M('video');
        $v_path = $url->where(array('vid' => I('video_id')))->getField('v_content');
        $reg = "#src=\"(.+?)\".*?#"; //正则匹配路径字符串
        preg_match($reg,$v_path,$img);
        // echo $v_path;die();
        // dump($img);die();
        $com = M('comment');
        $vid = $com->field('sid,com_id')->where(array('vid' => I('video_id')))->where('com_status = 1')->select();
        foreach ($vid as $k => $v) {
            $arr_com[] = $com->field('comment.com_id,comment.com_content,student.std_name,student.sid')->table(array('v_comment' => 'comment','v_student' => 'student'))->where(array('com_id' => $v['com_id']))->where('comment.sid = student.sid')->find();
        }
        // dump($vid);die();
        $video = M('video');
        $arr1 = $video->order('v_time desc')->limit(10)->select();
        $video_name = $video->where(array('vid' => I('video_id')))->getField('v_name');
        $index = M('top');
        $list = $index->order('top_time desc')->limit(1)->select();
        // echo $list[0]['top_logo'];die();
        // 生成缩略图
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
        $this->assign('img',$img[1]);
        $this->assign('img1',$v_small['top_logo']);
        $this->assign('systemname',$list[0]['top_systemname']);
        $this->assign('arr',$arr);
        $this->assign('video_name',$video_name);
        $this->assign('arr_video',$arr1);
        $this->assign('vid',I('video_id'));
        $this->assign('com',$arr_com);
        $this->assign('stdname',session('std_name'));
    	$this->display('Index/single');
        
    }

    public function sort_list() {
        $sort = M('sort');
        // $video = M('video');
        // $video_id = $video->where(array('sort_id' => I('sort_id')))->getField('vid');
        $chapter = $sort->where(array('sort_pid' => I('sort_id')))->select();
        // dump($course);die();
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
        $this->assign('v2',$chapter);
        $this->assign('arr',$arr);
        $this->assign('stdname',session('std_name'));
        $this->display('Index/sort_list');
    }

    public function single_list() {
        $ved = new \Admin\Model\VedModel();
        $vedid = $ved->ved_add(session('user_id'),I('video_id'));
        $video = M('video');
        $video_id = $video->where(array('sort_id' => I('sort_id')))->getField('vid');
        $v_path = $video->where(array('vid' => $video_id))->getField('v_content');
        $reg = "#src=\"(.+?)\".*?#"; //正则匹配路径字符串
        preg_match($reg,$v_path,$img);
        $com = M('comment');
        $vid = $com->field('sid,com_id')->where(array('vid' => $video_id))->where('com_status = 1')->select();
        foreach ($vid as $k => $v) {
            $arr_com[] = $com->field('comment.com_id,comment.com_content,student.std_name')->table(array('v_comment' => 'comment','v_student' => 'student'))->where(array('com_id' => $v['com_id']))->where('comment.sid = student.sid')->find();
        }
        // dump($vid);die();
        
        $arr1 = $video->order('v_time desc')->limit(10)->select();
        $video_name = $video->where(array('vid' => $video_id))->getField('v_name');
        $index = M('top');
        $list = $index->order('top_time desc')->limit(1)->select();
        // echo $list[0]['top_logo'];die();
        // 生成缩略图
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
        $this->assign('img',$img[1]);
        $this->assign('img1',$v_small['top_logo']);
        $this->assign('systemname',$list[0]['top_systemname']);
        $this->assign('arr',$arr);
        $this->assign('video_name',$video_name);
        $this->assign('arr_video',$arr1);
        $this->assign('vid',$video_id);
        $this->assign('com',$arr_com);
        $this->assign('stdname',session('std_name'));
        $this->display('single');
    }
}