<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!--
<link rel="icon" 
	type="image/png" 
	href="images/showcase.png">
-->
<title>Now Showcasing: The Book of Margery Kempe</title>
<link href="wynkyn_styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

// Optimize for Mobile Devices //
$(document).ready(function(){
	var width = $(window).width();
	if (width < 641){
		$("#navbar").css({"height":"30px", "overflow-x":"auto", "overflow-y":"hidden", "white-space":"nowrap"});	
		$("[src*='images/navbar']").css({"height":"30px", "width":"39px"});
		$("[src='images/navbar/navbar.jpg']").css({"height":"22", "width":"300"});
		$("#first_button").css("margin-left", "68px");
		$(".navbar-navigation").css({"height":"30px", "width":"165px"});
		$(".navbar-location").css({"font-size":"12pt", "height":"21px", "margin-top":"4px", "margin-left":"12px", "margin-right":"12px", "width":"60px"});
		$("#navbar-facs").css({"border":"none", "height":"100%", "left":"50%", "top":"31px", "width":"100%", "z-index":"4"});
		$("#toggle-view").css("margin-left", "30px");
		$("#toggle-scribe").css("margin-left", "30px");
		$("#navbar-folio, #navbar-magnify, #navbar-enlarge, #navbar-scribe, #navbar-info").css({"border":"none", "height":"100%", "left":"0px", "opacity":"0.93", "position":"fixed", "top":"31px", "width":"100%"});
		$(".navbar-folio-text").css({"font-size":"12pt", "line-height":"21px", "padding-left":"15px", "padding-top":"15px"});
		$(".shortcut").css({"font-size":"12pt", "line-height":"21px", "padding-left":"15px", "width":"55px"});
		$("#facs_preview, #facs").css({"height":"550px", "top":"31px"});
		$(".navbar-magnify-text, .navbar-enlarge-text, .navbar-scribe-text").css({"font-size":"12pt", "line-height":"21px", "padding-left":"15px", "padding-bottom":"60px", "padding-top":"15px"});
		$("#12pt").css("color", "#FFF");
		$("#8pt").css("color", "#09C");
		$("#vss-magnify, #vss-enlarge").show();
		$("#x0").css("color","#09C");
		$("#x1").css("color","#FFF");
		$("#toggle-info, #toggle-info_ro").css({"float":"none", "margin-left":"30px"});
		//$("body").css("font-weight", "normal");
		$(".medieval").css({"line-height":"5pt", "font-size":"8pt", "-moz-text-size-adjust":"100%", "-ms-text-size-adjust":"100%", "-webkit-text-size-adjust":"100%"});
	}
	else if(/Android|BlackBerry|CriOS|IEMobile|iPad|iPhone|iPod|Opera Mini|Opera Mobi|Mobile|Tablet|Touch/i.test(navigator.userAgent)){
		$("#navbar").css("height", "30px");
		$("[src*='images/navbar']").css({"height":"30px", "width":"39px"});
		$("[src='images/navbar/navbar.jpg']").css({"width":"600", "height":"44"});
		$(".navbar-folio-text, .navbar-magnify-text, .navbar-enlarge-text, .navbar-scribe-text, .shortcut").css({"font-size":"10pt", "line-height":"20px"});
		$("#navbar-tab").css({"height":"18px", "width":"36px"});
		$("#toggle-navbar").css({"height":"15px", "width":"30px"});
		$("#first_button").css("margin-left", "68px");
		$(".navbar-navigation").css({"height":"30px", "width":"165px"});
		$(".navbar-location").css({"font-size":"12pt", "height":"21px", "margin-top":"4px", "margin-left":"12px", "margin-right":"12px", "width":"60px"});
		$("#navbar-folio").css({"left":"162px", "top":"30px", "width":"150px"});
		$("#navbar-facs").css({"left":"296px", "top":"30px"});
		$("#toggle-view").css("margin-left", "30px");
		$("#navbar-magnify").css({"left":"390px", "top":"30px"});
		$("#navbar-enlarge").css({"left":"429px", "top":"30px"});
		$("#toggle-scribe").css("margin-left", "30px");
		$("#navbar-scribe").css({"left":"498px", "top":"30px"});
	}
});

// Preload 1 r //
$(document).ready(function(){
	$("#facs").load(function(){
		$("#facs_preview").hide();
		$("#facs").show();
	});
});
// Toggle NavBar //
$(document).ready(function(){
    $("#navbar-tab").toggle(function(){
		$("#toggle-navbar").attr("src", "images/navbar/tab.jpg");
		$("#navbar").slideUp("fast");
		$("#content").css("padding-bottom", "0px");
		},function(){
		$("#toggle-navbar").attr("src", "images/navbar/tab_ro.jpg");
		$("#navbar").slideDown("fast");
		$("#content").css("padding-bottom", "21px");
	});
});
// Toggle Folio Drop-down //
$(document).ready(function(){
    $(".navbar-location").click(function(){
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-scribe").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-folio").toggle();
    });
});
// Select Binding //
$(document).ready(function(){
	$("#first_button, #navbar-folio-binding, #previous-1r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-binding").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-binding").show();
		$(".folio").hide();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews_wynkyn/binding_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/binding.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Binding Facsimle //
$(document).ready(function(){
	$("#navbar-folio-binding").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/binding_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/blank.jpg");
	});
});
// Select 1 r //
$(document).ready(function(){
	$("#navbar-folio-1r, #next-binding, #previous-1v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-1r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-1r").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/1r.jpg");
		$(".folio").hide();
		$("#1r").show();
		$("#facs_preview").attr("src", "images/_previews_wynkyn/1r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/1r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 1 r //
$(document).ready(function(){
	$("#navbar-folio-1r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/1r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/blank.jpg");
	});
});
// Select 1 v //
$(document).ready(function(){
	$("#navbar-folio-1v, #next-1r, #previous-2r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-1v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-1v").show();
		$(".folio").hide();
		$("#1v").show();
		$("#facs").hide();
		$("#facs_preview").attr("src", "images/_previews_wynkyn/1v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/1v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 1 v //
$(document).ready(function(){
	$("#navbar-folio-1v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/1v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/blank.jpg");
	});
});
// Select 2 r //
$(document).ready(function(){
	$("#navbar-folio-2r, #next-1v, #previous-2v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-2r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-2r").show();
		$(".folio").hide();
		$("#2r").show();
		$("#facs").hide();
		$("#facs_preview").attr("src", "images/_previews_wynkyn/2r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/2r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 2 r //
$(document).ready(function(){
	$("#navbar-folio-2r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/2r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/blank.jpg");
	});
});
// Select 2 v //
$(document).ready(function(){
	$("#navbar-folio-2v, #next-2r, #previous-3r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-2v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-2v").show();
		$(".folio").hide();
		$("#2v").show();
		$("#facs").hide();
		$("#facs_preview").attr("src", "images/_previews_wynkyn/2v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/2v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 2 v //
$(document).ready(function(){
	$("#navbar-folio-2v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/2v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/blank.jpg");
	});
});
// Select 3 r //
$(document).ready(function(){
	$("#navbar-folio-3r, #next-2v, #previous-3v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-3r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-3r").show();
		$(".folio").hide();
		$("#3r").show();
		$("#facs_preview").attr("src", "images/_previews_wynkyn/3r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/3r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 3 r //
$(document).ready(function(){
	$("#navbar-folio-3r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/3r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/blank.jpg");
	});
});
// Select 3 v //
$(document).ready(function(){
	$("#navbar-folio-3v, #next-3r, #previous-4r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-3v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-3v").show();
		$(".folio").hide();
		$("#3v").show();
		$("#facs_preview").attr("src", "images/_previews_wynkyn/3v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/3v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 3 v //
$(document).ready(function(){
	$("#navbar-folio-3v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/3v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/blank.jpg");
	});
});
// Select 4 r //
$(document).ready(function(){
	$("#navbar-folio-4r, #next-3v, #previous-4v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-4r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-4r").show();
		$(".folio").hide();
		$("#4r").show();
		$("#facs_preview").attr("src", "images/_previews_wynkyn/4r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/4r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 4 r //
$(document).ready(function(){
	$("#navbar-folio-4r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/4r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/blank.jpg");
	});
});
// Select 4 v //
$(document).ready(function(){
	$("#navbar-folio-4v, #next-4r, #last_button").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-4v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-4v").show();
		$(".folio").hide();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews_wynkyn/4v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles_wynkyn/4v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 4 v //
$(document).ready(function(){
	$("#navbar-folio-4v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/4v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews_wynkyn/blank.jpg");
	});
});
// Toggle View //
$(document).ready(function(){
	$("#toggle-view").toggle(function(){ //Facsimile View//
		$("#toggle-view").attr("src", "images/navbar/facsimile_ro.jpg");
		$("#content-right").css("width", "0");
		$("#content-right").css("height", "0");
		$("#content-left").css("width", "100%");
		$("#content-left").css("height", "100%");},
		function(){ //Transcription View//
		$("#toggle-view").attr("src", "images/navbar/transcription_ro.jpg");
		$("#content-left").css("width", "0");
		$("#content-left").css("height", "0");
		$("#content-right").css("width", "100%");
		$("#content-right").css("height", "100%");
		$("#copyright").css("display", "none");},
		function(){ //Facsimile-Transcription View//
		$("#toggle-view").attr("src", "images/navbar/facsimile-transcription_ro.jpg");
		$("#content-right").css("width", "49.97%");
		$("#content-right").css("height", "100%");
		$("#content-left").css("width", "49.97%");
		$("#content-left").css("height", "100%");
		$("#copyright").css("display", "");}
	);
});
// Toggle Magnification Drop-down //
$(document).ready(function(){
    $("#toggle-magnify").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-scribe").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-magnify").toggle();
    });
});
// Reset Image Magnification for Very Small Screens //
$(document).ready(function(){
	$("#x0").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x0").css("color", "#09C");
		//$("#facs").attr("width", "900");
		$("#facs_preview, #facs").attr("height", "550");
		//$("#facs_preview, #facs").attr("width", "100%");//
	});
});
// Reset Image Magnification to One Times (Default) //
$(document).ready(function(){
	$("#x1").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x1").css("color", "#09C");
		//$("#facs").attr("width", "900");
		$("#facs_preview, #facs").attr("height", "900");
		//$("#facs_preview, #facs").attr("width", "100%");//
	});
});
// Magnify Image Two Times //
$(document).ready(function(){
	$("#x2").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x2").css("color", "#09C");
		//$("#facs").attr("width", "1800");
		$("#facs_preview, #facs").attr("height", "1800");
		//$("#facs_preview, #facs").attr("width", "200%");//
	});
});
// Magnify Image Four Times //
$(document).ready(function(){
	$("#x4").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x4").css("color", "#09C");
		//$("#facs").attr("width", "3600");
		$("#facs_preview, #facs").attr("height", "3600");
		//$("#facs_preview, #facs").attr("width", "400%");//
	});
});
// Magnify Image Eight Times //
$(document).ready(function(){
	$("#x8").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#09C");
		//$("#facs").attr("width", "7200");
		$("#facs_preview, #facs").attr("height", "7200");
		//$("#facs_preview, #facs").attr("width", "800%");//
	});
});
// Toggle Point Size Drop-down //
$(document).ready(function(){
    $("#toggle-enlarge").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-magnify").hide();
		$("#navbar-scribe").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-enlarge").toggle();
    });
});
// Reduce Text to 8pt (Very Small Screen Default) //
$(document).ready(function(){
	$("#8pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#8pt").css("color", "#09C");
		$(".medieval").css("line-height", "5pt");
		$(".medieval").css("font-size", "8pt");
	});
});
// Reset Text to 12pt (Default) //
$(document).ready(function(){
	$("#12pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#12pt").css("color", "#09C");
		$(".medieval").css("line-height", "7.5pt");
		$(".medieval").css("font-size", "12pt");
	});
});
// Enlarge Text to 16pt //
$(document).ready(function(){
	$("#16pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#16pt").css("color", "#09C");
		$(".medieval").css("line-height", "10pt");
		$(".medieval").css("font-size", "16pt");
	});
});
// Enlarge Text to 20pt //
$(document).ready(function(){
	$("#20pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#20pt").css("color", "#09C");
		$(".medieval").css("line-height", "12.5pt");
		$(".medieval").css("font-size", "20pt");
	});
});
// Enlarge Text to 24pt //
$(document).ready(function(){
	$("#24pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#09C");
		$(".medieval").css("line-height", "15pt");
		$(".medieval").css("font-size", "24pt");
	});
});
// Toggle Scribe Drop-down //
$(document).ready(function(){
    $("#toggle-scribe").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-scribe").toggle();
	});
});
// Toggle Librarian //
$(document).ready(function(){
	$("#toggle-LIBRARIAN").toggle(function(){
		$("#toggle-LIBRARIAN").css("color", "#FFF");
		$(".add-LIBRARIAN").hide();
		$(".add-bottom-LIBRARIAN").hide();},
		function(){
		$("#toggle-LIBRARIAN").css("color", "#09C");
		$(".add-LIBRARIAN").show();
		$(".add-bottom-LIBRARIAN").show();}
	);
});
// Close Drop-downs //
$(document).ready(function(){
	$("#content, #first_button, .previous_button, .next_button, #last_button, #toggle-view, #toggle-marginalia, #toggle-expansion").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-scribe").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
	});
});
// Toggle Marginalia //
$(document).ready(function(){
	$("#toggle-marginalia").toggle(function(){
		$("#toggle-marginalia").attr("src", "images/navbar/marginalia.jpg");
		$("[class*='top']").hide();
		$("[class*='margin']").hide();
		$("[class*='bottom']").hide();},
		function(){
		$("#toggle-marginalia").attr("src", "images/navbar/marginalia_ro.jpg");
		$("[class*='top']").show();
		$("[class*='margin']").show();
		$("[class*='bottom']").show();}
	);
});
// Toggle Expansions //
$(document).ready(function(){
	$("#toggle-expansion").toggle(function(){
		$("#toggle-expansion").attr("src", "images/navbar/expand_ro.jpg");
		$(".abbr").hide();
		$(".expan").show();},
		function(){
		$("#toggle-expansion").attr("src", "images/navbar/expand.jpg");
		$(".expan").hide();
		$(".abbr").show();}
	);
});
// Toggle Info Panel //
$(document).ready(function(){
	$("#toggle-info, #toggle-info_ro").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-scribe").hide();
		$("#toggle-info_ro").toggle();
		$("#toggle-info").toggle();
		$("#navbar-info").toggle();
	});
});
</script>
</head>
<body>
<div id="main">
  <div id="navbar-tab">
	<img id="toggle-navbar" src="images/navbar/tab_ro.jpg" alt="Show/Hide NavBar Button" title="Show/Hide the Navbar" width="20" height="10" />
  </div>
  <div id="navbar">
	<img id="first_button" src="images/navbar/first.jpg" alt="First Folio Button" title="Go to the First Folio" width="26" height="20" />
	<div id="navbar-navigation-binding" class="navbar-navigation" style="display:none">
		<img id="previous-binding" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">bdg</div><img id="next-binding" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-1r" class="navbar-navigation">
		<img id="previous-1r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">1 r</div><img id="next-1r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-1v" class="navbar-navigation" style="display:none">
		<img id="previous-1v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">1 v</div><img id="next-1v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-2r" class="navbar-navigation" style="display:none">
		<img id="previous-2r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">2 r</div><img id="next-2r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
	</div>
	<div id="navbar-navigation-2v" class="navbar-navigation" style="display:none">
		<img id="previous-2v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">2 v</div><img id="next-2v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
	</div>
	<div id="navbar-navigation-3r" class="navbar-navigation" style="display:none">
		<img id="previous-3r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">3 r</div><img id="next-3r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-3v" class="navbar-navigation" style="display:none">
		<img id="previous-3v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">3 v</div><img id="next-3v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-4r" class="navbar-navigation" style="display:none">
		<img id="previous-4r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">4 r</div><img id="next-4r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-4v" class="navbar-navigation" style="display:none">
		<img id="previous-4v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">4 v</div><img id="next-4v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
<img id="last_button" src="images/navbar/last.jpg" alt="Last Folio Button" title="Go to the Last Folio" width="26" height="20" /><img id="toggle-view" src="images/navbar/facsimile-transcription_ro.jpg" alt="Toggle Views Button" title="Toggle Views" width="26" height="20" /><img id="toggle-magnify" src="images/navbar/magnify_ro.jpg" alt="Magnification Button" title="Increase the Magnification of the Facsimile" width="26" height="20" /><img id="toggle-enlarge" src="images/navbar/enlarge_ro.jpg" alt="Point Size Button" title="Increase the Point Size of the Transcription" width="26" height="20" /><img id="toggle-scribe" src="images/navbar/scribe_ro.jpg" alt="Scribes Button" title="Toggle Scribes On/Off" width="26" height="20" /><img id="toggle-marginalia" src="images/navbar/marginalia_ro.jpg" alt="Marginalia Button" title="Toggle Marginalia On/Off" width="26" height="20" /><img id="toggle-expansion" src="images/navbar/expand.jpg" alt="Expansion Button" title="Toggle Expansions On/Off" width="26" height="20" /><img id="toggle-info" src="images/navbar/info.jpg" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="float:right" /><img id="toggle-info_ro" src="images/navbar/info_ro.jpg" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="display:none; float:right" />
	<div id="navbar-folio" title="Select a Folio">
    	<span class="navbar-folio-text">Folio:
            <br/>
            <br/><div id="navbar-folio-binding" class="shortcut">Binding</div>
            <br/>
            <br/><div id="navbar-folio-1r" class="shortcut" style="color:#09C">1 r</div>
            <br/>
            <br/><div id="navbar-folio-1v" class="shortcut">1 v</div>
            <br/>
            <br/><div id="navbar-folio-2r" class="shortcut">2 r</div>
            <br/>
            <br/><div id="navbar-folio-2v" class="shortcut">2 v</div>
            <br/>
            <br/><div id="navbar-folio-3r" class="shortcut">3 r</div>
            <br/>
            <br/><div id="navbar-folio-3v" class="shortcut">3 v</div>
            <br/>
            <br/><div id="navbar-folio-4r" class="shortcut">4 r</div>
            <br/>
            <br/><div id="navbar-folio-4v" class="shortcut">4 v</div>
            <br/>
            <br/>
        </span>
	</div>
    <div id="navbar-facs" style="display:none">
    	<img id="navbar-facs_preview" src="images/_previews_wynkyn/blank.jpg" width="100%" />
    </div>    
	<div id="navbar-magnify" title="Increase the Magnification of the Facsimile">
		<span class="navbar-magnify-text">Facsimile Magnification:
            <span id="vss-magnify" style="display:none">
            	<br/>
            	<br/><span id="x0" class="navbar-magnify-text">Default</span>
            </span>
            <br/>
            <br/><span id="x1" class="navbar-magnify-text" style="color:#09C">100%</span>
            <br/>
            <br/><span id="x2" class="navbar-magnify-text">200%</span>
            <br/>
            <br/><span id="x4" class="navbar-magnify-text">400%</span>
            <br/>
            <br/><span id="x8" class="navbar-magnify-text">800%</span>
            <br/>
            <br/>
		</span>
	</div>
    <div id="navbar-enlarge" title="Increase the Point Size of the Transcription">
		<span class="navbar-enlarge-text">Transcription Point Size:
            <span id="vss-enlarge" style="display:none">
	            <br/>
    	        <br/><span id="8pt" class="navbar-enlarge-text">8pt</span>
            </span>
            <br/>
            <br/><span id="12pt" class="navbar-enlarge-text" style="color:#09C">12pt</span>
            <br/>
            <br/><span id="16pt" class="navbar-enlarge-text">16pt</span>
            <br/>
            <br/><span id="20pt" class="navbar-enlarge-text">20pt</span>
            <br/>
            <br/><span id="24pt" class="navbar-enlarge-text">24pt</span>
            <br/>
            <br/>
        </span>
	</div>
<div id="navbar-scribe" title="Toggle Scribes On/Off">
		<span class="navbar-scribe-text">
        	<span style="color:#FFF">Scribe:</span>
            <br/>
            <br/><span id="toggle-LIBRARIAN" class="navbar-scribe-text"><span style="background-color:#CCC">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Librarian</span>
            <br/>
            <br/>
        </span>
	</div>
  </div>
  <div id="navbar-info">
  		<span class="navbar-info-text">
            <div style="color:#999; font-size:48pt; font-weight:normal; left:106px; position:absolute; top:19px">2</div>
            <p class="heading_1">Showcase</p>
            <br/>
            <hr/>
            <span class="heading_1">Using</span> <span class="heading_2">Showcase</span>
            <hr/>
            <p>Everything in Showcase starts with the Navbar, the svelte toolbar at the top of this browser window. From left to right, the controls in the Navbar perform the following functions (when active, these controls appear <span style="color:#09F">blue</span>):</p>
            <br/>
            <div style="text-align:center"><img src="images/navbar/navbar.jpg" alt="Image of the Navbar" width="600" height="44" /></div>
            <br/>
            <p><span class="heading_3">1&#x2012;Show/Hide the Navbar</span><br/>Clicking or tapping this control reduces the Navbar to a small tab in the top left corner of the browser window. Clicking or tapping this tab restores the Navbar.</p>
            <br/>
            <p><span class="heading_3">2&#x2012;Go to the First Folio</span><br/>Clicking or tapping this control takes the user to Folio i r of <i>The Book of Margery Kempe</i>.</p>
            <br/>
            <p><span class="heading_3">3&#x2012;Go to the Previous Folio</span><br/>Clicking or tapping this control takes the user one recto or verso backward in <i>The Book of Margery Kemep</i>.</p>
            <br/>
            <p><span class="heading_3">4&#x2012;Select a Folio</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual rectos and versos may be previewed and "jumped" to directly. The control also displays the id of the current recto or verso.</p>
            <br/>
            <p><span class="heading_3">5&#x2012;Go to the Next Folio</span><br/>Clicking or tapping this control takes the user one recto or verso forward in <i>The Book of Margery Kemep</i>.</p>
            <br/>
            <p><span class="heading_3">6&#x2012;Go to the Last Folio</span><br/>Clicking or tapping this control takes the user to Folio 124 v of <i>The Book of Margery Kempe</i>.</p>
            <br/>
            <p><span class="heading_3">7&#x2012;Toggle Views</span><br/>Clicking or tapping this control enables the following views: Facsimile-Transcription, Facsimile-only, and Transcription-only.</p>
            <br/>
            <p><span class="heading_3">8&#x2012;Increase the Magnification of the Facsimile</span><br/>Clicking or tapping this control opens a drop-down menu, from which the magnification level of the facsimile can be adjusted between 100% and 800%.</p>
            <br/>
            <p><span class="heading_3">9&#x2012;Increase the Point Size of the Transcription</span><br/>Clicking or tapping this control opens a drop-down menu, from which the the font size of the transcription can be adjusted between 8 pt. and 24 pt.</p>
            <br/>
            <p><span class="heading_3">10&#x2012;Toggle Scribes On/Off</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual scribes/annotators may be toggled on (default) or off.</p>
			<br/>
            <p><span class="heading_3">11&#x2012;Toggle Marginalia On/Off</span><br/>Clicking or tapping this control turns marginalia on (default) or off.</p>
            <br/>
            <p><span class="heading_3">12&#x2012;Toggle Expansions On/Off</span><br/>Clicking or tapping this control turns expansions on or off (default). When expansions are turned off, Showcase displays the medieval abbreviations that appear in <i>The Book of Margery Kempe</i>.</p>
            <br/>
            <p><span class="heading_3">13&#x2012;Learn about Showcase</span><br/>Clicking or tapping this control shows or hides this window.</p>
            <br/>
            <!--<hr/>
            <span class="heading_1">About</span> <span class="heading_2">Showcase</span>
            <hr/>
            <p>Showcase debuted at the 2011 Annual Conference and Members' Meeting of the TEI Consortium in W&#x00FC;rzburg, Germany.</p>
            <p>Showcase 2 was released in March 2014. The new version</p>
                <ol style="padding-right: 20px">
                    <li>has been optimzed to load more than four times faster;</li>
                    <br/>
                    <li>features simplified controls and drop-down menus that extend the webapp's functionality;</li>
                    <br/>
                    <li>features improved previews and jump navigation&#x2014;via Scroll-to-Preview for desktop and Tap-to-Preview for mobile;</li>
                    <br/>
                    <li>now intelligently adapts to screen size&#x2014;upscaling controls, menus, and windows for large screens and downscaling them for small&#x2014;automatically, without significantly altering the user interface, and without sacrificing functionality; and</li>
                    <br/>
					<li>features early support for very small screens, such as the iPhone's.</li>
                </ol>
            <p>Showcase continues to be developed by its author, Charles W. Borchers, IV, for Southeastern Louisiana University's Digital Humanities Program and <i>Humanities Online</i>. This build of Showcase includes code specifically developed for <i>The Book of Margery Kempe</i></p>
            <p>Universities and colleges interested in adapting Showcase for their own projects are encouraged to contact the author at <a href="mailto:charles.borchers@selu.edu">charles.borchers@selu.edu</a>.</p>
            <br/>-->
            <hr/>
            <span class="heading_1">Copyright Notice</span> <span class="heading_2">&#x0026; Conditions of Use</span>
            <hr/>
            <p>This edition of Showcase was created exclusively for <i>The Book of Margery Kempe</i>, a Digital Humanities project of Southeastern Louisiana University's Department of English. Showcase remains the intellectual property of and is &#x00A9; by its author, <a href="mailto:charles.borchers@selu.edu">Charles W. Borchers, IV</a>, and may not be modified or copied without his express permission. Your use of this software constitutes acknowledgement of this copyright and of the software's conditions of use.</p>
            <p>All images from Cambridge University Library Sel.5.27, "Here begynneth a shorte treatyse of contemplacyon taught by our lorde Ihesu cryste / or taken out of the boke of Margerie kempe of lynn." are &#x00A9; Cambridge University Library.</p>
            <p><a href="../software.php" target="_blank">Andron Scriptor Web 3.1</a>, the webfont developed for and used by Showcase, is a special edition of <a href="http://www.signographie.de/cms/front_content.php?idart=69&changelang=2" target="_blank">Andron&#x2122;</a>, financed by the Norwegian Research Council and the University of Bergen. <a href="http://www.mufi.info/fonts/#Andron" target="_blank">Andron Scriptor Web</a> exists to support scholarly editing in medieval philological studies and is provided free of charge by its creator and provider, Andreas St&#x00F6;tzner and the <a href="http://www.mufi.info" target="_blank">Medieval Unicode Font Initiative (MUFI)</a>. Both must be credited in any work which utilizes the font. Any alteration of the font, including, but not limited to, any alteration of its content, glyphs, or name, is a violation of international copyright law. If enhancements or improvements to the font are desired, these should be forwarded to MUFI for consideration in future releases of the font. Andron&#x2122; is a trademark of Andreas St&#x00F6;tzner; its design is &#x00A9; by Andreas St&#x00F6;tzner all rights reserved.</p>
		</span>
	</div>
  <div id="content">
	<div id="content-left">
        <img id="facs_preview" src="images/_previews_wynkyn/1r_preview.jpg" />
    	<img id="facs" src="images/facsimiles_wynkyn/1r.jpg" height="900" style="display:none"/>
		<!--<div id="copyright"><img src="..." alt="..." title="Manuscript images &#x00A9;...." width="30" height="60" /></div>-->
	</div>
  	<div id="content-right" class="medieval">
		<?php include("folios_wynkyn/1r.inc.php"); ?>
		<?php include("folios_wynkyn/1v.inc.php"); ?>
		<?php include("folios_wynkyn/2r.inc.php"); ?>
		<?php include("folios_wynkyn/2v.inc.php"); ?>
		<?php include("folios_wynkyn/3r.inc.php"); ?>
		<?php include("folios_wynkyn/3v.inc.php"); ?>
		<?php include("folios_wynkyn/4r.inc.php"); ?>

		<?php include("folios_wynkyn/na.inc.php"); ?>
	</div>
  </div>
</div>
</body>
</html>