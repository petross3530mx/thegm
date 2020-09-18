//<!-- Google Analytics -->

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','__gaTracker');

__gaTracker('create', 'UA-86531295-1', 'auto');
__gaTracker('send', 'pageview');

//<!-- End Google Analytics -->


//<!-- Facebook Pixel Code -->

!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '261121354342508', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');

//<!-- End Facebook Pixel Code -->

//rev Ad
(function() {
if(document.getElementById("rcjsload_c7df76")!==null){
	(function() {
	var referer="";try{if(referer=document.referrer,"undefined"==typeof referer||""==referer)throw"undefined"}catch(exception){referer=document.location.href,(""==referer||"undefined"==typeof referer)&&(referer=document.URL)}referer=referer.substr(0,700);
	var rcds = document.getElementById("rcjsload_c7df76");
	var rcel = document.createElement("script");
	rcel.id = 'rc_' + Math.floor(Math.random() * 1000);
	rcel.type = 'text/javascript';
	rcel.src = "https://trends.revcontent.com/serve.js.php?w=60063&t="+rcel.id+"&c="+(new Date()).getTime()+"&width="+(window.outerWidth || document.documentElement.clientWidth)+"&referer="+referer;
	rcel.async = true;
	rcds.appendChild(rcel);
	})();
}
})();

//content Ad
(function(d) {
if(d.getElementById("contentad368712")!==null){
	(function(d) {
        var params =
        {
            id: "d3164b5d-c9a2-4e26-ba5b-8fff3eb8b335",
            d:  "bG92ZWhhaXJzdHlsZXMuY29t",
            wid: "368712",
            cb: (new Date()).getTime()
        };

        var qs=[];
        for(var key in params) qs.push(key+'='+encodeURIComponent(params[key]));
        var s = d.createElement('script');s.type='text/javascript';s.async=true;
        var p = 'https:' == document.location.protocol ? 'https' : 'http';
        s.src = p + "://api.content-ad.net/Scripts/widget2.aspx?" + qs.join('&');
        d.getElementById("contentad368712").appendChild(s);
    })(document);
}    
})(document);