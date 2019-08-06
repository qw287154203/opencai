<?php 
namespace App\Libs;
require_once('obj.class.php');
class ssc extends obj{
	public $result;
	public function __construct($data){
		parent::__construct($data);
		$this->result = $this->results;
		$this->dx();
		$this->lh();

	}
	private function dx(){
		$this->result['dx'] = $this->result['sum'] >= 23 ? '大' : '小';
	}
	private function lh(){
		$this->result['lh1'] = $this->result['num1'] == $this->result['num5'] ? '和' : ($this->result['num1'] > $this->result['num5'] ? '龙' : '虎');

		
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
//            	'turnNum' => '20190324008',
//                     	'turn' => '008',
//                     	'openNum' => '2,4,9,9,2',
//                     	'openTime' => '2019-03-24 02:51:11'
//            ]
// ];
// $ssc = new ssc($data);
// echo '<pre>';
// print_r($ssc->result);
 ?>
