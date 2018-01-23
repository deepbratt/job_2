function SetSearchOptions(){this.setOptions=function(e,t){var o=$("#header-desktop-search-keywords, #header-mobile-search-keywords"),r=$("#header-desktop-search-location-text, #header-mobile-search-location");if(o.val(e),o.trigger("change"),r.val(t),r.trigger("change"),"undefined"!=typeof Storage){var n="searchOptions",i=localStorage.getItem(n),a=null==i?{}:JSON.parse(i);a.keywords=e,a.location=t;var s=JSON.stringify(a);localStorage.setItem(n,s)}}}function SetRadius(){this.setRadius=function(e,t,o){var r=getParameterByName("radius",o);null==r?$(e).val(t):$(e).val(r)}}function getParameterByName(e,t){t||(t=window.location.href),e=e.replace(/[\[\]]/g,"\\$&");var o=new RegExp("[?&]"+e+"(=([^&#]*)|&|#|$)"),r=o.exec(t);return r?r[2]?decodeURIComponent(r[2].replace(/\+/g," ")):"":null}function SsaLogger(){var e=function(){var e=TotalJobsGroup.localStorage.getItem("previousSsaLoggingData");return e?JSON.parse(e):null},t=function(e){TotalJobsGroup.localStorage.setItem("previousSsaLoggingData",JSON.stringify(e))},o=function(e,t){var o=!1;return null!=e?(e.searchCriteria.Keyword.toLowerCase().trim()!==t.searchCriteria.Keyword.toLowerCase().trim()&&(o=!0),e.searchCriteria.Location.toLowerCase().trim()!==t.searchCriteria.Location.toLowerCase().trim()&&(o=!0),e.searchCriteria.CompanyName.toLowerCase().trim()!==t.searchCriteria.CompanyName.toLowerCase().trim()&&(o=!0)):o=!0,o},r=function(e){return{searchCriteria:{CompanyName:e.CompanyName,Keyword:e.Keyword,Location:e.Location},searchUuid:""}};this.log=function(n){var i=r(n),a=e(),s=o(a,i);s||(i.searchUuid=a.searchUuid),$.ajax({url:"/search/logging/logssa",data:JSON.stringify({loggingData:n,searchUuid:i.searchUuid}),contentType:"application/json; charset=utf-8",dataType:"json",type:"post",cache:!1,success:function(e){e&&(i.searchUuid=e.searchUuid,t(i))}})}}function persistclicktolocalstorage(){return window.localStorage.setItem(referrerKey,"WhatWhere"),!0}function SetUpMoreLink(e){var t=e.getTreeviewWindowHeight(),o=e.getTreeviewListHeight(),r=e.getTreeviewListFullyExpandedHeight(),n=e.getMoreTreeviewLink();t<o?e.setMoreTreeviewLinksToBeShown():e.setTreeviewMaxHeight(r),n.click(function(t){t.preventDefault(),moreLinkPresenter(e,r)})}function moreLinkPresenter(e,t){e.setMoreTreeviewLinksToBeHidden(),e.setTreeviewMaxHeight(t)}function ShowTreeviewLocation(e){var t=e.getTreeview();t.on("show.bs.collapse",".collapse",function(t){t.stopPropagation();var o=$(t.currentTarget.parentElement);SetArrowClassOnSelectedArrow(o,"expanded",e)})}function HideTreeviewLocation(e){var t=e.getTreeview();t.on("hide.bs.collapse",".collapse",function(t){t.stopPropagation();var o=$(t.currentTarget.parentElement);SetArrowClassOnSelectedArrow(o,"expandable",e)})}function SetArrowClassOnSelectedArrow(e,t,o){var r=o.getActiveArrow(e);"expanded"===t?o.setExpandedClassOnArrow(r):o.setExpandableClassOnArrow(r)}!function(e,t){function o(e,t,o){var r=e.children(),n=!1;e.empty();for(var a=0,s=r.length;a<s;a++){var l=r.eq(a);if(e.append(l),o&&e.append(o),i(e,t)){l.remove(),n=!0;break}o&&o.detach()}return n}function r(t,o,a,s,l){var c=!1,u="a, table, thead, tbody, tfoot, tr, col, colgroup, object, embed, param, ol, ul, dl, blockquote, select, optgroup, option, textarea, script, style",d="script, .dotdotdot-keep";return t.contents().detach().each(function(){var f=this,p=e(f);if("undefined"==typeof f)return!0;if(p.is(d))t.append(p);else{if(c)return!0;t.append(p),!l||p.is(s.after)||p.find(s.after).length||t[t.is(u)?"after":"append"](l),i(a,s)&&(c=3==f.nodeType?n(p,o,a,s,l):r(p,o,a,s,l),c||(p.detach(),c=!0)),c||l&&l.detach()}}),o.addClass("is-truncated"),c}function n(t,o,r,n,s){var u=t[0];if(!u)return!1;var f=c(u),p=f.indexOf(" ")!==-1?" ":"　",h="letter"==n.wrap?"":p,b=f.split(h),g=-1,w=-1,m=0,v=b.length-1;for(n.fallbackToLetter&&0==m&&0==v&&(h="",b=f.split(h),v=b.length-1);m<=v&&(0!=m||0!=v);){var T=Math.floor((m+v)/2);if(T==w)break;w=T,l(u,b.slice(0,w+1).join(h)+n.ellipsis),i(r,n)?(v=w,n.fallbackToLetter&&0==m&&0==v&&(h="",b=b[0].split(h),g=-1,w=-1,m=0,v=b.length-1)):(g=w,m=w)}if(g==-1||1==b.length&&0==b[0].length){var y=t.parent();t.detach();var J=s&&s.closest(y).length?s.length:0;y.contents().length>J?u=d(y.contents().eq(-1-J),o):(u=d(y,o,!0),J||y.detach()),u&&(f=a(c(u),n),l(u,f),J&&s&&e(u).parent().append(s))}else f=a(b.slice(0,g+1).join(h),n),l(u,f);return!0}function i(e,t){return e.innerHeight()>t.maxHeight}function a(t,o){for(;e.inArray(t.slice(-1),o.lastCharacter.remove)>-1;)t=t.slice(0,-1);return e.inArray(t.slice(-1),o.lastCharacter.noEllipsis)<0&&(t+=o.ellipsis),t}function s(e){return{width:e.innerWidth(),height:e.innerHeight()}}function l(e,t){e.innerText?e.innerText=t:e.nodeValue?e.nodeValue=t:e.textContent&&(e.textContent=t)}function c(e){return e.innerText?e.innerText:e.nodeValue?e.nodeValue:e.textContent?e.textContent:""}function u(e){do e=e.previousSibling;while(e&&1!==e.nodeType&&3!==e.nodeType);return e}function d(t,o,r){var n,i=t&&t[0];if(i){if(!r){if(3===i.nodeType)return i;if(e.trim(t.text()))return d(t.contents().last(),o)}for(n=u(i);!n;){if(t=t.parent(),t.is(o)||!t.length)return!1;n=u(t[0])}if(n)return d(e(n),o)}return!1}function f(t,o){return!!t&&("string"==typeof t?(t=e(t,o),!!t.length&&t):!!t.jquery&&t)}function p(e){for(var t=e.innerHeight(),o=["paddingTop","paddingBottom"],r=0,n=o.length;r<n;r++){var i=parseInt(e.css(o[r]),10);isNaN(i)&&(i=0),t-=i}return t}if(!e.fn.dotdotdot){e.fn.dotdotdot=function(t){if(0==this.length)return e.fn.dotdotdot.debug('No element found for "'+this.selector+'".'),this;if(this.length>1)return this.each(function(){e(this).dotdotdot(t)});var n=this;n.data("dotdotdot")&&n.trigger("destroy.dot"),n.data("dotdotdot-style",n.attr("style")||""),n.css("word-wrap","break-word"),"nowrap"===n.css("white-space")&&n.css("white-space","normal"),n.bind_events=function(){return n.bind("update.dot",function(t,s){n.removeClass("is-truncated"),t.preventDefault(),t.stopPropagation(),l.maxHeight="number"==typeof l.height?l.height:p(n),l.maxHeight+=l.tolerance,"undefined"!=typeof s&&(("string"==typeof s||"nodeType"in s&&1===s.nodeType)&&(s=e("<div />").append(s).contents()),s instanceof e&&(a=s)),b=n.wrapInner('<div class="dotdotdot" />').children(),b.contents().detach().end().append(a.clone(!0)).find("br").replaceWith("  <br />  ").end().css({height:"auto",width:"auto",border:"none",padding:0,margin:0});var u=!1,d=!1;return c.afterElement&&(u=c.afterElement.clone(!0),u.show(),c.afterElement.detach()),i(b,l)&&(d="children"==l.wrap?o(b,l,u):r(b,n,b,l,u)),b.replaceWith(b.contents()),b=null,e.isFunction(l.callback)&&l.callback.call(n[0],d,a),c.isTruncated=d,d}).bind("isTruncated.dot",function(e,t){return e.preventDefault(),e.stopPropagation(),"function"==typeof t&&t.call(n[0],c.isTruncated),c.isTruncated}).bind("originalContent.dot",function(e,t){return e.preventDefault(),e.stopPropagation(),"function"==typeof t&&t.call(n[0],a),a}).bind("destroy.dot",function(e){e.preventDefault(),e.stopPropagation(),n.unwatch().unbind_events().contents().detach().end().append(a).attr("style",n.data("dotdotdot-style")||"").data("dotdotdot",!1)}),n},n.unbind_events=function(){return n.unbind(".dot"),n},n.watch=function(){if(n.unwatch(),"window"==l.watch){var t=e(window),o=t.width(),r=t.height();t.bind("resize.dot"+c.dotId,function(){o==t.width()&&r==t.height()&&l.windowResizeFix||(o=t.width(),r=t.height(),d&&clearInterval(d),d=setTimeout(function(){n.trigger("update.dot")},100))})}else u=s(n),d=setInterval(function(){if(n.is(":visible")){var e=s(n);u.width==e.width&&u.height==e.height||(n.trigger("update.dot"),u=e)}},500);return n},n.unwatch=function(){return e(window).unbind("resize.dot"+c.dotId),d&&clearInterval(d),n};var a=n.contents(),l=e.extend(!0,{},e.fn.dotdotdot.defaults,t),c={},u={},d=null,b=null;return l.lastCharacter.remove instanceof Array||(l.lastCharacter.remove=e.fn.dotdotdot.defaultArrays.lastCharacter.remove),l.lastCharacter.noEllipsis instanceof Array||(l.lastCharacter.noEllipsis=e.fn.dotdotdot.defaultArrays.lastCharacter.noEllipsis),c.afterElement=f(l.after,n),c.isTruncated=!1,c.dotId=h++,n.data("dotdotdot",!0).bind_events().trigger("update.dot"),l.watch&&n.watch(),n},e.fn.dotdotdot.defaults={ellipsis:"... ",wrap:"word",fallbackToLetter:!0,lastCharacter:{},tolerance:0,callback:null,after:null,height:null,watch:!1,windowResizeFix:!0},e.fn.dotdotdot.defaultArrays={lastCharacter:{remove:[" ","　",",",";",".","!","?"],noEllipsis:[]}},e.fn.dotdotdot.debug=function(e){};var h=1,b=e.fn.html;e.fn.html=function(o){return o!=t&&!e.isFunction(o)&&this.data("dotdotdot")?this.trigger("update",[o]):b.apply(this,arguments)};var g=e.fn.text;e.fn.text=function(o){return o!=t&&!e.isFunction(o)&&this.data("dotdotdot")?(o=e("<div />").text(o).html(),this.trigger("update",[o])):g.apply(this,arguments)}}}(jQuery),function(e,t,o,r){var n=e(t);e.fn.lazyload=function(i){function a(){var t=0;l.each(function(){var o=e(this);if(!c.skip_invisible||o.is(":visible"))if(e.abovethetop(this,c)||e.leftofbegin(this,c));else if(e.belowthefold(this,c)||e.rightoffold(this,c)){if(++t>c.failure_limit)return!1}else o.trigger("appear"),t=0})}var s,l=this,c={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:t,data_attribute:"original",skip_invisible:!0,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return i&&(r!==i.failurelimit&&(i.failure_limit=i.failurelimit,delete i.failurelimit),r!==i.effectspeed&&(i.effect_speed=i.effectspeed,delete i.effectspeed),e.extend(c,i)),s=c.container===r||c.container===t?n:e(c.container),0===c.event.indexOf("scroll")&&s.bind(c.event,function(){return a()}),this.each(function(){var t=this,o=e(t);t.loaded=!1,o.attr("src")!==r&&o.attr("src")!==!1||o.is("img")&&o.attr("src",c.placeholder),o.one("appear",function(){if(!this.loaded){if(c.appear){var r=l.length;c.appear.call(t,r,c)}e("<img />").bind("load",function(){var r=o.attr("data-"+c.data_attribute);o.hide(),o.is("img")?o.attr("src",r):o.css("background-image","url('"+r+"')"),o[c.effect](c.effect_speed),t.loaded=!0;var n=e.grep(l,function(e){return!e.loaded});if(l=e(n),c.load){var i=l.length;c.load.call(t,i,c)}}).attr("src",o.attr("data-"+c.data_attribute))}}),0!==c.event.indexOf("scroll")&&o.bind(c.event,function(){t.loaded||o.trigger("appear")})}),n.bind("resize",function(){a()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&n.bind("pageshow",function(t){t.originalEvent&&t.originalEvent.persisted&&l.each(function(){e(this).trigger("appear")})}),e(o).ready(function(){a()}),this},e.belowthefold=function(o,i){var a;return a=i.container===r||i.container===t?(t.innerHeight?t.innerHeight:n.height())+n.scrollTop():e(i.container).offset().top+e(i.container).height(),a<=e(o).offset().top-i.threshold},e.rightoffold=function(o,i){var a;return a=i.container===r||i.container===t?n.width()+n.scrollLeft():e(i.container).offset().left+e(i.container).width(),a<=e(o).offset().left-i.threshold},e.abovethetop=function(o,i){var a;return a=i.container===r||i.container===t?n.scrollTop():e(i.container).offset().top,a>=e(o).offset().top+i.threshold+e(o).height()},e.leftofbegin=function(o,i){var a;return a=i.container===r||i.container===t?n.scrollLeft():e(i.container).offset().left,a>=e(o).offset().left+i.threshold+e(o).width()},e.inviewport=function(t,o){return!(e.rightoffold(t,o)||e.leftofbegin(t,o)||e.belowthefold(t,o)||e.abovethetop(t,o))},e.extend(e.expr[":"],{"below-the-fold":function(t){return e.belowthefold(t,{threshold:0})},"above-the-top":function(t){return!e.belowthefold(t,{threshold:0})},"right-of-screen":function(t){return e.rightoffold(t,{threshold:0})},"left-of-screen":function(t){return!e.rightoffold(t,{threshold:0})},"in-viewport":function(t){return e.inviewport(t,{threshold:0})},"above-the-fold":function(t){return!e.belowthefold(t,{threshold:0})},"right-of-fold":function(t){return e.rightoffold(t,{threshold:0})},"left-of-fold":function(t){return!e.rightoffold(t,{threshold:0})}})}(jQuery,window,document);var TotalJobsGroup=TotalJobsGroup||{};!function(e,t){function o(){return window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth}e(document).ready(function(){e(".job-intro").dotdotdot({watch:"window"}),e("img.lazy").lazyload({effect:"fadeIn"})}),window.onpageshow=function(e){e.persisted&&window.location.reload()},TotalJobsGroup.isMobileScreenWidth=function(){return o()<t.MobileScreenWidth};var r=function(t){"nodeInserted"==t.animationName&&(e("#adbanner-container").addClass("adbanner-container-expandable"),e("#header-container").addClass("allow-ad-overlay"))};document.addEventListener("animationstart",r,!1),document.addEventListener("MSAnimationStart",r,!1),document.addEventListener("webkitAnimationStart",r,!1)}(jQuery,TotalJobsGroup.Config.Global);var TotalJobsGroup=TotalJobsGroup||{};!function(e){function t(t){e("#"+t).attr("disabled",!1)}e("#keywords").on("input",function(){t("btnRefineKeywords")}),e("#location").on("input",function(){t("btnRefineLocation")}),e("#jobStartDate").on("change",function(){t("btnRefineJobStartDate")})}(jQuery,TotalJobsGroup.RefineButtons),function(e){e(document).on("click","a[data-dynamic-qs]",function(){event.preventDefault(),window.location=this.href+e(this).data("dynamic-qs")}),e(function(){e("a[data-dynamic-qs]").each(function(e,t){t.setAttribute("href",t.getAttribute("href")+t.getAttribute("data-dynamic-qs")),t.removeAttribute("data-dynamic-qs")}),e(document).off("click","a[data-dynamic-qs]")})}(jQuery);var TotalJobsGroup=TotalJobsGroup||{};TotalJobsGroup.utilities=TotalJobsGroup.utilities||{},function(){TotalJobsGroup.utilities.validateEmailAddressPattern=function(e){var t=new RegExp("^(([A-Za-z_0-9-']+)|([A-Za-z_0-9-']+[.]([A-Za-z_0-9-']+[.]){0,}[A-Za-z_0-9-']{1,}))[@]((([A-Za-z0-9-']+)[.]){1,})(([A-Za-z0-9']+))$");return t.test(e)},TotalJobsGroup.utilities.emailValidationType={EmptyEmail:1,InvalidEmail:2,Valid:3},TotalJobsGroup.utilities.validateEmailAddress=function(e){return e?this.validateEmailAddressPattern(e)?this.emailValidationType.Valid:this.emailValidationType.InvalidEmail:this.emailValidationType.EmptyEmail},TotalJobsGroup.utilities.getPath=function(){return window.location.pathname||""},TotalJobsGroup.utilities.getPathWithQueryString=function(){var e=this.getPath(),t=window.location.search;return null!=t&&(e+=t),e},TotalJobsGroup.utilities.showLoadingModal=function(){$(".loading-overlay").show()},TotalJobsGroup.utilities.hideLoadingModal=function(){$(".loading-overlay").hide()},TotalJobsGroup.utilities.getQueryString=function(){return this.queryStringToObject(window.location.search.substr(1))},TotalJobsGroup.utilities.queryStringToObject=function(e){if(!(e||"").trim())return{};var t=e.split("&"),o={};if(t)for(var r=0;r<t.length;++r){var n=t[r].split("=",2);1===n.length?o[n[0]]="":o[n[0]]=decodeURIComponent(n[1].replace(/\+/g," "))}return o},TotalJobsGroup.utilities.reloadPage=function(){window.location.reload()}}();var TotalJobsGroup=TotalJobsGroup||{};TotalJobsGroup.cookies=TotalJobsGroup.cookies||{},function(){TotalJobsGroup.cookies.getItem=function(e){return $.cookie(e)},TotalJobsGroup.cookies.setItem=function(e,t,o,r){var n="";if(0!==r){r=r||365;var i=new Date;i.setTime(+i+864e5*r),n="; expires="+i.toGMTString()}var a=e+"="+(o?t:escape(t))+n+"; path=/";document.cookie=a}}();var TotalJobsGroup=TotalJobsGroup||{};TotalJobsGroup.userHelper=TotalJobsGroup.userHelper||{},function(e){TotalJobsGroup.userHelper.EmailAddress="",TotalJobsGroup.userHelper.isSoftlyLoggedIn=function(){return!!e.getItem("SoftLoginCookie")};var t=function(){$.ajax({type:"POST",url:"/Account/AccountDetails/GetUsersEmailAddress",success:function(e){e&&(TotalJobsGroup.userHelper.EmailAddress=e)}})};$(document).ready(function(){t()})}(TotalJobsGroup.cookies),$(document).ready(function(){var e=TotalJobsGroup.JbeCriteria.Keywords,t=TotalJobsGroup.JbeCriteria.Location,o=new SetSearchOptions;o.setOptions(e,t)}),$(document).ready(function(){var e=TotalJobsGroup.DefaultRadius,t=new SetRadius;t.setRadius("#header-desktop-search-radius",e,window.location.href)}),function(){function e(){var e=[];if(TotalJobsGroup.localStorage.isLocalStorageSupported()){var t=TotalJobsGroup.localStorage.getItem(o);if(null!=t&&t.length>0)for(var r=t.split(","),n=0;n<r.length;n++)e.push(parseInt(r[n]))}return e}function t(e,t){var o=!1;e=parseInt(e);for(var r=0;r<t.length;r++)if(t[r]===e){o=!0;break}return o}var o="seenJobs";$(document).ready(function(){var o=$(".job"),r=e();o.each(function(){var e=$(this),o=e.attr("id");t(o,r)&&(e.addClass("seen"),e.find(".see-job-col a").text("Seen"))})})}(),function(){$(document).ready(function(){TotalJobsGroup.cookies.setItem("SearchResults",TotalJobsGroup.JobIds.join(),!0,0)})}(),function(){function e(e){for(var t=0;t<e.length;t++){var o=e[t];if(o.Applied){var r=$(document.getElementById(o.JobId));r.addClass("applied seen").removeClass("new"),r.find(".applied-col").show()}}}$(document).ready(function(){$.ajax({url:"/personalisation/jobsappliedfor",type:"post",dataType:"json",data:{jobIds:TotalJobsGroup.JobIds},success:function(t){t&&t.length>0&&e(t)}})})}();var analLib=analLib||{};analLib.fireNewEmailMeThisJob=analLib.fireNewEmailMeThisJob||function(){},function(){function e(e){var t=TotalJobsGroup.localStorage.getItem(e),o=t.split(",");if(o.length>p){var r=t.slice(t.indexOf(",")+1);TotalJobsGroup.localStorage.setItem(e,r)}}function t(e,t){var o=TotalJobsGroup.localStorage.getItem(t);return!!o&&$.inArray(e.toString(),o.split(","))>=0}function o(o){var r,n=f;TotalJobsGroup.localStorage.isLocalStorageSupported()&&(r=TotalJobsGroup.localStorage.getItem(n),r?t(o,n)||(r=r.concat(","+o)):r=o,TotalJobsGroup.localStorage.setItem(n,r),e(n))}function r(){if(TotalJobsGroup.localStorage.isLocalStorageSupported()){var e=TotalJobsGroup.localStorage.getItem(f);if(e){var t=e.split(",");$(".btn-sendjob").each(function(){var e=$(this).data("job-id").toString(),o=this;$.each(t,function(){if(e===this.toString())return $(o).text("Sent"),void $(o).addClass("sent")})})}}}function n(){$(".btn-sendjob").each(function(e,t){var r=$(t);r.click(function(){$("#sendJobByEmail").click(function(e){o(r.data("job-id")),$("#sendJobByEmail").unbind(e)})})})}function i(){$(m).hide(),$(v).hide()}function a(){i(),$("#email-job").show(),$("#email-job-confirmation").hide(),$("#confirmationEmail").text(""),g=""}function s(){$("#confirmationEmail").text(g),$("#email-job").hide(),$("#send-job-confirmation").show(),d.addClass("sent"),d.text("Sent")}function l(e){switch(e.d){case"InvalidEmailDomain":case"InvalidEmailPattern":$(v).show();break;case"NoEmailProvided":$(m).show();break;default:s(),analLib.fireNewEmailMeThisJob()}TotalJobsGroup.utilities.hideLoadingModal()}function c(){s(),TotalJobsGroup.utilities.hideLoadingModal()}function u(){TotalJobsGroup.userHelper.EmailAddress&&0===$(w).val().length&&$(w).val(TotalJobsGroup.userHelper.EmailAddress)}var d,f="sentJobs",p=200,h=-1,b="",g="",w="#emailMeThisJob",m="#SendJobEmptyEmail",v="#SendJobInvalidEmail";$("#sendJobModal").on("show.bs.modal",function(){u()}),$("#sendJobModal").on("hidden.bs.modal",function(){a()}),$(document).ready(function(){n(),r(),$(".email-job-col").on("click",".btn-sendjob",function(){$("#emailConfirmationContainer").hide(),h=$(this).data("job-id"),b=$(this).data("job-token"),d=$(this)}),$(w).keypress(function(e){13===e.which&&$("#sendJobByEmail").click()}),$("#sendJobModal").on("click","#sendJobByEmail",function(e){e.preventDefault(),i(),g=$(w).val();var t=TotalJobsGroup.utilities.validateEmailAddress(g);if(t===TotalJobsGroup.utilities.emailValidationType.EmptyEmail)return void $(m).show();if(t===TotalJobsGroup.utilities.emailValidationType.InvalidEmail)return void $(v).show();TotalJobsGroup.utilities.showLoadingModal();var o=JSON.stringify({jobId:h,emailRecipient:g,token:b});$.ajax({type:"POST",url:"/Webservices/EmailMeJobService/EmailMeJobService.asmx/SendJobByEmailViaMobile",cache:!1,data:o,contentType:"application/json; charset=utf-8",success:l,error:c})})})}();var Account,Search=Search||{};!function(){function e(e){var t=+TotalJobsGroup.cookies.getItem("AutoShowJbeModal"),o=+TotalJobsGroup.QueryString.GetValue("similarjobs");if(1===t&&1===o){var r=new TotalJobsGroup.Header.AccountDetails($,window.location,TotalJobsGroup.Config.Global,TotalJobsGroup.IsJobsiteBrand);r.getAccountDetails(function(t){t.LoggedInState===TotalJobsGroup.Header.LoggedInState.NotLoggedIn&&e()})}}Search.ConfigureJbeSetup=function(e,t,o,r){if(!Account||!Account.JbeSetup)return console.error("Could not configure JBE Setup."),null;null==r&&(r=TotalJobsGroup.JbeCriteria.ShowKeywordsBox),t=t||[];var n=new Account.JbeSetup;return n.configure({launcher:t[0],container:e[0],jbeSetup:{companyId:TotalJobsGroup.JbeCriteria.CompanyId,initialKeywords:TotalJobsGroup.JbeCriteria.SSAKeywords,location:TotalJobsGroup.JbeCriteria.Location||"",radius:TotalJobsGroup.JbeCriteria.Radius||""},showKeywordSearch:r,analyticsOptions:o,isJobsiteBrand:TotalJobsGroup.IsJobsiteBrand||!1})},Search.ShowJbeLightbox=function(){e(function(){var e={isLightbox:!0,pageName:"Job Details Light Box/MoreJobsLikeThis",friendlyName:"JBE created: Lightbox"},t=!1;TotalJobsGroup.JbeCriteria.SSAKeywords||(t=!0);var o=Search.ConfigureJbeSetup($("#jbe-dialog-onload-container"),null,e,t);o&&(o.open(),TotalJobsGroup.cookies.setItem("AutoShowJbeModal",0,!0,0))})}}(),$(function(){"use strict";Search.ConfigureJbeSetup($("#jbe-dialog-container"),$(".jbe-btn-email-to")),Search.ShowJbeLightbox()}),$(function(){"use strict";TotalJobsGroup.RecentSearches&&TotalJobsGroup.RecentSearches.saveLastSearchAsync().then(TotalJobsGroup.RecentSearches.getRecentSearchesAsync)}),function(){$(document).ready(function(){$(".to-top-link").on("click","#scroll-to-top",function(e){return e.preventDefault(),$("html, body").animate({scrollTop:0},500),document.activeElement.blur(),!1})})}(),function(){function e(){function e(){o.hide(),r.removeClass("facet-label-highlighted")}function t(e){var t=$(".facet-scroll").scrollLeft(),o=e.indexOf("?")>0?"&":"?";return e+o+"scrolled="+t}var o=$(".facet-selection"),r=$(".facet-label");if(r.unbind("click"),r.unbind("touchmove"),TotalJobsGroup.isMobileScreenWidth()){var n=$(".facet-scroll"),i=TotalJobsGroup.utilities.getQueryString().scrolled;i&&n.scrollLeft(i),e(),r.on({touchmove:function(){e()}}),r.click(function(){var t=$(this),o=t.width(),r=o+t.offset().left,i=t.offset().left,a=$(window).width();r-a>0&&n.animate({scrollLeft:"+="+(r-a)},250),i<0&&n.animate({scrollLeft:"+="+i},250);var s=t.next(".facet-selection"),l=s.is(":visible");e(),l?s.hide():(s.show(),t.addClass("facet-label-highlighted"))}),$(".facet-links > li > a").unbind("click").bind("click",function(){this.href=t(this.href)}),$(".radius-button-group > a").unbind("click").bind("click",function(){this.href=t(this.href)})}else{var a=$(".more-suggested-links a");a.on("click",function(e){e.stopImmediatePropagation();var t=$(this),o=t.closest(".facet-block").find(".collapsed-facet-links");return o.slideToggle(300,function(){o.is(":visible")?t.text("less"):t.text("more")}),!1}),o.show()}}$(document).ready(function(){e()}),$(window).resize(function(){e()})}(),function(e){function t(t,o){var r=t.term.split(" ").join("|"),n=e(o),i=n.text().replace(new RegExp("("+r+")","gi"),"<b>$1</b>");n.html("<a>"+i+"</a>")}function o(){var o=window.TotalJobsGroup.config.KeywordsAutoSuggestMaxResults;e("#keywords").autocomplete({position:{my:"left top",at:"left bottom"},delay:window.TotalJobsGroup.config.KeywordsAutoSuggestDelayMilliseconds,minLength:1,source:function(t,r){var n={value:t.term,MaxResults:o};n=JSON.stringify(n),e.ajax({type:"POST",url:window.TotalJobsGroup.config.KeywordsAutoSuggestUrl,contentType:"application/json; charset=utf-8",data:n,success:function(t){r(e.map(t.Results,function(e){return e.DisplayString}))},error:function(){return"Sorry, an error occurred :("}})},open:function(){var o=e(this).data("ui-autocomplete");o.menu.element.addClass("keyterm-autocomplete"),o.menu.element.find("li").each(function(){t(o,this)})},select:function(){TotalJobsGroup.isMobileScreenWidth()&&e("body").scrollTo(e(".keywords-container label").offset().top)}})}function r(){var o=window.TotalJobsGroup.config.LocationMaxResults;e("#location").autocomplete({position:{my:"left top",at:"left bottom"},delay:window.TotalJobsGroup.config.LocationDelayMilliseconds,minLength:1,source:function(t,r){var n={lookupText:t.term,numberOfResults:o};n=JSON.stringify(n),e.ajax({type:"POST",url:window.TotalJobsGroup.config.LocationWebServiceUrl,contentType:"application/json; charset=utf-8",data:n,success:function(t){r(e.map(t.d.Items,function(e){return e}))},error:function(){return"Sorry, an error occurred :("}})},open:function(){var o=e(this).data("ui-autocomplete");o.menu.element.addClass("location-autocomplete"),o.menu.element.find("li").each(function(){t(o,this)})}}).addClass("location-autocomplete")}e(document).ready(function(){o(),r()})}(jQuery);var TotalJobsGroup=TotalJobsGroup||{};TotalJobsGroup.IsInEU=TotalJobsGroup.IsInEU||!1,TotalJobsGroup.cookies=TotalJobsGroup.cookies||{setItem:function(){}},TotalJobsGroup.cookieServiceManager=TotalJobsGroup.cookieServiceManager||{},function(){TotalJobsGroup.cookieServiceManager.IsUserInEu=function(e,t){$.ajax({type:"POST",contentType:"application/json; charset=utf-8",url:t,dataType:"json",success:function(t){t.d?(e.setItem("INEU",1,"",365),e.setItem("PJBJOBSEEKER",1,"",365)):(e.setItem("NONEU",1,"",365),e.setItem("PJBJOBSEEKER",0,"",365),TotalJobsGroup.utilities.reloadPage())}})},TotalJobsGroup.cookieServiceManager.GetLocationJobTypeId=function(e,t){$.ajax({type:"POST",contentType:"application/json; charset=utf-8",url:t,dataType:"json",success:function(t){e.setItem("LOCATIONJOBTYPEID",t.d,"",365)}})}}();var checkForLocationCookies=function(e,t){var o=e.getItem("INEU"),r=e.getItem("LOCATIONJOBTYPEID");if(r||t.GetLocationJobTypeId(e,"/Webservices/PopupListService/PopupListService.asmx/GetIpAddressJobTypeId"),!o){var n=e.getItem("NONEU");n||t.IsUserInEu(e,"/Webservices/PopupListService/PopupListService.asmx/IsIpAddressInEu")}};checkForLocationCookies(TotalJobsGroup.cookies,TotalJobsGroup.cookieServiceManager);var TotalJobsGroup;!function(e){var t=function(){function e(){}return e.prototype.stripEmojiFromString=function(e){var t="";if(null==e)return e;for(var o=0,r=e.length;o<r;o++){var n=e[o].charCodeAt(0);32<=n&&n<=126&&(t+=e[o])}return t},e}();e.UrlParser=t}(TotalJobsGroup||(TotalJobsGroup={})),function(){$(document).ready(function(){var e=new TotalJobsGroup.UrlParser;TotalJobsGroup.cookies.setItem("SearchKeywords",e.stripEmojiFromString(TotalJobsGroup.JbeCriteria.Keywords),!0,0)})}(),function(){$(document).ready(function(){$.ajax({url:"/personalisation/recommenderdatalogger/logdata",data:JSON.stringify({search:TotalJobsGroup.LoggingData}),contentType:"application/json; charset=utf-8",dataType:"json",type:"post",cache:!1})})}(),$(document).ready(function(){function e(){A!==$(window).width()&&(TotalJobsGroup.isMobileScreenWidth()?t():(n(),o()))}function t(){A=$(window).width(),c.appendTo("#mobileFilters"),G.appendTo("#mobileFilters"),S.appendTo("#mobileFilters"),$(p).removeClass(w),$(f).addClass(b).find(".collapsed-facet-links").show()}function o(){A=$(window).width(),l.toggleClass("mobile-expand-item"),$(f).removeClass(b).show(),$(f).find(".collapsed-facet-links").hide(),l.find(f).removeClass(g).addClass(b),G.appendTo("#desktopRelatedJobs"),S.appendTo(".facet-scroll")}function r(){return a.height()>s.height()}function n(){r()?h.hasClass("hide")&&h.removeClass("hide"):h.hasClass("hide")||h.addClass("hide")}var i=$("#mobileFilters"),a=$(".locations-drilldown-links"),s=$(".locations-drilldown-links li").first(),l=$(".location-drilldown-row"),c=$(".mobile-locations-drilldown"),u=".expand-item",d=$(".drilldown-toggle"),f=".drilldown-container",p=".drilldown-nav-arrow",h=$(".locations-drilldown-desktop-toggle"),b="collapsed",g="expanded",w="active",m="adjacent-to-pager",v="adjacent-to-drilldown",T=$(".pagination"),y=T.length,J=i.length,S=$("#facetListPopularEmployers"),G=$("#facetRelatedJobs"),A=0;y&&J&&(i.addClass(m),T.addClass(v)),TotalJobsGroup.isMobileScreenWidth()?t():n(),d.click(function(e){e.preventDefault();var t=$(this),o=$(this).closest(u).find(f);return o.hasClass(b)?(o.switchClass(b,g,100),$(this).addClass(w),$(this).prev(p).addClass(w),!1):!!o.hasClass(g)&&(o.switchClass(g,b,100,"swing",function(){t.removeClass(w),t.prev(p).removeClass(w)}),!1)}),$(window).resize(function(){e()}),window.addEventListener("orientationchange",function(){e()},!1)});var TotalJobsGroup=TotalJobsGroup||{};TotalJobsGroup.userHelper=TotalJobsGroup.userHelper||{},function(e){var t=$("#ssa-cta-update-profile"),o=$("#ssa-cta-register"),r=function(){e.isSoftlyLoggedIn()?t.show():o.show()};$(document).ready(function(){r()})}(TotalJobsGroup.userHelper),$(document).ready(function(){var e={getAccountDetails:function(e){throw e(null),new Error("Error, getAccountDetails was not found!")}};TotalJobsGroup.Header.AccountDetails&&(e=new TotalJobsGroup.Header.AccountDetails(window.jQuery,window.location,TotalJobsGroup.Config.Global,TotalJobsGroup.IsJobsiteBrand)),e.getAccountDetails(function(){var e=new SsaLogger;e.log(JSON.parse(TotalJobsGroup.LoggingData.searchdata))})});var TotalJobsGroup=TotalJobsGroup||{};TotalJobsGroup.DynamicCreativeTracking=function(e){this.getPostviewCookieValue=function(){return e.getItem("DCA_postview")}},TotalJobsGroup.DynamicCreativePostviewCookieValue=function(){var e=new TotalJobsGroup.DynamicCreativeTracking(TotalJobsGroup.cookies);return e.getPostviewCookieValue()}();var AnalyticsReferrer;!function(e){var t=function(){function e(){}return e.prototype.parseurl=function(e){return e=e.replace("http://www.","").replace("http://","").replace("https://www.","").replace("https://","").replace("www.","")},e.prototype.removejobtypefromurl=function(e){return e.toLowerCase().replace("/contract","").replace("/seasonal","").replace("/permanent","").replace("/part-time","").replace("/temporary","")},e.prototype.extractkeywordfromquerystring=function(e){if(null==e)return"";e=e.replace("?","");var t="",o=e.split("&");return 0==o.length&&o.push(e),o.map(function(e){var o=e.split("=");"keywords"==o[0].toLowerCase()&&(t=o[1])}),t},e}();e.UrlParser=t}(AnalyticsReferrer||(AnalyticsReferrer={}));var referrerKey="ReferrerKey",AnalyticsReferrer;!function(e){var t=function(){function e(e,t,o){this.urlParser=e,this.parsedReferrerKey="referrer",this.lastSearchPageKey="lastsearchpage",this.jobsRegex=/\/jobs((\/|\?)|$)/i,this.urlParser=e,this.evarValue="",this.window=t,this.host=this.urlParser.parseurl(this.window.location.host).toLowerCase(),this.document=o,this.referrer=this.urlParser.parseurl(o.referrer).toLowerCase()}return e.prototype.getreferrer=function(){return 0===this.referrer.indexOf(this.host)&&(this.isNewSearch(this.document.referrer,this.window.location.href)&&(this.referrer=this.referrer.replace(this.host,""),this.referrer=this.getPageValue(this.referrer,this.window.location.href),this.window.localStorage.setItem(this.parsedReferrerKey,this.referrer)),this.evarValue=this.getLocalStorageValue(this.parsedReferrerKey)),this.clearKeys(),this.evarValue},e.prototype.clearKeys=function(){this.window.localStorage.removeItem(this.lastSearchPageKey),this.window.localStorage.removeItem(referrerKey)},e.prototype.getPageValue=function(e,t){return e.indexOf("?")>-1&&(e=e.substr(0,e.indexOf("?"))),"/"===e||""===e?e=/(?:[?&])s=recentsearch&?/i.test(t)?"Homepage":"Homepage"===this.getLocalStorageValue(referrerKey)?"Homepage:Search":"Homepage:Links":e.indexOf("/job/")>-1?e=e.indexOf("/apply/")<0?"/JobSearch/JobDetails.aspx":"Confirmation":e.match(this.jobsRegex)&&(e="WhatWhere"===this.getLocalStorageValue(referrerKey)?"Search Results: WhatWhere":"Search Results"),/(?:[?&])s=header&?/i.test(t)?e="Header:"+e:/(?:[?&])s=recentsearch&?/i.test(t)&&(e="Recent Search:"+e),e},e.prototype.isNewSearch=function(e,t){
var o=/(?:[?&])s=[^&]+/i;return o.test(t)||this.isnewkeywordlocation(e,t)},e.prototype.getLocalStorageValue=function(e){return this.window.localStorage.getItem(e)},e.prototype.isnewkeywordlocation=function(e,t){var o,r,n="",i="";if("true"===this.getLocalStorageValue("returnbutton")&&e.indexOf("/job/")>-1)return!1;if(e.indexOf("/job/")>-1)return!0;if(t.match(this.jobsRegex)&&e.match(this.jobsRegex)){var a=e.indexOf("?"),s=t.indexOf("?");if(a>-1?(n=e.substr(a,e.length-a).toLowerCase(),o=e.substr(0,a).toLowerCase()):o=e,s>-1?(i=t.substr(s,t.length-s).toLowerCase(),r=t.substr(0,s).toLowerCase()):r=t,this.isajobtyperefinement(e,t))return!1;if(o.indexOf("/jobs-at/")>-1&&r.indexOf("/jobs-at/")>-1&&this.urlParser.extractkeywordfromquerystring(i)!==this.urlParser.extractkeywordfromquerystring(n))return!0;if(o===r&&i!==n)return!1}return!0},e.prototype.isajobtyperefinement=function(e,t){return this.urlParser.removejobtypefromurl(e)===this.urlParser.removejobtypefromurl(t)},e}();e.Referrer=t}(AnalyticsReferrer||(AnalyticsReferrer={})),$(".backfilled .job-title a").on({mousedown:function(e){1!==e.which&&2!==e.which||$(this).data("down"+e.which,!0)},mouseout:function(){$(this).data("down1",!1),$(this).data("down2",!1)},mouseup:function(e){1!==e.which&&2!==e.which||!$(this).data("down"+e.which)||(analLib.fireBackfillEvent("Cross Brand Job Click",s.eVar23),$(this).data("down"+e.which,!1))}});var treeView={getTreeview:function(){return $("#treeview")},getMoreTreeviewLink:function(){return $("#more-suggested-locations")},getTreeviewWindowHeight:function(){return $("#treeview").height()},getTreeviewListHeight:function(){return $("#treeview ul").height()},getTreeviewListFullyExpandedHeight:function(){var e=24;return $("#treeview ul li").length*e},getUlCollection:function(e){return $(e).find("li ul.collapse.in")},getActiveArrow:function(e){return $(e).find("> a[role]")},setMoreTreeviewLinksToBeShown:function(){$("#more-treeview-links").show()},setMoreTreeviewLinksToBeHidden:function(){$("#more-treeview-links").hide()},setTreeviewMaxHeight:function(e){$("#treeview").css("max-height",e)},setExpandableClassOnArrow:function(e){$(e).removeClass("expanded").addClass("expandable")},setExpandedClassOnArrow:function(e){$(e).removeClass("expandable").addClass("expanded")}};$(document).ready(function(){SetUpMoreLink(treeView),ShowTreeviewLocation(treeView),HideTreeviewLocation(treeView)});var TotalJobsGroup;!function(e){var t=function(){function e(){}return e.filterByJobStartDateAndExistingCriteria=function(e,t){var o=this.getJobStartDateAndExistingCriteriaUrl(e,t);window.location.href=o},e.getJobStartDateAndExistingCriteriaUrl=function(e,t){var o="jobStartDate",r=new RegExp("([?&])"+o+"=.*?(&|$)","i"),n=e.indexOf("?")!==-1?"&":"?";return e.match(r)?Number(t)?e.replace(r,"$1"+o+"="+t+"$2"):e.replace(r,""):e+n+o+"="+t},e}();e.JobStartDateFilter=t}(TotalJobsGroup||(TotalJobsGroup={}));
!function(e){function t(n){if(o[n])return o[n].exports;var r=o[n]={exports:{},id:n,loaded:!1};return e[n].call(r.exports,r,r.exports,t),r.loaded=!0,r.exports}var o={};return t.m=e,t.c=o,t.p="",t(0)}([function(e,t,o){"use strict";function n(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&(t[o]=e[o]);return t.default=e,t}var r=o(1),a=n(r);$(function(){a.init(window)})},function(e,t,o){"use strict";function n(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&(t[o]=e[o]);return t.default=e,t}function r(e){if(s.isFromValidCampaign()&&s.isFromExternalReferrer(e)&&a(e)){var t=c.build();if(!t)return;var o=d.build(t);$("body").append(o),o.modal({show:!0})}}function a(e){return/^\/jobs(?!\-at)\/?/i.test(e.location.pathname)}Object.defineProperty(t,"__esModule",{value:!0}),t.init=r;var i=o(2),s=n(i),l=o(3),c=n(l),u=o(5),d=n(u)},function(e,t){"use strict";function o(){if(!TotalJobsGroup.Analytics||"function"!=typeof TotalJobsGroup.Analytics.getCampaignCode)return!1;var e=TotalJobsGroup.Analytics.getCampaignCode();return/^(A_SE_|R_EM_|A_RE_|R_BA_)/.test(e)}function n(e){var t=e.location.protocol+"//"+e.location.host;return 0!==e.document.referrer.toLowerCase().indexOf(t.toLowerCase())}Object.defineProperty(t,"__esModule",{value:!0}),t.isFromValidCampaign=o,t.isFromExternalReferrer=n},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(){var e=TotalJobsGroup.SearchData;if(!e)return null;if(!e.Location&&!e.Keywords)return null;if(e.Location&&e.Keywords)return null;var t=e.SiteName,o=e.TotalNoOfJobs,n=a(e),r=new l.default(t,o,n.message,n.ctaMessage);return r}function a(e){var t="",o="";return!e.Keywords&&e.Location?(t="jobs in <strong>"+i(e.Location)+"</strong>. To make your results more relevant please specify a job title, skill or company.",o="Specify a job title, skill or company"):e.Keywords&&!e.Location&&(t="<strong>"+i(e.Keywords)+"</strong> jobs. To make your results more relevant please specify a town, city or postcode.",o="Specify a town, city or postcode"),{message:t,ctaMessage:o}}function i(e){return e.replace(/&/g,"&amp;").replace(/"/g,"&quot;").replace(/'/g,"&#39;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}Object.defineProperty(t,"__esModule",{value:!0}),t.build=r;var s=o(4),l=n(s)},function(e,t){"use strict";function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(t,"__esModule",{value:!0});var n=function e(t,n,r,a){o(this,e),this.siteName=t,this.totalNoOfJobs=n,this.message=r,this.ctaMessage=a};t.default=n},function(e,t){"use strict";function o(e){if(!e)return null;var t='<div id="refine-modal" class="modal fade" tabindex="-1" role="dialog">\n                                <div class="modal-dialog" role="document">\n                                    <div class="modal-content">\n                                        <div class="modal-body text-center">\n                                            <div><button type="button" class="close close-popup" data-dismiss="modal" aria-label="Close"></button></div>\n                                            <div class="clearfix"></div>\n                                            <div class="site-name brand-font">'+e.siteName+' has</div>\n                                            <div class="no-of-jobs brand-font">'+e.totalNoOfJobs+'</div>\n                                            <div class="refine-message">'+e.message+'</div>\n                                            <div><a href="#" class="btn btn-primary btn-block btn-lg" data-dismiss="modal" aria-label="Close">'+e.ctaMessage+"</a></div>\n                                        </div>\n                                    </div>\n                                </div>\n                            </div>";return $(t)}Object.defineProperty(t,"__esModule",{value:!0}),t.build=o}]);
//# sourceMappingURL=search.js.map
