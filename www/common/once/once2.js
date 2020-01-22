document.write('<script type="text/javascript" src="common/once/jquery.matchHeight-min.js"></script>');
var ua = navigator.userAgent;
var os, ver ='', browser = '', ie = '', sp = 0;
$(function(){
	//OS、端末判定
	if (ua.match(/Win(dows )?NT 10\.0/)) {
		os = 'win win10';
	} else if (ua.match(/Win(dows )?NT 6\.3/)) {
		os = "win win8-1";
	} else if (ua.match(/Win(dows )?NT 6\.2/)) {
		os = "win win8";
	} else if (ua.match(/Win(dows )?NT 6\.1/)) {
		os = 'win win7';
	} else if (ua.match(/Win(dows )?NT 6\.0/)) {
		os = 'win winVista';
	} else if (ua.match(/Win(dows )?(NT 5\.1|XP)/)) {
		os = 'win winXp';
	} else if (ua.match(/Mac|PPC/) && ua.search(/iPhone|iPod|iPad/) == -1) {
		os = 'mac';
	} else {
		sp = 1;
		if (ua.search(/iPhone/) != -1) {
			os = 'iphone';
		} else if(ua.search(/iPad/) != -1){
			os = 'ipad';
		} else if(ua.search(/Android/) != -1){
			os = 'android';
			if( ua.search(/Android 2/) != -1 ) { ver = 'ver_2'; }
			if( ua.search(/Android 3/) != -1 ) { ver = 'ver_3'; }
			if( ua.search(/Android 4/) != -1 ) { ver = 'ver_4'; }
		}
	}

	//ブラウザ判定
	if(ua.match(/msie/i) || ua.match(/Trident/i)){
		ie = "IE";
		if(ua.match(/Trident/i)) {
			browser = "IE11";
		} else if(ua.match(/msie 10/i)) {
			browser = "IE10";
		} else if(ua.match(/msie 9/i)) {
			browser = "IE9";
		} else if(ua.match(/msie 8/i)){
			browser = "IE8";
		} else if(ua.match(/msie 7/i)){
			browser = "IE7";
		} else if(ua.match(/msie 6/i)){
			browser = "IE6";
		}
	} else if(ua.match(/edge/i)) {
		browser = "edge";
	} else if(ua.match(/firefox/i)){
		browser = "firefox";
	} else if(ua.match(/opera/i)){
		browser = "opera";
	} else if(ua.match(/netscape/i)){
		browser = "netscape";
	} else if(ua.match(/safari/i)){
		if(ua.match(/chrome/i)){ browser = "chrome"; } else { browser = "safari"; }
	}
	$('body').addClass(os+' '+browser+' '+ver);
	if(ie){ $('body').addClass(ie); }
	if( sp == 1 ){ $('body').addClass('sp'); } else{ $('body').addClass('pc'); }

	// 電話番号
	$('.tel[data-tel]').on('click',function(){
		if( sp == 1 ){
			telNum = $(this).attr('data-tel');
			if(typeof gtag == 'function'){
				gtag('event', 'action', { 'event_category' : 'tel', 'event_label' : telNum });
			} else if(typeof ga == 'function'){
				ga('send', 'event', 'コンバージョン', '電話', telNum);
			}
			window.location.href = "tel:"+telNum;
		}
	});
	$('a[href^="tel:"]').on('click',function(){
		if( sp == 1 ){
			telNum = $(this).attr('href');
			telNum = telNum.replace('tel:','');
			if(typeof gtag == 'function'){
				gtag('event', 'action', { 'event_category' : 'tel', 'event_label' : telNum });
			} else if(typeof ga == 'function'){
				ga('send', 'event', 'コンバージョン', '電話', telNum);
			}
			return true;
		} else{
			return false;
		}
	});
	$('a.ga_link').on('click',function(){
		ahref = $(this).attr('href');
		if(typeof gtag == 'function'){
			gtag('event', 'action', { 'event_category' : 'link', 'event_label' : ahref });
		} else if(typeof ga == 'function'){
			ga('send', 'event', 'リンク', 'link', ahref);
		}
		return true;
	});
	
	function converter(M){
		var str="", str_as="";
		for(var i=0;i<M.length;i++){
			str_as = M.charCodeAt(i);
			str += String.fromCharCode(str_as + 1);
			}
		return str;
	}
	function mail_to(k1,k2){
		eval(String.fromCharCode(108,111,99,97,116,105,111,110,46,104,114,101,102,32,61,32,39,109,97,105,108,116,111,58) + 
		escape(k1) + 
		converter(String.fromCharCode(104,109,101,110,63,115,96,102,44,114,98,103,110,110,107,45,98,110,45,105,111,62,114,116,97,105,100,98,115,60)) 
		+ escape(k2) + "'");
	}
	$('.ga_mail').on('click',function(){
		if(typeof gtag == 'function'){
			gtag('event', 'action', { 'event_category' : 'link', 'event_label' : 'メール' });
		} else if(typeof ga == 'function'){
			ga('send', 'event', 'リンク', 'link', 'メール');
		}
		mail_to('','');
	});
	
	$('.img_back').each(function(){
		if( $(this).children('img') ){
			src = $(this).children('img').attr('src');
			$(this).css({'background-image':'url('+src+')'});
		}
	});
	
	
	// wcTopMainScroll
	if( $('#top_wrap .top_unit').length > 1 ){
		
		var wcTms = {
			max   : ( $('#top_wrap .top_unit').length - 1),
			now   : 0,
			time  : 0,
			speed : 4000,
			wait : 50
		};
		
		$('html').addClass('fixed');
		var wcTmsTimer = setTimeout(function(){
			wcTmsSlide(1);
		}, wcTms.speed);
		
		function wcTmsSlide(delta){
			if( delta < 0 && wcTms.now == 0 ){ return false; }
			if( delta > 0 && wcTms.now == wcTms.max ){ return false; }
			
			clearTimeout(wcTmsTimer);
			nextNum = wcTms.now + delta;
			
			$('#top_wrap .top_unit').eq(nextNum).removeClass('show back').addClass('change');
			$('#top_wrap .top_unit').eq(wcTms.now).addClass('change').removeClass('show');
			$('#top_wrap .top_unit').eq(nextNum).addClass('show');
			$('#top_wrap .top_unit').eq(wcTms.now).removeClass('change');
			wcTms.now = nextNum;
			if( delta > 0 ){
				$('html').removeClass('fixed');
			} else{
				$('html').addClass('fixed');
			}
		}
		
		$('#base').on('mousewheel wheel',function(e){
			var now = new Date().getTime();
			if ( ( now - wcTms.wait ) > wcTms.time ){
				var delta = e.originalEvent.deltaY ? -(e.originalEvent.deltaY) : e.originalEvent.wheelDelta ? e.originalEvent.wheelDelta : -(e.originalEvent.detail);
				clearTimeout(wcTmsTimer);
				if( delta < 0 ){
					wcTmsSlide(1);
				} else{
					if( $(this).scrollTop() < 30 ){
						wcTmsSlide(-1);
					}
				}
			}
			wcTms.time = now;
		});
		$('.scroll').on('click',function(){
			clearTimeout(wcTmsTimer);
			wcTmsSlide(1);
		});
	}
});
