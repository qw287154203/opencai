<?php 
namespace App\Libs;
require_once('obj.class.php');
class k3 extends obj{
	public $result;
	public function __construct($data){
		parent::__construct($data);
		$this->result = $this->results;
		$this->dxds();
	}
	private function dxds(){
		if(($this->result['num1'] == $this->result['num2']) and ($this->result['num2'] == $this->result['num3'])){
			$this->result['ds'] = '通吃';
			$this->result['dx'] = '通吃';
		}else{
			$this->result['ds'] = ($this->result['sum'] % 2) == 0 ? '双' : '单';
			$this->result['dx'] = $this->result['sum'] > 10 ? '大' : '小';
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
//            	'turnNum' => '20190324023',
//                     	'turn' => '023',
//                     	'openNum' => '5,5,5',
//                     	'openTime' => '2019-03-24 16:10:35'
//            ]
// ];
// $ssc = new k3($data);
// echo '<pre>';
// print_r($ssc->result);
 ?>
