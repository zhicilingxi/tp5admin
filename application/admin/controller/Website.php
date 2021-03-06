<?php
namespace app\admin\controller;

use app\admin\model\Settings_module;
use think\Request;
use think\Db;



class Website extends Base
{
	public function _initialize()
	{
		parent::_initialize();
	}

	public function edit()
	{
		$data = array();
		$module = array();
		$request = Request::instance();
		$data = $request->param();
		$opt = isset($data['opt'])?$data['opt']:0;
		$id = isset($data['id'])?$data['id']:1;
		$Settings_module= new Settings_module;
		if(!empty($opt) && $opt=='save'){
			//保存
			$datas = array();
			$datas = $data['data'];
			if($id>0){
				//update
				Db::name('website')->where(array('id'=>$id))->update($datas);
            	$this->success('修改成功', 'admin/article/index');
			}else{
				//insert
				Db::name('website')->insert($datas);
            	$this->success('新增成功', 'admin/article/index');
			}
			exit;
		}
	
		if($id>0){
			$module = Db::name('website')->where(array('id'=>$id))->find();
			//$module = Settings_module::get(array('id'=>$id));
		}
		$data['module'] = $module;
		return $this->fetch('/base',['_view'=>'website/edit','data'=>$data]);
	}
	
}
