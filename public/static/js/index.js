
//创建对象
var indexObj = new Object();
//初始化数据
indexObj.init = function() {
	//选择彩种添加勾选背景
	$(".czList_only>li").on("click", function() {
		if($(this).hasClass("czListBg")) {
			$(this).removeClass("czListBg");
		} else {
			$(this).addClass("czListBg");
		}
		indexObj.testMenu();
	});
	$(".czList_only>li").hover(function() {
		if($(this).hasClass("czListBg")) {
			$(this).addClass("hoverli");
		}
	}, function() {
		if($(this).hasClass("hoverli")) {
			$(this).removeClass("hoverli");
		}
	});
	//点击收缩彩种列表
	//热门彩
	$("#rmc_menuBtn").on("click",function(){
		var boxHeight = $(".rmc_showBox").css("height");
		if($(this).find("i").hasClass("topshowList")){
			$(this).find("i").removeClass().addClass("bottomshowList")
		} else{
			$(this).find("i").removeClass().addClass("topshowList")
		}
		$(".rmc_showBox>ul").css("display","block");
		if(boxHeight == "0px"){
			$(".rmc_showBox").animate({
				"height":"auto",
				"padding":"10px 0"
			},200)
		} else{
			$(".rmc_showBox").animate({
				"height":"auto",
				"padding":"0"
			},200,function(){
				$(".rmc_showBox>ul").css("display","none")
			})		
		}
	})
	//极速彩
	$("#jisuc_menuBtn").on("click",function(){
		var boxHeight = $(".jisuc_showBox").css("height");
		if($(this).find("i").hasClass("topshowList")){
			$(this).find("i").removeClass().addClass("bottomshowList")
		} else{
			$(this).find("i").removeClass().addClass("topshowList")
		}
		$(".jisuc_showBox>ul").css("display","block");
		if(boxHeight == "0px"){
			$(".jisuc_showBox").animate({
				"height":"270px",
				"padding":"10px 0"
			},200)
		} else{
			$(".jisuc_showBox").animate({
				"height":"0",
				"padding":"0"
			},200,function(){
				$(".jisuc_showBox>ul").css("display","none")
			})		
		}
	})
	//高频彩
	$("#gpc_menuBtn").on("click",function(){
		var boxHeight = $(".gpc_showBox").css("height");
		if($(this).find("i").hasClass("topshowList")){
			$(this).find("i").removeClass().addClass("bottomshowList")
		} else{
			$(this).find("i").removeClass().addClass("topshowList")
		}
		$(".gpc_showBox>ul").css("display","block");
		if(boxHeight == "0px"){
			$(".gpc_showBox").animate({
				"height":"990px",
				"padding":"10px 0"
			},200,function(){
				
			})
		} else{
			$(".gpc_showBox").animate({
				"height":"0",
				"padding":"0"
			},200,function(){
				$(".gpc_showBox>ul").css("display","none")
			})		
		}
	})
	//境外彩
	$("#jwc_menuBtn").on("click",function(){
		var boxHeight = $(".jwc_showBox").css("height");
		if($(this).find("i").hasClass("topshowList")){
			$(this).find("i").removeClass().addClass("bottomshowList")
		} else{
			$(this).find("i").removeClass().addClass("topshowList")
		}
		$(".jwc_showBox>ul").css("display","block");
		if(boxHeight == "0px"){
			$(".jwc_showBox").animate({
				"height":"150px",
				"padding":"10px 0"
			},200,function(){
				
			})
		} else{
			$(".jwc_showBox").animate({
				"height":"0",
				"padding":"0"
			},200,function(){
				$(".jwc_showBox>ul").css("display","none")
			})		
		}
	})
	//全国彩
	$("#qgc_menuBtn").on("click",function(){
		var boxHeight = $(".qgc_showBox").css("height");
		if($(this).find("i").hasClass("topshowList")){
			$(this).find("i").removeClass().addClass("bottomshowList")
		} else{
			$(this).find("i").removeClass().addClass("topshowList")
		}
		$(".qgc_showBox>ul").css("display","block");
		if(boxHeight == "0px"){
			$(".qgc_showBox").animate({
				"height":"70px",
				"padding":"10px 0"
			},200,function(){
				
			})
		} else{
			$(".qgc_showBox").animate({
				"height":"0",
				"padding":"0"
			},200,function(){
				$(".qgc_showBox>ul").css("display","none")
			})		
		}
	})
	//全选选择
	$("#checkAll").on("click", function() {
		$(".czList_only>li").each(function() {
			if(!($(this).hasClass("czListBg"))) {
				$(this).addClass("czListBg");
			}
		});
		indexObj.testMenu();
	});
	//取消选择
	$("#cancelAll").on("click", function() {
		$(".czList_only>li").each(function() {
			if(($(this).hasClass("czListBg"))) {
				$(this).removeClass("czListBg");
			}
		});
		indexObj.testMenu();
	});
	$("#display>li").on("hover", function() {
		if(!($(this).hasClass("liactiveBG"))) {
			$(this).addClass("liactiveBG").siblings().removeClass("liactiveBG");
		}
		if($(this).attr("id") == "kaiLi") {
			$("#kaiYes").show();
			$("#kaiYes6").show();
			$("#kaiNo").hide();
			$("#kaiNo6").hide();
		} else {
			$("#kaiNo").show();
			$("#kaiNo6").show();
			$("#kaiYes").hide();
			$("#kaiYes6").hide();
		}
	})
	//开启报警
	$("#soundsCtrl").on("click", function() {
		if($(this).find("i").hasClass("iChecked")) {
			$(this).find("i").removeClass("iChecked");
		} else {
			$(this).find("i").addClass("iChecked");
		}
	});
	$("#selectNum").on("change", function() {
		datasy.count = $(this).val();
		datasn.count = $(this).val();
		datas6.count = $(this).val();
		//启动ajax
		indexObj.ajax(url, datasy);
		indexObj.ajax(url6, datas6,6);
		indexObj.ajax(url, datasn);
	});
	indexObj.ajax(url, datasy);
	indexObj.ajax(url6, datas6,6);
	indexObj.ajax(url, datasn);
	//启动ajax
	indexObj.initAjax(url, datasy, datasn);
}
var datasy = {
	hot: 1,
	isOpen: 1,
	count: 2
}
var datasn = {
	hot: 1,
	isOpen: -1,
	count: 2
}
var datas6 = {
	hot: 0,
	isOpen: 1,
	count: 1
}
var intevVal = {};
var url = config.publicUrl + "dailyDragon/queryDailyDragonList.do?";
var url6 = config.url6+"dailyDragon/queryDailyDragonList.do";
indexObj.initAjax = function(url, datasy, datasn) {
	clearInterval(intevVal["interV"]);
	var flag = true;
	//初始加载
	var interV = setInterval(function() {
		if(flag) {
			indexObj.ajax(url, datasy);
			indexObj.ajax(url6, datas6,6);
			flag = false;
		} else {
			indexObj.ajax(url, datasn);
			flag = true;
		}
	}, 4000);
	intevVal["interV"] = interV;
}
indexObj.ajax = function(url, datas,num) {
	$.ajax({
		type: "post",
		url: url,
		data: datas,
		beforeSend: function() {},
		success: function(data) {
			if(num=="6"){
				indexObj.loadList6(datas, data);
			}else{
				indexObj.loadList(datas, data);
			}
			
			indexObj.testMenu();
		},
		error: function(data) {}
	});
}
//加载菜单
indexObj.loadMenu = function(data) {
	var data = indexObj.parseObj();
}
//显示已经选重的菜单列表
indexObj.testMenu = function() {
	$("#kaiDetial").find("tbody").find("tr").hide();
	$(".czList_only").find(".czListBg").each(function(i) {
		$("." + $(this).attr("id")).show();
	});
}
//构建HTML列表
indexObj.loadList = function(isOpen, data) {
	/**/
	var data = indexObj.parseObj(data);
	var html = "",
		flag = false;
	if(isOpen.isOpen == "1") {
		$("#kaiYes").find("tbody").empty();
	} else {
		$("#kaiNo").find("tbody").empty();
	}
	if(data.errorCode == "0") {
		$(data.result.data).each(function() {
			var lz, cltj,lot;
			var beadSource = indexObj.parseObj(this.beadSource);
			lz = "<a  href='javascript:void(0)' onclick='indexObj.getUrl(true," + this.lotCode + "," + beadSource.rank + "," + beadSource.type + ")'>查看</a>";
			cltj = "<a  href='javascript:void(0)' onclick='indexObj.getUrl(false," + this.lotCode + "," + beadSource.rank + "," + beadSource.type + ")'>查看</a>";
			html = "<tr class='" + this.lotCode + "'><td>" + this.lotteryName + "</td><td>" + this.location + "</td><td>" + this.currentDragon + "</td><td>" + lz + "</td><td>" + cltj + "</td></tr>"
			if(isOpen.isOpen == "1") {
				$("#kaiYes").find("tbody").append(html);
			} else {
				$("#kaiNo").find("tbody").append(html);
			}
			lot = this.lotCode;
			$(".czList_only").find(".czListBg").each(function() {
					if(lot==$(this).attr("id")){
						flag = true;
					}
			})
		});
		//如果有数据属于被选择的，报警
		if(flag&&$("#soundsCtrl").find("i").hasClass("iChecked")){
			document.getElementById("duSound").play();
		}
	}

}
//构建HTML列表
indexObj.loadList6 = function(isOpen, data) {
	var data = indexObj.parseObj(data);
	var html = "",
		flag = false;
	if(isOpen.isOpen == "1") {
		$("#kaiYes6").find("tbody").empty();
	} else {
		$("#kaiNo6").find("tbody").empty();
	}
	if(data.errorCode == "0") {
		$(data.result.data).each(function() {
			var lz, cltj,lot;
			lz = "<a  href='javascript:void(0)' onclick='jumpHtml(\"" + this.beadSource + "\")'>查看</a>";
			cltj = "<a  href='javascript:void(0)' onclick='jumpHtml(\"" + this.dragonSource + "\")'>查看</a>";
			html = "<tr class='" + this.lotCode + "'><td  width='222px'>" + this.lotteryName + "</td><td>" + this.location + "</td><td  width='120px'>" + this.currentDragon + "</td><td  width='50px'>" + lz + "</td><td  width='100px'>" + cltj + "</td></tr>"
			if(isOpen.isOpen == "1") {
				$("#kaiYes6").find("tbody").append(html);
			} else {
				$("#kaiNo6").find("tbody").append(html);
			}
			lot = this.lotCode;
			$(".czList_only").find(".czListBg").each(function() {
				if(lot==$(this).attr("id")){
					flag = true;
				}
			});
		});
		//如果有数据属于被选择的，报警
		if(flag&&$("#soundsCtrl").find("i").hasClass("iChecked")){
			document.getElementById("duSound").play();
		}
	}

}
//json转成对象
indexObj.parseObj = function(jsondata) {
	var data = null;
	if(typeof jsondata != "object") {
		data = JSON.parse(jsondata);
	} else {
		data = JSON.stringify(jsondata);
		data = JSON.parse(data);
	}
	return data;
}
//json转成对象
indexObj.getUrl = function(iflz, lotCode, rank, type) {
	var url = "";
	if(iflz) {
		switch(lotCode * 1) {
			//热门彩6
			case 10001: //pk10
				jumpHtml("../PK10/pk10kai_luzhufxzh.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10002: //重庆时时彩
				jumpHtml("../shishicai_cq/ssc_luzhufenxizh.html?" + lotCode + "?" + rank + "?" + type);
				break;
		    case 10059: //幸运时时彩
                jumpHtml("../shishicai_xy/ssc_luzhufenxizh.html?" + lotCode + "?" + rank + "?" + type);
                break;
			case 10007: //江苏快3
				jumpHtml("../kuai3/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10004: //新疆时时彩
				jumpHtml("../shishicai_xj/ssc_luzhufenxizh.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10038: //广西快乐十分
				jumpHtml("../klsf_gaungxi/klsf_zonghelzfx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10003: //天津时时彩
				jumpHtml("../shishicai_tj/ssc_luzhufenxizh.html?" + lotCode + "?" + rank + "?" + type);
				break;
			//极速彩	7
			case 10037: //极速赛车
				jumpHtml("../jisusaiche/pk10kai_luzhufxzh.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10035: //极速飞艇
				jumpHtml("../jisuft/pk10kai_luzhufxzh.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10057: //幸运飞艇
				jumpHtml("../xingyft/pk10kai_luzhufxzh.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10058: //幸运飞艇
				jumpHtml("../sgAirship/pk10kai_luzhufxzh.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10036: //极速时时彩
				jumpHtml("../shishicai_jisu/ssc_luzhufenxizh.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10052: //极速快3
				jumpHtml("../kuai3_jisu/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10053: //极速快乐十分
				jumpHtml("../klsf_jisu/klsf_zonghelzfx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10055: //极速11选5
				jumpHtml("../shiyix5_jisu/zonghelzfx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10054: //极速快乐8
				jumpHtml("../kl8_jisu/bjkl8_luzhufx.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			//境外彩4
			case 10010: //澳洲幸运5
				jumpHtml("../aozxy5/ssc_zhonghefx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10011: //澳洲幸运8
				jumpHtml("../aozxy8/klsf_zonghelzfx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10012: //澳洲幸运10
				jumpHtml("../aozxy10/pk10kai_luzhufxzh.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10013: //澳洲幸运20
				jumpHtml("../aozxy20/aozxy20_luzhufx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			
			//全国彩2
			case 10041: //福彩3D
				jumpHtml("../fc3D/kjhistory.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10043: //体彩排列
				jumpHtml("../tcpl3/kjhistory.html?" + lotCode + "?" + rank + "?" + type);
				break;
				
			//高频彩25
			case 10008: //十一运夺金
				jumpHtml("../shiyix5_sd/zonghelzfx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10009: //重庆幸运农场
				jumpHtml("../cqnc/klsf_zonghelzfx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10005: //广东快乐十分
				jumpHtml("../klsf/klsf_zonghelzfx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10034: //天津快乐十分
				jumpHtml("../klsf_tianjin/klsf_zonghelzfx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10006: //广东11选5
				jumpHtml("../shiyix5_gd/zonghelzfx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10014: //北京快乐8
				jumpHtml("../beijinkl8/bjkl8_luzhufx.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10026: //广西快3
				jumpHtml("../kuai3_guangxi/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10027: //吉林快3
				jumpHtml("../kuai3_jiling/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10028: //河北快3
				jumpHtml("../kuai3_hebei/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10029: //内蒙古快3
				jumpHtml("../kuai3_neimenggu/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10030: //安徽快3
				jumpHtml("../kuai3_anhui/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10031: //福建快3
				jumpHtml("../kuai3_fujian/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10032: //湖北快3
				jumpHtml("../kuai3_hubei/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10033: //北京快3
				jumpHtml("../kuai3_beijing/kuai3_zonghelz.html?" + lotCode + "?" + rank + "?" + type);
				break;
			case 10015: //江西11选5
				jumpHtml("../shiyix5_jiangxi/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10016: //江苏11选5
				jumpHtml("../shiyix5_jiangsu/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10017: //安徽11选5
				jumpHtml("../shiyix5_anhui/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10018: //上海11选5
				jumpHtml("../shiyix5_shanghai/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10019: //辽宁11选5
				jumpHtml("../shiyix5_liaoning/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10020: //湖北11选5
				jumpHtml("../shiyix5_hubei/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10022: //广西11选5
				jumpHtml("../shiyix5_guangxi/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10023: //吉林11选5
				jumpHtml("../shiyix5_jiling/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10024: //内蒙古11选5
				jumpHtml("../shiyix5_neimenggu/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10025: //浙江11选5
				jumpHtml("../shiyix5_zhejiang/index.html?" + lotCode + "?" + rank + "?" + type);
				break;	
			case 10056: //腾讯分分彩
				jumpHtml("../tencent_ffc/ssc_zhonghefx.html?" + lotCode + "?" + rank + "?" + type);
				break;	
		}
	} else {
		switch(lotCode * 1) {
			//热门彩
			case 10001: //pk10
				jumpHtml("../PK10/pk10kai.html");
				break;
			case 10002: //重庆时时彩
				jumpHtml("../shishicai_cq/ssc_index.html");
				break;
		    case 10059: //幸运时时彩
                jumpHtml("../shishicai_xy/ssc_index.html");
                break;		
			case 10007: //江苏快3
				jumpHtml("../kuai3/kuai3_index.html");
				break;	
			case 10004: //新疆时时彩
				jumpHtml("../shishicai_xj/ssc_index.html");
				break;
			case 10038: //广西快乐十分
				jumpHtml("../klsf_gaungxi/klsf_index.html");
				break;
			case 10003: //天津时时彩
				jumpHtml("../shishicai_tj/ssc_index.html");
				break; 
			//极速彩	7
			case 10037: //极速赛车
				jumpHtml("../jisusaiche/pk10kai.html");
				break;
			case 10035: //极速飞艇
				jumpHtml("../jisuft/pk10kai.html");
				break;
			case 10057: //极速飞艇
				jumpHtml("../xingyft/pk10kai.html");
				break;
			case 10058: //极速飞艇
				jumpHtml("../sgAirship/pk10kai.html");
				break;
			case 10036: //极速时时彩
				jumpHtml("../shishicai_jisu/ssc_index.html");
				break;
			case 10052: //极速快3
				jumpHtml("../kuai3_jisu/kuai3_zonghelz.html");
				break;
			case 10053: //极速快乐十分
				jumpHtml("../klsf_jisu/klsf_index.html");
				break;
			case 10055: //极速11选5
				jumpHtml("../shiyix5_jisu/index.html");
				break;
			case 10054: //极速快乐8
				jumpHtml("../kl8_jisu/bjkl8_index.html");
				break;	
			//全国彩2
			case 10041: //福彩3D
				jumpHtml("../fc3D/index.html");
				break;
			case 10043: //体彩排列3
				jumpHtml("../tcpl3/index.html");
				break;
			//境外彩4
			case 10010: //澳洲幸运5
				jumpHtml("../aozxy5/ssc_index.html");
				break;
			case 10011: //澳洲幸运8
				jumpHtml("../aozxy8/klsf_index.html");
				break;
			case 10012: //澳洲幸运10
				jumpHtml("../aozxy10/pk10kai.html");
				break;
			case 10013: //澳洲幸运20
				jumpHtml("../aozxy20/aozxy20_index.html");
				break;
			//高频彩25
			case 10008: //十一运夺金
				jumpHtml("../shiyix5_sd/index.html");
				break;
			case 10009: //重庆幸运农场
				jumpHtml("../cqnc/index.html");
				break;
			case 10005: //广东快乐十分
				jumpHtml("../klsf/klsf_index.html");
				break;
			case 10034: //天津快乐十分
				jumpHtml("../klsf_tianjin/klsf_index.html");
				break;
			case 10006: //广东11选5
				jumpHtml("../shiyix5_gd/index.html");
				break;
			case 10014: //北京快乐8
				jumpHtml("../beijinkl8/bjkl8_index.html");
				break;
			case 10026: //广西快3
				jumpHtml("../kuai3_guangxi/kuai3_index.html");
				break;
			case 10027: //吉林快3
				jumpHtml("../kuai3_jiling/kuai3_index.html");
				break;
			case 10028: //河北快3
				jumpHtml("../kuai3_hebei/kuai3_index.html");
				break;
			case 10029: //内蒙古快3
				jumpHtml("../kuai3_neimenggu/kuai3_index.html");
				break;
			case 10030: //安徽快3
				jumpHtml("../kuai3_anhui/kuai3_index.html");
				break;
			case 10031: //福建快3
				jumpHtml("../kuai3_fujian/kuai3_index.html");
				break;
			case 10032: //湖北快3
				jumpHtml("../kuai3_hubei/kuai3_index.html");
				break;
			case 10033: //北京快3
				jumpHtml("../kuai3_beijing/kuai3_index.html");
				break;
			case 10015: //江西11选5
				jumpHtml("../shiyix5_jiangxi/index.html");
				break;	
			case 10016: //江苏11选5
				jumpHtml("../shiyix5_jiangsu/index.html");
				break;	
			case 10017: //安徽11选5
				jumpHtml("../shiyix5_anhui/index.html");
				break;	
			case 10018: //上海11选5
				jumpHtml("../shiyix5_shanghai/index.html");
				break;	
			case 10019: //辽宁11选5
				jumpHtml("../shiyix5_liaoning/index.html");
				break;	
			case 10020: //湖北11选5
				jumpHtml("../shiyix5_hubei/index.html");
				break;	
			case 10022: //广西11选5
				jumpHtml("../shiyix5_guangxi/index.html");
				break;	
			case 10023: //吉林11选5
				jumpHtml("../shiyix5_jiling/index.html");
				break;	
			case 10024: //内蒙古11选5
				jumpHtml("../shiyix5_neimenggu/index.html");
				break;	
			case 10025: //浙江11选5
				jumpHtml("../shiyix5_zhejiang/index.html");
				break;	
			case 10056: //腾讯分分彩
				jumpHtml("../tencent_ffc/ssc_zhonghefx.html");
				break;	
		}
	}
	return url;
}

function jumpHtml(url) {
	window.open(url);
}