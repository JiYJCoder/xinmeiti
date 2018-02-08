<?php

if(!defined("Ainaphp")) exit("Access Denied");
class LogAction extends  AdminbaseAction {
    function _initialize()
    {
		parent::_initialize();
    }
	function delete(){
		$day=intval($_GET['day']);
		if($day==1){
			$time = time()-60*60*24*30;
		}elseif($day==2){
			$time =  time()-60*60*24*90;
		}elseif($day==3){
			$time = time();
		}else{
			$this->error (L('do_empty'));
		}

		M(MODULE_NAME)->where("time < $time")->delete();
		$this->success(L('delete_ok'));

	}

}
