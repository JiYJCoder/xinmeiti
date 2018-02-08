<?php


class Page_home extends Think {
    // 起始行数
    public $firstRow	;
    // 列表每页显示行数
    public $listRows	;
    // 页数跳转时要带的参数
    public $parameter  ;
    // 分页总页面数
    public $totalPages  ;
    // 总行数
    public $totalRows  ;
    // 当前页数
    public $nowPage    ;
    // 分页的栏的总页数
    public $coolPages   ;
    // 分页栏每页显示的页数
    public $rollPage   ;
	// 分页url定制
	public $urlrule;


    /**
     +----------------------------------------------------------
     * 架构函数
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param array $totalRows  总的记录数
     * @param array $listRows  每页显示记录数
     * @param array $parameter  分页跳转的参数
     +----------------------------------------------------------
     */
    public function __construct($totalRows,$listRows,$p='') {
        $this->totalRows = $totalRows;
        $this->parameter = $parameter;
        $this->rollPage = C('PAGE_ROLLPAGE') ? C('PAGE_ROLLPAGE') : 2;
        $this->listRows = !empty($listRows)?$listRows:C('PAGE_LISTROWS');
        $this->totalPages = ceil($this->totalRows/$this->listRows);     //总页数
		if (!define('PAGESTOTAL')) define('PAGESTOTAL', $this->totalPages);
        $this->coolPages  = ceil($this->totalPages/$this->rollPage);
		if($p){
			$this->nowPage =$p;
			}else{
			$this->nowPage  = !empty($_GET[C('VAR_PAGE')])?intval($_GET[C('VAR_PAGE')]):1;
		}
        if(!empty($this->totalPages) && $this->nowPage>$this->totalPages) {
            $this->nowPage = $this->totalPages;
        }
        $this->firstRow = $this->listRows*($this->nowPage-1);
    }

function is_mobile() {
   $user_agent = $_SERVER['HTTP_USER_AGENT'];
   $mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
   $is_mobile = false;
   foreach ($mobile_agents as $device) {
    if (stristr($user_agent, $device)) {
     $is_mobile = true;
     break;
    }
   }
   return $is_mobile;
 }

	public function  show(){

		if($this->totalRows == 0 OR $this->listRows == 0 OR $this->totalPages <= 1){
			return '';
		}
		$urlrule =  str_replace('%7B%24page%7D','{$page}',$this->urlrule); //urldecode
		if(!$urlrule){
			$p = C('VAR_PAGE');
			$nowCoolPage      = ceil($this->nowPage/$this->rollPage);
			$url  =  $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?").$this->parameter;
			$parse = parse_url($url);
			if(isset($parse['query'])) {
				parse_str($parse['query'],$params);
				unset($params[$p]);
				$urlrule   =  $parse['path'].'?'.http_build_query($params);
			}
			$urlrule = $urlrule."&".$p.'={$page}';
		}


		$pre_page = $this->nowPage-1;
		$next_page = $this->nowPage +1;

		if($this->nowPage >=$this->totalPages){
			$next_page =  $this->nowPage = $this->totalPages;
		}
		if($this->nowPage <= 1) {
			$pre_page = $this->nowPage = 1;
		}

		if(!is_mobile()){
		  $output = '<div class="ajaxpage">';
		  $output .= '<a href="'.$this->pageurl($urlrule, $next_page,$this->parameter).'" title="" style="display:none;" id="page_ajax"></a>';
		  $output .= '<a href="'.$this->pageurl($urlrule, $this->nowPage ,$this->parameter).'" title="" style="display:none;" id="page_ajax_now"></a>';
		  $output .='</div>';
		}else{
		$output = '';
		$output .= '<a href="'.$this->pageurl($urlrule, $pre_page,$this->parameter).'">上一页</a>';
		$show_nums = $this->rollPage*2+1;// 显示页码的个数

		if($this->nowPage > 3 && $this->totalPages > 4) {
			$output .='<a href="'.$this->pageurl($urlrule,1,$this->parameter).'">1</a>';
		}

		if($this->totalPages <= $show_nums){
			for($i = 1;$i<=$this->totalPages;$i++){
				if($i == $this->nowPage){
					$output .= '<span>'.$i.'</span>';
				}else{
					$output .= '<a href="'.$this->pageurl($urlrule,$i,$this->parameter).'">'.$i.'</a>';
				}
			}
		}else{
			if($this->nowPage < (1+$this->rollPage)){
				for($i = 1;$i<=$show_nums;$i++){
					if($i == $this->nowPage){
						$output .=  '<span>'.$i.'</span>';
					}else{
						$output .= '<a href="'.$this->pageurl($urlrule,$i,$this->parameter).'">'.$i.'</a>';
					}
				}
			}else if($this->nowPage >= ($this->totalPages - $this->rollPage)){
				for($i = $this->totalPages - $show_nums ; $i <= $this->totalPages ; $i++){
					if($i == $this->nowPage){
						$output .=  '<span>'.$i.'</span>';
					}else{
						$output .= '<a href="'.$this->pageurl($urlrule,$i,$this->parameter).'">'.$i.'</a>';
					}
				}
			}else{
				$start_page = $this->nowPage - $this->rollPage;
				$end_page = $this->nowPage + $this->rollPage;
				for($i = $start_page ; $i<=$end_page ; $i++){
					if($i == $this->nowPage){
						$output .=  '<span>'.$i.'</span>';
					}else{
						$output .= '<a href="'.$this->pageurl($urlrule,$i,$this->parameter).'">'.$i.'</a>';
					}
				}
			}
		}


        if($this->nowPage != $this->totalPages && $this->nowPage < $this->totalPages - 3){
	          $output .='<span class="omit">...</span>';
		      $output .='<a href="'.$this->pageurl($urlrule,$this->totalPages,$this->parameter).'">'.$this->totalPages.'</a>';
        }
		$output .='<a href="'.$this->pageurl($urlrule,$next_page,$this->parameter).'">下一页</a>';
		}
		return $output;
	}

	public function pageurl($urlrule, $page, $array = array())
	{
		@extract($array, EXTR_SKIP);
		if(is_array($urlrule))
		{
			//$urlrules = explode('|', $urlrule);
			$urlrule = $page < 2 ? $urlrule[0] : $urlrule[1];
		}
		$url = str_replace('{$page}', $page, $urlrule);
		return $url;
	}

}
?>
