<?php 
namespace App\Libs;
require_once('obj.class.php');
class pcdd extends obj{
	public $result;
	public function __construct($data){
		parent::__construct($data);
		$this->result = $this->results;
		$this->dx();
	}
	private function dx(){
		$this->result['dx'] = $this->result['sum'] > 13 ? '大' : '小';
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
//            	'turnNum' => '942794',
//                     	'turn' => '942794',
//                     	'openNum' => '9,4,4',
//                     	'openTime' => '2019-03-24 16:15:00'
//            ]
// ];
// $ssc = new pcdd($data);
// echo '<pre>';
// print_r($ssc->result);
 ?>
