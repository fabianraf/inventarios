<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo $this->Html->charset('UTF-8')?>
<meta name="description" content="#" />
<meta name="keywords" content="#" />
<meta name="author" content="#" />

<?php echo $this->Html->css('cake.forms', 'stylesheet', array("media"=>"all" ));?>
<?php echo $this->Html->css('doctors_office', 'stylesheet', array("media"=>"screen" ));?>
<?php echo $this->Html->css('cake.generic.css', 'stylesheet', array("media"=>"screen" ));?>
<title>CakePHP : The PHP Rapid Development Framework :: <?php echo $title_for_layout?></title>
</head>
<body>
<div id="banner">
  <div class="top_links clearfix" id="topnav">
  <ul>
    <li><a href="http://www.inventarios.com/users">Usuarios</a></li>
	<li><a href="http://www.inventarios.com/clientes">Clientes</a></li>
    <li><a href="http://www.inventarios.com/personas">Personas</a></li>

  </ul>

  </div>
  <?php echo $this->Html->image('header_logo.jpg', array('alt'=>"pumpkin"))?>
  <div class="page_title"><span id="page_title">RET SUMEDENT</span>
  </div>
</div>
<div class="leftcontent" id="nav"> 
<?php echo $this->Html->image('left_bg_top.gif', array('alt'=>"bg image", 'border'=>"0"))?>
	  <ul>
	    <li><a href="http://www.inventarios.com/users">Usuarios</a></li>
		<li><a href="http://www.inventarios.com/clientes">Clientes</a></li>
	    <li><a href="http://www.inventarios.com/personas">Personas</a></li>
	
	  </ul>
	  <div class="left_news">
	<!--  commented in order to use this before
	
	 <p>&nbsp;</p>
	    <p><span class="news_title">News Area?</span><br />
	      A little area for some news, links or perhaps a profile?</p>
	    <p><span class="news_title">Note About Above Links</span><br />
		The left navigation links above show a small blue box on hover, at least they show up in anything other than IE (of course).</p>
		
		<p>The other browsers show them alright, except that there was a small lag in Opera, but the image showed up fine after that.</p>
		
		<p>It's not a huge deal, but i wanted to note it anyway. </p>
		-->
	  </div>
	</div>
	<div id="centercontent">
	
		<?php echo $content_for_layout?>
		
		<div class="footer" id="footer"> 
		
		</div>
	
		<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
</html>
