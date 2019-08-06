<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="format-detection" content="telephone=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11" />
		<title>看快乐十分开奖结果直播，快乐十分走势图，稳赢技巧，来18彩票开奖网，官方数据！精准无延迟！</title>
		<meta name="keywords" content="快乐十分开奖结果,快乐十分开奖直播,快乐十分走势图,快乐十分稳赚技巧,快乐十分稳赚方法" />
		<meta name="description" content="本站快乐十分开奖结果直播、快乐十分走势图、历史记录与官方实时同步，更有稳赚技巧分享，保存书签（Ctrl+D），下次打开更方便！" />
		<link rel="stylesheet" href="/static/css/headorfood.css" />
		<link rel="stylesheet" href="/static/css/klsf.css" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="bookmark"href="/favicon.ico" />
		<link rel="stylesheet" href="/static/css/user_adv.css" />
		<link rel="stylesheet" href="/static/css/idangerous.swiper.css" />
		<script src="/static/js/jquery.min.js"></script>
		<script src="/static/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/static/js/jscolor.js"></script>
	</head>

	<body>
		<div class="bodybox">
			<div id="headdivbox">@include('head')</div>
			<div class="haomabox">
				<div class="waring" id="waringbox">
					<div class="flash"><i></i></div>
					温馨提示：因网络问题，开奖结果会有延迟，所以您需要去喝杯咖啡等一会儿！
				</div>
				<div class="haomaqu" id="pk10">
					<div class="haomaqu_resetPar">
						<div class="haomaqul">
							<div class="haomaline">
								<div class="haomaimg">
									<img id="tubiao" src="/static/picture/beijinpk.png" alt="{{$data['cpinfo']['cpname']}}" />
								</div>
								<div class="numberqu">
									<div class="nuberqutit">
										<span class="pk10tit">{{$data['cpinfo']['cpname']}}</span>第
										<span class="preDrawIssue">{{$data['current']['turnNum']}}</span> 期开奖号码
									</div>
									<div class="kajianhaoPar">
										<div class="kajianhao">
											<ul id="jnumber">
												<li class="numblueHead" style="padding-top: 0px; line-height: 36px;">{{$data['current']['num1']}}</li>
												<li class="numblueHead" style="padding-top: 0px; line-height: 36px;">{{$data['current']['num2']}}</li>
												<li class="numblueHead" style="padding-top: 0px; line-height: 36px;">{{$data['current']['num3']}}</li>
												<li class="numblueHead" style="padding-top: 0px; line-height: 36px;">{{$data['current']['num4']}}</li>
												<li class="numblueHead" style="padding-top: 0px; line-height: 36px;">{{$data['current']['num5']}}</li>
												<li class="numblueHead" style="padding-top: 0px; line-height: 36px;">{{$data['current']['num6']}}</li>
												<li class="numblueHead" style="padding-top: 0px; line-height: 36px;">{{$data['current']['num7']}}</li>
												<li class="numblueHead" style="padding-top: 0px; line-height: 36px;">{{$data['current']['num8']}}</li>
											</ul>
										</div>

									</div>
									<div class="line drawCountDiv">已开<span class="drawCount">{{$data['current']['turn']}}</span>期，开奖时间：<span class="sdrawCount">{{$data['current']['openTime']}}</span></div>
								</div>
							</div>
							<div style="display: none;">
								<table>
									<tr class="longhu">
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="sumFS"></td>
										<td class="sumBigSamll"></td>
										<td class="sumSingleDouble"></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="haomaqur">
							<div class="haomaqur_l">
								<div class="line linetit">距获取开奖数据仅有</div>
								<div class="line linetime">
									<div class="opening opentyle">开奖中...</div>
									<div class="cuttime">
										<span class="bgtime minute">00</span>
										<span>分</span>
										<span class="bgtime second" id="atime">59</span>
										<span>秒</span>
									</div>
								</div>
							</div>
						
						</div>
					</div>

				</div>
			</div>
			
			<div class="kaijiangjl margt20">
				<div class="head">
					<ul class="zoushimap" id="kaijiangjl">
						<li class="kaijiltit kaijjlColor">开奖记录</li>

						<li id="cltx">
							<a onclick="cl();" href="javascript:void(0);"> 长龙提醒</a>
							<i></i>
						</li>
					</ul>
					<!-- <div id="kjls">
						<a href="ssc_kjhistory.html">开奖历史</a>
					</div> -->
					<div id="selectcolor">
						<em>护眼模式</em>
						<span class="select">&nbsp;</span>
						<span>&nbsp;</span>
						<span>&nbsp;</span>
						<span><button id="colorBtn"  class="jscolor{valueElement:'chosen-value', onFineChange:'setTextColor(this)'}">&nbsp;</button></span>
						<input id="chosen-value" value="#f0f0f0" type="hidden" />
					</div>
				</div>
				<div class="listcontent">
					
					<!-- <div class="cltx">
						<div class="headtxt">
							长龙连开提醒
						</div>
						<div class="cltxul">
							<ul id="cltxul">
							</ul>
						</div>
					</div> -->
					<div class="cltx">
						<div class="headtxt">
							长龙连开提醒
						</div>
						<div class="cltxul">
							<ul id="cltxul">
							@foreach($data['tips'] as $v)
								<li>{{$v}}</li>
							@endforeach
							</ul>
						</div>
					</div>
					
					<div class="jrsmhmtj jrsmhmtj_kai" id="jrsmhmtj">
						<table id="tabData" cellpadding="1" cellspacing="1" border="0">
							<tr>
								<th>时间</th>
								<th>期数</th>
								<th id="numberbtn" class="numberbtn">
									<span id="xshm" class="spanselect">显示号码</span>
									
								</th>
								<th colspan="3">总和</th>
								<th>尾大小</th>
								<th colspan="4">龙虎</th>
							</tr>
							@foreach($data['history'] as $v)
							<tr>
								<td>{{$v["openTime"]}}</td>
								<td>{{$v["turnNum"]}}</td>
								<td class="blueqiu">
									<ul class="klsf_kaiul">
										<li class="numblue" style="color:#012537">{{$v['num1']}}</li>
										<li class="numblue" style="color:#012537">{{$v['num2']}}</li>
										<li class="numblue" style="color:#012537">{{$v['num3']}}</li>
										<li class="numblue" style="color:#012537">{{$v['num4']}}</li>
										<li class="numblue" style="color:#012537">{{$v['num5']}}</li>
										<li class="numblue" style="color:#012537">{{$v['num6']}}</li>
										<li class="numblue" style="color:#012537">{{$v['num7']}}</li>
										<li class="numblue" style="color:#012537">{{$v['num8']}}</li>
									</ul>
								</td>
								<td>{{$v["sum"]}}</td>
								<td @php echo $v["dx"] == "大" ? "style=\"color:#f12d35\"" : ""; @endphp>{{$v["dx"]}}</td>
								<td @php echo $v["ds"] == "双" ? "style=\"color:#f12d35\"" : ""; @endphp >{{$v["ds"]}}</td>
								<td @php echo $v["wdx"] == "尾大" ? "style=\"color:#f12d35\"" : ""; @endphp >{{$v["wdx"]}}</td>
								<td @php echo $v["lh1"] == "龙" ? "style=\"color:#f12d35\"" : ""; @endphp>{{$v["lh1"]}}</td>
								<td @php echo $v["lh2"] == "龙" ? "style=\"color:#f12d35\"" : ""; @endphp>{{$v["lh2"]}}</td>
								<td @php echo $v["lh3"] == "龙" ? "style=\"color:#f12d35\"" : ""; @endphp>{{$v["lh3"]}}</td>
								<td @php echo $v["lh4"] == "龙" ? "style=\"color:#f12d35\"" : ""; @endphp>{{$v["lh4"]}}</td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
			
			<div id="fooderbox">@include('fooder')</div>
		</div>
	</body>
	<script type="text/javascript">
		$('#tubiao').attr('src','/static/picture/'+'{{$data["cpinfo"]["cpid"]}}'+'.png');
	</script>
	<script type="text/javascript">
		function cl(){
			var now = $('#cltx');
			if(now[0].className == ''){
				now[0].className = 'selected';
				$('.cltx').css('display','block');
			}else{
				now[0].className = '';
				$('.cltx').css('display','none');
			}
			
		}
	</script>
	<script type="text/javascript">
		function up(){
			var djs = $('#atime')[0].innerHTML;
			if(djs == 0){
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
				if(data != undefined){
					if($('.preDrawIssue')[0].innerHTML != data.current.turnNum){
						$('.preDrawIssue')[0].innerHTML = data.current.turnNum;
						$('#jnumber').children()[0].innerHTML = data.current.num1;
						$('#jnumber').children()[1].innerHTML = data.current.num2;
						$('#jnumber').children()[2].innerHTML = data.current.num3;
						$('#jnumber').children()[3].innerHTML = data.current.num4;
						$('#jnumber').children()[4].innerHTML = data.current.num5;
						$('#jnumber').children()[5].innerHTML = data.current.num6;
						$('#jnumber').children()[6].innerHTML = data.current.num7;
						$('#jnumber').children()[7].innerHTML = data.current.num8;
						$('.drawCount')[0].innerHTML=data.current.turn;
						$('.sdrawCount')[0].innerHTML=data.current.openTime;
						for(let v of data.tips){
							$('#cltxul').children().remove();
							$('#cltxul').append('<li>'+ v +'</li>');
						}
						$("#tabData tr:not(:first)").remove();
						for(let v of data.history){
							var dx = v.dx == "大" ? "style=\"color:#f12d35\"":"";
							var ds = v.ds == "双" ? "style=\"color:#f12d35\"":"";
							var wdx = v.wdx == "尾大" ? "style=\"color:#f12d35\"":"";
							var lh1 = v.lh1 == "龙" ? "style=\"color:#f12d35\"":"";
							var lh2 = v.lh2 == "龙" ? "style=\"color:#f12d35\"":"";
							var lh3 = v.lh3 == "龙" ? "style=\"color:#f12d35\"":"";
							var lh4 = v.lh4 == "龙" ? "style=\"color:#f12d35\"":"";
							$('#tabData').append('<tr><td>'+v.openTime+'</td><td>'+v.turnNum+'</td><td class="blueqiu"><ul class="klsf_kaiul"><li class="numblue" style="color:#012537">'+v.num1+'</li><li class="numblue" style="color:#012537">'+v.num2+'</li><li class="numblue" style="color:#012537">'+v.num3+'</li><li class="numblue" style="color:#012537">'+v.num4+'</li><li class="numblue" style="color:#012537">'+v.num5+'</li><li class="numblue" style="color:#012537">'+v.num6+'</li><li class="numblue" style="color:#012537">'+v.num7+'</li><li class="numblue" style="color:#012537">'+v.num8+'</li></ul></td><td>'+v.sum+'</td><td '+dx+'>'+v.dx+'</td><td '+ds+'>'+v.ds+'</td><td '+wdx+'>'+v.wdx+'</td><td '+lh1+'>'+v.lh1+'</td><td '+lh2+'>'+v.lh2+'</td><td '+lh3+'>'+v.lh3+'</td><td '+lh4+'>'+v.lh4+'</td></tr>');
						}
					}
				}
				$('#atime')[0].innerHTML = 60;
			}else{
				$('#atime')[0].innerHTML = djs-1;	
			}
		}
		setInterval("up()",1000);
	</script>
	<script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/static/js/config.js"></script>
<!-- 	<script type="text/javascript" src="/static/js/ga.js"></script>
	<script type="text/javascript" src="/static/js/animate.js"></script>
	<script type="text/javascript" src="/static/js/pk10_index.js"></script>
	<script type="text/javascript" src="/static/js/pk10_kai.js"></script>
	<script type="text/javascript" src="/static/js/idangerous.swiper.min.js"></script>
	<script type="text/javascript" src="/static/js/tools.js"></script> -->

</html>