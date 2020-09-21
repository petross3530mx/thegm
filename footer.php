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
			<div align="center" class="footersticky only-mobile-flex-ad">
				<div style="height:100px; width:100%; position:fixed; background-color: white; opacity: 0.75;bottom: 0;"></div>
				<div data-aaad='true' data-aa-adunit='/22181265/MHC_728v_3'></div>
				<div data-aaad='true' data-aa-adunit='/22181265/MHC_MOB_320v_1'></div>
		    </div>
 		<?php }; ?>
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
					<div class="col-9">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("fsl-1") ) : endif; ?>
					</div>
					<div class="col-3">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("fsl-2") ) : endif; ?>
					</div>
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
#ftwp-container.ftwp-wrap #ftwp-header-minimize:hover,#ftwp-container.ftwp-wrap #ftwp-trigger:hover{cursor:pointer}#ftwp-container.ftwp-wrap,#ftwp-container.ftwp-wrap a,#ftwp-container.ftwp-wrap a:active,#ftwp-container.ftwp-wrap a:focus,#ftwp-container.ftwp-wrap a:hover,#ftwp-container.ftwp-wrap a:link,#ftwp-container.ftwp-wrap a:visited,#ftwp-container.ftwp-wrap button,#ftwp-container.ftwp-wrap button:active,#ftwp-container.ftwp-wrap button:focus,#ftwp-container.ftwp-wrap button:hover,#ftwp-container.ftwp-wrap div,#ftwp-container.ftwp-wrap h3,#ftwp-container.ftwp-wrap header,#ftwp-container.ftwp-wrap li,#ftwp-container.ftwp-wrap li::after,#ftwp-container.ftwp-wrap li::before,#ftwp-container.ftwp-wrap nav,#ftwp-container.ftwp-wrap ol,#ftwp-container.ftwp-wrap span,#ftwp-container.ftwp-wrap ul{margin:0;padding:0;line-height:inherit;font:inherit;color:inherit;background:0 0;box-shadow:none;text-shadow:none;text-decoration:none;text-align:inherit;border:none;outline:0;box-sizing:border-box;border-radius:0;clear:none}#ftwp-container.ftwp-wrap li{list-style:none}#ftwp-container.ftwp-wrap li::after,#ftwp-container.ftwp-wrap li::before{display:none}#ftwp-container.ftwp-wrap{font-family:inherit;font-size:12px}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-anchor::before,#ftwp-container.ftwp-wrap .ftwp-icon,#ftwp-container.ftwp-wrap .ftwp-icon-bullet,#ftwp-container.ftwp-wrap .ftwp-icon-circle,#ftwp-container.ftwp-wrap .ftwp-icon-circle-o,#ftwp-container.ftwp-wrap .ftwp-icon-collapse,#ftwp-container.ftwp-wrap .ftwp-icon-ellipsis,#ftwp-container.ftwp-wrap .ftwp-icon-expand,#ftwp-container.ftwp-wrap .ftwp-icon-menu,#ftwp-container.ftwp-wrap .ftwp-icon-minimize,#ftwp-container.ftwp-wrap .ftwp-icon-number,#ftwp-container.ftwp-wrap .ftwp-icon-square,#ftwp-container.ftwp-wrap .ftwp-icon-square-o,#ftwp-container.ftwp-wrap .ftwp-icon-vellipsis{display:inline-block;font-family:ftwp-icon;font-style:normal;font-weight:400;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}#ftwp-container.ftwp-wrap .ftwp-icon-menu::before{content:'\F0C9'}#ftwp-container.ftwp-wrap .ftwp-icon-bullet::before{content:'\F0CA'}#ftwp-container.ftwp-wrap .ftwp-icon-number::before{content:'\F0CB'}#ftwp-container.ftwp-wrap .ftwp-icon-ellipsis::before{content:'\F141'}#ftwp-container.ftwp-wrap .ftwp-icon-vellipsis::before{content:'\F142'}#ftwp-container.ftwp-wrap .ftwp-icon-circle::before{content:'\F111'}#ftwp-container.ftwp-wrap .ftwp-icon-circle-o::before{content:'\F10C'}#ftwp-container.ftwp-wrap .ftwp-icon-square::before{content:'\F0C8'}#ftwp-container.ftwp-wrap .ftwp-icon-square-o::before{content:'\F096'}#ftwp-container.ftwp-wrap .ftwp-icon-expand::before{content:'\E801'}#ftwp-container.ftwp-wrap .ftwp-icon-collapse::before{content:'\E800'}#ftwp-container.ftwp-wrap .ftwp-icon-minimize::before{content:'\E803'}#ftwp-container.ftwp-wrap .ftwp-transform-left-top{-webkit-transform-origin:left top;-ms-transform-origin:left top;transform-origin:left top}#ftwp-container.ftwp-wrap .ftwp-transform-left-center{-webkit-transform-origin:left center;-ms-transform-origin:left center;transform-origin:left center}#ftwp-container.ftwp-wrap .ftwp-transform-left-bottom{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom}#ftwp-container.ftwp-wrap .ftwp-transform-right-top{-webkit-transform-origin:right top;-ms-transform-origin:right top;transform-origin:right top}#ftwp-container.ftwp-wrap .ftwp-transform-right-center{-webkit-transform-origin:right center;-ms-transform-origin:right center;transform-origin:right center}#ftwp-container.ftwp-wrap .ftwp-transform-right-bottom{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom}#ftwp-container.ftwp-wrap #ftwp-trigger{display:inline-block;width:50px;height:50px;background:rgba(238,238,238,.95);color:#333;font-size:30px;position:relative}#ftwp-container.ftwp-wrap #ftwp-trigger:focus{outline:#0ff solid 5px;box-shadow:0 10px 10px rgba(0,0,0,.5)}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse:focus,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand:focus,#ftwp-container.ftwp-wrap #ftwp-header-minimize:focus{outline:rgba(51,51,51,.5) solid 2px}#ftwp-container.ftwp-wrap #ftwp-trigger .ftwp-trigger-icon{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}#ftwp-container.ftwp-wrap #ftwp-contents{width:250px;max-width:100%;overflow:hidden;height:auto;max-height:100%}#ftwp-container.ftwp-wrap #ftwp-contents:hover #ftwp-header,#ftwp-container.ftwp-wrap #ftwp-contents:hover #ftwp-list{background:#eee}#ftwp-container.ftwp-wrap #ftwp-header{color:#333;background:rgba(238,238,238,.95);padding:10px;font-size:19.2px;line-height:1.1;-webkit-transition:background .3s;transition:background .3s}#ftwp-container.ftwp-wrap #ftwp-header-control{float:left;margin-right:5px}#ftwp-container.ftwp-wrap #ftwp-header-title{font-weight:700;display:block;overflow:hidden}#ftwp-container.ftwp-wrap #ftwp-header-minimize{float:right;margin-left:5px;width:25px;text-align:center;opacity:.5}#ftwp-container.ftwp-wrap #ftwp-header-minimize:active,#ftwp-container.ftwp-wrap #ftwp-header-minimize:focus,#ftwp-container.ftwp-wrap #ftwp-header-minimize:hover{font-family:ftwp-icon}#ftwp-container.ftwp-wrap #ftwp-header-minimize:focus,#ftwp-container.ftwp-wrap #ftwp-header-minimize:hover{opacity:1}#ftwp-container.ftwp-wrap #ftwp-header::after{content:'';display:table;clear:both}#ftwp-container.ftwp-wrap #ftwp-list{color:#333;font-size:12px;background:rgba(238,238,238,.95);line-height:1.2;overflow-y:auto;width:100%;-webkit-transition:background .3s;transition:background .3s}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-item{text-indent:0}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-anchor{display:block;padding:5px 10px;z-index:10;overflow:hidden;position:relative;-webkit-transition:color .3s;transition:color .3s}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-anchor:hover{color:#00A368}#ftwp-container.ftwp-wrap #ftwp-list .ftwp-active,#ftwp-container.ftwp-wrap #ftwp-list .ftwp-active:hover,#ftwp-container.ftwp-wrap #ftwp-list .ftwp-anchor:focus{color:#fff}#ftwp-container.ftwp-fixed-to-post.ftwp-minimize #ftwp-trigger{visibility:visible}#ftwp-container.ftwp-fixed-to-post.ftwp-maximize #ftwp-trigger,#ftwp-container.ftwp-fixed-to-post.ftwp-minimize #ftwp-contents{visibility:hidden;z-index:-100}#ftwp-container.ftwp-fixed-to-post.ftwp-maximize #ftwp-contents{visibility:visible}#ftwp-container.ftwp-fixed-to-post{position:relative;z-index:999999}#ftwp-container.ftwp-fixed-to-post #ftwp-contents,#ftwp-container.ftwp-fixed-to-post #ftwp-trigger{position:fixed;top:auto;bottom:auto;left:auto;right:auto}#ftwp-container.ftwp-fixed-to-post.ftwp-top-left #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-top-left #ftwp-trigger,#ftwp-container.ftwp-fixed-to-post.ftwp-top-right #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-top-right #ftwp-trigger{top:0}#ftwp-container.ftwp-fixed-to-post.ftwp-middle-left #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-middle-left #ftwp-trigger,#ftwp-container.ftwp-fixed-to-post.ftwp-middle-right #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-middle-right #ftwp-trigger{top:0;bottom:0;margin:auto 0}@media screen and (max-height:420px){#ftwp-container.ftwp-fixed-to-post.ftwp-middle-left #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-middle-right #ftwp-contents{margin:0}}#ftwp-container.ftwp-fixed-to-post.ftwp-bottom-left #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-bottom-left #ftwp-trigger,#ftwp-container.ftwp-fixed-to-post.ftwp-bottom-right #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-bottom-right #ftwp-trigger{bottom:0}#ftwp-container #ftwp-contents.ftwp-border-thin,#ftwp-container #ftwp-trigger.ftwp-border-thin{border-color:rgba(51,51,51,.95);border-style:solid;border-width:1px}#ftwp-container #ftwp-trigger.ftwp-border-thin{font-size:29.5px}#ftwp-container #ftwp-contents.ftwp-border-medium,#ftwp-container #ftwp-trigger.ftwp-border-medium{border-color:rgba(51,51,51,.95);border-style:solid;border-width:2px}#ftwp-container #ftwp-trigger.ftwp-border-medium{font-size:29px}#ftwp-container #ftwp-contents.ftwp-border-bold,#ftwp-container #ftwp-trigger.ftwp-border-bold{border-color:rgba(51,51,51,.95);border-style:solid;border-width:5px}#ftwp-container #ftwp-trigger.ftwp-border-bold{font-size:27.5px}#ftwp-container.ftwp-wrap .ftwp-shape-round,#ftwp-container.ftwp-wrap .ftwp-shape-round:active,#ftwp-container.ftwp-wrap .ftwp-shape-round:focus,#ftwp-container.ftwp-wrap .ftwp-shape-round:hover{border-radius:7px}#ftwp-container.ftwp-border-thin .ftwp-shape-round #ftwp-header{border-top-left-radius:6px;border-top-right-radius:6px}#ftwp-container.ftwp-border-thin .ftwp-shape-round #ftwp-list{border-bottom-left-radius:6px;border-bottom-right-radius:6px}#ftwp-container.ftwp-border-medium .ftwp-shape-round #ftwp-header{border-top-left-radius:5px;border-top-right-radius:5px}#ftwp-container.ftwp-border-medium .ftwp-shape-round #ftwp-list{border-bottom-left-radius:5px;border-bottom-right-radius:5px}#ftwp-container.ftwp-border-bold .ftwp-shape-round #ftwp-header{border-top-left-radius:2px;border-top-right-radius:2px}#ftwp-container.ftwp-border-bold .ftwp-shape-round #ftwp-list{border-bottom-left-radius:2px;border-bottom-right-radius:2px}#ftwp-container.ftwp-wrap .ftwp-shape-circle,#ftwp-container.ftwp-wrap .ftwp-shape-circle:active,#ftwp-container.ftwp-wrap .ftwp-shape-circle:focus,#ftwp-container.ftwp-wrap .ftwp-shape-circle:hover{border-radius:50%}#ftwp-container.ftwp-wrap .ftwp-shape-circle .ftwp-trigger-icon{font-size:27px}#ftwp-container.ftwp-wrap .ftwp-shape-circle.ftwp-border-thin .ftwp-trigger-icon{font-size:26px}#ftwp-container.ftwp-wrap .ftwp-shape-circle.ftwp-border-medium .ftwp-trigger-icon{font-size:25px}#ftwp-container.ftwp-wrap .ftwp-shape-circle.ftwp-border-bold .ftwp-trigger-icon{font-size:22px}#ftwp-container #ftwp-list .ftwp-anchor::before{float:left;font-size:4.8px;line-height:3;margin-right:10px}#ftwp-container #ftwp-list .ftwp-text{display:block;overflow:hidden}#ftwp-container #ftwp-list.ftwp-liststyle-circle .ftwp-anchor::before{content:'\F111'}#ftwp-container #ftwp-list.ftwp-liststyle-circle-o .ftwp-anchor::before{content:'\F10C'}#ftwp-container #ftwp-list.ftwp-liststyle-square .ftwp-anchor::before{content:'\F0C8'}#ftwp-container #ftwp-list.ftwp-liststyle-square-o .ftwp-anchor::before{content:'\F096'}#ftwp-container #ftwp-list.ftwp-liststyle-decimal{counter-reset:List}#ftwp-container #ftwp-list.ftwp-liststyle-decimal .ftwp-item{counter-increment:List}#ftwp-container #ftwp-list.ftwp-liststyle-decimal .ftwp-anchor::before{font-size:12px;line-height:1.2;font-family:inherit;content:counters(List,".")}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-liststyle-none .ftwp-anchor::before{content:'.';visibility:hidden;margin-right:0}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-anchor::before{margin-left:20px}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-sub .ftwp-anchor::before{margin-left:40px}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-anchor::before{margin-left:60px}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-anchor::before{margin-left:80px}#ftwp-container #ftwp-list.ftwp-list-nest .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-sub .ftwp-anchor::before{margin-left:100px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-liststyle-decimal ol,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-liststyle-decimal ul{counter-reset:List}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-collapse>.ftwp-sub{height:0;visibility:hidden}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp-icon .ftwp-anchor{padding-left:32px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub{position:relative}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand{position:absolute;left:0;top:0;padding:5px 10px;box-sizing:content-box;opacity:.5;-webkit-transition:transform .1s,opacity .3s;transition:transform .1s,opacity .3s;z-index:20}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse:focus,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse:hover,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand:focus,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand:hover{font-family:ftwp-icon;-webkit-transform:scale(1.3);-ms-transform:scale(1.3);transform:scale(1.3);opacity:.9}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-collapse:hover,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-icon-expand:hover{cursor:default}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-expand{left:20px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-expand{left:40px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-expand{left:60px}#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-collapse,#ftwp-container #ftwp-list.ftwp-list-nest.ftwp-colexp .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub .ftwp-has-sub>.ftwp-icon-expand{left:80px}#ftwp-container #ftwp-list.ftwp-strong-first>.ftwp-item>.ftwp-anchor .ftwp-text{font-weight:700;font-size:13.2px}#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-circle-o>.ftwp-item>.ftwp-anchor::before,#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-circle>.ftwp-item>.ftwp-anchor::before,#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-square-o>.ftwp-item>.ftwp-anchor::before,#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-square>.ftwp-item>.ftwp-anchor::before{font-size:6px;line-height:2.4;font-weight:700}#ftwp-container #ftwp-list.ftwp-strong-first.ftwp-liststyle-decimal>.ftwp-item>.ftwp-anchor::before{font-size:13.2px;font-weight:700}#ftwp-container #ftwp-list.ftwp-effect-basic .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-radial-out .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-out .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-leftline .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-rightline .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-underline .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-round-corners .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-shutter-out .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-sweep-to-left .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-sweep-to-right .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-center .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-left .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-right .ftwp-text::before{content:'';position:absolute;z-index:-1;top:0;right:0;bottom:0;left:0;background:rgba(221,51,51,.95);-webkit-transition:.3s ease-out;transition:.3s ease-out;-webkit-transition-property:transform,bottom,left,right,background;transition-property:transform,bottom,left,right,background}#ftwp-container #ftwp-list.ftwp-effect-fade .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-fade .ftwp-anchor:focus{background:rgba(221,51,51,.95)}#ftwp-container #ftwp-list.ftwp-effect-sweep-to-right .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:left center;-ms-transform-origin:left center;transform-origin:left center}#ftwp-container #ftwp-list.ftwp-effect-sweep-to-right .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-sweep-to-right .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1)}#ftwp-container #ftwp-list.ftwp-effect-sweep-to-left .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:right center;-ms-transform-origin:right center;transform-origin:right center;-webkit-transition-property:transform;transition-property:transform}#ftwp-container #ftwp-list.ftwp-effect-sweep-to-left .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-sweep-to-left .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1)}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-anchor{-webkit-transition-duration:.5s;transition-duration:.5s}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1);-webkit-transition-timing-function:cubic-bezier(.52,1.64,.37,.66);transition-timing-function:cubic-bezier(.52,1.64,.37,.66)}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-right .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:left center;-ms-transform-origin:left center;transform-origin:left center;-webkit-transition-duration:.5s;transition-duration:.5s}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-anchor{-webkit-transition-duration:.5s;transition-duration:.5s}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1);-webkit-transition-timing-function:cubic-bezier(.52,1.64,.37,.66);transition-timing-function:cubic-bezier(.52,1.64,.37,.66)}#ftwp-container #ftwp-list.ftwp-effect-bounce-to-left .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:right center;-ms-transform-origin:right center;transform-origin:right center;-webkit-transition-duration:.5s;transition-duration:.5s}#ftwp-container #ftwp-list.ftwp-effect-radial-out .ftwp-text::before{border-radius:100%;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0)}#ftwp-container #ftwp-list.ftwp-effect-radial-out .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-radial-out .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scale(2);-ms-transform:scale(2);transform:scale(2)}#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-text::before{border-radius:100%;background:rgba(238,238,238,.95);-webkit-transform:scale(2);-ms-transform:scale(2);transform:scale(2)}#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-anchor:focus{background:rgba(221,51,51,.95)}#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-radial-in .ftwp-anchor:focus .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-out .ftwp-text::before{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0)}#ftwp-container #ftwp-list.ftwp-effect-rectangle-out .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-out .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-text::before{background:rgba(238,238,238,.95)}#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-anchor:focus,#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-anchor:focus{background:rgba(221,51,51,.95)}#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-rectangle-in .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0)}#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0)}#ftwp-container #ftwp-list.ftwp-effect-shutter-in .ftwp-text::before{background:rgba(238,238,238,.95);-webkit-transform-origin:center;-ms-transform-origin:center;transform-origin:center}#ftwp-container #ftwp-list.ftwp-effect-shutter-out .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-shutter-out .ftwp-anchor:focus .ftwp-text::before{-webkit-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1)}#ftwp-container #ftwp-list.ftwp-effect-shutter-out .ftwp-text::before{background:rgba(221,51,51,.95);-webkit-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:center;-ms-transform-origin:center;transform-origin:center}#ftwp-container #ftwp-list.ftwp-effect-underline-from-left .ftwp-text::before{top:auto;right:100%;height:1px}#ftwp-container #ftwp-list.ftwp-effect-underline-from-left .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-left .ftwp-anchor:focus .ftwp-text::before{right:0}#ftwp-container #ftwp-list.ftwp-effect-underline-from-right .ftwp-text::before{top:auto;left:100%;height:1px}#ftwp-container #ftwp-list.ftwp-effect-underline-from-right .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-right .ftwp-anchor:focus .ftwp-text::before{left:0}#ftwp-container #ftwp-list.ftwp-effect-underline-from-center .ftwp-text::before{top:auto;left:50%;right:50%;height:1px}#ftwp-container #ftwp-list.ftwp-effect-underline-from-center .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-underline-from-center .ftwp-anchor:focus .ftwp-text::before{left:0;right:0}#ftwp-container #ftwp-list.ftwp-effect-reveal-underline .ftwp-text::before{top:auto;right:0;bottom:-2px;left:0;height:2px}#ftwp-container #ftwp-list.ftwp-effect-reveal-underline .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-underline .ftwp-anchor:focus .ftwp-text::before{bottom:0}#ftwp-container #ftwp-list.ftwp-effect-reveal-leftline .ftwp-text::before{top:0;right:auto;bottom:0;left:-3px;width:3px}#ftwp-container #ftwp-list.ftwp-effect-reveal-leftline .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-leftline .ftwp-anchor:focus .ftwp-text::before{left:0}#ftwp-container #ftwp-list.ftwp-effect-reveal-rightline .ftwp-text::before{top:0;right:-3px;bottom:0;left:auto;width:3px}#ftwp-container #ftwp-list.ftwp-effect-reveal-rightline .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-reveal-rightline .ftwp-anchor:focus .ftwp-text::before{right:0}#ftwp-container #ftwp-list.ftwp-effect-round-corners .ftwp-anchor.ftwp-active .ftwp-text::before,#ftwp-container #ftwp-list.ftwp-effect-round-corners .ftwp-anchor:focus .ftwp-text::before{background:rgba(221,51,51,.95);border-radius:1em}#ftwp-container #ftwp-list.ftwp-effect-round-corners .ftwp-text::before{background:rgba(238,238,238,.95)}#ftwp-container #ftwp-list.ftwp-effect-border-fade .ftwp-anchor{-webkit-transition:color .3s,box-shadow .3s;transition:color .3s,box-shadow .3s}#ftwp-container #ftwp-list.ftwp-effect-border-fade .ftwp-anchor.ftwp-active,#ftwp-container #ftwp-list.ftwp-effect-border-fade .ftwp-anchor:focus{box-shadow:inset 0 0 0 2px rgba(221,51,51,.95)}@-webkit-keyframes ftwpFadeIn{from{opacity:0;visibility:hidden}to{opacity:1;visibility:visible}}@keyframes ftwpFadeIn{from{opacity:0;visibility:hidden}to{opacity:1;visibility:visible}}@-webkit-keyframes ftwpFadeOut{from{opacity:1;visibility:visible}to{opacity:0;visibility:hidden}}@keyframes ftwpFadeOut{from{opacity:1;visibility:visible}to{opacity:0;visibility:hidden}}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-in.ftwp-maximize #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-in.ftwp-minimize #ftwp-trigger{visibility:hidden;-webkit-animation:ftwpFadeIn .5s ease-out forwards;animation:ftwpFadeIn .5s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-inOut.ftwp-minimize #ftwp-trigger{visibility:hidden;-webkit-animation:ftwpFadeIn .3s .1s ease-out forwards;animation:ftwpFadeIn .3s .1s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-inOut.ftwp-minimize #ftwp-contents{visibility:visible;-webkit-animation:ftwpFadeOut .1s ease-in forwards;animation:ftwpFadeOut .1s ease-in forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-inOut.ftwp-maximize #ftwp-contents{visibility:hidden;-webkit-animation:ftwpFadeIn .3s .1s ease-out forwards;animation:ftwpFadeIn .3s .1s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-fade-inOut.ftwp-maximize #ftwp-trigger{visibility:visible;-webkit-animation:ftwpFadeOut .1s ease-in forwards;animation:ftwpFadeOut .1s ease-in forwards}@-webkit-keyframes ftwpZoomIn{0%{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);visibility:hidden;opacity:0}20%{opacity:0}30%{opacity:1}100%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);visibility:visible;opacity:1}}@keyframes ftwpZoomIn{0%{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);visibility:hidden;opacity:0}20%{opacity:0}30%{opacity:1}100%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);visibility:visible;opacity:1}}@-webkit-keyframes ftwpZoomOut{0%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);visibility:visible;opacity:1}50%{opacity:1}80%{opacity:.3}100%{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);visibility:hidden;opacity:0}}@keyframes ftwpZoomOut{0%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);visibility:visible;opacity:1}50%{opacity:1}80%{opacity:.3}100%{-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);visibility:hidden;opacity:0}}@-webkit-keyframes ftwpHide{from{visibility:visible}to{visibility:hidden}}@keyframes ftwpHide{from{visibility:visible}to{visibility:hidden}}@-webkit-keyframes ftwpShow{0%,99%{visibility:hidden}100%{visibility:visible}}@keyframes ftwpShow{0%,99%{visibility:hidden}100%{visibility:visible}}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-in.ftwp-maximize #ftwp-contents,#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-in.ftwp-minimize #ftwp-trigger{-webkit-animation:ftwpZoomIn .5s ease-out forwards;animation:ftwpZoomIn .5s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-inOut.ftwp-maximize #ftwp-trigger{visibility:visible;-webkit-animation:ftwpHide .1s forwards;animation:ftwpHide .1s forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-inOut.ftwp-maximize #ftwp-contents{-webkit-animation:ftwpZoomIn .3s ease-out forwards;animation:ftwpZoomIn .3s ease-out forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-inOut.ftwp-minimize #ftwp-trigger{visibility:hidden;-webkit-animation:ftwpShow .3s forwards;animation:ftwpShow .3s forwards}#ftwp-container.ftwp-fixed-to-post.ftwp-animate-zoom-inOut.ftwp-minimize #ftwp-contents{-webkit-animation:ftwpZoomOut .4s ease-in forwards;animation:ftwpZoomOut .4s ease-in forwards}@-webkit-keyframes ftwpTargetHint{0%,100%{opacity:0}50%{opacity:1}}@keyframes ftwpTargetHint{0%,100%{opacity:0}50%{opacity:1}}.ftwp-heading-target{position:relative;outline:0}.ftwp-heading-target::before{content:'';display:block;opacity:0;position:absolute;top:0;left:-10px;width:4px;height:100%;background:#d33;-webkit-animation:ftwpTargetHint 1s .6s forwards;animation:ftwpTargetHint 1s .6s forwards}.ftwp-widget #ftwp-container,.ftwp-widget #ftwp-container.ftwp-wrap #ftwp-contents{height:auto;width:100%}.ftwp-fade-trigger{opacity:.1!important;filter:blur(1px);-webkit-transition:3s ease-in;transition:3s ease-in;-webkit-transition-property:opacity,filter;transition-property:opacity,filter}.ftwp-unfade-trigger{opacity:1;filter:blur(0);-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);-webkit-transition:.5s ease-out;transition:.5s ease-out;-webkit-transition-property:opacity,filter;transition-property:opacity,filter}.ftwp-blur{filter:blur(3px)!important;opacity:.8!important;-webkit-transition:filter 1s ease-out!important;transition:filter 1s ease-out!important}.ftwp-unblur{filter:blur(0)!important;opacity:1!important;-webkit-transition:filter .3s ease-out!important;transition:filter .3s ease-out!important}.ftwp-no-scroll{overflow:hidden!important}.ftwp-in-post#ftwp-container-outer{margin-bottom:20px}.ftwp-in-post#ftwp-container-outer,.ftwp-in-post#ftwp-container-outer #ftwp-contents{height:auto;overflow-y:hidden;position:relative;z-index:1}.ftwp-in-post#ftwp-container-outer #ftwp-trigger,.ftwp-widget #ftwp-container #ftwp-trigger{position:absolute;top:-9999px;z-index:-10;visibility:hidden}.ftwp-in-post#ftwp-container-outer.ftwp-float-left,.ftwp-in-post#ftwp-container-outer.ftwp-float-left #ftwp-contents,.ftwp-in-post#ftwp-container-outer.ftwp-float-right,.ftwp-in-post#ftwp-container-outer.ftwp-float-right #ftwp-contents{width:250px}.ftwp-in-post#ftwp-container-outer.ftwp-float-right{float:right;margin-left:20px}@media screen and (max-width:420px){.ftwp-in-post#ftwp-container-outer.ftwp-float-right,.ftwp-in-post#ftwp-container-outer.ftwp-float-right #ftwp-contents{margin-left:0;margin-right:0;float:none;width:100%!important}}.ftwp-in-post#ftwp-container-outer.ftwp-float-left{float:left;margin-right:20px}@media screen and (max-width:420px){.ftwp-in-post#ftwp-container-outer.ftwp-float-left,.ftwp-in-post#ftwp-container-outer.ftwp-float-left #ftwp-contents{margin-left:0;margin-right:0;float:none;width:100%!important}}.ftwp-in-post#ftwp-container-outer.ftwp-float-none,.ftwp-in-post#ftwp-container-outer.ftwp-float-none #ftwp-contents{width:100%}.ftwp-widget-fixed #ftwp-contents{position:fixed;z-index:999999}.ftwp-widget-invalid{display:none}#ftwp-container.ftwp-hidden-state{opacity:0;visibility:hidden;z-index:-9999;position:absolute;top:0;left:0}#ftwp-container.ftwp-ie9.ftwp-maximize #ftwp-contents,#ftwp-container.ftwp-ie9.ftwp-minimize #ftwp-trigger{visibility:visible!important}#ftwp-container.ftwp-ie9.ftwp-maximize #ftwp-trigger{visibility:hidden!important}#ftwp-container.ftwp-ie9 #ftwp-trigger:hover{filter:none!important}


/* latin */
@font-face {

  font-display:fallback;
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}


/* latin */
@font-face {

  font-display:fallback;
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* latin */
@font-face {

  font-display:fallback;
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* latin */
@font-face {

  font-display:fallback;
  font-family: 'Pathway Gothic One';
  font-style: normal;
  font-weight: 400;
  src: local('Pathway Gothic One Regular'), local('PathwayGothicOne-Regular'), url(https://fonts.gstatic.com/s/pathwaygothicone/v7/MwQrbgD32-KAvjkYGNUUxAtW7pEBwx-tS1Zf.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}


/* latin */
/*@font-face {

  font-display:fallback;
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v13/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}*/

/* latin */
/*@font-face {

  font-display:fallback;
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://fonts.gstatic.com/s/playfairdisplay/v13/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lW4e5g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}*/


/* latin */
/*@font-face {

  font-display:fallback;
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url(https://fonts.gstatic.com/s/playfairdisplay/v13/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lW4e5g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}*/

.article_holder,.article_holder .cb-article-meta h2,.article_holder .cb-article-meta h3,.article_holder .cb-article-meta h4,.article_holder .cb-byline,.cb-cat-header,.footer-first-line li,article,aside,div,main,section{box-sizing:border-box}body,html{height:100%;width:100%;margin:0;padding:0;left:0;top:0;font-size:100%}.center,.container{margin-left:auto;margin-right:auto}*{font-family:'Open Sans', 'Helvetica', sans-serif;font-weight:400;color:#404040;line-height:1.5}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.375rem}h4{font-size:1.6rem}h5{font-size:1rem}h6{font-size:.875rem}p{font-size:1.125rem;font-weight:200;line-height:1.8}.font-light{font-weight:300}.font-regular{font-weight:400}.font-heavy{font-weight:700}.left{text-align:left}.right{text-align:right}.center{text-align:center}.justify{text-align:justify}.container{width:90%}.row{position:relative;width:100%}.row [class^=col]{float:left;margin:.5rem 2%;min-height:.125rem}.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9{width:96%}.col-1-sm{width:4.33%}.col-2-sm{width:12.66%}.col-3-sm{width:21%}.col-4-sm{width:29.33%}.col-5-sm{width:37.66%}.col-6-sm{width:46%}.col-7-sm{width:54.33%}.col-8-sm{width:62.66%}.col-9-sm{width:71%}.col-10-sm{width:79.33%}.col-11-sm{width:87.66%}.col-12-sm{width:96%}.row::after{content:"";display:table;clear:both}#main>article:after,.cb-grid-6:after{content:''}.hidden-sm{display:none}@media only screen and (min-width:33.75em){.container{width:80%}}@media only screen and (min-width:45em){.col-1{width:4.33%}.col-2{width:12.66%}.col-3{width:21%}.col-4{width:29.33%}.col-5{width:37.66%}.col-6{width:46%}.col-7{width:54.33%}.col-8{width:62.66%}.col-9{width:71%}.col-10{width:79.33%}.col-11{width:87.66%}.col-12{width:96%}.hidden-sm{display:block}}@media only screen and (min-width:60em){.container{width:75%;max-width:60rem}}header.site-header{width:100%;position:fixed;text-align:center;background:#134a8e;z-index:102;-webkit-appearance:none;left:0;top:0;color:#fff;text-transform:uppercase}header.site-header nav{color:#fff}body.admin-bar header.site-header{top:32px}h1,h2,h3,h4,h5,h6{font-family: 'Pathway Gothic One', sans-serif;font-weight:700}footer.site-footer{background-color:#272727;text-align:center; padding-bottom: 100px;}footer.site-footer .follow_us_container{background:#fff}footer.site-footer .row footer-first-line{background:#313131}header.site-header nav ul{margin:6px 0 0;padding:0}header.site-header nav ul li{list-style:none;display:inline-block;margin: 0 0.5em;}header.site-header nav ul li a{color:#fff;text-decoration:none}header.site-header nav ul li a:hover{text-decoration:underline}header .logo{text-align:left}header .logo img{display:block;max-height:45px;width:auto}header .t-menu{color:#fff;text-align:right;line-height:2.5}.site-content{width:100%;clear:both;overflow:hidden}.entry-content-article{width:calc(100% - 310px);float:left}aside{width:300px;padding:1em;float:right}.inner-header-container{height:500px;position:relative;overflow:hidden;margin-bottom:0.3em}.inner-header-container img.wp-post-image{position:absolute;width:100%;height:auto;z-index:1;top:50%;margin-top:-260px}.title-container{bottom:-5px;position:absolute;left:0;width:100%;z-index:99}.inner-header-container h1.entry-title{text-shadow:1px 1px rgba(0,0,0,.4);width:75%;padding:0 50px 0 0;font-size:3.5em;text-transform:uppercase;color:#fff;box-sizing:border-box;margin:0 0 10px;line-height:1.4;float:left}.inner-header-container .publisher{width:25%;float:right;z-index:1000;text-align:center}.inner-header-container .publisher img{width:200px;position:absolute;bottom:20px;right:4em}.breadcrumbs,.entry-meta-details span,.entry-meta-details time{color:#404040}.breadcrumbs a{text-decoration:none;text-transform:uppercase;color:#404040;font-size:.8em}.entry-content-article footer p,.entry-meta-details{color:#888;font-size:.8em;padding:10px 0 0;margin:0}.entry-content-article footer p{border-top:1px solid #eee}.entry-content-article footer p a{text-decoration:none;color:#888}.entry-content-article footer,.title-container,header.entry-header .entry-meta,main#main .entry-content{padding:0 4em 0 0}.cb-post-pagination{text-align:center;margin:25px 0}.cb-post-pagination a{display:inline-block;padding:20px 10px;background:#f7f7f7;border:3px solid #e9e9e9;color:#999;min-width:300px;text-decoration:none}.cb-post-pagination a:hover{background:#e9e9e9;text-decoration:none}.related-posts{clear:both}.cb-grid-img.nofade{overflow:hidden}.cb-grid-img.nofade a{display:block}.cb-grid-img.nofade img{position:relative;margin-left:50%;left:-300px}.cb-grid-img.nofade>a>img{max-width:600px;height:auto}.soc_img_wrap{position:relative}.entry-content img{max-width:100%;height:auto}.msw{color:#fff;cursor:pointer;border-top:3px solid #fff;border-bottom:3px solid #fff;display:inline-block;font-size:.8em;padding:3px 0;margin-top:5px}.cb-post-pagination-page-number{color:#606369;font-size:24px;font-weight:700;text-align:center;display:inline-block;position:relative;padding:0 25px 10px}.cb-post-pagination-next{display:inline-block;font-weight:600;font-size:24px}.mk_related_caption{text-transform:uppercase;text-align:center;margin-top:2em;padding:10px 0;font-family:Oswald,sans-serif}.follow_us_container{background:#fff;text-align:center;width:100%}.follow_us_container .fsl-list{padding:0}.follow_us,.follow_us_container .fsl-list{display:inline-block;vertical-align:middle}.follow_us{padding:0 10px 0 0;color:#333;font-size:23px}.fsl-list li{display:inline-block;vertical-align:middle;margin:0 5px}.fsl-list li a{display:block;height:47px;width:48px;background:url(/wp-content/themes/thegm/img/new_social_icons.png) no-repeat}.fsl-list li.fb a{background-position:0 0}.fsl-list li.tw a{background-position:-57px 0}.fsl-list li.pin a{background-position:-114px 0}.fsl-list li.ins a{background-position:-168px 0}.fsl-list li.gp a{background-position:-226px 0}.footer-first-line{padding:1em 0;background:#313131}.footer-first-line ul{text-align:center;margin:0;padding:0}.footer-first-line li{width:24%;padding:4px 10px;display:inline-block;vertical-align:top;list-style:none}.footer-first-line li a,.footer-second-line a{color:#fff;font-size:1.2em;text-decoration:none}.footer-second-line{padding:1.5em 0 0}.footer-second-line a{font-size:1em}.footer-third-line img{max-width:200px;height:auto;margin-bottom:1em}.footer-third-line p{margin:0;color:#fff;font-size:.85em}.cb-grid-block .cb-module-header{margin-bottom:3px}.cb-grid-block .cb-grid-img{display:none}.cb-grid-block.cb-dark{background:0}.cb-grid-3,.cb-grid-4,.cb-grid-5,.cb-grid-6{position:relative;margin:3px 0 20px;background:#fff}.cb-grid-3>div,.cb-grid-4>div,.cb-grid-5>div,.cb-grid-6>div{overflow:hidden;display:block;float:left;position:relative}.cb-grid-3>div img,.cb-grid-4>div img,.cb-grid-5>div img,.cb-grid-6>div img{max-width:none}.cb-grid-3 a,.cb-grid-3 img,.cb-grid-4 a,.cb-grid-4 img,.cb-grid-5 a,.cb-grid-5 img,.cb-grid-6 a,.cb-grid-6 img{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-o-backface-visibility:hidden;backface-visibility:hidden}.cb-grid-3 img,.cb-grid-4 img,.cb-grid-5 img,.cb-grid-6 img{width:100%}.cb-grid-3 .cb-link,.cb-grid-4 .cb-link,.cb-grid-5 .cb-link,.cb-grid-6 .cb-link{width:100%;height:100%;position:absolute;top:0;left:0;display:block;z-index:17}.cb-grid-3 .cb-article-meta,.cb-grid-4 .cb-article-meta,.cb-grid-5 .cb-article-meta,.cb-grid-6 .cb-article-meta{position:absolute;bottom:0;left:0;z-index:16;width:100%}.article_holder .cb-article-meta h3,.article_holder .cb-article-meta h4,.cb-grid-3 .cb-article-meta h2,.cb-grid-4 .cb-article-meta h2,.cb-grid-5 .cb-article-meta h2,.cb-grid-6 .cb-article-meta h2{line-height:1.7;width:100%;text-align:center;margin:0;font-size:1.2em;font-weight:700;text-transform:uppercase;letter-spacing:1px;padding:10px}.cb-grid-3 .cb-article-meta h2 a,.cb-grid-4 .cb-article-meta h2 a,.cb-grid-5 .cb-article-meta h2 a,.cb-grid-6 .cb-article-meta h2 a{color:#fff;border-bottom:2px #fff solid}.cb-grid-3 .cb-article-meta .cb-byline,.cb-grid-4 .cb-article-meta .cb-byline,.cb-grid-5 .cb-article-meta .cb-byline,.cb-grid-6 .cb-article-meta .cb-byline{width:100%;padding:5px 20px;letter-spacing:1px;color:#fff}.cb-grid-3 .cb-article-meta .cb-byline a,.cb-grid-4 .cb-article-meta .cb-byline a,.cb-grid-5 .cb-article-meta .cb-byline a,.cb-grid-6 .cb-article-meta .cb-byline a{color:#fff}.cb-grid-3 .cb-article-meta .cb-byline i,.cb-grid-4 .cb-article-meta .cb-byline i,.cb-grid-5 .cb-article-meta .cb-byline i,.cb-grid-6 .cb-article-meta .cb-byline i{color:#f0f0f0}.cb-grid-3 .cb-article-meta .cb-byline .cb-categories,.cb-grid-4 .cb-article-meta .cb-byline .cb-categories,.cb-grid-5 .cb-article-meta .cb-byline .cb-categories,.cb-grid-6 .cb-article-meta .cb-byline .cb-categories{display:inline-block;vertical-align:top}.cb-grid-3 .cb-article-meta .cb-byline .cb-categories a,.cb-grid-4 .cb-article-meta .cb-byline .cb-categories a,.cb-grid-5 .cb-article-meta .cb-byline .cb-categories a,.cb-grid-6 .cb-article-meta .cb-byline .cb-categories a{display:inline-block;vertical-align:top;letter-spacing:1px;color:#fff}.cb-grid-3 .cb-article-meta .cb-byline .cb-byline-element a,.cb-grid-4 .cb-article-meta .cb-byline .cb-byline-element a,.cb-grid-5 .cb-article-meta .cb-byline .cb-byline-element a,.cb-grid-6 .cb-article-meta .cb-byline .cb-byline-element a{color:#fff}.cb-grid-3 .cb-feature-1,.cb-grid-3 .cb-feature-2,.cb-grid-3 .cb-feature-3{width:100%;height:150px;margin:0}.cb-grid-3 .cb-feature-1 h2,.cb-grid-3 .cb-feature-2 h2,.cb-grid-3 .cb-feature-3 h2{font-size:14px;letter-spacing:2px;padding:10px}.cb-grid-4 .cb-feature-1{width:100%;height:160px;margin:0;border-bottom:3px solid #fff}.cb-grid-4 .cb-feature-1 h2{font-size:16px;letter-spacing:3px;padding:10px}.cb-grid-4 .cb-feature-2{width:100%;height:120px;margin:0}.cb-grid-4 .cb-feature-2 .cb-article-meta h2{font-size:14px}.cb-grid-4 .cb-feature-3 .cb-article-meta h2,.cb-grid-4 .cb-feature-4 .cb-article-meta h2{font-size:12px}.cb-grid-4 .cb-feature-3{width:100%;height:120px;margin:0}.cb-grid-4 .cb-feature-4{width:100%;height:120px}.cb-grid-4 .cb-feature-2 .cb-article-meta .cb-byline,.cb-grid-4 .cb-feature-3 .cb-article-meta .cb-byline,.cb-grid-4 .cb-feature-4 .cb-article-meta .cb-byline,.cb-grid-4 .cb-feature-5 .cb-article-meta .cb-byline{display:none}.cb-grid-5 .cb-feature-1,.cb-grid-5 .cb-feature-2,.cb-grid-5 .cb-feature-3,.cb-grid-5 .cb-feature-4,.cb-grid-5 .cb-feature-5{height:190px;width:100%;border-bottom:3px solid #fff}.cb-grid-5 .cb-feature-1 .cb-article-meta h2,.cb-grid-5 .cb-feature-2 .cb-article-meta h2,.cb-grid-5 .cb-feature-3 .cb-article-meta h2,.cb-grid-5 .cb-feature-4 .cb-article-meta h2,.cb-grid-5 .cb-feature-5 .cb-article-meta h2{font-size:14px}.cb-grid-6 .cb-feature-1,.cb-grid-6 .cb-feature-2,.cb-grid-6 .cb-feature-3,.cb-grid-6 .cb-feature-4,.cb-grid-6 .cb-feature-5,.cb-grid-6 .cb-feature-6{height:250px;width:100%}.cb-grid-6 .cb-feature-1,.cb-grid-6 .cb-feature-6{height:130px}.article_holder{border:1px solid #fff}.article_holder .cb-article-meta h2 a,.article_holder .cb-article-meta h3 a,.article_holder .cb-article-meta h4 a{border:none;text-decoration:none;text-shadow:1px 1px rgba(0,0,0,.4);font-family:Oswald,sans-serif;font-weight:700;color:#fff}.article_holder .cb-byline{text-align:left;display:block;overflow:hidden;width:100%;background:rgba(0,0,0,.25);margin-bottom:0;padding-left:10px;padding-right:10px;padding-bottom:0;line-height:2.2}.cb-cat-header,.menu-sidebar-inner,.posts-navi,.search .page-title,.social-links{text-align:center}.article_holder .cb-byline,.article_holder .cb-byline span{text-shadow:1px 1px rgba(0,0,0,.4);font-size:.8em;text-transform:uppercase;color:#fff;font-family:Oswald,sans-serif}.cb-cat-header{padding:1em 2em}.cb-cat-header p{font-size:1em}#cb-cat-title,.search .page-title{margin:.5em 0 0;font-size:1.8em;text-transform:uppercase}.aligncenter{display:block;margin:20px auto}body{padding-top:55px!important}.social-links{position:absolute;margin-top:-44px;width:100%}.social-links .icon-facebook,.social-links .icon-pinterest{background-size:cover;background-position:top center;text-indent:-99999999px;display:inline-block;margin:0 5px;box-sizing:border-box}
.page h1.entry-title {text-align: center}
.entry-content table {border-collapse: collapse; border-spacing: inherit;}
.entry-content table td {border-bottom: 1px solid #eee; padding: 8px;}
.entry-content table td  a {text-decoration: none;color: #134a8e;}
.page #secondary, .page #comments {display: none}
.cb-post-pagination {clear: both;}
@media (min-width:1201px) and (max-width:1800px){.article_holder.mk_lre{width:33.33%;height:250px}.article_holder.mk_lro{width:25%;height:250px}.article_holder.mk_gi img{min-height:250px;width:auto;min-width:100%}}@media (min-width:1801px){.article_holder.mk_gi{width:25%;height:250px}.article_holder.mk_gi img{min-height:250px;width:auto;min-width:100%}}.one_half{width:48%}.one_third{width:30.66%}.two_third{width:65.33%}.one_fourth{width:22%}.three_fourth{width:74%}.one_fifth{width:16.8%}.two_fifth{width:37.6%}.three_fifth{width:58.4%}.four_fifth{width:67.2%}.one_sixth{width:13.33%}.five_sixth{width:82.67%}.five_sixth,.four_fifth,.one_fifth,.one_fourth,.one_half,.one_sixth,.one_third,.three_fifth,.three_fourth,.two_fifth,.two_third{position:relative;margin-right:4%;float:left}.last{margin-right:0!important;clear:right}.clearboth{clear:both;display:block;font-size:0;height:0;line-height:0;width:100%}#secondary .fixed{position:fixed;top:100px}#secondary .scroll_bot{position:absolute;top:600px;bottom:0}#secondary #text-10-sticky-wrapper{position:relative}#main>article:after{display:table;clear:both}.posts-navi a{text-decoration:none;font-weight:600;font-size:1.2em}.posts-navi{display:block;width:100%;background:#fff}.posts-navi span a{color:#c2c2c2;border:3px solid #929292;border-radius:5px;padding:20px;margin:10px;display:inline-block;transition:all .2s ease-in-out}.cb-grid-6:after{display:table;clear:both}div#menu-sidebar{display:block;position:fixed;z-index:9999;background:rgba(0,0,0,.4);width:100%;height:100%;top:0;left:0;right:0;bottom:0;cursor:url(/wp-content/themes/thegm/img/close2.png) 16 16,pointer;visibility:hidden;opacity:0;-webkit-transition:.3s;-o-transition:.3s;transition:.3s}.menu-sidebar-inner{background-color:#1d9dbd;position:absolute;width:250px;left:-250px;top:0;bottom:0;height:100vh;padding:10px 0;overflow-y:auto;overflow-x:hidden;cursor:default;-webkit-transition:.3s;-o-transition:.3s;transition:.3s}.menu-sidebar-inner img{max-height:70px;width:auto}.menu-sidebar-inner h2{color:#fff;text-transform:uppercase;padding-bottom:5px;font-size:1.4em;border-bottom:1px solid #fff}.menu-sidebar-inner .menu{padding:0}.menu-sidebar-inner .menu li{list-style:none}.menu-sidebar-inner .menu li a{display:block;color:#fff;text-transform:uppercase;padding:0 10px;font-size:1em;text-align:center;line-height:2;text-decoration:none}.menu-sidebar-inner .menu li a:hover{background:rgba(0,0,0,.05)}.menu-sidebar-inner .search-form{padding:0 10px 25px}.menu-sidebar-inner .search-form .screen-reader-text,.menu-sidebar-inner .search-form .search-submit{display:none}.menu-sidebar-inner .search-form .search-field{display:block;width:100%;border:none;padding:7px;box-sizing:border-box}body.menu-active{overflow:hidden}body.menu-active div#menu-sidebar{visibility:visible;opacity:1}body.menu-active .menu-sidebar-inner{left:0}.cb-cat-header img{max-width:100%;height:auto}@media (min-width:1080px) and (max-width:1200px){.inner-header-container{height:450px}.inner-header-container img.wp-post-image{margin-top:-225px}}@media (min-width:920px) and (max-width:1079px){.inner-header-container{height:350px}.inner-header-container h1.entry-title{font-size:2.5em}.inner-header-container img.wp-post-image{margin-top:-200px}}@media (min-width:770px) and (max-width:920px){.inner-header-container h1.entry-title{font-size:2em;padding:0 10px 0 0}.inner-header-container{height:300px}.inner-header-container img.wp-post-image{margin-top:-170px}.inner-header-container .publisher img{width:150px}.entry-content-article footer,.title-container,header.entry-header .entry-meta,main#main .entry-content{padding:0 2em}#secondary.secondary{display:none}.entry-content-article{width:100%}}@media (min-width:769px) and (max-width:1200px){.article_holder.mk_tle{width:33.33%;height:250px}.article_holder.mk_tlo{width:50%;height:250px}.article_holder.mk_gi img{min-height:250px;width:auto;min-width:100%}.footer-first-line li{width:32%}}@media (max-width:769px){#secondary,.secondary,.nav-h{display:none}.article_holder.mk_tle,.article_holder.mk_tlo{width:50%;height:250px}.mk_gi img{min-height:250px;width:auto;min-width:100%}#masthead .col-2{width:46%;float:left}.menu-sidebar-inner .menu li a{font-size:1em;line-height:2.3}.entry-content-article{width:100%}header .logo img{max-height:35px}.msw{margin-top:1px}body{padding-top:49px!important}.entry-content-article footer,.title-container,header.entry-header .entry-meta,main#main .entry-content{padding:0 1em}.cb-cat-header{padding:.3em 1em}#cb-cat-title,.search .page-title{font-size:1.6em}.cb-cat-header p{font-size:.85em}.footer-first-line li{width:48%}.footer-second-line p{margin:0}.inner-header-container{height:250px}.inner-header-container img.wp-post-image{margin-top:-150px}.inner-header-container .publisher img{width:120px;right:1em}.inner-header-container h1.entry-title{font-size:2em;padding:0 20px 0 0}}@media (max-width:640px){.inner-header-container{height:200px}.inner-header-container img.wp-post-image{margin-top:-105px}.cb-grid-3 .cb-article-meta .cb-byline,.cb-grid-4 .cb-article-meta .cb-byline,.cb-grid-5 .cb-article-meta .cb-byline,.cb-grid-6 .cb-article-meta .cb-byline{padding:5px 10px}.inner-header-container h1.entry-title{font-size:1.8em}.five_sixth,.four_fifth,.one_fifth,.one_fourth,.one_half,.one_sixth,.one_third,.three_fifth,.three_fourth,.two_fifth,.two_third{position:relative;margin-right:0;float:none;width:100%;margin-bottom:30px}}@media (max-width:480px){.inner-header-container{height:200px}.inner-header-container img.wp-post-image{position:absolute;width:auto;height:100%;z-index:1;top:50%;margin-top:-100px;left:50%;margin-left:-230px}.inner-header-container .publisher img{width:70px}.inner-header-container h1.entry-title{font-size:1.7em}}@media (max-width:400px){h2{font-size:1.6rem}.article_holder.mk_tle,.article_holder.mk_tlo{width:100%;height:200px}.mk_gi img{min-height:200px;width:auto;min-width:100%}.cb-grid-img.nofade img{left:-200px}.footer-first-line li{width:98%}.fsl-list li{margin:0}.inner-header-container h1.entry-title{font-size:1.6em}.cb-post-pagination a{min-width:250px}}@media (max-width:320px){.inner-header-container h1.entry-title{font-size:1.5em}.cb-post-pagination a{min-width:220px}}@media (min-width:769px){.entry-content-article{min-height:700px}}
hr {border: none;height: 1px;background: #ccc;}
.single .entry-content h2 {border-bottom: 1px solid #404040;}
.single .entry-content h3 {font-size: 2rem; border-bottom: 1px solid #404040;}
.single .entry-content p {clear: both; text-align: left!important;}
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
.footer-second-line .col-9 .widget-wrapper {text-align: left; float: left; padding:  0 0.5em 0 0; box-sizing: border-box; width: 25%}
.footer-second-line .col-9 p {margin-top: 5px;}
.footer-second-line .col-3 .textwidget {color: #fff; float: left; text-align: left;}
.footer-second-line .col-3 .textwidget span, .footer-second-line .col-5 .textwidget small {color: #fff;}
.footer-second-line .col-3 .textwidget p {color: #fff; margin: 0;}
.footer-second-line .col-3 .textwidget + .textwidget {width: 60%;}
.footer-second-line .col-3 .textwidget + .textwidget + .textwidget {float: right}
.footer-second-line .col-3 .textwidget img {margin-top: 7px;max-width:120px !important;}
.textwidget small {color: white;}
.footer-second-line .widget-wrapper {text-align: left;}
.footer-second-line .custom-html-widget p {font-size: 12px;}
.widget-title {color: white;font-weight: bold;border-bottom: 1px solid white;font-size: 0.9em;display: inline-block;margin-bottom: 6px;}
#footerSignup {
    background: #FFF;
    color: #000;
    text-transform: uppercase;
    padding: 8px 11px 6px 11px;
    width: 100%;
    font-family: alternate-gothic-no-3-d, Helvetica, Arial, Tahoma, Verdana, sans-serif;
    font-size: 16px;
    text-align: center;
    font-weight: bold;
    margin-top: 13px;
    -webkit-appearance: none;
    border: 0;
}
.footer-third-line p {text-align: center;}
.footer-third-line {background: #000;padding-left:5em;padding-right:5em;font-size: 0.8rem;color: #ccc;}
.fsl-list {padding: 0;margin: 10px 0 15px -10px;}
.footer-second-line {padding: 2em 5em 2em;}
.fsl-list li {margin: 0;}
.follow_us {font-size: 1em;color: #ccc;}
.fsl-list li a { height: 30px; width: 30px;background: url(/wp-content/themes/thegm/img/new_social_icons.png) no-repeat;opacity: 0.7;}
.fsl-list li a:hover {opacity: 1;}
.fsl-list li.pin a { background-position: -40px 0;}
.fsl-list li.ins a {background-position: -80px 0;}
.fsl-list li.tw a {background-position: -121px 0;}
.fsl-list li.gp a { background-position: -165px 0;}
.col-2.t-menu {margin: 0.5rem 0;float: right;}
.instagram-media {margin: 0 auto !important;}
footer p {font-size: 0.8rem;color: #ccc;}
footer p a {color: #ccc;}
footer.site-footer {background-color: #222;}
footer .col-7 p {margin-top: 0;}
header.site-header nav ul li a {font-size: 1.5em;font-family: 'Pathway Gothic One', sans-serif;}
header.site-header  {box-sizing: border-box;}
.msw {text-indent: -9999px;width: 34px;position: relative;display: block;height: 11px; float: right;margin-top: 11px;}
.msw::after {content:""; height: 3px; position: absolute; width: 100%;top:7px; background: #fff; left: 0; }
header .logo.col-2 {margin-left: 0;}
header .nav-h.col-8 { width: 68.66%;}
.menu-sidebar-inner h6 { color: #fff; margin: 20px 0; text-transform: uppercase;  padding-bottom: 5px;  font-size: 1.4em;  border-bottom: 1px solid #fff;}
.home .mk_posts {margin-bottom: 1px;}
 .menu-sidebar-inner { background-color: #111; }

 .share-buttons {position: fixed; top: 45%; left: 0;}
.share-buttons ul {display: block;}
.share-buttons li {display: block;}
.share-buttons li a { height: 40px; width: 40px;display: block; text-indent: -99999px;background: url(/wp-content/themes/thegm/img/new_social_icons.png) no-repeat #000; opacity: 0.93;}
.share-buttons li a:hover {opacity: 1;}
.share-buttons li.fb a {background-position: 0 5px;background-color: #4267b2;}
.share-buttons li.tw a {background-position: -121px 5px;background-color: #1da1f2;}
.share-buttons li.gp a { background-position: -165px 5px;background-color: #dd5144;}
@media (max-width: 780px) {.share-buttons {display: none;}}

/*Styles for a Cut-off-advertise*/
.cut-off-item {display: -webkit-box;display: -ms-flexbox;display: flex;}

/*New Post Template*/
.single .relatedposts-container, .single  .d-a-block   {padding-left:5em;padding-right:5em;}
.single .d-a-block  {padding-top: 3em;}
.single .mk_related_caption {text-align: left;font-size: 2em;}
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
.single #secondary .mk_related_caption {margin-top: 0;font-weight: 400;text-transform: inherit;}
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
.single .inner-header-container img.wp-post-image {height: auto; max-width: 900px; min-height: 500px;width: auto;left: 50%;margin-left: -450px;}
.single .inner-header-container .publisher img, .cb-cat-header .publisher img  {width: 60px; position: absolute;bottom: 0;right: 1.2em;}
.cb-cat-header .publisher img {bottom: 20px !important;}
.single #secondary .article_holder .cb-article-meta h4, .single #secondary .article_holder .cb-article-meta h4 a {font-family: 'Pathway Gothic One', sans-serif;}
.single .entry-meta h1, .single .entry-content h2, .single .entry-content h3, .single .entry-content h4, .single .entry-content h5, .single #secondary .mk_related_caption, .single .mk_related_caption, .single .article_holder .cb-article-meta h4 a {font-family: 'Pathway Gothic One', sans-serif;}
.single .article_holder .cb-article-meta h4 {font-size: 1.1em;line-height: 1.5;}
.single .article_holder .cb-article-meta h4 a {font-size: 0.85em;line-height: 1;}
.single aside .article_holder .cb-article-meta h4 a {font-size: 1.3em;line-height: 1;}
.single .entry-content  h2, .single .entry-content  h3 { font-size: 2rem;color: #000; font-weight: 600; border-bottom: 1px dotted #555;}
.single .entry-content  h3  { font-size: 2rem; margin: 2em 0 1.5em;}
.page-template-newmain-page-php .grid-f {padding-bottom: 4em;}
.page-template-newmain-page-php .grid-f h3  { margin: 0.5em 0 0;}
.page-template-newmain-page-php .grid-f h3 a { font-family: 'Pathway Gothic One', sans-serif;  font-weight: 600;line-height: 1.2;font-size: 0.8em;  text-decoration: none;}
.page-template-newmain-page-php .title-f {text-align: center;font-family: 'Pathway Gothic One', sans-serif;}
.page-template-newmain-page-php .title-f h6, .page-template-newmain-page-php .title-f h1 {margin: 1em 0;position: relative;font-family: 'Pathway Gothic One', sans-serif; font-size: 2.5em;line-height: 0.8; text-transform: uppercase; font-weight: 900;}
.page-template-newmain-page-php  .post-categories {padding: 0; margin: 0; display:inline;}
.page-template-newmain-page-php  .post-categories li {display: inline; list-style: none;}
.page-template-newmain-page-php .breadcrumbs a {font-size: 1em;}
.page-template-newmain-page-php .title-f h6::before, .page-template-newmain-page-php .title-f h1::before {position: absolute;content: '';height: 1px;background: #ccc;left: 0;top: 32px;width: 100%; z-index: -1;}
.page-template-newmain-page-php .title-f h6 span, .page-template-newmain-page-php .title-f h1 span { font-family: 'Pathway Gothic One', sans-serif;  font-weight: 900;background: #fff;padding: 0 30px;display: inline-block;}
.page-template-newmain-page-php .title-f  small {display: block; font-size: 0.55em;font-family: 'Pathway Gothic One', sans-serif;color: #777; text-transform: none; }
.page-template-newmain-page-php .max  h3 a  {font-size: 1.3em;}
.page-template-newmain-page-php .max  h3 {margin: 0.5em 0 0em;}
.page-template-newmain-page-php .max p{margin: 0.5em auto; font-size: 1em;}
.page-template-newmain-page-php .latest .col-6 {margin-bottom: 2em;display: inline-block;vertical-align: top;float: none;margin: .5rem  1.85%;}
.page-template-newmain-page-php .entry-meta-details span {font-size: 1em;}
.page-template-newmain-page-php .bp-2 .col-6 {margin-bottom: 1.5em;}
.container.grid-f {width: 100%;max-width: 86rem;}
.f-h1 {position: absolute; z-index: -1; color: #999;}
.page-template-default .entry-title {font-family: 'Pathway Gothic One', sans-serif;font-weight: 900;}
.page-template-default .entry-content {max-width: 1320px;margin: 0 auto;box-sizing: border-box;width: 100%;padding: 0 9em 3em !important;}

.essb_links .essb_icon::before, .essb_links li a .essb_network_name {color: #fff;}
.category-layout-v2 .cb-cat-header  {height: 25rem;padding: 0 5em;box-sizing: border-box;position: relative;background-size: cover !important}
.category-layout-v2  #cb-cat-title {color: #666;position: relative;padding-top: 18rem;text-align: left;font-family: 'Pathway Gothic One', sans-serif; font-size: 3.5em; margin: 0;}
.category-layout-v2 .cb-cat-desc {padding: 1em 5em;box-sizing: border-box;}
.category-layout-v2 .cb-cat-desc h2 {font-family: 'Pathway Gothic One', sans-serif; }
.p-cont-r {max-width: 1200px;    margin: 0 auto;    box-sizing: border-box;    width: 100%;    padding: 0 2rem;    overflow: hidden;}
.p-cont-r h3 a {font-size: 1.5em;line-height: 1.3;}
.p-cont-r h3.entry-title {margin: 0 0 15px;}
.p-cont-r h1, .p-cont-r h2, .p-cont-r h3, .p-cont-r h4, .p-cont-r h5, .p-cont-r h6, .p-cont-r h3 a{font-family: 'Pathway Gothic One', serif; font-weight: bold;}
.p-cont-r h3 a:hover {color: #111;}
.p-cont-r a {text-decoration: none !important}
.image-p img {width: 100%; height: auto;}
.image-p {float: right !important;}
.p-cont-r  article	{padding: 1.5em 0 0.5em;border-bottom: 1px dotted #555;}
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
 .cb-cat-flex{padding:0 5em;box-sizing:border-box;position:relative;display:flex;margin:25px auto 0; font-family: 'Pathway Gothic One', sans-serif!important;}
 .cb-cat-container{max-width:75rem;margin-left:auto;margin-right:auto;padding:0 2rem!important;box-sizing: border-box;}
 .cb-cat-flex a{text-decoration:none;display:block;font-family: 'Pathway Gothic One', sans-serif;font-weight: 700;line-height: 1.1;}
 .cb-cat-flex p{font-size:1em;line-height:1.2;}
 .cb-cat-flex .cb-flex-right{width:50%}.cb-cat-flex .cb-flex-right .cb-flex-image{position:relative}
 .cb-cat-flex .cb-flex-right .cb-flex-image h1{position:absolute;bottom:0;padding:10px 20px;background-color:#222222b8;color:white;text-transform:uppercase;transition-duration: 0.6s;}
 /*.cb-cat-flex .cb-flex-right .cb-flex-image h1:hover {background-color: #ffffffd8;color: black;}*/
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
 .cb-cat-flex .cb-flex-left .cb-cat-item-text a h3{font-size: 1.5em;margin: 0;line-height: 1.1;}
 .cb-cat-flex .cb-flex-left .cb-cat-item-text p{font-size:1em;line-height:1.2;margin-top:.4rem}
 .category-posts-wrap #load_more_latest_cats{margin-bottom: 20px;}
 .h4{font-size:2em;font-weight:400;font-family: 'Pathway Gothic One', sans-serif;margin:0}

 /*new category template*/
@media (max-width: 1390px) {
.single header.entry-header .entry-meta {padding: 0 4em 0 0;}
.single .inner-header-container {  height: 500px;}
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
.footer-second-line .col-5 .textwidget img { max-width: 100px !important;}
.d-a-block img {max-width: 100%;}
header.site-header nav ul li a { font-size: 1em;}
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
#masthead  .col-2.t-menu {float: right;}
.single main#main .entry-content {    padding: 0;}
.single header.entry-header .entry-meta {padding: 0 1em 0;}
.single .relatedposts-container, .single .d-a-block { padding-left: 1em;  padding-right: 1em;}
.category-layout-v2 .cb-cat-header {height: 15rem;}
.category-layout-v2 #cb-cat-title {font-size: 2.5em;padding-top: 10rem;}
.cb-cat-desc p {display: none;}
.category-layout-v2 .cb-cat-desc h2 {border-bottom: 1px dotted #555;margin-bottom: 0;}
.page-template-newmain-page-php .title-f h6, .page-template-newmain-page-php .title-f h1  {font-size: 1.5em;}
.page-template-default .entry-content {padding: 0 2em 3em !important;}
.cb-cat-flex {flex-wrap: wrap; margin: 0 auto 0;}
.cb-cat-flex .cb-flex-right,.cb-cat-flex .cb-flex-left {width: 100%;}
.cb-cat-flex .cb-flex-right .right-text-group {padding: 1.25rem; padding-top:0;}
.cb-cat-flex .cb-flex-right .cb-flex-image {max-width: 500px;margin: 0 auto;}
}
@media (max-width: 480px) {
.single .inner-header-container img.wp-post-image {

    margin-left: -350px;
    margin-top: -15%;
    top: 0;

}
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
.load_more_latest_posts, .load_more_latest_cats {text-transform: uppercase; position: relative; overflow: hidden; cursor:pointer;width: 300px;margin: 20px auto 0;display: block;background: #000;border: 0;color: #fff;padding: 10px;font-size: 20px;}
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
header.site-header {background: #000;}
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
.post-template-single-v2-php #secondary .article_holder .cb-article-meta h4, .post-template-single-v2-php #secondary .article_holder .cb-article-meta h4 a {font-family: 'Pathway Gothic One', sans-serif;}
.post-template-single-v2-php .entry-meta h1, .post-template-single-v2-php .entry-content h2, .post-template-single-v2-php .entry-content h3, .post-template-single-v2-php .entry-content h4, .post-template-single-v2-php .entry-content h5, .post-template-single-v2-php #secondary .mk_related_caption, .post-template-single-v2-php .mk_related_caption, .post-template-single-v2-php .article_holder .cb-article-meta h4 a {font-family: 'Pathway Gothic One', sans-serif;}
.post-template-single-v2-php .article_holder .cb-article-meta h4 {font-size: 1.1em;}
.post-template-single-v2-php .article_holder .cb-article-meta h4 a {font-size: 0.85em;line-height: 1;}
.post-template-single-v2-php aside .article_holder .cb-article-meta h4 a {font-size: 1.07em;line-height: 1;}
.post-template-single-v2-php .entry-content  h2, .post-template-single-v2-php .entry-content  h3 { font-size: 1.5rem;color: #000; font-weight: 600; border-bottom: 1px dotted #555;}
.post-template-single-v2-php .entry-content  h3  { font-size: 1.3rem; margin: 2em 0 1.5em;}
.page-template-newmain-page-php .grid-f, .page-template-front-page .grid-f {padding-bottom: 4em;}
.page-template-newmain-page-php .grid-f h3, .page-template-front-page .grid-f h3  { margin: 0.5em 0 0;}
.page-template-newmain-page-php .grid-f h3 a, .page-template-front-page .grid-f h3 a { font-family: 'Pathway Gothic One', sans-serif;  font-weight: 600;line-height: 1.2;font-size: 1em;  text-decoration: none;}
.page-template-newmain-page-php .title-f, .page-template-front-page .title-f {text-align: center;font-family: 'Pathway Gothic One', sans-serif;}
.page-template-newmain-page-php .title-f h6, .page-template-newmain-page-php .title-f h1, .page-template-front-page .title-f h6, .page-template-front-page .title-f h1 {margin: 1em 0;position: relative;font-family: 'Pathway Gothic One', sans-serif; font-size: 2.5em;line-height: 0.8; text-transform: uppercase; font-weight: 900;}
.page-template-newmain-page-php  .post-categories, .page-template-front-page .post-categories {padding: 0; margin: 0; display:inline;}
.page-template-newmain-page-php  .post-categories li, .page-template-front-page .post-categories li {display: inline; list-style: none;}
.page-template-newmain-page-php .breadcrumbs a, .page-template-front-page .breadcrumbs a {font-size: 1em;}
.page-template-newmain-page-php .title-f h6::before, .page-template-newmain-page-php .title-f h1::before,
.page-template-front-page .title-f h6::before, .page-template-front-page .title-f h1::before  {position: absolute;content: '';height: 1px;background: #ccc;left: 0;top: 32px;width: 100%; z-index: -1;}
.page-template-newmain-page-php .title-f h6 span, .page-template-newmain-page-php .title-f h1 span,
.page-template-front-page .title-f h6 span, .page-template-front-page .title-f h1 span { font-family: 'Pathway Gothic One', sans-serif;  font-weight: 900;background: #fff;padding: 0 30px;display: inline-block;}
.page-template-newmain-page-php .title-f  small, .page-template-front-page .title-f  small {display: block; font-size: 0.55em;font-family: 'Pathway Gothic One', sans-serif;color: #777; text-transform: none; }
.page-template-newmain-page-php .max  h3 a, .page-template-front-page .max  h3 a  {font-size: 1.3em;}
.page-template-newmain-page-php .max  h3, .page-template-front-page .max  h3  {margin: 0.5em 0 0em;}
.page-template-newmain-page-php .max p, .page-template-front-page-php .max p {margin: 0.5em auto; font-size: 1em;}
.page-template-newmain-page-php .latest .col-6, .page-template-front-page-php .latest .col-6 {margin-bottom: 2em;display: inline-block;vertical-align: top;float: none;margin: .5rem  1.85%;}
.page-template-newmain-page-php .entry-meta-details span, .page-template-front-page-php .entry-meta-details span {font-size: 1em;}
.page-template-newmain-page-php .bp-2 .col-6, .page-template-front-page-php .bp-2 .col-6 {margin-bottom: 1.5em;}
.container.grid-f {width: 100%;max-width: 86rem;} 
.f-h1 {position: absolute; z-index: -1; color: #999;}
.page-template-default .entry-title {font-family: 'Pathway Gothic One', sans-serif;font-weight: 900;}
.page-template-default .entry-content {max-width: 1320px;margin: 0 auto;box-sizing: border-box;width: 100%;padding: 0 9em 3em !important;}

a.icon-pinterest {cursor: pointer !important;}

.single .relatedposts-container .inter-t { max-width: 1320px;  margin: 0 auto;  box-sizing: border-box; width: 100%; padding: 0;} 
.single .relatedposts-container .inter-t .article_holder {width: 49%;}
.single .relatedposts-container .inter-t .article_holder.mk_gi img {max-height: 110px;}
.single .relatedposts-container .inter-t .article_holder .cb-grid-img {width: 110px;}
.single .relatedposts-container .inter-t .cb-article-meta { width: calc(100% - 130px);}
.single .relatedposts-container .inter-t .article_holder .cb-article-meta h4 a { font-size: 1.5em; line-height: 1;}
.single .relatedposts-container { padding-left: 0; padding-right: 0;  margin-bottom: 25px;}

.buy-now-button {display: inline-block; padding: 10px 20px;background: #000;color: #fff; text-transform:uppercase;text-decoration: none;font-family: 'Pathway Gothic One', sans-serif;font-weight: 600;font-size: 1.3em;}
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
/*single-bottom*/
#single-bottom  .inter-t .article_holder {width: 100%;}
#single-bottom .article_holder .cb-grid-img{float: left;}
#single-bottom .article_holder .cb-grid-img {padding:0; margin:0;}
#single-bottom .article_holder {margin:0;padding: 0; border: 0;}
#single-bottom  .inter-t .article_holder .cb-grid-img {width: 320px;}
#single-bottom  .inter-t .article_holder.mk_gi img {max-height: inherit; width: 100%;}
#single-bottom .inter-t .cb-article-meta {width: calc(100% - 330px); padding-left: 20px;}


.read-next {
    font-family: 'Pathway Gothic One';
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
#rf-posts .rf-item {flex: 50%; position: relative;}
#rf-posts img {width: 100%;height: auto;display: block;}
.rf-grid-img.nofade {
    position: relative;
}

.rf-article-meta {
    position: absolute;
    bottom: 0;
    height: 100%;
    width: 100%;
    box-shadow: inset 13px 0px 100px 10px black;
}

.rf-article-meta .h4-foot-replacement {
	font-weight: bold;
    padding: 0 25px;
    width: 100%;
    display: block;
    box-sizing: border-box;
    text-align: center;
    color: white;
    font-family: 'Pathway Gothic One';
    text-decoration: none;
    font-size: 36px;
    line-height: 40px;
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
    font-weight: bold;
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

/*PINTEREST BUTTON DESIGN*/
.social-links {
    position: relative;
    text-align: center;
    width: 100%;
    z-index: 1;
}
.social-links .icon-pinterest {
	width: 120px;
    height: 42px;
    border-radius: 0;
    background-size: cover;
    background-position: top center;
    text-indent: -99999999px;
    display: inline-block;
    margin: 0;
    box-sizing: border-box;
    background-image: url(/wp-content/themes/thegm/img/pin-it.png);
    border: 0px solid white;
}
.icon-facebook {
	display: none!important;
}
.breadcrumbs.entry-meta-details span, .breadcrumbs.entry-meta-details a {
	font-size: 12.8px;
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

.sidebar-heading a{
	font-family: 'Pathway Gothic One', sans-serif;
	font-size: 1.2em;
	line-height: 1.2;
	text-align: left;
    padding: 0;
    margin: 0;
    text-decoration: none;
}

/* AUTHOR STYLES */
.author-details.cb-cat-container {margin-top: 50px;margin-bottom: 50px;margin-left: 10%;margin-right: 10%;}
.author-col {display: inline-block;vertical-align: middle;}
.author-col:nth-child(1) {

}
.author-col:nth-child(2) {
    width: calc(100% - 210px);
}
.author-col h1 {margin: 10px 0;line-height: 1;}
.author-image {border-radius: 0;max-width: 25%;margin: 22px 12px 12px 0px; display: inline-block;float:left;}
.author-roles {margin-top: 3px;font-weight: bold;font-style: italic;font-size: 14px;text-transform: uppercase;}
.author-roles-item {margin-right: 20px;}
.author-list li {background-color: black;}
.fsl-list.author-list {display: inline-block;}
.fsl-list.author-list li a {
  opacity: 1;
}
.fsl-list.author-list li.wbsite svg {
  margin-top: 5px;
  margin-left: 5px;
}
.fsl-list.author-list li.ins a {
    background-position: -83px 0;
}
.fsl-list.author-list li.pin a {
    background-position: -43px 0;
}
.fsl-list.author-list li.fb a {
    background-position: -3px 0;
}
.fsl-list.author-list li.ldn a {
    background-image: url(/wp-content/themes/thegm/img/linkedin.png);
    background-size: 100%;
    background-position: center;
}
.single .entry-content .faq h3 {
    font-weight: normal;
    border-bottom: none;
    margin: 0;
    font-size: 2rem;
}
@media screen and (max-width: 780px) {
  .author-col:nth-child(1) {
      width: 100%;
  }
  .author-col:nth-child(2) {
      width: 100%;
  }
}

.imgsource {
	display: block;
    font-family: 'Pathway Gothic One', sans-serif;
    font-size: 0.8rem;
}
a.author-modify {
	font-size: 12px;
}

strong {
	font-weight: bold;
}



header.site-header, .footer-third-line, .category-layout-v2 .cb-cat-header { padding: 0 1em; transition-duration: 0.7s; }

@media screen and (max-width: 768px) {
	.author-col{text-align: justify;}.author-col h1{text-align:center}.author-roles{text-align:center}.author-image { max-width: 100%; display: block; margin: auto; float: none;}
.author-roles-item{display:block; margin: auto}.fsl-list.author-list{margin-left: 0}
	.widget-title {
		display: block;
	}
	.footer-second-line .col-3 .textwidget {
		float: none;
	}
}

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
.single .inner-header-container img.wp-post-image {  margin-top: 0; position: relative; width: 100%; height: auto; min-height: 500px; top: auto; left: auto; margin-left: 0; object-fit: cover}
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
#masthead  .col-2.t-menu {float: right;}
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
.rf-article-meta .h4-foot-replacement {font-size: 28px;line-height: 40px;bottom:0;margin-bottom: 18px;}
.related_middle_static span.related_middle_span {margin-top: 0; display:inline;}
.related_middle_static .related_middle_img {margin-right: 13px;}
ul.rel-array .rel-img-wrapper {width: 50%;}
ul.rel-array li > a {padding-left: 10px;font-size: 16px;width: calc(50% - 5px);line-height: normal;}
.only-mobile-flex-ad{display: block;position: fixed;width: 100%;height: 50px;background-color: #ffffffb8;bottom:0;left: 0;z-index: 99999;}
.entry-content tr, .entry-content td, .entry-content table, .entry-content tbody {
    display: block;
    width: auto;
    height: auto!important;
}
.footer-second-line .col-9 .widget-wrapper {
	width: 50%;
	margin-top: 30px;
}
}

@media (min-width: 769px) {
	footer .row .col-7 {
	    margin-left: 0;
	}
	.footer-second-line {
		padding: 0;
	}
	.single .relatedposts-container .inter-t {
		padding: 0;
	}
}

</style>


   <script type="text/javascript">
	    var hasScrolled;
	    window.addEventListener('scroll', function ( event ) {
	        if (!hasScrolled) {

	          hasScrolled=true;
	          //load tracking pixels
	          var trackingJs = document.createElement('script');
	          trackingJs.type="text/javascript";
	          trackingJs.async=" ";
	          trackingJs.defer=" ";
	          trackingJs.src = '/wp-content/themes/thegm/js/tracking.js?20151127';
	          document.head.appendChild(trackingJs);
	          
	          //Load ads - <!-- AdApex HB Tags -->
	          var adsJs = document.createElement('script');
	          adsJs.type="text/javascript";
	          adsJs.async=" ";
	          adsJs.defer=" ";
	          adsJs.src = 'https://cdn.adapex.io/hb/aaw.mhc.js';
	          document.head.appendChild(adsJs);

	          //Load ads - AdApex CMP Tags
	          var adsJs2 = document.createElement('script');
	          adsJs2.type="text/javascript";
	          adsJs2.async=" ";
	          adsJs2.defer=" ";
	          adsJs2.src = '//get.s-onetag.com/d7c59a09-9ce7-4599-8910-3786caa6d354/tag.min.js';
	          document.head.appendChild(adsJs2);

	          //<!-- Sovrn CMP Stub -->
	          (function (window, document) {
			    if (!window.__cmp) {
			        window.__cmp = (function () {
			            var listen = window.attachEvent || window.addEventListener;
			            listen('message', function (event) {
			                window.__cmp.receiveMessage(event);
			            }, false);

			            function addLocatorFrame() {
			                if (!window.frames['__cmpLocator']) {
			                    if (document.body) {
			                        var frame = document.createElement('iframe');
			                        frame.style.display = 'none';
			                        frame.name = '__cmpLocator';
			                        document.body.appendChild(frame);
			                    } else {
			                        setTimeout(addLocatorFrame, 5);
			                    }
			                }
			            }

			            addLocatorFrame();

			            var commandQueue = [];
			            var cmp = function (command, parameter, callback) {
			                if (command === 'ping') {
			                    if (callback) {
			                        callback({
			                            gdprAppliesGlobally: !!(window.__cmp && window.__cmp.config && window.__cmp.config.storeConsentGlobally),
			                            cmpLoaded: false
			                        });
			                    }
			                } else {
			                    commandQueue.push({
			                        command: command,
			                        parameter: parameter,
			                        callback: callback
			                    });
			                }
			            };
			            cmp.commandQueue = commandQueue;
			            cmp.receiveMessage = function (event) {
			                var data = event && event.data && event.data.__cmpCall;
			                if (data) {
			                    commandQueue.push({
			                        callId: data.callId,
			                        command: data.command,
			                        parameter: data.parameter,
			                        event: event
			                    });
			                }
			            };
			            cmp.config = {};
			            return cmp;
			        }());
			    }
			  })(window, document);

		    }
		}, false);
  </script>
</body>
</html>
