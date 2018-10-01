<?php
namespace Admin\Controller;

use Think\Controller;

class UploadController extends Controller 
{
	/**
	 * 初始化方法
	 */
	public function _initialize() {

	}

	/**
	 * 获取excel中的数据
	 * @param  string $filepath [description]
	 * @param  [type] $sheet    [description]
	 * @return [type]           [description]
	 */
	public function importExcel ($filename,$encode,$file_type) {
        $excel = new \Org\Util\Excel();
        if ($data = $excel->read($filename,$encode,$file_type)) {
            $insert = new \Admin\Model\StudentModel();
            if($insert->insertStd($data)){
                $this->success('1111111111！');
                return true;
            }else {
                $this->error('数据倒入失败。。。');
            }
            
        }else {
            $this->error('数据倒入失败。。。');
        }
    }

    /**
     * 上传excel文件
     */
    public function upload_e() {
        $upload_e = new \Think\Upload();
        $upload_e->maxSize   = 102400000;
        $upload_e->exts      = array('xls','xlsx');
        $upload_e->rootPath  = SAFE_PATH.'Web/Upload/upload_e';
        $info = $upload_e->upload(); 
        
        if (!$info) {
            $this->error($upload_e->getError());
        }else {
            foreach($info as $file){
                $path = $file['savepath'].$file['savename'];
            }
            return SAFE_PATH.'Web/Upload/upload_e'.$path;
        }
    }

    /**
     * 批量添加界面
     */
    public function plenty() {
        $this->display('Student/students');
    }

    /**
     * 上传成功后返回文件名与文件地址
     */
    public function students () {
        $excelName = $this->upload_e();
        if ($this->importExcel($excelName,'',I('suffix'))) {
            echo '1';
        }else {
            echo 'hhhhhhhhhh';
        }
    }
}