
function addForm(a){
function f(){
b.find(".successmessage").hide();
var f="";
if(a=="#contactform"){f="php/contact.php"}else if(a=="#newsletterform"){f="php/signup.php"}else{f=""}if(d()){if(!c){c=true;
b.find(".errormessage").hide();
b.find(".sendingmessage").show();
jQuery.post(f,b.serialize(),
function(){
b.find(".sendingmessage").hide();
b.find(".successmessage").fadeIn();
e()})}}return false}
function e(){
b.find("input").each(
function(){
jQuery(this).val("")});
b.find("textarea").val("");
c=false}
function d(){
var a=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
var c=/.{4}/;
var d=true;
b.find(".requiredfield").each(
function(){
var b=jQuery(this).attr("name");
var e=jQuery(this).val();
if(b=="email"){if(!a.test(e)){jQuery(this).addClass("formerror");
d=false}else{jQuery(this).removeClass("formerror")}}else{if(!c.test(e)){jQuery(this).addClass("formerror");
d=false}else{jQuery(this).removeClass("formerror")}}});
if(!d){b.find(".errormessage").fadeIn()}return d}var b=jQuery(a);
var c=false;
b.find("button[name=send]").click(f)}
function addPortfolio(a){var b=jQuery("#portfoliolist"+a+"column");
if(jQuery(b).length!=0){var c=b.clone();
jQuery(".portfoliofilter li").click(
function(d){jQuery(".portfoliofilter li a").addClass("portfoliobutton_noselect");
jQuery(".portfoliofilter li a").removeClass("portfoliobutton");
jQuery(this).children("a").removeClass("portfoliobutton_noselect");
jQuery(this).children("a").addClass("portfoliobutton");
var e=jQuery(this).children("a").text().toLowerCase().replace(" ","-");
if(a==1){if(e=="todas"){var f=c.find(".blogpost")}else{var f=c.find(".blogpost[data-type~="+e+"]")}}else{if(e=="todas"){var f=c.find(".portfolio")}else{var f=c.find(".portfolio[data-type~="+e+"]")}}jQuery(b).quicksand(f,{duration:500,easing:"swing",adjustHeight:"dynamic",enhancement:
function(){
jQuery(".sidebar").height("100%")}},
function(){
addPrettyPhoto();
setSidebarHeight();
jQuery(document).find(".twitterwrap").each(
function(){
jQuery(this).empty()});
addTwitter();
jQuery(document).find(".facebookwrap").each(
function(){
jQuery(this).empty()});
addFacebook()});
return false})}}

function addTwitter(){

	jQuery(document).find(".twitterwrap").each(
function(){
var a=jQuery(this).attr("data-text");
var b=jQuery(this).attr("data-url");
jQuery(this).append('<a href="http://twitter.com/share" class="twitter-share-button" data-text="'+a+'" data-url="'+b+'" data-count="horizontal" data-via="Newline"> </a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>')})}
function addFacebook(){
var a=document.createElement("script");
a.type="text/javascript";
a.src="http://connect.facebook.net/en_US/all.js#xfbml=1";
document.getElementsByTagName("head")[0].appendChild(a);
jQuery(document).find(".facebookwrap").each(
function(){
var a=jQuery(this).attr("data-url");
jQuery(this).append('<fb:like href="'+a+'" layout="button_count" show_faces="false" colorscheme="light" width="90"></fb:like>')})}
function removeSkype(){
var a=document.createElement("meta");
a.setAttribute("name","SKYPE_TOOLBAR");
a.setAttribute("content","SKYPE_TOOLBAR_PARSER_COMPATIBLE");
document.head.appendChild(a)}
function addPrettyPhoto(){
jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({theme:"pp_default",overlay_gallery:false,show_title:false,hideflash:true});
jQuery("a[data-rel^='prettyPhoto'] img").hover(
function(){
jQuery(this).stop().fadeTo("fast",.5)},
function(){
jQuery(this).stop().fadeTo("fast",1)})}
function addPiecemaker(){
if(jQuery("#piecemaker").length!=0){jQuery("head").append('<script>swfobject.embedSWF("images/piecemaker2/piecemaker.swf" , "piecemaker", "890", "520", "10", null, flashvars, params, null)</script>')}}
function setSidebarHeight(){
if(jQuery("#contentcolumn").height()>jQuery(".sidebar").height()){jQuery(".sidebar").height(jQuery("#contentcontainer").height()-10)}}
function relative_time(a){var b=a.split(" ");
a=b[1]+" "+b[2]+", "+b[5]+" "+b[3];
var c=Date.parse(a);
var d=arguments.length>1?arguments[1]:new Date;
var e=parseInt((d.getTime()-c)/1e3);
e=e+d.getTimezoneOffset()*60;
var f="";
if(e<60){f="a minute ago"}else if(e<120){f="couple of minutes ago"}else if(e<45*60){f=parseInt(e/60).toString()+" minutes ago"}else if(e<90*60){f="an hour ago"}else if(e<24*60*60){f=""+parseInt(e/3600).toString()+" hours ago"}else if(e<48*60*60){f="1 day ago"}else{f=parseInt(e/86400).toString()+" days ago"}return f}jQuery.noConflict();
jQuery(document).ready(
function(){

function a(a){jQuery("#colorSelector div").css("backgroundColor","#"+a);
jQuery(".subheaderbanner").css("backgroundColor","#"+a);
jQuery("#footerwrap").css("backgroundColor","#"+a);
jQuery(".ddsmoothmenu ul li ul li a").hover(
function(){
jQuery(this).css("background","#"+a)},
function(){
jQuery(this).css("background","transparent")});
jQuery(".buttonlight").hover(
function(){
jQuery(this).css("backgroundColor","#"+a)},
function(){
});
jQuery(".buttondark").hover(
function(){
jQuery(this).css("backgroundColor","#"+a)},
function(){
jQuery(this).css("backgroundColor","#444444")});
jQuery("#search .searchbutton").hover(
function(){
jQuery(this).css("backgroundColor","#"+a)},
function(){
jQuery(this).css("backgroundColor","transparent")});
jQuery(".blogpages li a").hover(
function(){
jQuery(this).css("backgroundColor","#"+a)},
function(){
});
jQuery(".blogpages li .selected").css("backgroundColor","#"+a);
jQuery(".addreply").hover(
function(){
jQuery(this).css("backgroundColor","#"+a)},
function(){
});
jQuery(".sendmessage").hover(
function(){
jQuery(this).css("backgroundColor","#"+a)},
function(){
});
jQuery(".sendnews").hover(
function(){
jQuery(this).css("backgroundColor","#"+a)},
function(){
});
jQuery("a.portfoliobutton").css("backgroundColor","#"+a);
jQuery(".portfoliobutton").hover(
function(){
jQuery(this).css("backgroundColor","#"+a)},
function(){
});
jQuery(".portfoliobutton_noselect").hover(
function(){
jQuery(this).css("backgroundColor","#"+a)},
function(){
});
jQuery(".postinfo a:link").css("color","#"+a);
jQuery(".postinfo a:visited").css("color","#"+a);
jQuery(".postinfo a").hover(
function(){
jQuery(this).css("color","#999")},
function(){
jQuery(this).css("color","#"+a)});
jQuery(".blogcategories a:link").css("color","#"+a);
jQuery(".blogcategories a:visited").css("color","#"+a);
jQuery(".blogcategories a").hover(
function(){
jQuery(this).css("color","#999")},
function(){
jQuery(this).css("color","#"+a)});
jQuery(".sidebar .popularbloglist a:link").css("color","#"+a);
jQuery(".sidebar .popularbloglist a:visited").css("color","#"+a);
jQuery(".sidebar .popularbloglist a").hover(
function(){
jQuery(this).css("color","#999")},
function(){
jQuery(this).css("color","#"+a)});
jQuery(".contacttable a:link").css("color","#"+a);
jQuery(".contacttable a:visited").css("color","#"+a);
jQuery(".contacttable a").hover(
function(){
jQuery(this).css("color","#999")},
function(){
jQuery(this).css("color","#"+a)})}jQuery("#optionsbtn").toggle(
function(){
jQuery("#optionswrap").animate({left:"0px"},300)},
function(){
jQuery("#optionswrap").animate({left:"-200px"},300)});
jQuery("#colorSelector").ColorPicker({color:"#327aa3",onShow:
function(a){jQuery(a).fadeIn(500);
return false},onHide:
function(a){jQuery(a).fadeOut(500);
return false},onChange:
function(b,c,d){a(c)}});
jQuery(".le_blue").mousedown(
function(){
jQuery("#colorSelector").ColorPickerSetColor("#327aa3");
a("327aa3")});
jQuery(".le_orange").mousedown(
function(){
jQuery("#colorSelector").ColorPickerSetColor("#d46300");
a("d46300")});
jQuery(".le_green").mousedown(
function(){
jQuery("#colorSelector").ColorPickerSetColor("#718500");
a("718500")});
jQuery(".le_red").mousedown(
function(){
jQuery("#colorSelector").ColorPickerSetColor("#850007");
a("850007")});
jQuery(".le_violet").mousedown(
function(){
jQuery("#colorSelector").ColorPickerSetColor("#850047");
a("850047")});
jQuery(".le_dark").mousedown(
function(){
jQuery("#colorSelector").ColorPickerSetColor("#424242");
a("424242")});
jQuery(".pattern1").mousedown(
function(){
jQuery("body").css("background-image","url('images/tiles/pattern1.gif')")});
jQuery(".pattern2").mousedown(
function(){
jQuery("body").css("background-image","url('images/tiles/pattern2.gif')")});
jQuery(".pattern3").mousedown(
function(){
jQuery("body").css("background-image","url('images/tiles/pattern3.gif')")});
jQuery(".pattern4").mousedown(
function(){
jQuery("body").css("background-image","url('images/tiles/pattern4.gif')")});
jQuery(".pattern5").mousedown(
function(){
jQuery("body").css("background-image","url('images/tiles/pattern5.gif')")});
jQuery(".pattern6").mousedown(
function(){
jQuery("body").css("background-image","url('images/tiles/pattern6.gif')")});
jQuery("#slider").anythingSlider({resizeContents:false,addWmodeToObject:"transparent",buildArrows:false,buildStartStop:false,buildNavigation:true,hashTags:false,autoPlay:true,delay:5e3});
jQuery("a[data-rel^='fadeimg'] img").hover(
function(){
jQuery(this).stop().fadeTo("fast",.5)},
function(){
jQuery(this).stop().fadeTo("fast",1)});
ddsmoothmenu.init({mainmenuid:"smoothmenu1",orientation:"h",classname:"ddsmoothmenu",contentsource:"markup"});
jQuery("#headersocial img[title]").tooltip({opacity:.5,effect:"fade",delay:0,fadeOutSpeed:0,fadeInSpeed:0});
if(jQuery("#hometeasers").length!=0){jQuery("#hometeasers").tinycarousel({display:3,interval:false,intervaltime:5e3,duration:600})}jQuery("ul.tabs").tabs("div.panes > div");
setSidebarHeight();
jQuery("#footercontainer div:last-child").css({margin:"0 0 0 55px"});
jQuery(".pricingtable td:odd").css({background:"#e5e5e5"});
if(jQuery("#contactform").length!=0){addForm("#contactform")}if(jQuery("#newsletterform").length!=0){addForm("#newsletterform")}if(jQuery("#replyform").length!=0){addForm("#replyform")}addTwitter();
addFacebook();
addPrettyPhoto();
addPortfolio("1");
addPortfolio("3")});
jQuery(window).load(
function(){
if(jQuery("#tweets").length!=0){jQuery.ajaxSetup({cache:true});
jQuery.getJSON("http://twitter.com/status/user_timeline/damojo82.json?count=2&callback=?",
function(a){jQuery.each(a,
function(a,b){jQuery(".tweetlist").append("<li>"+b.text.linkify()+"<p>"+relative_time(b.created_at)+"</p></li>")})})}if(jQuery("#nivoSlider").length!=0){jQuery("#nivoSlider").nivoSlider({effect:"random",slices:15,boxCols:8,boxRows:4,animSpeed:500,pauseTime:3e3,startSlide:0,directionNav:false,directionNavHide:true,controlNav:true,controlNavThumbs:false,controlNavThumbsFromRel:false,controlNavThumbsSearch:".jpg",controlNavThumbsReplace:"_thumb.jpg",keyboardNav:true,pauseOnHover:true,manualAdvance:false,captionOpacity:1,prevText:"?",nextText:"?",beforeChange:
function(){
},afterChange:
function(){
},slideshowEnd:
function(){
},lastSlide:
function(){
},afterLoad:
function(){
}})}addPiecemaker();
loadGoogleMaps();
removeSkype()});
String.prototype.linkify=
function(){
return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/,
function(a){return a.link(a)})}