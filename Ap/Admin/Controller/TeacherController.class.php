<?php
namespace Admin\Controller;

use Think\Controller;

class TeacherController extends Controller 
{

	/**
	 * 初始化方法
	 * @return [type] [description]
	 */
	public function _initialize() {

	}

	/**
	 * 材料管理
	 */
	public function materials () {
        $sort = M('sort');
        $count = $sort->count();
        $page = new \Think\Page($count,10);
        $list = $sort->where('sort_pid = 0')->order('sort_id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $show = $page->show();
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->display('Materials/materials');
    }

    public function details_m () {
        $this->assign('sort_id', I('sort_id'));
        $this->assign('sort_name', I('sort_name'));
        $chapter = M('sort');
        $count = $chapter->count();
        $page = new \Think\Page($count,6);
        $list = $chapter->where(array('sort_pid' => I('sort_id')))->order('sort_id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $show = $page->show();
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->display('Materials/details_m');
    }

    public function insert_m() {
        $this->display('Materials/details_m_insert');
    }

    public function insert_materials() {
        $picPath = $this->upload_p();
        // echo $_POST['container'];die();
        $sort = new \Admin\Model\SortModel();
        $video = new \Admin\Model\VideoModel();
        $pid = $sort->getPid(I('sort_name'));
        if ($sort_id = $sort->chapter_add(I('c_name'),I('sort_intro'),$pid,$picPath)) {
            // echo $sort_id;die();
            if ($video->video_add(I('v_name'),I('v_intro'),$picPath,$sort_id,$_POST['container'])) {
                w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户添加成功");
                $this->success('1');
            }
        }else {
            w_log(time(),__SELF__,session('user_name'),"insert from ".get_client_ip(),"用户添加失败");
            $this->error('0');
        }
    }

    public function upload_p() {
        $upload_p = new \Think\Upload();
        $upload_p->maxSize   = 102400000;
        $upload_p->exts      = array('jpg','jpeg','bmp','png');
        $upload_p->rootPath  = SAFE_PATH.'Web/Upload/upload_p';
        $info = $upload_p->upload(); 
        
        if (!$info) {
            $this->error($upload_p->getError());
        }else {
            foreach($info as $file){
                $path = $file['savepath'].$file['savename'];
            }
            return '/Upload/upload_p'.$path;
        }
    }

    public function delete_m () {
        $data = new \Admin\Model\SortModel();
        $data->sort_del(I('sort_id'));
        if(w_log(time(),__SELF__,session('user_name'),"delete from ".get_client_ip(),"删除成功")){
            pop('删除成功');
            $this->success();
        }else {
            pop('删除失败，请重试。。。');
            $this->error();
        }
    }

    public function update_m() {
        $this->assign('id', I('sort_id'));
        $this->display('Materials/details_m_update');
    }

    public function update_materials() {
        $data=new \Admin\Model\SortModel();
        $pid = $data->getPid(I('sort_name'));     
        if($data->chapter_upd(I('sort_id'),I('c_name'),I('sort_intro'),$pid)) {
            if(w_log(time(),__SELF__,session('user_name'),"update from ".get_client_ip(),"用户修改成功")) {
                $this->success('用户修改成功');
            }
        }
    }

    /**
     * 视频管理
     */
    public function comment() {
        $video = M('video');
        $count = $video->where(array('tid' => session('user_id')))->count();
        $page = new \Think\Page($count,15);
        $list = $video->field('comment.com_id,video.vid,video.v_name,comment.com_content,comment.com_time,comment.com_status')->table(array('v_comment' => 'comment','v_video' => 'video'))->where(array('tid' => session('user_id')))->where('video.vid = comment.vid')->order('comment.com_time desc')->limit($page->firstRow.','.$page->listRows)->select();
        $show = $page->show();
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->display('Comment/comment');
    }

    /**
     * 查看评论详情
     */
    public function details_com() {
        $com = new \Admin\Model\CommentModel();
        $comment = $com->where(array('com_id' => I('com_id')))->find();
        $this->assign('com_id', $comment['com_id']);
        $this->assign('com_content', $comment['com_content']);
        $this->assign('com_time', $comment['com_time']);
        $this->assign('com_status', $comment['com_status']);
        $this->display('Comment/details_comment');
    }

    /**
     * 删除评论
     */
    public function delete_com() {
        $del = new \Admin\Model\CommentModel();
        if($del->com_del(I('id'))) {
            w_log(time(),__SELF__,session('user_name'),"update from ".get_client_ip(),"用户修改成功");
            $this->success('用户修改成功');
        }
    }

    /**
     * 审核
     */
    public function update_com() {
        $sta = new \Admin\Model\CommentModel();
        if ($sta->update_comm(I('id'),I('sta'))) {
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }

    /**
     * 数据统计
     */
    public function count_t () {
        $video = M('video');
        $ved = M('ved');
        $count = $video->where(array('tid' => session('user_id')))->count();
        $page = new \Think\Page($count,15);
        $list = $video->where(array('tid' => session('user_id')))->select();
        foreach ($list as $k => $arr) {
            $video_count = $ved->where(array('vid' => $arr['vid']))->count();
            $arr['count'] = $video_count;
            $list1[] = $arr;
        }
        $show = $page->show();
        $this->assign('page', $show);
        $this->assign('list', $list1);
        $this->display('Count/count');
    }

    public function details_count() {
        $ved = M('ved');
        $count = $ved->where(array('vid' => I('vid')));
        $this->assign('vid', I('vid'));
        $this->assign('name', I('name'));
        $this->assign('intro', I('intro'));
        $this->assign('time', I('time'));
        $this->assign('status', I('status'));
        $this->display('Count/count_cv');
    }
}