<?php 
namespace App\Libs;
require_once('obj.class.php');
class klc extends obj{
	public $result;
	public function __construct($data){
		parent::__construct($data);
		$this->result = $this->results;
		$this->dx();
		$this->wdx();
		$this->lh();

	}
	private function dx(){
		$this->result['dx'] = $this->result['sum'] == 84 ? '和' : ($this->result['sum'] > 84 ? '大' : '小');
	}
	private function wdx(){
		$g = $this->result['sum'] - (intval($this->result['sum']/10)*10);
		$this->result['wdx'] = $g > 4 ? '尾大' : '尾小';
	}
	private function lh(){
		$j = 8;
		for($i=1;$i<=4;$i++){
			$this->result['lh'.$i] = $this->result['num'.$i] > $this->result['num'.$j] ? '龙' : '虎';
			$j--;
		}
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
//            	'turnNum' => '2019032342',
//                     	'turn' => '42',
//                     	'openNum' => '10,03,01,19,08,05,20,18',
//                     	'openTime' => '2019-03-23 23:01:39'
//            ]
// ];
// $ssc = new klc($data);
// echo '<pre>';
// print_r($ssc->result);
 ?>
