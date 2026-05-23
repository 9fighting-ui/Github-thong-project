<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ส่วนที่เรามองเห็นได้ ของหน้าเว็บ-->
	<meta name="description" content="วิทยาลัยเทคนิคเทิง"><!-- คำอธิบาย-->
	<meta name="author" content="Phongpun Kajina"> <!-- ชื่อผู้พัฒนา-->
	<meta name="keywords" content="วิทยาลัยเทคนิคเทิง">
	<title>ข้อมูลบุคลากร-วิทยาลัยเทคนิคเทิง</title>

	<link rel="icon" href="img/logo.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="css/index.css">
	<!--<link rel="stylesheet" type="text/css"> -->
	<link rel="stylesheet" href="css/loadding.css">
	<link rel="stylesheet" href="css/Navber.css">
	<link rel="stylesheet" href="css/footer.css">
	<style>
		body {
			font-family: "Sarabun", Helvetica, Arial, tahoma;
			font-family: 'Sarabun';
			margin-top: 120px;
			margin-left: 15px;
			color: #000000;
			-webkit-text-size-adjust: none;
			font-size: 10pt;
			font-family: "Sarabun", Helvetica, Arial, tahoma;
			/*font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/sarabun/v17/DtVjJx26TKEr37c9aBtJn2QN.woff2) format('woff2');
    unicode-range: U +0100 -02BA, U +02BD -02C5, U +02C7 -02CC, U +02CE -02D7, U +02DD -02FF, U +0304, U +0308, U +0329, U +1D00 -1DBF, U +1E00 -1E9F, U +1EF2 -1EFF, U +2020, U +20A0 -20AB, U +20AD -20C0, U +2113, U +2C60 -2C7F, U + A720-A7FF;
*/
		}

		.row-hover:hover {
			background-color: #F0F0F0;
		}

		.text-center {
			text-align: center;
		}
	</style>

</head>

<body>
	<?php include 'header.php'; ?> <!-- เรียกใช้ หัวเว็บ-->
	<html>

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<meta http-equiv="Content-Language" content="th">
		<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=0.8, user-scalable=no">
		<meta http-equiv="cache-control" content="max-age=0">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
		<meta http-equiv="pragma" content="no-cache">
		<title>ระบบบริหารจัดการงานวิทยาลัยเทคนิคเชียงใหม่</title>
		<script language="JavaScript">
			function Q_confirm(num) {
				return confirm("คุณแน่ใจหรือไม่?");
			}
			/*
			function Q_confirm(num)
			{
				var x=window.confirm("Sure?");
				return (x);
			}
			*/

			function fncSubmit() {
				if (confirm('Sure!') == true) {
					return true;
				} else {
					return false;
				}
			}

			function toggle(source) {
				var aInputs = document.getElementsByTagName('input');
				for (var i = 0; i < aInputs.length; i++) {
					if (aInputs[i] != source && aInputs[i].className == source.className) {
						aInputs[i].checked = source.checked;
					}
				}
			}

			function CheckAll() {
				count = document.frm.elements.length;
				for (i = 0; i < count; i++) {
					if (document.frm.elements[i].checked == 1) {
						document.frm.elements[i].checked = 0;
					} else {
						document.frm.elements[i].checked = 1;
					}
				}
			}

			function UncheckAll() {
				count = document.frm.elements.length;
				for (i = 0; i < count; i++) {
					if (document.frm.elements[i].checked == 1) {
						document.frm.elements[i].checked = 0;
					} else {
						document.frm.elements[i].checked = 1;
					}
				}
			}


			$(document).bind('cbox_open', function() {
				$('html').css({
					overflow: 'hidden'
				});
			}).bind('cbox_closed', function() {
				$('html').css({
					overflow: 'auto'
				});
			});
		</script>
		<link href="https://fonts.googleapis.com/css?family=Sarabun&amp;subset=thai,latin" rel="stylesheet" type="text/css">
		<style type="text/css">
			/*body {
	background: url('files/20100887_11030316165912.gif') top center fixed no-repeat;
}*/

			HTML {
				color: #000000;
				font-size: 10pt;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
				scrollbar-face-color: #CCCCCC;
				scrollbar-shadow-color: #FFFFFF;
				scrollbar-highlight-color: #FFFFFF;
				scrollbar-3dlight-color: #FFFFFF;
				scrollbar-darkshadow-color: #FFFFFF;
				scrollbar-track-color: #FFFFFF;
				scrollbar-arrow-color: #000000;
				-webkit-text-size-adjust: none;
			}

			a:link {
				color: #224466;
				text-decoration: none
			}

			a:visited {
				color: #224466;
				text-decoration: none
			}

			a:active {
				color: #224466;
				text-decoration: underline
			}

			a:hover {
				color: #000000;
				text-decoration: underline
			}

			.button {
				font-family: "Sarabun", Helvetica, Arial, tahoma;
				font-size: 10pt;
				background: #F0F0F0;
				color: #000000;
				border-right: #000000 1px solid;
				border-top: #000000 1px solid;
				border-LEFT: #000000 1px solid;
				border-bottom: #000000 1px solid;
			}

			.input {
				font-family: "Sarabun", Helvetica, Arial, tahoma;
				font-size: 10pt;
				background: #FFFFFF;
				color: #000000;
				border-right: #000000 1px solid;
				border-top: #000000 1px solid;
				border-left: #000000 1px solid;
				border-bottom: #000000 1px solid;
			}


			.select {
				font-family: "Sarabun", Helvetica, Arial, tahoma;
				font-size: 10pt;
				background: #;
				color: ;
				border: 0px solid #8C9BAE;
				border-right: #000000 1px solid;
				border-top: #000000 1px solid;
				border-left: #000000 1px solid;
				border-bottom: #000000 1px solid;

			}

			.fn {
				font-family: "Sarabun", Helvetica, Arial, tahoma;
				font-size: 10pt;
			}


			b {
				font-size: 10pt;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
			}

			body {
				font-size: 10pt;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
			}

			font {
				font-size: 10pt;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
			}

			td {
				font-size: 10pt;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
			}

			blink {
				font-size: 10pt;
				color: #FFFFFF;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
			}

			strong {
				font-size: 10pt;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
				font-weight: bold
			}

			small {
				font-size: 8pt;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
				color: #000000
			}

			big {
				font-size: 14pt;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
			}

			input,
			textarea,
			select {
				font-size: 10pt;
				font-family: "Sarabun", Helvetica, Arial, tahoma;
			}

			hr {
				height: 1px;
				color: #F0F0F0;
				background-color: #F0F0F0;
				border: none;
			}

			/*width:100px; 
//-webkit-appearance: none
//-webkit-text-size-adjust: 50%;*/

			@media screen and (max-device-width: 640px) {
				body {
					-webkit-text-size-adjust: none;
					font-family: "Sarabun", Helvetica, Arial, tahoma;
					padding: 1px;
				}

			}

			iframe {
				float: left;
				padding: 0;
				margin: 0;
				border: 0;
				overflow: hidden;
			}



			#now_loading {
				width: 200px;
				height: 100px;
				background-color: ;
				position: absolute;
				left: 50%;
				top: 50%;
				margin-top: -50px;
				margin-left: -100px;
				text-align: center;
				visibility: hidden;
			}

			#calendars td {
				font-family: "Sarabun", Helvetica, Arial, tahoma;

			}

			#calbacks {
				clear: both;
				width: 100%;
				height: 100%;
			}

			#calendars {
				width: 100%;
				height: 100%;
			}

			.cal {
				width: 200px;
				border: 1px solid #336699;
				border-collapse: collapse;
				border-style: dotted;
				border-width: 1 margin: 0 auto;
			}

			.cal a {
				color: #433721;
				text-decoration: none;
			}

			.cal a:hover {
				color: #FF8800;
				text-decoration: underline
			}

			.calheads {
				width: 100%;
				font-weight: bold;
				color: #FFFFFF;
				background: #336699;
				font-size: 20px;
				padding: 5px;
			}

			.calheads img {
				border: none;
			}

			.calheads table {
				width: 100%;
			}

			.calheads a {
				text-decoration: none;
				border: none;
			}

			.dayhead {
				height: 25px;
				background: #336699;
			}

			.dayhead td {
				text-align: center;
				color: #000;
			}

			.dayrow {
				background: #FFFFFF;
				height: 20px;
			}

			.dayrow td {
				width: 14%;
				font-size: 9px;
				color: #656551;
				padding: 3px;
				border: 1px solid #336699;
				border-collapse: collapse;
				border-style: dotted;
				border-width: 1
			}


			.day {
				float: right;
			}

			.dayover {
				background: #F4F4F4;
			}

			.dayout {
				background: #FFFFFF;
			}

			#event {
				font-family: "Sarabun", Helvetica, Arial, tahoma;
				width: 100%;
				height: 100%;
				border-top: 1px solid #727260;
				border-bottom: 1px solid #727260;
			}

			#event .heading {
				padding: 10px;
				position: relative;
				background: url('calendar/images/calEvent.gif') repeat-x top left;
				border-bottom: 1px dotted #CCC;
			}

			#event .title {
				color: #656551;
				font-size: 16px;
				font-weight: bold;
			}

			#event .posted {
				color: #8C8C73;
				font-size: 10px;
			}

			#event .back {
				position: absolute;
				top: 10px;
				right: 10px;
			}

			#event .back a {
				color: #0C0;
				text-decoration: underline;
				border: none;
				font-size: 10px;
			}

			#event .back a:hover {
				color: #0E0;
			}

			#event .line {
				padding: 10px;
				overflow: auto;
			}

			.error {
				color: #C00;
				font-size: 14px;
				font-weight: bold;
			}

			#jump {
				z-index: 100;
				line-height: 30px;
				padding: 5px;
				background: #F6F6F6;
				border: 1px solid #888;
			}

			#jump a {
				text-decoration: none;
				border: none;
			}

			#jump img {
				border: none;
			}


			.label-block {
				display: block;
				color: #000000;
				border: 1px solid #EEE;
				min-height: 100%;
				/* for the latest browsers which support min-height */
				height: 100%;
				/* the only height-related attribute that IE6 does not ignore  */
			}
		</style>
		<link href="morris.css" rel="stylesheet" type="text/css">
		<script src="raphael-min.js"></script>
		<script src="morris.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			function setup() {

				tinyMCE.init({
					// General options
					mode: "textareas",
					elements: "template_content",
					theme: "advanced",
					//entity_encoding : "raw",
					plugins: "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

					// Theme options
					/*theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
					theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
					theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
					theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",*/
					theme_advanced_buttons1: "bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect,|,forecolor,backcolor,|,insertdate,inserttime,preview",
					theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,cleanup,|,code",
					theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,media,|,fullscreen",

					theme_advanced_toolbar_location: "top",
					theme_advanced_toolbar_align: "left",
					theme_advanced_statusbar_location: "bottom",
					theme_advanced_resizing: true,

					//convert_fonts_to_spans : true,
					//font_size_classes : "fontSize1,fontSize2,fontSize3,fontSize4,fontSize5,fontSize6,fontSize7",
					//convert_fonts_to_spans : false,
					theme_advanced_font_sizes: "2,3,4,5",
					//strict_loading_mode : true,
					theme_advanced_fonts: "tahoma=tahoma",

					// Example word content CSS (should be your site CSS) this one removes paragraph margins
					//content_css : "css/content.css",

					forced_root_block: '',
					force_p_newlines: false,
					remove_linebreaks: false,
					force_br_newlines: true,
					remove_trailing_nbsp: false,
					verify_html: false,

					file_browser_callback: "tinyBrowser",

					// Drop lists for link/image/media/template dialogs
					template_external_list_url: "lists/template_list.js",
					external_link_list_url: "lists/link_list.js",
					external_image_list_url: "lists/image_list.js",
					media_external_list_url: "lists/media_list.js",

					// Replace values for the template plugin
					template_replace_values: {
						username: "Some User",
						staffid: "991234"
					}
				});
			}

			function toggleEditor(id) {
				if (!tinyMCE.get(id))
					tinyMCE.execCommand('mceAddControl', false, id);
				else
					tinyMCE.execCommand('mceRemoveControl', false, id);
			}
		</script>
		<script type="text/javascript" src="calendar/super_calendar.js"></script>
		<script language="JavaScript">
			//setup();
			//setTimeout("tinyMCE.execCommand('mceRemoveControl', false, 'unload');",1000);
		</script>
		<style>
			@media print {
				a[href]:after {
					content: none !important;
				}
			}
		</style>
	</head>




	<!-- Bootstrap 3.3.4 
    <link href="css-bootstrap.css" rel="stylesheet" type="text/css" />

    <link href="css-smart.css" rel="stylesheet" type="text/css" />
    <link href="css-skin.css" rel="stylesheet" type="text/css" />
	<link href="css-colorbox.css" rel="stylesheet" type="text/css" />
-->


	<!-- Morris charts -->


	<!-- Morris.js charts -->


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	<!--
<link rel="stylesheet" type="text/css" href="css/screen.css">
<link rel="stylesheet" type="text/css" href="css/lightwindow.css" />
<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/effects.js"></script>
<script type="text/javascript" src="js/lightwindow.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script> -->


	<html>

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<meta http-equiv="Content-Language" content="th">
		<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=0.8, user-scalable=no">
		<meta http-equiv="cache-control" content="max-age=0">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
		<meta http-equiv="pragma" content="no-cache">
		<title>ระบบบริหารจัดการงานวิทยาลัยการอาชีพพนมทวน</title>
		<script language="JavaScript">
			function Q_confirm(num) {
				return confirm("คุณแน่ใจหรือไม่?");
			}
			/*
			function Q_confirm(num)
			{
				var x=window.confirm("Sure?");
				return (x);
			}
			*/

			function fncSubmit() {
				if (confirm('Sure!') == true) {
					return true;
				} else {
					return false;
				}
			}

			function toggle(source) {
				var aInputs = document.getElementsByTagName('input');
				for (var i = 0; i < aInputs.length; i++) {
					if (aInputs[i] != source && aInputs[i].className == source.className) {
						aInputs[i].checked = source.checked;
					}
				}
			}

			function CheckAll() {
				count = document.frm.elements.length;
				for (i = 0; i < count; i++) {
					if (document.frm.elements[i].checked == 1) {
						document.frm.elements[i].checked = 0;
					} else {
						document.frm.elements[i].checked = 1;
					}
				}
			}

			function UncheckAll() {
				count = document.frm.elements.length;
				for (i = 0; i < count; i++) {
					if (document.frm.elements[i].checked == 1) {
						document.frm.elements[i].checked = 0;
					} else {
						document.frm.elements[i].checked = 1;
					}
				}
			}


			$(document).bind('cbox_open', function() {
				$('html').css({
					overflow: 'hidden'
				});
			}).bind('cbox_closed', function() {
				$('html').css({
					overflow: 'auto'
				});
			});
		</script>
		<link href="https://fonts.googleapis.com/css?family=Kanit&amp;subset=thai,latin" rel="stylesheet" type="text/css">
		<style type="text/css">
			/*body {
	background: url('files/20100887_11030316165912.gif') top center fixed no-repeat;
}*/

			HTML {
				color: #000000;
				font-size: 10pt;
				font-family: "Kanit", Helvetica, Arial, tahoma;
				scrollbar-face-color: #CCCCCC;
				scrollbar-shadow-color: #FFFFFF;
				scrollbar-highlight-color: #FFFFFF;
				scrollbar-3dlight-color: #FFFFFF;
				scrollbar-darkshadow-color: #FFFFFF;
				scrollbar-track-color: #FFFFFF;
				scrollbar-arrow-color: #000000;
				-webkit-text-size-adjust: none;
			}

			a:link {
				color: #224466;
				text-decoration: none
			}

			a:visited {
				color: #224466;
				text-decoration: none
			}

			a:active {
				color: #224466;
				text-decoration: underline
			}

			a:hover {
				color: #000000;
				text-decoration: underline
			}

			.button {
				font-family: "Kanit", Helvetica, Arial, tahoma;
				font-size: 10pt;
				background: #F0F0F0;
				color: #000000;
				border-right: #000000 1px solid;
				border-top: #000000 1px solid;
				border-LEFT: #000000 1px solid;
				border-bottom: #000000 1px solid;
			}

			.input {
				font-family: "Kanit", Helvetica, Arial, tahoma;
				font-size: 10pt;
				background: #FFFFFF;
				color: #000000;
				border-right: #000000 1px solid;
				border-top: #000000 1px solid;
				border-left: #000000 1px solid;
				border-bottom: #000000 1px solid;
			}


			.select {
				font-family: "Kanit", Helvetica, Arial, tahoma;
				font-size: 10pt;
				background: #;
				color: ;
				border: 0px solid #8C9BAE;
				border-right: #000000 1px solid;
				border-top: #000000 1px solid;
				border-left: #000000 1px solid;
				border-bottom: #000000 1px solid;

			}

			.fn {
				font-family: "Kanit", Helvetica, Arial, tahoma;
				font-size: 10pt;
			}


			b {
				font-size: 10pt;
				font-family: "Kanit", Helvetica, Arial, tahoma;
			}

			body {
				font-size: 10pt;
				font-family: "Kanit", Helvetica, Arial, tahoma;
			}

			font {
				font-size: 10pt;
				font-family: "Kanit", Helvetica, Arial, tahoma;
			}

			td {
				font-size: 10pt;
				font-family: "Kanit", Helvetica, Arial, tahoma;
			}

			blink {
				font-size: 10pt;
				color: #FFFFFF;
				font-family: "Kanit", Helvetica, Arial, tahoma;
			}

			strong {
				font-size: 10pt;
				font-family: "Kanit", Helvetica, Arial, tahoma;
				font-weight: bold
			}

			small {
				font-size: 8pt;
				font-family: "Kanit", Helvetica, Arial, tahoma;
				color: #000000
			}

			big {
				font-size: 14pt;
				font-family: "Kanit", Helvetica, Arial, tahoma;
			}

			input,
			textarea,
			select {
				font-size: 10pt;
				font-family: "Kanit", Helvetica, Arial, tahoma;
			}

			hr {
				height: 1px;
				color: #F0F0F0;
				background-color: #F0F0F0;
				border: none;
			}

			/*width:100px; 
//-webkit-appearance: none
//-webkit-text-size-adjust: 50%;*/

			@media screen and (max-device-width: 640px) {
				body {
					-webkit-text-size-adjust: none;
					font-family: "Kanit", Helvetica, Arial, tahoma;
					padding: 1px;
				}

			}

			iframe {
				float: left;
				padding: 0;
				margin: 0;
				border: 0;
				overflow: hidden;
			}



			#now_loading {
				width: 200px;
				height: 100px;
				background-color: ;
				position: absolute;
				left: 50%;
				top: 50%;
				margin-top: -50px;
				margin-left: -100px;
				text-align: center;
				visibility: hidden;
			}

			#calendars td {
				font-family: "Kanit", Helvetica, Arial, tahoma;

			}

			#calbacks {
				clear: both;
				width: 100%;
				height: 100%;
			}

			#calendars {
				width: 100%;
				height: 100%;
			}

			.cal {
				width: 200px;
				border: 1px solid #336699;
				border-collapse: collapse;
				border-style: dotted;
				border-width: 1 margin: 0 auto;
			}

			.cal a {
				color: #433721;
				text-decoration: none;
			}

			.cal a:hover {
				color: #FF8800;
				text-decoration: underline
			}

			.calheads {
				width: 100%;
				font-weight: bold;
				color: #FFFFFF;
				background: #336699;
				font-size: 20px;
				padding: 5px;
			}

			.calheads img {
				border: none;
			}

			.calheads table {
				width: 100%;
			}

			.calheads a {
				text-decoration: none;
				border: none;
			}

			.dayhead {
				height: 25px;
				background: #336699;
			}

			.dayhead td {
				text-align: center;
				color: #000;
			}

			.dayrow {
				background: #FFFFFF;
				height: 20px;
			}

			.dayrow td {
				width: 14%;
				font-size: 9px;
				color: #656551;
				padding: 3px;
				border: 1px solid #336699;
				border-collapse: collapse;
				border-style: dotted;
				border-width: 1
			}


			.day {
				float: right;
			}

			.dayover {
				background: #F4F4F4;
			}

			.dayout {
				background: #FFFFFF;
			}

			#event {
				font-family: "Kanit", Helvetica, Arial, tahoma;
				width: 100%;
				height: 100%;
				border-top: 1px solid #727260;
				border-bottom: 1px solid #727260;
			}

			#event .heading {
				padding: 10px;
				position: relative;
				background: url('calendar/images/calEvent.gif') repeat-x top left;
				border-bottom: 1px dotted #CCC;
			}

			#event .title {
				color: #656551;
				font-size: 16px;
				font-weight: bold;
			}

			#event .posted {
				color: #8C8C73;
				font-size: 10px;
			}

			#event .back {
				position: absolute;
				top: 10px;
				right: 10px;
			}

			#event .back a {
				color: #0C0;
				text-decoration: underline;
				border: none;
				font-size: 10px;
			}

			#event .back a:hover {
				color: #0E0;
			}

			#event .line {
				padding: 10px;
				overflow: auto;
			}

			.error {
				color: #C00;
				font-size: 14px;
				font-weight: bold;
			}

			#jump {
				z-index: 100;
				line-height: 30px;
				padding: 5px;
				background: #F6F6F6;
				border: 1px solid #888;
			}

			#jump a {
				text-decoration: none;
				border: none;
			}

			#jump img {
				border: none;
			}


			.label-block {
				display: block;
				color: #000000;
				border: 1px solid #EEE;
				min-height: 100%;
				/* for the latest browsers which support min-height */
				height: 100%;
				/* the only height-related attribute that IE6 does not ignore  */
			}
		</style>
		<link href="morris.css" rel="stylesheet" type="text/css">
		<script src="raphael-min.js"></script>
		<script src="morris.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			function setup() {

				tinyMCE.init({
					// General options
					mode: "textareas",
					elements: "template_content",
					theme: "advanced",
					//entity_encoding : "raw",
					plugins: "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

					// Theme options
					/*theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
					theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
					theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
					theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",*/
					theme_advanced_buttons1: "bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect,|,forecolor,backcolor,|,insertdate,inserttime,preview",
					theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,cleanup,|,code",
					theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,media,|,fullscreen",

					theme_advanced_toolbar_location: "top",
					theme_advanced_toolbar_align: "left",
					theme_advanced_statusbar_location: "bottom",
					theme_advanced_resizing: true,

					//convert_fonts_to_spans : true,
					//font_size_classes : "fontSize1,fontSize2,fontSize3,fontSize4,fontSize5,fontSize6,fontSize7",
					//convert_fonts_to_spans : false,
					theme_advanced_font_sizes: "2,3,4,5",
					//strict_loading_mode : true,
					theme_advanced_fonts: "tahoma=tahoma",

					// Example word content CSS (should be your site CSS) this one removes paragraph margins
					//content_css : "css/content.css",

					forced_root_block: '',
					force_p_newlines: false,
					remove_linebreaks: false,
					force_br_newlines: true,
					remove_trailing_nbsp: false,
					verify_html: false,

					file_browser_callback: "tinyBrowser",

					// Drop lists for link/image/media/template dialogs
					template_external_list_url: "lists/template_list.js",
					external_link_list_url: "lists/link_list.js",
					external_image_list_url: "lists/image_list.js",
					media_external_list_url: "lists/media_list.js",

					// Replace values for the template plugin
					template_replace_values: {
						username: "Some User",
						staffid: "991234"
					}
				});
			}

			function toggleEditor(id) {
				if (!tinyMCE.get(id))
					tinyMCE.execCommand('mceAddControl', false, id);
				else
					tinyMCE.execCommand('mceRemoveControl', false, id);
			}
		</script>
		<script type="text/javascript" src="calendar/super_calendar.js"></script>
		<script language="JavaScript">
			//setup();
			//setTimeout("tinyMCE.execCommand('mceRemoveControl', false, 'unload');",1000);
		</script>
		<style>
			@media print {
				a[href]:after {
					content: none !important;
				}
			}
		</style>
	</head>




	<!-- Bootstrap 3.3.4 
    <link href="css-bootstrap.css" rel="stylesheet" type="text/css" />

    <link href="css-smart.css" rel="stylesheet" type="text/css" />
    <link href="css-skin.css" rel="stylesheet" type="text/css" />
	<link href="css-colorbox.css" rel="stylesheet" type="text/css" />
-->


	<!-- Morris charts -->


	<!-- Morris.js charts -->


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	<!--
<link rel="stylesheet" type="text/css" href="css/screen.css">
<link rel="stylesheet" type="text/css" href="css/lightwindow.css" />
<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/effects.js"></script>
<script type="text/javascript" src="js/lightwindow.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script> -->




	<body>
		<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">

			<tbody>
				<tr>
					<td width="300" valign="top">



						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td><a href="?p=&amp;sex_id=&amp;mod=&amp;title=ข้อมูลบุคลากรทั้งหมด#data"><b><big>ข้อมูลบุคลากรทั้งหมด</big></b></a></td>
									<td>
										<center></center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr>
									<td colspan="2"><b><big>จำแนกตามเพศ</big></b></td>
								</tr>
								<tr>
									<td width="90%"><b>เพศ</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน</center>
										</b></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;sex_id=0&amp;mod=&amp;title=เพศไม่ระบุข้อมูล#data">ไม่ระบุข้อมูล</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;sex_id=1&amp;mod=&amp;title=เพศชาย#data">ชาย</a></td>
									<td>
										<center>17</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;sex_id=2&amp;mod=&amp;title=เพศหญิง#data">หญิง</a></td>
									<td>
										<center>23</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td align="right"><b>รวม</b></td>
									<td>
										<center>42</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
							</tbody>
						</table>

						<hr size="1">

						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td colspan="2"><b><big>จำแนกตามตำแหน่งวิทยะฐานะ</big></b></td>
								</tr>
								<tr>
									<td width="90%"><b>ตำแหน่งวิทยะฐานะ</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน</center>
										</b></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;position_id=0&amp;position2_id=0&amp;mod=&amp;title=ไม่มีไม่มี">ไม่มี ไม่มี</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
							</tbody>
						</table>

						<hr size="1">

						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td colspan="2"><b><big>จำแนกตามระดับการศึกษา</big></b></td>
								</tr>
								<tr>
									<td width="90%"><b>ระดับการศึกษา</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน</center>
										</b></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
									<td>• <a href="?p=&amp;edu_id=80&amp;mod=&amp;title=ปริญญาเอกหรือเทียบเท่า#data">ปริญญาเอกหรือเทียบเท่า</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
									<td>• <a href="?p=&amp;edu_id=60&amp;mod=&amp;title=ปริญญาโทหรือเทียบเท่า#data">ปริญญาโทหรือเทียบเท่า</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
									<td>• <a href="?p=&amp;edu_id=50&amp;mod=&amp;title=ประกาศนียบัตรชั้นสูง#data">ประกาศนียบัตรชั้นสูง</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=41&amp;mod=&amp;title=ปริญญาตรีหรือเทียบเท่า#data">ปริญญาตรีหรือเทียบเท่า</a></td>
									<td>
										<center>28</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=30&amp;mod=&amp;title=ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)#data">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=5&amp;mod=&amp;title=มัธยมศึกษาตอนต้น#data">มัธยมศึกษาตอนต้น</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=0&amp;mod=&amp;title=ไม่ระบุ#data">ไม่ระบุ</a></td>
									<td>
										<center>5</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
							</tbody>
						</table>

						<hr size="1">

						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td colspan="2"><b><big>จำแนกตามแผนกและหน่วยงาน</big></b></td>
								</tr>
								<tr>
									<td width="90%"><b>แผนกและหน่วยงาน</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน</center>
										</b></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=director&amp;mod=&amp;title=ผู้บริหารสถานศึกษา#data"><b>ผู้บริหารสถานศึกษา</b></a></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=1&amp;mod=&amp;title=ผู้อำนวยการสถานศึกษา#data">ผู้อำนวยการสถานศึกษา</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=2&amp;mod=&amp;title=ฝ่ายวิชาการ#data">ฝ่ายวิชาการ</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=4&amp;mod=&amp;title=ฝ่ายบริหารทรัพยากร#data">ฝ่ายบริหารทรัพยากร</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=200&amp;mod=&amp;title=แผนกวิชาสามัญสัมพันธ์#data">แผนกวิชาสามัญสัมพันธ์</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=201&amp;mod=&amp;title=แผนกวิชาช่างยนต์#data">แผนกวิชาช่างยนต์</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=202&amp;mod=&amp;title=แผนกวิชาช่างไฟฟ้ากำลัง#data">แผนกวิชาช่างไฟฟ้ากำลัง</a></td>
									<td>
										<center>5</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=203&amp;mod=&amp;title=แผนกวิชาการบัญชี#data">แผนกวิชาการบัญชี</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=204&amp;mod=&amp;title=แผนกวิชาคอมพิวเตอร์ธุรกิจ#data">แผนกวิชาคอมพิวเตอร์ธุรกิจ</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=207&amp;mod=&amp;title=แผนกวิชาอิเล็กทรอนิกส์#data">แผนกวิชาอิเล็กทรอนิกส์</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=208&amp;mod=&amp;title=แผนกวิชาคอมพิวเตอร์กราฟฟิก#data">แผนกวิชาคอมพิวเตอร์กราฟฟิก</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=209&amp;mod=&amp;title=สาขาวิชาช่างกลโรงงาน#data">สาขาวิชาช่างกลโรงงาน</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=300&amp;mod=&amp;title=งานบริหารงานทั่วไป (สารบรรณ)#data">งานบริหารงานทั่วไป (สารบรรณ)</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=302&amp;mod=&amp;title=งานศูนย์ดิจิทัลและสื่อสารองค์กร (ประชาสัมพันธ์)#data">งานศูนย์ดิจิทัลและสื่อสารองค์กร (ประชาสัมพันธ์)</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=303&amp;mod=&amp;title=งานบริหารและพัฒนาทรัพยากรบุคคล#data">งานบริหารและพัฒนาทรัพยากรบุคคล</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=304&amp;mod=&amp;title=งานการเงิน#data">งานการเงิน</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=305&amp;mod=&amp;title=งานการบัญชี#data">งานการบัญชี</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=306&amp;mod=&amp;title=งานพัสดุ#data">งานพัสดุ</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=307&amp;mod=&amp;title=งานอาคารสถานที่#data">งานอาคารสถานที่</a></td>
									<td>
										<center>7</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=308&amp;mod=&amp;title=งานวิทยบริการและเทคโนโลยีการศึกษา (ห้องสมุด)#data">งานวิทยบริการและเทคโนโลยีการศึกษา (ห้องสมุด)</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=310&amp;mod=&amp;title=งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ#data">งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=311&amp;mod=&amp;title=งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)#data">งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=312&amp;mod=&amp;title=งานความร่วมมือ#data">งานความร่วมมือ</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=313&amp;mod=&amp;title=งานส่งเสริมการวิจัย นวัตกรรม และสิ่งประดิษฐ์#data">งานส่งเสริมการวิจัย นวัตกรรม และสิ่งประดิษฐ์</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=315&amp;mod=&amp;title=งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ#data">งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=316&amp;mod=&amp;title=งานปกครองและความปลอดภัยนักเรียน นักศึกษา#data">งานปกครองและความปลอดภัยนักเรียน นักศึกษา</a></td>
									<td>
										<center>7</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=317&amp;mod=&amp;title=งานกิจกรรมนักเรียนนักศึกษา#data">งานกิจกรรมนักเรียนนักศึกษา</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=318&amp;mod=&amp;title=งานครูที่ปรึกษาและการแนะแนว (แนะแนว)#data">งานครูที่ปรึกษาและการแนะแนว (แนะแนว)</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=319&amp;mod=&amp;title=งานสวัสดิการนักเรียนนักศึกษา#data">งานสวัสดิการนักเรียนนักศึกษา</a></td>
									<td>
										<center>5</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=320&amp;mod=&amp;title=งานครูที่ปรึกษาและการแนะแนว (ครูที่ปรึกษา)#data">งานครูที่ปรึกษาและการแนะแนว (ครูที่ปรึกษา)</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=321&amp;mod=&amp;title=งานโครงการพิเศษและการบริการสังคม#data">งานโครงการพิเศษและการบริการสังคม</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=322&amp;mod=&amp;title=งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้#data">งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=323&amp;mod=&amp;title=งานมาตราฐานและการประกันคุณภาพการศึกษา#data">งานมาตราฐานและการประกันคุณภาพการศึกษา</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=324&amp;mod=&amp;title=งานทะเบียน#data">งานทะเบียน</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=325&amp;mod=&amp;title=งานวัดผลและประเมินผล#data">งานวัดผลและประเมินผล</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=326&amp;mod=&amp;title=งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)#data">งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=327&amp;mod=&amp;title=งานอาชีวศึกษาระบบทวิภาคี#data">งานอาชีวศึกษาระบบทวิภาคี</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=328&amp;mod=&amp;title=งานพัสดุ(พนักงานขับรถยนต์)#data">งานพัสดุ(พนักงานขับรถยนต์)</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=405&amp;mod=&amp;title=งานอาคารสถานที่(พนักงานบริการ)#data">งานอาคารสถานที่(พนักงานบริการ)</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=888&amp;mod=&amp;title=ไม่มีหน้าที่รับผิดชอบ#data">ไม่มีหน้าที่รับผิดชอบ</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=999&amp;mod=&amp;title=ผู้ดูแลระบบหลัก#data">ผู้ดูแลระบบหลัก</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
							</tbody>
						</table>


						<hr size="1">

						<table align="center" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-hover" width="95%">
							<tbody>
								<tr>
									<td colspan="2"><b><big>จำแนกตามตำแหน่งหน้าที่</big><b></b></b></td>
								</tr>
								<tr>
									<td width="90%"><b>ตำแหน่งหน้าที่</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน <br>(ตำแหน่ง)</center>
										</b></td>

								</tr>
							</tbody>
						</table>



					</td>
					<td width="70%" valign="top">
						<a name="data"></a>
						<b><big></big></b>
						<br><br>


						<br><br>
						<center><big><b>ผู้อำนวยการ</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">

							<tbody>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="files/importpic/3440100039295.jpg" width="120" border="1"><br><b>นางสาวจิตราวรรณ บุตราช </b><br>ผู้อำนวยการ ผู้อำนวยการสถานศึกษา <br>ผู้บริหาร ชำนาญการพิเศษ<br>อีเมล์ : jittrawan.1980@gmail.com<br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>รองผู้อำนวยการ</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="files/tr_3100504428733.jpg" width="120" border="1"><br><b>นางสาวลัดดาพันธุ์ อินทรฤทธิ์ </b><br>รองผู้อำนวยการ ฝ่ายวิชาการ <br>รองผู้อำนวยการ ฝ่ายบริหารทรัพยากร <br>หัวหน้างาน งานบริหารและพัฒนาทรัพยากรบุคคล <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>หัวหน้าแผนก</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/importpic/5760600017057.jpg" width="120" border="1"><br><b>นางรุ่งฤดี พรายมณี </b><br>หัวหน้าแผนก แผนกวิชาการบัญชี <br>หัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครูประจำ แผนกวิชาการบัญชี <br>ผู้ช่วยหัวหน้างาน งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียนนักศึกษา <br>ครู <br>อีเมล์ : praymanee@manee@gmail.com<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="https://sites.google.com/pnt.ac.th/sar-kruprateep/home?authuser=0" target="_blank"><img src="files/importpic/1401200009589.jpg" width="120" border="1"></a><br><b>ประทีป สุวรรณโชติ </b><br>หัวหน้าแผนก แผนกวิชาช่างไฟฟ้ากำลัง <br>หัวหน้าแผนก แผนกวิชาอิเล็กทรอนิกส์ <br>หัวหน้างาน งานทะเบียน <br>ครูผู้ช่วย <br>โทรศัพท์ : 0885668199<br>อีเมล์ : krutee.th@gmail.com<br>โฮมเพจ : <a href="https://sites.google.com/pnt.ac.th/sar-kruprateep/home?authuser=0" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/importpic/1600100108515.jpg" width="120" border="1"><br><b>ชัยวัฒน์ ชื่นฉ่ำ </b><br>หัวหน้าแผนก แผนกวิชาช่างยนต์ <br>หัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานความร่วมมือ <br>ครูผู้ช่วย <br>อีเมล์ : witchuda560@gmail.com<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="files/04420_22111710101236.jpg" width="120" border="1"><br><b>จักรี โพธิ์แก้ว </b><br>หัวหน้าแผนก แผนกวิชาคอมพิวเตอร์ธุรกิจ <br>ครูประจำ แผนกวิชาคอมพิวเตอร์ธุรกิจ <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานสวัสดิการนักเรียนนักศึกษา <br>ผู้ช่วยหัวหน้างาน งานมาตราฐานและการประกันคุณภาพการศึกษา <br>ครูผู้ช่วย <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/21949_2210110885010.jpg" width="120" border="1"><br><b>จินตนา ยันตรีสิงห์ </b><br>หัวหน้าแผนก แผนกวิชาสามัญสัมพันธ์ <br>หัวหน้างาน งานพัสดุ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (ห้องสมุด) <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว (แนะแนว) <br>ครูผู้ช่วย <br>อีเมล์ : ๋๋Jintana@pnt.ac.th<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/16853_2305030884942.jpg" width="120" border="1"><br><b>นายสุภชัย แซ่ลี </b><br>หัวหน้าแผนก สาขาวิชาช่างกลโรงงาน <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ครูผู้ช่วย <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>หัวหน้างาน</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ลัดดาวัลย์ เรืองศรี </b><br>หัวหน้างาน งานบริหารงานทั่วไป (สารบรรณ) <br>ครูอัตราจ้าง แผนกวิชาอิเล็กทรอนิกส์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/37423_22061310102137.jpg" width="120" border="1"><br><b>นายศักดิ์ชัย ชื้นแสง </b><br>หัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้ากำลัง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br>อีเมล์ : selfroom01@gmail.com <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/40554_22061311112111.jpg" width="120" border="1"><br><b>นางสาวเปมิกา กลั่นบุศย์ </b><br>หัวหน้างาน งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>หัวหน้างาน งานมาตราฐานและการประกันคุณภาพการศึกษา <br>หัวหน้างาน งานวัดผลและประเมินผล <br>ครูประจำ แผนกวิชาคอมพิวเตอร์ธุรกิจ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาคอมพิวเตอร์ธุรกิจ <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br>อีเมล์ : peamika@pnt.ac.th<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="files/23234_22070312121900.png" width="120" border="1"><br><b>นางสาวธารสาย เกษตรสำราญ </b><br>หัวหน้างาน งานการบัญชี <br>หัวหน้างาน งานสวัสดิการนักเรียนนักศึกษา <br>ครูประจำ แผนกวิชาการบัญชี <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/65200_22070312120908.jpg" width="120" border="1"><br><b>พรรณาพิมล สำเนียงดี </b><br>หัวหน้างาน งานความร่วมมือ <br>ครูประจำ แผนกวิชาคอมพิวเตอร์ธุรกิจ <br>ผู้ช่วยหัวหน้างาน งานการเงิน <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว (แนะแนว) <br>อีเมล์ : son250507@gmail.com<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/88661_22070312122044.jpg" width="120" border="1"><br><b>ภาคภูมิ จงใจรักษ์ </b><br>หัวหน้างาน งานครูที่ปรึกษาและการแนะแนว (แนะแนว) <br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้างาน งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครู <br>อีเมล์ : pakpum01jongjairuk@gmail.com<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="https://sites.google.com/pnt.ac.th/anon/%E0%B8%AB%E0%B8%99%E0%B8%B2%E0%B9%81%E0%B8%A3%E0%B8%81" target="_blank"><img src="files/71711_22070312121004.jpg" width="120" border="1"></a><br><b>อนนท์ ติ่งผ่อง </b><br>หัวหน้างาน งานกิจกรรมนักเรียนนักศึกษา <br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้ากำลัง <br>ครู <br>โทรศัพท์ : 0616708818<br>อีเมล์ : anon@pnt.ac.th<br>โฮมเพจ : <a href="https://sites.google.com/pnt.ac.th/anon/%E0%B8%AB%E0%B8%99%E0%B8%B2%E0%B9%81%E0%B8%A3%E0%B8%81" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/46667_22090512124912.jpg" width="120" border="1"><br><b>กฤษฎาวุฒิ วงศ์ศรีงาม </b><br>หัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ประชาสัมพันธ์) <br>หัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาคอมพิวเตอร์กราฟฟิก <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาคอมพิวเตอร์กราฟฟิก <br>ครูผู้ช่วย <br>อีเมล์ : wongsringam.d4u@gmail.com<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50483_22090516164214.jpg" width="120" border="1"><br><b>ณัฐพงษ์ จันทรีย์ </b><br>หัวหน้างาน งานครูที่ปรึกษาและการแนะแนว (ครูที่ปรึกษา) <br>ครูประจำ แผนกวิชาช่างไฟฟ้ากำลัง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียนนักศึกษา <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างไฟฟ้ากำลัง <br>ครู <br>อีเมล์ : nattapongjunthree21@gmail.com<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22455_2305030993447.jpg" width="120" border="1"><br><b>สุรีรัตน์ ดีเมฆ </b><br>หัวหน้างาน งานการเงิน <br>ครูประจำ แผนกวิชาการบัญชี <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาการบัญชี <br>ครูผู้ช่วย <br>อีเมล์ : sureerat@pnt.ac.th<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/02011_2305030992636.jpg" width="120" border="1"><br><b>นายชัยวัฒน์ เหล่าบุตรสา </b><br>หัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างยนต์ <br>ครูผู้ช่วย <br>อีเมล์ : chaiyawatlao1@gmail.com<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="picture.png" width="120" border="1"><br><b>นางสาวสุภานี ศรีสมุทร </b><br>หัวหน้างาน งานส่งเสริมการวิจัย นวัตกรรม และสิ่งประดิษฐ์ <br>ครูอัตราจ้าง แผนกวิชาสามัญสัมพันธ์ <br>อีเมล์ : supanee@pnt.ac.th<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/28660_22070312122551.jpg" width="120" border="1"><br><b>พรชัย เหลืองประมวล </b><br>หัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (ห้องสมุด) <br>ครูอัตราจ้าง แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียนนักศึกษา <br>ผู้ช่วยหัวหน้างาน งานสวัสดิการนักเรียนนักศึกษา <br>อีเมล์ : luangpramualponchai@gmail.com<br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>ครูประจำ</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/32160_22070312121550.jpg" width="120" border="1"><br><b>นายพงศธร ดีเดช </b><br>ครูประจำ แผนกวิชาคอมพิวเตอร์ธุรกิจ <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ประชาสัมพันธ์) <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>ครู <br>อีเมล์ : pongsathon@pnt.ac.th<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/importpic/1710500329950.jpg" width="120" border="1"><br><b>สดายุ จำเริญศรี </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้ากำลัง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>อีเมล์ : sadayu3319@gmail.com<br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>ครูอัตราจ้าง</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>สุพิชชา แย้มเกษร </b><br>ครูอัตราจ้าง แผนกวิชาคอมพิวเตอร์กราฟฟิก <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียนนักศึกษา <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกรรณิการ์ แก้วทองแดง </b><br>ครูอัตราจ้าง แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ผู้ช่วยหัวหน้างาน งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว (ครูที่ปรึกษา) <br>อีเมล์ : kannika@pnt.ac.th<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>กมลพรรณ เริ่มบริรักษ์ </b><br>ครูอัตราจ้าง แผนกวิชาคอมพิวเตอร์กราฟฟิก <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นาย อภิธันย์ กิจจ์จินดานนท์ </b><br>ครูอัตราจ้าง สาขาวิชาช่างกลโรงงาน <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>อีเมล์ : apithan@pnt.ac.th<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>สุนิษา ฟักทอง </b><br>ครูอัตราจ้าง สาขาวิชาช่างกลโรงงาน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ชุมพล พงศ์พาสุกรี </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้างาน งานสวัสดิการนักเรียนนักศึกษา <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>ลูกจ้างอัตราจ้าง</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/importpic/5710900089553.jpg" width="120" border="1"><br><b>นางสาริกา สารีวงษ์ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่(พนักงานบริการ) <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/importpic/3710600133191.jpg" width="120" border="1"><br><b>นันทพันธ์ เหลืองรุ่งวารี </b><br>ลูกจ้างอัตราจ้าง งานพัสดุ(พนักงานขับรถยนต์) <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ทิวาวรรณ รัตนพรมรินทร์ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่(พนักงานบริการ) <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>เจ้าหน้าที่ประจำ</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/17730_22012615150219.jpg" width="120" border="1"><br><b>นางน้ำอ้อย สุขกรม </b><br>เจ้าหน้าที่ประจำ งานบริหารงานทั่วไป (สารบรรณ) <br>เจ้าหน้าที่ประจำ งานบริหารและพัฒนาทรัพยากรบุคคล <br>เจ้าหน้าที่ประจำ งานครูที่ปรึกษาและการแนะแนว (แนะแนว) <br>เจ้าหน้าที่ประจำ งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/49671_22061413131444.jpg" width="120" border="1"><br><b>นางสาวนริศรา ขำคม </b><br>เจ้าหน้าที่ประจำ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>เจ้าหน้าที่ประจำ งานทะเบียน <br>เจ้าหน้าที่ประจำ งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>อีเมล์ : Naraisara@pnt.ac.th<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/importpic/1710100145185.jpg" width="120" border="1"><br><b>มณธิดา พรหมเกตุ </b><br>เจ้าหน้าที่ประจำ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ประชาสัมพันธ์) <br>เจ้าหน้าที่ประจำ งานความร่วมมือ <br>เจ้าหน้าที่ประจำ งานส่งเสริมการวิจัย นวัตกรรม และสิ่งประดิษฐ์ <br>เจ้าหน้าที่ประจำ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>เจ้าหน้าที่ประจำ งานอาชีวศึกษาระบบทวิภาคี <br>อีเมล์ : montida59122080240@gmail.com<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/81950_22070312121430.jpg" width="120" border="1"><br><b>อลิสา อุปจันโท </b><br>เจ้าหน้าที่ประจำ งานวิทยบริการและเทคโนโลยีการศึกษา (ห้องสมุด) <br>เจ้าหน้าที่ประจำ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>เจ้าหน้าที่ประจำ งานกิจกรรมนักเรียนนักศึกษา <br>เจ้าหน้าที่ประจำ งานสวัสดิการนักเรียนนักศึกษา <br>โทรศัพท์ : 0889464229<br>อีเมล์ : alisasiuppajantro@gmail.com<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/71223_22061722225126.jpeg" width="120" border="1"><br><b>วราวุฒ ขำคม </b><br>เจ้าหน้าที่ประจำ งานครูที่ปรึกษาและการแนะแนว (ครูที่ปรึกษา) <br>เจ้าหน้าที่ประจำ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>เจ้าหน้าที่ประจำ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ประจำ งานวัดผลและประเมินผล <br>อีเมล์ : warawut@pnt.ac.th<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="files/51749_23051617172107.jpeg" width="120" border="1"><br><b>นางสาวสริตา ปานธรรม </b><br>เจ้าหน้าที่ประจำ งานการเงิน <br>อีเมล์ : sarita@pnt.ac.th<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="picture.png" width="120" border="1"><br><b>นางสาวณัฐณิชา บูชา </b><br>เจ้าหน้าที่ประจำ งานอาคารสถานที่ <br>เจ้าหน้าที่ประจำ งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="picture.png" width="120" border="1"><br><b>พัชรพรรณ ชื่นฉ่ำ </b><br>เจ้าหน้าที่ประจำ งานพัสดุ <br><br><br>
									</td>
								</tr>
							</tbody>
						</table>


					</td>
				</tr>
			</tbody>
		</table>
	</body>

	</html>

	<body>
		<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">

			<tbody>
				<tr>
					<td width="300" valign="top">



						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td><a href="?p=&amp;sex_id=&amp;mod=&amp;title=ข้อมูลบุคลากรทั้งหมด#data"><b><big>ข้อมูลบุคลากรทั้งหมด</big></b></a></td>
									<td>
										<center></center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr>
									<td colspan="2"><b><big>จำแนกตามเพศ</big></b></td>
								</tr>
								<tr>
									<td width="90%"><b>เพศ</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน</center>
										</b></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
									<td>• <a href="?p=&amp;sex_id=0&amp;mod=&amp;title=เพศไม่ระบุข้อมูล#data">ไม่ระบุข้อมูล</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
									<td>• <a href="?p=&amp;sex_id=1&amp;mod=&amp;title=เพศชาย#data">ชาย</a></td>
									<td>
										<center>190</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;sex_id=2&amp;mod=&amp;title=เพศหญิง#data">หญิง</a></td>
									<td>
										<center>90</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td align="right"><b>รวม</b></td>
									<td>
										<center>284</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
							</tbody>
						</table>

						<hr size="1">

						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td colspan="2"><b><big>จำแนกตามตำแหน่งวิทยะฐานะ</big></b></td>
								</tr>
								<tr>
									<td width="90%"><b>ตำแหน่งวิทยะฐานะ</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน</center>
										</b></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;position_id=3&amp;position2_id=3&amp;mod=&amp;title=ผู้บริหารเชี่ยวชาญ">ผู้บริหาร เชี่ยวชาญ</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;position_id=3&amp;position2_id=2&amp;mod=&amp;title=ผู้บริหารชำนาญการพิเศษ">ผู้บริหาร ชำนาญการพิเศษ</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;position_id=3&amp;position2_id=0&amp;mod=&amp;title=ผู้บริหารไม่มี">ผู้บริหาร ไม่มี</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;position_id=2&amp;position2_id=2&amp;mod=&amp;title=ครูชำนาญการพิเศษ">ครู ชำนาญการพิเศษ</a></td>
									<td>
										<center>23</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;position_id=2&amp;position2_id=1&amp;mod=&amp;title=ครูชำนาญการ">ครู ชำนาญการ</a></td>
									<td>
										<center>30</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;position_id=2&amp;position2_id=0&amp;mod=&amp;title=ครูไม่มี">ครู ไม่มี</a></td>
									<td>
										<center>33</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;position_id=1&amp;position2_id=0&amp;mod=&amp;title=ครูผู้ช่วยไม่มี">ครูผู้ช่วย ไม่มี</a></td>
									<td>
										<center>12</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;position_id=0&amp;position2_id=0&amp;mod=&amp;title=ไม่มีไม่มี">ไม่มี ไม่มี</a></td>
									<td>
										<center>183</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
							</tbody>
						</table>

						<hr size="1">

						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td colspan="2"><b><big>จำแนกตามระดับการศึกษา</big></b></td>
								</tr>
								<tr>
									<td width="90%"><b>ระดับการศึกษา</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน</center>
										</b></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=80&amp;mod=&amp;title=ปริญญาเอกหรือเทียบเท่า#data">ปริญญาเอกหรือเทียบเท่า</a></td>
									<td>
										<center>9</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=60&amp;mod=&amp;title=ปริญญาโทหรือเทียบเท่า#data">ปริญญาโทหรือเทียบเท่า</a></td>
									<td>
										<center>62</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=43&amp;mod=&amp;title=ประกาศนียบัตรบัณฑิต#data">ประกาศนียบัตรบัณฑิต</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=42&amp;mod=&amp;title=ประกาศนียบัตรครูเทคนิคชั้นสูง (ปทส.)#data">ประกาศนียบัตรครูเทคนิคชั้นสูง (ปทส.)</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=41&amp;mod=&amp;title=ปริญญาตรีหรือเทียบเท่า#data">ปริญญาตรีหรือเทียบเท่า</a></td>
									<td>
										<center>87</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=30&amp;mod=&amp;title=ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)#data">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=6&amp;mod=&amp;title=มัธยมศึกษาตอนปลาย (สายสามัญ)#data">มัธยมศึกษาตอนปลาย (สายสามัญ)</a></td>
									<td>
										<center>5</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=5&amp;mod=&amp;title=มัธยมศึกษาตอนต้น#data">มัธยมศึกษาตอนต้น</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=3&amp;mod=&amp;title=ประถมศึกษา#data">ประถมศึกษา</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;edu_id=0&amp;mod=&amp;title=ไม่ระบุ#data">ไม่ระบุ</a></td>
									<td>
										<center>111</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
							</tbody>
						</table>

						<hr size="1">

						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td colspan="2"><b><big>จำแนกตามแผนกและหน่วยงาน</big></b></td>
								</tr>
								<tr>
									<td width="90%"><b>แผนกและหน่วยงาน</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน</center>
										</b></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=director&amp;mod=&amp;title=ผู้บริหารสถานศึกษา#data"><b>ผู้บริหารสถานศึกษา</b></a></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=1&amp;mod=&amp;title=วิทยาลัยเทคนิคเชียงใหม่#data">วิทยาลัยเทคนิคเชียงใหม่</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=2&amp;mod=&amp;title=ฝ่ายวิชาการ#data">ฝ่ายวิชาการ</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=3&amp;mod=&amp;title=ฝ่ายยุทธศาสตร์และแผนงาน#data">ฝ่ายยุทธศาสตร์และแผนงาน</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=4&amp;mod=&amp;title=ฝ่ายบริหารทรัพยากร#data">ฝ่ายบริหารทรัพยากร</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=5&amp;mod=&amp;title=ฝ่ายพัฒนากิจการนักเรียน นักศึกษา#data">ฝ่ายพัฒนากิจการนักเรียน นักศึกษา</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=200&amp;mod=&amp;title=แผนกวิชาช่างยนต์#data">แผนกวิชาช่างยนต์</a></td>
									<td>
										<center>23</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=201&amp;mod=&amp;title=แผนกวิชาช่างอิเล็กทรอนิกส์#data">แผนกวิชาช่างอิเล็กทรอนิกส์</a></td>
									<td>
										<center>23</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=202&amp;mod=&amp;title=แผนกวิชาพื้นฐานและพลานามัย#data">แผนกวิชาพื้นฐานและพลานามัย</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=207&amp;mod=&amp;title=แผนกวิชาช่างกลโรงงาน#data">แผนกวิชาช่างกลโรงงาน</a></td>
									<td>
										<center>8</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=208&amp;mod=&amp;title=แผนกวิชาเมคคาทรอนิกส์#data">แผนกวิชาเมคคาทรอนิกส์</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=209&amp;mod=&amp;title=แผนกวิชาเทคโนโลยีสารสนเทศ#data">แผนกวิชาเทคโนโลยีสารสนเทศ</a></td>
									<td>
										<center>7</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=210&amp;mod=&amp;title=แผนกวิชาช่างเชื่อมโลหะ#data">แผนกวิชาช่างเชื่อมโลหะ</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=211&amp;mod=&amp;title=แผนกวิชาช่างไฟฟ้า#data">แผนกวิชาช่างไฟฟ้า</a></td>
									<td>
										<center>23</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=212&amp;mod=&amp;title=แผนกวิชาช่างก่อสร้าง#data">แผนกวิชาช่างก่อสร้าง</a></td>
									<td>
										<center>16</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=213&amp;mod=&amp;title=แผนกวิชาเทคนิคพื้นฐาน#data">แผนกวิชาเทคนิคพื้นฐาน</a></td>
									<td>
										<center>5</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=214&amp;mod=&amp;title=แผนกวิชาวิทยาศาสตร์#data">แผนกวิชาวิทยาศาสตร์</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=215&amp;mod=&amp;title=แผนกวิชาคณิตศาสตร์#data">แผนกวิชาคณิตศาสตร์</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=216&amp;mod=&amp;title=แผนกวิชาภาษาอังกฤษ#data">แผนกวิชาภาษาอังกฤษ</a></td>
									<td>
										<center>9</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=217&amp;mod=&amp;title=แผนกวิชาสังคมศึกษา#data">แผนกวิชาสังคมศึกษา</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=218&amp;mod=&amp;title=แผนกวิชาภาษาไทย#data">แผนกวิชาภาษาไทย</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=220&amp;mod=&amp;title=แผนกวิชาช่างสถาปัตยกรรม#data">แผนกวิชาช่างสถาปัตยกรรม</a></td>
									<td>
										<center>7</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=221&amp;mod=&amp;title=แผนกวิชาเทคนิคอุตสาหกรรม#data">แผนกวิชาเทคนิคอุตสาหกรรม</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=223&amp;mod=&amp;title=แผนกเทคนิคกายอุปกรณ์#data">แผนกเทคนิคกายอุปกรณ์</a></td>
									<td>
										<center>10</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=250&amp;mod=&amp;title=แผนกวิชาสามัญสัมพันธ์#data">แผนกวิชาสามัญสัมพันธ์</a></td>
									<td>
										<center>29</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=251&amp;mod=&amp;title=แผนกวิชาเทคโนโลยียานยนต์#data">แผนกวิชาเทคโนโลยียานยนต์</a></td>
									<td>
										<center>13</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=255&amp;mod=&amp;title=แผนกวิชาช่างเชื่อมโลหะ#data">แผนกวิชาช่างเชื่อมโลหะ</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=263&amp;mod=&amp;title=แผนกวิชาสามัญสัมพันธ์#data">แผนกวิชาสามัญสัมพันธ์</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=265&amp;mod=&amp;title=แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ#data">แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ</a></td>
									<td>
										<center>5</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=300&amp;mod=&amp;title=งานบริหารงานทั่วไป#data">งานบริหารงานทั่วไป</a></td>
									<td>
										<center>49</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=301&amp;mod=&amp;title=งานศูนย์ดิจิทัลและสื่อสารองค์กร#data">งานศูนย์ดิจิทัลและสื่อสารองค์กร</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=302&amp;mod=&amp;title=งานทะเบียน#data">งานทะเบียน</a></td>
									<td>
										<center>8</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=303&amp;mod=&amp;title=งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)#data">งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=304&amp;mod=&amp;title=งานการเงิน#data">งานการเงิน</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=305&amp;mod=&amp;title=งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)#data">งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=307&amp;mod=&amp;title=งานมาตราฐานและการประกันคุณภาพการศึกษา#data">งานมาตราฐานและการประกันคุณภาพการศึกษา</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=309&amp;mod=&amp;title=งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา#data">งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=310&amp;mod=&amp;title=งานการบัญชี#data">งานการบัญชี</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=312&amp;mod=&amp;title=งานพัสดุ#data">งานพัสดุ</a></td>
									<td>
										<center>11</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=313&amp;mod=&amp;title=งานสวัสดิการนักเรียน นักศึกษา#data">งานสวัสดิการนักเรียน นักศึกษา</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=315&amp;mod=&amp;title=งานอาคารสถานที่#data">งานอาคารสถานที่</a></td>
									<td>
										<center>17</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=317&amp;mod=&amp;title=งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ#data">งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=318&amp;mod=&amp;title=งานครูที่ปรึกษาและการแนะแนว#data">งานครูที่ปรึกษาและการแนะแนว</a></td>
									<td>
										<center>12</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=319&amp;mod=&amp;title=งานวัดผลและประเมินผล#data">งานวัดผลและประเมินผล</a></td>
									<td>
										<center>9</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=320&amp;mod=&amp;title=งานโครงการพิเศษและการบริการสังคม#data">งานโครงการพิเศษและการบริการสังคม</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=322&amp;mod=&amp;title=งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์#data">งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์</a></td>
									<td>
										<center>8</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=325&amp;mod=&amp;title=งานอาชีวศึกษาระบบทวิภาคี#data">งานอาชีวศึกษาระบบทวิภาคี</a></td>
									<td>
										<center>12</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=326&amp;mod=&amp;title=งานบริหารและพัฒนาทรัพยากรบุคคล#data">งานบริหารและพัฒนาทรัพยากรบุคคล</a></td>
									<td>
										<center>5</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=328&amp;mod=&amp;title=งานกิจกรรมนักเรียน นักศึกษา#data">งานกิจกรรมนักเรียน นักศึกษา</a></td>
									<td>
										<center>17</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=330&amp;mod=&amp;title=งานปกครองและความปลอดภัยนักเรียน นักศึกษา#data">งานปกครองและความปลอดภัยนักเรียน นักศึกษา</a></td>
									<td>
										<center>13</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=331&amp;mod=&amp;title=งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ#data">งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ</a></td>
									<td>
										<center>5</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=333&amp;mod=&amp;title=งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้#data">งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้</a></td>
									<td>
										<center>6</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=336&amp;mod=&amp;title=งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ#data">งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=338&amp;mod=&amp;title=งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่)#data">งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่)</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=339&amp;mod=&amp;title=งานพัสดุ (พนักงานขับรถยนต์)#data">งานพัสดุ (พนักงานขับรถยนต์)</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=341&amp;mod=&amp;title=งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่)#data">งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่)</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=343&amp;mod=&amp;title=งานกิจกรรมนักศึกษาวิชาทหาร#data">งานกิจกรรมนักศึกษาวิชาทหาร</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=344&amp;mod=&amp;title=งานบริหารงานทั่วไป (งานสารบรรณ)#data">งานบริหารงานทั่วไป (งานสารบรรณ)</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=345&amp;mod=&amp;title=งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์)#data">งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์)</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=401&amp;mod=&amp;title=ภาควิชาเทคโนโลยีสารสนเทศ#data">ภาควิชาเทคโนโลยีสารสนเทศ</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=402&amp;mod=&amp;title=ภาควิชาเทคโนโลยียานยนต์#data">ภาควิชาเทคโนโลยียานยนต์</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=403&amp;mod=&amp;title=งานการจัดการศึกษาระดับปริญญาตรี#data">งานการจัดการศึกษาระดับปริญญาตรี</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=404&amp;mod=&amp;title=งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา#data">งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา</a></td>
									<td>
										<center>7</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=502&amp;mod=&amp;title=ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี#data">ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี</a></td>
									<td>
										<center>18</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=906&amp;mod=&amp;title=งานบริหารงานทั่วไป#data">งานบริหารงานทั่วไป</a></td>
									<td>
										<center>3</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_dep_id=999&amp;mod=&amp;title=ผู้ดูแลระบบหลัก#data">ผู้ดูแลระบบหลัก</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
							</tbody>
						</table>


						<hr size="1">

						<table align="center" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-hover" width="95%">
							<tbody>
								<tr>
									<td colspan="2"><b><big>จำแนกตามตำแหน่งหน้าที่</big><b></b></b></td>
								</tr>
								<tr>
									<td width="90%"><b>ตำแหน่งหน้าที่</b></td>
									<td width="10%" align="center"><b>
											<center>จำนวน <br>(ตำแหน่ง)</center>
										</b></td>

								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=1&amp;mod=&amp;title=ผู้อำนวยการ#data#data">ผู้อำนวยการ</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=2&amp;mod=&amp;title=รองผู้อำนวยการ#data#data">รองผู้อำนวยการ</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=30&amp;mod=&amp;title=รักษาการในตำแหน่งผู้อำนวยการ#data#data">รักษาการในตำแหน่งผู้อำนวยการ</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=5&amp;mod=&amp;title=หัวหน้าแผนก#data#data">หัวหน้าแผนก</a></td>
									<td>
										<center>13</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=7&amp;mod=&amp;title=ครูประจำ#data#data">ครูประจำ</a></td>
									<td>
										<center>104</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=9&amp;mod=&amp;title=ครูอัตราจ้าง#data#data">ครูอัตราจ้าง</a></td>
									<td>
										<center>43</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=13&amp;mod=&amp;title=พนักงานราชการ (ครู)#data#data">พนักงานราชการ (ครู)</a></td>
									<td>
										<center>23</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=15&amp;mod=&amp;title=ผู้ช่วยหัวหน้าแผนก#data#data">ผู้ช่วยหัวหน้าแผนก</a></td>
									<td>
										<center>14</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=18&amp;mod=&amp;title=เจ้าหน้าที่ห้องปฏิบัติการกลางวิทยาศาสตร์ เทคโนโลยี#data#data">เจ้าหน้าที่ห้องปฏิบัติการกลางวิทยาศาสตร์ เทคโนโลยี</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=22&amp;mod=&amp;title=ครูผู้ช่วย#data#data">ครูผู้ช่วย</a></td>
									<td>
										<center>24</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=23&amp;mod=&amp;title=นักศึกษาฝึกสอน#data#data">นักศึกษาฝึกสอน</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=26&amp;mod=&amp;title=พระสงฆ์ (พระอาจารย์)#data#data">พระสงฆ์ (พระอาจารย์)</a></td>
									<td>
										<center>5</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=6&amp;mod=&amp;title=หัวหน้างาน#data#data">หัวหน้างาน</a></td>
									<td>
										<center>25</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=8&amp;mod=&amp;title=ข้าราชการพลเรือน#data#data">ข้าราชการพลเรือน</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=11&amp;mod=&amp;title=ลูกจ้างอัตราจ้าง#data#data">ลูกจ้างอัตราจ้าง</a></td>
									<td>
										<center>8</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=12&amp;mod=&amp;title=เจ้าหน้าที่#data#data">เจ้าหน้าที่</a></td>
									<td>
										<center>149</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=14&amp;mod=&amp;title=ผู้ช่วยหัวหน้างาน#data#data">ผู้ช่วยหัวหน้างาน</a></td>
									<td>
										<center>63</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=21&amp;mod=&amp;title=พนักงานราชการ (บริหารทั่วไป)#data#data">พนักงานราชการ (บริหารทั่วไป)</a></td>
									<td>
										<center>7</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=28&amp;mod=&amp;title=นักศึกษาฝึกงาน#data#data">นักศึกษาฝึกงาน</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=36&amp;mod=&amp;title=ครูพิเศษ#data#data">ครูพิเศษ</a></td>
									<td>
										<center>1</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=24&amp;mod=&amp;title=หัวหน้าภาควิชา#data#data">หัวหน้าภาควิชา</a></td>
									<td>
										<center>2</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=32&amp;mod=&amp;title=บุคลากร/อาจารย์ผู้สอน#data#data">บุคลากร/อาจารย์ผู้สอน</a></td>
									<td>
										<center>18</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
									<td>• <a href="?p=&amp;people_stagov_id=99&amp;mod=&amp;title=ผู้ดูแลระบบ#data#data">ผู้ดูแลระบบ</a></td>
									<td>
										<center>4</center>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size="1">
									</td>
								</tr>
							</tbody>
						</table>



					</td>
					<td width="70%" valign="top">
						<a name="data"></a>
						<b><big>ข้อมูลบุคลากรทั้งหมด</big></b>
						<br><br>


						<br><br>
						<center><big><b>ผู้อำนวยการ</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">

							<tbody>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="files/50773_21051510104826.png" width="120" border="1"><br><b>นายวัชรพงศ์ ฝั้นติ๊บ </b><br>ผู้อำนวยการ วิทยาลัยเทคนิคเชียงใหม่ <br>ผู้บริหาร เชี่ยวชาญ<br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>รองผู้อำนวยการ</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_20051810103019.jpg" width="120" border="1"><br><b>นายชรันต์ยุทธ์ บุญยง </b><br>รองผู้อำนวยการ ฝ่ายบริหารทรัพยากร <br>ผู้บริหาร ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_25022219192006.jpeg" width="120" border="1"><br><b>นางศศิกาญจน์ เรือนศาสตร์ </b><br>รองผู้อำนวยการ ฝ่ายพัฒนากิจการนักเรียน นักศึกษา <br>ผู้บริหาร <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_25100913130256.png" width="120" border="1"><br><b>นางเสาวคนธ์ บุญญประภา </b><br>รองผู้อำนวยการ ฝ่ายยุทธศาสตร์และแผนงาน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_25100913130408.png" width="120" border="1"><br><b>นายสุจินต์ วังใหม่ </b><br>รองผู้อำนวยการ ฝ่ายวิชาการ <br><br><br></td>
								</tr>
								<tr valign="top"></tr>
							</tbody>
						</table><br><br>
						<center><big><b>หัวหน้าแผนก</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310100937.jpg" width="120" border="1"><br><b>นางสาวญาณี ทำบุญ </b><br>หัวหน้าแผนก แผนกวิชาช่างก่อสร้าง <br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152352.jpg" width="120" border="1"><br><b>นายพงษกร ศรีมณี </b><br>หัวหน้าแผนก แผนกวิชาช่างสถาปัตยกรรม <br>ครูประจำ แผนกวิชาช่างสถาปัตยกรรม <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417175035.jpg" width="120" border="1"><br><b>นายกรณ์ภณนนท์ พลรังสิวงศ์ </b><br>หัวหน้าแผนก แผนกวิชาสามัญสัมพันธ์ <br>หัวหน้างาน งานวัดผลและประเมินผล <br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>รักษาการในตำแหน่งผู้อำนวยการ ฝ่ายวิชาการ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091413134248.jpg" width="120" border="1"><br><b>นายสมนึก มายัง </b><br>หัวหน้าแผนก แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030991843.jpg" width="120" border="1"><br><b>นายจตุรงค์ คำกันทา </b><br>หัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานโครงการพิเศษและการบริการสังคม <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19092516161107.jpg" width="120" border="1"><br><b>นายดนัย ชาวคำเขต </b><br>หัวหน้าแผนก แผนกวิชาช่างยนต์ <br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/11059_25031712123606.jpg" width="120" border="1"><br><b>นายวัชระ พงษ์รอด </b><br>หัวหน้าแผนก แผนกวิชาเทคนิคพื้นฐาน <br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/357110015077313112816163318_1.jpg" width="120" border="1"><br><b>นายพสิษฐ์ กรวราสวัสดิ์ </b><br>หัวหน้าแผนก แผนกวิชาเมคคาทรอนิกส์ <br>ครูประจำ แผนกวิชาเมคคาทรอนิกส์ <br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครู ชำนาญการ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/21141_24012610102421.jpg" width="120" border="1"><br><b>นายสุพจน์ สุดสวาท </b><br>หัวหน้าแผนก แผนกวิชาช่างกลโรงงาน <br>หัวหน้าแผนก แผนกเทคนิคกายอุปกรณ์ <br>หัวหน้างาน งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่) <br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311115726.jpg" width="120" border="1"><br><b>นายราชันย์ พรมแก้วงาม </b><br>หัวหน้าแผนก แผนกวิชาช่างเชื่อมโลหะ <br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>เจ้าหน้าที่ งานพัสดุ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://krukrai.cmtc.ac.th" target="_blank"><img src="files/80405_24072511110625.jpeg" width="120" border="1"></a><br><b>นายฐาปนันท์ ปัญญามี </b><br>หัวหน้าแผนก แผนกวิชาเทคโนโลยีสารสนเทศ <br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>ผู้ช่วยหัวหน้างาน งานบริหารและพัฒนาทรัพยากรบุคคล <br>หัวหน้าภาควิชา ภาควิชาเทคโนโลยีสารสนเทศ <br>ครู <br>โฮมเพจ : <a href="http://krukrai.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/19651_2410170995651.jpg" width="120" border="1"><br><b>นางสาวรัชดา ทิศพ่วน </b><br>หัวหน้าแผนก แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
								</tr>
								<tr valign="top"></tr>
							</tbody>
						</table><br><br>
						<center><big><b>หัวหน้างาน</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417174939.jpg" width="120" border="1"><br><b>นายสาคร ปัญญาจักร์ </b><br>หัวหน้างาน งานอาคารสถานที่ <br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/357110015077312112310103936_1.jpg" width="120" border="1"><br><b>นายมานพ แก้วมณีกรณ์ </b><br>หัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างกลโรงงาน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="www.hongkum@cmtc.ac.th" target="_blank"><img src="files/00321_25050815150754.jpg" width="120" border="1"></a><br><b>นายหงษ์คำ อินใจ </b><br>หัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="www.hongkum@cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/08592_24051710104313.jpg" width="120" border="1"><br><b>นายขนิษฐ สิทธิยศ </b><br>หัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101508.jpg" width="120" border="1"><br><b>นางภุมรี กำมะหยี่ </b><br>หัวหน้างาน งานบริหารและพัฒนาทรัพยากรบุคคล <br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://chaiwat.cmtc.ac.th" target="_blank"><img src="files/55293_16072813134037.jpg" width="120" border="1"></a><br><b>นายชัยวัฒน์ พอพิน </b><br>หัวหน้างาน งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="http://chaiwat.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="https://www.youtube.com/channel/UCICtLJrbFzbWW8d5MgN-WLw?view_as=subscriber" target="_blank"><img src="files/38318_21070716163140.jpeg" width="120" border="1"></a><br><b>นายวชิรวิชญ์ สุภา </b><br>หัวหน้างาน งานทะเบียน <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการ<br>โฮมเพจ : <a href="https://www.youtube.com/channel/UCICtLJrbFzbWW8d5MgN-WLw?view_as=subscriber" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091414140744.jpg" width="120" border="1"><br><b>นายประสงค์ วงศ์แก้ว </b><br>หัวหน้างาน งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091414140426.jpg" width="120" border="1"><br><b>ว่าที่ร้อยตรีนิพล ลีพัฒนากุล </b><br>หัวหน้างาน งานกิจกรรมนักศึกษาวิชาทหาร <br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/78943_2310120993719.jpg" width="120" border="1"><br><b>นายสิรพงศ์ ภาณุพงศ์กวินภพ </b><br>หัวหน้างาน งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่) <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/21501_24012411114004.png" width="120" border="1"><br><b>นางสาวมนัสติยา เจ้าดูรี </b><br>หัวหน้างาน งานการเงิน <br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://kruanuchat.cmtc.ac.th" target="_blank"><img src="files/50773_19080913134806.jpg" width="120" border="1"></a><br><b>นายอนุชาติ รังสิยานนท์ </b><br>หัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคโนโลยีสารสนเทศ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br>ครู ชำนาญการ<br>โฮมเพจ : <a href="http://kruanuchat.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/01438_25060514140214.jpg" width="120" border="1"><br><b>นางมัณฑนา สุภาชาติ </b><br>หัวหน้างาน งานการบัญชี <br>ข้าราชการพลเรือน งานการบัญชี <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_23011013135234.jpg" width="120" border="1"><br><b>นายจักรวี สมศักดิ์ตระกูล </b><br>หัวหน้างาน งานพัสดุ <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00281_24103115155314.jpg" width="120" border="1"><br><b>ว่าที่ร.ต.อมรินทร์ เลขะวณิชย์ </b><br>หัวหน้างาน งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_26012811115512.jpg" width="120" border="1"><br><b>นายอิทธิเชษฐ์ แท่นธัญลักษณ์ </b><br>หัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาช่างยนต์ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130118.jpg" width="120" border="1"><br><b>นายอุกฤษฎ์ สิงห์แก้ว </b><br>หัวหน้างาน งานสวัสดิการนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311114658.jpg" width="120" border="1"><br><b>นายสิราม ถามดี </b><br>หัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ครูประจำ แผนกวิชาช่างยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_21110911113005.jpg" width="120" border="1"><br><b>นายนาวี ศรีอ้าย </b><br>หัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/32280_22091912125120.jpg" width="120" border="1"><br><b>นางสาววรรณา สาริขิต </b><br>หัวหน้างาน งานบริหารงานทั่วไป <br>ครูประจำ แผนกวิชาคณิตศาสตร์ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการเงิน <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://notify-bot.line.me/th/" target="_blank"><img src="files/05018_22072116162044.jpg" width="120" border="1"></a><br><b>อดิเรก นวลศรี </b><br>หัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br>โฮมเพจ : <a href="http://notify-bot.line.me/th/" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/63312_23011012120904.jpeg" width="120" border="1"><br><b>นางสาวศศิมา เรืองสมบัติ </b><br>หัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_26012811115645.png" width="120" border="1"><br><b>นายโชตินันทร์ ปฏิการ </b><br>หัวหน้างาน งานมาตราฐานและการประกันคุณภาพการศึกษา <br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>เจ้าหน้าที่ห้องปฏิบัติการกลางวิทยาศาสตร์ เทคโนโลยี แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>ครูประจำ</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103710.jpg" width="120" border="1"><br><b>นายนิมิต รัศมี </b><br>ครูประจำ แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134250.jpg" width="120" border="1"><br><b>นายธวัช นนทธรรม </b><br>ครูประจำ แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310102938.jpg" width="120" border="1"><br><b>นายธวัชชัย คุณสารวนิช </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานสวัสดิการนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ผู้ช่วยหัวหน้างาน งานมาตราฐานและการประกันคุณภาพการศึกษา <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151809.jpg" width="120" border="1"><br><b>นายสาทร พึ่งพุ่มแก้ว </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417173057.jpg" width="120" border="1"><br><b>นายอภิชาติ แก้วประดิษฐ์ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151921.jpg" width="120" border="1"><br><b>นางธมลวรรณ ปรมาธิกุล </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091418180631.jpg" width="120" border="1"><br><b>นายทวีศักดิ์ แก้วประดับ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101048.jpg" width="120" border="1"><br><b>นางสาวพิมพ์ชนก มรุธานินทร์ </b><br>ครูประจำ แผนกวิชาสังคมศึกษา <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101008.jpg" width="120" border="1"><br><b>นางสาวพัชรินทร์ ปัญญา </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103425.jpg" width="120" border="1"><br><b>นายนพดล ภูเขา </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134703.jpg" width="120" border="1"><br><b>นายพิราม ภารังกูล </b><br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310105100.jpg" width="120" border="1"><br><b>นายอินชัย จันทะกี </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการพิเศษ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151950.jpg" width="120" border="1"><br><b>นางรัตน์ติยา ศรีมณี </b><br>ครูประจำ แผนกวิชาช่างสถาปัตยกรรม <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103309.jpg" width="120" border="1"><br><b>นายนพดล กำมะหยี่ </b><br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักศึกษาวิชาทหาร <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างเชื่อมโลหะ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310104743.jpg" width="120" border="1"><br><b>นายสุทธิรักษ์ โกช่วย </b><br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091411110000.jpg" width="120" border="1"><br><b>นายจิรวัฒน์ หล่อสุวรรณ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21061514140324.jpg" width="120" border="1"><br><b>นายอภิสิทธิ์ แสนยากุล </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417175250.jpg" width="120" border="1"><br><b>นายนิติกร อ่อนนาง </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101121.jpg" width="120" border="1"><br><b>นางกนกพร จันทรัตน์ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915151454.jpg" width="120" border="1"><br><b>นายเอกสิษฐ์ นันติ </b><br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ผู้ช่วยหัวหน้าแผนก แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134409.jpg" width="120" border="1"><br><b>นายนาวิน จักขุเรือง </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080912121500.jpg" width="120" border="1"><br><b>นายศรพงษ์ เรือนสุข </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152117.jpg" width="120" border="1"><br><b>นายชีวิน สุพรรณพยัค </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152541.jpg" width="120" border="1"><br><b>นายสืบสกุล วรวัฒนเมธี </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครู ชำนาญการ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101854.jpg" width="120" border="1"><br><b>นางสาวปรียานุช คำเย็น </b><br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21061513135714.jpg" width="120" border="1"><br><b>นายประภัทร์ ขัติยะ </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311115620.jpg" width="120" border="1"><br><b>นายธฤต ไชยมงคล </b><br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://kruwittaya.cmtc.ac.th" target="_blank"><img src="files/55293_16072813134136.jpg" width="120" border="1"></a><br><b>นายวิทยา สุภาอินทร์ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู <br>โฮมเพจ : <a href="http://kruwittaya.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103016.jpg" width="120" border="1"><br><b>นายธีระวัฒน์ จันทรัตน์ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/64454_2204280992642.jpg" width="120" border="1"><br><b>นายสุรเดช ศิริ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21112913131737.jpg" width="120" border="1"><br><b>นายรณกร วิกรรัตน์ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091410103742.jpg" width="120" border="1"><br><b>นางสาวศิริมนัส เดชเจริญ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080911115604.jpg" width="120" border="1"><br><b>นางสาวสุณิสา ทวีสุข </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานสวัสดิการนักเรียน นักศึกษา <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072717172756.jpg" width="120" border="1"><br><b>นายสุภชาติ จงไกรจักร์ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างก่อสร้าง <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="https://kridsana.cmtc.ac.th" target="_blank"><img src="files/55293_16080310102245.jpg" width="120" border="1"></a><br><b>นายกฤษณะ มีสุข </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="https://kridsana.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080913131848.jpg" width="120" border="1"><br><b>นางสาวสิริเรศ จักร์แก้ว </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_21110911110514.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.สุรชัย คำก้อน </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้างาน งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091410102431.jpg" width="120" border="1"><br><b>นายนพดล วังมณี </b><br>ครูประจำ แผนกวิชาเทคนิคอุตสาหกรรม <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคนิคพื้นฐาน <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคนิคอุตสาหกรรม <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080912124108.jpg" width="120" border="1"><br><b>นายจำลอง สิงห์คำ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/35711001507731211230993438_1.png" width="120" border="1"><br><b>นายดวงจันทร์ วงศ์ษา </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_22062313133746.jpg" width="120" border="1"><br><b>นายวทัญญู ห้าวหาญ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080913133723.jpg" width="120" border="1"><br><b>นายวัชเรนท์ ตัวสะอาด </b><br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915155554.jpg" width="120" border="1"><br><b>น.ส.ขวัญฤทัย เจริญปิยะวิวัฒน์ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานพัสดุ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915153834.jpg" width="120" border="1"><br><b>นายขจรศักดิ์ ศิริสุภา </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311114450.jpg" width="120" border="1"><br><b>นายธณิตพงษ์ สุภาชาติ </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>หัวหน้าภาควิชา ภาควิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130402.jpg" width="120" border="1"><br><b>นายคณิน ปงจันตา </b><br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสุรเชษฐ์ สุวรรณศิลป์ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ผู้ช่วยหัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/74547_23090416160711.jpg" width="120" border="1"><br><b>นางสาวเกศรินทร์ รู้ฉลาด </b><br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ครู <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/71575_22083110100950.jpg" width="120" border="1"><br><b>นางสาวพัทธ์ธีรา เพ็ชรพิจิตร </b><br>ครูประจำ แผนกวิชาสังคมศึกษา <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการบัญชี <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววาทินี เชิดชูสกุล </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/47745_2211100994211.jpg" width="120" border="1"><br><b>นางสาวชนนิกานต์ จริตงาม </b><br>ครูประจำ แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นาย ธนเศรษฐ์ ชมก้อน </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการ<br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/23872_23072511110148.jpg" width="120" border="1"><br><b>นายธนรัฐ ทัศเกตุ </b><br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/12337_24100310102658.jpg" width="120" border="1"><br><b>นายธกฤต ยอดสอน </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครูผู้ช่วย <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/77055_24010510102930.jpg" width="120" border="1"><br><b>นายวัชระ พรมกามินทร์ </b><br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50403_25021411113113.jpg" width="120" border="1"><br><b>นายธวัชชัย ปินใจยศ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br><br><br></td>
								</tr>
								<tr valign="top"></tr>
							</tbody>
						</table><br><br>
						<center><big><b>ข้าราชการพลเรือน</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080916162548.jpg" width="120" border="1"><br><b>นายชาญชัย ใบโพธิ์ </b><br>ข้าราชการพลเรือน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>ครูอัตราจ้าง</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ธนพงษ์ หาญศิริวัฒนกิจ </b><br>ครูอัตราจ้าง แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132655.jpg" width="120" border="1"><br><b>นพ.พิรุณ คำอุ่น </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132814.jpg" width="120" border="1"><br><b>นางสาวนันทนา กลัดเกษา </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132709.jpg" width="120" border="1"><br><b>นพ.วิรัช พันธ์พานิช </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132640.jpg" width="120" border="1"><br><b>รศ.นพ.วัชระ รุจิเวชพงศธร </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132907.jpg" width="120" border="1"><br><b>นายณภาคม ศรีคช </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132932.jpg" width="120" border="1"><br><b>นายสมนึก พิลา </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133003.jpg" width="120" border="1"><br><b>นายเสมอขวัญ ตันติกุล </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132839.jpg" width="120" border="1"><br><b>นายสมพงษ์ บุญแลน </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132854.jpg" width="120" border="1"><br><b>ดร.นำพร ปัญโญใหญ่ </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133016.jpg" width="120" border="1"><br><b>นายภานุพงศ์ จุมปา </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132951.jpg" width="120" border="1"><br><b>นางสาวเกยูร จิตตางกูร </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132941.jpg" width="120" border="1"><br><b>นางศรัญญา กิจเจริญสิน </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132725.jpg" width="120" border="1"><br><b>ร.อ.นพ.มล.พุฒิพงศ์ เทวกุล </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132746.jpg" width="120" border="1"><br><b>นพ.สุวัฒน์ มหัตนิรันดร์กุล </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917171029.jpg" width="120" border="1"><br><b>นายโกศล อินทรประสิทธิ์ </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080916165550.jpg" width="120" border="1"><br><b>นางสาวสายฝน สฤษดิกุล </b><br>ครูอัตราจ้าง แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917173653.jpg" width="120" border="1"><br><b>นายพิวัธกาญจน์ เหมืองคำ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313131009.jpg" width="120" border="1"><br><b>นายพิพัฒน์ ชุมแสง </b><br>ครูอัตราจ้าง แผนกวิชาเมคคาทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_23011810104133.jpg" width="120" border="1"><br><b>นายพงษ์สิทธิ์ วังใจชิด </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายอนุชิต สร้างสกุล </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสมศักดิ์ แข็งแรง </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายไกรลาศ ดอนชัย </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/08754_25101612122216.jpg" width="120" border="1"><br><b>น.ส.ฐิติพร ประกิจ </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายธนภัทรพล แทนรอด </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจิรายุ ดำหริ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจักรพงศ์ จูหมื่นไวย์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐนนท์ สมภารจันทร์ </b><br>ครูอัตราจ้าง แผนกวิชาเทคนิคพื้นฐาน <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/84361_26040813130222.jpg" width="120" border="1"><br><b>นายบวร วรรณเรือน </b><br>ครูอัตราจ้าง แผนกวิชาช่างกลโรงงาน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/60025_25061611111037.jfif" width="120" border="1"><br><b>นางสาวณัฏฐณิชา พันธุสา </b><br>ครูอัตราจ้าง แผนกวิชาช่างกลโรงงาน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/83285_23061722225940.jpg" width="120" border="1"><br><b>นางสาวกนกภรรณ พันธรัตน์ </b><br>ครูอัตราจ้าง แผนกวิชาเมคคาทรอนิกส์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายพชรกฤต ป้วนป้อม </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญารัตน์ คำสอน </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_22062314143749.jpg" width="120" border="1"><br><b>นายอภิษฎา คำลือ </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวลินดา สีแสง </b><br>ครูอัตราจ้าง แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวอมรรัตน์ ไคร้แค </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเปรมศักดิ์ ดำรักษ์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22700_25100911113718.jpg" width="120" border="1"><br><b>นายพงศกร ลาปวงคำ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/27669_25060123232618.jpeg" width="120" border="1"><br><b>นายสมัชญ์ สุริยะชัยพันธ์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเจษฎา บุลกุล </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/43960_25101610105659.jpg" width="120" border="1"><br><b>นางสาวปนัสยา อินเทพ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวพัชราภรณ์ ปิ่นชุม </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายปรัชญา ธิมา </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>ลูกจ้างอัตราจ้าง</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111609.jpg" width="120" border="1"><br><b>นางจันทร์ทิพย์ ฉันทะ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102124.jpg" width="120" border="1"><br><b>นางธนัชพร ทราบเขียว </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104241.jpg" width="120" border="1"><br><b>นางราตรี โกช่วย </b><br>ลูกจ้างอัตราจ้าง งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>เจ้าหน้าที่ งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111805.jpg" width="120" border="1"><br><b>นายธนวัฒน์ บานชื่น </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111547.jpg" width="120" border="1"><br><b>นายประสิทธิ์ ฉันทะ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010101943.jpg" width="120" border="1"><br><b>นางศรีสมร พนาบุญเจริญ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010101701.jpg" width="120" border="1"><br><b>นางอ้อยใจ ศรีดี </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายคมกริช จันทะรัตน์ </b><br>ลูกจ้างอัตราจ้าง งานพัสดุ (พนักงานขับรถยนต์) <br><br><br></td>
								</tr>
								<tr valign="top"></tr>
							</tbody>
						</table><br><br>
						<center><big><b>เจ้าหน้าที่</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011115453.jpg" width="120" border="1"><br><b>นายพิทักษ์ แก้วสมุทร์ </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://cmtc.ac.th" target="_blank"><img src="files/59895_26031715150421.jpg" width="120" border="1"></a><br><b>นายเอกพงศ์ ศักดิ์โสภิณ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์) <br>โฮมเพจ : <a href="http://cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010105844.jpg" width="120" border="1"><br><b>นายบุญรัตน์ เตวิยะ </b><br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>เจ้าหน้าที่ งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150419.jpg" width="120" border="1"><br><b>นายชุติชัย สมวงษา </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112232.jpg" width="120" border="1"><br><b>นางสาวยศยา ศรีคำดี </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102037.jpg" width="120" border="1"><br><b>นางสาวศิริวิมล คำนันยา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารงานทั่วไป (งานสารบรรณ) <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010105354.jpg" width="120" border="1"><br><b>นางอภิญญา มีสุข </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20082110102224.jpg" width="120" border="1"><br><b>นางสาวพิชยา ดื่มพุดซา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112644.jpg" width="120" border="1"><br><b>นางสาวกรรณิการ์ ทอนทะษร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112718.jpg" width="120" border="1"><br><b>นางวิชชุตา สุพรรณพยัค </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102241.jpg" width="120" border="1"><br><b>นางสาวเสาวลักษณ์ ใคร้โท้ง </b><br>เจ้าหน้าที่ งานการเงิน <br>พนักงานราชการ (บริหารทั่วไป) งานการเงิน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992436.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.กิตติศักดิ์ ฝั้นปันวงศ์ </b><br>เจ้าหน้าที่ งานการจัดการศึกษาระดับปริญญาตรี <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010103235.jpg" width="120" border="1"><br><b>นางสาวสิริมาศ จันต๊ะพิงค์ </b><br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104727.jpg" width="120" border="1"><br><b>นายวชิณุพงศ์ ทองคำ </b><br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111311.jpg" width="120" border="1"><br><b>นายทวีรักษ์ จันที </b><br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00993_24121715155130.jpg" width="120" border="1"><br><b>นายไพโรจน์ รัตต๊ะใส </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992409.jpg" width="120" border="1"><br><b>นายสุนทร ศรีวิกะ </b><br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่) <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/70587_2502050994227.jpg" width="120" border="1"><br><b>นางสาวอัลิปรียา ปัญญาดี </b><br>เจ้าหน้าที่ งานทะเบียน <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132133.jpg" width="120" border="1"><br><b>นางสาวอรญาพัชร์ ภัทรวงศ์เสถียร </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_2106100884044.jpg" width="120" border="1"><br><b>นายพิษณุ เนตรผาบ </b><br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132500.jpg" width="120" border="1"><br><b>นางปวีณา พรมแก้วงาม </b><br>เจ้าหน้าที่ งานสวัสดิการนักเรียน นักศึกษา <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ว่าที่ ร.ต. วรเชษฐ์ อภิชัย </b><br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญารัตน์ สุปินะ </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายแผนงาน และความร่วมมือ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุมิตรา แซ่เฒ่า </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>รัชดา ษมาจิตราษฎร </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/67830_25061215151208.jpg" width="120" border="1"><br><b>นางสาว ปวีณ์ธิดา เจริญภักดี </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวจริยา มั่นเกษวิทย์ </b><br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>น.ส. วิชุภัสณ์ ยานะ </b><br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00724_24071210103612.png" width="120" border="1"><br><b>นางสาวศุลีพร ศักดิ์เสรีชน </b><br>เจ้าหน้าที่ งานพัสดุ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววราภรณ์ ทนันชัย </b><br>เจ้าหน้าที่ งานการบัญชี <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววรัญญา หน่อขัต </b><br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญลักษณ์ ดวงชุ่ม </b><br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุชิราภรณ์ หน่อตง </b><br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายมนัสพล คำยันต์ </b><br>เจ้าหน้าที่ งานพัสดุ (พนักงานขับรถยนต์) <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวศิริพร กระแสทองดี </b><br>เจ้าหน้าที่ งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวลออรัตน์ กาหล้า </b><br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกนิษฐา กองพรม </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายนรินทร์ ใจขัติ </b><br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธิดารัตน์ ดวงนุรัตน์ </b><br>เจ้าหน้าที่ งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกาญจนา มารยาทอ่อน </b><br>เจ้าหน้าที่ งานพัสดุ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐกานต์ อินติ </b><br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22233_24071210101134.png" width="120" border="1"><br><b>งานพัสดุ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเทคโนโลยีสารสนเทศ วิชาเทคโนโลยีสารสนเทศ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายพัฒนากิจการนักเรียน นักศึกษา พัฒนากิจการนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/11111_23101217175946.jpg" width="120" border="1"><br><b>แผนกวิชาช่างยนต์ วิชาช่างยนต์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ผู้อำนวยการ วิทยาลัยเทคนิคเชียงใหม่ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายบริหารทรัพยากร บริหารทรัพยากร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเทคนิคอุตสาหกรรม วิชาเทคนิคอุตสาหกรรม </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างก่อสร้าง วิชาช่างก่อสร้าง </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเมคคาทรอนิกส์ วิชาเมคคาทรอนิกส์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างอิเล็กทรอนิกส์ วิชาช่างอิเล็กทรอนิกส์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างไฟฟ้า วิชาช่างไฟฟ้า </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานบริหารงานทั่วไป บริหารงานทั่วไป </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างสถาปัตยกรรม วิชาช่างสถาปัตยกรรม </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานศูนย์ข้อมูลสารสนเทศ ศูนย์ข้อมูลสารสนเทศ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานการเงิน การเงิน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวิทยบริการและห้องสมุด วิทยบริการและห้องสมุด </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานประกันคุณภาพและมาตรฐานการศึกษา ประกันคุณภาพและมาตรฐานการศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานประชาสัมพันธ์ ประชาสัมพันธ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานครูที่ปรึกษา ครูที่ปรึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานการบัญชี การบัญชี </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานสวัสดิการนักเรียน นักศึกษา สวัสดิการนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานอาคารสถานที่ อาคารสถานที่ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานส่งเสริมผลิตผล การค้าและประกอบธุรกิจ ส่งเสริมผลิตผล การค้าและประกอบธุรกิจ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานแนะแนวอาชีพและการจัดหางาน แนะแนวอาชีพและการจัดหางาน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวัดผลและประเมินผล วัดผลและประเมินผล </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22240_24073118182223.png" width="120" border="1"><br><b>งานโครงการพิเศษและการบริการชุมชน โครงการพิเศษและการบริการชุมชน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวิจัย พัฒนา นวัตกรรม และสิ่งประดิษฐ์ วิจัย พัฒนา นวัตกรรม และสิ่งประดิษฐ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานอาชีวศึกษาระบบทวิภาคี อาชีวศึกษาระบบทวิภาคี </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานบุคลากร บุคลากร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานกิจกรรมนักเรียน นักศึกษา กิจกรรมนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานปกครอง ปกครอง </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานสื่อการเรียนการสอน สื่อการเรียนการสอน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานพัฒนาหลักสูตรการเรียนการสอน พัฒนาหลักสูตรการเรียนการสอน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานความร่วมมือ ความร่วมมือ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายวิชาการ วิชาการ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างเชื่อมโลหะ วิชาช่างเชื่อมโลหะ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างกลโรงงาน วิชาช่างกลโรงงาน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกเทคนิคกายอุปกรณ์ เทคนิคกายอุปกรณ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาสามัญสัมพันธ์ วิชาสามัญสัมพันธ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานทะเบียน ทะเบียน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวางแผน และงบประมาณ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววราลักษณ์ แก้วนิล </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br><br><br></td>
								</tr>
								<tr valign="top"></tr>
							</tbody>
						</table><br><br>
						<center><big><b>พนักงานราชการ (ครู)</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150316.jpg" width="120" border="1"><br><b>นายสุรพงศ์ วัฒนกีบุตร </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992034.jpg" width="120" border="1"><br><b>นางสาวสุพรรษา เสมอเชื้อ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ผู้ช่วยหัวหน้างาน งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992549.jpg" width="120" border="1"><br><b>นายวรุพงษ์ แก้วเมืองชัย </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://itdev.cmtc.ac.th/kruwaraporn/" target="_blank"><img src="files/50773_2008210994906.jpg" width="120" border="1"></a><br><b>นางสาววราภรณ์ แผ่นฟ้า </b><br>พนักงานราชการ (ครู) แผนกวิชาเทคโนโลยีสารสนเทศ <br>โฮมเพจ : <a href="http://itdev.cmtc.ac.th/kruwaraporn/" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010103304.jpg" width="120" border="1"><br><b>นายทศพล ทิพย์วงค์ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011113244.jpg" width="120" border="1"><br><b>นายอานนท์ ยงยศ </b><br>พนักงานราชการ (ครู) แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150350.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.ศุภกร ว่องธนาการ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011110646.jpg" width="120" border="1"><br><b>นายอาทิตย์ ศรีสุวรรณ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011113118.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.ประพันธ์ นันตัง </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130547.jpg" width="120" border="1"><br><b>นายอภินันท์ ปันบัว </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011115320.jpg" width="120" border="1"><br><b>นางสาวจันทร์จิรา กันทา </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างสถาปัตยกรรม <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นาย วรวัฒน์ พิมสาร </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/25376_24071514140544.jpg" width="120" border="1"><br><b>นายฤทธิชัย ดอกบัว </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างกลโรงงาน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/17110_26010714142101.jpg" width="120" border="1"><br><b>นายวิเชียร คำปาต๋า </b><br>พนักงานราชการ (ครู) แผนกวิชาเทคโนโลยีสารสนเทศ <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>ผู้ช่วยหัวหน้างาน</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104608.jpg" width="120" border="1"><br><b>นางทองใบ คล้ายจินดา </b><br>ผู้ช่วยหัวหน้างาน งานบริหารงานทั่วไป <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/35741_22072217174206.jpg" width="120" border="1"><br><b>วรภาส แซ่เอียบ </b><br>ผู้ช่วยหัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ครูผู้ช่วย แผนกวิชาสังคมศึกษา <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/85085_22090114144906.jpg" width="120" border="1"><br><b>ปรวรรณ ทองหนูนุ้ย </b><br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38460_23110910105559.jpg" width="120" border="1"><br><b>นายพิพัฒน์ วงค์จักร์ </b><br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ครูผู้ช่วย แผนกวิชาช่างไฟฟ้า <br><br><br></td>
								</tr>
								<tr valign="top"></tr>
							</tbody>
						</table><br><br>
						<center><big><b>ผู้ช่วยหัวหน้าแผนก</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายทัศนัย สุวรรณชาตรี </b><br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเมคคาทรอนิกส์ <br>ครูผู้ช่วย แผนกวิชาเมคคาทรอนิกส์ <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>พนักงานราชการ (บริหารทั่วไป)</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>น.ส.ปภัสนันท์ สุริยะ </b><br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวญาณิศา อ่อนนุ่ม </b><br>พนักงานราชการ (บริหารทั่วไป) งานพัสดุ <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>ครูผู้ช่วย</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/46193_22091912124802.jpeg" width="120" border="1"><br><b>เอกสิริ แก่นศักดิ์ศิริ </b><br>ครูผู้ช่วย แผนกวิชาคณิตศาสตร์ <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/49108_24120117171451.jpg" width="120" border="1"><br><b>นางสาวรักษรินทร์ ศรีวรรณ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br>ครูผู้ช่วย <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/20373_25112010103425.jpg" width="120" border="1"><br><b>นางสาวนฐมนพรรณ สุวรรณชาตรี </b><br>ครูผู้ช่วย แผนกวิชาเทคโนโลยีสารสนเทศ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายภัทรชัย เบ็ญเจิด </b><br>ครูผู้ช่วย แผนกวิชาช่างไฟฟ้า <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/18443_25032812122707.jpg" width="120" border="1"><br><b>นางสาวเขมจิรา บุญสุข </b><br>ครูผู้ช่วย แผนกวิชาช่างกลโรงงาน <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวศรุตา ตรังค์เอื้อสันติ </b><br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุมิตรา เพ็ชรชะนะ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/54342_2602270990520.jpg" width="120" border="1"><br><b>นางสาวศิริลักษณ์ นาคแก้ว </b><br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวนวพรรษ บุญประสพ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/67078_25020514141102.png" width="120" border="1"><br><b>นางสาวรตา คุณทาบุตร </b><br>ครูผู้ช่วย แผนกวิชาพื้นฐานและพลานามัย <br>ครูผู้ช่วย <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายนัทธพงศ์ ฝั้นตุ่น </b><br>ครูผู้ช่วย แผนกวิชาช่างยนต์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/85678_2602020885104.jpg" width="120" border="1"><br><b>นางสาวอินทิรา อิ่มสว่าง </b><br>ครูผู้ช่วย แผนกวิชาช่างก่อสร้าง <br>ครูผู้ช่วย <br><br><br></td>
								</tr>
								<tr valign="top"></tr>
							</tbody>
						</table><br><br>
						<center><big><b>นักศึกษาฝึกสอน</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายกฤชอมร คำภีระ </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสุรสิทธิ์ เหล็กยอง </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>พระสงฆ์ (พระอาจารย์)</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133138.jpg" width="120" border="1"><br><b>prasoparatanawan saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133116.jpg" width="120" border="1"><br><b>Prasrisawan Saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133127.jpg" width="120" border="1"><br><b>prasiam saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133150.jpg" width="120" border="1"><br><b>praarnont saman (พระ) </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917174107.jpg" width="120" border="1"><br><b>พระวัชระ อติภทฺโท </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>นักศึกษาฝึกงาน</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐพงศ์ ธิมา </b><br>นักศึกษาฝึกงาน แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจิรัฎฐ์ รังรองธานินทร์ </b><br>นักศึกษาฝึกงาน แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>บุคลากร/อาจารย์ผู้สอน</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103457.jpg" width="120" border="1"><br><b>นายนรินทร์ ศรีธิการ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101818.jpg" width="120" border="1"><br><b>นางสาวชมนาด พรมมิจิตร </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101659.jpg" width="120" border="1"><br><b>นางสาวขวัญดารินทร์ จิตหาญ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992239.jpg" width="120" border="1"><br><b>นายเกรียงไกร อิ่นคำ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
								</tr>
								<tr valign="top">
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132846.jpg" width="120" border="1"><br><b>นางสาวณัฐนรี วงศ์ธิมา </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
								</tr>
							</tbody>
						</table><br><br>
						<center><big><b>ครูพิเศษ</b></big>
							<hr size="1">
						</center><br><br>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
							<tbody>
								<tr>
									<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเจตตริน ละออง </b><br>ครูพิเศษ งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ <br>ครู <br><br><br>
									</td>
								</tr>
							</tbody>
						</table>


					</td>
				</tr>
			</tbody>
		</table>
	</body>

	</html>
	<tbody>
		<tr>
			<td width="300" valign="top">



				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td><a href="?p=&amp;sex_id=&amp;mod=&amp;title=ข้อมูลบุคลากรทั้งหมด#data"><b><big>ข้อมูลบุคลากรทั้งหมด</big></b></a></td>
							<td>
								<center></center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr>
							<td colspan="2"><b><big>จำแนกตามเพศ</big></b></td>
						</tr>
						<tr>
							<td width="90%"><b>เพศ</b></td>
							<td width="10%" align="center"><b>
									<center>จำนวน</center>
								</b></td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
							<td>• <a href="?p=&amp;sex_id=0&amp;mod=&amp;title=เพศไม่ระบุข้อมูล#data">ไม่ระบุข้อมูล</a></td>
							<td>
								<center>4</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
							<td>• <a href="?p=&amp;sex_id=1&amp;mod=&amp;title=เพศชาย#data">ชาย</a></td>
							<td>
								<center>190</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;sex_id=2&amp;mod=&amp;title=เพศหญิง#data">หญิง</a></td>
							<td>
								<center>90</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td align="right"><b>รวม</b></td>
							<td>
								<center>284</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
					</tbody>
				</table>

				<hr size="1">

				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td colspan="2"><b><big>จำแนกตามตำแหน่งวิทยะฐานะ</big></b></td>
						</tr>
						<tr>
							<td width="90%"><b>ตำแหน่งวิทยะฐานะ</b></td>
							<td width="10%" align="center"><b>
									<center>จำนวน</center>
								</b></td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;position_id=3&amp;position2_id=3&amp;mod=&amp;title=ผู้บริหารเชี่ยวชาญ">ผู้บริหาร เชี่ยวชาญ</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;position_id=3&amp;position2_id=2&amp;mod=&amp;title=ผู้บริหารชำนาญการพิเศษ">ผู้บริหาร ชำนาญการพิเศษ</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;position_id=3&amp;position2_id=0&amp;mod=&amp;title=ผู้บริหารไม่มี">ผู้บริหาร ไม่มี</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;position_id=2&amp;position2_id=2&amp;mod=&amp;title=ครูชำนาญการพิเศษ">ครู ชำนาญการพิเศษ</a></td>
							<td>
								<center>23</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;position_id=2&amp;position2_id=1&amp;mod=&amp;title=ครูชำนาญการ">ครู ชำนาญการ</a></td>
							<td>
								<center>30</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;position_id=2&amp;position2_id=0&amp;mod=&amp;title=ครูไม่มี">ครู ไม่มี</a></td>
							<td>
								<center>33</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;position_id=1&amp;position2_id=0&amp;mod=&amp;title=ครูผู้ช่วยไม่มี">ครูผู้ช่วย ไม่มี</a></td>
							<td>
								<center>12</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;position_id=0&amp;position2_id=0&amp;mod=&amp;title=ไม่มีไม่มี">ไม่มี ไม่มี</a></td>
							<td>
								<center>183</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
					</tbody>
				</table>

				<hr size="1">

				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td colspan="2"><b><big>จำแนกตามระดับการศึกษา</big></b></td>
						</tr>
						<tr>
							<td width="90%"><b>ระดับการศึกษา</b></td>
							<td width="10%" align="center"><b>
									<center>จำนวน</center>
								</b></td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=80&amp;mod=&amp;title=ปริญญาเอกหรือเทียบเท่า#data">ปริญญาเอกหรือเทียบเท่า</a></td>
							<td>
								<center>9</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=60&amp;mod=&amp;title=ปริญญาโทหรือเทียบเท่า#data">ปริญญาโทหรือเทียบเท่า</a></td>
							<td>
								<center>62</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=43&amp;mod=&amp;title=ประกาศนียบัตรบัณฑิต#data">ประกาศนียบัตรบัณฑิต</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=42&amp;mod=&amp;title=ประกาศนียบัตรครูเทคนิคชั้นสูง (ปทส.)#data">ประกาศนียบัตรครูเทคนิคชั้นสูง (ปทส.)</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=41&amp;mod=&amp;title=ปริญญาตรีหรือเทียบเท่า#data">ปริญญาตรีหรือเทียบเท่า</a></td>
							<td>
								<center>87</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=30&amp;mod=&amp;title=ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)#data">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</a></td>
							<td>
								<center>3</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=6&amp;mod=&amp;title=มัธยมศึกษาตอนปลาย (สายสามัญ)#data">มัธยมศึกษาตอนปลาย (สายสามัญ)</a></td>
							<td>
								<center>5</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=5&amp;mod=&amp;title=มัธยมศึกษาตอนต้น#data">มัธยมศึกษาตอนต้น</a></td>
							<td>
								<center>3</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=3&amp;mod=&amp;title=ประถมศึกษา#data">ประถมศึกษา</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;edu_id=0&amp;mod=&amp;title=ไม่ระบุ#data">ไม่ระบุ</a></td>
							<td>
								<center>111</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
					</tbody>
				</table>

				<hr size="1">

				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td colspan="2"><b><big>จำแนกตามแผนกและหน่วยงาน</big></b></td>
						</tr>
						<tr>
							<td width="90%"><b>แผนกและหน่วยงาน</b></td>
							<td width="10%" align="center"><b>
									<center>จำนวน</center>
								</b></td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=director&amp;mod=&amp;title=ผู้บริหารสถานศึกษา#data"><b>ผู้บริหารสถานศึกษา</b></a></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=1&amp;mod=&amp;title=วิทยาลัยเทคนิคเชียงใหม่#data">วิทยาลัยเทคนิคเชียงใหม่</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=2&amp;mod=&amp;title=ฝ่ายวิชาการ#data">ฝ่ายวิชาการ</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=3&amp;mod=&amp;title=ฝ่ายยุทธศาสตร์และแผนงาน#data">ฝ่ายยุทธศาสตร์และแผนงาน</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=4&amp;mod=&amp;title=ฝ่ายบริหารทรัพยากร#data">ฝ่ายบริหารทรัพยากร</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=5&amp;mod=&amp;title=ฝ่ายพัฒนากิจการนักเรียน นักศึกษา#data">ฝ่ายพัฒนากิจการนักเรียน นักศึกษา</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=200&amp;mod=&amp;title=แผนกวิชาช่างยนต์#data">แผนกวิชาช่างยนต์</a></td>
							<td>
								<center>23</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=201&amp;mod=&amp;title=แผนกวิชาช่างอิเล็กทรอนิกส์#data">แผนกวิชาช่างอิเล็กทรอนิกส์</a></td>
							<td>
								<center>23</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=202&amp;mod=&amp;title=แผนกวิชาพื้นฐานและพลานามัย#data">แผนกวิชาพื้นฐานและพลานามัย</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=207&amp;mod=&amp;title=แผนกวิชาช่างกลโรงงาน#data">แผนกวิชาช่างกลโรงงาน</a></td>
							<td>
								<center>8</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=208&amp;mod=&amp;title=แผนกวิชาเมคคาทรอนิกส์#data">แผนกวิชาเมคคาทรอนิกส์</a></td>
							<td>
								<center>4</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=209&amp;mod=&amp;title=แผนกวิชาเทคโนโลยีสารสนเทศ#data">แผนกวิชาเทคโนโลยีสารสนเทศ</a></td>
							<td>
								<center>7</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=210&amp;mod=&amp;title=แผนกวิชาช่างเชื่อมโลหะ#data">แผนกวิชาช่างเชื่อมโลหะ</a></td>
							<td>
								<center>6</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=211&amp;mod=&amp;title=แผนกวิชาช่างไฟฟ้า#data">แผนกวิชาช่างไฟฟ้า</a></td>
							<td>
								<center>23</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=212&amp;mod=&amp;title=แผนกวิชาช่างก่อสร้าง#data">แผนกวิชาช่างก่อสร้าง</a></td>
							<td>
								<center>16</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=213&amp;mod=&amp;title=แผนกวิชาเทคนิคพื้นฐาน#data">แผนกวิชาเทคนิคพื้นฐาน</a></td>
							<td>
								<center>5</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=214&amp;mod=&amp;title=แผนกวิชาวิทยาศาสตร์#data">แผนกวิชาวิทยาศาสตร์</a></td>
							<td>
								<center>4</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=215&amp;mod=&amp;title=แผนกวิชาคณิตศาสตร์#data">แผนกวิชาคณิตศาสตร์</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=216&amp;mod=&amp;title=แผนกวิชาภาษาอังกฤษ#data">แผนกวิชาภาษาอังกฤษ</a></td>
							<td>
								<center>9</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=217&amp;mod=&amp;title=แผนกวิชาสังคมศึกษา#data">แผนกวิชาสังคมศึกษา</a></td>
							<td>
								<center>3</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=218&amp;mod=&amp;title=แผนกวิชาภาษาไทย#data">แผนกวิชาภาษาไทย</a></td>
							<td>
								<center>3</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=220&amp;mod=&amp;title=แผนกวิชาช่างสถาปัตยกรรม#data">แผนกวิชาช่างสถาปัตยกรรม</a></td>
							<td>
								<center>7</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=221&amp;mod=&amp;title=แผนกวิชาเทคนิคอุตสาหกรรม#data">แผนกวิชาเทคนิคอุตสาหกรรม</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=223&amp;mod=&amp;title=แผนกเทคนิคกายอุปกรณ์#data">แผนกเทคนิคกายอุปกรณ์</a></td>
							<td>
								<center>10</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=250&amp;mod=&amp;title=แผนกวิชาสามัญสัมพันธ์#data">แผนกวิชาสามัญสัมพันธ์</a></td>
							<td>
								<center>29</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=251&amp;mod=&amp;title=แผนกวิชาเทคโนโลยียานยนต์#data">แผนกวิชาเทคโนโลยียานยนต์</a></td>
							<td>
								<center>13</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=255&amp;mod=&amp;title=แผนกวิชาช่างเชื่อมโลหะ#data">แผนกวิชาช่างเชื่อมโลหะ</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=263&amp;mod=&amp;title=แผนกวิชาสามัญสัมพันธ์#data">แผนกวิชาสามัญสัมพันธ์</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=265&amp;mod=&amp;title=แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ#data">แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ</a></td>
							<td>
								<center>5</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=300&amp;mod=&amp;title=งานบริหารงานทั่วไป#data">งานบริหารงานทั่วไป</a></td>
							<td>
								<center>49</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=301&amp;mod=&amp;title=งานศูนย์ดิจิทัลและสื่อสารองค์กร#data">งานศูนย์ดิจิทัลและสื่อสารองค์กร</a></td>
							<td>
								<center>4</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=302&amp;mod=&amp;title=งานทะเบียน#data">งานทะเบียน</a></td>
							<td>
								<center>8</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=303&amp;mod=&amp;title=งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)#data">งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)</a></td>
							<td>
								<center>4</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=304&amp;mod=&amp;title=งานการเงิน#data">งานการเงิน</a></td>
							<td>
								<center>6</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=305&amp;mod=&amp;title=งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)#data">งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)</a></td>
							<td>
								<center>6</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=307&amp;mod=&amp;title=งานมาตราฐานและการประกันคุณภาพการศึกษา#data">งานมาตราฐานและการประกันคุณภาพการศึกษา</a></td>
							<td>
								<center>6</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=309&amp;mod=&amp;title=งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา#data">งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา</a></td>
							<td>
								<center>6</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=310&amp;mod=&amp;title=งานการบัญชี#data">งานการบัญชี</a></td>
							<td>
								<center>3</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=312&amp;mod=&amp;title=งานพัสดุ#data">งานพัสดุ</a></td>
							<td>
								<center>11</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=313&amp;mod=&amp;title=งานสวัสดิการนักเรียน นักศึกษา#data">งานสวัสดิการนักเรียน นักศึกษา</a></td>
							<td>
								<center>4</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=315&amp;mod=&amp;title=งานอาคารสถานที่#data">งานอาคารสถานที่</a></td>
							<td>
								<center>17</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=317&amp;mod=&amp;title=งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ#data">งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ</a></td>
							<td>
								<center>6</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=318&amp;mod=&amp;title=งานครูที่ปรึกษาและการแนะแนว#data">งานครูที่ปรึกษาและการแนะแนว</a></td>
							<td>
								<center>12</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=319&amp;mod=&amp;title=งานวัดผลและประเมินผล#data">งานวัดผลและประเมินผล</a></td>
							<td>
								<center>9</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=320&amp;mod=&amp;title=งานโครงการพิเศษและการบริการสังคม#data">งานโครงการพิเศษและการบริการสังคม</a></td>
							<td>
								<center>6</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=322&amp;mod=&amp;title=งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์#data">งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์</a></td>
							<td>
								<center>8</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=325&amp;mod=&amp;title=งานอาชีวศึกษาระบบทวิภาคี#data">งานอาชีวศึกษาระบบทวิภาคี</a></td>
							<td>
								<center>12</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=326&amp;mod=&amp;title=งานบริหารและพัฒนาทรัพยากรบุคคล#data">งานบริหารและพัฒนาทรัพยากรบุคคล</a></td>
							<td>
								<center>5</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=328&amp;mod=&amp;title=งานกิจกรรมนักเรียน นักศึกษา#data">งานกิจกรรมนักเรียน นักศึกษา</a></td>
							<td>
								<center>17</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=330&amp;mod=&amp;title=งานปกครองและความปลอดภัยนักเรียน นักศึกษา#data">งานปกครองและความปลอดภัยนักเรียน นักศึกษา</a></td>
							<td>
								<center>13</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=331&amp;mod=&amp;title=งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ#data">งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ</a></td>
							<td>
								<center>5</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=333&amp;mod=&amp;title=งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้#data">งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้</a></td>
							<td>
								<center>6</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=336&amp;mod=&amp;title=งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ#data">งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=338&amp;mod=&amp;title=งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่)#data">งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่)</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=339&amp;mod=&amp;title=งานพัสดุ (พนักงานขับรถยนต์)#data">งานพัสดุ (พนักงานขับรถยนต์)</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=341&amp;mod=&amp;title=งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่)#data">งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่)</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=343&amp;mod=&amp;title=งานกิจกรรมนักศึกษาวิชาทหาร#data">งานกิจกรรมนักศึกษาวิชาทหาร</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=344&amp;mod=&amp;title=งานบริหารงานทั่วไป (งานสารบรรณ)#data">งานบริหารงานทั่วไป (งานสารบรรณ)</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=345&amp;mod=&amp;title=งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์)#data">งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์)</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=401&amp;mod=&amp;title=ภาควิชาเทคโนโลยีสารสนเทศ#data">ภาควิชาเทคโนโลยีสารสนเทศ</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=402&amp;mod=&amp;title=ภาควิชาเทคโนโลยียานยนต์#data">ภาควิชาเทคโนโลยียานยนต์</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=403&amp;mod=&amp;title=งานการจัดการศึกษาระดับปริญญาตรี#data">งานการจัดการศึกษาระดับปริญญาตรี</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=404&amp;mod=&amp;title=งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา#data">งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา</a></td>
							<td>
								<center>7</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=502&amp;mod=&amp;title=ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี#data">ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี</a></td>
							<td>
								<center>18</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=906&amp;mod=&amp;title=งานบริหารงานทั่วไป#data">งานบริหารงานทั่วไป</a></td>
							<td>
								<center>3</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_dep_id=999&amp;mod=&amp;title=ผู้ดูแลระบบหลัก#data">ผู้ดูแลระบบหลัก</a></td>
							<td>
								<center>4</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
					</tbody>
				</table>


				<hr size="1">

				<table align="center" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-hover" width="95%">
					<tbody>
						<tr>
							<td colspan="2"><b><big>จำแนกตามตำแหน่งหน้าที่</big><b></b></b></td>
						</tr>
						<tr>
							<td width="90%"><b>ตำแหน่งหน้าที่</b></td>
							<td width="10%" align="center"><b>
									<center>จำนวน <br>(ตำแหน่ง)</center>
								</b></td>

						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=1&amp;mod=&amp;title=ผู้อำนวยการ#data#data">ผู้อำนวยการ</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=2&amp;mod=&amp;title=รองผู้อำนวยการ#data#data">รองผู้อำนวยการ</a></td>
							<td>
								<center>4</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=30&amp;mod=&amp;title=รักษาการในตำแหน่งผู้อำนวยการ#data#data">รักษาการในตำแหน่งผู้อำนวยการ</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=5&amp;mod=&amp;title=หัวหน้าแผนก#data#data">หัวหน้าแผนก</a></td>
							<td>
								<center>13</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=7&amp;mod=&amp;title=ครูประจำ#data#data">ครูประจำ</a></td>
							<td>
								<center>104</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=9&amp;mod=&amp;title=ครูอัตราจ้าง#data#data">ครูอัตราจ้าง</a></td>
							<td>
								<center>43</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=13&amp;mod=&amp;title=พนักงานราชการ (ครู)#data#data">พนักงานราชการ (ครู)</a></td>
							<td>
								<center>23</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=15&amp;mod=&amp;title=ผู้ช่วยหัวหน้าแผนก#data#data">ผู้ช่วยหัวหน้าแผนก</a></td>
							<td>
								<center>14</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=18&amp;mod=&amp;title=เจ้าหน้าที่ห้องปฏิบัติการกลางวิทยาศาสตร์ เทคโนโลยี#data#data">เจ้าหน้าที่ห้องปฏิบัติการกลางวิทยาศาสตร์ เทคโนโลยี</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=22&amp;mod=&amp;title=ครูผู้ช่วย#data#data">ครูผู้ช่วย</a></td>
							<td>
								<center>24</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=23&amp;mod=&amp;title=นักศึกษาฝึกสอน#data#data">นักศึกษาฝึกสอน</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=26&amp;mod=&amp;title=พระสงฆ์ (พระอาจารย์)#data#data">พระสงฆ์ (พระอาจารย์)</a></td>
							<td>
								<center>5</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=6&amp;mod=&amp;title=หัวหน้างาน#data#data">หัวหน้างาน</a></td>
							<td>
								<center>25</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=8&amp;mod=&amp;title=ข้าราชการพลเรือน#data#data">ข้าราชการพลเรือน</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=11&amp;mod=&amp;title=ลูกจ้างอัตราจ้าง#data#data">ลูกจ้างอัตราจ้าง</a></td>
							<td>
								<center>8</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=12&amp;mod=&amp;title=เจ้าหน้าที่#data#data">เจ้าหน้าที่</a></td>
							<td>
								<center>149</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=14&amp;mod=&amp;title=ผู้ช่วยหัวหน้างาน#data#data">ผู้ช่วยหัวหน้างาน</a></td>
							<td>
								<center>63</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=21&amp;mod=&amp;title=พนักงานราชการ (บริหารทั่วไป)#data#data">พนักงานราชการ (บริหารทั่วไป)</a></td>
							<td>
								<center>7</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=28&amp;mod=&amp;title=นักศึกษาฝึกงาน#data#data">นักศึกษาฝึกงาน</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=36&amp;mod=&amp;title=ครูพิเศษ#data#data">ครูพิเศษ</a></td>
							<td>
								<center>1</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=24&amp;mod=&amp;title=หัวหน้าภาควิชา#data#data">หัวหน้าภาควิชา</a></td>
							<td>
								<center>2</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=32&amp;mod=&amp;title=บุคลากร/อาจารย์ผู้สอน#data#data">บุคลากร/อาจารย์ผู้สอน</a></td>
							<td>
								<center>18</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
						<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
							<td>• <a href="?p=&amp;people_stagov_id=99&amp;mod=&amp;title=ผู้ดูแลระบบ#data#data">ผู้ดูแลระบบ</a></td>
							<td>
								<center>4</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr size="1">
							</td>
						</tr>
					</tbody>
				</table>



			</td>
			<td width="70%" valign="top">
				<a name="data"></a>
				<b><big>ข้อมูลบุคลากรทั้งหมด</big></b>
				<br><br>


				<br><br>
				<center><big><b>ผู้อำนวยการ</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">

					<tbody>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="files/50773_21051510104826.png" width="120" border="1"><br><b>นายวัชรพงศ์ ฝั้นติ๊บ </b><br>ผู้อำนวยการ วิทยาลัยเทคนิคเชียงใหม่ <br>ผู้บริหาร เชี่ยวชาญ<br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>รองผู้อำนวยการ</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_20051810103019.jpg" width="120" border="1"><br><b>นายชรันต์ยุทธ์ บุญยง </b><br>รองผู้อำนวยการ ฝ่ายบริหารทรัพยากร <br>ผู้บริหาร ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_25022219192006.jpeg" width="120" border="1"><br><b>นางศศิกาญจน์ เรือนศาสตร์ </b><br>รองผู้อำนวยการ ฝ่ายพัฒนากิจการนักเรียน นักศึกษา <br>ผู้บริหาร <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_25100913130256.png" width="120" border="1"><br><b>นางเสาวคนธ์ บุญญประภา </b><br>รองผู้อำนวยการ ฝ่ายยุทธศาสตร์และแผนงาน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_25100913130408.png" width="120" border="1"><br><b>นายสุจินต์ วังใหม่ </b><br>รองผู้อำนวยการ ฝ่ายวิชาการ <br><br><br></td>
						</tr>
						<tr valign="top"></tr>
					</tbody>
				</table><br><br>
				<center><big><b>หัวหน้าแผนก</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310100937.jpg" width="120" border="1"><br><b>นางสาวญาณี ทำบุญ </b><br>หัวหน้าแผนก แผนกวิชาช่างก่อสร้าง <br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152352.jpg" width="120" border="1"><br><b>นายพงษกร ศรีมณี </b><br>หัวหน้าแผนก แผนกวิชาช่างสถาปัตยกรรม <br>ครูประจำ แผนกวิชาช่างสถาปัตยกรรม <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417175035.jpg" width="120" border="1"><br><b>นายกรณ์ภณนนท์ พลรังสิวงศ์ </b><br>หัวหน้าแผนก แผนกวิชาสามัญสัมพันธ์ <br>หัวหน้างาน งานวัดผลและประเมินผล <br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>รักษาการในตำแหน่งผู้อำนวยการ ฝ่ายวิชาการ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091413134248.jpg" width="120" border="1"><br><b>นายสมนึก มายัง </b><br>หัวหน้าแผนก แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030991843.jpg" width="120" border="1"><br><b>นายจตุรงค์ คำกันทา </b><br>หัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานโครงการพิเศษและการบริการสังคม <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19092516161107.jpg" width="120" border="1"><br><b>นายดนัย ชาวคำเขต </b><br>หัวหน้าแผนก แผนกวิชาช่างยนต์ <br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/11059_25031712123606.jpg" width="120" border="1"><br><b>นายวัชระ พงษ์รอด </b><br>หัวหน้าแผนก แผนกวิชาเทคนิคพื้นฐาน <br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/357110015077313112816163318_1.jpg" width="120" border="1"><br><b>นายพสิษฐ์ กรวราสวัสดิ์ </b><br>หัวหน้าแผนก แผนกวิชาเมคคาทรอนิกส์ <br>ครูประจำ แผนกวิชาเมคคาทรอนิกส์ <br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครู ชำนาญการ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/21141_24012610102421.jpg" width="120" border="1"><br><b>นายสุพจน์ สุดสวาท </b><br>หัวหน้าแผนก แผนกวิชาช่างกลโรงงาน <br>หัวหน้าแผนก แผนกเทคนิคกายอุปกรณ์ <br>หัวหน้างาน งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่) <br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311115726.jpg" width="120" border="1"><br><b>นายราชันย์ พรมแก้วงาม </b><br>หัวหน้าแผนก แผนกวิชาช่างเชื่อมโลหะ <br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>เจ้าหน้าที่ งานพัสดุ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://krukrai.cmtc.ac.th" target="_blank"><img src="files/80405_24072511110625.jpeg" width="120" border="1"></a><br><b>นายฐาปนันท์ ปัญญามี </b><br>หัวหน้าแผนก แผนกวิชาเทคโนโลยีสารสนเทศ <br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>ผู้ช่วยหัวหน้างาน งานบริหารและพัฒนาทรัพยากรบุคคล <br>หัวหน้าภาควิชา ภาควิชาเทคโนโลยีสารสนเทศ <br>ครู <br>โฮมเพจ : <a href="http://krukrai.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/19651_2410170995651.jpg" width="120" border="1"><br><b>นางสาวรัชดา ทิศพ่วน </b><br>หัวหน้าแผนก แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
						</tr>
						<tr valign="top"></tr>
					</tbody>
				</table><br><br>
				<center><big><b>หัวหน้างาน</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417174939.jpg" width="120" border="1"><br><b>นายสาคร ปัญญาจักร์ </b><br>หัวหน้างาน งานอาคารสถานที่ <br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/357110015077312112310103936_1.jpg" width="120" border="1"><br><b>นายมานพ แก้วมณีกรณ์ </b><br>หัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างกลโรงงาน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="www.hongkum@cmtc.ac.th" target="_blank"><img src="files/00321_25050815150754.jpg" width="120" border="1"></a><br><b>นายหงษ์คำ อินใจ </b><br>หัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="www.hongkum@cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/08592_24051710104313.jpg" width="120" border="1"><br><b>นายขนิษฐ สิทธิยศ </b><br>หัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101508.jpg" width="120" border="1"><br><b>นางภุมรี กำมะหยี่ </b><br>หัวหน้างาน งานบริหารและพัฒนาทรัพยากรบุคคล <br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://chaiwat.cmtc.ac.th" target="_blank"><img src="files/55293_16072813134037.jpg" width="120" border="1"></a><br><b>นายชัยวัฒน์ พอพิน </b><br>หัวหน้างาน งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="http://chaiwat.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="https://www.youtube.com/channel/UCICtLJrbFzbWW8d5MgN-WLw?view_as=subscriber" target="_blank"><img src="files/38318_21070716163140.jpeg" width="120" border="1"></a><br><b>นายวชิรวิชญ์ สุภา </b><br>หัวหน้างาน งานทะเบียน <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการ<br>โฮมเพจ : <a href="https://www.youtube.com/channel/UCICtLJrbFzbWW8d5MgN-WLw?view_as=subscriber" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091414140744.jpg" width="120" border="1"><br><b>นายประสงค์ วงศ์แก้ว </b><br>หัวหน้างาน งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091414140426.jpg" width="120" border="1"><br><b>ว่าที่ร้อยตรีนิพล ลีพัฒนากุล </b><br>หัวหน้างาน งานกิจกรรมนักศึกษาวิชาทหาร <br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/78943_2310120993719.jpg" width="120" border="1"><br><b>นายสิรพงศ์ ภาณุพงศ์กวินภพ </b><br>หัวหน้างาน งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่) <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/21501_24012411114004.png" width="120" border="1"><br><b>นางสาวมนัสติยา เจ้าดูรี </b><br>หัวหน้างาน งานการเงิน <br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://kruanuchat.cmtc.ac.th" target="_blank"><img src="files/50773_19080913134806.jpg" width="120" border="1"></a><br><b>นายอนุชาติ รังสิยานนท์ </b><br>หัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคโนโลยีสารสนเทศ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br>ครู ชำนาญการ<br>โฮมเพจ : <a href="http://kruanuchat.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/01438_25060514140214.jpg" width="120" border="1"><br><b>นางมัณฑนา สุภาชาติ </b><br>หัวหน้างาน งานการบัญชี <br>ข้าราชการพลเรือน งานการบัญชี <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_23011013135234.jpg" width="120" border="1"><br><b>นายจักรวี สมศักดิ์ตระกูล </b><br>หัวหน้างาน งานพัสดุ <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00281_24103115155314.jpg" width="120" border="1"><br><b>ว่าที่ร.ต.อมรินทร์ เลขะวณิชย์ </b><br>หัวหน้างาน งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_26012811115512.jpg" width="120" border="1"><br><b>นายอิทธิเชษฐ์ แท่นธัญลักษณ์ </b><br>หัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาช่างยนต์ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130118.jpg" width="120" border="1"><br><b>นายอุกฤษฎ์ สิงห์แก้ว </b><br>หัวหน้างาน งานสวัสดิการนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311114658.jpg" width="120" border="1"><br><b>นายสิราม ถามดี </b><br>หัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ครูประจำ แผนกวิชาช่างยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_21110911113005.jpg" width="120" border="1"><br><b>นายนาวี ศรีอ้าย </b><br>หัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/32280_22091912125120.jpg" width="120" border="1"><br><b>นางสาววรรณา สาริขิต </b><br>หัวหน้างาน งานบริหารงานทั่วไป <br>ครูประจำ แผนกวิชาคณิตศาสตร์ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการเงิน <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://notify-bot.line.me/th/" target="_blank"><img src="files/05018_22072116162044.jpg" width="120" border="1"></a><br><b>อดิเรก นวลศรี </b><br>หัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br>โฮมเพจ : <a href="http://notify-bot.line.me/th/" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/63312_23011012120904.jpeg" width="120" border="1"><br><b>นางสาวศศิมา เรืองสมบัติ </b><br>หัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_26012811115645.png" width="120" border="1"><br><b>นายโชตินันทร์ ปฏิการ </b><br>หัวหน้างาน งานมาตราฐานและการประกันคุณภาพการศึกษา <br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>เจ้าหน้าที่ห้องปฏิบัติการกลางวิทยาศาสตร์ เทคโนโลยี แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>ครูประจำ</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103710.jpg" width="120" border="1"><br><b>นายนิมิต รัศมี </b><br>ครูประจำ แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134250.jpg" width="120" border="1"><br><b>นายธวัช นนทธรรม </b><br>ครูประจำ แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310102938.jpg" width="120" border="1"><br><b>นายธวัชชัย คุณสารวนิช </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานสวัสดิการนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ผู้ช่วยหัวหน้างาน งานมาตราฐานและการประกันคุณภาพการศึกษา <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151809.jpg" width="120" border="1"><br><b>นายสาทร พึ่งพุ่มแก้ว </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417173057.jpg" width="120" border="1"><br><b>นายอภิชาติ แก้วประดิษฐ์ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151921.jpg" width="120" border="1"><br><b>นางธมลวรรณ ปรมาธิกุล </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091418180631.jpg" width="120" border="1"><br><b>นายทวีศักดิ์ แก้วประดับ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101048.jpg" width="120" border="1"><br><b>นางสาวพิมพ์ชนก มรุธานินทร์ </b><br>ครูประจำ แผนกวิชาสังคมศึกษา <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101008.jpg" width="120" border="1"><br><b>นางสาวพัชรินทร์ ปัญญา </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103425.jpg" width="120" border="1"><br><b>นายนพดล ภูเขา </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134703.jpg" width="120" border="1"><br><b>นายพิราม ภารังกูล </b><br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310105100.jpg" width="120" border="1"><br><b>นายอินชัย จันทะกี </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการพิเศษ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151950.jpg" width="120" border="1"><br><b>นางรัตน์ติยา ศรีมณี </b><br>ครูประจำ แผนกวิชาช่างสถาปัตยกรรม <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103309.jpg" width="120" border="1"><br><b>นายนพดล กำมะหยี่ </b><br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักศึกษาวิชาทหาร <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างเชื่อมโลหะ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310104743.jpg" width="120" border="1"><br><b>นายสุทธิรักษ์ โกช่วย </b><br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091411110000.jpg" width="120" border="1"><br><b>นายจิรวัฒน์ หล่อสุวรรณ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21061514140324.jpg" width="120" border="1"><br><b>นายอภิสิทธิ์ แสนยากุล </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417175250.jpg" width="120" border="1"><br><b>นายนิติกร อ่อนนาง </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101121.jpg" width="120" border="1"><br><b>นางกนกพร จันทรัตน์ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915151454.jpg" width="120" border="1"><br><b>นายเอกสิษฐ์ นันติ </b><br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ผู้ช่วยหัวหน้าแผนก แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134409.jpg" width="120" border="1"><br><b>นายนาวิน จักขุเรือง </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080912121500.jpg" width="120" border="1"><br><b>นายศรพงษ์ เรือนสุข </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152117.jpg" width="120" border="1"><br><b>นายชีวิน สุพรรณพยัค </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152541.jpg" width="120" border="1"><br><b>นายสืบสกุล วรวัฒนเมธี </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครู ชำนาญการ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101854.jpg" width="120" border="1"><br><b>นางสาวปรียานุช คำเย็น </b><br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21061513135714.jpg" width="120" border="1"><br><b>นายประภัทร์ ขัติยะ </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311115620.jpg" width="120" border="1"><br><b>นายธฤต ไชยมงคล </b><br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://kruwittaya.cmtc.ac.th" target="_blank"><img src="files/55293_16072813134136.jpg" width="120" border="1"></a><br><b>นายวิทยา สุภาอินทร์ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู <br>โฮมเพจ : <a href="http://kruwittaya.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103016.jpg" width="120" border="1"><br><b>นายธีระวัฒน์ จันทรัตน์ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/64454_2204280992642.jpg" width="120" border="1"><br><b>นายสุรเดช ศิริ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21112913131737.jpg" width="120" border="1"><br><b>นายรณกร วิกรรัตน์ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091410103742.jpg" width="120" border="1"><br><b>นางสาวศิริมนัส เดชเจริญ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080911115604.jpg" width="120" border="1"><br><b>นางสาวสุณิสา ทวีสุข </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานสวัสดิการนักเรียน นักศึกษา <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072717172756.jpg" width="120" border="1"><br><b>นายสุภชาติ จงไกรจักร์ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างก่อสร้าง <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="https://kridsana.cmtc.ac.th" target="_blank"><img src="files/55293_16080310102245.jpg" width="120" border="1"></a><br><b>นายกฤษณะ มีสุข </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="https://kridsana.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080913131848.jpg" width="120" border="1"><br><b>นางสาวสิริเรศ จักร์แก้ว </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_21110911110514.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.สุรชัย คำก้อน </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้างาน งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091410102431.jpg" width="120" border="1"><br><b>นายนพดล วังมณี </b><br>ครูประจำ แผนกวิชาเทคนิคอุตสาหกรรม <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคนิคพื้นฐาน <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคนิคอุตสาหกรรม <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080912124108.jpg" width="120" border="1"><br><b>นายจำลอง สิงห์คำ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/35711001507731211230993438_1.png" width="120" border="1"><br><b>นายดวงจันทร์ วงศ์ษา </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_22062313133746.jpg" width="120" border="1"><br><b>นายวทัญญู ห้าวหาญ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080913133723.jpg" width="120" border="1"><br><b>นายวัชเรนท์ ตัวสะอาด </b><br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915155554.jpg" width="120" border="1"><br><b>น.ส.ขวัญฤทัย เจริญปิยะวิวัฒน์ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานพัสดุ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915153834.jpg" width="120" border="1"><br><b>นายขจรศักดิ์ ศิริสุภา </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311114450.jpg" width="120" border="1"><br><b>นายธณิตพงษ์ สุภาชาติ </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>หัวหน้าภาควิชา ภาควิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130402.jpg" width="120" border="1"><br><b>นายคณิน ปงจันตา </b><br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสุรเชษฐ์ สุวรรณศิลป์ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ผู้ช่วยหัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/74547_23090416160711.jpg" width="120" border="1"><br><b>นางสาวเกศรินทร์ รู้ฉลาด </b><br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ครู <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/71575_22083110100950.jpg" width="120" border="1"><br><b>นางสาวพัทธ์ธีรา เพ็ชรพิจิตร </b><br>ครูประจำ แผนกวิชาสังคมศึกษา <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการบัญชี <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววาทินี เชิดชูสกุล </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/47745_2211100994211.jpg" width="120" border="1"><br><b>นางสาวชนนิกานต์ จริตงาม </b><br>ครูประจำ แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นาย ธนเศรษฐ์ ชมก้อน </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการ<br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/23872_23072511110148.jpg" width="120" border="1"><br><b>นายธนรัฐ ทัศเกตุ </b><br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/12337_24100310102658.jpg" width="120" border="1"><br><b>นายธกฤต ยอดสอน </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครูผู้ช่วย <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/77055_24010510102930.jpg" width="120" border="1"><br><b>นายวัชระ พรมกามินทร์ </b><br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50403_25021411113113.jpg" width="120" border="1"><br><b>นายธวัชชัย ปินใจยศ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br><br><br></td>
						</tr>
						<tr valign="top"></tr>
					</tbody>
				</table><br><br>
				<center><big><b>ข้าราชการพลเรือน</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080916162548.jpg" width="120" border="1"><br><b>นายชาญชัย ใบโพธิ์ </b><br>ข้าราชการพลเรือน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>ครูอัตราจ้าง</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ธนพงษ์ หาญศิริวัฒนกิจ </b><br>ครูอัตราจ้าง แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132655.jpg" width="120" border="1"><br><b>นพ.พิรุณ คำอุ่น </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132814.jpg" width="120" border="1"><br><b>นางสาวนันทนา กลัดเกษา </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132709.jpg" width="120" border="1"><br><b>นพ.วิรัช พันธ์พานิช </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132640.jpg" width="120" border="1"><br><b>รศ.นพ.วัชระ รุจิเวชพงศธร </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132907.jpg" width="120" border="1"><br><b>นายณภาคม ศรีคช </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132932.jpg" width="120" border="1"><br><b>นายสมนึก พิลา </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133003.jpg" width="120" border="1"><br><b>นายเสมอขวัญ ตันติกุล </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132839.jpg" width="120" border="1"><br><b>นายสมพงษ์ บุญแลน </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132854.jpg" width="120" border="1"><br><b>ดร.นำพร ปัญโญใหญ่ </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133016.jpg" width="120" border="1"><br><b>นายภานุพงศ์ จุมปา </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132951.jpg" width="120" border="1"><br><b>นางสาวเกยูร จิตตางกูร </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132941.jpg" width="120" border="1"><br><b>นางศรัญญา กิจเจริญสิน </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132725.jpg" width="120" border="1"><br><b>ร.อ.นพ.มล.พุฒิพงศ์ เทวกุล </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132746.jpg" width="120" border="1"><br><b>นพ.สุวัฒน์ มหัตนิรันดร์กุล </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917171029.jpg" width="120" border="1"><br><b>นายโกศล อินทรประสิทธิ์ </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080916165550.jpg" width="120" border="1"><br><b>นางสาวสายฝน สฤษดิกุล </b><br>ครูอัตราจ้าง แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917173653.jpg" width="120" border="1"><br><b>นายพิวัธกาญจน์ เหมืองคำ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313131009.jpg" width="120" border="1"><br><b>นายพิพัฒน์ ชุมแสง </b><br>ครูอัตราจ้าง แผนกวิชาเมคคาทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_23011810104133.jpg" width="120" border="1"><br><b>นายพงษ์สิทธิ์ วังใจชิด </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายอนุชิต สร้างสกุล </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสมศักดิ์ แข็งแรง </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายไกรลาศ ดอนชัย </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/08754_25101612122216.jpg" width="120" border="1"><br><b>น.ส.ฐิติพร ประกิจ </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายธนภัทรพล แทนรอด </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจิรายุ ดำหริ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจักรพงศ์ จูหมื่นไวย์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐนนท์ สมภารจันทร์ </b><br>ครูอัตราจ้าง แผนกวิชาเทคนิคพื้นฐาน <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/84361_26040813130222.jpg" width="120" border="1"><br><b>นายบวร วรรณเรือน </b><br>ครูอัตราจ้าง แผนกวิชาช่างกลโรงงาน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/60025_25061611111037.jfif" width="120" border="1"><br><b>นางสาวณัฏฐณิชา พันธุสา </b><br>ครูอัตราจ้าง แผนกวิชาช่างกลโรงงาน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/83285_23061722225940.jpg" width="120" border="1"><br><b>นางสาวกนกภรรณ พันธรัตน์ </b><br>ครูอัตราจ้าง แผนกวิชาเมคคาทรอนิกส์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายพชรกฤต ป้วนป้อม </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญารัตน์ คำสอน </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_22062314143749.jpg" width="120" border="1"><br><b>นายอภิษฎา คำลือ </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวลินดา สีแสง </b><br>ครูอัตราจ้าง แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวอมรรัตน์ ไคร้แค </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเปรมศักดิ์ ดำรักษ์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22700_25100911113718.jpg" width="120" border="1"><br><b>นายพงศกร ลาปวงคำ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/27669_25060123232618.jpeg" width="120" border="1"><br><b>นายสมัชญ์ สุริยะชัยพันธ์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเจษฎา บุลกุล </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/43960_25101610105659.jpg" width="120" border="1"><br><b>นางสาวปนัสยา อินเทพ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวพัชราภรณ์ ปิ่นชุม </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายปรัชญา ธิมา </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>ลูกจ้างอัตราจ้าง</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111609.jpg" width="120" border="1"><br><b>นางจันทร์ทิพย์ ฉันทะ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102124.jpg" width="120" border="1"><br><b>นางธนัชพร ทราบเขียว </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104241.jpg" width="120" border="1"><br><b>นางราตรี โกช่วย </b><br>ลูกจ้างอัตราจ้าง งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>เจ้าหน้าที่ งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111805.jpg" width="120" border="1"><br><b>นายธนวัฒน์ บานชื่น </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111547.jpg" width="120" border="1"><br><b>นายประสิทธิ์ ฉันทะ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010101943.jpg" width="120" border="1"><br><b>นางศรีสมร พนาบุญเจริญ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010101701.jpg" width="120" border="1"><br><b>นางอ้อยใจ ศรีดี </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายคมกริช จันทะรัตน์ </b><br>ลูกจ้างอัตราจ้าง งานพัสดุ (พนักงานขับรถยนต์) <br><br><br></td>
						</tr>
						<tr valign="top"></tr>
					</tbody>
				</table><br><br>
				<center><big><b>เจ้าหน้าที่</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011115453.jpg" width="120" border="1"><br><b>นายพิทักษ์ แก้วสมุทร์ </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://cmtc.ac.th" target="_blank"><img src="files/59895_26031715150421.jpg" width="120" border="1"></a><br><b>นายเอกพงศ์ ศักดิ์โสภิณ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์) <br>โฮมเพจ : <a href="http://cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010105844.jpg" width="120" border="1"><br><b>นายบุญรัตน์ เตวิยะ </b><br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>เจ้าหน้าที่ งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150419.jpg" width="120" border="1"><br><b>นายชุติชัย สมวงษา </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112232.jpg" width="120" border="1"><br><b>นางสาวยศยา ศรีคำดี </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102037.jpg" width="120" border="1"><br><b>นางสาวศิริวิมล คำนันยา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารงานทั่วไป (งานสารบรรณ) <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010105354.jpg" width="120" border="1"><br><b>นางอภิญญา มีสุข </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20082110102224.jpg" width="120" border="1"><br><b>นางสาวพิชยา ดื่มพุดซา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112644.jpg" width="120" border="1"><br><b>นางสาวกรรณิการ์ ทอนทะษร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112718.jpg" width="120" border="1"><br><b>นางวิชชุตา สุพรรณพยัค </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102241.jpg" width="120" border="1"><br><b>นางสาวเสาวลักษณ์ ใคร้โท้ง </b><br>เจ้าหน้าที่ งานการเงิน <br>พนักงานราชการ (บริหารทั่วไป) งานการเงิน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992436.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.กิตติศักดิ์ ฝั้นปันวงศ์ </b><br>เจ้าหน้าที่ งานการจัดการศึกษาระดับปริญญาตรี <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010103235.jpg" width="120" border="1"><br><b>นางสาวสิริมาศ จันต๊ะพิงค์ </b><br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104727.jpg" width="120" border="1"><br><b>นายวชิณุพงศ์ ทองคำ </b><br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111311.jpg" width="120" border="1"><br><b>นายทวีรักษ์ จันที </b><br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00993_24121715155130.jpg" width="120" border="1"><br><b>นายไพโรจน์ รัตต๊ะใส </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992409.jpg" width="120" border="1"><br><b>นายสุนทร ศรีวิกะ </b><br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่) <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/70587_2502050994227.jpg" width="120" border="1"><br><b>นางสาวอัลิปรียา ปัญญาดี </b><br>เจ้าหน้าที่ งานทะเบียน <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132133.jpg" width="120" border="1"><br><b>นางสาวอรญาพัชร์ ภัทรวงศ์เสถียร </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_2106100884044.jpg" width="120" border="1"><br><b>นายพิษณุ เนตรผาบ </b><br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132500.jpg" width="120" border="1"><br><b>นางปวีณา พรมแก้วงาม </b><br>เจ้าหน้าที่ งานสวัสดิการนักเรียน นักศึกษา <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ว่าที่ ร.ต. วรเชษฐ์ อภิชัย </b><br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญารัตน์ สุปินะ </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายแผนงาน และความร่วมมือ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุมิตรา แซ่เฒ่า </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>รัชดา ษมาจิตราษฎร </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/67830_25061215151208.jpg" width="120" border="1"><br><b>นางสาว ปวีณ์ธิดา เจริญภักดี </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวจริยา มั่นเกษวิทย์ </b><br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>น.ส. วิชุภัสณ์ ยานะ </b><br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00724_24071210103612.png" width="120" border="1"><br><b>นางสาวศุลีพร ศักดิ์เสรีชน </b><br>เจ้าหน้าที่ งานพัสดุ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววราภรณ์ ทนันชัย </b><br>เจ้าหน้าที่ งานการบัญชี <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววรัญญา หน่อขัต </b><br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญลักษณ์ ดวงชุ่ม </b><br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุชิราภรณ์ หน่อตง </b><br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายมนัสพล คำยันต์ </b><br>เจ้าหน้าที่ งานพัสดุ (พนักงานขับรถยนต์) <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวศิริพร กระแสทองดี </b><br>เจ้าหน้าที่ งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวลออรัตน์ กาหล้า </b><br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกนิษฐา กองพรม </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายนรินทร์ ใจขัติ </b><br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธิดารัตน์ ดวงนุรัตน์ </b><br>เจ้าหน้าที่ งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกาญจนา มารยาทอ่อน </b><br>เจ้าหน้าที่ งานพัสดุ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐกานต์ อินติ </b><br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22233_24071210101134.png" width="120" border="1"><br><b>งานพัสดุ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเทคโนโลยีสารสนเทศ วิชาเทคโนโลยีสารสนเทศ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายพัฒนากิจการนักเรียน นักศึกษา พัฒนากิจการนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/11111_23101217175946.jpg" width="120" border="1"><br><b>แผนกวิชาช่างยนต์ วิชาช่างยนต์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ผู้อำนวยการ วิทยาลัยเทคนิคเชียงใหม่ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายบริหารทรัพยากร บริหารทรัพยากร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเทคนิคอุตสาหกรรม วิชาเทคนิคอุตสาหกรรม </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างก่อสร้าง วิชาช่างก่อสร้าง </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเมคคาทรอนิกส์ วิชาเมคคาทรอนิกส์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างอิเล็กทรอนิกส์ วิชาช่างอิเล็กทรอนิกส์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างไฟฟ้า วิชาช่างไฟฟ้า </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานบริหารงานทั่วไป บริหารงานทั่วไป </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างสถาปัตยกรรม วิชาช่างสถาปัตยกรรม </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานศูนย์ข้อมูลสารสนเทศ ศูนย์ข้อมูลสารสนเทศ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานการเงิน การเงิน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวิทยบริการและห้องสมุด วิทยบริการและห้องสมุด </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานประกันคุณภาพและมาตรฐานการศึกษา ประกันคุณภาพและมาตรฐานการศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานประชาสัมพันธ์ ประชาสัมพันธ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานครูที่ปรึกษา ครูที่ปรึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานการบัญชี การบัญชี </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานสวัสดิการนักเรียน นักศึกษา สวัสดิการนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานอาคารสถานที่ อาคารสถานที่ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานส่งเสริมผลิตผล การค้าและประกอบธุรกิจ ส่งเสริมผลิตผล การค้าและประกอบธุรกิจ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานแนะแนวอาชีพและการจัดหางาน แนะแนวอาชีพและการจัดหางาน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวัดผลและประเมินผล วัดผลและประเมินผล </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22240_24073118182223.png" width="120" border="1"><br><b>งานโครงการพิเศษและการบริการชุมชน โครงการพิเศษและการบริการชุมชน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวิจัย พัฒนา นวัตกรรม และสิ่งประดิษฐ์ วิจัย พัฒนา นวัตกรรม และสิ่งประดิษฐ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานอาชีวศึกษาระบบทวิภาคี อาชีวศึกษาระบบทวิภาคี </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานบุคลากร บุคลากร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานกิจกรรมนักเรียน นักศึกษา กิจกรรมนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานปกครอง ปกครอง </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานสื่อการเรียนการสอน สื่อการเรียนการสอน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานพัฒนาหลักสูตรการเรียนการสอน พัฒนาหลักสูตรการเรียนการสอน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานความร่วมมือ ความร่วมมือ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายวิชาการ วิชาการ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างเชื่อมโลหะ วิชาช่างเชื่อมโลหะ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างกลโรงงาน วิชาช่างกลโรงงาน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกเทคนิคกายอุปกรณ์ เทคนิคกายอุปกรณ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาสามัญสัมพันธ์ วิชาสามัญสัมพันธ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานทะเบียน ทะเบียน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวางแผน และงบประมาณ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววราลักษณ์ แก้วนิล </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br><br><br></td>
						</tr>
						<tr valign="top"></tr>
					</tbody>
				</table><br><br>
				<center><big><b>พนักงานราชการ (ครู)</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150316.jpg" width="120" border="1"><br><b>นายสุรพงศ์ วัฒนกีบุตร </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992034.jpg" width="120" border="1"><br><b>นางสาวสุพรรษา เสมอเชื้อ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ผู้ช่วยหัวหน้างาน งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992549.jpg" width="120" border="1"><br><b>นายวรุพงษ์ แก้วเมืองชัย </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://itdev.cmtc.ac.th/kruwaraporn/" target="_blank"><img src="files/50773_2008210994906.jpg" width="120" border="1"></a><br><b>นางสาววราภรณ์ แผ่นฟ้า </b><br>พนักงานราชการ (ครู) แผนกวิชาเทคโนโลยีสารสนเทศ <br>โฮมเพจ : <a href="http://itdev.cmtc.ac.th/kruwaraporn/" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010103304.jpg" width="120" border="1"><br><b>นายทศพล ทิพย์วงค์ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011113244.jpg" width="120" border="1"><br><b>นายอานนท์ ยงยศ </b><br>พนักงานราชการ (ครู) แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150350.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.ศุภกร ว่องธนาการ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011110646.jpg" width="120" border="1"><br><b>นายอาทิตย์ ศรีสุวรรณ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011113118.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.ประพันธ์ นันตัง </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130547.jpg" width="120" border="1"><br><b>นายอภินันท์ ปันบัว </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011115320.jpg" width="120" border="1"><br><b>นางสาวจันทร์จิรา กันทา </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างสถาปัตยกรรม <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นาย วรวัฒน์ พิมสาร </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/25376_24071514140544.jpg" width="120" border="1"><br><b>นายฤทธิชัย ดอกบัว </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างกลโรงงาน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/17110_26010714142101.jpg" width="120" border="1"><br><b>นายวิเชียร คำปาต๋า </b><br>พนักงานราชการ (ครู) แผนกวิชาเทคโนโลยีสารสนเทศ <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>ผู้ช่วยหัวหน้างาน</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104608.jpg" width="120" border="1"><br><b>นางทองใบ คล้ายจินดา </b><br>ผู้ช่วยหัวหน้างาน งานบริหารงานทั่วไป <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/35741_22072217174206.jpg" width="120" border="1"><br><b>วรภาส แซ่เอียบ </b><br>ผู้ช่วยหัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ครูผู้ช่วย แผนกวิชาสังคมศึกษา <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/85085_22090114144906.jpg" width="120" border="1"><br><b>ปรวรรณ ทองหนูนุ้ย </b><br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38460_23110910105559.jpg" width="120" border="1"><br><b>นายพิพัฒน์ วงค์จักร์ </b><br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ครูผู้ช่วย แผนกวิชาช่างไฟฟ้า <br><br><br></td>
						</tr>
						<tr valign="top"></tr>
					</tbody>
				</table><br><br>
				<center><big><b>ผู้ช่วยหัวหน้าแผนก</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายทัศนัย สุวรรณชาตรี </b><br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเมคคาทรอนิกส์ <br>ครูผู้ช่วย แผนกวิชาเมคคาทรอนิกส์ <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>พนักงานราชการ (บริหารทั่วไป)</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>น.ส.ปภัสนันท์ สุริยะ </b><br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวญาณิศา อ่อนนุ่ม </b><br>พนักงานราชการ (บริหารทั่วไป) งานพัสดุ <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>ครูผู้ช่วย</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/46193_22091912124802.jpeg" width="120" border="1"><br><b>เอกสิริ แก่นศักดิ์ศิริ </b><br>ครูผู้ช่วย แผนกวิชาคณิตศาสตร์ <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/49108_24120117171451.jpg" width="120" border="1"><br><b>นางสาวรักษรินทร์ ศรีวรรณ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br>ครูผู้ช่วย <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/20373_25112010103425.jpg" width="120" border="1"><br><b>นางสาวนฐมนพรรณ สุวรรณชาตรี </b><br>ครูผู้ช่วย แผนกวิชาเทคโนโลยีสารสนเทศ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายภัทรชัย เบ็ญเจิด </b><br>ครูผู้ช่วย แผนกวิชาช่างไฟฟ้า <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/18443_25032812122707.jpg" width="120" border="1"><br><b>นางสาวเขมจิรา บุญสุข </b><br>ครูผู้ช่วย แผนกวิชาช่างกลโรงงาน <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวศรุตา ตรังค์เอื้อสันติ </b><br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุมิตรา เพ็ชรชะนะ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/54342_2602270990520.jpg" width="120" border="1"><br><b>นางสาวศิริลักษณ์ นาคแก้ว </b><br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวนวพรรษ บุญประสพ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/67078_25020514141102.png" width="120" border="1"><br><b>นางสาวรตา คุณทาบุตร </b><br>ครูผู้ช่วย แผนกวิชาพื้นฐานและพลานามัย <br>ครูผู้ช่วย <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายนัทธพงศ์ ฝั้นตุ่น </b><br>ครูผู้ช่วย แผนกวิชาช่างยนต์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/85678_2602020885104.jpg" width="120" border="1"><br><b>นางสาวอินทิรา อิ่มสว่าง </b><br>ครูผู้ช่วย แผนกวิชาช่างก่อสร้าง <br>ครูผู้ช่วย <br><br><br></td>
						</tr>
						<tr valign="top"></tr>
					</tbody>
				</table><br><br>
				<center><big><b>นักศึกษาฝึกสอน</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายกฤชอมร คำภีระ </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสุรสิทธิ์ เหล็กยอง </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>พระสงฆ์ (พระอาจารย์)</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133138.jpg" width="120" border="1"><br><b>prasoparatanawan saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133116.jpg" width="120" border="1"><br><b>Prasrisawan Saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133127.jpg" width="120" border="1"><br><b>prasiam saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133150.jpg" width="120" border="1"><br><b>praarnont saman (พระ) </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917174107.jpg" width="120" border="1"><br><b>พระวัชระ อติภทฺโท </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>นักศึกษาฝึกงาน</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐพงศ์ ธิมา </b><br>นักศึกษาฝึกงาน แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจิรัฎฐ์ รังรองธานินทร์ </b><br>นักศึกษาฝึกงาน แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>บุคลากร/อาจารย์ผู้สอน</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103457.jpg" width="120" border="1"><br><b>นายนรินทร์ ศรีธิการ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101818.jpg" width="120" border="1"><br><b>นางสาวชมนาด พรมมิจิตร </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101659.jpg" width="120" border="1"><br><b>นางสาวขวัญดารินทร์ จิตหาญ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992239.jpg" width="120" border="1"><br><b>นายเกรียงไกร อิ่นคำ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
						</tr>
						<tr valign="top">
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132846.jpg" width="120" border="1"><br><b>นางสาวณัฐนรี วงศ์ธิมา </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
						</tr>
					</tbody>
				</table><br><br>
				<center><big><b>ครูพิเศษ</b></big>
					<hr size="1">
				</center><br><br>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
					<tbody>
						<tr>
							<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเจตตริน ละออง </b><br>ครูพิเศษ งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ <br>ครู <br><br><br>
							</td>
						</tr>
					</tbody>
				</table>


			</td>
		</tr>
	</tbody>
	<?php include 'footer.php'; ?> <!-- เรียกใช้ ท้ายเว็บ-->
</body>

</html>tle=ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)#data">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</a></td>
<td>
	<center>3</center>
</td>
</tr>
<tr>
	<td colspan="2">
		<hr size="1">
	</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
	<td>• <a href="?p=&amp;edu_id=6&amp;mod=&amp;title=มัธยมศึกษาตอนปลาย (สายสามัญ)#data">มัธยมศึกษาตอนปลาย (สายสามัญ)</a></td>
	<td>
		<center>5</center>
	</td>
</tr>
<tr>
	<td colspan="2">
		<hr size="1">
	</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
	<td>• <a href="?p=&amp;edu_id=5&amp;mod=&amp;title=มัธยมศึกษาตอนต้น#data">มัธยมศึกษาตอนต้น</a></td>
	<td>
		<center>3</center>
	</td>
</tr>
<tr>
	<td colspan="2">
		<hr size="1">
	</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
	<td>• <a href="?p=&amp;edu_id=3&amp;mod=&amp;title=ประถมศึกษา#data">ประถมศึกษา</a></td>
	<td>
		<center>2</center>
	</td>
</tr>
<tr>
	<td colspan="2">
		<hr size="1">
	</td>
</tr>
<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
	<td>• <a href="?p=&amp;edu_id=0&amp;mod=&amp;title=ไม่ระบุ#data">ไม่ระบุ</a></td>
	<td>
		<center>111</center>
	</td>
</tr>
<tr>
	<td colspan="2">
		<hr size="1">
	</td>
</tr>
</tbody>
</table>

<hr size="1">

<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
	<tbody>
		<tr>
			<td colspan="2"><b><big>จำแนกตามแผนกและหน่วยงาน</big></b></td>
		</tr>
		<tr>
			<td width="90%"><b>แผนกและหน่วยงาน</b></td>
			<td width="10%" align="center"><b>
					<center>จำนวน</center>
				</b></td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=director&amp;mod=&amp;title=ผู้บริหารสถานศึกษา#data"><b>ผู้บริหารสถานศึกษา</b></a></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=1&amp;mod=&amp;title=วิทยาลัยเทคนิคเชียงใหม่#data">วิทยาลัยเทคนิคเชียงใหม่</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=2&amp;mod=&amp;title=ฝ่ายวิชาการ#data">ฝ่ายวิชาการ</a></td>
			<td>
				<center>2</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=3&amp;mod=&amp;title=ฝ่ายยุทธศาสตร์และแผนงาน#data">ฝ่ายยุทธศาสตร์และแผนงาน</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=4&amp;mod=&amp;title=ฝ่ายบริหารทรัพยากร#data">ฝ่ายบริหารทรัพยากร</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=5&amp;mod=&amp;title=ฝ่ายพัฒนากิจการนักเรียน นักศึกษา#data">ฝ่ายพัฒนากิจการนักเรียน นักศึกษา</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=200&amp;mod=&amp;title=แผนกวิชาช่างยนต์#data">แผนกวิชาช่างยนต์</a></td>
			<td>
				<center>23</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=201&amp;mod=&amp;title=แผนกวิชาช่างอิเล็กทรอนิกส์#data">แผนกวิชาช่างอิเล็กทรอนิกส์</a></td>
			<td>
				<center>23</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=202&amp;mod=&amp;title=แผนกวิชาพื้นฐานและพลานามัย#data">แผนกวิชาพื้นฐานและพลานามัย</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=207&amp;mod=&amp;title=แผนกวิชาช่างกลโรงงาน#data">แผนกวิชาช่างกลโรงงาน</a></td>
			<td>
				<center>8</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=208&amp;mod=&amp;title=แผนกวิชาเมคคาทรอนิกส์#data">แผนกวิชาเมคคาทรอนิกส์</a></td>
			<td>
				<center>4</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=209&amp;mod=&amp;title=แผนกวิชาเทคโนโลยีสารสนเทศ#data">แผนกวิชาเทคโนโลยีสารสนเทศ</a></td>
			<td>
				<center>7</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=210&amp;mod=&amp;title=แผนกวิชาช่างเชื่อมโลหะ#data">แผนกวิชาช่างเชื่อมโลหะ</a></td>
			<td>
				<center>6</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=211&amp;mod=&amp;title=แผนกวิชาช่างไฟฟ้า#data">แผนกวิชาช่างไฟฟ้า</a></td>
			<td>
				<center>23</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=212&amp;mod=&amp;title=แผนกวิชาช่างก่อสร้าง#data">แผนกวิชาช่างก่อสร้าง</a></td>
			<td>
				<center>16</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=213&amp;mod=&amp;title=แผนกวิชาเทคนิคพื้นฐาน#data">แผนกวิชาเทคนิคพื้นฐาน</a></td>
			<td>
				<center>5</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=214&amp;mod=&amp;title=แผนกวิชาวิทยาศาสตร์#data">แผนกวิชาวิทยาศาสตร์</a></td>
			<td>
				<center>4</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=215&amp;mod=&amp;title=แผนกวิชาคณิตศาสตร์#data">แผนกวิชาคณิตศาสตร์</a></td>
			<td>
				<center>2</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=216&amp;mod=&amp;title=แผนกวิชาภาษาอังกฤษ#data">แผนกวิชาภาษาอังกฤษ</a></td>
			<td>
				<center>9</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=217&amp;mod=&amp;title=แผนกวิชาสังคมศึกษา#data">แผนกวิชาสังคมศึกษา</a></td>
			<td>
				<center>3</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=218&amp;mod=&amp;title=แผนกวิชาภาษาไทย#data">แผนกวิชาภาษาไทย</a></td>
			<td>
				<center>3</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=220&amp;mod=&amp;title=แผนกวิชาช่างสถาปัตยกรรม#data">แผนกวิชาช่างสถาปัตยกรรม</a></td>
			<td>
				<center>7</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=221&amp;mod=&amp;title=แผนกวิชาเทคนิคอุตสาหกรรม#data">แผนกวิชาเทคนิคอุตสาหกรรม</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=223&amp;mod=&amp;title=แผนกเทคนิคกายอุปกรณ์#data">แผนกเทคนิคกายอุปกรณ์</a></td>
			<td>
				<center>10</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=250&amp;mod=&amp;title=แผนกวิชาสามัญสัมพันธ์#data">แผนกวิชาสามัญสัมพันธ์</a></td>
			<td>
				<center>29</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=251&amp;mod=&amp;title=แผนกวิชาเทคโนโลยียานยนต์#data">แผนกวิชาเทคโนโลยียานยนต์</a></td>
			<td>
				<center>13</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=255&amp;mod=&amp;title=แผนกวิชาช่างเชื่อมโลหะ#data">แผนกวิชาช่างเชื่อมโลหะ</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=263&amp;mod=&amp;title=แผนกวิชาสามัญสัมพันธ์#data">แผนกวิชาสามัญสัมพันธ์</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=265&amp;mod=&amp;title=แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ#data">แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ</a></td>
			<td>
				<center>5</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=300&amp;mod=&amp;title=งานบริหารงานทั่วไป#data">งานบริหารงานทั่วไป</a></td>
			<td>
				<center>49</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=301&amp;mod=&amp;title=งานศูนย์ดิจิทัลและสื่อสารองค์กร#data">งานศูนย์ดิจิทัลและสื่อสารองค์กร</a></td>
			<td>
				<center>4</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=302&amp;mod=&amp;title=งานทะเบียน#data">งานทะเบียน</a></td>
			<td>
				<center>8</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=303&amp;mod=&amp;title=งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)#data">งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)</a></td>
			<td>
				<center>4</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=304&amp;mod=&amp;title=งานการเงิน#data">งานการเงิน</a></td>
			<td>
				<center>6</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=305&amp;mod=&amp;title=งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)#data">งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)</a></td>
			<td>
				<center>6</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=307&amp;mod=&amp;title=งานมาตราฐานและการประกันคุณภาพการศึกษา#data">งานมาตราฐานและการประกันคุณภาพการศึกษา</a></td>
			<td>
				<center>6</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=309&amp;mod=&amp;title=งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา#data">งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา</a></td>
			<td>
				<center>6</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=310&amp;mod=&amp;title=งานการบัญชี#data">งานการบัญชี</a></td>
			<td>
				<center>3</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=312&amp;mod=&amp;title=งานพัสดุ#data">งานพัสดุ</a></td>
			<td>
				<center>11</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=313&amp;mod=&amp;title=งานสวัสดิการนักเรียน นักศึกษา#data">งานสวัสดิการนักเรียน นักศึกษา</a></td>
			<td>
				<center>4</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=315&amp;mod=&amp;title=งานอาคารสถานที่#data">งานอาคารสถานที่</a></td>
			<td>
				<center>17</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=317&amp;mod=&amp;title=งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ#data">งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ</a></td>
			<td>
				<center>6</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=318&amp;mod=&amp;title=งานครูที่ปรึกษาและการแนะแนว#data">งานครูที่ปรึกษาและการแนะแนว</a></td>
			<td>
				<center>12</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=319&amp;mod=&amp;title=งานวัดผลและประเมินผล#data">งานวัดผลและประเมินผล</a></td>
			<td>
				<center>9</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=320&amp;mod=&amp;title=งานโครงการพิเศษและการบริการสังคม#data">งานโครงการพิเศษและการบริการสังคม</a></td>
			<td>
				<center>6</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=322&amp;mod=&amp;title=งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์#data">งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์</a></td>
			<td>
				<center>8</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=325&amp;mod=&amp;title=งานอาชีวศึกษาระบบทวิภาคี#data">งานอาชีวศึกษาระบบทวิภาคี</a></td>
			<td>
				<center>12</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=326&amp;mod=&amp;title=งานบริหารและพัฒนาทรัพยากรบุคคล#data">งานบริหารและพัฒนาทรัพยากรบุคคล</a></td>
			<td>
				<center>5</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=328&amp;mod=&amp;title=งานกิจกรรมนักเรียน นักศึกษา#data">งานกิจกรรมนักเรียน นักศึกษา</a></td>
			<td>
				<center>17</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=330&amp;mod=&amp;title=งานปกครองและความปลอดภัยนักเรียน นักศึกษา#data">งานปกครองและความปลอดภัยนักเรียน นักศึกษา</a></td>
			<td>
				<center>13</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=331&amp;mod=&amp;title=งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ#data">งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ</a></td>
			<td>
				<center>5</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=333&amp;mod=&amp;title=งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้#data">งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้</a></td>
			<td>
				<center>6</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=336&amp;mod=&amp;title=งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ#data">งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=338&amp;mod=&amp;title=งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่)#data">งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่)</a></td>
			<td>
				<center>2</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=339&amp;mod=&amp;title=งานพัสดุ (พนักงานขับรถยนต์)#data">งานพัสดุ (พนักงานขับรถยนต์)</a></td>
			<td>
				<center>2</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=341&amp;mod=&amp;title=งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่)#data">งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่)</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=343&amp;mod=&amp;title=งานกิจกรรมนักศึกษาวิชาทหาร#data">งานกิจกรรมนักศึกษาวิชาทหาร</a></td>
			<td>
				<center>2</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=344&amp;mod=&amp;title=งานบริหารงานทั่วไป (งานสารบรรณ)#data">งานบริหารงานทั่วไป (งานสารบรรณ)</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=345&amp;mod=&amp;title=งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์)#data">งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์)</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=401&amp;mod=&amp;title=ภาควิชาเทคโนโลยีสารสนเทศ#data">ภาควิชาเทคโนโลยีสารสนเทศ</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=402&amp;mod=&amp;title=ภาควิชาเทคโนโลยียานยนต์#data">ภาควิชาเทคโนโลยียานยนต์</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=403&amp;mod=&amp;title=งานการจัดการศึกษาระดับปริญญาตรี#data">งานการจัดการศึกษาระดับปริญญาตรี</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=404&amp;mod=&amp;title=งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา#data">งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา</a></td>
			<td>
				<center>7</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=502&amp;mod=&amp;title=ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี#data">ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี</a></td>
			<td>
				<center>18</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=906&amp;mod=&amp;title=งานบริหารงานทั่วไป#data">งานบริหารงานทั่วไป</a></td>
			<td>
				<center>3</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_dep_id=999&amp;mod=&amp;title=ผู้ดูแลระบบหลัก#data">ผู้ดูแลระบบหลัก</a></td>
			<td>
				<center>4</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
	</tbody>
</table>


<hr size="1">

<table align="center" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-hover" width="95%">
	<tbody>
		<tr>
			<td colspan="2"><b><big>จำแนกตามตำแหน่งหน้าที่</big><b></b></b></td>
		</tr>
		<tr>
			<td width="90%"><b>ตำแหน่งหน้าที่</b></td>
			<td width="10%" align="center"><b>
					<center>จำนวน <br>(ตำแหน่ง)</center>
				</b></td>

		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=1&amp;mod=&amp;title=ผู้อำนวยการ#data#data">ผู้อำนวยการ</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=2&amp;mod=&amp;title=รองผู้อำนวยการ#data#data">รองผู้อำนวยการ</a></td>
			<td>
				<center>4</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=30&amp;mod=&amp;title=รักษาการในตำแหน่งผู้อำนวยการ#data#data">รักษาการในตำแหน่งผู้อำนวยการ</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=5&amp;mod=&amp;title=หัวหน้าแผนก#data#data">หัวหน้าแผนก</a></td>
			<td>
				<center>13</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=7&amp;mod=&amp;title=ครูประจำ#data#data">ครูประจำ</a></td>
			<td>
				<center>104</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=9&amp;mod=&amp;title=ครูอัตราจ้าง#data#data">ครูอัตราจ้าง</a></td>
			<td>
				<center>43</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=13&amp;mod=&amp;title=พนักงานราชการ (ครู)#data#data">พนักงานราชการ (ครู)</a></td>
			<td>
				<center>23</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=15&amp;mod=&amp;title=ผู้ช่วยหัวหน้าแผนก#data#data">ผู้ช่วยหัวหน้าแผนก</a></td>
			<td>
				<center>14</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=18&amp;mod=&amp;title=เจ้าหน้าที่ห้องปฏิบัติการกลางวิทยาศาสตร์ เทคโนโลยี#data#data">เจ้าหน้าที่ห้องปฏิบัติการกลางวิทยาศาสตร์ เทคโนโลยี</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=22&amp;mod=&amp;title=ครูผู้ช่วย#data#data">ครูผู้ช่วย</a></td>
			<td>
				<center>24</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=23&amp;mod=&amp;title=นักศึกษาฝึกสอน#data#data">นักศึกษาฝึกสอน</a></td>
			<td>
				<center>2</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=26&amp;mod=&amp;title=พระสงฆ์ (พระอาจารย์)#data#data">พระสงฆ์ (พระอาจารย์)</a></td>
			<td>
				<center>5</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=6&amp;mod=&amp;title=หัวหน้างาน#data#data">หัวหน้างาน</a></td>
			<td>
				<center>25</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=8&amp;mod=&amp;title=ข้าราชการพลเรือน#data#data">ข้าราชการพลเรือน</a></td>
			<td>
				<center>2</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=11&amp;mod=&amp;title=ลูกจ้างอัตราจ้าง#data#data">ลูกจ้างอัตราจ้าง</a></td>
			<td>
				<center>8</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=12&amp;mod=&amp;title=เจ้าหน้าที่#data#data">เจ้าหน้าที่</a></td>
			<td>
				<center>149</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=14&amp;mod=&amp;title=ผู้ช่วยหัวหน้างาน#data#data">ผู้ช่วยหัวหน้างาน</a></td>
			<td>
				<center>63</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=21&amp;mod=&amp;title=พนักงานราชการ (บริหารทั่วไป)#data#data">พนักงานราชการ (บริหารทั่วไป)</a></td>
			<td>
				<center>7</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=28&amp;mod=&amp;title=นักศึกษาฝึกงาน#data#data">นักศึกษาฝึกงาน</a></td>
			<td>
				<center>2</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=36&amp;mod=&amp;title=ครูพิเศษ#data#data">ครูพิเศษ</a></td>
			<td>
				<center>1</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=24&amp;mod=&amp;title=หัวหน้าภาควิชา#data#data">หัวหน้าภาควิชา</a></td>
			<td>
				<center>2</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=32&amp;mod=&amp;title=บุคลากร/อาจารย์ผู้สอน#data#data">บุคลากร/อาจารย์ผู้สอน</a></td>
			<td>
				<center>18</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
		<tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
			<td>• <a href="?p=&amp;people_stagov_id=99&amp;mod=&amp;title=ผู้ดูแลระบบ#data#data">ผู้ดูแลระบบ</a></td>
			<td>
				<center>4</center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<hr size="1">
			</td>
		</tr>
	</tbody>
</table>



</td>
<td width="70%" valign="top">
	<a name="data"></a>
	<b><big>ข้อมูลบุคลากรทั้งหมด</big></b>
	<br><br>


	<br><br>
	<center><big><b>ผู้อำนวยการ</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">

		<tbody>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="files/50773_21051510104826.png" width="120" border="1"><br><b>นายวัชรพงศ์ ฝั้นติ๊บ </b><br>ผู้อำนวยการ วิทยาลัยเทคนิคเชียงใหม่ <br>ผู้บริหาร เชี่ยวชาญ<br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>รองผู้อำนวยการ</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_20051810103019.jpg" width="120" border="1"><br><b>นายชรันต์ยุทธ์ บุญยง </b><br>รองผู้อำนวยการ ฝ่ายบริหารทรัพยากร <br>ผู้บริหาร ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_25022219192006.jpeg" width="120" border="1"><br><b>นางศศิกาญจน์ เรือนศาสตร์ </b><br>รองผู้อำนวยการ ฝ่ายพัฒนากิจการนักเรียน นักศึกษา <br>ผู้บริหาร <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_25100913130256.png" width="120" border="1"><br><b>นางเสาวคนธ์ บุญญประภา </b><br>รองผู้อำนวยการ ฝ่ายยุทธศาสตร์และแผนงาน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_25100913130408.png" width="120" border="1"><br><b>นายสุจินต์ วังใหม่ </b><br>รองผู้อำนวยการ ฝ่ายวิชาการ <br><br><br></td>
			</tr>
			<tr valign="top"></tr>
		</tbody>
	</table><br><br>
	<center><big><b>หัวหน้าแผนก</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310100937.jpg" width="120" border="1"><br><b>นางสาวญาณี ทำบุญ </b><br>หัวหน้าแผนก แผนกวิชาช่างก่อสร้าง <br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152352.jpg" width="120" border="1"><br><b>นายพงษกร ศรีมณี </b><br>หัวหน้าแผนก แผนกวิชาช่างสถาปัตยกรรม <br>ครูประจำ แผนกวิชาช่างสถาปัตยกรรม <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417175035.jpg" width="120" border="1"><br><b>นายกรณ์ภณนนท์ พลรังสิวงศ์ </b><br>หัวหน้าแผนก แผนกวิชาสามัญสัมพันธ์ <br>หัวหน้างาน งานวัดผลและประเมินผล <br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>รักษาการในตำแหน่งผู้อำนวยการ ฝ่ายวิชาการ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091413134248.jpg" width="120" border="1"><br><b>นายสมนึก มายัง </b><br>หัวหน้าแผนก แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030991843.jpg" width="120" border="1"><br><b>นายจตุรงค์ คำกันทา </b><br>หัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานโครงการพิเศษและการบริการสังคม <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19092516161107.jpg" width="120" border="1"><br><b>นายดนัย ชาวคำเขต </b><br>หัวหน้าแผนก แผนกวิชาช่างยนต์ <br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/11059_25031712123606.jpg" width="120" border="1"><br><b>นายวัชระ พงษ์รอด </b><br>หัวหน้าแผนก แผนกวิชาเทคนิคพื้นฐาน <br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/357110015077313112816163318_1.jpg" width="120" border="1"><br><b>นายพสิษฐ์ กรวราสวัสดิ์ </b><br>หัวหน้าแผนก แผนกวิชาเมคคาทรอนิกส์ <br>ครูประจำ แผนกวิชาเมคคาทรอนิกส์ <br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครู ชำนาญการ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/21141_24012610102421.jpg" width="120" border="1"><br><b>นายสุพจน์ สุดสวาท </b><br>หัวหน้าแผนก แผนกวิชาช่างกลโรงงาน <br>หัวหน้าแผนก แผนกเทคนิคกายอุปกรณ์ <br>หัวหน้างาน งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่) <br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311115726.jpg" width="120" border="1"><br><b>นายราชันย์ พรมแก้วงาม </b><br>หัวหน้าแผนก แผนกวิชาช่างเชื่อมโลหะ <br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>เจ้าหน้าที่ งานพัสดุ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://krukrai.cmtc.ac.th" target="_blank"><img src="files/80405_24072511110625.jpeg" width="120" border="1"></a><br><b>นายฐาปนันท์ ปัญญามี </b><br>หัวหน้าแผนก แผนกวิชาเทคโนโลยีสารสนเทศ <br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>ผู้ช่วยหัวหน้างาน งานบริหารและพัฒนาทรัพยากรบุคคล <br>หัวหน้าภาควิชา ภาควิชาเทคโนโลยีสารสนเทศ <br>ครู <br>โฮมเพจ : <a href="http://krukrai.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/19651_2410170995651.jpg" width="120" border="1"><br><b>นางสาวรัชดา ทิศพ่วน </b><br>หัวหน้าแผนก แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
			</tr>
			<tr valign="top"></tr>
		</tbody>
	</table><br><br>
	<center><big><b>หัวหน้างาน</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417174939.jpg" width="120" border="1"><br><b>นายสาคร ปัญญาจักร์ </b><br>หัวหน้างาน งานอาคารสถานที่ <br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/357110015077312112310103936_1.jpg" width="120" border="1"><br><b>นายมานพ แก้วมณีกรณ์ </b><br>หัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างกลโรงงาน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="www.hongkum@cmtc.ac.th" target="_blank"><img src="files/00321_25050815150754.jpg" width="120" border="1"></a><br><b>นายหงษ์คำ อินใจ </b><br>หัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="www.hongkum@cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/08592_24051710104313.jpg" width="120" border="1"><br><b>นายขนิษฐ สิทธิยศ </b><br>หัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101508.jpg" width="120" border="1"><br><b>นางภุมรี กำมะหยี่ </b><br>หัวหน้างาน งานบริหารและพัฒนาทรัพยากรบุคคล <br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://chaiwat.cmtc.ac.th" target="_blank"><img src="files/55293_16072813134037.jpg" width="120" border="1"></a><br><b>นายชัยวัฒน์ พอพิน </b><br>หัวหน้างาน งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="http://chaiwat.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="https://www.youtube.com/channel/UCICtLJrbFzbWW8d5MgN-WLw?view_as=subscriber" target="_blank"><img src="files/38318_21070716163140.jpeg" width="120" border="1"></a><br><b>นายวชิรวิชญ์ สุภา </b><br>หัวหน้างาน งานทะเบียน <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการ<br>โฮมเพจ : <a href="https://www.youtube.com/channel/UCICtLJrbFzbWW8d5MgN-WLw?view_as=subscriber" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091414140744.jpg" width="120" border="1"><br><b>นายประสงค์ วงศ์แก้ว </b><br>หัวหน้างาน งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091414140426.jpg" width="120" border="1"><br><b>ว่าที่ร้อยตรีนิพล ลีพัฒนากุล </b><br>หัวหน้างาน งานกิจกรรมนักศึกษาวิชาทหาร <br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/78943_2310120993719.jpg" width="120" border="1"><br><b>นายสิรพงศ์ ภาณุพงศ์กวินภพ </b><br>หัวหน้างาน งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่) <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/21501_24012411114004.png" width="120" border="1"><br><b>นางสาวมนัสติยา เจ้าดูรี </b><br>หัวหน้างาน งานการเงิน <br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://kruanuchat.cmtc.ac.th" target="_blank"><img src="files/50773_19080913134806.jpg" width="120" border="1"></a><br><b>นายอนุชาติ รังสิยานนท์ </b><br>หัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคโนโลยีสารสนเทศ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br>ครู ชำนาญการ<br>โฮมเพจ : <a href="http://kruanuchat.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/01438_25060514140214.jpg" width="120" border="1"><br><b>นางมัณฑนา สุภาชาติ </b><br>หัวหน้างาน งานการบัญชี <br>ข้าราชการพลเรือน งานการบัญชี <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_23011013135234.jpg" width="120" border="1"><br><b>นายจักรวี สมศักดิ์ตระกูล </b><br>หัวหน้างาน งานพัสดุ <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00281_24103115155314.jpg" width="120" border="1"><br><b>ว่าที่ร.ต.อมรินทร์ เลขะวณิชย์ </b><br>หัวหน้างาน งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_26012811115512.jpg" width="120" border="1"><br><b>นายอิทธิเชษฐ์ แท่นธัญลักษณ์ </b><br>หัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาช่างยนต์ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130118.jpg" width="120" border="1"><br><b>นายอุกฤษฎ์ สิงห์แก้ว </b><br>หัวหน้างาน งานสวัสดิการนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311114658.jpg" width="120" border="1"><br><b>นายสิราม ถามดี </b><br>หัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ครูประจำ แผนกวิชาช่างยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_21110911113005.jpg" width="120" border="1"><br><b>นายนาวี ศรีอ้าย </b><br>หัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/32280_22091912125120.jpg" width="120" border="1"><br><b>นางสาววรรณา สาริขิต </b><br>หัวหน้างาน งานบริหารงานทั่วไป <br>ครูประจำ แผนกวิชาคณิตศาสตร์ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการเงิน <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://notify-bot.line.me/th/" target="_blank"><img src="files/05018_22072116162044.jpg" width="120" border="1"></a><br><b>อดิเรก นวลศรี </b><br>หัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br>โฮมเพจ : <a href="http://notify-bot.line.me/th/" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/63312_23011012120904.jpeg" width="120" border="1"><br><b>นางสาวศศิมา เรืองสมบัติ </b><br>หัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22243_26012811115645.png" width="120" border="1"><br><b>นายโชตินันทร์ ปฏิการ </b><br>หัวหน้างาน งานมาตราฐานและการประกันคุณภาพการศึกษา <br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>เจ้าหน้าที่ห้องปฏิบัติการกลางวิทยาศาสตร์ เทคโนโลยี แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>ครูประจำ</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103710.jpg" width="120" border="1"><br><b>นายนิมิต รัศมี </b><br>ครูประจำ แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134250.jpg" width="120" border="1"><br><b>นายธวัช นนทธรรม </b><br>ครูประจำ แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310102938.jpg" width="120" border="1"><br><b>นายธวัชชัย คุณสารวนิช </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานสวัสดิการนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ผู้ช่วยหัวหน้างาน งานมาตราฐานและการประกันคุณภาพการศึกษา <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151809.jpg" width="120" border="1"><br><b>นายสาทร พึ่งพุ่มแก้ว </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417173057.jpg" width="120" border="1"><br><b>นายอภิชาติ แก้วประดิษฐ์ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151921.jpg" width="120" border="1"><br><b>นางธมลวรรณ ปรมาธิกุล </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091418180631.jpg" width="120" border="1"><br><b>นายทวีศักดิ์ แก้วประดับ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101048.jpg" width="120" border="1"><br><b>นางสาวพิมพ์ชนก มรุธานินทร์ </b><br>ครูประจำ แผนกวิชาสังคมศึกษา <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101008.jpg" width="120" border="1"><br><b>นางสาวพัชรินทร์ ปัญญา </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103425.jpg" width="120" border="1"><br><b>นายนพดล ภูเขา </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134703.jpg" width="120" border="1"><br><b>นายพิราม ภารังกูล </b><br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310105100.jpg" width="120" border="1"><br><b>นายอินชัย จันทะกี </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการพิเศษ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151950.jpg" width="120" border="1"><br><b>นางรัตน์ติยา ศรีมณี </b><br>ครูประจำ แผนกวิชาช่างสถาปัตยกรรม <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103309.jpg" width="120" border="1"><br><b>นายนพดล กำมะหยี่ </b><br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักศึกษาวิชาทหาร <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างเชื่อมโลหะ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310104743.jpg" width="120" border="1"><br><b>นายสุทธิรักษ์ โกช่วย </b><br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091411110000.jpg" width="120" border="1"><br><b>นายจิรวัฒน์ หล่อสุวรรณ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21061514140324.jpg" width="120" border="1"><br><b>นายอภิสิทธิ์ แสนยากุล </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417175250.jpg" width="120" border="1"><br><b>นายนิติกร อ่อนนาง </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101121.jpg" width="120" border="1"><br><b>นางกนกพร จันทรัตน์ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915151454.jpg" width="120" border="1"><br><b>นายเอกสิษฐ์ นันติ </b><br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ผู้ช่วยหัวหน้าแผนก แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134409.jpg" width="120" border="1"><br><b>นายนาวิน จักขุเรือง </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080912121500.jpg" width="120" border="1"><br><b>นายศรพงษ์ เรือนสุข </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152117.jpg" width="120" border="1"><br><b>นายชีวิน สุพรรณพยัค </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152541.jpg" width="120" border="1"><br><b>นายสืบสกุล วรวัฒนเมธี </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครู ชำนาญการ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101854.jpg" width="120" border="1"><br><b>นางสาวปรียานุช คำเย็น </b><br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21061513135714.jpg" width="120" border="1"><br><b>นายประภัทร์ ขัติยะ </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311115620.jpg" width="120" border="1"><br><b>นายธฤต ไชยมงคล </b><br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://kruwittaya.cmtc.ac.th" target="_blank"><img src="files/55293_16072813134136.jpg" width="120" border="1"></a><br><b>นายวิทยา สุภาอินทร์ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู <br>โฮมเพจ : <a href="http://kruwittaya.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103016.jpg" width="120" border="1"><br><b>นายธีระวัฒน์ จันทรัตน์ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/64454_2204280992642.jpg" width="120" border="1"><br><b>นายสุรเดช ศิริ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21112913131737.jpg" width="120" border="1"><br><b>นายรณกร วิกรรัตน์ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091410103742.jpg" width="120" border="1"><br><b>นางสาวศิริมนัส เดชเจริญ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080911115604.jpg" width="120" border="1"><br><b>นางสาวสุณิสา ทวีสุข </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานสวัสดิการนักเรียน นักศึกษา <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072717172756.jpg" width="120" border="1"><br><b>นายสุภชาติ จงไกรจักร์ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างก่อสร้าง <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="https://kridsana.cmtc.ac.th" target="_blank"><img src="files/55293_16080310102245.jpg" width="120" border="1"></a><br><b>นายกฤษณะ มีสุข </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="https://kridsana.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080913131848.jpg" width="120" border="1"><br><b>นางสาวสิริเรศ จักร์แก้ว </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_21110911110514.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.สุรชัย คำก้อน </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้างาน งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091410102431.jpg" width="120" border="1"><br><b>นายนพดล วังมณี </b><br>ครูประจำ แผนกวิชาเทคนิคอุตสาหกรรม <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคนิคพื้นฐาน <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคนิคอุตสาหกรรม <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080912124108.jpg" width="120" border="1"><br><b>นายจำลอง สิงห์คำ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/35711001507731211230993438_1.png" width="120" border="1"><br><b>นายดวงจันทร์ วงศ์ษา </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_22062313133746.jpg" width="120" border="1"><br><b>นายวทัญญู ห้าวหาญ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080913133723.jpg" width="120" border="1"><br><b>นายวัชเรนท์ ตัวสะอาด </b><br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915155554.jpg" width="120" border="1"><br><b>น.ส.ขวัญฤทัย เจริญปิยะวิวัฒน์ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานพัสดุ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915153834.jpg" width="120" border="1"><br><b>นายขจรศักดิ์ ศิริสุภา </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311114450.jpg" width="120" border="1"><br><b>นายธณิตพงษ์ สุภาชาติ </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>หัวหน้าภาควิชา ภาควิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130402.jpg" width="120" border="1"><br><b>นายคณิน ปงจันตา </b><br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสุรเชษฐ์ สุวรรณศิลป์ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ผู้ช่วยหัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/74547_23090416160711.jpg" width="120" border="1"><br><b>นางสาวเกศรินทร์ รู้ฉลาด </b><br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ครู <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/71575_22083110100950.jpg" width="120" border="1"><br><b>นางสาวพัทธ์ธีรา เพ็ชรพิจิตร </b><br>ครูประจำ แผนกวิชาสังคมศึกษา <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการบัญชี <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววาทินี เชิดชูสกุล </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/47745_2211100994211.jpg" width="120" border="1"><br><b>นางสาวชนนิกานต์ จริตงาม </b><br>ครูประจำ แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นาย ธนเศรษฐ์ ชมก้อน </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการ<br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/23872_23072511110148.jpg" width="120" border="1"><br><b>นายธนรัฐ ทัศเกตุ </b><br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/12337_24100310102658.jpg" width="120" border="1"><br><b>นายธกฤต ยอดสอน </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครูผู้ช่วย <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/77055_24010510102930.jpg" width="120" border="1"><br><b>นายวัชระ พรมกามินทร์ </b><br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50403_25021411113113.jpg" width="120" border="1"><br><b>นายธวัชชัย ปินใจยศ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br><br><br></td>
			</tr>
			<tr valign="top"></tr>
		</tbody>
	</table><br><br>
	<center><big><b>ข้าราชการพลเรือน</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080916162548.jpg" width="120" border="1"><br><b>นายชาญชัย ใบโพธิ์ </b><br>ข้าราชการพลเรือน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>ครูอัตราจ้าง</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ธนพงษ์ หาญศิริวัฒนกิจ </b><br>ครูอัตราจ้าง แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132655.jpg" width="120" border="1"><br><b>นพ.พิรุณ คำอุ่น </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132814.jpg" width="120" border="1"><br><b>นางสาวนันทนา กลัดเกษา </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132709.jpg" width="120" border="1"><br><b>นพ.วิรัช พันธ์พานิช </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132640.jpg" width="120" border="1"><br><b>รศ.นพ.วัชระ รุจิเวชพงศธร </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132907.jpg" width="120" border="1"><br><b>นายณภาคม ศรีคช </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132932.jpg" width="120" border="1"><br><b>นายสมนึก พิลา </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133003.jpg" width="120" border="1"><br><b>นายเสมอขวัญ ตันติกุล </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132839.jpg" width="120" border="1"><br><b>นายสมพงษ์ บุญแลน </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132854.jpg" width="120" border="1"><br><b>ดร.นำพร ปัญโญใหญ่ </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133016.jpg" width="120" border="1"><br><b>นายภานุพงศ์ จุมปา </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132951.jpg" width="120" border="1"><br><b>นางสาวเกยูร จิตตางกูร </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132941.jpg" width="120" border="1"><br><b>นางศรัญญา กิจเจริญสิน </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132725.jpg" width="120" border="1"><br><b>ร.อ.นพ.มล.พุฒิพงศ์ เทวกุล </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132746.jpg" width="120" border="1"><br><b>นพ.สุวัฒน์ มหัตนิรันดร์กุล </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917171029.jpg" width="120" border="1"><br><b>นายโกศล อินทรประสิทธิ์ </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080916165550.jpg" width="120" border="1"><br><b>นางสาวสายฝน สฤษดิกุล </b><br>ครูอัตราจ้าง แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917173653.jpg" width="120" border="1"><br><b>นายพิวัธกาญจน์ เหมืองคำ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313131009.jpg" width="120" border="1"><br><b>นายพิพัฒน์ ชุมแสง </b><br>ครูอัตราจ้าง แผนกวิชาเมคคาทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_23011810104133.jpg" width="120" border="1"><br><b>นายพงษ์สิทธิ์ วังใจชิด </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายอนุชิต สร้างสกุล </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสมศักดิ์ แข็งแรง </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายไกรลาศ ดอนชัย </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/08754_25101612122216.jpg" width="120" border="1"><br><b>น.ส.ฐิติพร ประกิจ </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายธนภัทรพล แทนรอด </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจิรายุ ดำหริ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจักรพงศ์ จูหมื่นไวย์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐนนท์ สมภารจันทร์ </b><br>ครูอัตราจ้าง แผนกวิชาเทคนิคพื้นฐาน <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/84361_26040813130222.jpg" width="120" border="1"><br><b>นายบวร วรรณเรือน </b><br>ครูอัตราจ้าง แผนกวิชาช่างกลโรงงาน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/60025_25061611111037.jfif" width="120" border="1"><br><b>นางสาวณัฏฐณิชา พันธุสา </b><br>ครูอัตราจ้าง แผนกวิชาช่างกลโรงงาน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/83285_23061722225940.jpg" width="120" border="1"><br><b>นางสาวกนกภรรณ พันธรัตน์ </b><br>ครูอัตราจ้าง แผนกวิชาเมคคาทรอนิกส์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายพชรกฤต ป้วนป้อม </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญารัตน์ คำสอน </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_22062314143749.jpg" width="120" border="1"><br><b>นายอภิษฎา คำลือ </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวลินดา สีแสง </b><br>ครูอัตราจ้าง แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวอมรรัตน์ ไคร้แค </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเปรมศักดิ์ ดำรักษ์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22700_25100911113718.jpg" width="120" border="1"><br><b>นายพงศกร ลาปวงคำ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/27669_25060123232618.jpeg" width="120" border="1"><br><b>นายสมัชญ์ สุริยะชัยพันธ์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเจษฎา บุลกุล </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/43960_25101610105659.jpg" width="120" border="1"><br><b>นางสาวปนัสยา อินเทพ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวพัชราภรณ์ ปิ่นชุม </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายปรัชญา ธิมา </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>ลูกจ้างอัตราจ้าง</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111609.jpg" width="120" border="1"><br><b>นางจันทร์ทิพย์ ฉันทะ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102124.jpg" width="120" border="1"><br><b>นางธนัชพร ทราบเขียว </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104241.jpg" width="120" border="1"><br><b>นางราตรี โกช่วย </b><br>ลูกจ้างอัตราจ้าง งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>เจ้าหน้าที่ งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111805.jpg" width="120" border="1"><br><b>นายธนวัฒน์ บานชื่น </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111547.jpg" width="120" border="1"><br><b>นายประสิทธิ์ ฉันทะ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010101943.jpg" width="120" border="1"><br><b>นางศรีสมร พนาบุญเจริญ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010101701.jpg" width="120" border="1"><br><b>นางอ้อยใจ ศรีดี </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายคมกริช จันทะรัตน์ </b><br>ลูกจ้างอัตราจ้าง งานพัสดุ (พนักงานขับรถยนต์) <br><br><br></td>
			</tr>
			<tr valign="top"></tr>
		</tbody>
	</table><br><br>
	<center><big><b>เจ้าหน้าที่</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011115453.jpg" width="120" border="1"><br><b>นายพิทักษ์ แก้วสมุทร์ </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://cmtc.ac.th" target="_blank"><img src="files/59895_26031715150421.jpg" width="120" border="1"></a><br><b>นายเอกพงศ์ ศักดิ์โสภิณ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์) <br>โฮมเพจ : <a href="http://cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010105844.jpg" width="120" border="1"><br><b>นายบุญรัตน์ เตวิยะ </b><br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>เจ้าหน้าที่ งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150419.jpg" width="120" border="1"><br><b>นายชุติชัย สมวงษา </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112232.jpg" width="120" border="1"><br><b>นางสาวยศยา ศรีคำดี </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102037.jpg" width="120" border="1"><br><b>นางสาวศิริวิมล คำนันยา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารงานทั่วไป (งานสารบรรณ) <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010105354.jpg" width="120" border="1"><br><b>นางอภิญญา มีสุข </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20082110102224.jpg" width="120" border="1"><br><b>นางสาวพิชยา ดื่มพุดซา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112644.jpg" width="120" border="1"><br><b>นางสาวกรรณิการ์ ทอนทะษร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112718.jpg" width="120" border="1"><br><b>นางวิชชุตา สุพรรณพยัค </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102241.jpg" width="120" border="1"><br><b>นางสาวเสาวลักษณ์ ใคร้โท้ง </b><br>เจ้าหน้าที่ งานการเงิน <br>พนักงานราชการ (บริหารทั่วไป) งานการเงิน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992436.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.กิตติศักดิ์ ฝั้นปันวงศ์ </b><br>เจ้าหน้าที่ งานการจัดการศึกษาระดับปริญญาตรี <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010103235.jpg" width="120" border="1"><br><b>นางสาวสิริมาศ จันต๊ะพิงค์ </b><br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104727.jpg" width="120" border="1"><br><b>นายวชิณุพงศ์ ทองคำ </b><br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111311.jpg" width="120" border="1"><br><b>นายทวีรักษ์ จันที </b><br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00993_24121715155130.jpg" width="120" border="1"><br><b>นายไพโรจน์ รัตต๊ะใส </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992409.jpg" width="120" border="1"><br><b>นายสุนทร ศรีวิกะ </b><br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่) <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/70587_2502050994227.jpg" width="120" border="1"><br><b>นางสาวอัลิปรียา ปัญญาดี </b><br>เจ้าหน้าที่ งานทะเบียน <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132133.jpg" width="120" border="1"><br><b>นางสาวอรญาพัชร์ ภัทรวงศ์เสถียร </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_2106100884044.jpg" width="120" border="1"><br><b>นายพิษณุ เนตรผาบ </b><br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132500.jpg" width="120" border="1"><br><b>นางปวีณา พรมแก้วงาม </b><br>เจ้าหน้าที่ งานสวัสดิการนักเรียน นักศึกษา <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ว่าที่ ร.ต. วรเชษฐ์ อภิชัย </b><br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญารัตน์ สุปินะ </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายแผนงาน และความร่วมมือ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุมิตรา แซ่เฒ่า </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>รัชดา ษมาจิตราษฎร </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/67830_25061215151208.jpg" width="120" border="1"><br><b>นางสาว ปวีณ์ธิดา เจริญภักดี </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวจริยา มั่นเกษวิทย์ </b><br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>น.ส. วิชุภัสณ์ ยานะ </b><br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00724_24071210103612.png" width="120" border="1"><br><b>นางสาวศุลีพร ศักดิ์เสรีชน </b><br>เจ้าหน้าที่ งานพัสดุ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววราภรณ์ ทนันชัย </b><br>เจ้าหน้าที่ งานการบัญชี <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววรัญญา หน่อขัต </b><br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญลักษณ์ ดวงชุ่ม </b><br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุชิราภรณ์ หน่อตง </b><br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายมนัสพล คำยันต์ </b><br>เจ้าหน้าที่ งานพัสดุ (พนักงานขับรถยนต์) <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวศิริพร กระแสทองดี </b><br>เจ้าหน้าที่ งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวลออรัตน์ กาหล้า </b><br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกนิษฐา กองพรม </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายนรินทร์ ใจขัติ </b><br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธิดารัตน์ ดวงนุรัตน์ </b><br>เจ้าหน้าที่ งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกาญจนา มารยาทอ่อน </b><br>เจ้าหน้าที่ งานพัสดุ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐกานต์ อินติ </b><br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22233_24071210101134.png" width="120" border="1"><br><b>งานพัสดุ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเทคโนโลยีสารสนเทศ วิชาเทคโนโลยีสารสนเทศ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายพัฒนากิจการนักเรียน นักศึกษา พัฒนากิจการนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/11111_23101217175946.jpg" width="120" border="1"><br><b>แผนกวิชาช่างยนต์ วิชาช่างยนต์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ผู้อำนวยการ วิทยาลัยเทคนิคเชียงใหม่ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายบริหารทรัพยากร บริหารทรัพยากร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเทคนิคอุตสาหกรรม วิชาเทคนิคอุตสาหกรรม </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างก่อสร้าง วิชาช่างก่อสร้าง </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเมคคาทรอนิกส์ วิชาเมคคาทรอนิกส์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างอิเล็กทรอนิกส์ วิชาช่างอิเล็กทรอนิกส์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างไฟฟ้า วิชาช่างไฟฟ้า </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานบริหารงานทั่วไป บริหารงานทั่วไป </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างสถาปัตยกรรม วิชาช่างสถาปัตยกรรม </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานศูนย์ข้อมูลสารสนเทศ ศูนย์ข้อมูลสารสนเทศ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานการเงิน การเงิน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวิทยบริการและห้องสมุด วิทยบริการและห้องสมุด </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานประกันคุณภาพและมาตรฐานการศึกษา ประกันคุณภาพและมาตรฐานการศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานประชาสัมพันธ์ ประชาสัมพันธ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานครูที่ปรึกษา ครูที่ปรึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานการบัญชี การบัญชี </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานสวัสดิการนักเรียน นักศึกษา สวัสดิการนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานอาคารสถานที่ อาคารสถานที่ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานส่งเสริมผลิตผล การค้าและประกอบธุรกิจ ส่งเสริมผลิตผล การค้าและประกอบธุรกิจ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานแนะแนวอาชีพและการจัดหางาน แนะแนวอาชีพและการจัดหางาน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวัดผลและประเมินผล วัดผลและประเมินผล </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22240_24073118182223.png" width="120" border="1"><br><b>งานโครงการพิเศษและการบริการชุมชน โครงการพิเศษและการบริการชุมชน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวิจัย พัฒนา นวัตกรรม และสิ่งประดิษฐ์ วิจัย พัฒนา นวัตกรรม และสิ่งประดิษฐ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานอาชีวศึกษาระบบทวิภาคี อาชีวศึกษาระบบทวิภาคี </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานบุคลากร บุคลากร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานกิจกรรมนักเรียน นักศึกษา กิจกรรมนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานปกครอง ปกครอง </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานสื่อการเรียนการสอน สื่อการเรียนการสอน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานพัฒนาหลักสูตรการเรียนการสอน พัฒนาหลักสูตรการเรียนการสอน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานความร่วมมือ ความร่วมมือ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายวิชาการ วิชาการ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างเชื่อมโลหะ วิชาช่างเชื่อมโลหะ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างกลโรงงาน วิชาช่างกลโรงงาน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกเทคนิคกายอุปกรณ์ เทคนิคกายอุปกรณ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาสามัญสัมพันธ์ วิชาสามัญสัมพันธ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานทะเบียน ทะเบียน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวางแผน และงบประมาณ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววราลักษณ์ แก้วนิล </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br><br><br></td>
			</tr>
			<tr valign="top"></tr>
		</tbody>
	</table><br><br>
	<center><big><b>พนักงานราชการ (ครู)</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150316.jpg" width="120" border="1"><br><b>นายสุรพงศ์ วัฒนกีบุตร </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992034.jpg" width="120" border="1"><br><b>นางสาวสุพรรษา เสมอเชื้อ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ผู้ช่วยหัวหน้างาน งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992549.jpg" width="120" border="1"><br><b>นายวรุพงษ์ แก้วเมืองชัย </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://itdev.cmtc.ac.th/kruwaraporn/" target="_blank"><img src="files/50773_2008210994906.jpg" width="120" border="1"></a><br><b>นางสาววราภรณ์ แผ่นฟ้า </b><br>พนักงานราชการ (ครู) แผนกวิชาเทคโนโลยีสารสนเทศ <br>โฮมเพจ : <a href="http://itdev.cmtc.ac.th/kruwaraporn/" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010103304.jpg" width="120" border="1"><br><b>นายทศพล ทิพย์วงค์ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011113244.jpg" width="120" border="1"><br><b>นายอานนท์ ยงยศ </b><br>พนักงานราชการ (ครู) แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150350.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.ศุภกร ว่องธนาการ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011110646.jpg" width="120" border="1"><br><b>นายอาทิตย์ ศรีสุวรรณ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011113118.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.ประพันธ์ นันตัง </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130547.jpg" width="120" border="1"><br><b>นายอภินันท์ ปันบัว </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011115320.jpg" width="120" border="1"><br><b>นางสาวจันทร์จิรา กันทา </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างสถาปัตยกรรม <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นาย วรวัฒน์ พิมสาร </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/25376_24071514140544.jpg" width="120" border="1"><br><b>นายฤทธิชัย ดอกบัว </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างกลโรงงาน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/17110_26010714142101.jpg" width="120" border="1"><br><b>นายวิเชียร คำปาต๋า </b><br>พนักงานราชการ (ครู) แผนกวิชาเทคโนโลยีสารสนเทศ <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>ผู้ช่วยหัวหน้างาน</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104608.jpg" width="120" border="1"><br><b>นางทองใบ คล้ายจินดา </b><br>ผู้ช่วยหัวหน้างาน งานบริหารงานทั่วไป <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/35741_22072217174206.jpg" width="120" border="1"><br><b>วรภาส แซ่เอียบ </b><br>ผู้ช่วยหัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ครูผู้ช่วย แผนกวิชาสังคมศึกษา <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/85085_22090114144906.jpg" width="120" border="1"><br><b>ปรวรรณ ทองหนูนุ้ย </b><br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38460_23110910105559.jpg" width="120" border="1"><br><b>นายพิพัฒน์ วงค์จักร์ </b><br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ครูผู้ช่วย แผนกวิชาช่างไฟฟ้า <br><br><br></td>
			</tr>
			<tr valign="top"></tr>
		</tbody>
	</table><br><br>
	<center><big><b>ผู้ช่วยหัวหน้าแผนก</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายทัศนัย สุวรรณชาตรี </b><br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเมคคาทรอนิกส์ <br>ครูผู้ช่วย แผนกวิชาเมคคาทรอนิกส์ <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>พนักงานราชการ (บริหารทั่วไป)</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>น.ส.ปภัสนันท์ สุริยะ </b><br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวญาณิศา อ่อนนุ่ม </b><br>พนักงานราชการ (บริหารทั่วไป) งานพัสดุ <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>ครูผู้ช่วย</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/46193_22091912124802.jpeg" width="120" border="1"><br><b>เอกสิริ แก่นศักดิ์ศิริ </b><br>ครูผู้ช่วย แผนกวิชาคณิตศาสตร์ <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/49108_24120117171451.jpg" width="120" border="1"><br><b>นางสาวรักษรินทร์ ศรีวรรณ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br>ครูผู้ช่วย <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/20373_25112010103425.jpg" width="120" border="1"><br><b>นางสาวนฐมนพรรณ สุวรรณชาตรี </b><br>ครูผู้ช่วย แผนกวิชาเทคโนโลยีสารสนเทศ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายภัทรชัย เบ็ญเจิด </b><br>ครูผู้ช่วย แผนกวิชาช่างไฟฟ้า <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/18443_25032812122707.jpg" width="120" border="1"><br><b>นางสาวเขมจิรา บุญสุข </b><br>ครูผู้ช่วย แผนกวิชาช่างกลโรงงาน <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวศรุตา ตรังค์เอื้อสันติ </b><br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุมิตรา เพ็ชรชะนะ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/54342_2602270990520.jpg" width="120" border="1"><br><b>นางสาวศิริลักษณ์ นาคแก้ว </b><br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวนวพรรษ บุญประสพ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/67078_25020514141102.png" width="120" border="1"><br><b>นางสาวรตา คุณทาบุตร </b><br>ครูผู้ช่วย แผนกวิชาพื้นฐานและพลานามัย <br>ครูผู้ช่วย <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายนัทธพงศ์ ฝั้นตุ่น </b><br>ครูผู้ช่วย แผนกวิชาช่างยนต์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/85678_2602020885104.jpg" width="120" border="1"><br><b>นางสาวอินทิรา อิ่มสว่าง </b><br>ครูผู้ช่วย แผนกวิชาช่างก่อสร้าง <br>ครูผู้ช่วย <br><br><br></td>
			</tr>
			<tr valign="top"></tr>
		</tbody>
	</table><br><br>
	<center><big><b>นักศึกษาฝึกสอน</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายกฤชอมร คำภีระ </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสุรสิทธิ์ เหล็กยอง </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>พระสงฆ์ (พระอาจารย์)</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133138.jpg" width="120" border="1"><br><b>prasoparatanawan saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133116.jpg" width="120" border="1"><br><b>Prasrisawan Saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133127.jpg" width="120" border="1"><br><b>prasiam saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133150.jpg" width="120" border="1"><br><b>praarnont saman (พระ) </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917174107.jpg" width="120" border="1"><br><b>พระวัชระ อติภทฺโท </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>นักศึกษาฝึกงาน</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐพงศ์ ธิมา </b><br>นักศึกษาฝึกงาน แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจิรัฎฐ์ รังรองธานินทร์ </b><br>นักศึกษาฝึกงาน แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>บุคลากร/อาจารย์ผู้สอน</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103457.jpg" width="120" border="1"><br><b>นายนรินทร์ ศรีธิการ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101818.jpg" width="120" border="1"><br><b>นางสาวชมนาด พรมมิจิตร </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101659.jpg" width="120" border="1"><br><b>นางสาวขวัญดารินทร์ จิตหาญ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992239.jpg" width="120" border="1"><br><b>นายเกรียงไกร อิ่นคำ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
			</tr>
			<tr valign="top">
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132846.jpg" width="120" border="1"><br><b>นางสาวณัฐนรี วงศ์ธิมา </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
			</tr>
		</tbody>
	</table><br><br>
	<center><big><b>ครูพิเศษ</b></big>
		<hr size="1">
	</center><br><br>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
		<tbody>
			<tr>
				<td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเจตตริน ละออง </b><br>ครูพิเศษ งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ <br>ครู <br><br><br>
				</td>
			</tr>
		</tbody>
	</table>


</td>
</tr>
</tbody>
<?php include 'footer.php'; ?> <!-- เรียกใช้ ท้ายเว็บ-->
</body>

</html>