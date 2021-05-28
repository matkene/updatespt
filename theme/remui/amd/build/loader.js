define(["jquery","./tether","./babel-external-helpers","./breakpoints"],function(y,e,n){window.jQuery=y,window.Tether=e,window.babelHelpers=n,require(["theme_remui/bootstrap","theme_remui/jquery-mousewheel","theme_remui/jquery-asScrollbar","theme_remui/jquery-asScrollable","theme_remui/jquery-asHoverScroll","theme_remui/screenfull","theme_remui/jquery-slidePanel","theme_remui/Base","theme_remui/Plugin","theme_remui/Config","theme_remui/Menubar","theme_remui/Sidebar","theme_remui/PageAside","theme_remui/menu","theme_remui/asscrollable","theme_remui/slidepanel","theme_remui/skintools","core/str","theme_remui/RemUI","theme_remui/notice"],function(e,n,i,o,t,a,r,s,d,u,l,m,c,g,h,f,p,_,b,w){b.run();var v=[];function C(){if(!y('.site-sidebar-nav a[href="#sidebar-message"]').length)return"";var e=y('.site-sidebar-nav a[href="#sidebar-message"] span[data-region="count-container"]').hasClass("hidden"),n=y('.site-sidebar-nav a[href="#sidebar-message"] span[data-region="count-container"]').html();e?(y(".unread-count-sidebarbutton").addClass("hidden"),y(".unread-count-sidebarbutton").html("0")):y(".unread-count-sidebarbutton").html(n)}_.get_strings([{key:"pinsidebar",component:"theme_remui"},{key:"unpinsidebar",component:"theme_remui"}]).done(function(e){v=e}),y(".page-aside-pin").click(function(){!function(){y("body").hasClass("pinaside")?(y("body").removeClass("pinmargin"),y("body").removeClass("pinaside"),y(".page-aside").removeClass("opencustom"),C(),w.info(M.util.get_string("sidebarunpinned","theme_remui")),$(".page-aside-pin i").prop("title",v[0]),M.util.set_user_preference("pin_aside","")):(y("body").addClass("pinaside"),y(".page-aside").addClass("opencustom"),w.info(M.util.get_string("sidebarpinned","theme_remui")),$(".page-aside-pin i").prop("title",v[1]),M.util.set_user_preference("pin_aside","pinaside"));y(window).trigger("resize")}()}),y(".page-aside-switch-lg .wb-chevron-left").click(function(){y(".page-aside").hasClass("opencustom")||(y(".page-aside").addClass("opencustom"),y("body").removeClass("pinmargin")),y(window).trigger("resize")}),y(document.body).on("click",function(e){if(0===e.button&&y(".page-aside").hasClass("opencustom")&&!y("body").hasClass("pinaside"))(n=e.target)!==e.currentTarget&&y(n).closest(".page-aside, .page-aside-pin, .modal, .alertify, .-handled-lick").length||(y(".page-aside").removeClass("opencustom"),y("body").addClass("pinmargin"),C(),y(window).trigger("resize"));else if(0===e.button&&!y('[data-region="message-drawer"]').hasClass("hidden")){var n,i='[data-region="message-drawer"], [href="#sidebar-message"]';(n=e.target)!==e.currentTarget&&y(n).closest(i).length||(y('[data-region="message-drawer"]').addClass("hidden"),y(i).removeClass("active"))}}),y(".page-aside-switch").click(function(){C()}),y(".page-login-main .fcontainer .form-group").each(function(){var e=y.trim(y(".col-form-label",this).text());y(".felement input",this).attr("placeholder",e)}),y(document).on("click","button.navbar-toggler.collapsed",function(){window.dispatchEvent(new Event("resize"))})}),y("#id_s_theme_remui_courseperpage").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_logoorsitename").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_fontselect").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_frontpageimagecontent").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_frontpagechooser").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_contenttype").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_sliderautoplay").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_slidercount").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_enablefrontpagecourseimg").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_enablesectionbutton").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_enablefrontpageaboutus").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_poweredbyedwiser").change(function(){this.form.submit(),window.onbeforeunload=null}),y("#id_s_theme_remui_navlogin_popup").change(function(){this.form.submit(),window.onbeforeunload=null});var i=1;y(".page-aside .page-aside-switch-lg").click(function(){y(this).next().find(".nav-item .nav-link.active").trigger("click")}),y(".site-menu-toggle").click(function(e){return e.preventDefault(),y(".collapse").toggleClass("show"),y(".site-menu-toggle i").animate({borderSpacing:1==i?(i=0,90):(i=1,0)},{step:function(e){y(this).css("-webkit-transform","rotate("+e+"deg)"),y(this).css("-moz-transform","rotate("+e+"deg)"),y(this).css("transform","rotate("+e+"deg)")},duration:200}),!1}),y("body").on("click","#toggleMenubar a",function(){y(".hidable").hasClass("show")&&y(".hidable").toggleClass("d-none")}),y("#gotop").click(function(){return y("html, body").animate({scrollTop:0},y(window).scrollTop()/6),!1}),y(window).scroll(function(){300<y(this).scrollTop()?y("#gotop").removeClass("d-none").addClass("d-flex"):y("#gotop").removeClass("d-flex").addClass("d-none")}),y("#page-admin-tool-lp-editcompetencyframework #id_scaleconfigbutton").click(function(e){e.preventDefault()}),y(document).on("blur",".form-control.atto_image_urlentry",function(){y(this).parents("form.atto_form").addClass("image-properties")});var o='#nav-message-popover-container .popover-region-toggle [data-region="count-container"]',t='#nav-notification-popover-container .popover-region-toggle [data-region="count-container"]';0==y(o).html()&&y(o).addClass(" hidden"),0==y(t).html()&&y(t).addClass(" hidden")});