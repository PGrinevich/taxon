<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php if($page_title){ ?>
    	<title><?php echo $page_title; ?>  | <?php echo $this->config->item('app_name'); ?></title>
    <?php }else{ ?>
    	<title><?php echo $this->config->item('app_name'); ?></title>
    <?php } ?>
    

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assests/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/css/bootstrap-vertical-offsets.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="padding-top: 50px;">

  <!-- Header -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>">Taxon</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#"><?php echo lang('menu_about'); ?></a></li>
                <li><a href="#"><?php echo lang('menu_help'); ?></a></li>
                <li><a href="#"><?php echo lang('menu_contact_us'); ?></a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url( 'registration' ); ?>"><?php echo lang('menu_sing_up'); ?></a></li>
                <li><a href="#"><?php echo lang('menu_log_in'); ?></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong><?php echo lang('text_lang'); ?></strong><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('action/lang/russian'); ?>">Руский</a></li>
                    <li><a href="<?php echo base_url('action/lang/ukrainian'); ?>">Українська</a></li>
                    <li><a href="<?php echo base_url('action/lang/english'); ?>">English</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
