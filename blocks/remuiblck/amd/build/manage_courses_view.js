"use strict";define(["jquery","core/ajax","core/notification","core/templates","theme_remui/slick"],function(s,r,a,c){var l='[data-region="manage-courses-list"]',o='.coursemenubtn[data-region="managecourses"]',d="[data-region-pages]",u=function(e,t,o){return r.call([{methodname:"block_remuiblck_get_manage_courses_list",args:{type:e,perpage:t,currentpage:o}}])[0]},g="block_remuiblck/manage_courses_list_items";return{init:function(e){!function(e){s("body").on("click",e+" "+o,function(){s(this).next().toggleClass("show")}).on("click",function(t){s("body").find(e+" "+o).each(function(e){s(this).is(t.target)||s(this).is(s(t.target).parent())||s(this).next().removeClass("show")})})}(e)},loadCourses:function(o,e,t,r){var i=1<arguments.length&&void 0!==e?e:"card",n=3<arguments.length&&void 0!==r?r:1;u(i,2<arguments.length&&void 0!==t?t:5,n).done(function(t){0!=t.courses.length&&((t=function(e){return e.enrollink=M.cfg.wwwroot+"/user/index.php?id=",e.enroltitle=M.util.get_string("enrolusers","core_enrol"),e.graderreportlink=M.cfg.wwwroot+"/grade/report/grader/index.php?id=",e.graderreporttitle=M.util.get_string("graderreport","core_grades"),e.activityreportlink=M.cfg.wwwroot+"/report/outline/index.php?id=",e.activityreporttitle=M.util.get_string("activityreport","moodle"),e.editcourselink=M.cfg.wwwroot+"/course/edit.php?id=",e.editcoursetitle=M.util.get_string("editcourse","theme_remui"),e.coursereporttitle=M.util.get_string("coursereport","moodle"),e.courseviewlink=M.cfg.wwwroot+"/course/view.php?id=",e}(t))[i]=!0,s(o).find(l).data("currentpage",n),s(o).find(l).data("totalcourses",t.totalcourses),s(o).find(l).data("totalpages",t.totalpages)),c.render(g,t).done(function(e){s(o).find(l).html(e).attr("data-type",i),s(o).find(d).text(M.util.get_string("showingfromto","block_remuiblck",{start:t.start,to:t.end,total:t.totalcourses})),"card"==i&&function(){var o=["#f2a654","#fe6768","#57c7d4","#56c19a","#526069","#46657d"];s(".wdm-course-card-body").each(function(e,t){o.length<=e?e%=o.length:e=e,s(t).css("background-color",o[e])}),s(".dashboard-card-deck").css("overflow","unset"),s(".dashboard-card-deck").not(".slick-initialized").each(function(e,t){s(t).slick({dots:!1,arrows:!0,infinite:!1,rtl:"rtl"==s("html").attr("dir"),opacity:0,speed:500,slidesToShow:4,slidesToScroll:4,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:800,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),s(window).trigger("resize")})}()}).fail(a.exception)}).fail(a.exception)}}});