function testMoth(e){for(var r=["01","03","05","07","08","10","12"],l=0;l<r.length;l++)if(e==r[l])return!0}function test2Moth(e,r){return 0==e%2&&"02"==r?29:28}!function(e){e.fn.dateTools=function(r,l,t){function a(){z.refresh(),A.refresh(),B.refresh(),o(),z.scrollTo(0,40*F==0?1:40*F,100,!0),A.scrollTo(0,40*O-40==0?1:40*O-40,100,!0),B.scrollTo(0,40*_-40==0?1:40*_-40,100,!0)}function i(){C.refresh(),G.refresh(),J.refresh(),j>12&&(J.scrollTo(0,40*_-40,100,!0),j=j-12-1),C.scrollTo(0,40*j,100,!0),G.scrollTo(0,40*Q,100,!0),j=parseInt(H.getHours())}function n(){I=1,T=1,x=1}function o(){return!K.curdate&&(""!==S.val()&&(F=parseInt(S.val().substr(0,4))-K.beginyear,O=parseInt(S.val().substr(5,2)),void(_=parseInt(S.val().substr(8,2)))))}function s(){n(),e("#dateconfirm").unbind("click").click(function(){var r=e("#yearwrapper ul li:eq("+I+")").html().substr(0,e("#yearwrapper ul li:eq("+I+")").html().length-1)+"-"+e("#monthwrapper ul li:eq("+T+")").html().substr(0,e("#monthwrapper ul li:eq("+T+")").html().length-1)+"月"+e("#daywrapper ul li:eq("+Math.round(x)+")").html().substr(0,e("#daywrapper ul li:eq("+Math.round(x)+")").html().length-1)+"日";D&&(1===Math.round(E)?e("#Hourwrapper ul li:eq("+Y+")").html(parseInt(e("#Hourwrapper ul li:eq("+Y+")").html().substr(0,e("#Hourwrapper ul li:eq("+Y+")").html().length-1))+12):e("#Hourwrapper ul li:eq("+Y+")").html(parseInt(e("#Hourwrapper ul li:eq("+Y+")").html().substr(0,e("#Hourwrapper ul li:eq("+Y+")").html().length-1))),r+=" "+e("#Hourwrapper ul li:eq("+Y+")").html().substr(0,e("#Minutewrapper ul li:eq("+Y+")").html().length-1)+":"+e("#Minutewrapper ul li:eq("+P+")").html().substr(0,e("#Minutewrapper ul li:eq("+P+")").html().length-1),E=0),void 0===l?k?S.val(r):S.html(r):l(r),e("#datePage").animate({top:"-6rem"},"100"),e("#dateshadow").animate({opacity:"0"},"100"),e("#dateshadow").stop().css({display:"none"}),e("html,body").css({overflow:"visible"}),e("#showtime").text(e("#beginTime").val().substr(5,e("#beginTime").val().length));var t=r.replace("月","-");t=t.replace("日",""),method.loadOther(t),e("#yearmothnday").val(e("#yearwrapper ul li:eq("+I+")").html().substr(0,e("#yearwrapper ul li:eq("+I+")").html().length-1)),tools.checkDay(e("#daywrapper ul li:eq("+Math.round(x)+")").html().substr(0,e("#daywrapper ul li:eq("+Math.round(x)+")").html().length-1))}),e("#datecancle").click(function(){e("#datePage").animate({top:"-6rem"},"100"),e("#dateshadow").animate({opacity:"0"},"100"),e("#dateshadow").stop().css({display:"none"}),e("html,body").css({overflow:"visible"})})}function p(){e("#datePage").css({display:"block",top:"-2rem"}),e("#dateshadow").css({display:"block",opacity:"0"}),e("#datePage").animate({top:"1.6rem"},"100"),e("#dateshadow").animate({opacity:"0.1"},"100")}function u(){var r=e("#yearwrapper ul li:eq("+I+")").html().substr(0,e("#yearwrapper ul li:eq("+I+")").html().length-1),l=e("#monthwrapper ul li:eq("+T+")").html().substr(0,e("#monthwrapper ul li:eq("+T+")").html().length-1);z=new iScroll("yearwrapper",{snap:"li",vScrollbar:!1,onScrollEnd:function(){if(-1!=((I=this.y/40*-1+1)+"").indexOf(".")){var t=(I+"").split("."),a=t[1].substr(0,1);I=1*a>5?1*t[0]+1:t[0]}K.endday=c(r,l),y(),v(e("#yearwrapper ul li:eq("+I+")").html().substr(0,e("#yearwrapper ul li:eq("+I+")").html().length-1)),z.refresh(),A.refresh(),B.refresh()}}),A=new iScroll("monthwrapper",{snap:"li",vScrollbar:!1,onScrollEnd:function(){if(-1!=((T=this.y/40*-1+1)+"").indexOf(".")){var e=(T+"").split("."),t=e[1].substr(0,1);T=1*t>5?1*e[0]+1:e[0]}K.endday=c(r,l),y(),z.refresh(),A.refresh(),B.refresh()}}),B=new iScroll("daywrapper",{snap:"li",vScrollbar:!1,onScrollEnd:function(){if(-1!=((x=this.y/40*-1+1)+"").indexOf(".")){var e=(x+"").split("."),t=e[1].substr(0,1);x=1*t>5?1*e[0]+1:e[0]}K.endday=c(r,l),z.refresh(),A.refresh(),B.refresh()}})}function d(){h(),f(),e("#datescroll_datetime").show(),e("#Hourwrapper ul").html(g()),e("#Minutewrapper ul").html(q()),e("#Secondwrapper ul").html(M())}function h(){C=new iScroll("Hourwrapper",{snap:"li",vScrollbar:!1,onScrollEnd:function(){Y=Math.round(this.y/40*-1)+1,C.refresh()}}),G=new iScroll("Minutewrapper",{snap:"li",vScrollbar:!1,onScrollEnd:function(){P=Math.round(this.y/40*-1)+1,C.refresh()}}),J=new iScroll("Secondwrapper",{snap:"li",vScrollbar:!1,onScrollEnd:function(){E=Math.round(this.y/40*-1),C.refresh()}})}function c(e,r){var l=e,t=r++;r>12&&(t-=12,l++);var a=new Date(l,t,1);return new Date(a.getTime()-864e5).getDate()}function m(){w(),b(),y()}function w(){e("#datePlugin").html('<div id="dateshadow"></div><div id="datePage" class="page"><section><div id="datemark"><a id="markyear"></a><a id="markmonth"></a><a id="markday"></a></div><div id="timemark"><a id="markhour"></a><a id="markminut"></a><a id="marksecond"></a></div><div id="datescroll"><div id="yearwrapper"><ul></ul></div><div id="monthwrapper"><ul></ul></div><div id="daywrapper"><ul></ul></div></div><div id="datescroll_datetime"><div id="Hourwrapper"><ul></ul></div><div id="Minutewrapper"><ul></ul></div><div id="Secondwrapper"><ul></ul></div></div></section><footer id="dateFooter"><div id="setcancle"><ul><li id="dateconfirm">确定</li><li id="datecancle">取消</li></ul></div></footer></div>')}function f(){e("#datePage").css("height","380px"),e("#datePage").css("top","60px"),e("#yearwrapper").css("position","absolute"),e("#yearwrapper").css("bottom","200px"),e("#monthwrapper").css("position","absolute"),e("#monthwrapper").css("bottom","200px"),e("#daywrapper").css("position","absolute"),e("#daywrapper").css("bottom","200px")}function b(){for(var r=(new Date).getFullYear(),l="<li>&nbsp;</li>",t=K.beginyear;t<=K.endyear;t++)t>r||(l+="<li>"+t+"年</li>");e("#yearwrapper ul").html(l+"<li>&nbsp;</li><li>&nbsp;</li>"),v(e("#yearwrapper ul li:eq("+I+")").html().substr(0,e("#yearwrapper ul li:eq("+I+")").html().length-1))}function v(r){for(var l=(new Date).getFullYear(),t=(e("#yearwrapper ul li:eq("+I+")").html().substr(0,e("#yearwrapper ul li:eq("+I+")").html().length-1),(new Date).getMonth()+1),a="<li>&nbsp;</li>",i=K.beginmonth;i<=K.endmonth;i++)(r="1900"==r?l:r)>=l&&i>t||(i<10&&(i="0"+i),a+="<li>"+i+"月</li>");e("#monthwrapper ul").html(a+"<li>&nbsp;</li><li>&nbsp;</li>")}function y(){e("#monthwrapper").find("li");var r=(new Date).getMonth()+1,l=e("#monthwrapper ul li:eq("+T+")").html().substr(0,e("#monthwrapper ul li:eq("+T+")").html().length-1),t=(new Date).getFullYear(),a=e("#yearwrapper ul li:eq("+I+")").html().substr(0,e("#yearwrapper ul li:eq("+I+")").html().length-1),i=(new Date).getDate();e("#daywrapper ul").html("");for(var n="<li>&nbsp;</li>",o=K.beginday;o<=K.endday;o++)strY="1900"==a?t:a,l="1900"==a?r:l,strY>=t&&1*l>=r&&o>i||o>30&&!testMoth(l)||"02"==l&&o>test2Moth(strY,l)||(n+="<li>"+o+"日</li>");e("#monthwrapper").find("li");e("#daywrapper ul").html(n+"<li>&nbsp;</li><li>&nbsp;</li>")}function g(){for(var e="<li>&nbsp;</li>",r=K.beginhour;r<=K.endhour;r++)e+="<li>"+r+"时</li>";return e+"<li>&nbsp;</li>"}function q(){for(var e="<li>&nbsp;</li>",r=K.beginminute;r<=K.endminute;r++)r<10&&(r="0"+r),e+="<li>"+r+"分</li>";return e+"<li>&nbsp;</li>"}function M(){var e="<li>&nbsp;</li>";return(e+="<li>上午</li><li>下午</li>")+"<li>&nbsp;</li>"}var S=e(this),k=e(this).is("input"),D=!1,H=new Date,I=1,T=1,x=1,Y=1,P=1,E=0,F=parseInt(H.getFullYear())-1900,O=parseInt(H.getMonth()+"")+1,_=parseInt(H.getDate()+""),j=parseInt(H.getHours()),Q=parseInt(H.getMinutes()),z=(parseInt(H.getYear()),null),A=null,B=null,C=null,G=null,J=null;e.fn.dateTools.defaultOptions={beginyear:1900,endyear:H.getFullYear()+50,beginmonth:1,endmonth:12,beginday:1,endday:31,beginhour:1,endhour:12,beginminute:0,endminute:59,curdate:!1,theme:"date",mode:null,event:"click",show:!0};var K=e.extend(!0,{},e.fn.dateTools.defaultOptions,r);"datetime"===K.theme&&(D=!0),K.show?S.bind(K.event,function(){m(),u(),p(),S.blur(),D&&(d(),i()),a(),s()}):S.unbind("click")}}(jQuery);