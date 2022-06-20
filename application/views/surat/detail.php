
<!DOCTYPE html>
<html lang="id" dir="ltr">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"  />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="shortcut icon" href="https://persuratan.kemdikbud.go.id/application/assets/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://persuratan.kemdikbud.go.id/application/assets/css/style.css" type="text/css" />
	<link rel="stylesheet" href="https://persuratan.kemdikbud.go.id/application/assets/bootstrap/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="https://persuratan.kemdikbud.go.id/application/assets/css/login.css" type="text/css" />
    <script src="https://persuratan.kemdikbud.go.id/application/assets/js/jquery/jquery-1.11.1.min.js"></script> 
    <script src="https://persuratan.kemdikbud.go.id/application/assets/js/main.js"></script> 
    <title>Sistem Persuratan Univ Pelita Bangsa - Surat Keluar </title>
</head>

<body id="body" onload="document.getElementById('txtUserID').focus()">
	<div class="container">
			<script src="https://persuratan.kemdikbud.go.id/application/assets/js/jquery/jquery-1.12.0.min.js"></script>
	<script src="https://persuratan.kemdikbud.go.id/application/assets/js/jquery/jquery.ui.core.min.js"></script> 
	<script src="https://persuratan.kemdikbud.go.id/application/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://persuratan.kemdikbud.go.id/application/assets/bootstrap/js/bootstrap-popover.js"></script>
	<style>
		h4, h5, h6 {
		    margin-top: 10px;
		    margin-bottom: 0px;
		}
	</style>
	<div id="main_cont" style="width: 600px;">
        <div class="form-box">
            <div class="header2">
				<h3>Surat Keluar</h3>
			</div>
			<div class="body bg-gray" style="padding-bottom: 20px;">
				<div class="row">
					<div class="col-md-3">
						<h4>No. Surat</h4>
					</div>
					<div class="col-md-9">

						<h4> : <b><?=$surat->no_surat?></b></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h5>Tanggal Surat</h5>
					</div>
					<div class="col-md-9">
						<h5> : <b><?=$surat->tanggal_surat?></b></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h5>Penandatangan</h5>
					</div>
					<div class="col-md-9">
						<h5> : <b><?=$surat->penandatangan_surat?> - <?=$surat->jabatan_penandatangan?> </b></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h5>Perihal</h5>
					</div>
					<div class="col-md-9">
						<h5> : <b><?=$surat->perihal_surat?></b></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h5>Unit Kerja</h5>
					</div>
					<div class="col-md-9">
						<h5> : <b><?=$surat->unit_kerja?></b></h5>
					</div>
				</div>
				
				
							</div>
			         
        </div>
	</div>

<div id="viewDoc" class="overlay" style="">
  <!-- Overlay content -->
  <div style="margin-top:5px;">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#fff;font-size:40px;margin-right:20px;">&times;</button>
    <center><label id="titleDoc" style="float:middle;font-size:18px;color:#fff;vertical-align: middle;margin-top:8px;"></label></center>
  </div>
  <div id="viewDocContent" class="overlay-content">
    <!-- <iframe id="content" src="https://docs.google.com/gview?url=http://doc.integrasolusi.com/assets/uploads/posts/files/704f5cd57d85b27e2973642fe7799818-sample2.doc&embedded=true" frameborder="0" scrolling="no" seamless style="width:100%;float:middle;"></iframe> -->
  </div>
</div>
<style>
.overlay {
    /* Height & width depends on how you want to reveal the overlay (see JS below) */    
    height: 100%;
    width: 0;
    position: fixed; /* Stay in place */
    z-index: 5000; /* Sit on top */
    left: 0;
    top: 0;
    background-color: rgb(0,0,0); /* Black fallback color */
    background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
    overflow-x: hidden; /* Disable horizontal scroll */
    transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}

/* Position the content inside the overlay */
.overlay-content {
    position: relative;
    height: 90%;
    width: 90%; 
    top: 2%;
    left:5%;
}

/* The navigation links inside the overlay */
.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block; /* Display block instead of inline */
    transition: 0.3s; /* Transition effects on hover (color) */
}

/* When you mouse over the navigation links, change their color */
.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

/* Position the close button (top right corner) */
.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

/* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
@media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
    }
}
</style>
	</div>
	<script src="https://persuratan.kemdikbud.go.id/application/assets/bootstrap/js/bootstrap-alert.js"></script>

	<style>#ajax-loader {display:none;z-index: 111001;position: fixed;left: 0;top: 0;right: 0;bottom: 0;margin: auto;}</style>
	<img src="https://persuratan.kemdikbud.go.id/application/assets/images/loading.gif" id="ajax-loader">
	<script>
		$( document ).ajaxStart(function() {$( "#ajax-loader" ).show();});
		$( document ).ajaxComplete(function() {$( "#ajax-loader" ).hide();});
	</script>    
<script>
    main = document.getElementById('main_cont');
    var e = window, a = 'inner';
    if ( !( 'innerHeight' in window ) )
    {
        a = 'client';
        e = document.documentElement || document.body;
    }
    viewport = e[ a+'Height' ];
    content = main.offsetHeight;
    if ((viewport-content)<0){
    main.setAttribute("style","margin-top:"+0+"px");
    } else {
    main.setAttribute("style","margin-top:"+((viewport-content)/3)+"px");
    }
</script>
    
</body>
</html>
