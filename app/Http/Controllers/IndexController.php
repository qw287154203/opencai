<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class IndexController extends Controller{
	public function index(){
		if($this->isMobile()){
			return redirect('\/m\/');
		}
		$tableName = ['xglhc','jslhc','fflhc','sflhc','cqssc','xyffc','dfssc','sfssc','tjssc','wfssc','xjssc','wfpk10','yfpk10','sfpk10','bjpk10','xyft','gdsyxw','jssyxw','hljsyxw','xjsyxw','shsyxw','fjsyxw','sfsyxw','yfsyxw','wfsyxw','jxsyxw','gdklsf','yfklsf','sfklsf','wfklsf','xnyfk3','sfk3','jsk3','hebk3','gxk3','jlk3','hubk3','ahk3','gzk3','shk3','gsk3','bjk3','fjk3','xyk3','pcdd','yfpcdd','sfpcdd','wfpcdd','qxc','xyqxc','fc3ddpc','yffc3ddpc','sffc3ddpc','wffc3ddpc','pl3','yfpl3','sfpl3','wfpl3'];
		foreach($tableName as $v){
			$result[$v] = \DB::table($v)->orderBy('id','desc')->first();
		}
		// echo '<pre>';
		// print_r($result);
		return view('index',['data'=>$result]);
	}

	public function mindex(){
		$tableName = ['yfpk10','xyft','xyffc','dfssc','jslhc','xglhc'];
		foreach($tableName as $v){
			$result[$v] = \DB::table($v)->orderBy('id','desc')->first();
		}
		return view('/m/index',['data'=>$result]);
	}
	private function isMobile(){ 
		// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
		if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
		{
		    return true;
		} 
		// 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
		if (isset ($_SERVER['HTTP_VIA']))
		{ 
		    // 找不到为flase,否则为true
		    return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
		} 
		// 脑残法，判断手机发送的客户端标志,兼容性有待提高
		if (isset ($_SERVER['HTTP_USER_AGENT']))
		{
		    $clientkeywords = array ('nokia',
		        'sony',
		        'ericsson',
		        'mot',
		        'samsung',
		        'htc',
		        'sgh',
		        'lg',
		        'sharp',
		        'sie-',
		        'philips',
		        'panasonic',
		        'alcatel',
		        'lenovo',
		        'iphone',
		        'ipod',
		        'blackberry',
		        'meizu',
		        'android',
		        'netfront',
		        'symbian',
		        'ucweb',
		        'windowsce',
		        'palm',
		        'operamini',
		        'operamobi',
		        'openwave',
		        'nexusone',
		        'cldc',
		        'midp',
		        'wap',
		        'mobile'
		        ); 
		    // 从HTTP_USER_AGENT中查找手机浏览器的关键字
		    if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
		    {
		        return true;
		    } 
		} 
		// 协议法，因为有可能不准确，放到最后判断
		if (isset ($_SERVER['HTTP_ACCEPT']))
		{ 
		    // 如果只支持wml并且不支持html那一定是移动设备
		    // 如果支持wml和html但是wml在html之前则是移动设备
		    if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
		    {
		        return true;
		    } 
		} 
		return false;
	} 
}
 ?>
