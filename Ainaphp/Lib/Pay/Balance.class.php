<?php
/**
 * 
 * Balance.php (余额支付模块)
 *
 */
class Balance extends Think {
	public $config = array()  ;
    public function __construct($config=array()) {
         $this->config = $config;
    }
	public function setup(){

		$modules['pay_name']    = L('Balance_pay_name');   
		$modules['pay_code']    = 'Balance';
		$modules['pay_desc']    = L('Balance_pay_desc');
		$modules['is_cod']  = '0';
		$modules['is_online']  = '1';
		$modules['author']  = 'Ainaphp';
		$modules['website'] = 'http://www.ainatec.com';
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