<?php namespace Admin\Controller;
use Think\Controller;
//分类控制器
class CategoryController extends CommonController {
	 
	public  function index(){
		
		 $category = D('category');
		// 实例化Data数据对象  date 是你的表名
	
		  $count = $category->count();// 查询满足要求的总记录数 $map表示查询条件
		  $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数
		 $Page->setConfig('header','篇记录');
		 $Page->setConfig('prev','上一页');
		 $Page->setConfig('next','下一页');
		 $Page->setConfig('first','第一页');
		 $Page->setConfig('last','最后一页');
		
		  $show = $Page->show();// 分页显示输出
		////     进行分页数据查询
		  $list = $category->order('cid')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
		  $this->assign('list',$list);// 赋值数据集

		  $this->assign('page',$show);// 赋值分页输出
		
		// 输出模板
		$this->display();
		
	}
	public function add(){
		$model = D('category');
		if(IS_POST){
		   if($model->create()){
		   	   $model->add();
			   $this->success('添加成功',U('Category/index'));
			 
		   }else{
		   	
			  $this->error($model->getError());
		   }
			
		}
	   	$type = D('type');
		$typeData = $type->select();
//		p($typeData);
		$this->assign('typeData',$typeData);
		
	   $this->display();
	 
	}
	
}






 ?>