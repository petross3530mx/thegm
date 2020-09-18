var $ = jQuery;

function popup(e) {
    var t = screen.height / 2 - 200,
        a = screen.width / 2 - 300;
    window.open(e, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=no,width=600,height=400,top=" + t + ",left=" + a)
}
jQuery(document).ready(function() {
    $(".social-links a").click(function(e) {
        e.preventDefault(), e.stopPropagation(), popup($(this).attr("href") ? $(this).attr("href") : $(this).attr("data-pin-href"))
    });
    var e = !1;
    $("#load_more_latest_posts").on("click", function() {
        if (!e) {
            e = !0;
            var t = $(this);
            t.addClass("loading"), $.ajax({
                url: app_ajax.url,
                method: "post",
                data: {
                    action: "load_more_latest_posts",
                    postCount: $(".col-12.latest-post-yet").length
                },
                success: function(a) {
                    e = !1, t.removeClass("loading"), a.success ? ($(a.data.posts_html).insertBefore(t), a.data.new_post_count > 0 ? t.find("span").text("(" + a.data.new_post_count + ")") : t.fadeOut(300)) : (a.data.message && console.log(a.data.message), alert("Something went wrong, please reload page and try again"))
                },
                error: function(e) {
                    console.log(e), alert("Something went wrong, please reload page and try again")
                }
            })
        }
    }), $("#load_more_latest_cats").on("click", function() {
        if (!e) {
            e = !0;
            var t = $(this);
            t.addClass("loading"), $.ajax({
                url: app_ajax.url,
                method: "post",
                data: {
                    action: "load_more_latest_cats",
                    postCount: $(".category-posts-wrap article").length || $(".cb-search-page article").length,
                    catSlug: t.attr("data-slug"),
                    postSearch: t.attr("data-search")
                },
                success: function(a) {
                    e = !1, console.log(a), t.removeClass("loading"), a.success ? ($(a.data.posts_html).insertBefore(t), "" == a.data.posts_html.trim() && t.fadeOut(300)) : (a.data.message && console.log(a.data.message), alert("Something went wrong, please reload page and try again"))
                },
                error: function(e) {
                    console.log(e), alert("Something went wrong, please reload page and try again")
                }
            })
        }
    });
    if(document.getElementsByClassName("sidebar_ad_placement").length > 0){
        window.matchMedia("only screen and (max-width: 920px)").matches || setTimeout(function() {
        var e = document.getElementsByClassName("sidebar_ad_placement"),
            t = document.getElementsByClassName("stick_point"),
            a = (document.getElementsByTagName("article"), document.getElementsByTagName("aside"));

        function o(o) {
            a[o].style.position = "relative";
            var n = parseFloat(a[o].offsetHeight) + a[o].offsetTop - 600,
                s = window.pageYOffset || document.documentElement.scrollTop;
            s + 100 > t[o].offsetTop + t[o].offsetParent.offsetTop && s < n ? (console.log(!0), e[o].style.position = "fixed", e[o].style.top = 10 + document.getElementById("masthead").offsetHeight + "px") : s > n ? (e[o].style.position = "absolute", e[o].style.top = "auto", e[o].style.bottom = "0") : (e[o].style.top = "0", e[o].style.position = "relative")
        }
        window.onscroll = function() {
            for (i = 0; i < t.length; i++) o(i)
        }
        }, 3e3);
    };
    document.getElementsByClassName("sidebar_ad_placement");
    

        var lastScrollTop = 0;
        $(window).scroll(function(event){
           var st = $(this).scrollTop();
           if (st > lastScrollTop && st > 200){
               $('#masthead').addClass('hideup');
           } else {
               $('#masthead').removeClass('hideup');
           }
           lastScrollTop = st;
        });

}), jQuery(window).on("load", function() {
    $(".menu-switcher").on("click", function(e) {
        e.preventDefault(), $("body").toggleClass("menu-active")
    }), $("#menu-sidebar").on("click", function(e) {
        $(e.target).hasClass(".menu-sidebar-inner") || $(e.target).closest(".menu-sidebar-inner").length || $("body").removeClass("menu-active")
    });
    
    $('.flex-header .search img').click(function(){
        $('.search-modal').toggle();
    });

    if($('.wr-static').length){
        if(window.matchMedia("only screen and (min-width: 920px)").matches){
            $(window).on("resize", function () {
                
                    var e = [], h = [], w = [], hh = [], r = [];

                    for (let i = 0; i < 2; i++) {

                         e[i] = $('.wr-static').eq(i).offset().top;
                         h[i] = $('.wr-static').eq(i).height();
                         w[i] = $('.wr-static').eq(i).width();
                         
                         

                        $('.wr-static').eq(i).parent().height($('.bp-l').height());
                        $('.wr-static').eq(i).width(w[i]);

                        $(window).scroll(function(){

                            h[i] = $('.wr-static').eq(i).height();
                            hh[i] = $('.wr-static').eq(i).parent().height();
                            r[i] = hh[i]-h[i];

                            s = $(window).scrollTop();
                            if(s > e[i] && s < (e[i] + r[i])) {
                                $('.wr-static').eq(i).addClass('wr-fixed')
                            } else {
                                $('.wr-static').eq(i).removeClass('wr-fixed')
                            };
                            if(s > (e[i] + r[i])) {
                                $('.wr-static').eq(i).addClass('wr-absolute')
                            } else { 
                                $('.wr-static').eq(i).removeClass('wr-absolute')
                            };
                        });
                        
                    }; 
                }).resize();
        };
    };

    $('#menu-sidebar .menu-item-has-children > a').click(function(){
        $(this).next().toggle();
    });

    /*
     * Show next and previous button
     * after scrolling a 50% of post
     * added: 18.11.2019, november
     */
    if(document.querySelectorAll('.post-nav').length > 0){
        var scrollTimer = null;

        function showNavi() {
            scrollTimer = null;
            let s = window.pageYOffset || document.documentElement.scrollTop;
            let i = document.getElementById('main').offsetHeight;
            s > i/2 ? document.querySelectorAll('.post-nav').forEach((elem)=> elem.classList.add("showing")):'';
        };

        function naviHandler(){
            if (scrollTimer) { clearTimeout(scrollTimer); };
            scrollTimer = setTimeout(showNavi, 500);
        }
        
        window.addEventListener('scroll', naviHandler);
    };
});