<?php 
namespace App\Libs;
class obj{
	public $results;
	public function __construct($data){
		$this->results['turnNum'] = $data['pre']['turnNum'];
		$this->results['turn'] = $data['pre']['turn'];
		$this->results['openTime'] = $data['pre']['openTime'];
		$data = explode(',',$data['pre']['openNum']);
		$num = 1;
		$this->results['sum'] = 0;
		foreach($data as $v){
			$this->results['num'.$num] = $v;
			$this->results['sum'] += $v;
			$num++;
		}
		$this->results['ds'] = ($this->results['sum'] % 2) == 0 ? '双' : '单';
	}
}
 ?>
