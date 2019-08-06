<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="format-detection" content="telephone=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11" />
		<title>香港六合彩开奖开奖直播、现场记录、网址、特码 - 六合彩汇</title>
		<meta name="keywords" content="香港六合彩特码,六合彩开奖直播记录,六合彩网址,香港六合彩开奖现场记录" />
		<meta name="description" content="香港六合彩开奖现场直播即时开奖记录网址、特码、历史开奖号码、论坛、软件预测、开马平台" />
		<link rel="stylesheet" href="/static/css/headorfood.css" />
		<link rel="stylesheet" href="/static/css/lhc.css" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="bookmark"href="/favicon.ico" />
		<link rel="stylesheet" href="/static/css/user_adv.css" />
		<link rel="stylesheet" href="/static/css/idangerous.swiper.css" />
		<script src="/static/js/jquery.min.js"></script>
		<script src="/static/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/static/js/jscolor.js"></script>
	</head>
@php
$class = [
	'01'=>'numhong','02'=>'numhong','07'=>'numhong','08'=>'numhong','12'=>'numhong','13'=>'numhong','18'=>'numhong','19'=>'numhong','23'=>'numhong','24'=>'numhong','29'=>'numhong','30'=>'numhong','34'=>'numhong','35'=>'numhong','40'=>'numhong','45'=>'numhong','46'=>'numhong',
	'03'=>'numlan','04'=>'numlan','09'=>'numlan','10'=>'numlan','14'=>'numlan','15'=>'numlan','20'=>'numlan','25'=>'numlan','26'=>'numlan','31'=>'numlan','36'=>'numlan','37'=>'numlan','41'=>'numlan','42'=>'numlan','47'=>'numlan','48'=>'numlan',
	'05'=>'numlv','06'=>'numlv','11'=>'numlv','16'=>'numlv','17'=>'numlv','21'=>'numlv','22'=>'numlv','27'=>'numlv','28'=>'numlv','32'=>'numlv','33'=>'numlv','38'=>'numlv','39'=>'numlv','43'=>'numlv','44'=>'numlv','49'=>'numlv'
];
@endphp
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
												<li class="{{$class[$data['current']['num1']]}}" style="padding-top: 0px; line-height: 38px;">{{$data['current']['num1']}}</li>
												<li class="{{$class[$data['current']['num2']]}}" style="padding-top: 0px; line-height: 38px;">{{$data['current']['num2']}}</li>
												<li class="{{$class[$data['current']['num3']]}}" style="padding-top: 0px; line-height: 38px;">{{$data['current']['num3']}}</li>
												<li class="{{$class[$data['current']['num4']]}}" style="padding-top: 0px; line-height: 38px;">{{$data['current']['num4']}}</li>
												<li class="{{$class[$data['current']['num5']]}}" style="padding-top: 0px; line-height: 38px;">{{$data['current']['num5']}}</li>
												<li class="{{$class[$data['current']['num6']]}}" style="padding-top: 0px; line-height: 38px;">{{$data['current']['num6']}}</li>
												<li style="color:#000;">+</li>
												<li class="{{$class[$data['current']['num7']]}}" style="padding-top: 0px; line-height: 38px;">{{$data['current']['num7']}}</li>
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
								<th>色波</th>
								<th colspan="2">特码</th>
							</tr>
							@foreach($data['history'] as $v)
							<tr>
								<td>{{$v["openTime"]}}</td>
								<td>{{$v["turnNum"]}}</td>
								<td class="blueqiu">
									<ul class="klsf_kaiul">
										<li class="{{$class[$v['num1']]}}" style="color:#FFF;border-radius: 50%">{{$v['num1']}}</li>
										<li class="{{$class[$v['num2']]}}" style="color:#FFF;border-radius: 50%">{{$v['num2']}}</li>
										<li class="{{$class[$v['num3']]}}" style="color:#FFF;border-radius: 50%">{{$v['num3']}}</li>
										<li class="{{$class[$v['num4']]}}" style="color:#FFF;border-radius: 50%">{{$v['num4']}}</li>
										<li class="{{$class[$v['num5']]}}" style="color:#FFF;border-radius: 50%">{{$v['num5']}}</li>
										<li class="{{$class[$v['num6']]}}" style="color:#FFF;border-radius: 50%">{{$v['num6']}}</li>
										<li style="color:#012537">+</li>
										<li class="{{$class[$v['num7']]}}" style="color:#FFF;border-radius: 50%">{{$v['num7']}}</li>
									</ul>
								</td>
								<td>{{$v["sum"]}}</td>
								<td @php echo $v["sdx"] == "大" ? "style=\"color:#f12d35\"" : ""; @endphp>{{$v["sdx"]}}</td>
								<td @php echo $v["sds"] == "双" ? "style=\"color:#f12d35\"" : ""; @endphp >{{$v["sds"]}}</td>
								<td @php echo $v["sb"] == "和局" ? "style=\"color:#000\"" : ($v["sb"] == '红' ? "style=\"color:#f12d35\"":($v['sb'] == "绿" ? "style=\"color:#1fc26b\"":"")); @endphp >{{$v["sb"]}}</td>
								<td @php echo $v["tdx"] == "大" ? "style=\"color:#f12d35\"" : ""; @endphp>{{$v["tdx"]}}</td>
								<td @php echo $v["tds"] == "双" ? "style=\"color:#f12d35\"" : ""; @endphp>{{$v["tds"]}}</td>
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
						$('#jnumber').children()[7].innerHTML = data.current.num7;
						$('.drawCount')[0].innerHTML=data.current.turn;
						$('.sdrawCount')[0].innerHTML=data.current.openTime;
						for(let v of data.tips){
							$('#cltxul').children().remove();
							$('#cltxul').append('<li>'+ v +'</li>');
						}
						$("#tabData tr:not(:first)").remove();
						var lei = {'01':'numhong','02':'numhong','07':'numhong','08':'numhong','12':'numhong','13':'numhong','18':'numhong','19':'numhong','23':'numhong','24':'numhong','29':'numhong','30':'numhong','34':'numhong','35':'numhong','40':'numhong','45':'numhong','46':'numhong','03':'numlan','04':'numlan','09':'numlan','10':'numlan','14':'numlan','15':'numlan','20':'numlan','25':'numlan','26':'numlan','31':'numlan','36':'numlan','37':'numlan','41':'numlan','42':'numlan','47':'numlan','48':'numlan','05':'numlv','06':'numlv','11':'numlv','16':'numlv','17':'numlv','21':'numlv','22':'numlv','27':'numlv','28':'numlv','32':'numlv','33':'numlv','38':'numlv','39':'numlv','43':'numlv','44':'numlv','49':'numlv'};
						for(let v of data.history){
							var sdx = v.sdx == "大" ? "style=\"color:#f12d35\"":"";
							var sds = v.sds == "双" ? "style=\"color:#f12d35\"":"";
							var sb = v.sb == "和局" ? "style=\"color:#000\"" : (v.sb == '红' ? "style=\"color:#f12d35\"":(v.sb == "绿" ? "style=\"color:#1fc26b\"":""));
							var tdx = v.tdx == "大" ? "style=\"color:#f12d35\"":"";
							var tds = v.tds == "双" ? "style=\"color:#f12d35\"":"";
							$('#tabData').append('<tr><td>'+v.openTime+'</td><td>'+v.turnNum+'</td><td class="blueqiu"><ul class="klsf_kaiul"><li class="'+lei[v.num1]+'" style="color:#FFF;border-radius: 50%">'+v.num1+'</li><li class="'+lei[v.num2]+'" style="color:#FFF;border-radius: 50%">'+v.num2+'</li><li class="'+lei[v.num3]+'" style="color:#FFF;border-radius: 50%">'+v.num3+'</li><li class="'+lei[v.num4]+'" style="color:#FFF;border-radius: 50%">'+v.num4+'</li><li class="'+lei[v.num5]+'" style="color:#FFF;border-radius: 50%">'+v.num5+'</li><li class="'+lei[v.num6]+'" style="color:#FFF;border-radius: 50%">'+v.num6+'</li><li style="color:#012537">+</li><li class="'+lei[v.num7]+'" style="color:#FFF;border-radius: 50%">'+v.num7+'</li></ul></td><td>'+v.sum+'</td><td '+sdx+'>'+v.sdx+'</td><td '+sds+'>'+v.sds+'</td><td '+sb+'>'+v.sb+'</td><td '+tdx+'>'+v.tdx+'</td><td '+tds+'>'+v.tds+'</td></tr>');
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