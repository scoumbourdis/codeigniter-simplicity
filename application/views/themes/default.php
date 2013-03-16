<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
		<title><?php echo $title; ?></title>
	<?php
		if(!empty($meta))
			foreach($meta as $name=>$content){
				echo "\n\t\t";
				?><meta name="<?php echo $name; ?>" content="<?php echo is_array($content) ? implode(", ", $content) : $content; ?>" /><?php
		 }
	?>
		<meta name="publisher" content="John Skoumbourdis" />
		<meta name="resource-type" content="document" />
		<meta name="robots" content="all, index, follow"/>
		<meta name="distribution" content="Global" />
		<meta name="author" content="John Skoumbourdis" />
		<meta name="abstract" content="<?php echo $title; ?>" />
		<meta name="googlebot" content="all, index, follow" />
		<meta name="title" content="<?php echo $title; ?>" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script src="<?php echo base_url('assets/themes/default/js/jquery-1.9.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/themes/default/hero_files/bootstrap-transition.js'); ?>"></script>
		<script src="<?php echo base_url('assets/themes/default/hero_files/bootstrap-collapse.js'); ?>"></script>

<?php
		 foreach($css as $file){
		 	echo "\n\t\t";
			?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
		 } echo "\n\t";

		 foreach($js as $file){
				echo "\n\t\t";
				?><script src="<?php echo $file; ?>"></script><?php
		 } echo "\n\t";
?>

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/css/general.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/css/custom.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/default/images/favicon.png" type="image/x-icon"/>
	<meta property="og:image" content="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png"/>
	<link rel="image_src" href="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

</head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <img src="<?php echo base_url(); ?>assets/themes/default/images/logo.png" style="float:left;margin-top:5px;z-index:5" alt="logo"/>
          <a class="brand" href="<?php echo site_url(); ?>">&nbsp;&nbsp;Your Brand</a>
          <div style="height: 0px;" class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
			  <li><a href="<?php echo site_url('example/example_1'); ?>">Example 1</a></li>
              <li><a href="<?php echo site_url('example/example_2'); ?>">Example 2</a></li>
              <li><a href="<?php echo site_url('example/example_3'); ?>">Example 3</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    <?php if($this->load->get_section('text_header') != '') { ?>
    	<h1><?php echo $this->load->get_section('text_header');?></h1>
    <?php }?>

    <?php echo $output;?>

      <hr/>

      <footer>
      	<div class="row">
	        <div class="span6 b10">
				Copyright &copy; <a target="_blank" href="https://plus.google.com/u/0/107789497808468736690?rel=author">John Skoumbourdis</a> | <a target="_blank" href="http://www.web-and-development.com">www.web-and-development.com</a>
	        </div>
        </div>
      </footer>

    </div> <!-- /container -->
</body></html>
