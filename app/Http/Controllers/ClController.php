<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ClController extends Controller{
	private $cpId = ['xglhc','jslhc','fflhc','sflhc','cqssc','xyffc','dfssc','sfssc','tjssc','wfssc','xjssc','wfpk10','yfpk10','sfpk10','bjpk10','xyft','gdsyxw','jssyxw','hljsyxw','xjsyxw','shsyxw','fjsyxw','sfsyxw','yfsyxw','wfsyxw','jxsyxw','gdklsf','yfklsf','sfklsf','wfklsf','xnyfk3','sfk3','jsk3','hebk3','gxk3','jlk3','hubk3','ahk3','gzk3','shk3','gsk3','bjk3','fjk3','xyk3','pcdd','yfpcdd','sfpcdd','wfpcdd','qxc','xyqxc','fc3ddpc','yffc3ddpc','sffc3ddpc','wffc3ddpc','pl3','yfpl3','sfpl3','wfpl3'];
	public function cl(Request $request,$id){
		if($request->isMethod('get')){
			$this->istype($id);
			$data = \DB::table($id)->orderBy('id','desc')->first();
			if($data !== null){
				$name = ['xglhc'=>'香港六合彩','jslhc'=>'极速六合彩','fflhc'=>'分分六合彩','sflhc'=>'三分六合彩','cqssc'=>'重庆时时彩','xyffc'=>'幸运分分彩','dfssc'=>'大发时时彩','sfssc'=>'三分时时彩','tjssc'=>'天津时时彩','wfssc'=>'五分时时彩','xjssc'=>'新疆时时彩','wfpk10'=>'五分PK10','yfpk10'=>'急速赛车','sfpk10'=>'三分PK10','bjpk10'=>'北京PK10','xyft'=>'幸运飞艇','gdsyxw'=>'广东11选5','jssyxw'=>'江苏11选5','hljsyxw'=>'黑龙江11选5','xjsyxw'=>'新疆11选5','shsyxw'=>'上海11选5','fjsyxw'=>'福建11选5','sfsyxw'=>'三分11选5','yfsyxw'=>'一分11选5','wfsyxw'=>'五分11选5','jxsyxw'=>'江西11选5','gdklsf'=>'广东快乐十分','yfklsf'=>'一分快乐十分','sfklsf'=>'三分快乐十分','wfklsf'=>'五分快乐十分','xnyfk3'=>'悉尼一分快三','sfk3'=>'三分快三','jsk3'=>'江苏骰宝(快3)','hebk3'=>'河北快三','gxk3'=>'广西快三','jlk3'=>'吉林快三','hubk3'=>'湖北快三','ahk3'=>'安徽快三','gzk3'=>'贵州快三','shk3'=>'上海快三','gsk3'=>'甘肃快三','bjk3'=>'北京快三','fjk3'=>'福建快三','xyk3'=>'幸运快三','pcdd'=>'PC蛋蛋','yfpcdd'=>'一分PC蛋蛋','sfpcdd'=>'三分PC蛋蛋','wfpcdd'=>'五分PC蛋蛋','qxc'=>'七星彩','xyqxc'=>'幸运七星彩','fc3ddpc'=>'福彩3D','yffc3ddpc'=>'一分福彩3D','sffc3ddpc'=>'三分福彩3D','wffc3ddpc'=>'五分福彩3D','pl3'=>'排列3','yfpl3'=>'一分排列3','sfpl3'=>'三分排列3','wfpl3'=>'五分排列3'];
				$result['tips'] = $this->dodata([$data])['tips'];
				$result['id'] = $id;
				$result['name'] = $name[$id];
				echo json_encode($result);
			}else{
				echo 'null';
			}
		}elseif($request->isMethod('post')){
			$result = [];
			$a = 0;
			foreach($request->all() as $v){
				$this->istype($v);
				$data = \DB::table($v)->orderBy('id','desc')->first();
				if($data !== null){
					$name = ['xglhc'=>'香港六合彩','jslhc'=>'极速六合彩','fflhc'=>'分分六合彩','sflhc'=>'三分六合彩','cqssc'=>'重庆时时彩','xyffc'=>'幸运分分彩','dfssc'=>'大发时时彩','sfssc'=>'三分时时彩','tjssc'=>'天津时时彩','wfssc'=>'五分时时彩','xjssc'=>'新疆时时彩','wfpk10'=>'五分PK10','yfpk10'=>'急速赛车','sfpk10'=>'三分PK10','bjpk10'=>'北京PK10','xyft'=>'幸运飞艇','gdsyxw'=>'广东11选5','jssyxw'=>'江苏11选5','hljsyxw'=>'黑龙江11选5','xjsyxw'=>'新疆11选5','shsyxw'=>'上海11选5','fjsyxw'=>'福建11选5','sfsyxw'=>'三分11选5','yfsyxw'=>'一分11选5','wfsyxw'=>'五分11选5','jxsyxw'=>'江西11选5','gdklsf'=>'广东快乐十分','yfklsf'=>'一分快乐十分','sfklsf'=>'三分快乐十分','wfklsf'=>'五分快乐十分','xnyfk3'=>'悉尼一分快三','sfk3'=>'三分快三','jsk3'=>'江苏骰宝(快3)','hebk3'=>'河北快三','gxk3'=>'广西快三','jlk3'=>'吉林快三','hubk3'=>'湖北快三','ahk3'=>'安徽快三','gzk3'=>'贵州快三','shk3'=>'上海快三','gsk3'=>'甘肃快三','bjk3'=>'北京快三','fjk3'=>'福建快三','xyk3'=>'幸运快三','pcdd'=>'PC蛋蛋','yfpcdd'=>'一分PC蛋蛋','sfpcdd'=>'三分PC蛋蛋','wfpcdd'=>'五分PC蛋蛋','qxc'=>'七星彩','xyqxc'=>'幸运七星彩','fc3ddpc'=>'福彩3D','yffc3ddpc'=>'一分福彩3D','sffc3ddpc'=>'三分福彩3D','wffc3ddpc'=>'五分福彩3D','pl3'=>'排列3','yfpl3'=>'一分排列3','sfpl3'=>'三分排列3','wfpl3'=>'五分排列3'];
					$result[$a]['tips'] = $this->dodata([$data])['tips'];
					$result[$a]['id'] = $v;
					$result[$a]['name'] = $name[$v];
					$a++;
				}else{
					echo 'null';
				}

			}
			echo json_encode($result);
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
		$name = ['num1'=>'号码1 ','num2'=>'号码2 ','num3'=>'号码3 ','num4'=>'号码4 ','num5'=>'号码5 ','num6'=>'号码6 ','num7'=>'号码7 ','num8'=>'号码8 ','num9'=>'号码9 ','num10'=>'号码10 ','lh1'=>'龙虎1 ','lh2'=>'龙虎2 ','lh3'=>'龙虎3 ','lh4'=>'龙虎4 ','lh5'=>'龙虎5 ','sum'=>'和 ','dx'=>'大小 ','ds'=>'单双 ','qs'=>'前三 ','zs'=>'中三 ','hs'=>'后三 ','wdx'=>'尾大小 ','sds'=>'和单双 ','sdx'=>'和大小','tds'=>'特码单双 ','tdx'=>'特码大小 ','sb'=>'色波 '];
		foreach($data as $k=>$v){
			$count = intval((count($v)-4)/2);
			$num = array_splice($v,0,$count+4);
			array_shift($num);
			if($k == 0){
				$lottery['current'] = $num;
				$cldata = $v;
			}
			$lottery['history'][] = $num;
		}
		
		foreach($cldata as $k=>$v){
			if($v != 0){
				$key = substr($k,2);
				$a = $v+1;
				$lottery['tips'][] = $name[$key].'连续 '.$a.' 期为：'.$lottery['current'][$key];
			}
		}
		$lottery['tips'] = $lottery['tips'] ?? ['暂无数据'];
		return $lottery;
	}
}
 ?>
