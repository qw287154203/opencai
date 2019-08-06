<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
		<title>-中国体育、福利彩票、高频彩开奖结果查询调用接口API - 18彩票开奖网</title>
		<meta name="format-detection" content="telephone=no" />
		<meta name="description" content="168彩票开奖网提供中国体育彩票超级大乐透、排列三、排列五、七星彩、11选五、开奖结果查询，福利彩票双色球、3D、七乐彩、快3、时时彩、快乐8、北京赛车PK10、广东快乐十分等高频彩开奖结果查询调用接口。" />
		<meta name="keywords" content="彩票开奖查询,彩票开奖,彩票开奖结果,福利彩票开奖结果,体育彩票开奖结果" />
		<link rel="stylesheet" href="/static/css/m/public.css" />
		<link rel="stylesheet" href="/static/css/m/home.css" />
		<link rel="stylesheet" href="/static/css/m/banner.css" />
		<script type="text/javascript" src="/static/js/m/jquery-1.9.1.js"></script>
		<!-- <script type="text/javascript" src="/static/js/m/jquery.event.drag-1.5.min.js"></script>
		<script type="text/javascript" src="/static/js/m/jquery.touchslider.js"></script> -->
	</head>
@php
$class = [
	'01'=>'#f8223c','02'=>'#f8223c','07'=>'#f8223c','08'=>'#f8223c','12'=>'#f8223c','13'=>'#f8223c','18'=>'#f8223c','19'=>'#f8223c','23'=>'#f8223c','24'=>'#f8223c','29'=>'#f8223c','30'=>'#f8223c','34'=>'#f8223c','35'=>'#f8223c','40'=>'#f8223c','45'=>'#f8223c','46'=>'#f8223c',
	'03'=>'#0093e8','04'=>'#0093e8','09'=>'#0093e8','10'=>'#0093e8','14'=>'#0093e8','15'=>'#0093e8','20'=>'#0093e8','25'=>'#0093e8','26'=>'#0093e8','31'=>'#0093e8','36'=>'#0093e8','37'=>'#0093e8','41'=>'#0093e8','42'=>'#0093e8','47'=>'#0093e8','48'=>'#0093e8',
	'05'=>'#1fc26b','06'=>'#1fc26b','11'=>'#1fc26b','16'=>'#1fc26b','17'=>'#1fc26b','21'=>'#1fc26b','22'=>'#1fc26b','27'=>'#1fc26b','28'=>'#1fc26b','32'=>'#1fc26b','33'=>'#1fc26b','38'=>'#1fc26b','39'=>'#1fc26b','43'=>'#1fc26b','44'=>'#1fc26b','49'=>'#1fc26b'
];
@endphp
	<body class="bodybox">
		<input type="hidden" name="index" id="index" value="index" />
		<div class="pagediv">
			<header class="headbox">
				<div>
					<img src="/static/picture/m/logo_phone.png" />
				</div>
				<div id="menubtn">
					<div id="btnimg" class="btnimg">
						<img src="/static/picture/m/menu.png" />
					</div>
					<div class="btnimg">
						<span class="pcicon"></span>
					</div>
					<!-- <div class="btnimg" onclick="window.open('../wfgz_index/index.html','_self')">
						<span class="wfgz">玩法</span>
					</div> -->
					
				</div>
			</header>
			
			
			<div class="czList" id="toRMC">
				<div class="lilist" onclick="window.open('/m/open/yfpk10','_self')">
					<div class="boxline l1box">
						<div>
							<span class="lotName">急速赛车</span>
							<span><label class="preIssue preDrawIssue">{{$data['yfpk10']['turnNum']}}</label>期</span>
							<span class="displaynone nextIssue"></span>
						</div>
						<!-- <div>
							<span class="opentyle redfont">开奖中...</span>
							<span class="cuttime">
								<span>距下期开奖</span>
							<span class="redfont">
									<span class="hour" style="display: none;">00</span>
							<span class="hourtxt" style="display: none;">:</span>
							<span class="minute">0</span>
							<span>:</span>
							<span class="second">0</span>
							</span>
							</span>
						</div> -->
					</div>
					<div class="boxline kajianhao">
						<ul class="pk10li numberbox">
							<li class="nub{{$data['yfpk10']['num1']}}"></li>
							<li class="nub{{$data['yfpk10']['num2']}}"></li>
							<li class="nub{{$data['yfpk10']['num3']}}"></li>
							<li class="nub{{$data['yfpk10']['num4']}}"></li>
							<li class="nub{{$data['yfpk10']['num5']}}"></li>
							<li class="nub{{$data['yfpk10']['num6']}}"></li>
							<li class="nub{{$data['yfpk10']['num7']}}"></li>
							<li class="nub{{$data['yfpk10']['num8']}}"></li>
							<li class="nub{{$data['yfpk10']['num9']}}"></li>
							<li class="nub{{$data['yfpk10']['num10']}}"></li>
						</ul>
					</div>
					<div class="boxline">
						<ul class="pk10li li3">
							<li class="firstDT">{{$data['yfpk10']['lh1']}}</li>
							<li class="secondDT">{{$data['yfpk10']['lh2']}}</li>
							<li class="thirdDT">{{$data['yfpk10']['lh3']}}</li>
							<li class="fourthDT">{{$data['yfpk10']['lh4']}}</li>
							<li class="fifthDT">{{$data['yfpk10']['lh5']}}</li>
							<li class="lastli">|</li>
							<li class="lastli">冠亚和：</li>
							<li class="lastli sumFS">{{$data['yfpk10']['sum']}}</li>
							<li class="lastli sumBigSamll">{{$data['yfpk10']['dx']}}</li>
							<li class="lastli sumSingleDouble">{{$data['yfpk10']['ds']}}</li>
						</ul>
					</div>
				</div>
				<div class="lilist" onclick="window.open('/m/open/xyft','_self')">
					<div class="boxline l1box">
						<div>
							<span class="lotName">幸运飞艇</span>
							<span><label class="preIssue preDrawIssue">{{$data['xyft']['turnNum']}}</label>期</span>
							<span class="displaynone nextIssue"></span>
						</div>
						<!-- <div>
							<span class="opentyle redfont">开奖中...</span>
							<span class="cuttime">
								<span>距下期开奖</span>
							<span class="redfont">
									<span class="hour" style="display: none;">00</span>
							<span class="hourtxt" style="display: none;">:</span>
							<span class="minute">0</span>
							<span>:</span>
							<span class="second">0</span>
							</span>
							</span>
						</div> -->
					</div>
					<div class="boxline kajianhao">
						<ul class="pk10li numberbox">
							<li class="nub{{$data['xyft']['num1']}}"></li>
							<li class="nub{{$data['xyft']['num2']}}"></li>
							<li class="nub{{$data['xyft']['num3']}}"></li>
							<li class="nub{{$data['xyft']['num4']}}"></li>
							<li class="nub{{$data['xyft']['num5']}}"></li>
							<li class="nub{{$data['xyft']['num6']}}"></li>
							<li class="nub{{$data['xyft']['num7']}}"></li>
							<li class="nub{{$data['xyft']['num8']}}"></li>
							<li class="nub{{$data['xyft']['num9']}}"></li>
							<li class="nub{{$data['xyft']['num10']}}"></li>
						</ul>
					</div>
					<div class="boxline">
						<ul class="pk10li li3">
							<li class="firstDT">{{$data['xyft']['lh1']}}</li>
							<li class="secondDT">{{$data['xyft']['lh2']}}</li>
							<li class="thirdDT">{{$data['xyft']['lh3']}}</li>
							<li class="fourthDT">{{$data['xyft']['lh4']}}</li>
							<li class="fifthDT">{{$data['xyft']['lh5']}}</li>
							<li class="lastli">|</li>
							<li class="lastli">冠亚和：</li>
							<li class="lastli sumFS">{{$data['xyft']['sum']}}</li>
							<li class="lastli sumBigSamll">{{$data['xyft']['dx']}}</li>
							<li class="lastli sumSingleDouble">{{$data['xyft']['ds']}}</li>
						</ul>
					</div>
				</div>
				<div class="lilist" onclick="window.open('/m/open/xyffc','_self')">
					<div class="boxline l1box">
						<div>
							<span class="lotName">幸运分分彩</span>
							<span><label class="preIssue preDrawIssue">{{$data['xyffc']['turnNum']}}</label>期</span>
							<span class="displaynone nextIssue"></span>
						</div>
					</div>
					<div class="boxline kajianhao">
						<ul class="sscli numberbox">
							<li>{{$data['xyffc']['num1']}}</li>
							<li>{{$data['xyffc']['num2']}}</li>
							<li>{{$data['xyffc']['num3']}}</li>
							<li>{{$data['xyffc']['num4']}}</li>
							<li>{{$data['xyffc']['num5']}}</li>
						</ul>
					</div>
					<div class="boxline">
						<ul class="pk10li li3">
							<li class="dragonTiger">{{$data['xyffc']['lh1']}}</li>
							<li class="lastli">|</li>
							<li class="lastli">总和：</li>
							<li class="lastli sumNum">{{$data['xyffc']['sum']}}</li>
							<li class="lastli sumBigSmall">{{$data['xyffc']['dx']}}</li>
							<li class="lastli sumSingleDouble">{{$data['xyffc']['ds']}}</li>
						</ul>
					</div>
				</div>
				<div class="lilist" onclick="window.open('/m/open/dfssc','_self')">
					<div class="boxline l1box">
						<div>
							<span class="lotName">大发时时彩</span>
							<span><label class="preIssue preDrawIssue">{{$data['dfssc']['turnNum']}}</label>期</span>
							<span class="displaynone nextIssue"></span>
						</div>
					</div>
					<div class="boxline kajianhao">
						<ul class="sscli numberbox">
							<li>{{$data['dfssc']['num1']}}</li>
							<li>{{$data['dfssc']['num2']}}</li>
							<li>{{$data['dfssc']['num3']}}</li>
							<li>{{$data['dfssc']['num4']}}</li>
							<li>{{$data['dfssc']['num5']}}</li>
						</ul>
					</div>
					<div class="boxline">
						<ul class="pk10li li3">
							<li class="dragonTiger">{{$data['dfssc']['lh1']}}</li>
							<li class="lastli">|</li>
							<li class="lastli">总和：</li>
							<li class="lastli sumNum">{{$data['dfssc']['sum']}}</li>
							<li class="lastli sumBigSmall">{{$data['dfssc']['dx']}}</li>
							<li class="lastli sumSingleDouble">{{$data['dfssc']['ds']}}</li>
						</ul>
					</div>
				</div>
				<div class="lilist" onclick="window.open('/m/open/jslhc','_self')">
					<div class="boxline l1box">
						<div>
							<span class="lotName">极速六合彩</span>
							<span><label class="preIssue preDrawIssue">{{$data['jslhc']['turnNum']}}</label>期</span>
							<span class="displaynone nextIssue"></span>
						</div>
					</div>
					<div class="boxline kajianhao">
						<ul class="sscli numberbox">
							<li style="background:{{$class[$data['jslhc']['num1']]}}">{{$data['jslhc']['num1']}}</li>
							<li style="background:{{$class[$data['jslhc']['num2']]}}">{{$data['jslhc']['num2']}}</li>
							<li style="background:{{$class[$data['jslhc']['num3']]}}">{{$data['jslhc']['num3']}}</li>
							<li style="background:{{$class[$data['jslhc']['num4']]}}">{{$data['jslhc']['num4']}}</li>
							<li style="background:{{$class[$data['jslhc']['num5']]}}">{{$data['jslhc']['num5']}}</li>
							<li style="background:{{$class[$data['jslhc']['num6']]}}">{{$data['jslhc']['num6']}}</li>
							<li style="background:{{$class[$data['jslhc']['num7']]}}">{{$data['jslhc']['num7']}}</li>
						</ul>
					</div>
					<div class="boxline">
						<ul class="pk10li li3">
							<li class="lastli">特码：</li>
							<li class="lastli">{{$data['jslhc']['sb']}}</li>
							<li class="lastli">{{$data['jslhc']['tdx']}}</li>
							<li class="lastli">{{$data['jslhc']['tds']}}</li>
							<li class="lastli"> |</li>
							<li class="lastli">总和：</li>
							<li class="lastli sumNum">{{$data['jslhc']['sum']}}</li>
							<li class="lastli sumBigSmall">{{$data['jslhc']['sdx']}}</li>
							<li class="lastli sumSingleDouble">{{$data['jslhc']['sds']}}</li>
						</ul>
					</div>
				</div>
				<div class="lilist" onclick="window.open('/m/open/xglhc','_self')">
					<div class="boxline l1box">
						<div>
							<span class="lotName">极速六合彩</span>
							<span><label class="preIssue preDrawIssue">{{$data['xglhc']['turnNum']}}</label>期</span>
							<span class="displaynone nextIssue"></span>
						</div>
					</div>
					<div class="boxline kajianhao">
						<ul class="sscli numberbox">
							<li style="background:{{$class[$data['xglhc']['num1']]}}">{{$data['xglhc']['num1']}}</li>
							<li style="background:{{$class[$data['xglhc']['num2']]}}">{{$data['xglhc']['num2']}}</li>
							<li style="background:{{$class[$data['xglhc']['num3']]}}">{{$data['xglhc']['num3']}}</li>
							<li style="background:{{$class[$data['xglhc']['num4']]}}">{{$data['xglhc']['num4']}}</li>
							<li style="background:{{$class[$data['xglhc']['num5']]}}">{{$data['xglhc']['num5']}}</li>
							<li style="background:{{$class[$data['xglhc']['num6']]}}">{{$data['xglhc']['num6']}}</li>
							<li style="background:{{$class[$data['xglhc']['num7']]}}">{{$data['xglhc']['num7']}}</li>
						</ul>
					</div>
					<div class="boxline">
						<ul class="pk10li li3">
							<li class="lastli">特码：</li>
							<li class="lastli">{{$data['xglhc']['sb']}}</li>
							<li class="lastli">{{$data['xglhc']['tdx']}}</li>
							<li class="lastli">{{$data['xglhc']['tds']}}</li>
							<li class="lastli"> |</li>
							<li class="lastli">总和：</li>
							<li class="lastli sumNum">{{$data['xglhc']['sum']}}</li>
							<li class="lastli sumBigSmall">{{$data['xglhc']['sdx']}}</li>
							<li class="lastli sumSingleDouble">{{$data['xglhc']['sds']}}</li>
						</ul>
					</div>
				</div>
				
			<div id="footerDiv">@include('/m/fooder')</div>
			<div id="cZList" style="display: block; height: 0px;">@include('/m/head')</div>
		</div>
		<!-- <script type="text/javascript" src="/static/js/m/date.js"></script>
		<script type="text/javascript" src="/static/js/m/config.js"></script>
		<script type="text/javascript" src="/static/js/m/tools.js"></script>
		<script type="text/javascript" src="/static/js/m/home.js"></script>
		<script type="text/javascript" src="/static/js/m/ga.js"></script> -->
	</body>
<script type="text/javascript">
	$('#btnimg').click(function(){
		$('#cZList').css('height','100%');
	});
	function re(){
		$('#cZList').css('height','0');
	}
</script>

</html>