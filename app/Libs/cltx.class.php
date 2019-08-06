<?php 
namespace App\Libs;
class cltx{
	public $result;
	public function __construct($result,$data){
		$this->result = $result;
		$i = 1;
		while(!empty($result['num'.$i])){
			$this->result['clnum'.$i] = $result['num'.$i] == $data['num'.$i] ? $data['clnum'.$i]+1 : 0;
			$i++;
		}
		$i = 1;
		while(!empty($result['lh'.$i])){
			$this->result['cllh'.$i] = $result['lh'.$i] == $data['lh'.$i] ? $data['cllh'.$i]+1 : 0;
			$i++;
		}
		if(!empty($result['sum'])){
			$this->result['clsum'] = $result['sum'] == $data['sum'] ? $data['clsum']+1 : 0;
		}
		if(!empty($result['dx'])){
			$this->result['cldx'] = $result['dx'] == $data['dx'] ? $data['cldx']+1 : 0;
		}
		if(!empty($result['ds'])){
			$this->result['clds'] = $result['ds'] == $data['ds'] ? $data['clds']+1 : 0;
		}
		if(!empty($result['qs'])){
			$this->result['clqs'] = $result['qs'] == $data['qs'] ? $data['clqs']+1 : 0;
		}
		if(!empty($result['zs'])){
			$this->result['clzs'] = $result['zs'] == $data['zs'] ? $data['clzs']+1 : 0;
		}
		if(!empty($result['hs'])){
			$this->result['clhs'] = $result['hs'] == $data['hs'] ? $data['clhs']+1 : 0;
		}
		if(!empty($result['wdx'])){
			$this->result['clwdx'] = $result['wdx'] == $data['wdx'] ? $data['clwdx']+1 : 0;
		}
		if(!empty($result['sds'])){
			$this->result['clsds'] = $result['sds'] == $data['sds'] ? $data['clsds']+1 : 0;
		}
		if(!empty($result['sdx'])){
			$this->result['clsdx'] = $result['sdx'] == $data['sdx'] ? $data['clsdx']+1 : 0;
		}
		if(!empty($result['sb'])){
			$this->result['clsb'] = $result['sb'] == $data['sb'] ? $data['clsb']+1 : 0;
		}
		if(!empty($result['tds'])){
			$this->result['cltds'] = $result['tds'] == $data['tds'] ? $data['cltds']+1 : 0;
		}
		if(!empty($result['tdx'])){
			$this->result['cltdx'] = $result['tdx'] == $data['tdx'] ? $data['cltdx']+1 : 0;
		}
	}
}
// $result = [
// 	'turnNum'=>'201903250224',
// 	'turn'=>'224',
// 	'openTime'=>'2019-03-25 03:44:00',
// 	'num1'=>'02',
// 	'num2'=>'08',
// 	'num3'=>'04',
// 	'num4'=>'05',
// 	'num5'=>'10',
// 	'num6'=>'03',
// 	'num7'=>'09',
// 	'num8'=>'06',
// 	'num9'=>'01',
// 	'num10'=>'07',
// 	'sum'=>'10',
// 	'dx'=>'小',
// 	'ds'=>'双',
// 	'lh1'=>'虎',
// 	'lh2'=>'龙',
// 	'lh3'=>'虎',
// 	'lh4'=>'虎',
// 	'lh5'=>'龙'
// ];
// $data = [
// 	'turnNum'=>'201903250223',
// 	'turn'=>'223',
// 	'openTime'=>'2019-03-25 03:43:00',
// 	'num1'=>'07',
// 	'num2'=>'10',
// 	'num3'=>'03',
// 	'num4'=>'05',
// 	'num5'=>'04',
// 	'num6'=>'08',
// 	'num7'=>'06',
// 	'num8'=>'02',
// 	'num9'=>'01',
// 	'num10'=>'09',
// 	'sum'=>'17',
// 	'dx'=>'大',
// 	'ds'=>'单',
// 	'lh1'=>'虎',
// 	'lh2'=>'龙',
// 	'lh3'=>'虎',
// 	'lh4'=>'龙',
// 	'lh5'=>'虎',
// 	'clnum1'=>'0',
// 	'clnum2'=>'0',
// 	'clnum3'=>'0',
// 	'clnum4'=>'0',
// 	'clnum5'=>'0',
// 	'clnum6'=>'0',
// 	'clnum7'=>'0',
// 	'clnum8'=>'0',
// 	'clnum9'=>'0',
// 	'clnum10'=>'0',
// 	'clsum'=>'0',
// 	'cldx'=>'0',
// 	'clds'=>'0',
// 	'cllh1'=>'0',
// 	'cllh2'=>'0',
// 	'cllh3'=>'0',
// 	'cllh4'=>'0',
// 	'cllh5'=>'0'
// ];
// $a = new cltx($result,$data);
// echo '<pre>';
// print_r($a->result);
 ?>
