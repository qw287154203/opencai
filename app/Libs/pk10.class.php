<?php
namespace App\Libs; 
require_once('obj.class.php');
class pk10 extends obj{
	public $result;
	public function __construct($data){
		parent::__construct($data);
		$this->result = $this->results;
		unset($this->result['sum']);
		unset($this->result['ds']);
		$this->sum();
		$this->ds();
		$this->dx();
		$this->lh();
	}
	private function sum(){
		$this->result['sum'] = $this->result['num1']+$this->result['num2'];
	}
	private function dx(){
		$this->result['dx'] = $this->result['sum'] >= 12 ? '大' : '小';
	}
	private function ds(){
		$this->result['ds'] = ($this->result['sum'] % 2) == 0 ? '双' : '单';
	}
	private function lh(){
		$j = 10;
		for($i=1;$i<=5;$i++){
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
//            	'turnNum' => '20190324020',
//                     	'turn' => '020',
//                     	'openNum' => '04,05,01,07,09,02,08,10,03,06',
//                     	'openTime' => '2019-03-24 01:40:01'
//            ]
// ];
// $pk = new pk10($data);
// echo '<pre>';
// print_r($pk->result);
 ?>
