<?php namespace Admin\Controller;
use Think\Controller;
//公告控制器
class CommonController extends Controller{
	public function __construct(){
		
	 if(!isset($_SESSION['id'])){
       	
		$this->redirect('Login/index');
       }
	}
	
	
}


 ?>
