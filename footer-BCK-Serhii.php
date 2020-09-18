<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glaminati
 */

?>

		</div><!-- #content -->
<?php if(is_single()){ ?>
		<style>
		  @media screen and (max-width: 500px) {
		  .footersticky
		   {
		     position: fixed; 
		     bottom:0px;
		     left:0;
		     z-index: 99; 
		     width:100%; 
		     height:50px;
		   }
		  }
		  
		  @media screen and (min-width: 500px) {
	          .footersticky
	           {
	             position: fixed;
	             bottom:0px;
	             left:0;
	             z-index: 99;
	             width:100%;
	             height:90px;
	           }
	          }
		</style>

		<div align="center" class="footersticky">
			  <div style="z-index:-99; height:100%; width:100%; position:fixed; background-color: white; opacity: 0.75;"></div>
			<div data-aaad='true' data-aa-adunit='/22181265/LHS_728v_3'></div>
			<div data-aaad='true' data-aa-adunit='/22181265/LHS_MOB_320v_1'></div>
	    </div>
<?php } ?>

		<footer id="colophon" class="site-footer">
			<div class="cb-cat-container">
				<!-- <div class="row follow_us_container">
					<div class="col-12">
						< ?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("ffollowus") ) : endif; ?>
					</div>
				</div>-->
				<div class="row footer-first-line">
					<div class="col-12"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("ffl-1") ) : endif; ?> </div>
				</div>
				<div class="row footer-second-line">
					<div class="col-5"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("fsl-2") ) : endif; ?> </div>
					<div class="col-7"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("fsl-1") ) : endif; ?> </div>
				</div>
			</div>

			<div class="row footer-third-line">
				<div class="cb-cat-container">
					<div class="col-12"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("ftl") ) : endif; ?> </div>
				</div>
			</div>
		</footer>
	</div><!-- #page -->
<?php wp_footer(); ?>
<script>
var element=document.getElementsByClassName('instagram-media');
	if(element){
		(function(){
var global=this;
var __DEV__=false,__BUNDLE_START_TIME__=this.nativePerformanceNow?nativePerformanceNow():Date.now(),process=this.process||{};process.env=process.env||{};process.env.NODE_ENV="production";!(function(r){"use strict";function e(){return f="number"==typeof __NUM_MODULES__?Array(0|__NUM_MODULES__):Object.create(null)}function t(r){var e=r,t=f[e];return t&&t.isInitialized?t.publicModule.exports:o(e,t)}function n(r){var e=r;if(f[e]&&f[e].importedDefault!==c)return f[e].importedDefault;var n=t(e),i=n&&n.__esModule?n.default:n;return f[e].importedDefault=i}function i(r){var e=r;if(f[e]&&f[e].importedAll!==c)return f[e].importedAll;var n,i=t(e);if(i&&i.__esModule)n=i;else{if(n={},i)for(var o in i)p.call(i,o)&&(n[o]=i[o]);n.default=i}return f[e].importedAll=n}function o(e,t){if(!s&&r.ErrorUtils){s=!0;var n;try{n=l(e,t)}catch(e){r.ErrorUtils.reportFatalError(e)}return s=!1,n}return l(e,t)}function u(r){return{segmentId:r>>>_,localId:r&v}}function l(e,o){!o&&r.__defineModule&&(r.__defineModule(e),o=f[e]);var l=r.nativeRequire;if(!o&&l){var c=u(e),p=c.segmentId;l(c.localId,p),o=f[e]}if(!o)throw a(e);if(o.hasError)throw d(e,o.error);o.isInitialized=!0;var s=o,_=s.factory,v=s.dependencyMap;try{var M=o.publicModule;if(M.id=e,h.length>0)for(var m=0;m<h.length;++m)h[m].cb(e,M);return _(r,t,n,i,M,M.exports,v),o.factory=void 0,o.dependencyMap=void 0,M.exports}catch(r){throw o.hasError=!0,o.error=r,o.isInitialized=!1,o.publicModule.exports=void 0,r}}function a(r){var e='Requiring unknown module "'+r+'".';return Error(e)}function d(r,e){var t=r;return Error('Requiring module "'+t+'", which threw an exception: '+e)}r.__r=t,r.__d=function(r,e,t){null==f[e]&&(f[e]={dependencyMap:t,factory:r,hasError:!1,importedAll:c,importedDefault:c,isInitialized:!1,publicModule:{exports:{}}})},r.__c=e;var f=e(),c={},p={}.hasOwnProperty;t.importDefault=n,t.importAll=i;var s=!1,_=16,v=65535;t.unpackModuleId=u,t.packModuleId=function(r){return(r.segmentId<<_)+r.localId};var h=[];t.registerHook=function(r){var e={cb:r};return h.push(e),{release:function(){for(var r=0;r<h.length;++r)if(h[r]===e){h.splice(r,1);break}}}}})('undefined'!=typeof global?global:'undefined'!=typeof window?window:this);
var __d=this.__d;
__d(function(g,r,i,a,m,e,d){"use strict";function t(t){return!isNaN(Number(t))}function n(t,n){t.className+=' '+n}function o(t,n){t.className=t.className.replace(n,'')}function s(t){for(var n,o=document.getElementsByTagName('iframe'),s=o.length-1;s>=0;s--){var c=o[s];if(c.contentWindow===t.source){n=c;break}}return n}function c(t){var n=t.clientWidth,o=window.devicePixelRatio;return n&&o?parseInt(n*o,10):0}function l(t){var n=t.match(_);return n?n[1].replace(/^https?:\/\/(www.)?/,'https://www.')+'/':null}function u(t){if(t.hasAttribute(j))return t.getAttribute(j);for(var n=t.getElementsByTagName('a'),o=n.length-1;o>=0;o--){var s=l(n[o].href);if(s)return s}return null}function f(t){'performance'in window&&null!=window.performance&&'object'==typeof window.performance&&'function'==typeof window.performance.now&&t(window.performance.now())}function p(s,l){var u=J++,p=N+u,w={};s.id||(s.id=R+u);var h=l.replace(I,'$1/');if(h+='embed/',s.hasAttribute(v)&&(h+='captioned/'),h+='?cr=1',s.hasAttribute(G)){var y=parseInt(s.getAttribute(G),10);t(y)&&(h+='&v='+y)}var O=c(s);O&&(h+='&wp='+O.toString()),h+='&rd='+encodeURIComponent(window.location.origin);var U=window.location.pathname;if(U){var B=U+(window.location.search||'');h+='&rp='+encodeURIComponent(B.substring(0,200))}h=h.replace(x,k),w.ci=u,f(function(t){w.os=t});var j=encodeURIComponent(JSON.stringify(w)),_=document.createElement('iframe');_.className=s.className,_.id=p,_.src=h+'#'+j,_.setAttribute('allowTransparency','true'),_.setAttribute('allowfullscreen','true');var S=s.style.position;S&&_.setAttribute($,S),_.setAttribute('frameBorder','0'),_.setAttribute('height','0'),_.setAttribute(L,s.id),_.setAttribute('scrolling','no'),_.setAttribute('style',s.style.cssText+';'+E),_.style.position='absolute',s.parentNode.insertBefore(_,s),n(s,T),o(s,C),D[p]=!0,f(function(t){W[p]={frameLoading:t}}),setTimeout(function(){b(p)},A)}function b(t){D.hasOwnProperty(t)&&(delete D[t],h())}function w(t){if(B.test(t.origin)){var o=s(t);if(o){var c,l=o.id;try{c=JSON.parse(t.data)}catch(t){}if('object'==typeof c&&'string'==typeof c.type&&'object'==typeof c.details){var u=c,p=u.details,w=null;switch(u.type){case i(d[0]).MOUNTED:var h=document.getElementById(o.getAttribute(L));if(h||i(d[1])(0),w=h.clientHeight,o.style.position=o.hasAttribute($)?o.getAttribute($):'','object'==typeof p.styles&&p.styles.length)try{for(var y=0;y<p.styles.length;y++){var v=p.styles[y][0],N=p.styles[y][1];o.style[v]=N}}catch(t){}n(o,U),h.parentNode&&h.parentNode.removeChild(h),b(l),f(function(t){W[l]&&(W[l].contentLoaded=t,window.__igEmbedLoaded&&window.__igEmbedLoaded({frameId:l,stats:W[l]}))});break;case i(d[0]).LOADING:f(function(t){W[l]&&(W[l].contentLoading=t)});break;case i(d[0]).MEASURE:var A=p.height;S[l]!==A&&(w=A);break;case i(d[0]).UNMOUNTING:delete S[l]}null!==w&&(o.height=S[l]=w)}}}}function h(){for(var t=document.getElementsByClassName(C),n=0;n<t.length;n++){if(Object.keys(D).length>=O)break;var o=t[n];if('BLOCKQUOTE'===o.tagName){var s=u(o);s&&p(o,s)}}}function y(){var t=this;if(!M){if(P)return;P=!0}i(d[2])(function(){h(),M||(i(d[3]).add(window,'message',w.bind(t)),M=!0)})}var v='data-instgrm-captioned',N='instagram-embed-',A=1e4,E="\n  background-color: white;\n  border-radius: 3px;\n  border: 1px solid #dbdbdb;\n  box-shadow: none;\n  display: block;\n  margin: 0;\n  min-width: 326px;\n  padding: 0;\n",x=/^https?:\/\//,k='https://',I=/^(.*?)\/?(\?.*|#|$)/,O=3,C='instagram-media',T="instagram-media-registered",U="instagram-media-rendered",B=new RegExp("^https?://([\\w-]+\\.)*("+['instagram\\.com','instagr\\.am'].join('|')+")$"),L='data-instgrm-payload-id',R='instagram-media-payload-',j='data-instgrm-permalink',_=new RegExp('^('+B.source.replace(/^\^/,'').replace(/\$$/,'')+"/p/[^/]+)"),$='data-instgrm-preserve-position',G='data-instgrm-version',S={},M=!1,D={},J=0,P=!1,W={};r(d[4]).getGlobalContext().process||(y(),r(d[4]).getGlobalContext().process=y)},0,[1,2,3,4,5]);
__d(function(g,r,i,a,m,e,d){m.exports={MOUNTED:"MOUNTED",LOADING:"LOADING",UNMOUNTING:"UNMOUNTING",MEASURE:"MEASURE"}},1,[]);
__d(function(g,r,i,a,m,e,d){'use strict';var n=r(d[0]);m.exports=function(o,t){if(!o){var s;if(void 0===t)s=new Error("Minified exception occurred; use the non-minified dev environment for the full error message and additional helpful warnings.");else{for(var f=[t],l=2,u=arguments.length;l<u;l++)f.push(arguments[l]);(s=new Error(n.apply(null,f))).name='Invariant Violation',s.messageWithParams=f}throw s.framesToPop=1,s}}},2,[6]);
__d(function(g,r,i,a,m,e,d){var n=function(){for(var t=arguments.length,f=new Array(t),s=0;s<t;s++)f[s]=arguments[s];return(f=f.map(function(n){return String(n)}))[0].split('%s').length!==f.length?n('ex args number mismatch: %s',JSON.stringify(f)):n._prefix+JSON.stringify(f)+n._suffix};n._prefix='<![EX[',n._suffix=']]>',m.exports=n},6,[]);
__d(function(g,r,i,a,m,e,d){"use strict";function t(){if(o){for(var t;t=o.shift();)t();o=null}}Object.defineProperty(e,'__esModule',{value:!0});var o=null;if(r(d[0]).canUseDOM){var n,u,c=null===(n=document)||void 0===n?void 0:null===(u=n.documentElement)||void 0===u?void 0:u.doScroll;if(!('readyState'in document?'complete'===document.readyState||'loading'!==document.readyState&&!c:!!document.body)&&(o=[],i(d[1]).add(document,'DOMContentLoaded',t),i(d[1]).add(window,'load',t),c&&window===window.top)){var l=function(){try{c('left')}catch(t){return void setTimeout(l,0)}t()};l()}}e.default=function(t){o?o.push(t):t()}},3,[7,4]);
__d(function(g,r,i,a,m,e,d){'use strict';var n=!('undefined'==typeof window||!window.document||!window.document.createElement||window._ssr),t={canUseDOM:n,canUseWorkers:'undefined'!=typeof Worker,canUseEventListeners:n&&!(!window.addEventListener&&!window.attachEvent),canUseViewport:n&&!!window.screen,isInWorker:!n};m.exports=t},7,[]);
__d(function(g,r,i,a,m,e,d){"use strict";Object.defineProperty(e,'__esModule',{value:!0});var t=!1,n=i(d[0])(function(){try{var n=Object.defineProperty({},'passive',{get:function(){t=!0}});r(d[1]).canUseDOM&&(window.addEventListener('test',null,n),window.removeEventListener('test',null,n))}catch(t){}return t}),o={capture:!1},s=(function(){function t(t){this.$EventListenerHelper1=null,this.$EventListenerHelper1=t}t.add=function(s,u,v,l){void 0===l&&(l=o);var c=l;return n()||(c='boolean'!=typeof l&&!!l.capture),s.addEventListener(u,v,c),new t(function(){s.removeEventListener(u,v,c)})};return t.prototype.remove=function(){this.$EventListenerHelper1&&(this.$EventListenerHelper1(),this.$EventListenerHelper1=null)},t})();e.default=s},4,[8,7]);
__d(function(g,r,i,a,m,e,d){function n(c,o){if('function'!=typeof c||null!=o&&'function'!=typeof o)throw new TypeError(t);var f=function(){var n=arguments,t=o?o.apply(this,n):n[0],u=f.cache;if(u.has(t))return u.get(t);var h=c.apply(this,n);return f.cache=u.set(t,h)||u,h};return f.cache=new(n.Cache||r(d[0])),f}var t='Expected a function';n.Cache=r(d[0]),m.exports=n},8,[9]);
__d(function(g,r,i,a,m,e,d){function t(t){var o=-1,p=null==t?0:t.length;for(this.clear();++o<p;){var l=t[o];this.set(l[0],l[1])}}t.prototype.clear=r(d[0]),t.prototype.delete=r(d[1]),t.prototype.get=r(d[2]),t.prototype.has=r(d[3]),t.prototype.set=r(d[4]),m.exports=t},9,[10,11,12,13,14]);
__d(function(g,r,i,a,m,e,d){m.exports=function(){this.size=0,this.__data__={hash:new(r(d[0])),map:new(r(d[1])||r(d[2])),string:new(r(d[0]))}}},10,[15,16,17]);
__d(function(g,r,i,a,m,e,d){function t(t){var o=-1,p=null==t?0:t.length;for(this.clear();++o<p;){var l=t[o];this.set(l[0],l[1])}}t.prototype.clear=r(d[0]),t.prototype.delete=r(d[1]),t.prototype.get=r(d[2]),t.prototype.has=r(d[3]),t.prototype.set=r(d[4]),m.exports=t},15,[18,19,20,21,22]);
__d(function(g,r,i,a,m,e,d){m.exports=function(){this.__data__=r(d[0])?r(d[0])(null):{},this.size=0}},18,[23]);
__d(function(g,r,i,a,m,e,d){var t=r(d[0])(Object,'create');m.exports=t},23,[24]);
__d(function(g,r,i,a,m,e,d){m.exports=function(n,o){var t=r(d[0])(n,o);return r(d[1])(t)?t:void 0}},24,[25,26]);
__d(function(g,r,i,a,m,e,d){m.exports=function(n,o){return null==n?void 0:n[o]}},25,[]);
__d(function(g,r,i,a,m,e,d){var t=/^\[object .+?Constructor\]$/,o=Function.prototype,n=Object.prototype,c=o.toString,p=n.hasOwnProperty,u=RegExp('^'+c.call(p).replace(/[\\^$.*+?()[\]{}|]/g,'\\$&').replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g,'$1.*?')+'$');m.exports=function(o){return!(!r(d[0])(o)||r(d[1])(o))&&(r(d[2])(o)?u:t).test(r(d[3])(o))}},26,[27,28,29,30]);
__d(function(g,r,i,a,m,e,d){m.exports=function(n){var t=typeof n;return null!=n&&('object'==t||'function'==t)}},27,[]);
__d(function(g,r,i,a,m,e,d){var n=(function(){var n=/[^.]+$/.exec(r(d[0])&&r(d[0]).keys&&r(d[0]).keys.IE_PROTO||'');return n?'Symbol(src)_1.'+n:''})();m.exports=function(t){return!!n&&n in t}},28,[31]);
__d(function(g,r,i,a,m,e,d){m.exports=r(d[0])['__core-js_shared__']},31,[32]);
__d(function(g,r,i,a,m,e,d){var t='object'==typeof self&&self&&self.Object===Object&&self,f=r(d[0])||t||Function('return this')();m.exports=f},32,[33]);
__d(function(g,r,i,a,m,e,d){var t='object'==typeof g&&g&&g.Object===Object&&g;m.exports=t},33,[]);
__d(function(g,r,i,a,m,e,d){var n='[object AsyncFunction]',t='[object Function]',o='[object GeneratorFunction]',c='[object Proxy]';m.exports=function(u){if(!r(d[0])(u))return!1;var b=r(d[1])(u);return b==t||b==o||b==n||b==c}},29,[27,34]);
__d(function(g,r,i,a,m,e,d){var n='[object Null]',t='[object Undefined]',o=r(d[0])?r(d[0]).toStringTag:void 0;m.exports=function(c){return null==c?void 0===c?t:n:o&&o in Object(c)?r(d[1])(c):r(d[2])(c)}},34,[35,36,37]);
__d(function(g,r,i,a,m,e,d){m.exports=r(d[0]).Symbol},35,[32]);
__d(function(g,r,i,a,m,e,d){var t=Object.prototype,o=t.hasOwnProperty,n=t.toString,c=r(d[0])?r(d[0]).toStringTag:void 0;m.exports=function(t){var l=o.call(t,c),v=t[c];try{t[c]=void 0}catch(t){}var p=n.call(t);return l?t[c]=v:delete t[c],p}},36,[35]);
__d(function(g,r,i,a,m,e,d){var t=Object.prototype.toString;m.exports=function(n){return t.call(n)}},37,[]);
__d(function(g,r,i,a,m,e,d){var t=Function.prototype.toString;m.exports=function(n){if(null!=n){try{return t.call(n)}catch(t){}try{return n+''}catch(t){}}return''}},30,[]);
__d(function(g,r,i,a,m,e,d){m.exports=function(t){var s=this.has(t)&&delete this.__data__[t];return this.size-=s?1:0,s}},19,[]);
__d(function(g,r,i,a,m,e,d){var _='__lodash_hash_undefined__',t=Object.prototype.hasOwnProperty;m.exports=function(n){var o=this.__data__;if(r(d[0])){var h=o[n];return h===_?void 0:h}return t.call(o,n)?o[n]:void 0}},20,[23]);
__d(function(g,r,i,a,m,e,d){var t=Object.prototype.hasOwnProperty;m.exports=function(o){var n=this.__data__;return r(d[0])?void 0!==n[o]:t.call(n,o)}},21,[23]);
__d(function(g,r,i,a,m,e,d){var _='__lodash_hash_undefined__';m.exports=function(s,t){var h=this.__data__;return this.size+=this.has(s)?0:1,h[s]=r(d[0])&&void 0===t?_:t,this}},22,[23]);
__d(function(g,r,i,a,m,e,d){var n=r(d[0])(r(d[1]),'Map');m.exports=n},16,[24,32]);
__d(function(g,r,i,a,m,e,d){function t(t){var o=-1,p=null==t?0:t.length;for(this.clear();++o<p;){var l=t[o];this.set(l[0],l[1])}}t.prototype.clear=r(d[0]),t.prototype.delete=r(d[1]),t.prototype.get=r(d[2]),t.prototype.has=r(d[3]),t.prototype.set=r(d[4]),m.exports=t},17,[38,39,40,41,42]);
__d(function(g,r,i,a,m,e,d){m.exports=function(){this.__data__=[],this.size=0}},38,[]);
__d(function(g,r,i,a,m,e,d){var t=Array.prototype.splice;m.exports=function(n){var o=this.__data__,p=r(d[0])(o,n);return!(p<0||(p==o.length-1?o.pop():t.call(o,p,1),--this.size,0))}},39,[43]);
__d(function(g,r,i,a,m,e,d){m.exports=function(n,t){for(var f=n.length;f--;)if(r(d[0])(n[f][0],t))return f;return-1}},43,[44]);
__d(function(g,r,i,a,m,e,d){m.exports=function(n,t){return n===t||n!=n&&t!=t}},44,[]);
__d(function(g,r,i,a,m,e,d){m.exports=function(t){var _=this.__data__,n=r(d[0])(_,t);return n<0?void 0:_[n][1]}},40,[43]);
__d(function(g,r,i,a,m,e,d){m.exports=function(t){return r(d[0])(this.__data__,t)>-1}},41,[43]);
__d(function(g,r,i,a,m,e,d){m.exports=function(t,s){var _=this.__data__,n=r(d[0])(_,t);return n<0?(++this.size,_.push([t,s])):_[n][1]=s,this}},42,[43]);
__d(function(g,r,i,a,m,e,d){m.exports=function(t){var n=r(d[0])(this,t).delete(t);return this.size-=n?1:0,n}},11,[45]);
__d(function(g,r,i,a,m,e,d){m.exports=function(t,n){var _=t.__data__;return r(d[0])(n)?_['string'==typeof n?'string':'hash']:_.map}},45,[46]);
__d(function(g,r,i,a,m,e,d){m.exports=function(n){var o=typeof n;return'string'==o||'number'==o||'symbol'==o||'boolean'==o?'__proto__'!==n:null===n}},46,[]);
__d(function(g,r,i,a,m,e,d){m.exports=function(t){return r(d[0])(this,t).get(t)}},12,[45]);
__d(function(g,r,i,a,m,e,d){m.exports=function(n){return r(d[0])(this,n).has(n)}},13,[45]);
__d(function(g,r,i,a,m,e,d){m.exports=function(s,t){var n=r(d[0])(this,s),h=n.size;return n.set(s,t),this.size+=n.size==h?0:1,this}},14,[45]);
__d(function(g,r,i,a,m,e,d){"use strict";Object.defineProperty(e,'__esModule',{value:!0}),window.instgrm||(window.instgrm={Embeds:{}}),e.getGlobalContext=function(){return window.instgrm.Embeds}},5,[]);
global.__r(0);
}).call({});
	}
</script>

<style>
@font-face {
	font-display:fallback;
  font-family: 'ftwp-icon';
  src: url("/wp-content/themes/thegm/fonts/icons.eot?45335921");
  src: url("/wp-content/themes/thegm/fonts/icons.eot?45335921#iefix") format("embedded-opentype"), url("/wp-content/themes/thegm/fonts/icons.woff2?45335921") format("woff2"), url("/wp-content/themes/thegm/fonts/icons.woff?45335921") format("woff"), url("/wp-content/themes/thegm/fonts/icons.ttf?45335921") format("truetype"), url("/wp-content/themes/thegm/fonts/icons.svg?45335921#fontello") format("svg");
 }
.slick-loading .slick-slide,.slick-loading .slick-track{visibility:hidden}.slick-track:after,.wpsisac-clearfix,.wpsisac-clearfix::after,.wpsisac-slider-nav{clear:both}.wp-block-audio figcaption{margin-top:.5em;margin-bottom:1em;color:#555d66;text-align:center;font-size:13px}.wp-block-audio audio{width:100%;min-width:300px}.editor-block-list__layout .reusable-block-edit-panel{align-items:center;background:#f8f9f9;color:#555d66;display:flex;flex-wrap:wrap;font-size:13px;top:-14px;margin:0 -14px;padding:8px 14px;position:relative;z-index:7}.editor-block-list__layout .editor-block-list__layout .reusable-block-edit-panel{margin:0 -14px;padding:8px 14px}.editor-block-list__layout .reusable-block-edit-panel .reusable-block-edit-panel__spinner{margin:0 5px}.editor-block-list__layout .reusable-block-edit-panel .reusable-block-edit-panel__info{margin-right:auto}.editor-block-list__layout .reusable-block-edit-panel .reusable-block-edit-panel__label{margin-right:8px;white-space:nowrap;font-weight:600}.editor-block-list__layout .reusable-block-edit-panel .reusable-block-edit-panel__title{flex:1 1 100%;font-size:14px;height:30px;margin:4px 0 8px}.editor-block-list__layout .reusable-block-edit-panel .components-button.reusable-block-edit-panel__button{flex-shrink:0}@media (min-width:960px){.editor-block-list__layout .reusable-block-edit-panel{flex-wrap:nowrap}.editor-block-list__layout .reusable-block-edit-panel .reusable-block-edit-panel__title{margin:0}.editor-block-list__layout .reusable-block-edit-panel .components-button.reusable-block-edit-panel__button{margin:0 0 0 5px}}.editor-block-list__layout .reusable-block-indicator{background:#fff;border-left:1px dashed #e2e4e7;color:#555d66;border-bottom:1px dashed #e2e4e7;top:-14px;height:30px;padding:4px;position:absolute;z-index:1;width:30px;right:-14px}.wp-block-button{color:#fff;margin-bottom:1.5em}.wp-block-button.aligncenter{text-align:center}.wp-block-button.alignright{text-align:right}.wp-block-button__link{background-color:#32373c;border:none;border-radius:28px;box-shadow:none;color:inherit;cursor:pointer;display:inline-block;font-size:18px;margin:0;padding:12px 24px;text-align:center;text-decoration:none;white-space:normal;overflow-wrap:break-word}.wp-block-button__link:active,.wp-block-button__link:focus,.wp-block-button__link:hover{color:inherit}.is-style-squared .wp-block-button__link{border-radius:0}.is-style-outline{color:#32373c}.is-style-outline .wp-block-button__link{background:0 0;border:2px solid currentcolor}.wp-block-categories.alignleft{margin-right:2em}.wp-block-categories.alignright{margin-left:2em}.wp-block-columns{display:flex;flex-wrap:wrap}@media (min-width:782px){.wp-block-columns{flex-wrap:nowrap}}.wp-block-column{flex:1;margin-bottom:1em;flex-basis:100%;min-width:0;overflow-wrap:break-word}@media (min-width:600px){.wp-block-column{flex-basis:50%;flex-grow:0}.wp-block-column:not(:last-child),.wp-block-column:nth-child(odd){margin-right:32px}.wp-block-column:not(:first-child),.wp-block-column:nth-child(even){margin-left:32px}}.wp-block-cover,.wp-block-cover-image{position:relative;background-color:#000;background-size:cover;background-position:center center;min-height:430px;width:100%;margin:0 0 1.5em;display:flex;justify-content:center;align-items:center;overflow:hidden}.wp-block-cover-image.has-left-content,.wp-block-cover.has-left-content{justify-content:flex-start}.wp-block-cover-image.has-left-content .wp-block-cover-image-text,.wp-block-cover-image.has-left-content .wp-block-cover-text,.wp-block-cover-image.has-left-content h2,.wp-block-cover.has-left-content .wp-block-cover-image-text,.wp-block-cover.has-left-content .wp-block-cover-text,.wp-block-cover.has-left-content h2{margin-left:0;text-align:left}.wp-block-cover-image.has-right-content,.wp-block-cover.has-right-content{justify-content:flex-end}.wp-block-cover-image.has-right-content .wp-block-cover-image-text,.wp-block-cover-image.has-right-content .wp-block-cover-text,.wp-block-cover-image.has-right-content h2,.wp-block-cover.has-right-content .wp-block-cover-image-text,.wp-block-cover.has-right-content .wp-block-cover-text,.wp-block-cover.has-right-content h2{margin-right:0;text-align:right}.wp-block-cover .wp-block-cover-image-text,.wp-block-cover .wp-block-cover-text,.wp-block-cover h2,.wp-block-cover-image .wp-block-cover-image-text,.wp-block-cover-image .wp-block-cover-text,.wp-block-cover-image h2{color:#fff;font-size:2em;line-height:1.25;z-index:1;margin-bottom:0;max-width:610px;padding:14px;text-align:center}.wp-block-cover .wp-block-cover-image-text a,.wp-block-cover .wp-block-cover-image-text a:active,.wp-block-cover .wp-block-cover-image-text a:focus,.wp-block-cover .wp-block-cover-image-text a:hover,.wp-block-cover .wp-block-cover-text a,.wp-block-cover .wp-block-cover-text a:active,.wp-block-cover .wp-block-cover-text a:focus,.wp-block-cover .wp-block-cover-text a:hover,.wp-block-cover h2 a,.wp-block-cover h2 a:active,.wp-block-cover h2 a:focus,.wp-block-cover h2 a:hover,.wp-block-cover-image .wp-block-cover-image-text a,.wp-block-cover-image .wp-block-cover-image-text a:active,.wp-block-cover-image .wp-block-cover-image-text a:focus,.wp-block-cover-image .wp-block-cover-image-text a:hover,.wp-block-cover-image .wp-block-cover-text a,.wp-block-cover-image .wp-block-cover-text a:active,.wp-block-cover-image .wp-block-cover-text a:focus,.wp-block-cover-image .wp-block-cover-text a:hover,.wp-block-cover-image h2 a,.wp-block-cover-image h2 a:active,.wp-block-cover-image h2 a:focus,.wp-block-cover-image h2 a:hover{color:#fff}.wp-block-cover-image.has-parallax,.wp-block-cover.has-parallax{background-attachment:fixed}@supports (-webkit-overflow-scrolling:touch){.wp-block-cover-image.has-parallax,.wp-block-cover.has-parallax{background-attachment:scroll}}.wp-block-cover-image.has-background-dim::before,.wp-block-cover.has-background-dim::before{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background-color:inherit;opacity:.5;z-index:1}.wp-block-cover-image.has-background-dim.has-background-dim-10::before,.wp-block-cover.has-background-dim.has-background-dim-10::before{opacity:.1}.wp-block-cover-image.has-background-dim.has-background-dim-20::before,.wp-block-cover.has-background-dim.has-background-dim-20::before{opacity:.2}.wp-block-cover-image.has-background-dim.has-background-dim-30::before,.wp-block-cover.has-background-dim.has-background-dim-30::before{opacity:.3}.wp-block-cover-image.has-background-dim.has-background-dim-40::before,.wp-block-cover.has-background-dim.has-background-dim-40::before{opacity:.4}.wp-block-cover-image.has-background-dim.has-background-dim-50::before,.wp-block-cover.has-background-dim.has-background-dim-50::before{opacity:.5}.wp-block-cover-image.has-background-dim.has-background-dim-60::before,.wp-block-cover.has-background-dim.has-background-dim-60::before{opacity:.6}.wp-block-cover-image.has-background-dim.has-background-dim-70::before,.wp-block-cover.has-background-dim.has-background-dim-70::before{opacity:.7}.wp-block-cover-image.has-background-dim.has-background-dim-80::before,.wp-block-cover.has-background-dim.has-background-dim-80::before{opacity:.8}.wp-block-cover-image.has-background-dim.has-background-dim-90::before,.wp-block-cover.has-background-dim.has-background-dim-90::before{opacity:.9}.wp-block-cover-image.has-background-dim.has-background-dim-100::before,.wp-block-cover.has-background-dim.has-background-dim-100::before{opacity:1}.wp-block-cover-image.alignleft,.wp-block-cover-image.alignright,.wp-block-cover.alignleft,.wp-block-cover.alignright{max-width:305px;width:100%}.wp-block-cover-image::after,.wp-block-cover::after{display:block;content:"";font-size:0;min-height:inherit}@supports ((position:-webkit-sticky) or (position:sticky)){.wp-block-cover-image::after,.wp-block-cover::after{content:none}}.wp-block-cover-image.aligncenter,.wp-block-cover-image.alignleft,.wp-block-cover-image.alignright,.wp-block-cover.aligncenter,.wp-block-cover.alignleft,.wp-block-cover.alignright{display:flex}.wp-block-cover__video-background{position:absolute;top:50%;left:50%;transform:translateX(-50%) translateY(-50%);width:100%;height:100%;z-index:0;-o-object-fit:cover;object-fit:cover}.editor-block-list__block[data-type="core/embed"][data-align=left] .editor-block-list__block-edit,.editor-block-list__block[data-type="core/embed"][data-align=right] .editor-block-list__block-edit,.wp-block-embed.alignleft,.wp-block-embed.alignright{max-width:360px;width:100%}.wp-block-embed{margin-bottom:1em}.wp-block-embed figcaption{margin-top:.5em;margin-bottom:1em;color:#555d66;text-align:center;font-size:13px}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-1-1 .wp-block-embed__wrapper,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-1-2 .wp-block-embed__wrapper,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-16-9 .wp-block-embed__wrapper,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-18-9 .wp-block-embed__wrapper,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-21-9 .wp-block-embed__wrapper,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-4-3 .wp-block-embed__wrapper,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-9-16 .wp-block-embed__wrapper{position:relative}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-1-1 .wp-block-embed__wrapper::before,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-1-2 .wp-block-embed__wrapper::before,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-16-9 .wp-block-embed__wrapper::before,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-18-9 .wp-block-embed__wrapper::before,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-21-9 .wp-block-embed__wrapper::before,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-4-3 .wp-block-embed__wrapper::before,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-9-16 .wp-block-embed__wrapper::before{content:"";display:block;padding-top:50%}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-1-1 .wp-block-embed__wrapper iframe,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-1-2 .wp-block-embed__wrapper iframe,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-16-9 .wp-block-embed__wrapper iframe,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-18-9 .wp-block-embed__wrapper iframe,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-21-9 .wp-block-embed__wrapper iframe,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-4-3 .wp-block-embed__wrapper iframe,.wp-embed-responsive .wp-block-embed.wp-embed-aspect-9-16 .wp-block-embed__wrapper iframe{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-21-9 .wp-block-embed__wrapper::before{padding-top:42.85%}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-18-9 .wp-block-embed__wrapper::before{padding-top:50%}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-16-9 .wp-block-embed__wrapper::before{padding-top:56.25%}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-4-3 .wp-block-embed__wrapper::before{padding-top:75%}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-1-1 .wp-block-embed__wrapper::before{padding-top:100%}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-9-6 .wp-block-embed__wrapper::before{padding-top:66.66%}.wp-embed-responsive .wp-block-embed.wp-embed-aspect-1-2 .wp-block-embed__wrapper::before{padding-top:200%}.wp-block-file{margin-bottom:1.5em}.wp-block-file.aligncenter{text-align:center}.wp-block-file.alignright{text-align:right}.wp-block-file .wp-block-file__button{background:#32373c;border-radius:2em;color:#fff;font-size:13px;padding:.5em 1em}.wp-block-file a.wp-block-file__button{text-decoration:none}.wp-block-file a.wp-block-file__button:active,.wp-block-file a.wp-block-file__button:focus,.wp-block-file a.wp-block-file__button:hover,.wp-block-file a.wp-block-file__button:visited{box-shadow:none;color:#fff;opacity:.85;text-decoration:none}.wpsisac-slick-carousal .wpsisac-slide-title a,.wpsisac-slick-slider .wpsisac-slide-title a,.wpsisac-slider-readmore{text-decoration:none!important}.wp-block-file *+.wp-block-file__button{margin-left:.75em}.wp-block-gallery{display:flex;flex-wrap:wrap;list-style-type:none;padding:0}.wp-block-gallery .blocks-gallery-image,.wp-block-gallery .blocks-gallery-item{margin:0 16px 16px 0;display:flex;flex-grow:1;flex-direction:column;justify-content:center;position:relative}.wp-block-gallery .blocks-gallery-image figure,.wp-block-gallery .blocks-gallery-item figure{margin:0;height:100%}@supports ((position:-webkit-sticky) or (position:sticky)){.wp-block-gallery .blocks-gallery-image figure,.wp-block-gallery .blocks-gallery-item figure{display:flex;align-items:flex-end;justify-content:flex-start}}.wp-block-gallery .blocks-gallery-image img,.wp-block-gallery .blocks-gallery-item img{display:block;max-width:100%;height:auto;width:100%}@supports ((position:-webkit-sticky) or (position:sticky)){.wp-block-gallery .blocks-gallery-image img,.wp-block-gallery .blocks-gallery-item img{width:auto}.wp-block-gallery.is-cropped .blocks-gallery-image a,.wp-block-gallery.is-cropped .blocks-gallery-image img,.wp-block-gallery.is-cropped .blocks-gallery-item a,.wp-block-gallery.is-cropped .blocks-gallery-item img{height:100%;flex:1;-o-object-fit:cover;object-fit:cover}}.wp-block-gallery .blocks-gallery-image figcaption,.wp-block-gallery .blocks-gallery-item figcaption{position:absolute;bottom:0;width:100%;max-height:100%;overflow:auto;padding:40px 10px 5px;color:#fff;text-align:center;font-size:13px;background:linear-gradient(0deg,rgba(0,0,0,.7) 0,rgba(0,0,0,.3) 60%,transparent)}.wp-block-gallery .blocks-gallery-image figcaption img,.wp-block-gallery .blocks-gallery-item figcaption img{display:inline}.wp-block-gallery.is-cropped .blocks-gallery-image a,.wp-block-gallery.is-cropped .blocks-gallery-image img,.wp-block-gallery.is-cropped .blocks-gallery-item a,.wp-block-gallery.is-cropped .blocks-gallery-item img{width:100%}.wp-block-gallery .blocks-gallery-image,.wp-block-gallery .blocks-gallery-item{width:calc((100% - 16px)/ 2)}.wp-block-gallery .blocks-gallery-image:nth-of-type(even),.wp-block-gallery .blocks-gallery-item:nth-of-type(even){margin-right:0}.wp-block-gallery.columns-1 .blocks-gallery-image,.wp-block-gallery.columns-1 .blocks-gallery-item{width:100%;margin-right:0}@media (min-width:600px){.wp-block-gallery.columns-3 .blocks-gallery-image,.wp-block-gallery.columns-3 .blocks-gallery-item{width:calc((100% - 16px * 2)/ 3);margin-right:16px}.wp-block-gallery.columns-4 .blocks-gallery-image,.wp-block-gallery.columns-4 .blocks-gallery-item{width:calc((100% - 16px * 3)/ 4);margin-right:16px}.wp-block-gallery.columns-5 .blocks-gallery-image,.wp-block-gallery.columns-5 .blocks-gallery-item{width:calc((100% - 16px * 4)/ 5);margin-right:16px}.wp-block-gallery.columns-6 .blocks-gallery-image,.wp-block-gallery.columns-6 .blocks-gallery-item{width:calc((100% - 16px * 5)/ 6);margin-right:16px}.wp-block-gallery.columns-7 .blocks-gallery-image,.wp-block-gallery.columns-7 .blocks-gallery-item{width:calc((100% - 16px * 6)/ 7);margin-right:16px}.wp-block-gallery.columns-8 .blocks-gallery-image,.wp-block-gallery.columns-8 .blocks-gallery-item{width:calc((100% - 16px * 7)/ 8);margin-right:16px}.wp-block-gallery.columns-1 .blocks-gallery-image:nth-of-type(1n),.wp-block-gallery.columns-1 .blocks-gallery-item:nth-of-type(1n),.wp-block-gallery.columns-2 .blocks-gallery-image:nth-of-type(2n),.wp-block-gallery.columns-2 .blocks-gallery-item:nth-of-type(2n),.wp-block-gallery.columns-3 .blocks-gallery-image:nth-of-type(3n),.wp-block-gallery.columns-3 .blocks-gallery-item:nth-of-type(3n),.wp-block-gallery.columns-4 .blocks-gallery-image:nth-of-type(4n),.wp-block-gallery.columns-4 .blocks-gallery-item:nth-of-type(4n),.wp-block-gallery.columns-5 .blocks-gallery-image:nth-of-type(5n),.wp-block-gallery.columns-5 .blocks-gallery-item:nth-of-type(5n),.wp-block-gallery.columns-6 .blocks-gallery-image:nth-of-type(6n),.wp-block-gallery.columns-6 .blocks-gallery-item:nth-of-type(6n),.wp-block-gallery.columns-7 .blocks-gallery-image:nth-of-type(7n),.wp-block-gallery.columns-7 .blocks-gallery-item:nth-of-type(7n),.wp-block-gallery.columns-8 .blocks-gallery-image:nth-of-type(8n),.wp-block-gallery.columns-8 .blocks-gallery-item:nth-of-type(8n){margin-right:0}}.wp-block-gallery .blocks-gallery-item.has-add-item-button,.wp-block-image.alignfull img,.wp-block-image.alignwide img{width:100%}.wp-block-gallery .blocks-gallery-image:last-child,.wp-block-gallery .blocks-gallery-item:last-child{margin-right:0}.wp-block-gallery.alignleft,.wp-block-gallery.alignright{max-width:305px;width:100%}.wp-block-gallery.aligncenter,.wp-block-gallery.alignleft,.wp-block-gallery.alignright{display:flex}.wp-block-gallery.aligncenter .blocks-gallery-item figure{justify-content:center}.wp-block-image{max-width:100%;margin-bottom:1em;margin-left:0;margin-right:0}.wp-block-image img{max-width:100%}.wp-block-image.aligncenter{text-align:center}.wp-block-image .aligncenter,.wp-block-image .alignleft,.wp-block-image .alignright,.wp-block-image.is-resized{display:table;margin-left:0;margin-right:0}.wp-block-image .aligncenter>figcaption,.wp-block-image .alignleft>figcaption,.wp-block-image .alignright>figcaption,.wp-block-image.is-resized>figcaption{display:table-caption;caption-side:bottom}.wp-block-image .alignleft{float:left;margin-right:1em}.wp-block-image .alignright{float:right;margin-left:1em}.wp-block-image .aligncenter{margin-left:auto;margin-right:auto}.wp-block-image figcaption{margin-top:.5em;margin-bottom:1em;color:#555d66;text-align:center;font-size:13px}.wp-block-latest-comments__comment{font-size:15px;line-height:1.1;list-style:none;margin-bottom:1em}.has-avatars .wp-block-latest-comments__comment{min-height:36px;list-style:none}.has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt,.has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta{margin-left:52px}.has-dates .wp-block-latest-comments__comment,.has-excerpts .wp-block-latest-comments__comment{line-height:1.5}.wp-block-latest-comments__comment-excerpt p{font-size:14px;line-height:1.8;margin:5px 0 20px}.wp-block-latest-comments__comment-date{color:#8f98a1;display:block;font-size:12px}.wp-block-latest-comments .avatar,.wp-block-latest-comments__comment-avatar{border-radius:24px;display:block;float:left;height:40px;margin-right:12px;width:40px}.wp-block-latest-posts.alignleft{margin-right:2em}.wp-block-latest-posts.alignright{margin-left:2em}.wp-block-latest-posts.is-grid{display:flex;flex-wrap:wrap;padding:0;list-style:none}.wp-block-latest-posts.is-grid li{margin:0 16px 16px 0;width:100%}@media (min-width:600px){.wp-block-latest-posts.columns-2 li{width:calc((100% / 2) - 16px)}.wp-block-latest-posts.columns-3 li{width:calc((100% / 3) - 16px)}.wp-block-latest-posts.columns-4 li{width:calc((100% / 4) - 16px)}.wp-block-latest-posts.columns-5 li{width:calc((100% / 5) - 16px)}.wp-block-latest-posts.columns-6 li{width:calc((100% / 6) - 16px)}}.wp-block-latest-posts__post-date{display:block;color:#6c7781;font-size:13px}.wp-block-pullquote .has-text-color a,.wp-block-pullquote cite,p.has-text-color a{color:inherit}.wp-block-media-text{display:grid;grid-template-rows:auto;align-items:center;grid-template-areas:"media-text-media media-text-content";grid-template-columns:50% auto}.wp-block-media-text.has-media-on-the-right{grid-template-areas:"media-text-content media-text-media";grid-template-columns:auto 50%}.wp-block-media-text .wp-block-media-text__media{grid-area:media-text-media;margin:0}.wp-block-media-text .wp-block-media-text__content{grid-area:media-text-content;padding:0 8%}.wp-block-media-text>figure>img,.wp-block-media-text>figure>video{max-width:unset;width:100%;vertical-align:middle}@media (max-width:600px){.wp-block-media-text.is-stacked-on-mobile{grid-template-columns:100%!important;grid-template-areas:"media-text-media" "media-text-content"}.wp-block-media-text.is-stacked-on-mobile.has-media-on-the-right{grid-template-areas:"media-text-content" "media-text-media"}}p.is-small-text{font-size:14px}p.is-regular-text{font-size:16px}p.is-large-text{font-size:36px}p.is-larger-text{font-size:48px}p.has-drop-cap:not(:focus)::first-letter{float:left;font-size:8.4em;line-height:.68;font-weight:100;margin:.05em .1em 0 0;text-transform:uppercase;font-style:normal}p.has-drop-cap:not(:focus)::after{content:"";display:table;clear:both;padding-top:14px}p.has-background{padding:20px 30px}.wp-block-pullquote{padding:3em 0;margin-left:0;margin-right:0;text-align:center}.wp-block-pullquote.alignleft,.wp-block-pullquote.alignright{max-width:305px}.wp-block-pullquote.alignleft p,.wp-block-pullquote.alignright p{font-size:20px}.wp-block-pullquote p{font-size:28px;line-height:1.6}.wp-block-pullquote cite,.wp-block-pullquote footer{position:relative}.wp-block-pullquote:not(.is-style-solid-color){background:0 0}.wp-block-pullquote.is-style-solid-color{border:none}.wp-block-pullquote.is-style-solid-color blockquote{margin-left:auto;margin-right:auto;text-align:left;max-width:60%}.wp-block-pullquote.is-style-solid-color blockquote p{margin-top:0;margin-bottom:0;font-size:32px}.wp-block-pullquote.is-style-solid-color blockquote cite{text-transform:none;font-style:normal}.wp-block-quote.is-large,.wp-block-quote.is-style-large{margin:0 0 16px;padding:0 1em}.wp-block-quote.is-large p,.wp-block-quote.is-style-large p{font-size:24px;font-style:italic;line-height:1.6}.wp-block-quote.is-large cite,.wp-block-quote.is-large footer,.wp-block-quote.is-style-large cite,.wp-block-quote.is-style-large footer{font-size:18px;text-align:right}.wp-block-video figcaption,.wp-block-video.aligncenter,.wpsisac-slider-nav .slick-slide{text-align:center}.wp-block-separator.is-style-wide{border-bottom-width:1px}.wp-block-separator.is-style-dots{background:0 0;border:none;text-align:center;max-width:none;line-height:1;height:auto}.wp-block-separator.is-style-dots::before{content:"\00b7 \00b7 \00b7";color:#191e23;font-size:20px;letter-spacing:2em;padding-left:2em;font-family:serif}p.wp-block-subhead{font-size:1.1em;font-style:italic;opacity:.75}.wp-block-table.has-fixed-layout{table-layout:fixed;width:100%}.wp-block-table.aligncenter,.wp-block-table.alignleft,.wp-block-table.alignright{display:table;width:auto}.wp-block-table.is-style-stripes{border-spacing:0;border-collapse:inherit;border-bottom:1px solid #f3f4f5}.wp-block-table.is-style-stripes tr:nth-child(odd){background-color:#f3f4f5}.wp-block-table.is-style-stripes td{border-color:transparent}.wp-block-text-columns,.wp-block-text-columns.aligncenter{display:flex}.slick-list,.slick-slider,.slick-track{display:block;position:relative}.wp-block-text-columns .wp-block-column{margin:0 16px;padding:0}.wp-block-text-columns .wp-block-column:first-child{margin-left:0}.wp-block-text-columns .wp-block-column:last-child{margin-right:0}.wp-block-text-columns.columns-2 .wp-block-column{width:calc(100% / 2)}.wp-block-text-columns.columns-3 .wp-block-column{width:calc(100% / 3)}.wp-block-text-columns.columns-4 .wp-block-column{width:calc(100% / 4)}pre.wp-block-verse{white-space:nowrap;overflow:auto}.wp-block-video{margin-left:0;margin-right:0}.wp-block-video video{max-width:100%}@supports ((position:-webkit-sticky) or (position:sticky)){.wp-block-video [poster]{-o-object-fit:cover;object-fit:cover}}.wp-block-video figcaption{margin-top:.5em;margin-bottom:1em;color:#555d66;font-size:13px}.has-pale-pink-background-color.has-pale-pink-background-color{background-color:#f78da7}.has-vivid-red-background-color.has-vivid-red-background-color{background-color:#cf2e2e}.has-luminous-vivid-orange-background-color.has-luminous-vivid-orange-background-color{background-color:#ff6900}.has-luminous-vivid-amber-background-color.has-luminous-vivid-amber-background-color{background-color:#fcb900}.has-light-green-cyan-background-color.has-light-green-cyan-background-color{background-color:#7bdcb5}.has-vivid-green-cyan-background-color.has-vivid-green-cyan-background-color{background-color:#00d084}.has-pale-cyan-blue-background-color.has-pale-cyan-blue-background-color{background-color:#8ed1fc}.has-vivid-cyan-blue-background-color.has-vivid-cyan-blue-background-color{background-color:#0693e3}.has-very-light-gray-background-color.has-very-light-gray-background-color{background-color:#eee}.has-cyan-bluish-gray-background-color.has-cyan-bluish-gray-background-color{background-color:#abb8c3}.has-very-dark-gray-background-color.has-very-dark-gray-background-color{background-color:#313131}.has-pale-pink-color.has-pale-pink-color{color:#f78da7}.has-vivid-red-color.has-vivid-red-color{color:#cf2e2e}.has-luminous-vivid-orange-color.has-luminous-vivid-orange-color{color:#ff6900}.has-luminous-vivid-amber-color.has-luminous-vivid-amber-color{color:#fcb900}.has-light-green-cyan-color.has-light-green-cyan-color{color:#7bdcb5}.has-vivid-green-cyan-color.has-vivid-green-cyan-color{color:#00d084}.has-pale-cyan-blue-color.has-pale-cyan-blue-color{color:#8ed1fc}.has-vivid-cyan-blue-color.has-vivid-cyan-blue-color{color:#0693e3}.has-very-light-gray-color.has-very-light-gray-color{color:#eee}.has-cyan-bluish-gray-color.has-cyan-bluish-gray-color{color:#abb8c3}.has-very-dark-gray-color.has-very-dark-gray-color{color:#313131}.has-small-font-size{font-size:13px}.has-normal-font-size,.has-regular-font-size{font-size:16px}.has-medium-font-size{font-size:20px}.has-large-font-size{font-size:36px}.has-huge-font-size,.has-larger-font-size{font-size:42px}.slick-loading .slick-list{background:url(../images/ajax-loader.gif) center center no-repeat #fff}.slick-slider{-moz-box-sizing:border-box;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{top:0;left:0}.slick-track:after,.slick-track:before{display:table;content:''}.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}.wpsisac-column,.wpsisac-columns{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.wpsisac-slick-carousal *,.wpsisac-slick-slider *,.wpsisac-slick-variable *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;outline:0}.wpsisac-clearfix:after,.wpsisac-clearfix:before{content:"";display:table}.wpsisac-img-wrap{position:relative;overflow:hidden}.wpsisac-slick-carousal-wrp,.wpsisac-slick-variable-wrp,.wpsisac-slider-wrp{position:relative}.wpsisac-slick-variable-wrp{overflow:hidden;margin:0 0 20px}.wpsisac-slick-variable-wrp .slick-slider{position:unset}.wpsisac-slick-slider h1{margin:5px 0!important}.wpsisac-slider-short-content p{margin-bottom:7px!important}.wpsisac-slider-readmore{display:inline-block}.wpsisac-hide{display:none}.wpsisac-slick-image-slide{position:relative}.wpsisac-slick-carousal .wpsisac-slide-title,.wpsisac-slick-slider .wpsisac-slide-title{padding:0!important;margin:8px 0!important}h2.wpsisac-slide-title{margin:5px 0!important;line-height:normal!important;padding-top:0!important;font-size:30px!important;padding-bottom:0!important;color:#fff}h2.wpsisac-slide-title a,h2.wpsisac-slide-title a:active,h2.wpsisac-slide-title a:focus,h2.wpsisac-slide-title a:hover{font-size:22px!important;line-height:normal!important;color:#444;text-decoration:none!important;outline:0!important}a.wpsisac-slick-slider-link{position:absolute;height:100%;width:100%;top:0;left:0;z-index:1}img.wpsisac-slider-img{border-radius:0!important;box-shadow:none!important;height:100%}.wpsisac-image-fit img.wpsisac-slider-img{-o-object-fit:cover;object-fit:cover;-o-object-position:top center;object-position:top center;height:100%;width:100%}.wpsisac-slick-carousal .slick-slide img,.wpsisac-slick-slider .slick-slide img{display:inline-block!important}.wpsisac-slider-nav .slick-slide img{display:inline-block!important;cursor:pointer;height:100%;width:100%;-o-object-fit:cover;object-fit:cover;-o-object-position:top center;object-position:top center;border-radius:0;box-shadow:none}.wpsisac-slick-carousal.wpsisac-image-fit .wpsisac-img-wrap{height:300px;background:#dadada}.wpsisac-slick-variable.wpsisac-image-fit .wpsisac-img-wrap{height:400px;background:#dadada}.wpsisac-slick-slider.wpsisac-image-fit .wpsisac-img-wrap{height:400px}.wpsisac-slick-slider.wpsisac-prodesign-7.wpsisac-image-fit .wpsisac-slide-image-bg,.wpsisac-slick-slider.wpsisac-prodesign-8.wpsisac-image-fit .wpsisac-slide-image-bg,.wpsisac-slick-slider.wpsisac-prodesign-9.wpsisac-image-fit .wpsisac-slide-image-bg{height:350px}.wpsisac-slick,.wpsisac-slider-nav{visibility:hidden;opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";-webkit-transition:opacity .5s linear;transition:opacity .5s linear}.wpsisac-slick.slick-initialized,.wpsisac-slider-nav.slick-initialized{visibility:visible!important;opacity:1!important;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"}.wpsisac-slider-nav *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.wpsisac-slider-nav{margin:8px 0 20px}.wpsisac-slider-nav .slick-image-nav{overflow:hidden;height:120px;cursor:pointer;margin:0 3px;transition:border .1s ease-in-out;-webkit-transition:border .1s ease-in-out}.wpsisac-slider-nav .wpsisac-nav-no-img{background-color:#e3e3e3}.wpsisac-slider-nav .slick-current.slick-image-nav{border-top:3px solid #f80000}.wpsisac-readmore a.wpsisac-slider-readmore{padding:4px 10px;margin:5px 0;font-size:13px;color:#fff;border-color:#fff;border-width:2px;border-style:solid;-webkit-transition:.3s ease-in;transition:.3s ease-in}.wpsisac-readmore a.wpsisac-slider-readmore:focus,.wpsisac-readmore a.wpsisac-slider-readmore:hover{color:#fff!important;border-width:2px;border-style:solid;background:#363636;-webkit-transition:.3s ease-in;transition:.3s ease-in}.wpsisac-slick-carousal.wpsisac-center-mode .wpsisac-slick-image-slide{opacity:.5;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";-webkit-transform:scale(.8);transform:scale(.8);-webkit-transition:all .3s ease 0s;transition:all .3s ease 0s}.wpsisac-slick-carousal.wpsisac-center-mode .slick-center{opacity:1;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";transform:scale(1);-webkit-transform:scale(1);-ms-transform:scale(1)}.wpsisac-slick-variable .wpsisac-slick-image-slide{opacity:1;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";-webkit-transform:scale(1);transform:scale(1);-webkit-transition:all .3s ease 0s;transition:all .3s ease 0s}.wpsisac-slick-variable .slick-center{opacity:1;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";-webkit-transform:scale(1);transform:scale(1);position:relative;overflow:hidden}.wpsisac-slick-slider .slick-arrow{top:50%!important;transform:translateY(-50%);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);border:none!important}.wpsisac-slick-slider .slick-prev{left:0!important}.wpsisac-slick-slider .slick-next{right:0!important}.wpsisac-slick-slider.wpsisac-slick .slick-dots{bottom:10px!important}.wpsisac-slick-slider .wpsisac-slide-wrap{position:relative}.wpsisac-slick-slider.wpsisac-prodesign-1 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slider-content{left:50px;right:50px;position:absolute;bottom:70px;text-align:left;padding:0 15px}.wpsisac-slick-slider.wpsisac-prodesign-1 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slide-title{color:#fff;text-shadow:0 1px 2px #000;background:rgba(248,0,0,.7);padding:10px!important;width:60%}.wpsisac-slick-slider.wpsisac-prodesign-1 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slider-short-content{text-align:left;background:rgba(0,0,0,.7);padding:10px!important;margin-bottom:8px}.wpsisac-slick-slider.wpsisac-prodesign-1 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slider-short-content p{text-align:left;color:#fff;margin:0!important;font-size:16px}.wpsisac-slick-slider.wpsisac-prodesign-1 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-readmore{padding-right:10px;border-color:#fff;color:#fff}.wpsisac-slick-slider.wpsisac-prodesign-1 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-readmore a{border-color:#fff;color:#fff}.wpsisac-slick-carousal.wpsisac-center-mode .wpsisac-slick-image-slide{padding:0!important}.wpsisac-slick-variable .slick-arrow{top:50%!important;transform:translateY(-50%);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);border:none!important}.wpsisac-slick-variable .slick-prev{left:0!important}.wpsisac-slick-variable .slick-next{right:0!important}.wpsisac-slick-variable{margin:0 auto;float:none!important}.wpsisac-slick-variable .slick-list{overflow:visible}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slick-image-slide{padding:0 5px;text-align:center}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap{position:relative;overflow:hidden}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap .wpsisac-img-wrap{height:390px}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap .wpsisac-img-wrap img{max-width:none;width:-webkit-calc(100% + 50px);width:calc(100% + 50px);-webkit-transition:opacity .35s,-webkit-transform .35s;transition:opacity .35s,transform .35s;-webkit-transform:translate3d(-40px,0,0);transform:translate3d(-40px,0,0)}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap .wpsisac-slider-content{text-align:left;background:rgba(48,133,163,.4);position:absolute;top:0;left:0;width:100%;height:100%;-webkit-transition:.5s ease all;-moz-transition:.5s ease all;transition:.5s ease all}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap .wpsisac-slider-content>div.wpsisac-slider-content-inner{position:absolute;bottom:0;left:0;padding:20px 35px;width:100%;height:80%}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap .wpsisac-slider-short-content{border-top:2px solid #fff;padding-top:10px;margin-top:10px}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap .wpsisac-slider-short-content,.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap h2.wpsisac-slide-title{-webkit-transform:translate3d(0,150px,0);transform:translate3d(0,150px,0)}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap:hover .wpsisac-slider-content{background:rgba(0,0,0,.3)}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap h2.wpsisac-slide-title{color:#fff;-webkit-transition:-webkit-transform .35s;transition:transform .35s}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap h2.wpsisac-slide-title a,.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap h2.wpsisac-slide-title:focus,.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap h2.wpsisac-slide-title:hover{color:#fff!important}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap .wpsisac-slider-content .wpsisac-slider-short-content{color:#fff;opacity:0;-webkit-transition:opacity .2s,-webkit-transform .35s;transition:opacity .2s,transform .35s}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap:hover .wpsisac-slider-short-content{opacity:1}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap:hover .wpsisac-slider-short-content,.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap:hover h2.wpsisac-slide-title,.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap:hover img{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-transition-delay:50ms;transition-delay:50ms;-webkit-transition-duration:.35s;transition-duration:.35s}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slide-wrap a.wpsisac-slider-readmore{border-color:#fff;color:#fff}.wpsisac-slick-variable.wpsisac-prodesign-1 .wpsisac-slider-content{opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"}.wpsisac-slick-variable.wpsisac-prodesign-1 .slick-center .wpsisac-slider-content{opacity:1;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"}.wpsisac-slick-variable.wpsisac-prodesign-17 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-18 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-19 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-20 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-21 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-23 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-24 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-25 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-26 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-27 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-28 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-29 .slick-dots,.wpsisac-slick-variable.wpsisac-prodesign-30 .slick-dots{bottom:8px!important}.wpsisac-slick-variable.wpsisac-prodesign-17 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-18 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-19 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-20 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-21 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-23 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-24 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-25 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-26 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-27 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-28 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-29 .slick-arrow,.wpsisac-slick-variable.wpsisac-prodesign-30 .slick-arrow{background:rgba(0,0,0,.6)!important;border:none!important;cursor:pointer;font-size:0;height:100%!important;outline:0!important;position:absolute;-webkit-transition:.3s ease-in;transition:.3s ease-in;width:100%!important;z-index:9;top:0!important;bottom:0!important;margin:0!important;transform:translateY(0);-webkit-transform:translateY(0);-moz-transform:translateY(0)}.wpsisac-slick-variable.wpsisac-prodesign-17 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-18 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-19 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-20 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-21 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-23 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-24 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-25 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-26 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-27 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-28 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-29 .slick-next,.wpsisac-slick-variable.wpsisac-prodesign-30 .slick-next{left:100%!important;right:auto!important}.wpsisac-slick-variable.wpsisac-prodesign-17 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-18 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-19 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-20 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-21 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-23 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-24 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-25 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-26 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-27 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-28 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-29 .slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-30 .slick-prev{right:100%!important;left:auto!important}.wpsisac-slick-variable.wpsisac-prodesign-17 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-17 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-17 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-18 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-18 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-18 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-19 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-19 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-19 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-20 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-20 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-20 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-21 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-21 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-21 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-23 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-23 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-23 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-24 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-24 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-24 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-25 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-25 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-25 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-26 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-26 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-26 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-27 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-27 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-27 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-28 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-28 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-28 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-29 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-29 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-29 .slick-arrow:hover,.wpsisac-slick-variable.wpsisac-prodesign-30 .slick-arrow:active,.wpsisac-slick-variable.wpsisac-prodesign-30 .slick-arrow:focus,.wpsisac-slick-variable.wpsisac-prodesign-30 .slick-arrow:hover{background:rgba(0,0,0,.8)!important;-webkit-transition:.3s ease-in;transition:.3s ease-in}.wpsisac-slick .slick-arrow,.wpsisac-slider-nav .slick-arrow{text-indent:-99999px}.wpsisac-slick .slick-arrow{width:30px;height:50px;position:absolute;z-index:9;border:0!important;padding:0!important;margin:0!important;border-radius:0!important;-webkit-transition:.3s ease-in;transition:.3s ease-in;cursor:pointer}.wpsisac-slick .slick-next,.wpsisac-slick button.slick-next:active,.wpsisac-slick button.slick-next:focus,.wpsisac-slick button.slick-next:hover{background:url(https://menshaircuts.com/wp-content/plugins/wp-slick-slider-and-image-carousel-pro/assets/images/arrow-right.png) center center no-repeat rgba(0,0,0,.7)!important;outline:0!important;box-shadow:none!important;border:0!important;border-radius:0!important}.wpsisac-slick button.slick-prev,.wpsisac-slick button.slick-prev:active,.wpsisac-slick button.slick-prev:focus,.wpsisac-slick button.slick-prev:hover{background:url(https://menshaircuts.com/wp-content/plugins/wp-slick-slider-and-image-carousel-pro/assets//images/arrow-left.png) center center no-repeat rgba(0,0,0,.7)!important;outline:0!important;box-shadow:none!important}.wpsisac-slider-nav .slick-arrow{top:50%!important;margin:-27px 0 0!important}.wpsisac-slider-nav button.slick-arrow{width:20px;height:34px;position:absolute;z-index:9;border:0!important;padding:0!important;border-radius:0!important;cursor:pointer}.wpsisac-slider-nav button.slick-next,.wpsisac-slider-nav button.slick-next:active,.wpsisac-slider-nav button.slick-next:focus,.wpsisac-slider-nav button.slick-next:hover{background:url(https://menshaircuts.com/wp-content/plugins/wp-slick-slider-and-image-carousel-pro/assets//images/arrow-right-small.png) center center no-repeat rgba(0,0,0,.7)!important;outline:0!important;box-shadow:none!important}.wpsisac-slider-nav button.slick-prev,.wpsisac-slider-nav button.slick-prev:active,.wpsisac-slider-nav button.slick-prev:focus,.wpsisac-slider-nav button.slick-prev:hover{background:url(https://menshaircuts.com/wp-content/plugins/wp-slick-slider-and-image-carousel-pro/assets//images/arrow-left-small.png) center center no-repeat rgba(0,0,0,.7)!important;outline:0!important;box-shadow:none!important}.wpsisac-slider-nav .slick-next{right:0!important}.wpsisac-slider-nav .slick-prev{left:0!important}.wpsisac-slick-variable.wpsisac-prodesign-11 button.slick-next,.wpsisac-slick-variable.wpsisac-prodesign-12 button.slick-next,.wpsisac-slick-variable.wpsisac-prodesign-31 button.slick-next,.wpsisac-slick-variable.wpsisac-prodesign-32 button.slick-next,.wpsisac-slick-variable.wpsisac-prodesign-33 button.slick-next{background:url(https://menshaircuts.com/wp-content/plugins/wp-slick-slider-and-image-carousel-pro/assets//images/arrow-right-big.png) center center no-repeat}.wpsisac-slick-variable.wpsisac-prodesign-11 button.slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-12 button.slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-31 button.slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-32 button.slick-prev,.wpsisac-slick-variable.wpsisac-prodesign-33 button.slick-prev{background:url(https://menshaircuts.com/wp-content/plugins/wp-slick-slider-and-image-carousel-pro/assets//images/arrow-left-big.png) center center no-repeat}.wpsisac-slick .slick-dots,.wpsisac-slider-nav .slick-dots{padding:0!important;margin:0!important;position:absolute}.wpsisac-slick .slick-dots li,.wpsisac-slider-nav .slick-dots li{list-style:none!important;display:inline-block!important;margin:0 3px!important;padding:0!important;line-height:0}.wpsisac-slick ul.slick-dots li:after,.wpsisac-slick ul.slick-dots li:before,.wpsisac-slider-nav ul.slick-dots li:after,.wpsisac-slider-nav ul.slick-dots li:before{background:0 0!important;content:none!important}.wpsisac-slick .slick-dots li button,.wpsisac-slider-nav .slick-dots li button{text-indent:-99999px;background:#fff!important;margin:0!important;padding:0!important;border:2px solid #444;border-radius:50%!important;width:13px!important;height:13px!important;box-shadow:none!important;cursor:pointer}.wpsisac-slick .slick-dots li button:focus,.wpsisac-slider-nav .slick-dots li button:focus{outline:0!important}.wpsisac-slick .slick-dots li.slick-active button,.wpsisac-slider-nav .slick-dots li.slick-active button{background:#8D8C8C!important}.wpsisac-slick .slick-dots{left:15px!important;right:15px;text-align:center;bottom:10px!important;line-height:0!important}.wpsisac-slider-nav .slick-dots{left:15px!important;right:15px;text-align:center;bottom:0!important}.wpsisac-slick.wpsisac-dots-design-8 .slick-dots li{position:relative;width:16px!important;height:10px!important;cursor:pointer}.wpsisac-slick.wpsisac-dots-design-8 .slick-dots li button{border:none!important;background-color:#666!important;width:16px!important;height:5px!important;border-radius:0!important;vertical-align:middle}.wpsisac-slick.wpsisac-dots-design-8 .slick-dots li.slick-active button{height:10px!important}.wpsisac-column,.wpsisac-columns{padding-left:.9375em;padding-right:.9375em;width:100%;float:left}@media only screen{.wpsisac-column,.wpsisac-columns{position:relative;padding-left:.9375em;padding-right:.9375em;float:left}}@media only screen and (min-width:40.0625em){.wpsisac-column,.wpsisac-columns{position:relative;padding-left:.9375em;padding-right:.9375em;float:left}.wpsisac-medium-1{width:8.33333%}.wpsisac-medium-2{width:16.66667%}.wpsisac-medium-3{width:25%}.wpsisac-medium-4{width:33.33333%}.wpsisac-medium-5{width:41.66667%}.wpsisac-medium-6{width:50%}.wpsisac-medium-7{width:58.33333%}.wpsisac-medium-8{width:66.66667%}.wpsisac-medium-9{width:75%}.wpsisac-medium-10{width:83.33333%}.wpsisac-medium-11{width:91.66667%}.wpsisac-medium-12{width:100%}.wpsisac-medium-offset-0{margin-left:0!important}.wpsisac-medium-offset-1{margin-left:8.33333%!important}.wpsisac-medium-offset-2{margin-left:16.66667%!important}.wpsisac-medium-offset-3{margin-left:25%!important}.wpsisac-medium-offset-4{margin-left:33.33333%!important}.wpsisac-medium-offset-5{margin-left:41.66667%!important}.wpsisac-medium-offset-6{margin-left:50%!important}.wpsisac-medium-offset-7{margin-left:58.33333%!important}.wpsisac-medium-offset-8{margin-left:66.66667%!important}.wpsisac-medium-offset-9{margin-left:75%!important}.wpsisac-medium-offset-10{margin-left:83.33333%!important}.wpsisac-medium-offset-11{margin-left:91.66667%!important}}@media only screen and (max-width:768px){.wpsisac-slick-carousal.wpsisac-center-mode .wpsisac-slick-image-slide{opacity:1;transform:scale(1)}.wpsisac-slick-variable{width:70%!important}.wpsisac-slick-variable .wpsisac-slick-image-slide{padding:0 10px!important}.wpsisac-slick-variable.wpsisac-prodesign-17 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-18 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-19 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-20 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-21 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-23 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-24 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-25 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-26 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-27 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-28 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-29 .wpsisac-slick-image-slide,.wpsisac-slick-variable.wpsisac-prodesign-30 .wpsisac-slick-image-slide{padding:0!important}}@media only screen and (max-width:40.0625em){.wpsisac-slick-variable .wpsisac-slick-image-slide{padding:0 5px!important}.wpsisac-slick-slider.wpsisac-prodesign-1 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-2 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-3 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-4 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-5 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-6 .wpsisac-slide-title{width:100%!important}.wpsisac-slick-slider.wpsisac-prodesign-2 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-5 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slide-title{text-align:right}.wpsisac-slick-slider.wpsisac-prodesign-7 .wpsisac-slide-image-bg,.wpsisac-slick-slider.wpsisac-prodesign-8 .wpsisac-slide-image-bg,.wpsisac-slick-slider.wpsisac-prodesign-9 .wpsisac-slide-image-bg{height:250px!important}.wpsisac-slick-slider.wpsisac-prodesign-7 .left-image-side,.wpsisac-slick-slider.wpsisac-prodesign-7 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slider-content,.wpsisac-slick-slider.wpsisac-prodesign-8 .left-image-side,.wpsisac-slick-slider.wpsisac-prodesign-9 .left-image-side{padding:0!important}.wpsisac-slick-slider.wpsisac-prodesign-8 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slide-title{margin-left:0!important}.wpsisac-slick-slider.wpsisac-prodesign-7 .slick-arrow,.wpsisac-slick-slider.wpsisac-prodesign-8 .slick-arrow,.wpsisac-slick-slider.wpsisac-prodesign-9 .slick-arrow{top:150px!important}.wpsisac-slick-slider.wpsisac-prodesign-7 .slick-dots,.wpsisac-slick-slider.wpsisac-prodesign-8 .slick-dots,.wpsisac-slick-slider.wpsisac-prodesign-9 .slick-dots{display:none!important}.wpsisac-slick-slider.wpsisac-prodesign-8 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slider-content,.wpsisac-slick-slider.wpsisac-prodesign-9 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slider-content{padding:0 0 10px}.wpsisac-slick-slider.wpsisac-prodesign-7 .slick-next,.wpsisac-slick-slider.wpsisac-prodesign-8 .slick-next,.wpsisac-slick-slider.wpsisac-prodesign-9 .slick-next{left:auto!important;right:0!important}}@media only screen and (max-width:450px){.wpsisac-slick-slider.wpsisac-prodesign-1 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-2 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-3 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-4 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-5 .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-6 .wpsisac-slide-title,.wpsisac-slick-variable{width:100%!important}.wpsisac-slick-variable .wpsisac-slick-image-slide{padding:0!important}.wpsisac-slick-variable.wpsisac-image-fit .wpsisac-img-wrap{height:350px}.wpsisac-slick-slider.wpsisac-prodesign-1 .wpsisac-slider-content,.wpsisac-slick-slider.wpsisac-prodesign-2 .wpsisac-slider-content,.wpsisac-slick-slider.wpsisac-prodesign-20 .wpsisac-slider-content .wpsisac-show-hide-content,.wpsisac-slick-slider.wpsisac-prodesign-3 .wpsisac-slider-content,.wpsisac-slick-slider.wpsisac-prodesign-4 .wpsisac-slider-content,.wpsisac-slick-slider.wpsisac-prodesign-5 .wpsisac-slider-content,.wpsisac-slick-slider.wpsisac-prodesign-6 .wpsisac-slider-content{left:20px!important;right:20px!important}.wpsisac-slick-slider.wpsisac-prodesign-10 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slide-title,.wpsisac-slick-slider.wpsisac-prodesign-10 .wpsisac-slick-image-slide .wpsisac-slide-wrap .wpsisac-slider-short-content{width:90%}.wpsisac-slick-slider.wpsisac-prodesign-11 .wpsisac-slide-wrap .wpsisac-slider-content>div.wpsisac-slider-content-inner,.wpsisac-slick-slider.wpsisac-prodesign-22 .wpsisac-slider-content{padding:20px 50px}.wpsisac-slick-slider.wpsisac-prodesign-16 .wpsisac-slide-wrap .wpsisac-slider-content .wpsisac-slider-short-content,.wpsisac-slick-slider.wpsisac-prodesign-16 .wpsisac-slide-wrap .wpsisac-slider-content h2.wpsisac-slide-title{padding:10px 40px 25px!important}.wpsisac-slick-slider.wpsisac-prodesign-12 .wpsisac-slide-wrap .wpsisac-slider-content .wpsisac-slider-short-content,.wpsisac-slick-slider.wpsisac-prodesign-12 .wpsisac-slide-wrap .wpsisac-slider-content h2.wpsisac-slide-title{left:50px;right:50px}.wpsisac-slick-slider.wpsisac-prodesign-13.wpsisac-image-fit .wpsisac-img-wrap,.wpsisac-slick-slider.wpsisac-prodesign-17.wpsisac-image-fit .wpsisac-img-wrap{height:250px}.wpsisac-slick-slider.wpsisac-prodesign-14 .wpsisac-slide-wrap .wpsisac-slider-short-content,.wpsisac-slick-slider.wpsisac-prodesign-15 .wpsisac-slide-wrap .wpsisac-slider-short-content{padding:15px 50px}.wpsisac-slick-slider.wpsisac-prodesign-15 .wpsisac-slide-wrap h2.wpsisac-slide-title{padding:15px 50px!important}.wpsisac-slick-slider.wpsisac-prodesign-21 .wpsisac-slider-content .wpsisac-show-hide-content{width:85%}.wpsisac-slick-slider.wpsisac-prodesign-25 .wpsisac-slider-content,.wpsisac-slick-slider.wpsisac-prodesign-30 .wpsisac-slider-content .wpsisac-slider-main-content{padding:15px 40px 40px}}@media only screen and (max-width:400px){.wpsisac-slick-carousal.wpsisac-prodesign-20 .wpsisac-slider-content .wpsisac-show-hide-content,.wpsisac-slick-variable.wpsisac-prodesign-20 .wpsisac-slider-content .wpsisac-show-hide-content{left:5px;right:5px;padding:10px 20px}.wpsisac-slick-carousal.wpsisac-prodesign-21 .wpsisac-slider-content .wpsisac-show-hide-content,.wpsisac-slick-variable.wpsisac-prodesign-21 .wpsisac-slider-content .wpsisac-show-hide-content{width:85%}.wpsisac-slick-carousal.wpsisac-prodesign-24 .wpsisac-slider-content{top:auto}}#ftwp-container.ftwp-wrap #ftwp-header-minimize:hover,#ftwp-container.ftwp-wrap #ftwp-trigger:hover{cursor:pointer}#ftwp-container.ftwp-wrap,#ftwp-container.ftwp-wrap a,#ftwp-container.ftwp-wrap a:active,#ftwp-container.ftwp-wrap a:focus,#ftwp-container.ftwp-wrap a:hover,#ftwp-container.ftwp-wrap a:link,#ftwp-container.ftwp-wrap a:visited,#ftwp-container.ftwp-wrap button,#ftwp-container.ftwp-wrap button:active,#ftwp-container.ftwp-wrap button:focus,#ftwp-container.ftwp-wrap button:hover,#ftwp-container.ftwp-wrap div,#ftwp-container.ftwp-wrap h3,#ftwp-container.ftwp-wrap header,#ftwp-container.ftwp-wrap li,#ftwp-container.ftwp-wrap li::after,#ftwp-container.ftwp-wrap li::before,#ftwp-container.ftwp-wrap nav,#ftwp-container.ftwp-wrap ol,#ftwp-container.ftwp-wrap span,#ftwp-container.ftwp-wrap ul{margin:0;padding:0;line-height:inherit;font:inherit;color:inherit;background:0 0;box-shadow:none;text-shadow:none;text-decoration:none;text-align:inherit;border:none;outline:0;box-sizing:border-box;border-radius:0;clear:none}#ftwp-container.ftwp-wrap li{list-style:none}#ftwp-container.ftwp-wrap li::after,#ftwp-container.ftwp-wrap li::before{display:none}#ftwp-container.ftwp-wrap{font-family:inherit;font-size:12px}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-anchor::before,#ftwp-container.ftwp-wrap .ftwp-icon,#ftwp-container.ftwp-wrap .ftwp-icon-bullet,#ftwp-container.ftwp-wrap .ftwp-icon-circle,#ftwp-container.ftwp-wrap .ftwp-icon-circle-o,#ftwp-container.ftwp-wrap .ftwp-icon-collapse,#ftwp-container.ftwp-wrap .ftwp-icon-ellipsis,#ftwp-container.ftwp-wrap .ftwp-icon-expand,#ftwp-container.ftwp-wrap .ftwp-icon-menu,#ftwp-container.ftwp-wrap .ftwp-icon-minimize,#ftwp-container.ftwp-wrap .ftwp-icon-number,#ftwp-container.ftwp-wrap .ftwp-icon-square,#ftwp-container.ftwp-wrap .ftwp-icon-square-o,#ftwp-container.ftwp-wrap .ftwp-icon-vellipsis{display:inline-block;font-family:ftwp-icon;font-style:normal;font-weight:400;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}#ftwp-container.ftwp-wrap .ftwp-icon-menu::before{content:'\F0C9'}#ftwp-container.ftwp-wrap .ftwp-icon-bullet::before{content:'\F0CA'}#ftwp-container.ftwp-wrap .ftwp-icon-number::before{content:'\F0CB'}#ftwp-container.ftwp-wrap .ftwp-icon-ellipsis::before{content:'\F141'}#ftwp-container.ftwp-wrap .ftwp-icon-vellipsis::before{content:'\F142'}#ftwp-container.ftwp-wrap .ftwp-icon-circle::before{content:'\F111'}#ftwp-container.ftwp-wrap .ftwp-icon-circle-o::before{content:'\F10C'}#ftwp-container.ftwp-wrap .ftwp-icon-square::before{content:'\F0C8'}#ftwp-container.ftwp-wrap .ftwp-icon-square-o::before{content:'\F096'}#ftwp-container.ftwp-wrap .ftwp-icon-expand::before{content:'\E801'}#ftwp-container.ftwp-wrap .ftwp-icon-collapse::before{content:'\E800'}#ftwp-container.ftwp-wrap .ftwp-icon-minimize::before{content:'\E803'}#ftwp-container.ftwp-wrap .ftwp-transform-left-top{-webkit-transform-origin:left top;-ms-transform-origin:left top;transform-origin:left top}#ftwp-container.ftwp-wrap .ftwp-transform-left-center{-webkit-transform-origin:left center;-ms-transform-origin:left center;transform-origin:left center}#ftwp-container.ftwp-wrap .ftwp-transform-left-bottom{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom}#ftwp-container.ftwp-wrap .ftwp-transform-right-top{-webkit-transform-origin:right top;-ms-transform-origin:right top;transform-origin:right top}#ftwp-container.ftwp-wrap .ftwp-transform-right-center{-webkit-transform-origin:right center;-ms-transform-origin:right center;transform-origin:right center}#ftwp-container.ftwp-wrap .ftwp-transform-right-bottom{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom}#ftwp-container.ftwp-wrap #ftwp-trigger{display:inline-block;width:50px;height:50px;background:rgba(238,238,238,.95);color:#333;font-size:30px;position:relative}#ftwp-container.ftwp-wrap #ftwp-trigger:focus{outline:#0ff solid 5px;box-shadow:0 10px 10px rgba(0,0,0,.5)}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse:focus,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand:focus,#ftwp-container.ftwp-wrap #ftwp-header-minimize:focus{outline:rgba(51,51,51,.5) solid 2px}#ftwp-container.ftwp-wrap #ftwp-trigger .ftwp-trigger-icon{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}#ftwp-container.ftwp-wrap #ftwp-contents{width:250px;max-width:100%;overflow:hidden;height:auto;max-height:100%}#ftwp-container.ftwp-wrap #ftwp-contents:hover #ftwp-header,#ftwp-container.ftwp-wrap #ftwp-contents:hover #ftwp-list{background:#eee}#ftwp-container.ftwp-wrap #ftwp-header{color:#333;background:rgba(238,238,238,.95);padding:10px;font-size:19.2px;line-height:1.1;-webkit-transition:background .3s;transition:background .3s}#ftwp-container.ftwp-wrap #ftwp-header-control{float:left;margin-right:5px}#ftwp-container.ftwp-wrap #ftwp-header-title{font-weight:700;display:block;overflow:hidden}#ftwp-container.ftwp-wrap #ftwp-header-minimize{float:right;margin-left:5px;width:25px;text-align:center;opacity:.5}#ftwp-container.ftwp-wrap #ftwp-header-minimize:active,#ftwp-container.ftwp-wrap #ftwp-header-minimize:focus,#ftwp-container.ftwp-wrap #ftwp-header-minimize:hover{font-family:ftwp-icon}#ftwp-container.ftwp-wrap #ftwp-header-minimize:focus,#ftwp-container.ftwp-wrap #ftwp-header-minimize:hover{opacity:1}#ftwp-container.ftwp-wrap #ftwp-header::after{content:'';display:table;clear:both}#ftwp-container.ftwp-wrap #ftwp-list{color:#333;font-size:12px;background:rgba(238,238,238,.95);line-height:1.2;overflow-y:auto;width:100%;-webkit-transition:background .3s;transition:background .3s}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-item{text-indent:0}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-anchor{display:block;padding:5px 10px;z-index:10;overflow:hidden;position:relative;-webkit-transition:color .3s;transition:color .3s}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-anchor:hover{color:#00A368}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-active,#ftwp-container.ftwp-wrap #ftwp-list .ftwp-active:hover,#ftwp-container.ftwp-wrap #ftwp-list .ftwp-anchor:focus{color:#fff}#ftwp-container.ftwp-fixed-to-post.ftwp-minimize #ftwp-trigger{visibility:visible}#ftwp-container.ftwp-fixed-to-post.ftwp-maximize #ftwp-trigger,#ftwp-container.ftwp-fixed-to-post.ftwp-minimize #ftwp-contents{visibility:hidden;z-index:-100}#ftwp-container.ftwp-fixed-to-post.ftwp-maximize #ftwp-contents{visibility:visible}#ftwp-container.ftwp-fixed-to-post{position:relative;z-index:999999}#ftwp-container.ftwp-fixed-to-post #ftwp-contents,#ftwp-container.ftwp-fixed-to-post #ftwp-trigger{position:fixed;top:auto;bottom:auto;left:auto;right:auto}#ftwp-container.ftwp-fixed-to-post.ftwp-top-left #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-top-left #ftwp-trigger,#ftwp-container.ftwp-fixed-to-post.ftwp-top-right #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-top-right #ftwp-trigger{top:0}#ftwp-container.ftwp-fixed-to-post.ftwp-middle-left #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-middle-left #ftwp-trigger,#ftwp-container.ftwp-fixed-to-post.ftwp-middle-right #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-middle-right #ftwp-trigger{top:0;bottom:0;margin:auto 0}@media screen and (max-height:420px){#ftwp-container.ftwp-fixed-to-post.ftwp-middle-left #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-middle-right #ftwp-contents{margin:0}}#ftwp-container.ftwp-fixed-to-post.ftwp-bottom-left #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-bottom-left #ftwp-trigger,#ftwp-container.ftwp-fixed-to-post.ftwp-bottom-right #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-bottom-right #ftwp-trigger{bottom:0}#ftwp-container #ftwp-contents.ftwp-border-thin,#ftwp-container #ftwp-trigger.ftwp-border-thin{border-color:rgba(51,51,51,.95);border-style:solid;border-width:1px}#ftwp-container #ftwp-trigger.ftwp-border-thin{font-size:29.5px}#ftwp-container #ftwp-contents.ftwp-border-medium,#ftwp-container #ftwp-trigger.ftwp-border-medium{border-color:rgba(51,51,51,.95);border-style:solid;border-width:2px}#ftwp-container #ftwp-trigger.ftwp-border-medium{font-size:29px}#ftwp-container #ftwp-contents.ftwp-border-bold,#ftwp-container #ftwp-trigger.ftwp-border-bold{border-color:rgba(51,51,51,.95);border-style:solid;border-width:5px}#ftwp-container #ftwp-trigger.ftwp-border-bold{font-size:27.5px}#ftwp-container.ftwp-wrap .ftwp-shape-round,#ftwp-container.ftwp-wrap .ftwp-shape-round:active,#ftwp-container.ftwp-wrap .ftwp-shape-round:focus,#ftwp-container.ftwp-wrap .ftwp-shape-round:hover{border-radius:7px}#ftwp-container.ftwp-border-thin .ftwp-shape-round #ftwp-header{border-top-left-radius:6px;border-top-right-radius:6px}#ftwp-container.ftwp-border-thin .ftwp-shape-round #ftwp-list{border-bottom-left-radius:6px;border-bottom-right-radius:6px}#ftwp-container.ftwp-border-medium .ftwp-shape-round #ftwp-header{border-top-left-radius:5px;border-top-right-radius:5px}#ftwp-container.ftwp-border-medium .ftwp-shape-round #ftwp-list{border-bottom-left-radius:5px;border-bottom-right-radius:5px}#ftwp-container.ftwp-border-bold .ftwp-shape-round #ftwp-header{border-top-left-radius:2px;border-top-right-radius:2px}#ftwp-container.ftwp-border-bold .ftwp-shape-round #ftwp-list{border-bottom-left-radius:2px;border-bottom-right-radius:2px}#ftwp-container.ftwp-wrap .ftwp-shape-circle,#ftwp-container.ftwp-wrap .ftwp-shape-circle:active,#ftwp-container.ftwp-wrap .ftwp-shape-circle:focus,#ftwp-container.ftwp-wrap .ftwp-shape-circle:hover{border-radius:50%}#ftwp-container.ftwp-wrap .ftwp-shape-circle .ftwp-trigger-icon{font-size:27px}#ftwp-container.ftwp-wrap .ftwp-shape-circle.ftwp-border-thin .ftwp-trigger-icon{font-size:26px}#ftwp-container.ftwp-wrap .ftwp-shape-circle.ftwp-border-medium .ftwp-trigger-icon{font-size:25px}#ftwp-container.ftwp-wrap .ftwp-shape-circle.ftwp-border-bold .ftwp-trigger-icon{font-size:22px}#ftwp-container #ftwp-list .ftwp-anchor::before{float:left;font-size:4.8px;line-height:3;margin-right:10px}#ftwp-container #ftwp-list .ftwp-text{display:block;overflow:hidden}#ftwp-container #ftwp-list.ftwp-liststyle-circle .ftwp-anchor::before{content:'\F111'}#ftwp-container #ftwp-list.ftwp-liststyle-circle-o .ftwp-anchor::before{content:'\F10C'}#ftwp-container #ftwp-list.ftwp-liststyle-square .ftwp-anchor::before{content:'\F0C8'}#ftwp-container #ftwp-list.ftwp-liststyle-square-o .ftwp-anchor::before{content:'\F096'}#ftwp-container #ftwp-list.ftwp-liststyle-decimal{counter-reset:List}#ftwp-container #ftwp-list.ftwp-liststyle-decimal .ftwp-item{counter-increment:List}#ftwp-container #ftwp-list.ftwp-liststyle-decimal .ftwp-anchor::before{font-size:12px;line-height:1.2;font-family:inherit;content:counters(List,".")}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-liststyle-none .ftwp-anchor::before{content:'.';visibility:hidden;margin-right:0}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-anchor::before{margin-left:20px}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-sub .ftwp-anchor::before{margin-left:40px}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-anchor::before{margin-left:60px}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-anchor::before{margin-left:80px}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-anchor::before{margin-left:100px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-liststyle-decimal ol,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-liststyle-decimal ul{counter-reset:List}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-collapse>.ftwp-sub{height:0;visibility:hidden}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp-icon .ftwp-anchor{padding-left:32px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub{position:relative}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand{position:absolute;left:0;top:0;padding:5px 10px;box-sizing:content-box;opacity:.5;-webkit-transition:transform .1s,opacity .3s;transition:transform .1s,opacity .3s;z-index:20}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse:focus,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse:hover,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand:focus,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand:hover{font-family:ftwp-icon;-webkit-transform:scale(1.3);-ms-transform:scale(1.3);transform:scale(1.3);opacity:.9}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse:hover,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand:hover{cursor:default}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-expand{left:20px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-expand{left:40px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-expand{left:60px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-expand{left:80px}#ftwp-container #ftwp-list.ftwp-strong-first>.ftwp-item>.ftwp-anchor .ftwp-text{font-weight:700;font-size:13.2px}#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-circle-o>.ftwp-item>.ftwp-anchor::before,#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-circle>.ftwp-item>.ftwp-anchor::before,#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-square-o>.ftwp-item>.ftwp-anchor::before,#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-square>.ftwp-item>.ftwp-anchor::before{font-size:6px;line-height:2.4;font-weight:700}#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-decimal>.ftwp-item>.ftwp-anchor::before{font-size:13.2px;font-weight:700}#ftwp-container #ftwp-list.ftwp-effect-basic .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-radial-out .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-out .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-leftline .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-rightline .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-underline .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-round-corners .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-shutter-out .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-sweep-to-left .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-sweep-to-right .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-center .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-left .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-right .ftwp-text::before{content:'';position:absolute;z-index:-1;top:0;right:0;bottom:0;left:0;background:rgba(221,51,51,.95);-webkit-transition:.3s ease-out;transition:.3s ease-out;-webkit-transition-property:transform,bottom,left,right,background;transition-property:transform,bottom,left,right,background}#ftwp-container #ftwp-list.ftwp-effect-fade .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-fade .ftwp-anchor:focus{background:rgba(221,51,51,.95)}#ftwp-container #ftwp-list.ftwp-effect-sweep-to-right .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:left center;-ms-transform-origin:left center;transform-origin:left center}#ftwp-container #ftwp-list.ftwp-effect-sweep-to-right .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-sweep-to-right .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1)}#ftwp-container #ftwp-list.ftwp-effect-sweep-to-left .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:right center;-ms-transform-origin:right center;transform-origin:right center;-webkit-transition-property:transform;transition-property:transform}#ftwp-container #ftwp-list.ftwp-effect-sweep-to-left .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-sweep-to-left .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1)}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-anchor{-webkit-transition-duration:.5s;transition-duration:.5s}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1);-webkit-transition-timing-function:cubic-bezier(.52,1.64,.37,.66);transition-timing-function:cubic-bezier(.52,1.64,.37,.66)}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:left center;-ms-transform-origin:left center;transform-origin:left center;-webkit-transition-duration:.5s;transition-duration:.5s}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-anchor{-webkit-transition-duration:.5s;transition-duration:.5s}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1);-webkit-transition-timing-function:cubic-bezier(.52,1.64,.37,.66);transition-timing-function:cubic-bezier(.52,1.64,.37,.66)}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:right center;-ms-transform-origin:right center;transform-origin:right center;-webkit-transition-duration:.5s;transition-duration:.5s}#ftwp-container #ftwp-list.ftwp-effect-radial-out .ftwp-text::before{border-radius:100%;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0)}#ftwp-container #ftwp-list.ftwp-effect-radial-out .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-radial-out .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scale(2);-ms-transform:scale(2);transform:scale(2)}#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-text::before{border-radius:100%;background:rgba(238,238,238,.95);-webkit-transform:scale(2);-ms-transform:scale(2);transform:scale(2)}#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-anchor:focus{background:rgba(221,51,51,.95)}#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-anchor:focus .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-out .ftwp-text::before{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0)}#ftwp-container #ftwp-list.ftwp-effect-rectangle-out .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-out .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-text::before{background:rgba(238,238,238,.95)}#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-anchor:focus,#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-anchor:focus{background:rgba(221,51,51,.95)}#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0)}#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0)}#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-text::before{background:rgba(238,238,238,.95);-webkit-transform-origin:center;-ms-transform-origin:center;transform-origin:center}#ftwp-container #ftwp-list.ftwp-effect-shutter-out .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-shutter-out .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1)}#ftwp-container #ftwp-list.ftwp-effect-shutter-out .ftwp-text::before{background:rgba(221,51,51,.95);-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:center;-ms-transform-origin:center;transform-origin:center}#ftwp-container #ftwp-list.ftwp-effect-underline-from-left .ftwp-text::before{top:auto;right:100%;height:1px}#ftwp-container #ftwp-list.ftwp-effect-underline-from-left .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-left .ftwp-anchor:focus .ftwp-text::before{right:0}#ftwp-container #ftwp-list.ftwp-effect-underline-from-right .ftwp-text::before{top:auto;left:100%;height:1px}#ftwp-container #ftwp-list.ftwp-effect-underline-from-right .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-right .ftwp-anchor:focus .ftwp-text::before{left:0}#ftwp-container #ftwp-list.ftwp-effect-underline-from-center .ftwp-text::before{top:auto;left:50%;right:50%;height:1px}#ftwp-container #ftwp-list.ftwp-effect-underline-from-center .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-center .ftwp-anchor:focus .ftwp-text::before{left:0;right:0}#ftwp-container #ftwp-list.ftwp-effect-reveal-underline .ftwp-text::before{top:auto;right:0;bottom:-2px;left:0;height:2px}#ftwp-container #ftwp-list.ftwp-effect-reveal-underline .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-underline .ftwp-anchor:focus .ftwp-text::before{bottom:0}#ftwp-container #ftwp-list.ftwp-effect-reveal-leftline .ftwp-text::before{top:0;right:auto;bottom:0;left:-3px;width:3px}#ftwp-container #ftwp-list.ftwp-effect-reveal-leftline .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-leftline .ftwp-anchor:focus .ftwp-text::before{left:0}#ftwp-container #ftwp-list.ftwp-effect-reveal-rightline .ftwp-text::before{top:0;right:-3px;bottom:0;left:auto;width:3px}#ftwp-container #ftwp-list.ftwp-effect-reveal-rightline .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-rightline .ftwp-anchor:focus .ftwp-text::before{right:0}#ftwp-container #ftwp-list.ftwp-effect-round-corners .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-round-corners .ftwp-anchor:focus .ftwp-text::before{background:rgba(221,51,51,.95);border-radius:1em}#ftwp-container #ftwp-list.ftwp-effect-round-corners .ftwp-text::before{background:rgba(238,238,238,.95)}#ftwp-container #ftwp-list.ftwp-effect-border-fade .ftwp-anchor{-webkit-transition:color .3s,box-shadow .3s;transition:color .3s,box-shadow .3s}#ftwp-container #ftwp-list.ftwp-effect-border-fade .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-border-fade .ftwp-anchor:focus{box-shadow:inset 0 0 0 2px rgba(221,51,51,.95)}@-webkit-keyframes ftwpFadeIn{from{opacity:0;visibility:hidden}to{opacity:1;visibility:visible}}@keyframes ftwpFadeIn{from{opacity:0;visibility:hidden}to{opacity:1;visibility:visible}}@-webkit-keyframes ftwpFadeOut{from{opacity:1;visibility:visible}to{opacity:0;visibility:hidden}}@keyframes ftwpFadeOut{from{opacity:1;visibility:visible}to{opacity:0;visibility:hidden}}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-in.ftwp-maximize #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-in.ftwp-minimize #ftwp-trigger{visibility:hidden;-webkit-animation:ftwpFadeIn .5s ease-out forwards;animation:ftwpFadeIn .5s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-inOut.ftwp-minimize #ftwp-trigger{visibility:hidden;-webkit-animation:ftwpFadeIn .3s .1s ease-out forwards;animation:ftwpFadeIn .3s .1s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-inOut.ftwp-minimize #ftwp-contents{visibility:visible;-webkit-animation:ftwpFadeOut .1s ease-in forwards;animation:ftwpFadeOut .1s ease-in forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-inOut.ftwp-maximize #ftwp-contents{visibility:hidden;-webkit-animation:ftwpFadeIn .3s .1s ease-out forwards;animation:ftwpFadeIn .3s .1s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-inOut.ftwp-maximize #ftwp-trigger{visibility:visible;-webkit-animation:ftwpFadeOut .1s ease-in forwards;animation:ftwpFadeOut .1s ease-in forwards}@-webkit-keyframes ftwpZoomIn{0%{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);visibility:hidden;opacity:0}20%{opacity:0}30%{opacity:1}100%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);visibility:visible;opacity:1}}@keyframes ftwpZoomIn{0%{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);visibility:hidden;opacity:0}20%{opacity:0}30%{opacity:1}100%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);visibility:visible;opacity:1}}@-webkit-keyframes ftwpZoomOut{0%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);visibility:visible;opacity:1}50%{opacity:1}80%{opacity:.3}100%{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);visibility:hidden;opacity:0}}@keyframes ftwpZoomOut{0%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);visibility:visible;opacity:1}50%{opacity:1}80%{opacity:.3}100%{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);visibility:hidden;opacity:0}}@-webkit-keyframes ftwpHide{from{visibility:visible}to{visibility:hidden}}@keyframes ftwpHide{from{visibility:visible}to{visibility:hidden}}@-webkit-keyframes ftwpShow{0%,99%{visibility:hidden}100%{visibility:visible}}@keyframes ftwpShow{0%,99%{visibility:hidden}100%{visibility:visible}}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-in.ftwp-maximize #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-in.ftwp-minimize #ftwp-trigger{-webkit-animation:ftwpZoomIn .5s ease-out forwards;animation:ftwpZoomIn .5s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-inOut.ftwp-maximize #ftwp-trigger{visibility:visible;-webkit-animation:ftwpHide .1s forwards;animation:ftwpHide .1s forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-inOut.ftwp-maximize #ftwp-contents{-webkit-animation:ftwpZoomIn .3s ease-out forwards;animation:ftwpZoomIn .3s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-inOut.ftwp-minimize #ftwp-trigger{visibility:hidden;-webkit-animation:ftwpShow .3s forwards;animation:ftwpShow .3s forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-inOut.ftwp-minimize #ftwp-contents{-webkit-animation:ftwpZoomOut .4s ease-in forwards;animation:ftwpZoomOut .4s ease-in forwards}@-webkit-keyframes ftwpTargetHint{0%,100%{opacity:0}50%{opacity:1}}@keyframes ftwpTargetHint{0%,100%{opacity:0}50%{opacity:1}}.ftwp-heading-target{position:relative;outline:0}.ftwp-heading-target::before{content:'';display:block;opacity:0;position:absolute;top:0;left:-10px;width:4px;height:100%;background:#d33;-webkit-animation:ftwpTargetHint 1s .6s forwards;animation:ftwpTargetHint 1s .6s forwards}.ftwp-widget #ftwp-container,.ftwp-widget #ftwp-container.ftwp-wrap #ftwp-contents{height:auto;width:100%}.ftwp-fade-trigger{opacity:.1!important;filter:blur(1px);-webkit-transition:3s ease-in;transition:3s ease-in;-webkit-transition-property:opacity,filter;transition-property:opacity,filter}.ftwp-unfade-trigger{opacity:1;filter:blur(0);-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);-webkit-transition:.5s ease-out;transition:.5s ease-out;-webkit-transition-property:opacity,filter;transition-property:opacity,filter}.ftwp-blur{filter:blur(3px)!important;opacity:.8!important;-webkit-transition:filter 1s ease-out!important;transition:filter 1s ease-out!important}.ftwp-unblur{filter:blur(0)!important;opacity:1!important;-webkit-transition:filter .3s ease-out!important;transition:filter .3s ease-out!important}.ftwp-no-scroll{overflow:hidden!important}.ftwp-in-post#ftwp-container-outer{margin-bottom:20px}.ftwp-in-post#ftwp-container-outer,.ftwp-in-post#ftwp-container-outer #ftwp-contents{height:auto;overflow-y:hidden;position:relative;z-index:1}.ftwp-in-post#ftwp-container-outer #ftwp-trigger,.ftwp-widget #ftwp-container #ftwp-trigger{position:absolute;top:-9999px;z-index:-10;visibility:hidden}.ftwp-in-post#ftwp-container-outer.ftwp-float-left,.ftwp-in-post#ftwp-container-outer.ftwp-float-left #ftwp-contents,.ftwp-in-post#ftwp-container-outer.ftwp-float-right,.ftwp-in-post#ftwp-container-outer.ftwp-float-right #ftwp-contents{width:250px}.ftwp-in-post#ftwp-container-outer.ftwp-float-right{float:right;margin-left:20px}@media screen and (max-width:420px){.ftwp-in-post#ftwp-container-outer.ftwp-float-right,.ftwp-in-post#ftwp-container-outer.ftwp-float-right #ftwp-contents{margin-left:0;margin-right:0;float:none;width:100%!important}}.ftwp-in-post#ftwp-container-outer.ftwp-float-left{float:left;margin-right:20px}@media screen and (max-width:420px){.ftwp-in-post#ftwp-container-outer.ftwp-float-left,.ftwp-in-post#ftwp-container-outer.ftwp-float-left #ftwp-contents{margin-left:0;margin-right:0;float:none;width:100%!important}}.ftwp-in-post#ftwp-container-outer.ftwp-float-none,.ftwp-in-post#ftwp-container-outer.ftwp-float-none #ftwp-contents{width:100%}.ftwp-widget-fixed #ftwp-contents{position:fixed;z-index:999999}.ftwp-widget-invalid{display:none}#ftwp-container.ftwp-hidden-state{opacity:0;visibility:hidden;z-index:-9999;position:absolute;top:0;left:0}#ftwp-container.ftwp-ie9.ftwp-maximize #ftwp-contents,#ftwp-container.ftwp-ie9.ftwp-minimize #ftwp-trigger{visibility:visible!important}#ftwp-container.ftwp-ie9.ftwp-maximize #ftwp-trigger{visibility:hidden!important}#ftwp-container.ftwp-ie9 #ftwp-trigger:hover{filter:none!important}

/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  font-display: fallback;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  font-display: fallback;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-display: fallback;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  font-display: fallback;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfBBc4AMP6lQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* latin */
@font-face {
  font-family: 'PT Serif';
  font-style: normal;
  font-weight: 400;
  font-display: fallback;
  src: local('PT Serif'), local('PTSerif-Regular'), url(https://fonts.gstatic.com/s/ptserif/v11/EJRVQgYoZZY2vCFuvAFWzr-_dSb_.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}


.article_holder,.article_holder .cb-article-meta h2,.article_holder .cb-article-meta h3,.article_holder .cb-article-meta h4,.article_holder .cb-byline,.cb-cat-header,.footer-first-line li,article,aside,div,main,section{box-sizing:border-box}body,html{height:100%;width:100%;margin:0;padding:0;left:0;top:0;font-size:100%}.center,.container{margin-left:auto;margin-right:auto}*{font-family:'Roboto', 'Helvetica', sans-serif;font-weight:300;color:#404040;line-height:1.5}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.375rem}h4{font-size:1.6rem}h5{font-size:1rem}h6{font-size:.875rem}p{font-size:1.125rem;font-weight:200;line-height:1.8}.font-light{font-weight:300}.font-regular{font-weight:400}.font-heavy{font-weight:700}.left{text-align:left}.right{text-align:right}.center{text-align:center}.justify{text-align:justify}.container{width:90%}.row{position:relative;width:100%}.row [class^=col]{float:left;margin:.5rem 2%;min-height:.125rem}.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9{width:96%}.col-1-sm{width:4.33%}.col-2-sm{width:12.66%}.col-3-sm{width:21%}.col-4-sm{width:29.33%}.col-5-sm{width:37.66%}.col-6-sm{width:46%}.col-7-sm{width:54.33%}.col-8-sm{width:62.66%}.col-9-sm{width:71%}.col-10-sm{width:79.33%}.col-11-sm{width:87.66%}.col-12-sm{width:96%}.row::after{content:"";display:table;clear:both}#main>article:after,.cb-grid-6:after{content:''}.hidden-sm{display:none}@media only screen and (min-width:33.75em){.container{width:80%}}@media only screen and (min-width:45em){.col-1{width:4.33%}.col-2{width:12.66%}.col-3{width:21%}.col-4{width:29.33%}.col-5{width:37.66%}.col-6{width:46%}.col-7{width:54.33%}.col-8{width:62.66%}.col-9{width:71%}.col-10{width:79.33%}.col-11{width:87.66%}.col-12{width:96%}.hidden-sm{display:block}}@media only screen and (min-width:60em){.container{width:75%;max-width:60rem}}header.site-header{width:100%;position:fixed;text-align:center;background:#134a8e;z-index:102;-webkit-appearance:none;left:0;top:0;color:#fff;text-transform:uppercase}header.site-header nav{color:#fff}body.admin-bar header.site-header{top:32px}h1,h2,h3,h4,h5,h6{font-family: 'PT Serif', serif;font-weight:500}footer.site-footer{background-color:#272727;text-align:center; padding-bottom: 100px;}footer.site-footer .follow_us_container{background:#fff}footer.site-footer .row footer-first-line{background:#313131}header.site-header nav ul{margin:0 0 0;padding:0}header.site-header nav ul li{list-style:none;display:inline-block;}header.site-header nav ul li a{color:black;text-decoration:none}header.site-header nav ul li a:hover{text-decoration:underline}header .logo{text-align:left}header .logo img{display:block;max-height:45px;width:auto}header .t-menu{color:#fff;text-align:right;line-height:2.5}.site-content{width:100%;clear:both;overflow:hidden}.entry-content-article{width:calc(100% - 310px);float:left}aside{width:300px;padding:1em;float:right}.inner-header-container{height:500px;position:relative;overflow:hidden;margin-bottom:0.3em}.inner-header-container img.wp-post-image{position:absolute;width:100%;height:auto;z-index:1;top:50%;margin-top:-260px}.title-container{bottom:-5px;position:absolute;left:0;width:100%;z-index:99}.inner-header-container h1.entry-title{text-shadow:1px 1px rgba(0,0,0,.4);width:75%;padding:0 50px 0 0;font-size:3.5em;text-transform:uppercase;color:#fff;box-sizing:border-box;margin:0 0 10px;line-height:1.4;float:left}.inner-header-container .publisher{width:25%;float:right;z-index:1000;text-align:center}.inner-header-container .publisher img{width:200px;position:absolute;bottom:20px;right:4em}.breadcrumbs,.entry-meta-details span,.entry-meta-details time{color:#404040}.breadcrumbs a{text-decoration:none;text-transform:uppercase;color:#404040;font-size:.8em}.entry-content-article footer p,.entry-meta-details{color:#888;font-size:.8em;padding:10px 0 0;margin:0}.entry-content-article footer p{border-top:1px solid #eee}.entry-content-article footer p a{text-decoration:none;color:#888}.entry-content-article footer,.title-container,header.entry-header .entry-meta,main#main .entry-content{padding:0 4em 0 0}.cb-post-pagination{text-align:center;margin:25px 0}.cb-post-pagination a{display:inline-block;padding:20px 10px;background:#f7f7f7;border:3px solid #e9e9e9;color:#999;min-width:300px;text-decoration:none}.cb-post-pagination a:hover{background:#e9e9e9;text-decoration:none}.related-posts{clear:both}.cb-grid-img.nofade{overflow:hidden}.cb-grid-img.nofade a{display:block}.cb-grid-img.nofade img{position:relative;margin-left:50%;left:-300px}.cb-grid-img.nofade>a>img{max-width:600px;height:auto}.soc_img_wrap{position:relative}.entry-content img{max-width:100%;height:auto}.msw{color:black;cursor:pointer;border-top:2px solid black;border-bottom:2px solid black;display:inline-block;font-size:.8em;padding:2px 0;margin-top:5px}.cb-post-pagination-page-number{color:#606369;font-size:24px;font-weight:700;text-align:center;display:inline-block;position:relative;padding:0 25px 10px}.cb-post-pagination-next{display:inline-block;font-weight:600;font-size:24px}.mk_related_caption{text-transform:uppercase;text-align:center;margin-top:2em;padding:10px 0;font-family:Oswald,sans-serif}.follow_us_container{background:#fff;text-align:center;width:100%}.follow_us_container .fsl-list{padding:0}.follow_us,.follow_us_container .fsl-list{display:inline-block;vertical-align:middle}.follow_us{padding:0 10px 0 0;color:#333;font-size:23px}.fsl-list li{display:inline-block;vertical-align:middle;margin:0 5px}.fsl-list li a{display:block;height:47px;width:48px;background:url(/wp-content/themes/thegm/img/new_social_icons.png) no-repeat}.fsl-list li.fb a{background-position:0 0}.fsl-list li.tw a{background-position:-57px 0}.fsl-list li.pin a{background-position:-114px 0}.fsl-list li.ins a{background-position:-168px 0}.fsl-list li.gp a{background-position:-226px 0}.footer-first-line{padding:1em 0;background:#313131}.footer-first-line ul{text-align:center;margin:0;padding:0}.footer-first-line li{width:24%;padding:4px 10px;display:inline-block;vertical-align:top;list-style:none}.footer-first-line li a,.footer-second-line a{color:white;font-size:1.2em;text-decoration:none}.footer-second-line{padding:1.5em 0 0}.footer-second-line a{font-size:1em; text-transform: uppercase;}.footer-third-line img{max-width:200px;height:auto;margin-bottom:1em}.footer-third-line p{margin:0;color:#fff;font-size:.85em}.cb-grid-block .cb-module-header{margin-bottom:3px}.cb-grid-block .cb-grid-img{display:none}.cb-grid-block.cb-dark{background:0}.cb-grid-3,.cb-grid-4,.cb-grid-5,.cb-grid-6{position:relative;margin:3px 0 20px;background:#fff}.cb-grid-3>div,.cb-grid-4>div,.cb-grid-5>div,.cb-grid-6>div{overflow:hidden;display:block;float:left;position:relative}.cb-grid-3>div img,.cb-grid-4>div img,.cb-grid-5>div img,.cb-grid-6>div img{max-width:none}.cb-grid-3 a,.cb-grid-3 img,.cb-grid-4 a,.cb-grid-4 img,.cb-grid-5 a,.cb-grid-5 img,.cb-grid-6 a,.cb-grid-6 img{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-o-backface-visibility:hidden;backface-visibility:hidden}.cb-grid-3 img,.cb-grid-4 img,.cb-grid-5 img,.cb-grid-6 img{width:100%}.cb-grid-3 .cb-link,.cb-grid-4 .cb-link,.cb-grid-5 .cb-link,.cb-grid-6 .cb-link{width:100%;height:100%;position:absolute;top:0;left:0;display:block;z-index:17}.cb-grid-3 .cb-article-meta,.cb-grid-4 .cb-article-meta,.cb-grid-5 .cb-article-meta,.cb-grid-6 .cb-article-meta{position:absolute;bottom:0;left:0;z-index:16;width:100%}.article_holder .cb-article-meta h3,.article_holder .cb-article-meta h4,.cb-grid-3 .cb-article-meta h2,.cb-grid-4 .cb-article-meta h2,.cb-grid-5 .cb-article-meta h2,.cb-grid-6 .cb-article-meta h2{line-height:1.7;width:100%;text-align:center;margin:0;font-size:1.2em;font-weight:700;text-transform:uppercase;letter-spacing:1px;padding:10px}.cb-grid-3 .cb-article-meta h2 a,.cb-grid-4 .cb-article-meta h2 a,.cb-grid-5 .cb-article-meta h2 a,.cb-grid-6 .cb-article-meta h2 a{color:#fff;border-bottom:2px #fff solid}.cb-grid-3 .cb-article-meta .cb-byline,.cb-grid-4 .cb-article-meta .cb-byline,.cb-grid-5 .cb-article-meta .cb-byline,.cb-grid-6 .cb-article-meta .cb-byline{width:100%;padding:5px 20px;letter-spacing:1px;color:#fff}.cb-grid-3 .cb-article-meta .cb-byline a,.cb-grid-4 .cb-article-meta .cb-byline a,.cb-grid-5 .cb-article-meta .cb-byline a,.cb-grid-6 .cb-article-meta .cb-byline a{color:#fff}.cb-grid-3 .cb-article-meta .cb-byline i,.cb-grid-4 .cb-article-meta .cb-byline i,.cb-grid-5 .cb-article-meta .cb-byline i,.cb-grid-6 .cb-article-meta .cb-byline i{color:#f0f0f0}.cb-grid-3 .cb-article-meta .cb-byline .cb-categories,.cb-grid-4 .cb-article-meta .cb-byline .cb-categories,.cb-grid-5 .cb-article-meta .cb-byline .cb-categories,.cb-grid-6 .cb-article-meta .cb-byline .cb-categories{display:inline-block;vertical-align:top}.cb-grid-3 .cb-article-meta .cb-byline .cb-categories a,.cb-grid-4 .cb-article-meta .cb-byline .cb-categories a,.cb-grid-5 .cb-article-meta .cb-byline .cb-categories a,.cb-grid-6 .cb-article-meta .cb-byline .cb-categories a{display:inline-block;vertical-align:top;letter-spacing:1px;color:#fff}.cb-grid-3 .cb-article-meta .cb-byline .cb-byline-element a,.cb-grid-4 .cb-article-meta .cb-byline .cb-byline-element a,.cb-grid-5 .cb-article-meta .cb-byline .cb-byline-element a,.cb-grid-6 .cb-article-meta .cb-byline .cb-byline-element a{color:#fff}.cb-grid-3 .cb-feature-1,.cb-grid-3 .cb-feature-2,.cb-grid-3 .cb-feature-3{width:100%;height:150px;margin:0}.cb-grid-3 .cb-feature-1 h2,.cb-grid-3 .cb-feature-2 h2,.cb-grid-3 .cb-feature-3 h2{font-size:14px;letter-spacing:2px;padding:10px}.cb-grid-4 .cb-feature-1{width:100%;height:160px;margin:0;border-bottom:3px solid #fff}.cb-grid-4 .cb-feature-1 h2{font-size:16px;letter-spacing:3px;padding:10px}.cb-grid-4 .cb-feature-2{width:100%;height:120px;margin:0}.cb-grid-4 .cb-feature-2 .cb-article-meta h2{font-size:14px}.cb-grid-4 .cb-feature-3 .cb-article-meta h2,.cb-grid-4 .cb-feature-4 .cb-article-meta h2{font-size:12px}.cb-grid-4 .cb-feature-3{width:100%;height:120px;margin:0}.cb-grid-4 .cb-feature-4{width:100%;height:120px}.cb-grid-4 .cb-feature-2 .cb-article-meta .cb-byline,.cb-grid-4 .cb-feature-3 .cb-article-meta .cb-byline,.cb-grid-4 .cb-feature-4 .cb-article-meta .cb-byline,.cb-grid-4 .cb-feature-5 .cb-article-meta .cb-byline{display:none}.cb-grid-5 .cb-feature-1,.cb-grid-5 .cb-feature-2,.cb-grid-5 .cb-feature-3,.cb-grid-5 .cb-feature-4,.cb-grid-5 .cb-feature-5{height:190px;width:100%;border-bottom:3px solid #fff}.cb-grid-5 .cb-feature-1 .cb-article-meta h2,.cb-grid-5 .cb-feature-2 .cb-article-meta h2,.cb-grid-5 .cb-feature-3 .cb-article-meta h2,.cb-grid-5 .cb-feature-4 .cb-article-meta h2,.cb-grid-5 .cb-feature-5 .cb-article-meta h2{font-size:14px}.cb-grid-6 .cb-feature-1,.cb-grid-6 .cb-feature-2,.cb-grid-6 .cb-feature-3,.cb-grid-6 .cb-feature-4,.cb-grid-6 .cb-feature-5,.cb-grid-6 .cb-feature-6{height:250px;width:100%}.cb-grid-6 .cb-feature-1,.cb-grid-6 .cb-feature-6{height:130px}.article_holder{border:1px solid #fff}.article_holder .cb-article-meta h2 a,.article_holder .cb-article-meta h3 a,.article_holder .cb-article-meta h4 a{border:none;text-decoration:none;text-shadow:1px 1px rgba(0,0,0,.4);font-family:Oswald,sans-serif;font-weight:700;color:#fff}.article_holder .cb-byline{text-align:left;display:block;overflow:hidden;width:100%;background:rgba(0,0,0,.25);margin-bottom:0;padding-left:10px;padding-right:10px;padding-bottom:0;line-height:2.2}.cb-cat-header,.menu-sidebar-inner,.posts-navi,.search .page-title,.social-links{text-align:center}.article_holder .cb-byline,.article_holder .cb-byline span{text-shadow:1px 1px rgba(0,0,0,.4);font-size:.8em;text-transform:uppercase;color:#fff;font-family:Oswald,sans-serif}.cb-cat-header{padding:1em 2em}.cb-cat-header p{font-size:1em}#cb-cat-title,.search .page-title{margin:.5em 0 0;font-size:1.8em;text-transform:uppercase}.aligncenter{display:block;margin:20px auto}body{padding-top:46px!important}.social-links{position:absolute;margin-top:-41px;width:100%}.social-links .icon-facebook,.social-links .icon-pinterest{background-size:cover;background-position:top center;display:inline-block;margin:0 5px;box-sizing:border-box}
.page h1.entry-title {text-align: center}
.entry-content table {border-collapse: collapse; border-spacing: inherit;}
.entry-content table td {border-bottom: 1px solid #eee; padding: 8px;}
.entry-content table td  a {text-decoration: none;color: #134a8e;}
.page #secondary, .page #comments {display: none}
.cb-post-pagination {clear: both;}
@media (min-width:1201px) and (max-width:1800px){.article_holder.mk_lre{width:33.33%;height:250px}.article_holder.mk_lro{width:25%;height:250px}.article_holder.mk_gi img{min-height:250px;width:auto;min-width:100%}}@media (min-width:1801px){.article_holder.mk_gi{width:25%;height:250px}.article_holder.mk_gi img{min-height:250px;width:auto;min-width:100%}}.one_half{width:48%}.one_third{width:30.66%}.two_third{width:65.33%}.one_fourth{width:22%}.three_fourth{width:74%}.one_fifth{width:16.8%}.two_fifth{width:37.6%}.three_fifth{width:58.4%}.four_fifth{width:67.2%}.one_sixth{width:13.33%}.five_sixth{width:82.67%}.five_sixth,.four_fifth,.one_fifth,.one_fourth,.one_half,.one_sixth,.one_third,.three_fifth,.three_fourth,.two_fifth,.two_third{position:relative;margin-right:4%;float:left}.last{margin-right:0!important;clear:right}.clearboth{clear:both;display:block;font-size:0;height:0;line-height:0;width:100%}#secondary .fixed{position:fixed;top:100px}#secondary .scroll_bot{position:absolute;top:600px;bottom:0}#secondary #text-10-sticky-wrapper{position:relative}#main>article:after{display:table;clear:both}.posts-navi a{text-decoration:none;font-weight:600;font-size:1.2em}.posts-navi{display:block;width:100%;background:#fff}.posts-navi span a{color:#c2c2c2;border:3px solid #929292;border-radius:5px;padding:20px;margin:10px;display:inline-block;transition:all .2s ease-in-out}.cb-grid-6:after{display:table;clear:both}div#menu-sidebar{position:fixed;z-index:9999;background:rgba(0,0,0,.4);width:100%;height:100%;top:0;left:0;right:0;bottom:0;cursor:url(/wp-content/themes/thegm/img/close2.png) 16 16,pointer;visibility:hidden;opacity:0;-webkit-transition:.3s;-o-transition:.3s;transition:.3s}.menu-sidebar-inner{background-color:#1d9dbd;position:absolute;width:250px;left:-250px;top:0;bottom:0;height:100vh;padding:10px 0;overflow-y:auto;overflow-x:hidden;cursor:default;-webkit-transition:.3s;-o-transition:.3s;transition:.3s}.menu-sidebar-inner img{max-height:70px;width:auto}.menu-sidebar-inner h2{color:#fff;text-transform:uppercase;padding-bottom:5px;font-size:1.4em;border-bottom:1px solid #fff}.menu-sidebar-inner .menu{padding:0}.menu-sidebar-inner .menu li{list-style:none}.menu-sidebar-inner .menu li a{display:block;color:#000;text-transform:uppercase;padding:0 10px;font-size:1em;text-align:center;line-height:2;text-decoration:none}.menu-sidebar-inner .menu li a:hover{background: #f74e41;color: white;}.menu-sidebar-inner .search-form{padding:0 10px 25px}.menu-sidebar-inner .search-form .screen-reader-text,.menu-sidebar-inner .search-form .search-submit{display:none}.menu-sidebar-inner .search-form .search-field{display:block;width:100%;border:1px solid grey;padding:7px;box-sizing:border-box}body.menu-active{overflow:hidden}body.menu-active div#menu-sidebar{visibility:visible;opacity:1}body.menu-active .menu-sidebar-inner{left:0}.cb-cat-header img{max-width:100%;height:auto}@media (min-width:1080px) and (max-width:1200px){.inner-header-container{height:450px}.inner-header-container img.wp-post-image{margin-top:-225px}}@media (min-width:920px) and (max-width:1079px){.inner-header-container{height:350px}.inner-header-container h1.entry-title{font-size:2.5em}.inner-header-container img.wp-post-image{margin-top:-200px}}@media (min-width:770px) and (max-width:920px){.inner-header-container h1.entry-title{font-size:2em;padding:0 10px 0 0}.inner-header-container{height:300px}.inner-header-container img.wp-post-image{margin-top:-170px}.inner-header-container .publisher img{width:150px}.entry-content-article footer,.title-container,header.entry-header .entry-meta,main#main .entry-content{padding:0 2em}#secondary.secondary{display:none}.entry-content-article{width:100%}}@media (min-width:769px) and (max-width:1200px){.article_holder.mk_tle{width:33.33%;height:250px}.article_holder.mk_tlo{width:50%;height:250px}.article_holder.mk_gi img{min-height:250px;width:auto;min-width:100%}.footer-first-line li{width:32%}}@media (max-width:769px){#secondary,.secondary,.nav-h{display:none}.article_holder.mk_tle,.article_holder.mk_tlo{width:50%;height:250px}.mk_gi img{min-height:250px;width:auto;min-width:100%}#masthead .col-2{width:46%;float:left}.menu-sidebar-inner .menu li a{font-size:1em;line-height:2.3; font-weight: 400;}.entry-content-article{width:100%}header .logo img{max-height:35px}.msw{margin-top:1px}body{padding-top:46px!important}.entry-content-article footer,.title-container,header.entry-header .entry-meta,main#main .entry-content{padding:0 1em}.cb-cat-header{padding:.3em 1em}#cb-cat-title,.search .page-title{font-size:1.6em}.cb-cat-header p{font-size:.85em}.footer-first-line li{width:48%}.footer-second-line p{margin:0}.inner-header-container{height:250px}.inner-header-container img.wp-post-image{margin-top:-150px}.inner-header-container .publisher img{width:120px;right:1em}.inner-header-container h1.entry-title{font-size:2em;padding:0 20px 0 0}}@media (max-width:640px){.inner-header-container{height:200px}.inner-header-container img.wp-post-image{margin-top:-105px}.cb-grid-3 .cb-article-meta .cb-byline,.cb-grid-4 .cb-article-meta .cb-byline,.cb-grid-5 .cb-article-meta .cb-byline,.cb-grid-6 .cb-article-meta .cb-byline{padding:5px 10px}.inner-header-container h1.entry-title{font-size:1.8em}.five_sixth,.four_fifth,.one_fifth,.one_fourth,.one_half,.one_sixth,.one_third,.three_fifth,.three_fourth,.two_fifth,.two_third{position:relative;margin-right:0;float:none;width:100%;margin-bottom:30px}}@media (max-width:480px){.inner-header-container{height:200px}.inner-header-container img.wp-post-image{position:absolute;width:auto;height:100%;z-index:1;top:50%;margin-top:-100px;left:50%;margin-left:-230px}.inner-header-container .publisher img{width:70px}.inner-header-container h1.entry-title{font-size:1.7em}}@media (max-width:400px){h2{font-size:1.6rem}.article_holder.mk_tle,.article_holder.mk_tlo{width:100%;height:200px}.mk_gi img{min-height:200px;width:auto;min-width:100%}.cb-grid-img.nofade img{left:-200px}.footer-first-line li{width:98%}.fsl-list li{margin:0}.inner-header-container h1.entry-title{font-size:1.6em}.cb-post-pagination a{min-width:250px}}@media (max-width:320px){.inner-header-container h1.entry-title{font-size:1.5em}.cb-post-pagination a{min-width:220px}}@media (min-width:769px){.entry-content-article{min-height:700px}}
hr {border: none;height: 1px;background: #ccc;}
.single .entry-content h2 {border-bottom: 1px solid #404040;}
.single .entry-content h3 {font-size: 2rem; border-bottom: 1px solid #404040;}
.single .entry-content p {clear: both; text-align: left!important; font-size: 18px;}
.single .entry-content p > a {color: #680d3a;}
.single .entry-content p > a > span {color: #680d3a;}
.single .entry-content ol li, .single .entry-content ul li {font-size: 1.125rem; font-weight: 200; line-height: 1.8;}
.single .entry-content h5 {font-weight: 400;font-size: 0.8rem;}
.entry-content-article-container {
    max-width: 1320px;
    margin: 0 auto;
    box-sizing: border-box;
    width: 100%;
    padding: 0 5em;
}
/*Footer*/
.footer-first-line {display: none;}
.footer-second-line .col-7 .textwidget {text-align: left; float: left; padding:  0 0.5em 0 0; box-sizing: border-box; width: 33.33%}
.footer-second-line .col-5 .textwidget {width: 40%; color: #fff; float: left; text-align: left;}
.footer-second-line .col-5 .textwidget span, .footer-second-line .col-5 .textwidget small {color: #fff; text-transform: uppercase;	}
.footer-second-line .col-5 .textwidget p {color: #fff; margin: 0;}
.footer-second-line .col-5 .textwidget + .textwidget {width: 60%;}
.footer-second-line .col-5 .textwidget + .textwidget + .textwidget {float: right}
.footer-second-line .col-5 .textwidget img {margin-top: 7px;max-width:90px !important;}
.footer-third-line p {text-align: center;}
.footer-third-line {padding-left:5em;padding-right:5em;font-size: 0.8rem;color: #ccc;}
.fsl-list {padding: 0;margin: 10px 0 15px -10px;}
.footer-second-line {padding: 2em 5em 2em;}
.fsl-list li {margin: 0;}
.follow_us {font-size: 1em;color: #ccc;}
.fsl-list li a { height: 30px; width: 30px;background: url(/wp-content/themes/thegm/img/new_social_icons.png) no-repeat;opacity: 1;}
.fsl-list li a:hover {opacity: 1;}
.fsl-list li.pin a { background-position: -40px 0;}
.fsl-list li.ins a {background-position: -80px 0;}
.fsl-list li.tw a {background-position: -121px 0;}
.fsl-list li.gp a { background-position: -165px 0;}
.col-2.t-menu {margin: 0.5rem 0;}
.instagram-media {margin: 0 auto !important;}
footer p {font-size: 0.8rem;color: #ccc;}
footer p a {color: #ccc;}
footer.site-footer {background-color: #000;}
footer .col-7 p {margin-top: 0;}
header.site-header nav ul li a {display: block; position: relative; font-family: 'Roboto', serif; font-weight: 400; padding: 11px 6px;}
header.site-header nav ul li a:hover {color: white;background-color: #f74a41;}
#masthead .menu-item-has-children .sub-menu li a:hover {color: white;}
header.site-header  {box-sizing: border-box;}
.msw {text-indent: -9999px;width: 30px;position: relative;display: block;height: 12px;margin-top: 10px;}
.msw::after {content:""; height: 2px; position: absolute; width: 100%;top:7px; background: black; left: 0; }
header .nav-h.col-8 { width: 68.66%;}
#text-16 small {
	color: white;
}
.menu-sidebar-inner h6 { color: #fff; margin: 20px 0; text-transform: uppercase;  padding-bottom: 5px;  font-size: 1.4em;  border-bottom: 1px solid #fff;}
.home .mk_posts {margin-bottom: 1px;}
 .menu-sidebar-inner { background-color: #fff; }

 .share-buttons {position: fixed; top: 45%; left: 0;z-index: 100;}
.share-buttons ul {display: block;}
.share-buttons li {display: block;}
.share-buttons li a { height: 40px; width: 40px;display: block; text-indent: -99999px;background: url(https://menshaircuts.com/wp-content/themes/thegm/img/new_social_icons.png) no-repeat #000; opacity: 0.93;}
.share-buttons li a:hover {opacity: 1;}
.share-buttons li.pn a {background-color: #BD081C; background-image: url(/wp-content/themes/thegm/img/new_social_icons.png); background-repeat:  no-repeat;background-position: -40px 5px;}
.share-buttons li.fb a {background-position: 0 5px;background-color: #4267b2;}
.share-buttons li.tw a {background-position: -121px 5px;background-color: #1da1f2;}
.share-buttons li.gp a { background-position: -165px 5px;background-color: #dd5144;}



/*Styles for a Cut-off-advertise*/
.cut-off-item {display: -webkit-box;display: -ms-flexbox;display: flex;}

/*New Post Template*/
.single .relatedposts-container, .single  .d-a-block   {padding-left:5em;padding-right:5em;}
.single .d-a-block  {padding-top: 3em;}
.single .mk_related_caption {text-align: left;}
.single .relatedposts-container, .d-a-block .col-12 {margin: 0 auto; float: none;}
.single .article_holder .cb-grid-img {float: right; width: 80px; margin: 0 0 0 15px; }
.single .article_holder .cb-article-meta h2 a,
.single .article_holder .cb-article-meta h3 a,
.single .article_holder .cb-article-meta h4 a {text-shadow: none;color: #222;text-align: left;font-weight: 400;font-size: 1em;text-transform: none;letter-spacing: 0;}
.single .article_holder .cb-article-meta h4 {text-align: left;padding: 0;}
.single .cb-article-meta {float: left;width: calc(100% - 95px);}
.single .article_holder {width: 24%; margin: 0 1% 1% 0; float: left; height: auto !important; box-sizing: border-box; padding: 0.5em; border: 1px solid #ccc;}
.single .article_holder.mk_gi img { height: auto !important;min-height: auto !important;left: 0;margin-left: 0px;max-height: 80px;}
.single .article_holder .cb-byline,
.single .article_holder .cb-byline span {text-shadow: none;color: #404040;background: transparent;padding: 10px 0 0; display: none;}
.single #secondary {}
.single #secondary .relatedposts-container, .single  #secondary .d-a-block {padding: 0;}
.single #secondary .article_holder { width: 100%; margin: 0 0 3% 0;}
.single #text-6 img {max-width: 100%;}
.single #secondary .mk_related_caption {margin-top: 0;font-weight: 400;text-transform: inherit; font-size: 1.6rem;}
.single #secondary .cb-byline {display: none;}
.single #secondary .article_holder.mk_gi img { margin-left: 0px; max-height: 80px; left: 0;}
.single #secondary .article_holder .cb-article-meta h4 {font-size: 1em;}
.single .inner-header-container {float: right; width: 50%;}
.single .entry-meta {float: left; width: 50%;height: 500px;display: flex;align-items: center;}
.single .entry-meta .entry-meta-c {min-width: 100%;}
.single header.entry-header {padding: 1em 5em;overflow: hidden;}
.single header.entry-header  .title-container {padding: 0; position: relative;}
.single header.entry-header  .title-container h1 {margin: 0.4em 0 0.5em;line-height: 1.2;}
.single .inner-header-container .publisher { width: 25%; float: right; z-index: 1;position: absolute; right: 0; bottom: 20px; }
.single .inner-header-container img.wp-post-image {height: 100%;min-height: 500px;width: auto;left: 50%;margin-left: -390px;}
.single .inner-header-container .publisher img, .cb-cat-header .publisher img  {width: 60px; position: absolute;bottom: 0;right: 1.2em;}
.cb-cat-header .publisher img {bottom: 20px !important;}
.single #secondary .article_holder .cb-article-meta h4, .single #secondary .article_holder .cb-article-meta h4 a {font-family: 'PT Serif', serif;}
.single .entry-meta h1, .single .entry-content h2, .single .entry-content h3, .single .entry-content h4, .single .entry-content h5, .single #secondary .mk_related_caption, .single .mk_related_caption, .single .article_holder .cb-article-meta h4 a {font-family: 'PT Serif', serif;}
.single .article_holder .cb-article-meta h4 {font-size: 1.1em;line-height: 1.5;}
.single .article_holder .cb-article-meta h4 a {font-size: 0.85em;line-height: 1;}
.single aside .article_holder .cb-article-meta h4 a {font-size: 1em;line-height: 1;}
.single .entry-content  h2, .single .entry-content  h3 { font-size: 2rem;color: #000; font-weight: 400; border-bottom: 1px solid #f74e41;}
.single .entry-content  h3  { font-size: 2rem; margin: 1.3em 0 0.8em;}
.page-template-newmain-page-php .grid-f {padding-bottom: 4em;}
.page-template-newmain-page-php .grid-f h3  { margin: 0.5em 0 0;}
.page-template-newmain-page-php .grid-f h3 a { font-family: 'PT Serif', serif;  font-weight: 600;line-height: 1.2;font-size: 0.8em;  text-decoration: none;}
.page-template-newmain-page-php .title-f {text-align: center;font-family: 'PT Serif', serif;}
.page-template-newmain-page-php .title-f h6, .page-template-newmain-page-php .title-f h1 {margin: 1em 0;position: relative;font-family: 'PT Serif', serif; font-size: 2.5em;line-height: 0.8; text-transform: uppercase; font-weight: 900;}
.page-template-newmain-page-php  .post-categories {padding: 0; margin: 0; display:inline;}
.page-template-newmain-page-php  .post-categories li {display: inline; list-style: none;}
.page-template-newmain-page-php .breadcrumbs a {font-size: 1em;}
.page-template-newmain-page-php .title-f h6::before, .page-template-newmain-page-php .title-f h1::before {position: absolute;content: '';height: 1px;background: #ccc;left: 0;top: 32px;width: 100%; z-index: -1;}
.page-template-newmain-page-php .title-f h6 span, .page-template-newmain-page-php .title-f h1 span { font-family: 'PT Serif', serif;  font-weight: 900;background: #fff;padding: 0 30px;display: inline-block;}
.page-template-newmain-page-php .title-f  small {display: block; font-size: 0.55em;font-family: 'PT Serif', serif;color: #777; text-transform: none; }
.page-template-newmain-page-php .max  h3 a  {font-size: 1.3em;}
.page-template-newmain-page-php .max  h3 {margin: 0.5em 0 0em;}
.page-template-newmain-page-php .max p{margin: 0.5em auto; font-size: 1em;}
.page-template-newmain-page-php .latest .col-6 {margin-bottom: 2em;display: inline-block;vertical-align: top;float: none;margin: .5rem  1.85%;}
.page-template-newmain-page-php .entry-meta-details span {font-size: 1em;}
.page-template-newmain-page-php .bp-2 .col-6 {margin-bottom: 1.5em;}
.container.grid-f {width: 100%;max-width: 86rem;}
.f-h1 {position: absolute; z-index: -1; color: #999;}
.page-template-default .entry-title {font-family: 'PT Serif', serif;font-weight: 900;}
.page-template-default .entry-content {max-width: 1320px;margin: 0 auto;box-sizing: border-box;width: 100%;padding: 0 9em 3em !important;}

.essb_links .essb_icon::before, .essb_links li a .essb_network_name {color: #fff;}
.category-layout-v2 .cb-cat-header  {height: 25rem;padding: 0 5em;box-sizing: border-box;position: relative;background-size: cover !important}
.category-layout-v2  #cb-cat-title {color: #666;position: relative;padding-top: 18rem;text-align: left;font-family: 'PT Serif', serif; font-size: 3.5em; margin: 0;}
.category-layout-v2 .cb-cat-desc {padding: 1em 5em;box-sizing: border-box;}
.category-layout-v2 .cb-cat-desc h2 {font-family: 'PT Serif', serif; }
.p-cont-r {max-width: 1200px;    margin: 0 auto;    box-sizing: border-box;    width: 100%;    padding: 0 2rem;    overflow: hidden;}
.p-cont-r h3 a {font-size: 1.3em;line-height: 1.3;}
.p-cont-r h3.entry-title {margin: 0 0 15px;}
.p-cont-r h1, .p-cont-r h2, .p-cont-r h3, .p-cont-r h4, .p-cont-r h5, .p-cont-r h6, .p-cont-r h3 a{font-family: 'PT Serif', serif; font-weight: 500;}
.p-cont-r h3 a:hover {color: #111;}
.p-cont-r a {text-decoration: none !important}
.image-p img {width: 100%; height: auto;}
.image-p {float: right !important;}
.p-cont-r  article	{padding: 1.5em 0 0.5em;border-bottom: 2px solid #d8d8d8;}
.p-cont-r  article .col-7 {margin-left: 0;width: 56.33%;}
.p-cont-r  article .col-5 {margin-right: 0;width: 39.66%;}
.p-cont-r  p {margin: 0;}
.p-cont-r  p, .cb-cat-desc p {line-height: 1.6;}
.p-cont-r  article img:hover { opacity: 0.75; -webkit-transition: opacity .15s ease-in-out; -moz-transition: opacity .15s ease-in-out; -ms-transition: opacity .15s ease-in-out;-o-transition: opacity .15s ease-in-out; transition: opacity .15s ease-in-out;}

.relatedposts-container {overflow: hidden;}
#media_image-2 {padding: 20px 10px 10px;}
#search-3 {border-bottom: 1px solid #fff;}
.menu-sidebar-inner .menu li a {text-align: left;}
#text-9 small	{color: #fff;font-size: 13px;text-align: left;display: block;padding: 10px;border-top: 1px solid #fff;}
.slider {background: #fff;}

 /*new category template*/
 .cb-cat-flex{padding:0 5em;box-sizing:border-box;position:relative;display:flex;margin:25px auto 0; font-family: 'PT Serif', serif!important;}
 .cb-cat-container{max-width:75rem;margin-left:auto;margin-right:auto;padding:0 2rem!important;box-sizing: border-box;}
 .cb-cat-flex a{text-decoration:none;display:block;font-family: 'PT Serif', serif;font-weight: 700;line-height: 1.1;}
 .cb-cat-flex p{font-size:1em;line-height:1.2;}
 .cb-cat-flex .cb-flex-right{width:50%}.cb-cat-flex .cb-flex-right .cb-flex-image{position:relative}
 .cb-cat-flex .cb-flex-right .cb-flex-image h1{position:absolute;bottom:0;padding:10px 20px;background-color:#f74a41;color:white;text-transform:uppercase;transition-duration: 0.6s;}
 .cb-cat-flex .cb-flex-right .cb-flex-image h1:hover {background-color: #000;}
 .cb-cat-flex .cb-flex-right img{width:100%;object-fit:cover}
 .cb-cat-flex .cb-flex-right .right-text-group{text-align:center}
 .cb-cat-flex .cb-flex-right .right-text-group p {text-align: center!important;}
 .cb-cat-flex .cb-flex-right h2{margin:.5rem 0}
 .cb-cat-flex .cb-flex-left{width:50%;padding-left:1.25rem}
 .cb-cat-flex .cb-flex-left .flex-cb-item{display:flex;margin-bottom:1rem}
 .cb-cat-flex .cb-flex-left .item-image{width:50%}
 .cb-cat-flex .cb-flex-left img{height:145px;width:100%;object-fit:cover}
 .cb-cat-flex .cb-flex-left .cb-cat-item-text{padding-left:1.25rem;width:50%}
 .cb-cat-flex .cb-flex-left .cb-cat-item-text a{text-decoration:none}
 .cb-cat-flex .cb-flex-left .cb-cat-item-text a h3{font-size: 1.5em;margin: 0;line-height: 1.1;transition-duration: 0.6s;}
 .cb-cat-flex .cb-flex-left .cb-cat-item-text a:hover h3{color: #f74a41;}
 .cb-cat-flex .cb-flex-left .cb-cat-item-text p{font-size:1em;line-height:1.2;margin-top:.4rem}
 .category-posts-wrap #load_more_latest_cats{margin-bottom: 20px;}
 .h4{font-size:2em;font-weight:400;font-family: 'PT Serif', serif;margin:0}

 /*new category template*/
@media (max-width: 1390px) {
.single header.entry-header .entry-meta {padding: 0 4em 0 0;}
.single .inner-header-container {  height: 500px;min-width: 500px}
.single .inner-header-container img.wp-post-image { margin-top: -250px;}
.single  main#main .entry-content {padding: 0 3em 0 0;}
}
@media (max-width: 920px)  {
aside {display: none;}
.single .inner-header-container { float: right;  width: 100%;}
.single header.entry-header {padding: 0;}
.single header.entry-header .entry-meta {padding: 0 2em 0;width: 100%; display: block; height: auto;}
.single main#main .entry-content {padding: 0 2em 0 0;}
.single .inner-header-container {height: 300px;}
.single .article_holder {width: 49%;}
.single .relatedposts-container, .single .d-a-block { padding-left: 2em; padding-right: 2em;}
.footer-second-line {  padding: 2em;}
header.site-header, .category-layout-v2 .cb-cat-header {padding: 0 2em;}
.category-layout-v2 .cb-cat-desc {padding: 1em 2em;}
.p-cont-r {padding: 0 6em 3em;}
.footer-third-line { padding-left: 2em; padding-right: 2em;}
.footer-second-line .col-5 .textwidget img { max-width: 80px !important;}
.d-a-block img {max-width: 100%;}
header.site-header nav ul li a { font-size: 1em; }
.single .inner-header-container img.wp-post-image {margin-top: -30%;}
}

@media (max-width: 769px) {
header.site-header, .footer-third-line, .category-layout-v2 .cb-cat-header { padding: 0 1em;}
.category-layout-v2 .cb-cat-desc {padding: 1em 1em;}
.p-cont-r {padding: 0 1em 3em;}
.p-cont-r article .col-7, .p-cont-r article .col-5 { margin-left: 2%;margin-right: 2%;  width: 96%;  float: none;}
.footer-second-line { padding: 1.5em 1em 1.5em;}
.footer-second-line .col-7 .textwidget, .footer-second-line .col-5 .textwidget, .footer-second-line .col-5 .textwidget + .textwidget {width: 50%;}
.footer-second-line .col-7 .textwidget  {width: 50%;}
.single .article_holder {width: 100%; margin: 0 0 1%;}
.single .inner-header-container img.wp-post-image {margin-left: -390px;margin-top: -31%;}
.entry-content-article-container {padding: 0 ;}
.single main#main .entry-content {    padding: 0;}
.single header.entry-header .entry-meta {padding: 0 1em 0;}
.single .relatedposts-container, .single .d-a-block { padding-left: 1em;  padding-right: 1em;}
.category-layout-v2 .cb-cat-header {height: 15rem;}
.category-layout-v2 #cb-cat-title {font-size: 2.5em;padding-top: 10rem;}
.cb-cat-desc p {display: none;}
.category-layout-v2 .cb-cat-desc h2 {border-bottom: 1px solid #555;margin-bottom: 0;}
.page-template-newmain-page-php .title-f h6, .page-template-newmain-page-php .title-f h1  {font-size: 1.5em;}
.page-template-default .entry-content {padding: 0 2em 3em !important;}
.cb-cat-flex {flex-wrap: wrap; margin: 0 auto 0;}
.cb-cat-flex .cb-flex-right,.cb-cat-flex .cb-flex-left {width: 100%;}
.cb-cat-flex .cb-flex-right .right-text-group {padding: 1.25rem; padding-top:0;}
.cb-cat-flex .cb-flex-right .cb-flex-image {max-width: 500px;margin: 0 auto;}
.category-layout-v2 .c-desc {display: none;}
}
@media (max-width: 480px) {
.single .inner-header-container img.wp-post-image {margin-left: -350px;margin-top: -15%;top: 0;}
.category-layout-v2 .cb-cat-container, #masthead .cb-cat-container {padding: 0!important;}
.cb-cat-flex {padding-left: 0;}
.cb-cat-flex .cb-flex-left img {height: auto;}
.cb-cat-flex .cb-flex-left {padding-left: 0;}
.cb-cat-flex .cb-flex-left .flex-cb-item {flex-wrap: wrap;}
.cb-cat-flex .cb-flex-left .item-image,.cb-cat-flex .cb-flex-left .cb-cat-item-text {width: 100%;text-align: center;}
.cb-cat-flex .cb-flex-left .cb-cat-item-text {margin-top: 10px;padding-left: 1rem;padding-right: 1rem;}
.cat-fullwidth-ad {display: none;}
.title-cb-f {margin: 15px 0 0;}
.title-cb-f span {padding: 0 8px;font-size: 2rem;line-height: 1;}
.category-posts-wrap #load_more_latest_cats{margin-bottom: 20px;}
}
body {visibility:visible !important;}
.load_more_latest_posts, .load_more_latest_cats {text-transform: uppercase; position: relative; overflow: hidden; cursor:pointer;width: 300px;margin: 20px auto 0;display: block;border: 0;background-color: #f74a41;color: white;padding: 10px;font-size: 20px;border: 2px solid #f74a41;font-family: 'PT Serif', serif;font-weight: 600;}
.load_more_latest_posts span {color: #fff;}
.load_more_latest_posts:before, .load_more_latest_cats:before { content: ''; display: block; position: absolute; right: -35px; width: 20px; height: 20px; border: 4px solid #fff; border-top-color: #2196F3; border-radius: 100%; transition: 0.3s;animation-name: rotate;animation-duration: 1s; animation-iteration-count: infinite;animation-timing-function: linear;}
.load_more_latest_posts.loading:before, .load_more_latest_cats.loading:before {right: 6px;}

@keyframes rotate {
	from {
		transform: rotate(0deg);
	}
	to {
		transform: rotate(360deg);
	}
}

* {color: #222;}
header.site-header {background: #fff;}
header.entry-header .entry-meta {  padding: 0 2% 0 0;}
aside {padding: 1em 0;}
#ftwp-header-minimize {position: absolute;right: 10px;width: 100% !important;text-align: right !important;}
#ftwp-container-outer, .ftwp-in-post#ftwp-container-outer.ftwp-float-left #ftwp-contents {margin-right: 0; width: 100% !important;}

/*New Post Template*/
.post-template-single-v2-php .relatedposts-container, .post-template-single-v2-php  .d-a-block   {padding-left:5em;padding-right:5em;}
.post-template-single-v2-php .d-a-block  {padding-top: 3em;}
.post-template-single-v2-php .mk_related_caption {text-align: left;font-size: 1.5em;}
.post-template-single-v2-php .relatedposts-container, .d-a-block .col-12 {margin: 0 auto; float: none;}
.post-template-single-v2-php .article_holder .cb-grid-img {float: right; width: 30%; margin: 0 0 0 2%; }
.post-template-single-v2-php .article_holder .cb-article-meta h2 a, 
.post-template-single-v2-php .article_holder .cb-article-meta h3 a, 
.post-template-single-v2-php .article_holder .cb-article-meta h4 a {text-shadow: none;color: #222;text-align: left;font-weight: 400;font-size: 1em;text-transform: none;letter-spacing: 0;}
.post-template-single-v2-php .article_holder .cb-article-meta h4 {text-align: left;padding: 0;}
.post-template-single-v2-php .cb-article-meta {float: left; width: 68%;}
.post-template-single-v2-php .article_holder {width: 24%; margin: 0 1% 1% 0; float: left; height: auto !important; box-sizing: border-box; padding: 0.5em; border: 1px solid #ccc;}
.post-template-single-v2-php .article_holder.mk_gi img { height: auto !important; min-height: auto !important; left: 50%;margin-left: -80px; max-height: 100px;}
.post-template-single-v2-php .article_holder .cb-byline, 
.post-template-single-v2-php .article_holder .cb-byline span {text-shadow: none;color: #404040;background: transparent;padding: 10px 0 0; display: none;}
.post-template-single-v2-php #secondary {}
.post-template-single-v2-php #secondary .relatedposts-container, .post-template-single-v2-php  #secondary .d-a-block {padding: 0;}
.post-template-single-v2-php #secondary .article_holder { width: 100%; margin: 0 0 3% 0;}
.post-template-single-v2-php #text-6 img {max-width: 100%;}
.post-template-single-v2-php #secondary .mk_related_caption {margin-top: 0;font-weight: 400;text-transform: inherit;}
.post-template-single-v2-php #secondary .cb-byline {display: none;}
.post-template-single-v2-php #secondary .article_holder.mk_gi img { margin-left: -20px; max-height: 80px; left: 0;}
.post-template-single-v2-php #secondary .article_holder .cb-article-meta h4 {font-size: 1em;}
.post-template-single-v2-php .inner-header-container {float: right; width: 50%;}
.post-template-single-v2-php .entry-meta {float: left; width: 50%;height: 500px;display: flex;align-items: center;}
.post-template-single-v2-php .entry-meta .entry-meta-c {min-width: 100%;}
.post-template-single-v2-php header.entry-header {padding: 1em 5em;overflow: hidden;}
.post-template-single-v2-php header.entry-header  .title-container {padding: 0; position: relative;}
.post-template-single-v2-php header.entry-header  .title-container h1 {margin: 0.4em 0 0.5em;line-height: 1.2;}
.post-template-single-v2-php .inner-header-container .publisher { width: 25%; float: right; z-index: 1;position: absolute; right: 0; bottom: 20px; }
.post-template-single-v2-php .inner-header-container img.wp-post-image {height: auto;min-height: 500px;width: auto;left: 50%;margin-left: -450px;}
.post-template-single-v2-php .inner-header-container .publisher img, .cb-cat-header .publisher img  {width: 60px; position: absolute;bottom: 0;right: 1.2em;}
.cb-cat-header .publisher img {bottom: 20px !important;}
.post-template-single-v2-php #secondary .article_holder .cb-article-meta h4, .post-template-single-v2-php #secondary .article_holder .cb-article-meta h4 a {font-family: 'PT Serif', serif;}
.post-template-single-v2-php .entry-meta h1, .post-template-single-v2-php .entry-content h2, .post-template-single-v2-php .entry-content h3, .post-template-single-v2-php .entry-content h4, .post-template-single-v2-php .entry-content h5, .post-template-single-v2-php #secondary .mk_related_caption, .post-template-single-v2-php .mk_related_caption, .post-template-single-v2-php .article_holder .cb-article-meta h4 a {font-family: 'PT Serif', serif;}
.post-template-single-v2-php .article_holder .cb-article-meta h4 {font-size: 1.1em;}
.post-template-single-v2-php .article_holder .cb-article-meta h4 a {font-size: 0.85em;line-height: 1;}
.post-template-single-v2-php aside .article_holder .cb-article-meta h4 a {font-size: 1.07em;line-height: 1;}
.post-template-single-v2-php .entry-content  h2, .post-template-single-v2-php .entry-content  h3 { font-size: 1.5rem;color: #000; font-weight: 600; border-bottom: 1px solid #555;}
.post-template-single-v2-php .entry-content  h3  { font-size: 1.3rem; margin: 2em 0 1.5em;}
.page-template-newmain-page-php .grid-f, .page-template-front-page .grid-f {padding-bottom: 4em;}
.page-template-newmain-page-php .grid-f h3, .page-template-front-page .grid-f h3  { margin: 0.5em 0 0;}
.page-template-newmain-page-php .grid-f h3 a, .page-template-front-page .grid-f h3 a { font-family: 'PT Serif', serif;  font-weight: 600;line-height: 1.2;font-size: 1em;  text-decoration: none;}
.page-template-newmain-page-php .title-f, .page-template-front-page .title-f {text-align: center;font-family: 'PT Serif', serif;}
.page-template-newmain-page-php .title-f h6, .page-template-newmain-page-php .title-f h1, .page-template-front-page .title-f h6, .page-template-front-page .title-f h1 {margin: 1em 0;position: relative;font-family: 'PT Serif', serif; font-size: 2.5em;line-height: 0.8; text-transform: uppercase; font-weight: 900;}
.page-template-newmain-page-php  .post-categories, .page-template-front-page .post-categories {padding: 0; margin: 0; display:inline;}
.page-template-newmain-page-php  .post-categories li, .page-template-front-page .post-categories li {display: inline; list-style: none;}
.page-template-newmain-page-php .breadcrumbs a, .page-template-front-page .breadcrumbs a {font-size: 1em;}
.page-template-newmain-page-php .title-f h6::before, .page-template-newmain-page-php .title-f h1::before,
.page-template-front-page .title-f h6::before, .page-template-front-page .title-f h1::before  {position: absolute;content: '';height: 1px;background: #ccc;left: 0;top: 32px;width: 100%; z-index: -1;}
.page-template-newmain-page-php .title-f h6 span, .page-template-newmain-page-php .title-f h1 span,
.page-template-front-page .title-f h6 span, .page-template-front-page .title-f h1 span { font-family: 'PT Serif', serif;  font-weight: 900;background: #fff;padding: 0 30px;display: inline-block;}
.page-template-newmain-page-php .title-f  small, .page-template-front-page .title-f  small {display: block; font-size: 0.55em;font-family: 'PT Serif', serif;color: #777; text-transform: none; }
.page-template-newmain-page-php .max  h3 a, .page-template-front-page .max  h3 a  {font-size: 1.3em;}
.page-template-newmain-page-php .max  h3, .page-template-front-page .max  h3  {margin: 0.5em 0 0em;}
.page-template-newmain-page-php .max p, .page-template-front-page-php .max p {margin: 0.5em auto; font-size: 1em;}
.page-template-newmain-page-php .latest .col-6, .page-template-front-page-php .latest .col-6 {margin-bottom: 2em;display: inline-block;vertical-align: top;float: none;margin: .5rem  1.85%;}
.page-template-newmain-page-php .entry-meta-details span, .page-template-front-page-php .entry-meta-details span {font-size: 1em;}
.page-template-newmain-page-php .bp-2 .col-6, .page-template-front-page-php .bp-2 .col-6 {margin-bottom: 1.5em;}
.container.grid-f {width: 100%;max-width: 86rem;} 
.f-h1 {position: absolute; z-index: -1; color: #999;}
.page-template-default .entry-title {font-family: 'PT Serif', serif;font-weight: 900;}
.page-template-default .entry-content {max-width: 1320px;margin: 0 auto;box-sizing: border-box;width: 100%;padding: 0 9em 3em !important;}

a.icon-pinterest {cursor: pointer !important;}

.single .relatedposts-container .inter-t { max-width: 1320px;  margin: 0 auto;  box-sizing: border-box; width: 100%; padding: 0;} 
.single .relatedposts-container .inter-t .article_holder {width: 49%;}
.single .relatedposts-container .inter-t .article_holder.mk_gi img {max-height: 110px;}
.single .relatedposts-container .inter-t .article_holder .cb-grid-img {width: 110px;}
.single .relatedposts-container .inter-t .cb-article-meta { width: calc(100% - 130px);}
.single .relatedposts-container .inter-t .article_holder .cb-article-meta h4 a { font-size: 1.5em; line-height: 1;}
.single .relatedposts-container { padding-left: 0; padding-right: 0;  margin-bottom: 25px;}

.buy-now-button {display: inline-block; padding: 10px 20px;background: #000;color: #fff; text-transform:uppercase;text-decoration: none;font-family: 'PT Serif', serif;font-weight: 600;font-size: 1.3em;}
.buy-now-button:hover {background: #444;}
.ftwp-heading {margin-top: 50px;}

#mobi_b_widget {
    display: none;
    margin: 50px auto 0;
    text-align: center;
}
#mobi_b_widget .hidden {
    display: none;
}
.custom-logo {
	height: 40px;
	width: auto;
}
.post-excerpt p {
	font-weight: 300;
    font-size: 18px;
}

/*single-bottom*/
#single-bottom  .inter-t .article_holder {width: 100%;}
#single-bottom .article_holder .cb-grid-img{float: left;}
#single-bottom .article_holder .cb-grid-img {padding:0; margin:0;}
#single-bottom .article_holder {margin:0;padding: 0; border: 0;}
#single-bottom  .inter-t .article_holder .cb-grid-img {width: 320px;}
#single-bottom  .inter-t .article_holder.mk_gi img {max-height: inherit; width: 100%;}
#single-bottom .inter-t .cb-article-meta {width: calc(100% - 330px); padding-left: 20px;}

.read-next {
    font-family: 'PT Serif';
    font-size: 30px;
    font-weight: normal;
    line-height: 1.1;
    color: #000000;
    background-color: white;
    z-index: 2;
    position: relative;
    padding-right: 26px;
}
.otherposts{
	position: relative;
}
.em-next {
    display: block;
    position: absolute;
    top: 51%;
    background-color: black;
    width: 100%;
    height: 1px;
}
#rf-posts {display: flex;flex-wrap: wrap;}
#rf-posts .rf-item {flex: 50%; position: relative; }
#rf-posts img {width: 100%;height: auto;display: block;}
.rf-grid-img.nofade {
    position: relative;
}

.rf-article-meta {
    position: absolute;
    bottom: 0;
    height: 100%;
    width: 100%;
    /*box-shadow: inset 13px 0px 100px 10px black;*/
    box-shadow: 0px -80px 106px white inset;
}

.rf-article-meta h4 {
    padding: 0 25px;
    width: 100%;
    display: block;
    box-sizing: border-box;
    text-align: center;
    color: #222;
    font-family: 'PT Serif';
    text-decoration: none;
    font-size: 28px;
    line-height: 32px;
    position: absolute;
    bottom: 20px;
}
.rf-author {
    font-family: OpenSans;
    display: inline;
    text-align: center;
    font-size: 14px;
    font-weight: normal;
    font-style: normal;
    line-height: 1.27;
    color: #ffffff;
}
a.rf-fill {
	position: absolute;
	width: 100%;
	height: 100%;
	z-index: 3;
	top: 0;
	left: 0;
}

/*RELATED MIDDLE BLOCK*/
.related_middle_parallax {
  position: relative;
  background-size: cover;
  background-attachment: fixed;
  padding: 40px 20px;
  text-align: center;
  width: 100%;
  background-position: center;
 }
 .related_middle_parallax span{
  font-family: OpenSans;
  font-size: 14px;
  font-weight: 400;
  color: white;
  line-height: 1.7;
  letter-spacing: 0.7px;
  text-transform: uppercase;
  margin-bottom: 20px;display: block;position: relative;z-index: 2;
}
.related_middle_parallax .related_middle_title{
  font-family: OpenSans;
  color: white;
  font-size: 16px;
  font-weight: bold;
  color: white;
  text-decoration: none;
  position: relative;
  z-index: 2;
}
.related_middle_parallax .layout-black{position: absolute;width: 100%;height: 100%;background-color: rgba(0,0,0,0.4);top: 0;left: 0;z-index: 1;}
.related_middle_parallax .related_middle_link {position: absolute;width: 100%;height: 100%;top: 0;left: 0;z-index: 3;}
.related_middle_parallax .related_middle_img {display: none;}



.related_middle_static {
    background-image: none!important;
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    padding: 20px 5px;
}

.related_middle_static .related_middle_img {
    display: inline-block;
    width: 150px;
    float: left;
    margin-right: 20px;
}

.related_middle_static .related_middle_title {
    font-weight: bold;
    font-size: 18px;
}

.related_middle_static .related_middle_title a {
	text-decoration: none;	
}

.related_middle_static span.related_middle_span {
    font-size: 12px;
    display: inline-block;
    margin-bottom: 5px;
    text-transform: uppercase;
    margin-top: 15px;
}

.related_middle_static .related_middle_img img {
    display: block;
}

.related_middle_static:after {
    display: block;
    clear: both;
    content: '';
}
/*RELATED BLOCK ENDING*/

/*RELATED BOTTOM BLOCK*/
ul.rel-array {
    padding: 0;
}

ul.rel-array li {
	list-style: none;
    padding-bottom: 15px;
    border-bottom: 1px solid #ccc;
    margin-bottom: 15px;
}

ul.rel-array .rel-img-wrapper {
    width: 320px;
    display: inline-block;
    vertical-align: middle;
    position: relative;
}

ul.rel-array li > a {
    display: inline-block;
    width: calc(100% - 325px);
    box-sizing: border-box;
    padding-left: 30px;
    vertical-align: middle;
    font-weight: bold;
    text-decoration: none;
    font-size: 23px;
    line-height: 1.7;
}
/*RELATED BOTTOM ENDING*/

header#masthead {
    border-bottom: 2px solid #f74a41;
}
h3.entry-title a {
	transition-duration: 0.6s;
}
h3.entry-title a:hover {
    color: #f74a41;
}

/*PINTEREST BUTTON DESIGN*/
.social-links {
    position: relative;
    text-align: center;
    width: 100%;
    z-index: 1;
}
.social-links .icon-pinterest {
    width: 120px;

    border-radius: 0;
    background-size: cover;
    background-position: top center;
    font-family: 'PT Serif', serif;

    display: inline-block;
    margin: 0;
    box-sizing: border-box;
	padding: 5px;
    border: 0px solid white;
    color: black;
    border: 1px solid #f74a41;
    text-decoration: none;
} 
.social-links .icon-pinterest div {
	font-family: 'PT Serif', serif;
	background-color: #f74a41;
	padding: 5px;
	color: white;
}
.icon-facebook {
	display: none!important;
}
.hideup {
	transform: translateY(-100%);
	top: 0!important;
}

.photo-source {
	color: #404040;
	padding: 0 0 10px;
	margin: 0; 
	display: block;
	display: inline-block;
}

.only-mobile-flex-ad{
	display: none;
}

.imgsource {
	display: block;
	color: #888;
    font-family: 'PT Serif', serif;
    font-size: 0.8rem;
    margin-top: 20px;
}

.imgsource a {
	color: #888;
    text-decoration: none;
}

.breadcrumbs.entry-meta-details span, .breadcrumbs.entry-meta-details a, .photo-source {
	font-size: 12.8px;
}

strong {
	font-weight: bold;
}

header.site-header, .footer-third-line, .category-layout-v2 .cb-cat-header { padding: 0 1em; transition-duration: 0.7s; }

body {
	visibility: visible!important;
}
.menu-item-has-children {position: relative;}
#masthead .menu-item-has-children .sub-menu {display: none; position: absolute; background-color: #f74e41; width: 200px;font-size: 14px;text-transform:none;text-align: left; box-shadow: 0 2px 8px 0 rgba(33,43,53,.24);}
#masthead .menu-item-has-children .sub-menu li {display: block;}
#masthead .menu-item-has-children .sub-menu li a {color: black;}
#masthead .menu-item-has-children:hover > a {background-color: #f74e41; color: white;} 
#masthead .menu-item-has-children:hover .sub-menu{display: block; background-color: white;}

#menu-sidebar .menu-item-has-children .sub-menu {display: none;}
#menu-sidebar .menu-item-has-children:hover .sub-menu{/*display: block;*/margin-top: 0; }

.flex-header .search img {
	margin-top: 12px;
	width: 22px;
	text-align: right;
	cursor: pointer;
}
.flex-header {
    display: flex;
    justify-content: space-between;
}
.flex-header-first > div {
    display: inline-block;
    vertical-align: top;
}
.flex-logo {
	margin-left: 25px;
    margin-right: 20px;
}
.single header.entry-header .title-container h1 {
	font-size: 2.4rem;
}
.single .entry-content h2{
	font-size: 1.8rem;

}
.single .entry-content h3 {font-size: 1.5rem;}
.single .entry-content h4 {font-size: 1.3rem; margin: 1.3rem 0 0.8rem; font-family: Roboto, sans-serif; font-weight: 400;color: #000;}
.bp-grid1-v6 .f-image img:hover {opacity: 0.75;-webkit-transition: opacity .15s ease-in-out;-moz-transition: opacity .15s ease-in-out;-ms-transition: opacity .15s ease-in-out;-o-transition: opacity .15s ease-in-out;transition: opacity .15s ease-in-out;}
.menu-sidebar-inner .menu li a {
	cursor: pointer;
	font-weight: 400;
}
.menu-sidebar-inner .menu li a:hover {
	background-color: #f74e41;
	color: white;
}
#post-not-found .search-field {
    width: 200px;
    float: left;
    margin-right: 20px;
    margin-top: 15px;
    font-size: 16px;
    border-top: 1px solid #680d3a;
}
#post-not-found input.search-submit {
    border: 1px solid #680d3a;
    background-color: #680d3a;
    width: 150px;
    font-size: 16px;
    margin-top: 15px;
    color: white;
    font-family: 'PT Serif', serif;
    padding: 6px;
    cursor: pointer;
    transition-duration: 0.5s;
}
#post-not-found input.search-submit:hover {
    background-color: white;
    width: 150px;
    font-size: 16px;
    margin-top: 15px;
    color: #680d3a;
    font-family: 'PT Serif', serif;
    padding: 6px;
}
#post-not-found .screen-reader-text {
}
.tac {
	text-align: center;
}
#post-not-found .search-field {
	width: calc(80% - 170px);
}
.search-more {
	margin-bottom: 30px;
}
.clearfix {clear: both;}
.soc_img_wrap img{margin: 20px auto;}
/*HOME AND CATEGORY TEMPLATES*/
.home-page-mk-v2 {padding-bottom: 1em; overflow: hidden;}
.bp-grid1-v6 .row.cm .col-12 {border-top: 2px solid #dbdbdb; padding-top: 20px;padding-bottom: 20px;}
.bp-grid1-v6 .row.cm .col-12:first-child {border-top: none;}
.bp-grid1-v6 .f-image {width: 445px; float: right; margin-left: 2%;}
.bp-grid1-v6 .f-image img {width: 100%; height: auto;}
.bp-grid1-v6 .mds-2 {width: calc(98% - 445px); float: left; }
.bp-grid1-v6 .mds-2 .entry-meta, .bp-grid1-v6 .mds-2 .entry-meta time 	{color: #888;font-size: .9em;padding: 10px 0 0;margin: 0;}
.bp-grid1-v6 .mds-2 .entry-meta a {text-decoration: none; color: #575757;font-size: 12px; text-transform: uppercase; margin: 0 10px 0 0;}
.bp-grid1-v5 ul {margin:0; padding: 0; }
.bp-grid1-v5 li {display: block; margin: 0 0 2px; background: url('https://menshaircuts.com/wp-content/uploads/2019/04/mens-haircuts-shevron-m-350-90.png') no-repeat top right #ccc; padding: 20px; font-size: 16px;background-size: cover;}
.bp-grid1-v5 li a {color: #fff; text-decoration: none;font-family: 'Roboto', sans-serif;text-transform: uppercase; display: block; width: 55%;}
.bp-grid1-v4 .row.cm, .bp-grid1-v5 .row.cm, .bp-grid1-v6 .row.cm { margin: 0 -2%;width: 104%;}
.bp-grid1-v4 .col-4 {border: solid 1px #ededed; box-sizing: border-box;}
.bp-grid1-v4 .col-4 h4 {font-size: 24px;  font-weight: 400; text-transform: uppercase; padding: 0 20px; margin: 10px 0 0; transition-duration: 0.6s;}
.bp-grid1-v4 .col-4 h4:hover {color: #f74a41;}
.bp-grid1-v4 .col-4 p {font-size: 16px;font-weight: 200;line-height: 1.7;margin: 10px 0;padding: 0 20px;}
.mk-a-wide {text-align: center; margin-top: 3em;}
.mk-a-wide img {max-width: 100%; height: auto;}
.bp-grid1-v3 .mp-3 a, .bp-grid1-v3 .mp-2 a, .bp-grid1-v4 .col-4 a, .bp-grid1-v5 a {display: block; text-decoration: none;}
.bp-grid1-v3 .mp-3 h4 { font-weight: 500; text-transform: uppercase; font-size: 18px; margin: 0 0 5px;line-height: 1.1;}
.bp-grid1-v3 .mp-3 {margin-top: 0 !important;}
.bp-grid1-v3 .mp-2.col-6 {margin: .5rem 0 .5rem 0; width: 50%;}
.bp-grid1-v3 .mp-3.col-6 {margin: .5rem 0 .5rem 2%; width: 48%;}
.bp-readmore {border-top: 2px solid #f74a41; margin: 2em 0 0;text-align: center; width: 100%; clear: both;}
.bp-readmore.dark {border-top: 2px solid #000;}
.bp-readmore a {display: inline-block; font-size: 24px; text-transform: uppercase; padding:  0 40px; line-height: 2em;border: 2px solid #f74a41;font-family: 'Roboto', sans-serif; text-decoration: none;-webkit-border-bottom-right-radius: 4px;-webkit-border-bottom-left-radius: 4px;-moz-border-radius-bottomright: 4px;-moz-border-radius-bottomleft: 4px;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px; margin-top: -10px;}
.bp-readmore.dark a {color: #fff; background: #000; border: 2px solid #000;}
.top-posts-v2 {overflow: hidden;box-shadow: 1px -13px 20px black;}
.top-posts-v2 .col-p {width: 25%; float: left; padding: 25px; box-sizing: border-box;height: 550px;position: relative}
/*.top-posts-v2 .col-p:first-child {display: none;}*/
.top-posts-v2 .col-p h3 {color: #000; position: absolute; width: calc(100% - 50px);left: 25px; bottom: 0;box-sizing: border-box;text-align: center; font-weight: 700; font-size: 1.5em;z-index: 2; margin-bottom: 17px;}
.top-posts-v2 a {text-decoration: none;}
.top-posts-v2 .col-p  a {display: block; width: 100%; height: 100%; z-index: 100; position: absolute; top: 0; left: 0;}
.top-posts-v2 .col-p::after {position: absolute; width: 100%; height: 100%; background: rgba(0,0,0,0);content: '';z-index: 1; top: 0; left: 0;}
@media (min-width: 1280px) {.top-posts-v2 .col-p:first-child {display: block;} }

.bp-posts-v2 {padding: 2em 0;overflow: hidden;}
.bp-posts-v2 .col-p {width: 20%; float: left !important;margin: 0 !important;}
.bp-posts-v2 .col-p a {display: block; text-decoration: none;}
.bp-posts-v2 .col-p img, .bp-grid1-v2 img, .bp-grid1-v3 img {width: 100%; height: auto;}
.bp-posts-v2 .col-p h4 {font-size: 14px;color: #545454; font-weight: 400; text-transform: uppercase; padding: 0 10px 0 0;margin: 10px 0 0;/*height: 50px;overflow: hidden;*/}
.bp-posts-v2 .col-p small {color: #888;font-size: 12px;}

.bp-title {text-align: center; position: relative;}
.bp-title h1, .bp-title h2 {font-family: 'Roboto', 'Helvetica', sans-serif; font-size: 41px; letter-spacing: 3.1px; font-weight: 600; text-transform: uppercase; z-index: 2; margin: 75px 0 20px;position: relative;}
.bp-title span {position: absolute; font-weight: 900; text-transform: uppercase;font-size: 140px;letter-spacing: 0.1em; display: block; width: 100%; z-index: 1; top: 0; left: 0;height: 200px;overflow: hidden;color: #fbe6e4;;}

.bp-grid1-v2 .mp	{width: 58.33%;margin-left: 0 !important;margin-right: 0 !important;}
.bp-grid1-v2 .mp h4, .bp-grid1-v2 .mp-2 h4, .bp-grid1-v5 h4, .bp-grid1-v6 h4 { font-weight: 500; text-transform: uppercase; font-size: 2em; margin: 15px 0 5px;line-height: 1.1;transition-duration: 0.6s;}
.bp-grid1-v6 h4:hover {
    color: #f74a41;
}
.bp-grid1-v2 .mp p, .bp-grid1-v5 p, .bp-grid1-v6 p {font-size: 16px;font-weight: 200;line-height: 1.7;margin: 10px 0;}
.bp-grid1-v2 .rp h4 { font-weight: 500; text-transform: uppercase; font-size: 18px; margin: 0 0 5px;line-height: 1.1;}
.bp-grid1-v2 .rp h4 a { font-family: 'Roboto', sans-serif;
 font-weight: 500; text-transform: uppercase; font-size: 18px;line-height: 1.1;}
.bp-grid1-v2 .rp {margin-top: 0 !important;}
.bp-grid1-v2 .col-8 {width: 64.66%;margin: .5rem 0 .5rem 2% !important;}
.bp-grid1-v6 h4  {margin-top: 0;}
.bn-a-600 {width: 300px; float: right;}
.bp-l {width: calc(100% - 300px); float: left;}
.bp-grid1-v2 a {text-decoration: none;}
.bp-readmore.mobile {display: none;}

a.backtoTop {margin: 0 auto;display: inline-block;color: black;padding: 5px 8px;margin-top: 4em;}

.topLink {text-align: center;}
.row-flex {display: flex;}
.row-flex .mp.col-7 {position: relative;margin-top: 0;}
.wr-static {position: static;}
.wr-fixed {position: fixed!important;top: 0;width: 480px;}
.wr-absolute {position: absolute!important; bottom: 0;}
.pad-20 {padding: 0 20px;}
.wh-overlow {position: relative;margin-top: -65px;background-color: white;width: 85%;float: right;padding: 25px;}


@media (max-width: 768px) {
.bp-posts-v2 .row {flex-wrap: wrap;display: flex;}
.bp-posts-v2 .col-p {padding-bottom: 20px;}	
.pad-20 {padding: 0 5px;}
.wh-overlow{padding: 25px 10px;}
.flex-header .search img {padding-left: 50px;}
.bp-readmore.desktop {display: block;}
.top-posts-v2 .col-p {  width: 100%;float: none;height: auto;background-size: 70% !important;background-position: center;padding: 20px;}	
.top-posts-v2 .col-p h3 {font-size: 20px;width: 60%;position: relative;bottom: auto;top: auto;left: auto;text-align: left;margin: 0;}
.top-posts-v2 .col-p::before {content: "";display: block;height: 100%;width: 60%;background: url('/wp-content/uploads/2019/04/Group@2x-4.png') no-repeat top right;position: absolute;top: 0;left: 0;background-size: cover;}
.top-posts-v2 .col-p:first-child {display: block;background-size: cover !important;min-height: 500px;}
.top-posts-v2 .col-p:first-child h3 {width: calc(100% - 40px);position: absolute;bottom: 20px;left: 20px;font-size: 24px;}
.top-posts-v2 .col-p:first-child::before {display: none;}
.top-posts-v2 .col-p:nth-child(n+2){background-position: top right!important; min-height: 180px;border-bottom: 1px solid white;}
.top-posts-v2 .col-p:nth-child(n+2) h3{color: white;padding-right: 28px;}
.bp-posts-v2 .col-p {width: 49%; margin: 0 1% 1% 0 !important;}
.bp-posts-v2 .col-p + .col-p {width: 49%; margin: 0 0 1% 1% !important;}
.bp-posts-v2 .col-p + .col-p + .col-p h4 {height: auto;}
.bp-posts-v2 .col-p + .col-p + .col-p {/*width: 100%; margin: 0 0 1% !important; padding-bottom: 1%; border-bottom: 1px solid #575757;*/}
.bp-posts-v2 .col-p + .col-p + .col-p img {/*display: none;*/}
.bp-posts-v2 .col-p + .col-p + .col-p + .col-p + .col-p {padding-bottom: 0; margin-bottom: 0 !important; border: none;display: none;}
.home-page-mk-v2 .cb-cat-container, .page-template-v2-page-new header#masthead .cb-cat-container {padding: 0 20px !important;}
.bp-posts-v2 {padding: 20px 0;}
.page-template-v2-page-new header#masthead {padding: 0 !important}
.bp-posts-v2 .col-p h4 {font-size: 14px;}
.bp-title span {font-size: 40px;top: 10px;}
.bp-title h1, .bp-title h2 {margin: 30px 0 0px; font-size: 30px;letter-spacing: 3px; line-height: 1.2;}
.bp-l { width: 100%; float: none;}
.bp-grid1-v2 .mp {width: 100%;margin-bottom: 0 !important;}
.bp-grid1-v2 .rp { margin: 0 !important; width: 100%; display: flex; flex-wrap: wrap;}
.bp-grid1-v2 .rp .row [class^="col"] { margin: .5rem 0;}
.bp-grid1-v2 .rp .row {width: 50%; float: left;}
.bp-grid1-v2 .mp h4, .bp-grid1-v2 .mp-2 h4, .bp-grid1-v5 h4, .bp-grid1-v6 h4 {font-size: 24px;}
.bp-grid1-v2 .rp h4 {margin: -15px 0 0; font-size: 16px;}
.row-flex .rp div:nth-child(2) {order:1;}
.row-flex .rp div:nth-child(3) {order:2;}
.row-flex .rp div:nth-child(1) {order:3;}
.row-flex .rp div:nth-child(4) {order:4;}
.bn-a-600.rp  > div:nth-child(1) {display: none;}
.bn-a-600:after {display: block; clear: both; content: '';}
.bn-a-600 {  width: 100%;  float: none;}
.bp-readmore {margin: 1em 0 0;}
.bp-readmore a {font-size: 20px;padding: 0 20px;}
.bp-grid1-v3 .mp-3 h4 {font-size: 16px;}
.bp-grid1-v3 .mp-2.col-6 {width: 100%;}
.bp-grid1-v3 .mp-3.col-6 { margin: .5rem 0 .5rem 0; width: 100%;}
.bp-grid1-v3 .mp-3.col-6 .row [class^="col"] {margin: .5rem 2% .5rem 0;width: 48%;}
.mk-a-wide {margin-top: 2em;}
.bp-grid1-v4 .col-4 {border: none;}
.bp-grid1-v4 .col-4 img {width: 48%; margin: 0 2% 0 0; float: left;}
.bp-grid1-v4 .col-4 h4 { margin: 0; padding: 0; float: left; width: 50%; font-size: 18px;}
.bp-grid1-v4 .col-4 p, .bp-grid1-v6 .mds-2 p {display: none;}
.bp-grid1-v6 .mds-2 p.entry-meta {display: block;margin-bottom: 0; margin-top: 5px;}
.bp-grid1-v6 h4 {font-size: 18px; margin: 0;transition-duration: 0.6s;}
.bp-grid1-v6 h4:hover {color: #f74a41;}
.bp-grid1-v2 .col-8 {width: 100%; margin: .5rem 0 !important;}
.bp-grid1-v5 .col-4 {margin: .5rem 0 !important; width: 100%;}
.bp-grid1-v6 .f-image {width: 50%; float: left;  margin-left: 0; margin-right: 2%;}
.bp-grid1-v6 .mds-2 {width: 48%; float: left;}
.bp-grid1-v6 .row.cm .col-12 {padding-bottom: 0;}
.bp-grid1-v5 li a {font-size: 18px;}
.row-flex {display: inherit;}
}
/* Shop */
.page-template-page-shop .col-4 {display: inline-block;  vertical-align: top; width: 23%; box-sizing: border-box; position: relative;padding: 0; margin: 0 1% 3%;
-webkit-box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.25);
-moz-box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.25);
box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.25); }	
.page-template-page-shop .col-4:hover {
-webkit-box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.35);
-moz-box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.35);
box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.35);}
.page-template-page-shop .col-4 a {z-index: 1000; position: absolute;width: 100%; height: 100%; display: block;color: gray;}
.page-template-page-shop .col-4 h6 {text-align: left;color: #666;  font-size: 14px; padding: 10px 40px 10px 10px; margin: 0;position: relative;font-family: open sans;}
.page-template-page-shop .col-4 h6 i {display: none;}
.page-template-page-shop .col-4:hover h6 i {display: block; position: absolute; top: 17px; right: 10px;}
.page-template-page-shop .col-4 img {max-width: 100%; display: block;opacity: 1; margin: 0;}
.page-template-page-shop .col-4:hover img {opacity: 1;}
.page-template-page-shop .entry-title {text-align: center; margin-bottom: 40px;}
.page-template-page-shop .col-12 {width: 100%; clear: both; box-sizing: border-box; position: relative;padding: 1% 1% 2%; }
.page-template-page-shop .entry-title {display: none;}
.page-template-page-shop #cb-content {  padding-top: 20px;}
.page-template-page-shop .anchor{ display: block;  height: 80px;   margin-top: -80px;   visibility: hidden;}
/*.page-template-page-shop #main { padding-top: 0 !important;}*/
.page-template-page-shop .top-shop-navigtion {padding: 1%; margin-bottom: 60px;}
.page-template-page-shop .top-shop-navigtion li { display: block; float: left;  margin: 0 15px 0 0}
.page-template-page-shop .top-shop-navigtion li a {display: block;padding: 5px 10px;border: 2px solid #ccc;color: #666;font-size: 15px;}
.page-template-page-shop .top-shop-navigtion li:hover a  {color: #fff; background: #8e6d04; border-color: #8e6d04; text-decoration: none !important;}
.page-template-page-shop .col-12 h3 {font-weight: 400;padding: 0 0 7px;font-size: 22px !important;}
.page-template-page-shop #cb-content #main { padding: 0 !important;margin: 0 auto !important;max-width: 1300px;	float: none !important;}

.cb_shareit a.not_social_link {width: 100% !important;border: none; height: auto !important; padding: 0; margin: 0;}	
.cb_shareit a.not_social_link img {margin-bottom: 0;}
.entry-content table {width: 100%;margin-bottom: 20px;}

@media (max-width: 1390px) {
.post-template-single-v2-php header.entry-header .entry-meta {padding: 0 4em 0 0;}	
.post-template-single-v2-php .inner-header-container {  height: 500px;}
.post-template-single-v2-php .inner-header-container img.wp-post-image { margin-top: -250px;}
.post-template-single-v2-php  main#main .entry-content {padding: 0 3em;}
.single .relatedposts-container .inter-t {padding: 0 2em 0 6em;}
}
@media (max-width: 920px)  {
.post-template-single-v2-php .inner-header-container { float: right;  width: 100%;}
.post-template-single-v2-php header.entry-header {padding: 0;}
.post-template-single-v2-php header.entry-header .entry-meta {padding: 1em 2em 0;width: 100%; display: block; height: auto;}
.post-template-single-v2-php main#main .entry-content {padding: 0 2em;}
.post-template-single-v2-php .inner-header-container {height: 300px;}
.post-template-single-v2-php .article_holder {width: 49%;}
.post-template-single-v2-php .relatedposts-container, .post-template-single-v2-php .d-a-block { padding-left: 2em; padding-right: 2em;}
.post-template-single-v2-php .inner-header-container img.wp-post-image { margin-top: -30%;}
.single .relatedposts-container .inter-t .article_holder { width: 100%;margin: 0 0 1% 0;}
.single .inner-header-container {height: auto}
.single .inner-header-container img.wp-post-image {  margin-top: 0; position: relative; width: 100%; height: auto;min-height: auto; top: auto; left: auto; margin-left: 0;}
}

@media (max-width: 769px) {
.category-layout-v2 .cb-cat-desc {padding: 1em 1em;}
.p-cont-r {padding: 0 1em 3em;}
.p-cont-r article .col-7, .p-cont-r article .col-5 { margin-left: 2%;margin-right: 2%;  width: 96%;  float: none;}
.footer-second-line { padding: 1.5em 1em 1.5em;}
.footer-second-line .col-7 .textwidget, .footer-second-line .col-5 .textwidget, .footer-second-line .col-5 .textwidget + .textwidget {width: 50%;}
.footer-second-line .col-7 .textwidget  {width: 50%;}
.post-template-single-v2-php .article_holder {width: 100%; margin: 0 0 1%;}
.post-template-single-v2-php .inner-header-container img.wp-post-image {margin-left: -390px; margin-top: -10%;}
.entry-content-article-container {padding: 0 1rem!important;}
.post-template-single-v2-php main#main .entry-content {    padding: 0 1em;}
.post-template-single-v2-php header.entry-header .entry-meta {padding: 1em 1em 0;}
.post-template-single-v2-php .relatedposts-container, .post-template-single-v2-php .d-a-block { padding-left: 1em;  padding-right: 1em;}
.category-layout-v2 .cb-cat-header {height: 15rem;}
.category-layout-v2 #cb-cat-title {font-size: 2.5em;padding-top: 10rem;}
.cb-cat-desc p {display: none;}
.category-layout-v2 .cb-cat-desc h2 {border-bottom: 1px dotted #555;margin-bottom: 0;}
.page-template-newmain-page-php .title-f h6, .page-template-newmain-page-php .title-f h1,
.page-template-front-page-php .title-f h6, .page-template-front-page-php .title-f h1 {font-size: 1.5em;}
.page-template-default .entry-content {padding: 0 2em 3em !important;}
.single .relatedposts-container .inter-t {  padding: 0 1em;}
.page-template-newmain-page-php .grid-f h3 a, .page-template-front-page .grid-f h3 a {font-size: 1.3em;}
.page-template-front-page .title-f h1 span {font-size: 1.5em;}
.page-template-front-page .title-f h6 span {font-size: 1.5em;}
#mobi_b_widget {display: block;}
#rf-posts .rf-item {flex: 100%;}
#rf-wrapper {padding: 0!important;margin: 0!important;width: auto;}
#rf-wrapper .inter-t {margin:0; padding:0;}
div.otherposts {padding: 0 1rem;margin-bottom: 15px;}
.mk_related_caption.otherposts {padding-left: 0;}
.rf-article-meta h4 {font-size: 28px;line-height: 40px;bottom:0;margin-bottom: 18px;}
.related_middle_static span.related_middle_span {margin-top: 0; display:inline;}
.related_middle_static .related_middle_img {margin-right: 13px;}
ul.rel-array .rel-img-wrapper {width: 50%;}
ul.rel-array li > a {padding-left: 10px;font-size: 16px;width: calc(50% - 5px);line-height: normal;}
.only-mobile-flex-ad{display: block;position: fixed;width: 100%;height: 50px;background-color: #ffffffb8;bottom:0;left: 0;z-index: 99999;}
div.flex-nav {display: none;}
.flex-logo {margin-left: 10px;}
.flex-logo a {line-height: 1;}
.custom-logo {margin-top: 4px; height: 38px;}
.msw {margin-top: 12px;}
.single header.entry-header .title-container h1 {font-size: 2rem;}
.single .entry-content h2 {font-size: 1.5rem;line-height: 1.1;padding-bottom: 15px;}
.single .entry-content h3 {font-size: 1.4rem;}
.read-next {padding-left: 15px; font-size: 18px;display: block; width: 100%; text-align: center;}
.flex-header .search {padding: 0 0 0 20px;}
.em-next {display: none;}
#ftwp-container.ftwp-fixed-to-post.ftwp-middle-left #ftwp-trigger{top: -20%;}
#post-not-found .search-field {width: 100%;}

}

@media (min-width: 769px) {
	footer.site-footer {
		padding-top: 20px;
	}
	footer .row .col-7 {
	    margin-left: 0;
	}
	.footer-second-line {
		padding: 0;
	}
	.single .relatedposts-container .inter-t {
		padding: 0;
	}
	.bp-grid1-v2 .mp {
		min-height: 1850px;
	}
	.row.bp-readmore.desktop {
		margin-bottom: 40px;
	}
	.c-formatted .col-4 {
		margin:0;
		border: 0;
		width: 33%;
	}
	.c-formatted .bp-title h2{
		margin-top: 25px;
	}
	.top-posts-v2 .col-p h3 {
		font-weight: 400;
	}
}

@media (max-width: 820px){
.page-template-page-shop .col-4  {width: 48%;}	
	.single aside {display: none !important;}	
}
@media (max-width: 760px){
.page-template-page-shop .col-4  {width: 48%;}	
#mobi_b_widget {display: block;}
.cb-cat-flex .cb-flex-right .cb-flex-image h1 {font-size: 2rem;}
}
@media (max-width: 600px){
.page-template-page-shop .anchor{ display: block;  height: 60px;   margin-top: -60px;   visibility: hidden;}
.page-template-page-shop #cb-content {  padding-top: 0px;}
.page-template-page-shop .col-4  {width: 98%; margin-bottom: 25px;}	
.page-template-page-shop .top-shop-navigtion li {width: 100%; margin: 0 0 10px;}
.imgsource {margin-top: 0;}
}
</style>
</body>
</html>