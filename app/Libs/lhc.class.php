<?php 
namespace App\Libs;
require_once('obj.class.php');
class lhc extends obj{
	public $result;
	public function __construct($data){
		parent::__construct($data);
		$this->result = $this->results;
		unset($this->result['ds']);
		$this->result['sds'] = $this->results['ds'];
		$this->sdx();
		$this->tds();
		$this->tdx();
		$this->sb();
	}
	private function sdx(){
		$this->result['sdx'] = $this->result['sum'] > 174 ? '大' : '小';
	}
	private function tds(){
		$this->result['tds'] = ($this->result['num7'] % 2) == 0 ? '双' : '单';;
	}
	private function tdx(){
		$this->result['tdx'] = $this->result['num7'] > 24 ? '大' : '小';
	}
	private function sb(){
		/*和局*/
		// $red = ['01','02','07','08','12','13','18','19','23','24','29','30','34','35','40','45','46'];
		// $blue = ['03','04','09','10','14','15','20','25','26','31','36','37','41','42','47','48'];
		// $green = ['05','06','11','16','17','21','22','27','28','32','33','38','39','43','44','49'];
		// $arr = ['红'=>0,'蓝'=>0,'绿'=>0];
		// for($i=1;$i<=6;$i++){
		// 	if(array_search($this->result['num'.$i],$red) !== false){
		// 		$arr['红'] += 1;
		// 	}elseif(array_search($this->result['num'.$i],$blue) !== false){
		// 		$arr['蓝'] += 1;
		// 	}else{
		// 		$arr['绿'] += 1;
		// 	}
		// }
		
		// asort($arr,SORT_NUMERIC);
		// $flip = array_flip($arr);
		// $e = array_slice($arr,1,1);
		// $e = array_shift($e);
		// $s = array_slice($arr,2,1);
		// $s = array_shift($s);
		// //反转数组长度如果小于本身长度表示有一样的值 并且 排序过后最后2个数组的值如果一样则表示是和局  否则 取最大的键值即是色波
		// $this->result['sb'] = (count($arr) > count($flip)) && ($s == $e) ? '和局' : end($flip);
		/*没有和局,取特码色波*/
		$tsb = [
			'01'=>'红','02'=>'红','07'=>'红','08'=>'红','12'=>'红','13'=>'红','18'=>'红','19'=>'红','23'=>'红','24'=>'红','29'=>'红','30'=>'红','34'=>'红','35'=>'红','40'=>'红','45'=>'红','46'=>'红',
			'03'=>'蓝','04'=>'蓝','09'=>'蓝','10'=>'蓝','14'=>'蓝','15'=>'蓝','20'=>'蓝','25'=>'蓝','26'=>'蓝','31'=>'蓝','36'=>'蓝','37'=>'蓝','41'=>'蓝','42'=>'蓝','47'=>'蓝','48'=>'蓝',
			'05'=>'绿','06'=>'绿','11'=>'绿','16'=>'绿','17'=>'绿','21'=>'绿','22'=>'绿','27'=>'绿','28'=>'绿','32'=>'绿','33'=>'绿','38'=>'绿','39'=>'绿','43'=>'绿','44'=>'绿','49'=>'绿'
		];
		$this->result['sb'] = $tsb[$this->result['num7']];

	}
}
// $data = [
// 	'cur'=>[
// 		'turnNum' => '20190324021',
//                     	'turn' => '021',
//                     	'status' => '0',
//                     	'closeTime' => '1553363095000'
//            ],
//            'pre'=>[
//            	'turnNum' => '2019034',
//                     	'turn' => '034',
//                     	'openNum' => '13,14,39,44,49,30,45',
//                     	'openTime' => '2019-03-23 21:34:53'
//            ]
// ];
// $ssc = new lhc($data);
// echo '<pre>';
// print_r($ssc->result);
 ?>
