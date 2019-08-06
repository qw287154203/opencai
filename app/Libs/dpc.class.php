<?php 
namespace App\Libs;
require_once('obj.class.php');
class dpc extends obj{
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
//            	'turnNum' => '2019075',
//                     	'turn' => '075',
//                     	'openNum' => '0,12,2',
//                     	'openTime' => '2019-03-23 21:18:48'
//            ]
// ];
// $ssc = new dpc($data);
// echo '<pre>';
// print_r($ssc->result);
 ?>
