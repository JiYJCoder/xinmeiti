<?php
/**
 *
 * Bank.php (银行汇款支付模块)
 *
 */
class Bank extends Think {
	public $config = array()  ;
    public function __construct($config=array()) {
         $this->config = $config;
    }
	public function setup(){

		$modules['pay_name']    = L('Bank_pay_name');
		$modules['pay_code']    = 'Bank';
		$modules['pay_desc']    = L('Bank_pay_desc');
		$modules['is_cod']  = '0';
		$modules['is_online']  = '1';
		$modules['author']  = 'Ainaphp';
		$modules['website'] = '';
		$modules['version'] = '1.0.0';
		$modules['config']  = array();

		return $modules;
	}

	public function get_code(){
		return;
	}
	public function respond()
    {
		return;
	}
}
?>
