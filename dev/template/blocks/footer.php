<!-- FOOTER -->
<div><img class="house" src="/img/footer-back-min.png"></div>
<footer class="footer">
  <div class="container">
  <div class="row">
  	<div class="col-xs-12 col-sm-6 col-md-8"><div class="row">
		<div class="col-xs-12 col-md-6 footer-hr">
			<ul class="list-unstyled">
				<li class="h4"><span><?php echo $services; ?>:</span></li>
				<li><a href="<?php echo $menu['groups']['url']; ?>"><?php echo $menu['groups']['name']; ?></a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-md-6 footer-hr">
			<ul class="list-unstyled">
				<li class="h4"><a href="<?php echo $menu['apartments']['url']; ?>"><?php echo $menu['apartments']['name']; ?>:</a></li>
<?php foreach($nomera as $number => $row) { ?>
				<li><a href="/apartments/<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a></li>
<?php } ?>
			</ul>
		</div>
	</div>
</div>
	<div class="col-xs-12 col-sm-6 col-md-4 footer-hr">
		<ul class="list-unstyled">
			<li class="h4"><a href="<?php echo $menu['contacts']['url']; ?>"><?php echo $menu['contacts']['name']; ?>:</a></li>
			<li><a href="tel:<?php echo $tel;?>"><?php echo $tel;?></a></li>
			<li><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></li>
			<li><span><?php echo $address;?></span></li>
		</ul>
	</div>
  </div>
  <div class="row footer-hr" style="margin-top:20px;">
	<div class="col-xs-6 col-sm-2 col-sm-offset-2 footer-stack">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-stack-1x">B.</i>
		</span><br class="visible-md">
		<span class="hidden-sm">Booking</span>
	</div>
	<div class="col-xs-6 col-sm-2 footer-stack">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-twitter fa-stack-1x"></i>
		</span><br class="visible-md">
		<span class="hidden-sm">Twitter</span>
	</div>
	<div class="col-xs-6 col-sm-2 footer-stack">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-vk fa-stack-1x"></i>
		</span><br class="visible-md">
		<span class="hidden-sm">Vkontakte</span>
	</div>
	<div class="col-xs-6 col-sm-2 footer-stack"> 
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-facebook fa-stack-1x"></i>
		</span><br class="visible-md">
		<span class="hidden-sm">Facebook</span>
		
	</div>
	<div class="col-xs-12 col-sm-2 footer-stack">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-odnoklassniki fa-stack-1x"></i>
		</span><br class="visible-md">
		<span class="hidden-sm">Odnoklassniki</span>
	</div>
  </div>
  </div>
</footer>
<!-- FOOTER -->

<script>function change_lang(lang){var pathname;if(lang=='en'){pathname="/en"+window.location.pathname;}else{pathname=window.location.pathname.replace("/en","");}window.location=pathname;}</script>
<!-- build:remove -->
<script src="/libs/jquery/dist/jquery.min.js"></script>
<script src="/libs/moment/min/moment.min.js"></script>
<script src="/libs/moment/min/locales.min.js"></script>
<script src="/libs/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="/libs/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/pms.js"></script>
<script src="/js/common.js"></script>
<!-- /build -->

<!-- build:template
<script>
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/style.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>
var scr = {"scripts":[{"src" : "/js/scripts.min.js", "async" : false}]};
!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
/build -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="/js/bootstrap.min.js"></script>-->
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</body>
</html>
