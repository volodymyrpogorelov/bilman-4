<?php return array (
  '21a4133ea08f9f0cbfbe277820dc223f' => 
  array (
    'criteria' => 
    array (
      'name' => 'Head',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Head',
      'description' => '',
      'editor_type' => 0,
      'category' => 7,
      'cache_type' => 0,
      'snippet' => '<meta charset="[[++modx_charset]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>[[++site_name]] - [[*pagetitle]]</title>
<meta name="description" content="[[*description]]"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<!-- Bootstrap -->
<link href="[[++assets_url]]components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="[[++assets_url]]templates/bootstrap/css/style.css" rel="stylesheet" media="screen">
[[If? 
    &subject=`[[++bootstrap.dropdown_disabled]]`
	&operand=`1`
	&then=`<style type="text/css">
ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;    
}
</style>`]]
<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
<script src="[[++assets_url]]components/bootstrap/vendor/js/jquery.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="[[++assets_url]]components/bootstrap/vendor/js/html5shiv.js"></script>
<script src="[[++assets_url]]components/bootstrap/vendor/js/respond.min.js"></script>
<![endif]-->
<base href="[[!++site_url]]" />
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<meta charset="[[++modx_charset]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>[[++site_name]] - [[*pagetitle]]</title>
<meta name="description" content="[[*description]]"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<!-- Bootstrap -->
<link href="[[++assets_url]]components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="[[++assets_url]]templates/bootstrap/css/style.css" rel="stylesheet" media="screen">
[[If? 
    &subject=`[[++bootstrap.dropdown_disabled]]`
	&operand=`1`
	&then=`<style type="text/css">
ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;    
}
</style>`]]
<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
<script src="[[++assets_url]]components/bootstrap/vendor/js/jquery.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="[[++assets_url]]components/bootstrap/vendor/js/html5shiv.js"></script>
<script src="[[++assets_url]]components/bootstrap/vendor/js/respond.min.js"></script>
<![endif]-->
<base href="[[!++site_url]]" />
',
    ),
  ),
  'ddd5119203d2a2ca50eef92dde343a5d' => 
  array (
    'criteria' => 
    array (
      'name' => 'Navbar',
    ),
    'object' => 
    array (
      'id' => 20,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Navbar',
      'description' => '',
      'editor_type' => 0,
      'category' => 7,
      'cache_type' => 0,
      'snippet' => '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="[[++site_url]]">[[++site_name]]</a>
	</div>
	<div class="collapse navbar-collapse">
	  [[Wayfinder?
		&startId=`0`
		&level=`2`
		&outerTpl=`Wayfinder.outerTpl`
		&innerTpl=`Wayfinder.innerTpl`
		&parentRowTpl=`Wayfinder.parentRowTpl`
		&innerRowTpl=`Wayfinder.innerRowTpl`
		&rowTpl=`Wayfinder.rowTpl`                    
	  ]]
	</div><!--/.nav-collapse -->
  </div>
</div>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="[[++site_url]]">[[++site_name]]</a>
	</div>
	<div class="collapse navbar-collapse">
	  [[Wayfinder?
		&startId=`0`
		&level=`2`
		&outerTpl=`Wayfinder.outerTpl`
		&innerTpl=`Wayfinder.innerTpl`
		&parentRowTpl=`Wayfinder.parentRowTpl`
		&innerRowTpl=`Wayfinder.innerRowTpl`
		&rowTpl=`Wayfinder.rowTpl`                    
	  ]]
	</div><!--/.nav-collapse -->
  </div>
</div>
',
    ),
  ),
  'abf20109b1b32ca30a16e794eaa971a5' => 
  array (
    'criteria' => 
    array (
      'name' => 'Footer',
    ),
    'object' => 
    array (
      'id' => 18,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Footer',
      'description' => '',
      'editor_type' => 0,
      'category' => 7,
      'cache_type' => 0,
      'snippet' => '<div id="footer">
	<div class="container">
		<p class="text-muted">&copy; [[++site_name]] [[Years]]
			<a href="http://modx.com/extras/package/bootstrap" target="_blank" class="pull-right"><small>Bootstrap 1.0.28-pl</small></a>
		</p>
	</div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="[[++assets_url]]components/bootstrap/dist/js/bootstrap.min.js"></script>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<div id="footer">
	<div class="container">
		<p class="text-muted">&copy; [[++site_name]] [[Years]]
			<a href="http://modx.com/extras/package/bootstrap" target="_blank" class="pull-right"><small>Bootstrap 1.0.28-pl</small></a>
		</p>
	</div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="[[++assets_url]]components/bootstrap/dist/js/bootstrap.min.js"></script>
',
    ),
  ),
);