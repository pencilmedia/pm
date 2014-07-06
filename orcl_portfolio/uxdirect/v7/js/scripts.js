$(window).load(function(){
	$('#content').sprites({
		method:'corners'
	})
	
	$('cite').sprites({
		method:'vStretch'
	})
	
	$('a.more,.products a,nav li li a')
		.fancybox({
			transitionIn:'elastic',
			transitionOut:'elastic'
		})
	
	$('#form1').forms()
	
	$('nav .itm2')
		.bind('mouseenter',function(){
			$('>ul>li',this)
				.stop()
				.animate({
					height:48
				})
			$('.arrow',this)
				.css({
					backgroundPosition:'0 -16px'
				})
		})
		.bind('mouseleave',function(){
			$('>ul>li',this)
				.stop()
				.animate({
					height:0
				})
			$('.arrow',this)
				.css({
					backgroundPosition:'0 0'
				})
		})
		.trigger('mouseenter')
		.trigger('mouseleave')
		.find('ul>li')
			.height(0)
	
	$(window).resize(function(){
		$('#glob').css({
			height:document.body.offsetHeight>750?document.body.offsetHeight:750
		})
	})
	
	$('a.more,a.btn')
		.bind('mouseenter',function(){
			$(this)
				.stop()
				.animate({
					backgroundColor:'#fff',
					color:'#598a9f',
					borderLeftColor:'#cbcbcb',
					borderRightColor:'#cbcbcb',
					borderTopColor:'#cbcbcb',
					borderBottomColor:'#cbcbcb'
				})
		})
		.bind('mouseleave',function(){
			$(this)
				.stop()
				.animate({
					backgroundColor:'#372846',
					color:'#fff',
					borderLeftColor:'#372846',
					borderRightColor:'#372846',
					borderTopColor:'#372846',
					borderBottomColor:'#372846'
				})
		})
})

$(window).load(function(){
	
	function show_subpages(){
		show_subpages.ready=true
		bgSlider.sImg('images/bg-subpages.jpg')
		$.when(
		$('h1 a,.slogan').each(function(){
			var th=$(this)
			th
				.stop()
				.animate({
					right:-th.width()
				},function(){
					th.hide()
				})
		})).then(function(){
			var th=$('h1 a')
			th
				.addClass('sub_pages')
				.css({
					right:'auto',
					left:-th.width(),
					top:59
				})
				.show()
				.stop()
				.animate({
					left:0
				})
			nav.navs(false)
			$('nav>ul>li>a')
				.stop()
				.animate({
					width:200
				},function(){
					nav
						.navs(true)
						.navs(subpages_nav)
					.find('.active a').animate({paddingRight:50})
				})
			
			content
				.css({left:'100%'})
				.stop()
				.animate({
					left:'50%'
				},800)
			nav_active()
			
				
			$(window).resize(function(){
				var body=$('body'),
					bW=body.width()
				
				nav.find('.active a').css({
					width:bW/2-249
				})				
			}).trigger('resize')
		})
		
	}
	
	function nav_active(n){
		var pos=$('body').width()/2-249,
			act=nav.find('.active a'),
			oth=n==-1?nav.find('a'):act.parent().siblings().find('a')
		nav.navs(false)
		nav.find('.active a')
			.stop()
			.animate({
				width:pos,
				paddingRight:30
			})
		oth
			.stop()
			.animate({
				width:200									
			},800)
		$.when(nav.find('a')).then(function(){
			nav.navs(true)
		})
	}
	
	var nav=$('nav'),
		content=$('#content').css({left:'-100%'}),
		splash_nav={
			useHash:true,
			hoverIn:function(li,_){
				var th=$('>a',li)
					.stop()
					.animate({
						paddingRight:50
					},200)
				$.when(th).then(function(){
					th.animate({
						paddingRight:30
					},200)
				})
			},
			hoverOut:function(){}
		},
		subpages_nav={
			hoverIn:function(li,_){
				$('>a',li)
					.stop()
					.animate({
						paddingRight:50
					})
			},
			hoverOut:function(li,_){
				$('>a',li)
					.stop()
					.animate({
						paddingRight:30
					})
			}
		}
	nav
		.navs(splash_nav)
		.navs(function(n,_){
			show_subpages.ready||show_subpages()
			content.tabs(n)
			nav_active(_.n)
		})
	content.tabs()
	
	$('#gspinner').fadeOut()
})

;(function($){var c=['DOMMouseScroll','mousewheel'];$.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var i=c.length;i;)this.addEventListener(c[--i],handler,false);else this.onmousewheel=handler},teardown:function(){if(this.removeEventListener)for(var i=c.length;i;)this.removeEventListener(c[--i],handler,false);else this.onmousewheel=null}};$.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}});function handler(a){var b=[].slice.call(arguments,1),delta=0,returnValue=true;a=$.event.fix(a||window.event);a.type="mousewheel";if(a.wheelDelta)delta=a.wheelDelta/120;if(a.detail)delta=-a.detail/3;b.unshift(a,delta);return $.event.handle.apply(this,b)}})(jQuery);

eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('h.i[\'V\']=h.i[\'y\'];h.M(h.i,{B:\'C\',y:9(x,t,b,c,d){6 h.i[h.i.B](x,t,b,c,d)},14:9(x,t,b,c,d){6 c*(t/=d)*t+b},C:9(x,t,b,c,d){6-c*(t/=d)*(t-2)+b},13:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t+b;6-c/2*((--t)*(t-2)-1)+b},12:9(x,t,b,c,d){6 c*(t/=d)*t*t+b},Q:9(x,t,b,c,d){6 c*((t=t/d-1)*t*t+1)+b},O:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t*t+b;6 c/2*((t-=2)*t*t+2)+b},P:9(x,t,b,c,d){6 c*(t/=d)*t*t*t+b},L:9(x,t,b,c,d){6-c*((t=t/d-1)*t*t*t-1)+b},S:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t*t*t+b;6-c/2*((t-=2)*t*t*t-2)+b},F:9(x,t,b,c,d){6 c*(t/=d)*t*t*t*t+b},J:9(x,t,b,c,d){6 c*((t=t/d-1)*t*t*t*t+1)+b},K:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t*t*t*t+b;6 c/2*((t-=2)*t*t*t*t+2)+b},N:9(x,t,b,c,d){6-c*8.A(t/d*(8.g/2))+c+b},R:9(x,t,b,c,d){6 c*8.n(t/d*(8.g/2))+b},X:9(x,t,b,c,d){6-c/2*(8.A(8.g*t/d)-1)+b},11:9(x,t,b,c,d){6(t==0)?b:c*8.j(2,10*(t/d-1))+b},15:9(x,t,b,c,d){6(t==d)?b+c:c*(-8.j(2,-10*t/d)+1)+b},16:9(x,t,b,c,d){e(t==0)6 b;e(t==d)6 b+c;e((t/=d/2)<1)6 c/2*8.j(2,10*(t-1))+b;6 c/2*(-8.j(2,-10*--t)+2)+b},E:9(x,t,b,c,d){6-c*(8.q(1-(t/=d)*t)-1)+b},G:9(x,t,b,c,d){6 c*8.q(1-(t=t/d-1)*t)+b},H:9(x,t,b,c,d){e((t/=d/2)<1)6-c/2*(8.q(1-t*t)-1)+b;6 c/2*(8.q(1-(t-=2)*t)+1)+b},I:9(x,t,b,c,d){f s=1.l;f p=0;f a=c;e(t==0)6 b;e((t/=d)==1)6 b+c;e(!p)p=d*.3;e(a<8.u(c)){a=c;f s=p/4}m f s=p/(2*8.g)*8.v(c/a);6-(a*8.j(2,10*(t-=1))*8.n((t*d-s)*(2*8.g)/p))+b},T:9(x,t,b,c,d){f s=1.l;f p=0;f a=c;e(t==0)6 b;e((t/=d)==1)6 b+c;e(!p)p=d*.3;e(a<8.u(c)){a=c;f s=p/4}m f s=p/(2*8.g)*8.v(c/a);6 a*8.j(2,-10*t)*8.n((t*d-s)*(2*8.g)/p)+c+b},U:9(x,t,b,c,d){f s=1.l;f p=0;f a=c;e(t==0)6 b;e((t/=d/2)==2)6 b+c;e(!p)p=d*(.3*1.5);e(a<8.u(c)){a=c;f s=p/4}m f s=p/(2*8.g)*8.v(c/a);e(t<1)6-.5*(a*8.j(2,10*(t-=1))*8.n((t*d-s)*(2*8.g)/p))+b;6 a*8.j(2,-10*(t-=1))*8.n((t*d-s)*(2*8.g)/p)*.5+c+b},W:9(x,t,b,c,d,s){e(s==w)s=1.l;6 c*(t/=d)*t*((s+1)*t-s)+b},Y:9(x,t,b,c,d,s){e(s==w)s=1.l;6 c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},Z:9(x,t,b,c,d,s){e(s==w)s=1.l;e((t/=d/2)<1)6 c/2*(t*t*(((s*=(1.D))+1)*t-s))+b;6 c/2*((t-=2)*t*(((s*=(1.D))+1)*t+s)+2)+b},z:9(x,t,b,c,d){6 c-h.i.r(x,d-t,0,c,d)+b},r:9(x,t,b,c,d){e((t/=d)<(1/2.k)){6 c*(7.o*t*t)+b}m e(t<(2/2.k)){6 c*(7.o*(t-=(1.5/2.k))*t+.k)+b}m e(t<(2.5/2.k)){6 c*(7.o*(t-=(2.17/2.k))*t+.18)+b}m{6 c*(7.o*(t-=(2.19/2.k))*t+.1a)+b}},1b:9(x,t,b,c,d){e(t<d/2)6 h.i.z(x,t*2,0,c,d)*.5+b;6 h.i.r(x,t*2-d,0,c,d)*.5+c*.5+b}});',62,74,'||||||return||Math|function|||||if|var|PI|jQuery|easing|pow|75|70158|else|sin|5625||sqrt|easeOutBounce|||abs|asin|undefined||swing|easeInBounce|cos|def|easeOutQuad|525|easeInCirc|easeInQuint|easeOutCirc|easeInOutCirc|easeInElastic|easeOutQuint|easeInOutQuint|easeOutQuart|extend|easeInSine|easeInOutCubic|easeInQuart|easeOutCubic|easeOutSine|easeInOutQuart|easeOutElastic|easeInOutElastic|jswing|easeInBack|easeInOutSine|easeOutBack|easeInOutBack||easeInExpo|easeInCubic|easeInOutQuad|easeInQuad|easeOutExpo|easeInOutExpo|25|9375|625|984375|easeInOutBounce'.split('|'),0,{}))

;(function(d){d.each(['backgroundColor','borderBottomColor','borderLeftColor','borderRightColor','borderTopColor','color','outlineColor'],function(i,b){d.fx.step[b]=function(a){if(a.state==0){a.start=getColor(a.elem,b);a.end=getRGB(a.end)}a.elem.style[b]="rgb("+[Math.max(Math.min(parseInt((a.pos*(a.end[0]-a.start[0]))+a.start[0]),255),0),Math.max(Math.min(parseInt((a.pos*(a.end[1]-a.start[1]))+a.start[1]),255),0),Math.max(Math.min(parseInt((a.pos*(a.end[2]-a.start[2]))+a.start[2]),255),0)].join(",")+")"}});function getRGB(a){var b;if(a&&a.constructor==Array&&a.length==3)return a;if(b=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(a))return[parseInt(b[1]),parseInt(b[2]),parseInt(b[3])];if(b=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(a))return[parseFloat(b[1])*2.55,parseFloat(b[2])*2.55,parseFloat(b[3])*2.55];if(b=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(a))return[parseInt(b[1],16),parseInt(b[2],16),parseInt(b[3],16)];if(b=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(a))return[parseInt(b[1]+b[1],16),parseInt(b[2]+b[2],16),parseInt(b[3]+b[3],16)];if(b=/rgba\(0, 0, 0, 0\)/.exec(a))return e['transparent'];return e[d.trim(a).toLowerCase()]}function getColor(a,b){var c;do{c=d.curCSS(a,b);if(c!=''&&c!='transparent'||d.nodeName(a,"body"))break;b="backgroundColor"}while(a=a.parentNode);return getRGB(c)};var e={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);

$.fn.offsetRoot=function(root){
	if(root==undefined)
		root='body'
	var th=this,
		tmp=this[0],
		ret={left:tmp.offsetLeft,top:tmp.offsetTop}
	while(!$(tmp).is(root))
		tmp=tmp.offsetParent,
		ret.left+=tmp.offsetLeft,
		ret.top+=tmp.offsetTop
		
	return ret
}

$.fn.praParent=function(str){
	var ret
	this.each(function(){
		var th=$(this)
		while(th=th.parent())		
			if(th.is(str)||th.is('html'))
				break
		if(!th.is('html'))
			ret=ret?ret.add(th):th
	})
	return ret
}

$.fn.isPraParent=function(str){
	var ret
	this.each(function(){
		var th=$(this)
		while(th=th.parent())		
			if(th.is(str)||th.is('html'))
				break
		if(!th.is('html'))
			ret=ret?ret.add($(this)):$(this)
	})
	return ret
}

//prototype extends
Array.prototype.lastIndexOf=Array.prototype.lastIndexOf||function(val,i){
i=this.length-i||this.length
while(--i^-1)
	if(this[i]==val)
		return i
return -1
}

Array.prototype.indexOf=Array.prototype.indexOf||function(val,i){
i=i-1||-1
while(++i^this.length)
	if(this[i]==val)
		return i
return -1
}