<!DOCTYPE html>
<html>
<head>
	<script src='http://code.jquery.com/jquery-1.7.2.min.js' type='text/javascript' charset='utf-8'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js'></script>
	<script src='<?php echo base_url('js/instagram.js') ?>' type='text/javascript' charset='utf-8'></script>

	<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css' type='text/css' media='screen'>
	<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css' type='text/css' media='screen'>
	<link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" type="text/css" media="screen" title="no title" charset="utf-8">
	<title>Mostrando o que a TV quer esconder!</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="description" content="#protestomaringa - Mostrando o que a TV quer esconder!" />
	<meta name="keywords" content="protesto, maringa, manifestação" />
	<meta name="author" content="Renan Martins Pimentel" />	

	<meta property="og:title" content="#protestomaringa - Mostrando o que a TV quer esconder!" />
	<meta property="og:description" content="#protestomaringa - Mostrando o que a TV quer esconder!" />
</head>
<body>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<form id='search'>
        	<div class="input-prepend input-append">
	            <span class="add-on" style="padding:10px;">#</span>
	            <input class='search-tag span10' style="padding:10px; font-size: 23px;" type='text' tabindex='1' id='hashtag' value='<?php echo $this->uri->segment(2) ? $this->uri->segment(2) : 'ogiganteacordou' ?>' />
	            <button class="btn" style="padding:10px;" id="search-button" dir="ltr" tabindex="2" type="submit">
	                <i class='icon-search'></i>
	            </button>
	        </div>
	    </form>
	</div>
</div>


