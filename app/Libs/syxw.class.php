<?php 
namespace App\Libs;
require_once('obj.class.php');
class syxw extends obj{
	public $result;
	public function __construct($data){
		parent::__construct($data);
		$this->result = $this->results;
		$this->dx();
		$this->lh();
		$this->qs();
		$this->zs();
		$this->hs();
	}
	private function dx(){
		$this->result['dx'] = $this->result['sum'] == 30 ? '和' : ($this->result['sum'] > 30 ? '大' : '小');
	}
	private function lh(){
		$this->result['lh1'] = $this->result['num1'] > $this->result['num5'] ? '龙' : '虎';
	}
	private function qs(){
		$arr = [$this->result['num1'],$this->result['num2'],$this->result['num3']];
		sort($arr,SORT_NUMERIC);
		if(($arr[0]+1 == $arr[1]) and ($arr[1]+1 == $arr[2])){
			$str = '顺子';
		}elseif(($arr[0]+1 == $arr[1]) or ($arr[1]+1 == $arr[2])){
			$str = '半顺';
		}else{
			$str = '杂六';
		}
		$this->result['qs'] = $str;
	}	
	private function zs(){
		$arr = [$this->result['num2'],$this->result['num3'],$this->result['num4']];
		sort($arr,SORT_NUMERIC);
		if(($arr[0]+1 == $arr[1]) and ($arr[1]+1 == $arr[2])){
			$str = '顺子';
		}elseif(($arr[0]+1 == $arr[1]) or ($arr[1]+1 == $arr[2])){
			$str = '半顺';
		}else{
			$str = '杂六';
		}
		$this->result['zs'] = $str;
	}	
	private function hs(){
		$arr = [$this->result['num3'],$this->result['num4'],$this->result['num5']];
		sort($arr,SORT_NUMERIC);
		if(($arr[0]+1 == $arr[1]) and ($arr[1]+1 == $arr[2])){
			$str = '顺子';
		}elseif(($arr[0]+1 == $arr[1]) or ($arr[1]+1 == $arr[2])){
			$str = '半顺';
		}else{
			$str = '杂六';
		}
		$this->result['hs'] = $str;
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
//            	'turnNum' => '20190323042',
//                     	'turn' => '042',
//                     	'openNum' => '05,04,06,03,01',
//                     	'openTime' => '2019-03-23 23:11:26'
//            ]
// ];
// $ssc = new syxw($data);
// echo '<pre>';
// print_r($ssc->result);
 ?>
