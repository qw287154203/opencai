<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class TrendController extends Controller{
	public function index(){
		return view('zoushitb');
	}
	public function getdata(Request $request,$id){
		$data = \DB::table($id)->orderBy('id','desc')->limit('20')->get()->toArray();
		if($data !== null){
			// echo '<pre>';print_r($this->dodata($data));die;
			echo json_encode($this->dodata($data));
		}else{
			echo 'null';
		}
	}
	private function istype($id){
		if(array_search($id,$this->cpId) === false){
			abort(404);
			die;
		}
	}
	private function dodata($data){
		foreach($data as $v){
			$ss = 1;
			while(@$v['num'.$ss] != null){
				$number[$ss]['num'][] = $v['num'.$ss];
				$number[$ss]['turnNum'][] = substr($v['turnNum'],-4);
				$ss++;
			}
		}
		return $number;
	}
}
 ?>
