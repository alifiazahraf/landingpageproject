<?php 
/*
| -------------------------------------------------------------------------------
| Author            : GS
| Template Name     : G-Black
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
    <title><?php oc_title();?></title> 
    <meta http-equiv="content-language" content="en"/>
    <meta name="description" content="<?php oc_description();?>">
    <meta name="keywords" content="<?php echo config('sitekeywords');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?php echo site_url() . '/assets/images/'.config('favicon')?>" type="image/x-icon">
    <link rel="canonical" href="<?php echo site_uri() ?>"/>
    <meta property="og:image" content="https://g-silvers.website/images/d5.png" />
    <?php if (isset($images)): ?>
        <meta property="og:image" content="<?php echo $images ?>" />
        <?php else: ?>
        <?php endif ?>
        
        <link rel="stylesheet" id="dash-css" href="<?php style_theme();?>/css/dashicons.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php style_theme();?>/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/maina.css" type="text/css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/jquery.cluetip.css" type="text/css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/slide.css" type="text/css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/psbar.css" type="text/css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/star-rating.css" type="text/css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/special/special.css?v=0.3" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <script type="text/javascript" defer="defer" src="<?php style_theme();?>/js/jquery-1.js"></script> 
        <script type="text/javascript" defer="defer" src="<?php style_theme();?>/js/psbar.js"></script>

        <?php oc_head(); ?>
        <script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops.php"});
//]]>
</script>
<style>
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey; 
        border-radius: 10px;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: green; 
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #00DA2B; 
    }
</style>
<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops.php"});
//]]>
</script>
<?php
  $bg = array('https://r1---sn-npoe7nez.c.drive.google.com/videoplayback?id=99a19800429093be&itag=22&source=webdrive&requiressl=yes&mvi=0&pl=22&sc=yes&ttl=transient&ei=DsxeXZTJGMS7uAL52rGYDg&susc=dr&driveid=1UmkURYQVdUGg9wmlYpixFI5OuFeLpx_D&app=texmex&mime=video/mp4&dur=7142.968&lmt=1531988615515178&ip=125.163.54.77&ipbits=0&expire=1566508110&cp=QVNLWEZfV1FPQVhOOjVUdmJBUjRUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=7B35639BCA9253736535EEB939F5B95EDE1870F6.781684F9D7AAB5E3B0DE1D5556F0B64016F002DE&key=cms1&cpn=fFJi2XwHrEKSRv7Q&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-npold7e&req_id=f17170338c2036e2&cms_redirect=yes&mm=34&mn=sn-npoe7nez&ms=ltu&mt=1566493344&mv=u','https://r5---sn-npoe7ned.c.drive.google.com/videoplayback?id=049fec82d9af8679&itag=22&source=webdrive&requiressl=yes&mvi=4&pl=22&sc=yes&ttl=transient&ei=CcxeXf_hKM3UuQKS3q6oBw&susc=dr&driveid=1EAq8Rm8fyAd-MBTz7Ycwz_d-Ft3hA_rG&app=texmex&mime=video/mp4&dur=6947.665&lmt=1531994363130924&ip=125.163.54.77&ipbits=0&expire=1566508105&cp=QVNLWEZfV1FORlhOOjVUdmJBUTlUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=7B98645FC90DED40E9990DA618510D93D523D0EF.807F01F1C634D5128E153F188338E112D7BAD0BD&key=cms1&cpn=YGkA4YpP8bB-2p0i&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-nposd76&req_id=72c2cdfda76c36e2&cms_redirect=yes&mm=34&mn=sn-npoe7ned&ms=ltu&mt=1566493344&mv=u','https://r3---sn-npoe7ney.c.drive.google.com/videoplayback?id=a62afb8be323e2c8&itag=22&source=webdrive&requiressl=yes&mvi=2&pl=22&ttl=transient&ei=A8xeXZ3eLcS7uAL52rGYDg&susc=dr&driveid=1ecjpQCsj-Y7QyE9wAnIeO5L4vfWJ5Cjw&app=texmex&mime=video/mp4&dur=6995.266&lmt=1531988879033941&ip=125.163.54.77&ipbits=0&expire=1566508099&cp=QVNLWEZfV1BXSlhOOjVUdmJaWjNUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,source,susc,ttl&signature=7ABD82AE253B49B5FE2683D92BE3500972CE51E6.22FA385C30F0C817F7A7A2EC36EB69C2F6A1555E&key=cms1&cpn=bAO8mXR2tH5vQnxz&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-nposk7s&req_id=1c0a5eecf4536e2&cms_redirect=yes&mm=34&mn=sn-npoe7ney&ms=ltu&mt=1566493344&mv=u','https://r2---sn-npoeene6.c.drive.google.com/videoplayback?id=30591deeae7e0709&itag=22&source=webdrive&requiressl=yes&mvi=1&pl=22&sc=yes&ttl=transient&ei=-steXbCINYL-uwLGjYfoBg&susc=dr&driveid=1d29WJgW6KF5Bi-EQgmocvyTA7ZjnpsMG&app=texmex&mime=video/mp4&dur=6948.246&lmt=1531988386213298&ip=125.163.54.77&ipbits=0&expire=1566508090&cp=QVNLWEZfV1BXQVhOOjVUdmJaWjRUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=55F3D405EFBB70E88C27C46928A1A16222B110EB.310AF5FA7E0A6339DB44C0212BD6BD83E912E68D&key=cms1&cpn=LWY_h6Ncn1sNEHMD&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-npoed7l&req_id=4aad9617eafd36e2&cms_redirect=yes&mm=34&mn=sn-npoeene6&ms=ltu&mt=1566493344&mv=u' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
  ?>
</head>
<!--header-->
<header>
   
    <div class="container">
        <div class="header-logo">
            <h1>
                <a title="Watch Your Favorite Movies Online" href="<?php echo site_url() ?>" id="logo"><?php oc_title();?></a>
            </h1>
        </div>
        <div class="mobile-menu"><i class="fa fa-reorder"></i></div>
        <div class="mobile-search"><i class="fa fa-search"></i></div>
        <div id="menu">
            <ul class="top-menu">
                <li class="active">
                    <a href="<?php echo site_url() ?>" title="Home">HOME</a>
                </li>
                
                <li class="">
                    <a href="<?php echo view_page( 'tv-popular' );?>" title="Popular">POPULAR</a>
                </li>
                <li class="">
                    <a href="<?php echo view_page( 'tv-ontheair' );?>" title="On Air">ON AIR TV</a>
                </li>
                <li class="">
                    <a href="<?php echo view_page( 'tv-airing' );?>" title="Schedule">TV SCHEDULE</a>
                </li>
                <li class="">
                    <a href="<?php echo view_page( 'movies-nowplay' );?>" title="Now Playing">BOX OFFICE</a>
                </li>
                <li class="">
                   <a href="<?php echo view_page( 'upcoming-movies' );?>" title="Upcoming">UPCOMING</a>
               </li>
               <li class="">
                   <a href="<?php echo view_page( 'toprated-movies' );?>" title="Top Rated">TOP RATED</a>
               </li>
               <li>
                   <a data-toggle="modal" data-target="#pop-login" href="#" title="Request movies">REQUEST</a>
               </li>
               
           </ul>
           <div class="clearfix"></div>
       </div>
       
       <div id="top-user">
        <div class="top-user-content guest">
            <a href="#" class="btn btn-success btn-login" title="Login" data-target="#pop-login" data-toggle="modal">LOGIN</a>
        </div>
    </div>
    <div id="search">
        <div class="search-content"><form class="search"  action="/" type="post" onsubmit="javascript:this.action.replace(/VALUE/\ig,(document.getElementById('search').value)); alert(this.action);" novalidate>
            
            <input name="s" class="form-control search-input" placeholder="Type title only" type="text">
            <a onclick="document.forms[0].submit();return false;" class="search-submit" href="" title="Search"><i class="fa fa-search"></i></a>
        </form>

        
        
    </div>
</div>
<div class="clearfix"></div>
</div>
</header>
<!--/header-->