<?php
// +----------------------------------------------------------------------
// | Excel Class
// +----------------------------------------------------------------------

namespace Org\Util;

class Excel {
  public function __construct() {
		Vendor("Excel.PHPExcel");//引入phpexcel类(注意你自己的路径)
		Vendor("Excel.PHPExcel.IOFactory");
  }
  public function read($filename,$encode,$file_type){

	        if(strtolower ( $file_type )=='xls')//判断excel表类型为2003还是2007
	        {
	        	Vendor("Excel.PHPExcel.Reader.Excel5"); 
	        	$objReader = \PHPExcel_IOFactory::createReader('Excel5');
	        }elseif(strtolower ( $file_type )=='xlsx')
	        {
	        	Vendor("Excel.PHPExcel.Reader.Excel2007"); 
	        	$objReader = \PHPExcel_IOFactory::createReader('Excel2007');
	        }
	        $objReader->setReadDataOnly(true);
	        $objPHPExcel = $objReader->load($filename);
	        $objWorksheet = $objPHPExcel->getActiveSheet();
	        $highestRow = $objWorksheet->getHighestRow();
	        $highestColumn = $objWorksheet->getHighestColumn();
	        $highestColumnIndex = \PHPExcel_Cell::columnIndexFromString($highestColumn);
	        $excelData = array();
	        for ($row = 1; $row <= $highestRow; $row++) {
	        	for ($col = 0; $col < $highestColumnIndex; $col++) {
	        		$excelData[$row][] =(string)$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
	        	}
	        }
	        return $excelData;
	    }

	public function ex_stud($filename,$data,$user) {
		//导入模版ex_stud表
		$objReader = \PHPExcel_IOFactory::createReader('Excel5');
		$objPHPExcel = $objReader->load(REP_PATH."/Excel/R_ex_stud.xls");

        $m_user=M('user');
        $m_config=M('config');    
        $m_enroll=M('enroll'); 
        $major=$m_enroll->field('lqzydm,lqzymc')->group('lqzydm,lqzymc')->select();
        foreach ($major as $k=>$v) {  
            $majorlist[$v['lqzydm']]=$v['lqzymc'];
        }              
        $schoollist=$m_config->where(array('fl'=>'DICT_jiaoxuexibu'))->field('ms,z')->select();

        foreach ($schoollist as $k=>$v) {  

        	$user['bm']=$v['z'];
	        $g_user=$m_user->where($user)->select();

			//复制sheet1表
			$objClonedWorksheet = clone $objPHPExcel->getSheetByName('Sheet1');
			$objClonedWorksheet->setTitle('Sheet4');
			$objPHPExcel->addSheet($objClonedWorksheet);

			//sheet4的表头
			$objActSheet = $objPHPExcel->getSheetByName('Sheet4');
			$objActSheet->setCellValue('A2','学院：'.$v['ms']);
			$objActSheet->setCellValue('D2','导出时间：'.date('Y-m-d H:i:s'));
			
			//sheet4中的数据	
			$baseRow = 4; //避免头信息被覆盖
			foreach ( $g_user as $r => $dataRow ) {
				$row = $baseRow + $r;
				$objActSheet->insertNewRowBefore($row, 1);
				//将数据填充到相对应的位置
				$objActSheet->setCellValue('A'.$row,$r+1); 
				$objActSheet->setCellValue('B'.$row,$dataRow['dlm']);
				$objActSheet->setCellValue('C'.$row,$dataRow['xm']); 
				$objActSheet->setCellValue('D'.$row,$majorlist[$dataRow['zc']]); 
				$objActSheet->setCellValue('E'.$row,$dataRow['sj']); 			
			}

			//sheet4改名
			$objPHPExcel->getSheetByName('Sheet4')->setTitle($v['ms']);	
		}
		//删除sheet1
		$sheetIndex = $objPHPExcel->getIndex($objPHPExcel-> getSheetByName('Sheet1'));
		$objPHPExcel->removeSheetByIndex($sheetIndex);

		//输出excel
		header ( 'Content-Type: application/vnd.ms-excel' );
		header ( 'Content-Disposition: attachment;filename="' . $filename . '"' ); 
		header ( 'Cache-Control: max-age=0' );		
		$objWriter = \PHPExcel_IOFactory::createWriter ( $objPHPExcel, 'Excel5' ); 
		$objWriter->save ( 'php://output' );
	}	

}
