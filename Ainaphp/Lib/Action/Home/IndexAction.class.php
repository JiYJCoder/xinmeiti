<?php
/**
 *
 * IndexAction.class.php (前台首页)
 *
 */
if(!defined("Ainaphp")) exit("Access Denied");
class IndexAction extends BaseAction
{
    public function index()
    {
		$this->assign('bcid',0);//顶级栏目
		$this->assign('ishome','home');
        $this->display();

    }

	function message(){
		$mod = M("message");
		$_POST = get_safe_replace($_POST);
		if(false!==$mod->create()){
			$mod->status = 1;
			$mod->lang = 1;
			$mod->createtime = time();
			$mod->updatetime = time();
			$mod->add();
			$this->success("提交成功");

		}else{
			$this->error("提交失败");
		}
	}

}
?>
