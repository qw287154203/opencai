<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title>{{$data['cpinfo']['cpname']}}-中国福利彩票奖结果查询、历史记录、开奖视频直播 - 18彩票开奖网</title>
		<meta name="format-detection" content="telephone=no" />
		<meta name="description" content="中国福利彩票开奖结果查询、历史开奖记录、开奖视频直播、杀号技巧软件分析预测网站。" />
		<meta name="keywords" content="开奖历史记录,开奖直播,pk10" />
		<link rel="stylesheet" href="/static/css/m/pk10.css" />
		<link rel="stylesheet" href="/static/css/m/pk10_gary.css" />
		<link rel="stylesheet" href="/static/css/m/common.css" />
		<link rel="stylesheet" href="/static/css/m/public.css" />
		<link rel="stylesheet" href="/static/css/m/listhtml.css" />
		<script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
		<!-- <script src="/static/js/m/jquery-1.9.1.js"></script> -->
		<!--<script src="/static/js/m/jquery_mobile_1.4.5.js"></script>-->
		<!-- <script src="/static/js/m/zepto.js"></script> -->
	</head>

	<body class="wxgzh iphone withHeader article utms-wxgzh utmm-None utmc-None list-page">
		<!-- <div id="headdivbox" class="indexContainer withHeader"></div> -->
		<div id="headdivbox" class="indexContainer withHeader"><!--头部公共部分-->
<header id="indexHeader">
	<div class="top_menu_bar">
		<div class="top_menu_left">
			<a href="/m/"><img src="/static/images/logo.png" alt=""></a>
		</div>
		<div class="top_menu_middle" id="caizhong_name" onclick="headlist();">
			<span id="titlespan">{{$data['cpinfo']['cpname']}}<i></i></span>
		</div>

	</div>
</header>
</div>
@php
$class = [
	'01'=>'#f8223c','02'=>'#f8223c','07'=>'#f8223c','08'=>'#f8223c','12'=>'#f8223c','13'=>'#f8223c','18'=>'#f8223c','19'=>'#f8223c','23'=>'#f8223c','24'=>'#f8223c','29'=>'#f8223c','30'=>'#f8223c','34'=>'#f8223c','35'=>'#f8223c','40'=>'#f8223c','45'=>'#f8223c','46'=>'#f8223c',
	'03'=>'#0093e8','04'=>'#0093e8','09'=>'#0093e8','10'=>'#0093e8','14'=>'#0093e8','15'=>'#0093e8','20'=>'#0093e8','25'=>'#0093e8','26'=>'#0093e8','31'=>'#0093e8','36'=>'#0093e8','37'=>'#0093e8','41'=>'#0093e8','42'=>'#0093e8','47'=>'#0093e8','48'=>'#0093e8',
	'05'=>'#1fc26b','06'=>'#1fc26b','11'=>'#1fc26b','16'=>'#1fc26b','17'=>'#1fc26b','21'=>'#1fc26b','22'=>'#1fc26b','27'=>'#1fc26b','28'=>'#1fc26b','32'=>'#1fc26b','33'=>'#1fc26b','38'=>'#1fc26b','39'=>'#1fc26b','43'=>'#1fc26b','44'=>'#1fc26b','49'=>'#1fc26b'
];
@endphp
		<div class="pagediv">
			<!--
            	时间：2017-01-07
            	描述：头部开奖
            -->
			<div id="touchdiv">
				<!--<div style="height:.5rem;width:100%;text-align: center;line-height: .5rem;background: skyblue;">12</div>-->
				<div class="headNum" id="headerData">
					<div class="divline issuel">
						<span class="issue"><span class="preDrawIssue">{{$data['current']['turnNum']}}</span>期开奖</span>
						<span class="drawCount">已开<span class="drawCountnum">{{$data['current']['turn']}}</span>期
						<span id="explainBtn_wfsm" class="displaynone"></span>
					</div>
					<div class="divline drawCodel">
						<ul id="num" class="sscli">
							<li style="background:{{$class[$data['current']['num1']]}}">{{$data['current']['num1']}}</li>
							<li style="background:{{$class[$data['current']['num2']]}}">{{$data['current']['num2']}}</li>
							<li style="background:{{$class[$data['current']['num3']]}}">{{$data['current']['num3']}}</li>
							<li style="background:{{$class[$data['current']['num4']]}}">{{$data['current']['num4']}}</li>
							<li style="background:{{$class[$data['current']['num5']]}}">{{$data['current']['num5']}}</li>
							<li style="background:{{$class[$data['current']['num6']]}}">{{$data['current']['num6']}}</li>
							<li style="background:{{$class[$data['current']['num7']]}}">{{$data['current']['num7']}}</li>
						</ul>
					</div>
					<div class="divline drawCodel tiger">
						<ul id="hlh" class="pk10li longhu">
							<li class="li_after">特码：</li>
							<li class="li_after">{{$data['current']['sb']}}</li>
							<li class="li_after">{{$data['current']['tdx']}}</li>
							<li class="li_after">{{$data['current']['tds']}}</li>
							<li class="verline li_after">|</li>
							<li class="guanyahe li_after">总和：</li>
							<li class="guanyaheli li_after">{{$data['current']['sum']}}</li>
							<li class="guanyaheli li_after">{{$data['current']['sdx']}}</li>
							<li class="guanyaheli li_after">{{$data['current']['sds']}}</li>
						</ul>
					</div>
					<div class="divline drawTimebox cuttime margbt8">
						<div class="flexl margtp78">距获取开奖数据</div>
						<input type="hidden" class="nextIssue" />
						<div class="flexc margtp78">
							<div class="graypro"></div>
							<div class="redpro" style="width: 100%;"></div>
						</div>
						<div class="flexr margtp78">
							<span class="hourid"><span class="bgtime hour"></span>00:</span><span class="bgtime minute"></span><span class="bgtime second" id="sj">60</span>
						</div>
						</div>
					</div>
					<div class="divline drawTimebox opentyle displaynone">
						<div class="flexl">开奖中...</div>
					</div>
				</div>
				<!--
            	时间：2017-01-07
            	描述：数据列表头部
            -->
				<div class="ListHead">
					<div class="sort"></div>
					<div class="headTitle_view">
						<!--headTitle_gary     width: 495%, display: flex;;-->
						<!--headTitle       width: 320%,display: -webkit-box;-->
						<div class="headTitle headTitle_gary">
							<div id="kaijianghm" class="checkedbl"><span>开奖号码<i></i></span></div>
							<!-- <button id="shuangmiantj"><span>双面统计<i></i></span></button> -->
							<button id="changlongtj"><span>长龙提醒<i></i></span></button>
							<button id="haomafb"><span><i></i></span></button>
							<button id="haomazs"><span><i></i></span></button>
							<button id="luzufx"><span><i></i></span></button>
							<button id="hmqhlz"><span><i></i></span></button>
							<button id="lenrefx"><span><i></i></span></button>
							<button id="guyahelz"><span><i></i></span></button>
							<button id="guyahezs"><span><i></i></span></button>
							<button id="dsdxls"><span><i></i></span></button>
							<button id="longhutj"><span><i></i></span></button>
							<button id="longhulz"><span><i></i></span></button>
							<button id="haomagltj"><span><i></i></span></button>
							<button id="todayhaomatj"><span><i></i></span></button>
							<button id="wezizs"><span><i></i></span></button>
							<button id="gyhlmlishi"><span><i></i></span></button>
							<button id="dsdxlz"><span><i></i></span></button>
						</div>
					</div>
					<div class="page_main">
						<div class="tabBox" id="sortable">
						</div>
					</div>
					<!--
                	时间：2017-01-10
                	描述：开奖号码
                -->
					<div class="drawCodebox kaijianghm" style="display:block;">
						<div class="linebox">
							<div class="leftspan">
								<span class="leftspan">时间</span>
								<span class="rightspan padleft1">期数</span>
							</div>
							<div class="rightspan">
								<div class="rightdiv"  >
									<span id="xshm" class="spanchecked">号码</span>
									<!-- <span id="xsdx">大小</span>
									<span id="xsds">单双</span> -->
									<span id="gjlh">总和/特码</span>
								</div>
							</div>
						</div>
						<div class="contentlist bortop002" id="numlist">
							@foreach($data['history'] as $v)
							<div class="listline bortop001">
							   <div class="leftspan leftspanw">
							    <span class="boxflex"><span class="graytime">@php echo date('H:i',strtotime($v['openTime']));@endphp</span><span class="graytime">@php echo substr($v['turnNum'],-4); @endphp</span></span>
							   </div>
							   <div class="rightspan">
							    <div class="rightdiv padl0">
							     <ul id="" class="sscli listli haomali displayblock">
							      <li style="background:{{$class[$v['num1']]}}">{{$v['num1']}}</li>
							      <li style="background:{{$class[$v['num2']]}}">{{$v['num2']}}</li>
							      <li style="background:{{$class[$v['num3']]}}">{{$v['num3']}}</li>
							      <li style="background:{{$class[$v['num4']]}}">{{$v['num4']}}</li>
							      <li style="background:{{$class[$v['num5']]}}">{{$v['num5']}}</li>
							      <li style="background:{{$class[$v['num6']]}}">{{$v['num6']}}</li>
							      <li style="background:{{$class[$v['num7']]}}">{{$v['num7']}}</li>
							     </ul>
							     <ul id="" class="syxwlilist ssclilistxt listli lhlist">
							      <li style="color:#f12d35">{{$v['sum']}}</li>
							      <li>{{$v['sdx']}}</li>
							      <li>{{$v['sds']}}</li>
							      <li>{{$v['sb']}}</li>
							      <li>{{$v['tdx']}}</li>
							      <li>{{$v['tds']}}</li>
							     </ul>
							    </div>
							   </div>
							  </div>
							@endforeach
						</div>
					</div>
					<!-- <div class="drawCodebox shuangmiantj displaynone">
						<div class="line2box" id="liangmianbox">
						</div>
					</div> -->
					<div class="drawCodebox changlongtj displaynone" style="display:none;">
						<div class="line2box">
							<ul id="longDrag">
								@foreach($data['tips'] as $v)
								<li>{{$v}}</li>
								@endforeach
							</ul>
						</div>
					</div>
					

				</div>
				<div id="footerDiv">@include('/m/fooder')</div>
			</div>
			
		<!-- <script src="/static/js/m/sortable.min.js"></script>
		<script src="/static/js/m/jquery.async.js"></script>
		<script src="/static/js/m/drawlines.js"></script>
		<script src="/static/js/m/pk10basetrend.js"></script>
		<script type="text/javascript" src="/static/js/m/date.js"></script>
		<script type="text/javascript" src="/static/js/m/iscroll.js"></script>
		<script type="text/javascript" src="/static/js/m/config.js"></script>
		<script type="text/javascript" src="/static/js/m/tools.js"></script>
		<script type="text/javascript" src="/static/js/m/jisuft_index.js"></script>
		<script type="text/javascript" src="/static/js/m/head_sgairship.js"></script>
		<script type="text/javascript" src="/static/js/m/ga.js"></script> -->
		<div id="datePlugin"></div>
		<!--<script type="text/javascript" src="/static/js/m/jquery-weui.js"></script>-->
		<div id="cZList" style="display: block; height: 0px;">@include('/m/head')</div>
	</body>
<script type="text/javascript">
	function headlist(){
		$('#cZList').css('height','100%');
	}
	function re(){
		$('#cZList').css('height','0');
	}
	$('#kaijianghm').click(function(){
		$('.kaijianghm').css('display','block');
		$('#kaijianghm').siblings().attr('class','');
		$('#kaijianghm').attr('class','checkedbl');
		$('.changlongtj').css('display','none');
	});
	$('#changlongtj').click(function(){
		$('.kaijianghm').css('display','none');
		$('.changlongtj').css('display','block');
		$('#changlongtj').siblings().attr('class','');
		$('#changlongtj').attr('class','checkedbl');
	});
	$('#xshm').click(function(){
		$('#gjlh').attr('class','');
		$('#xshm').attr('class','spanchecked');
		$('.haomali').css('display','block');
		$('.longhuli').css('display','none');
	});
	$('#gjlh').click(function(){
		$('#xshm').attr('class','');
		$('#gjlh').attr('class','spanchecked');
		$('.haomali').css('display','none');
		$('.longhuli').css('display','block');
	});
	function up(){
		var time = $('#sj')[0].innerHTML;
		if(time == 0){
			var data;
			$.ajax({
			  	url: '/interface/{{$data["cpinfo"]["cpid"]}}',
			  	type: 'get',
			  	async: false,
			  	dataType: 'json',
			  	success: function (result) {
			    		data = result;
			  	}
			});
			if(data != undefined && $('.preDrawIssue')[0].innerHTML != data.current.turnNum){
				var lei = {'01':'#f8223c','02':'#f8223c','07':'#f8223c','08':'#f8223c','12':'#f8223c','13':'#f8223c','18':'#f8223c','19':'#f8223c','23':'#f8223c','24':'#f8223c','29':'#f8223c','30':'#f8223c','34':'#f8223c','35':'#f8223c','40':'#f8223c','45':'#f8223c','46':'#f8223c','03':'#0093e8','04':'#0093e8','09':'#0093e8','10':'#0093e8','14':'#0093e8','15':'#0093e8','20':'#0093e8','25':'#0093e8','26':'#0093e8','31':'#0093e8','36':'#0093e8','37':'#0093e8','41':'#0093e8','42':'#0093e8','47':'#0093e8','48':'#0093e8','05':'#1fc26b','06':'#1fc26b','11':'#1fc26b','16':'#1fc26b','17':'#1fc26b','21':'#1fc26b','22':'#1fc26b','27':'#1fc26b','28':'#1fc26b','32':'#1fc26b','33':'#1fc26b','38':'#1fc26b','39':'#1fc26b','43':'#1fc26b','44':'#1fc26b','49':'#1fc26b'};
				$('.preDrawIssue')[0].innerHTML = data.current.turnNum;
				$('.drawCountnum')[0].innerHTML=data.current.turn;
				$('#num').children()[0].innerHTML = data.current.num1;
				$($('#num').children()[0]).css('background',lei[data.current.num1]);
				$('#num').children()[1].innerHTML = data.current.num2;
				$($('#num').children()[1]).css('background',lei[data.current.num2]);
				$('#num').children()[2].innerHTML = data.current.num3;
				$($('#num').children()[2]).css('background',lei[data.current.num3]);
				$('#num').children()[3].innerHTML = data.current.num4;
				$($('#num').children()[3]).css('background',lei[data.current.num4]);
				$('#num').children()[4].innerHTML = data.current.num5;
				$($('#num').children()[4]).css('background',lei[data.current.num5]);
				$('#num').children()[5].innerHTML = data.current.num6;
				$($('#num').children()[5]).css('background',lei[data.current.num6]);
				$('#num').children()[6].innerHTML = data.current.num7;
				$($('#num').children()[6]).css('background',lei[data.current.num7]);
				$($('#num').children()[6]).attr('class','li_after');
				$('#hlh').children()[1].innerHTML = data.current.sb;
				$('#hlh').children()[2].innerHTML = data.current.tdx;
				$('#hlh').children()[3].innerHTML = data.current.tds;
				$('#hlh').children()[6].innerHTML = data.current.sum;
				$('#hlh').children()[7].innerHTML = data.current.sdx;
				$('#hlh').children()[8].innerHTML = data.current.sds;
				$('#numlist').children().remove();
				for(let v of data.history){
					var c = new Date(v.openTime).getTime();
					var open =  new Date(c);
					opentime = open.getHours()+':'+open.getMinutes();
					var turnnum = v.turnNum.substr(-4);
					$('#numlist').append('<div class="listline bortop001"><div class="leftspan leftspanw"><span class="boxflex"><span class="graytime">'+opentime+'</span><span class="graytime">'+turnnum+'</span></span></div><div class="rightspan"><div class="rightdiv padl0"><ul id="" class="sscli haomali listli displayblock"><li style="background:'+lei[v.num1]+'">'+v.num1+'</li><li style="background:'+lei[v.num2]+'">'+v.num2+'</li><li style="background:'+lei[v.num3]+'">'+v.num3+'</li><li style="background:'+lei[v.num4]+'">'+v.num4+'</li><li style="background:'+lei[v.num5]+'">'+v.num5+'</li><li style="background:'+lei[v.num6]+'">'+v.num6+'</li><li style="background:'+lei[v.num7]+'">'+v.num7+'</li></ul><ul id="" class="syxwlilist ssclilistxt listli lhlist"><li style="color:#f12d35">'+v.sum+'</li><li>'+v.sdx+'</li><li>'+v.sds+'</li><li>'+v.sb+'</li><li>'+v.tdx+'</li><li>'+v.tds+'</li></ul></div></div></div>');
				}
				$('#longDrag').children().remove();
				for(let v of data.tips){
					$('#longDrag').append('<li>'+v+'</li>');
				}
				
			}
			$('#sj')[0].innerHTML = 60;
			$('.redpro').css('width','100%');
		}else{
			$('#sj')[0].innerHTML = time-1;
			$('.redpro').css('width',time*1.67+'%');
		}
	}
	setInterval("up()",1000);
</script>
</html>