<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="format-detection" content="telephone=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11" />
		<title>长龙提醒</title>
		<link rel="stylesheet" href="/static/css/style.css" />
		<link rel="stylesheet" href="/static/css/headorfood.css" />
		<link rel="stylesheet" href="/static/css/changltx_index.css" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="bookmark"href="/favicon.ico" />
		<script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
		<meta name="csrf-token" content="{{csrf_token()}}">
		<!-- <script type="text/javascript" src="/static/js/ga.js"></script>
		<script type="text/javascript" src="/static/js/index.js"></script> -->
	</head>
	<body>
		<div class="bodybox">
			<div id="headdivbox">@include('head')</div>

			<!--关于我们-->
			<div class="changltx">
				<div class="contain">
					<div class="contain_top">
						<div class="head">
							<span>长龙提醒</span>
						</div>
						<div class="footerDiv">
							<div class="right">
								<div class="navcheck">
									<span class="select">选择彩种</span>
									<span id="checkAll" class="all"></span>
									<span id="cancelAll" class="cancel"></span>
								</div>
								<div class="navBtn">
									<!--热门彩menu单-->
									<!-- <span id="rmc_menuBtn">热门彩<i class="topshowList"></i></span>
									<div class="rmc_showBox">
										<ul class="czList_only">
											<li class="czListBg" onclick="getdata('yfpk10')"><i></i>急速赛车</li>
											<li class="czListBg" onclick="getdata('xyft')"><i></i>幸运飞艇</li>
											<li class="czListBg" onclick="getdata('xyffc')"><i></i>幸运分分彩</li>
											<li class="czListBg" onclick="getdata('dfssc')"><i></i>大发时时彩</li>
											<li class="czListBg" onclick="getdata('jslhc')"><i></i>极速六合彩</li>
											<li class="czListBg" onclick="getdata('xglhc')"><i></i>香港六合彩</li>
										</ul>
									</div> -->
									<span id="jisuc_menuBtn" onclick="zhedie('lhc')">六合彩<a href="javascript:void(0);"><i id="lhchead" class="topshowList"></i></a></span>
									<div class="gpc_showBox">
										<ul class="czList_only" id="lhc" style="display:block;">
											<!--极速彩7-->
											<li class="czListBg" onclick="getdata('xglhc')" onselectstart="return false"><i></i>香港六合彩</li>
											<li class="czListBg" onclick="getdata('jslhc')" onselectstart="return false"><i></i>极速六合彩</li>
											<li class="czListBg" onclick="getdata('fflhc')" onselectstart="return false"><i></i>分分六合彩</li>
											<li class="czListBg" onclick="getdata('sflhc')" onselectstart="return false"><i></i>三分六合彩</li>
										</ul>
									</div>
									<span onclick="zhedie('ssc')">时时彩<a href="javascript:void(0);"><i id="sschead" class="bottomshowList"></i></a></span>
									<div class="gpc_showBox">
										<ul class="czList_only" id="ssc">
											<li onclick="getdata('xyffc')" onselectstart="return false"><i></i>幸运分分彩</li>
											<li onclick="getdata('cqssc')" onselectstart="return false"><i></i>重庆时时彩</li>
											<li onclick="getdata('dfssc')" onselectstart="return false"><i></i>大发时时彩</li>
											<li onclick="getdata('sfssc')" onselectstart="return false"><i></i>三分时时彩</li>
											<li onclick="getdata('wfssc')" onselectstart="return false"><i></i>五分时时彩</li>
											<li onclick="getdata('tjssc')" onselectstart="return false"><i></i>天津时时彩</li>
											<li onclick="getdata('xjssc')" onselectstart="return false"><i></i>新疆时时彩</li>
										</ul>
									</div>
									<span id="gpc_menuBtn" onclick="zhedie('pk10')">PK拾<a href="javascript:void(0);"><i id="pk10head" class="bottomshowList"></i></a></span>
									<div class="gpc_showBox">
										<ul class="czList_only" id="pk10">
											<li onclick="getdata('xyft')" onselectstart="return false"><i></i>幸运飞艇</li>
											<li onclick="getdata('yfpk10')" onselectstart="return false"><i></i>急速赛车</li>
											<li onclick="getdata('bjpk10')" onselectstart="return false"><i></i>北京PK10</li>
											<li onclick="getdata('sfpk10')" onselectstart="return false"><i></i>三分PK10</li>
											<li onclick="getdata('wfpk10')" onselectstart="return false"><i></i>五分PK10</li>
										</ul>
									</div>
									<span id="gpc_menuBtn" onclick="zhedie('syxw')">11选5<a href="javascript:void(0);"><i id="syxwhead" class="bottomshowList"></i></a></span>
									<div class="gpc_showBox">
										<ul class="czList_only" id="syxw">
											<li onclick="getdata('gdsyxw')" onselectstart="return false"><i></i>广东11选5</li>
											<li onclick="getdata('jssyxw')" onselectstart="return false"><i></i>江苏11选5</li>
											<li onclick="getdata('hljsyxw')" onselectstart="return false"><i></i>黑龙江11选5</li>
											<li onclick="getdata('xjsyxw')" onselectstart="return false"><i></i>新疆11选5</li>
											<li onclick="getdata('shsyxw')" onselectstart="return false"><i></i>上海11选5</li>
											<li onclick="getdata('fjsyxw')" onselectstart="return false"><i></i>福建11选5</li>
											<li onclick="getdata('jxsyxw')" onselectstart="return false"><i></i>江西11选5</li>
											<li onclick="getdata('yfsyxw')" onselectstart="return false"><i></i>一分11选5</li>
											<li onclick="getdata('sfsyxw')" onselectstart="return false"><i></i>三分11选5</li>
											<li onclick="getdata('wfsyxw')" onselectstart="return false"><i></i>五分11选5</li>
										</ul>
									</div>
									<span id="gpc_menuBtn" onclick="zhedie('klc')">快乐彩<a href="javascript:void(0);"><i id="klchead" class="bottomshowList"></i></a></span>
									<div class="gpc_showBox">
										<ul class="czList_only" id="klc">
											<li onclick="getdata('gdklsf')" onselectstart="return false"><i></i>广东快乐十分</li>
											<li onclick="getdata('yfklsf')" onselectstart="return false"><i></i>一分快乐十分</li>
											<li onclick="getdata('sfklsf')" onselectstart="return false"><i></i>三分快乐十分</li>
											<li onclick="getdata('wfklsf')" onselectstart="return false"><i></i>五分快乐十分</li>
										</ul>
									</div>
									<span id="gpc_menuBtn" onclick="zhedie('k3')">快三<a href="javascript:void(0);"><i id="k3head" class="bottomshowList"></i></a></span>
									<div class="gpc_showBox">
										<ul class="czList_only" id="k3">
											<li onclick="getdata('xnyfk3')" onselectstart="return false"><i></i>悉尼一分快三</li>
											<li onclick="getdata('jsk3')" onselectstart="return false"><i></i>江苏骰宝(快3)</li>
											<li onclick="getdata('hebk3')" onselectstart="return false"><i></i>河北快三</li>
											<li onclick="getdata('gxk3')" onselectstart="return false"><i></i>广西快三</li>
											<li onclick="getdata('jlk3')" onselectstart="return false"><i></i>吉林快三</li>
											<li onclick="getdata('hubk3')" onselectstart="return false"><i></i>湖北快三</li>
											<li onclick="getdata('ahk3')" onselectstart="return false"><i></i>安徽快三</li>
											<li onclick="getdata('gzk3')" onselectstart="return false"><i></i>贵州快三</li>
											<li onclick="getdata('shk3')" onselectstart="return false"><i></i>上海快三</li>
											<li onclick="getdata('gsk3')" onselectstart="return false"><i></i>甘肃快三</li>
											<li onclick="getdata('bjk3')" onselectstart="return false"><i></i>北京快三</li>
											<li onclick="getdata('fjk3')" onselectstart="return false"><i></i>福建快三</li>
											<li onclick="getdata('xyk3')" onselectstart="return false"><i></i>幸运快三</li>
											<li onclick="getdata('sfk3')" onselectstart="return false"><i></i>三分快三</li>
										</ul>
									</div>
									<span id="gpc_menuBtn" onclick="zhedie('pcdd')">PC蛋蛋<a href="javascript:void(0);"><i id="pcddhead" class="bottomshowList"></i></a></span>
									<div class="gpc_showBox">
										<ul class="czList_only" id="pcdd">
											<li onclick="getdata('pcdd')" onselectstart="return false"><i></i>PC蛋蛋</li>
											<li onclick="getdata('yfpcdd')" onselectstart="return false"><i></i>一分PC蛋蛋</li>
											<li onclick="getdata('sfpcdd')" onselectstart="return false"><i></i>三分PC蛋蛋</li>
											<li onclick="getdata('wfpcdd')" onselectstart="return false"><i></i>五分PC蛋蛋</li>
										</ul>
									</div>
									<span id="gpc_menuBtn" onclick="zhedie('qx')">七星彩<a href="javascript:void(0);"><i id="qxhead" class="bottomshowList"></i></a></span>
									<div class="gpc_showBox">
										<ul class="czList_only" id="qx">
											<li onclick="getdata('qxc')" onselectstart="return false"><i></i>七星彩</li>
											<li onclick="getdata('xyqxc')" onselectstart="return false"><i></i>幸运七星彩</li>
										</ul>
									</div>
									<span id="gpc_menuBtn" onclick="zhedie('dpc')">全国彩<a href="javascript:void(0);"><i id="dpchead" class="bottomshowList"></i></a></span>
									<div class="gpc_showBox">
										<ul class="czList_only" id="dpc">
											<li onclick="getdata('fc3ddpc')" onselectstart="return false"><i></i>福彩3D</li>
											<li onclick="getdata('yffc3ddpc')" onselectstart="return false"><i></i>一分福彩3D</li>
											<li onclick="getdata('sffc3ddpc')" onselectstart="return false"><i></i>三分福彩3D</li>
											<li onclick="getdata('wffc3ddpc')" onselectstart="return false"><i></i>五分福彩3D</li>
											<li onclick="getdata('pl3')" onselectstart="return false"><i></i>排列3</li>
											<li onclick="getdata('yfpl3')" onselectstart="return false"><i></i>一分排列3</li>
											<li onclick="getdata('sfpl3')" onselectstart="return false"><i></i>三分排列3</li>
											<li onclick="getdata('wfpl3')" onselectstart="return false"><i></i>五分排列3</li>
										</ul>
									</div>
									
								</div>
							</div>
							<div class="left">
								<div class="left_head">
									<ul id="display">
										<li id="kaiLi" class="liactiveBG">连续开出</li>
										<!-- <li id="nokaiLi">连续未开</li> -->
									</ul>
									
								</div>
								<div id="kaiDetial">
									<table id="kaiYes" width="100%" border="0" cellspacing="1" cellpadding="1">
										<thead>
											<tr>
												<th height="50px" width="222px">彩种</th>
												<th height="50px">位置</th>
											</tr>											
										</thead>
										<tbody>
										</tbody>
									</table>
									<table id="kaiYes6" width="100%" border="0" cellspacing="1" cellpadding="1">
										<tbody>
										</tbody>
									</table>
									<!-- <table id="kaiNo" width="100%" border="0" cellspacing="1" cellpadding="1" style="display:none">
										<thead>
											<tr>
												<th height="50px" width="222px">彩种</th>
												<th height="50px">位置</th>
												<th height="50px"  width='120px'>连续未开出期数</th>
												<th height="50px" width='50px'>路珠</th>
												<th height="50px" width='100px'>长龙统计</th>
											</tr>											
										</thead>
										<tbody>
												
										</tbody>
									</table>
									<table id="kaiNo6" width="100%" border="0" cellspacing="1" cellpadding="1">
										<tbody>
										</tbody>
									</table> -->
								</div>
							</div>
						</div>
					</div>
					<!-- <audio src="../../media/warn.wav" id="duSound" style="display: none;"></audio> -->
					<!--<div class="contain_down">
						<p>注： ab：是指“大小大小大小”“单双单双单双”“龙虎龙虎龙虎”此种属性的排列形态（包含反向），表格从此形态形成5期时开始统计。</p>
						<p>abb：是指“大小小大小小”“单双双单双双”“龙虎虎龙虎虎”，此种属性的排列形态（包含反向）表格从此形态形成5期时开始统计。</p>
						<p>aabb：是指“大大小小”“单单双双”“龙龙虎虎”此中属性的排列形态（包含反向），表格从此形态形成5期时开始统计。</p>
						<p>举例说明第5期,如：大小小大小小，红色属性出现的那期即是第5期。</p>
					</div>-->
				</div>
			</div>
			<div id="fooderbox">@include('fooder')</div>
		</div>
	</body>
	<script type="text/javascript">
		$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax({
			url: '/cl/123',
		  	type: 'post',
		  	data: {1 : 'xglhc',2 : 'jslhc',3 : 'fflhc',4 : 'sflhc'},
		  	async: false,
		  	dataType: 'json',
		  	success: function (result) {
		    		for(let v of result){
		    			for(let vv of v.tips){
		    				$('#kaiYes tbody').append('<tr class="row'+v.id+'"><td>'+v.name+'</td><td>'+vv+'</td></tr>');
		    			}
		    		}
		  	}
		});
		function zhedie(cz){
			if($('#'+cz+'head')[0].className == 'topshowList'){
				$('#'+cz+'head')[0].className = 'bottomshowList';
				$('#'+cz).css('display','none');
			}else{
				$('#'+cz+'head')[0].className = 'topshowList';
				$('#'+cz).css('display','block');
			}
		}
		function getdata(cz){
			if($(event.target)[0].className == ''){
				$(event.target)[0].className = 'czListBg';
				$.ajax({
				  	url: '/cl/'+cz,
				  	type: 'get',
				  	async: false,
				  	dataType: 'json',
				  	success: function (result) {
				    		for(let v of result.tips){
				    			$('#kaiYes tbody').append('<tr class="row'+result.id+'"><td>'+result.name+'</td><td>'+v+'</td></tr>');
				    		}
				  	}
				});
			}else{
				$(event.target)[0].className = '';
				$('.row'+cz).remove();
			}
		}
		// console.log($('.czList_only li').attr('class','czListBg'));	
	</script>
	<!-- <script type="text/javascript" src="/static/js/config.js"></script> -->
</html>