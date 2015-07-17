// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
$(function(){
    /*
     Allows you to add data-method="METHOD to links to automatically inject a form with the method on click
     Example: <a href="{{route('customers.destroy', $customer->id)}}" data-method="delete" name="delete_item">Delete</a>
     Injects a form with that's fired on click of the link with a DELETE request.
     Good because you don't have to dirty your HTML with delete forms everywhere.
     */
    $('[data-method]').append(function(){
        return "\n"+
        "<form action='"+$(this).attr('href')+"' method='POST' name='delete_item' style='display:none'>\n"+
        "   <input type='hidden' name='_method' value='"+$(this).attr('data-method')+"'>\n"+
        "   <input type='hidden' name='_token' value='"+$('meta[name="_token"]').attr('content')+"'>\n"+
        "</form>\n"
    })
        .removeAttr('href')
        .attr('style','cursor:pointer;')
        .attr('onclick','$(this).find("form").submit();');

    /*
     Generic are you sure dialog
     */
    $('form[name=delete_item]').submit(function(){
        return confirm("Are you sure you want to delete this item?");
    });

    /*
     Bind all bootstrap tooltips
     */
    $("[data-toggle=\"tooltip\"]").tooltip();
    $("[data-toggle=\"popover\"]").popover();
    //This closes the popover when its clicked away from
    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
});
/*! Copyright (c) 2011 Piotr Rochala (http://rocha.la)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.3.6
 *
 */
(function(e){e.fn.extend({slimScroll:function(g){var a=e.extend({width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.4,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:.2,railDraggable:!0,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"},g);this.each(function(){function v(d){if(r){d=d||window.event;
var c=0;d.wheelDelta&&(c=-d.wheelDelta/120);d.detail&&(c=d.detail/3);e(d.target||d.srcTarget||d.srcElement).closest("."+a.wrapperClass).is(b.parent())&&m(c,!0);d.preventDefault&&!k&&d.preventDefault();k||(d.returnValue=!1)}}function m(d,e,g){k=!1;var f=d,h=b.outerHeight()-c.outerHeight();e&&(f=parseInt(c.css("top"))+d*parseInt(a.wheelStep)/100*c.outerHeight(),f=Math.min(Math.max(f,0),h),f=0<d?Math.ceil(f):Math.floor(f),c.css({top:f+"px"}));l=parseInt(c.css("top"))/(b.outerHeight()-c.outerHeight());
f=l*(b[0].scrollHeight-b.outerHeight());g&&(f=d,d=f/b[0].scrollHeight*b.outerHeight(),d=Math.min(Math.max(d,0),h),c.css({top:d+"px"}));b.scrollTop(f);b.trigger("slimscrolling",~~f);w();p()}function x(){u=Math.max(b.outerHeight()/b[0].scrollHeight*b.outerHeight(),30);c.css({height:u+"px"});var a=u==b.outerHeight()?"none":"block";c.css({display:a})}function w(){x();clearTimeout(B);l==~~l?(k=a.allowPageScroll,C!=l&&b.trigger("slimscroll",0==~~l?"top":"bottom")):k=!1;C=l;u>=b.outerHeight()?k=!0:(c.stop(!0,
!0).fadeIn("fast"),a.railVisible&&h.stop(!0,!0).fadeIn("fast"))}function p(){a.alwaysVisible||(B=setTimeout(function(){a.disableFadeOut&&r||y||z||(c.fadeOut("slow"),h.fadeOut("slow"))},1E3))}var r,y,z,B,A,u,l,C,k=!1,b=e(this);if(b.parent().hasClass(a.wrapperClass)){var n=b.scrollTop(),c=b.closest("."+a.barClass),h=b.closest("."+a.railClass);x();if(e.isPlainObject(g)){if("height"in g&&"auto"==g.height){b.parent().css("height","auto");b.css("height","auto");var q=b.parent().parent().height();b.parent().css("height",
q);b.css("height",q)}if("scrollTo"in g)n=parseInt(a.scrollTo);else if("scrollBy"in g)n+=parseInt(a.scrollBy);else if("destroy"in g){c.remove();h.remove();b.unwrap();return}m(n,!1,!0)}}else if(!(e.isPlainObject(g)&&"destroy"in g)){a.height="auto"==a.height?b.parent().height():a.height;n=e("<div></div>").addClass(a.wrapperClass).css({position:"relative",overflow:"hidden",width:a.width,height:a.height});b.css({overflow:"hidden",width:a.width,height:a.height});var h=e("<div></div>").addClass(a.railClass).css({width:a.size,
height:"100%",position:"absolute",top:0,display:a.alwaysVisible&&a.railVisible?"block":"none","border-radius":a.railBorderRadius,background:a.railColor,opacity:a.railOpacity,zIndex:90}),c=e("<div></div>").addClass(a.barClass).css({background:a.color,width:a.size,position:"absolute",top:0,opacity:a.opacity,display:a.alwaysVisible?"block":"none","border-radius":a.borderRadius,BorderRadius:a.borderRadius,MozBorderRadius:a.borderRadius,WebkitBorderRadius:a.borderRadius,zIndex:99}),q="right"==a.position?
{right:a.distance}:{left:a.distance};h.css(q);c.css(q);b.wrap(n);b.parent().append(c);b.parent().append(h);a.railDraggable&&c.bind("mousedown",function(a){var b=e(document);z=!0;t=parseFloat(c.css("top"));pageY=a.pageY;b.bind("mousemove.slimscroll",function(a){currTop=t+a.pageY-pageY;c.css("top",currTop);m(0,c.position().top,!1)});b.bind("mouseup.slimscroll",function(a){z=!1;p();b.unbind(".slimscroll")});return!1}).bind("selectstart.slimscroll",function(a){a.stopPropagation();a.preventDefault();return!1});
h.hover(function(){w()},function(){p()});c.hover(function(){y=!0},function(){y=!1});b.hover(function(){r=!0;w();p()},function(){r=!1;p()});b.bind("touchstart",function(a,b){a.originalEvent.touches.length&&(A=a.originalEvent.touches[0].pageY)});b.bind("touchmove",function(b){k||b.originalEvent.preventDefault();b.originalEvent.touches.length&&(m((A-b.originalEvent.touches[0].pageY)/a.touchScrollStep,!0),A=b.originalEvent.touches[0].pageY)});x();"bottom"===a.start?(c.css({top:b.outerHeight()-c.outerHeight()}),
m(0,!0)):"top"!==a.start&&(m(e(a.start).position().top,null,!0),a.alwaysVisible||c.hide());window.addEventListener?(this.addEventListener("DOMMouseScroll",v,!1),this.addEventListener("mousewheel",v,!1)):document.attachEvent("onmousewheel",v)}});return this}});e.fn.extend({slimscroll:e.fn.slimScroll})})(jQuery);

!function(t){"use strict";function e(t,s,n,i,a,r,l,c){var o,d,f,h,g,p=function(t){r.text(t),r[c?"prepend":"append"](l)};return c?(o=0===i?"":n.slice(-i),d=n.slice(-a)):(o=n.slice(0,i),d=n.slice(0,a)),s<r.html(l)[t]()?0:(p(d),h=r[t](),p(o),g=r[t](),g>h?a:(f=parseInt((i+a)/2,10),o=c?n.slice(-f):n.slice(0,f),p(o),r[t]()===s?f:(r[t]()>s?a=f-1:i=f+1,e(t,s,n,i,a,r,l,c))))}t.fn.truncate=function(s){s&&s.center&&!s.side&&(s.side="center",delete s.center),s&&!/^(left|right|center)$/.test(s.side)&&delete s.side;var n={width:"auto",token:"&hellip;",side:"right",addclass:!1,addtitle:!1,multiline:!1,assumeSameStyle:!1};s=t.extend(n,s);var i,a,r,l;return s.assumeSameStyle&&(a=t(this[0]),i={fontFamily:a.css("fontFamily"),fontSize:a.css("fontSize"),fontStyle:a.css("fontStyle"),fontWeight:a.css("fontWeight"),"font-variant":a.css("font-variant"),"text-indent":a.css("text-indent"),"line-height":a.css("line-height"),"text-transform":a.css("text-transform"),"letter-spacing":a.css("letter-spacing"),"word-spacing":a.css("word-spacing"),display:"none"},r=t("<span/>").css(i).appendTo("body")),this.each(function(){a=t(this),l=a.text(),s.assumeSameStyle?r.text(l):(i={fontFamily:a.css("fontFamily"),fontSize:a.css("fontSize"),fontStyle:a.css("fontStyle"),fontWeight:a.css("fontWeight"),"font-variant":a.css("font-variant"),"text-indent":a.css("text-indent"),"line-height":a.css("line-height"),"text-transform":a.css("text-transform"),"letter-spacing":a.css("letter-spacing"),"word-spacing":a.css("word-spacing"),display:"none"},r=t("<span/>").css(i).text(l).appendTo("body"));var n,c,o,d=r.width(),f=parseInt(s.width,10)||a.width(),h="width";if(s.multiline?(r.width(a.width()),h="height",c=r.height(),o=a.height()+1):(c=d,o=f),n={before:"",after:""},c>o){var g,p;r.text(""),"left"===s.side?(g=e(h,o,l,0,l.length,r,s.token,!0),n.after=l.slice(-1*g)):"center"===s.side?(o=parseInt(o/2,10)-1,g=e(h,o,l,0,l.length,r,s.token,!1),p=e(h,o,l,0,l.length,r,"",!0),n.before=l.slice(0,g),n.after=l.slice(-1*p)):"right"===s.side&&(g=e(h,o,l,0,l.length,r,s.token,!1),n.before=l.slice(0,g)),s.addclass&&a.addClass(s.addclass),s.addtitle&&a.attr("title",l),n.before=r.text(n.before).html(),n.after=r.text(n.after).html(),a.empty().html(n.before+s.token+n.after)}s.assumeSameStyle||r.remove()})}}(jQuery);

$(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });

  if($('.collapsable').is(':visible')){
    $('#test').addClass("col-xs-6 sidebar-offcanvas affix-top visible-xs")
  }
/* activate sidebar */
$('#sidebarAffix').affix({
  offset: {
    top: 60,
    bottom: 80
  }
});
var wheight = $(window).height();
$('#ulScroll').slimScroll({
  height: wheight - (150) + 'px'
});
var $sidebar = $('#sidebar');

function checkSidebarCanvas () {
 if ($(window).width() >= 767) {
  var sidebarWidth = $sidebar.width();
  console.log('sidebarWidth: ' + sidebarWidth);
  $('#sidebarAffix').css('width', sidebarWidth);
   $sidebar.removeClass("col-xs-6 sidebar-offcanvas affix-top bg-gray-lighter");
 }
 else if ($(window).width() < 767) {
   $sidebar.addClass("sidebar-offcanvas bg-gray-lighter affix-top");
 }
}
checkSidebarCanvas();

  $(window).resize(function() {
    if ($(this).width() >= 1280) {
      checkSidebarCanvas();
    }
    else if ($(this).width() < 767) {
      checkSidebarCanvas();
    }
  });
});

//# sourceMappingURL=skapa.js.map