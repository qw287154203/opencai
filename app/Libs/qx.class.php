<?php 
namespace App\Libs;
require_once('obj.class.php');
class qx extends obj{
	public $result;
	public function __construct($data){
		parent::__construct($data);
		$this->result = $this->results;
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
//            	'turnNum' => '2019032',
//                     	'turn' => '032',
//                     	'openNum' => '2,9,0,2',
//                     	'openTime' => '2019-03-22 20:34:00'
//            ]
// ];
// $ssc = new qx($data);
// echo '<pre>';
// print_r($ssc->result);
 ?>
