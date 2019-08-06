<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libs\dpc;
use App\Libs\k3;
use App\Libs\klc;
use App\Libs\lhc;
use App\Libs\pcdd;
use App\Libs\pk10;
use App\Libs\qx;
use App\Libs\ssc;
use App\Libs\syxw;
use App\Libs\cltx;
class GetdataController extends Controller{
	public function index(Request $request,$time=null){
		$time = $time ?? '000';
		is_int($time) ? $time : '000';
		$time = $time > '999' ? '000' : $time;
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,'http://798782.com/v/lottery/allOpenInfo?_='.time().$time);
		curl_setopt($ch,CURLOPT_TIMEOUT,20);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_HEADER,0);
		$html = curl_exec($ch);
		curl_close($ch);
		if($html !== false){
			$data = json_decode($html,true);
			$this->doinsert($data);
		}
		$time++;
		$time = sprintf("%03d",$time);
		header('refresh:30;url=/getdata/'.$time);
	}

	private function doinsert($data){
		$table = ['70'=>'xglhc','71'=>'jslhc','72'=>'fflhc','73'=>'sflhc','26'=>'cqssc','42'=>'xyffc','43'=>'dfssc','44'=>'sfssc','25'=>'tjssc','47'=>'wfssc','21'=>'xjssc','34'=>'wfpk10','45'=>'yfpk10','46'=>'sfpk10','22'=>'bjpk10','79'=>'xyft','33'=>'gdsyxw','36'=>'jssyxw','37'=>'hljsyxw','38'=>'xjsyxw','39'=>'shsyxw','62'=>'fjsyxw','63'=>'sfsyxw','64'=>'yfsyxw','65'=>'wfsyxw','35'=>'jxsyxw','24'=>'gdklsf','80'=>'yfklsf','81'=>'sfklsf','82'=>'wfklsf','48'=>'xnyfk3','49'=>'sfk3','32'=>'jsk3','41'=>'hebk3','40'=>'gxk3','52'=>'jlk3','53'=>'hubk3','54'=>'ahk3','55'=>'gzk3','57'=>'shk3','58'=>'gsk3','59'=>'bjk3','60'=>'fjk3','61'=>'xyk3','31'=>'pcdd','50'=>'yfpcdd','51'=>'sfpcdd','66'=>'wfpcdd','77'=>'qxc','78'=>'xyqxc','10'=>'fc3ddpc','83'=>'yffc3ddpc','84'=>'sffc3ddpc','85'=>'wffc3ddpc','11'=>'pl3','86'=>'yfpl3','87'=>'sfpl3','88'=>'wfpl3'];
		$class = [
			'xglhc'=>'lhc','jslhc'=>'lhc','fflhc'=>'lhc','sflhc'=>'lhc',
			'cqssc'=>'ssc','xyffc'=>'ssc','dfssc'=>'ssc','sfssc'=>'ssc','tjssc'=>'ssc','wfssc'=>'ssc','xjssc'=>'ssc',
			'wfpk10'=>'pk10','yfpk10'=>'pk10','sfpk10'=>'pk10','bjpk10'=>'pk10','xyft'=>'pk10',
			'gdsyxw'=>'syxw','jssyxw'=>'syxw','hljsyxw'=>'syxw','xjsyxw'=>'syxw','shsyxw'=>'syxw','fjsyxw'=>'syxw','sfsyxw'=>'syxw','yfsyxw'=>'syxw','wfsyxw'=>'syxw','jxsyxw'=>'syxw',
			'gdklsf'=>'klc','yfklsf'=>'klc','sfklsf'=>'klc','wfklsf'=>'klc',
			'xnyfk3'=>'k3','sfk3'=>'k3','jsk3'=>'k3','hebk3'=>'k3','gxk3'=>'k3','jlk3'=>'k3','hubk3'=>'k3','ahk3'=>'k3','gzk3'=>'k3','shk3'=>'k3','gsk3'=>'k3','bjk3'=>'k3','fjk3'=>'k3','xyk3'=>'k3',
			'pcdd'=>'pcdd','yfpcdd'=>'pcdd','sfpcdd'=>'pcdd','wfpcdd'=>'pcdd',
			'qxc'=>'qx','xyqxc'=>'qx',
			'fc3ddpc'=>'dpc','yffc3ddpc'=>'dpc','sffc3ddpc'=>'dpc','wffc3ddpc'=>'dpc','pl3'=>'dpc','yfpl3'=>'dpc','sfpl3'=>'dpc','wfpl3'=>'dpc'
		];
		foreach($table as $k=>$v){
			if(empty($data[$k])){
				continue;
			}
			if(\DB::table($v)->select('turnNum')->where('turnNum',$data[$k]['pre']['turnNum'])->first() !== null){
				continue;
			}
			$className = 'App\Libs\\'.$class[$v];
			$result = new $className($data[$k]);
			$insert = $result->result;
			$endData = (array)\DB::table($v)->orderBy('id','desc')->first();
			if(!empty($endData)){
				$endResult = new cltx($result->result,$endData);
				$insert = $endResult->result;
			}
			
			\DB::table($v)->insert($insert);
		}
	}
}
 ?>