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
<?php if ($dir=='/') { ?>
			<li><a href="tel:<?php echo $tel;?>" itemprop="telephone"><?php echo $tel;?></a></li>
			<li><a href="mailto:<?php echo $email;?>" itemprop="email"><?php echo $email;?></a></li>
			<li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span>
<?php if ($meta_lang == 'en') { ?>
		  		<span itemprop="streetAddress"><?php echo $streetAddress;?></span>,
		  		<span itemprop="addressLocality"><?php echo $addressLocality;?></span>,
		  		<span itemprop="addressRegion"><?php echo $addressRegion;?></span>,
		  		<span itemprop="postalCode"><?php echo $postalCode;?></span>,
		  		<span itemprop="addressCountry"><?php echo $country;?></span>
<?php }else{ ?>
		  		<span itemprop="postalCode"><?php echo $postalCode;?></span>,
				<span itemprop="addressCountry"><?php echo $country;?></span>,
				<span itemprop="addressRegion"><?php echo $addressRegion;?></span>,
		  		<span itemprop="addressLocality"><?php echo $addressLocality;?></span>,
    			<span itemprop="streetAddress"><?php echo $streetAddress;?></span>
<?php } ?>
			</span></li>
<?php } else { ?>
			<li><a href="tel:<?php echo $tel;?>"><?php echo $tel;?></a></li>
			<li><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></li>
			<li><span>
<?php if ($meta_lang == 'en') { ?>
		  		<span><?php echo $streetAddress;?></span>,
		  		<span><?php echo $addressLocality;?></span>,
		  		<span><?php echo $addressRegion;?></span>,
		  		<span><?php echo $postalCode;?></span>,
		  		<span><?php echo $country;?></span>
<?php }else{ ?>
		  		<span><?php echo $postalCode;?></span>,
				<span><?php echo $country;?></span>,
				<span><?php echo $addressRegion;?></span>,
		  		<span><?php echo $addressLocality;?></span>,
    			<span><?php echo $streetAddress;?></span>
<?php } ?>
    		</span></li>
<?php } ?>
		</ul>
	</div>
  </div>
  <div class="row footer-hr" style="margin-top:20px;">
	<div class="col-xs-6 col-sm-2 footer-stack">
		<a href="javascript: void(0);" class="socseti" target="_blank">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-stack-1x">B.</i>
		</span><br class="visible-md">
		<span class="hidden-sm">Booking</span>
		</a>
	</div>
	<div class="col-xs-6 col-sm-2 footer-stack">
		<a href="https://twitter.com/Khrapovitsky33" class="socseti" target="_blank">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-twitter fa-stack-1x"></i>
		</span><br class="visible-md">
		<span class="hidden-sm">Twitter</span>
		</a>
	</div>
	<div class="col-xs-6 col-sm-2 footer-stack">
		<a href="https://vk.com/khrapovitsky33" class="socseti" target="_blank">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-vk fa-stack-1x"></i>
		</span><br class="visible-md">
		<span class="hidden-sm">Vkontakte</span>
		</a>
	</div>
	<div class="col-xs-6 col-sm-2 footer-stack">
		<a href="javascript: void(0);" class="socseti" target="_blank">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-facebook fa-stack-1x"></i>
		</span><br class="visible-md">
		<span class="hidden-sm">Facebook</span>
		</a>		
	</div>
	<div class="col-xs-6 col-sm-2 footer-stack">
		<a href="http://ok.ru/group/52856397496392" class="socseti" target="_blank">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-odnoklassniki fa-stack-1x"></i>
		</span><br class="visible-md">
		<span class="hidden-sm">Odnoklassniki</span>
		</a>
	</div>
	<div class="col-xs-6 col-sm-2 footer-stack">
		<a href="https://plus.google.com/+KhrapovitskyRu33" class="socseti" target="_blank">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle-thin fa-stack-2x"></i>
		  <i class="fa fa-google-plus fa-stack-1x"></i>
		</span><br class="visible-md">
		<span class="hidden-sm">Google+</span>
		</a>
	</div>
  </div>
  <div class="row footer-hr" style="padding:10px;"><p><a href="http://www.creative-seo.ru/" class="socseti"><?php echo $created;?></a></p></div>
  </div>
</footer>
<!-- FOOTER -->

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

<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter32757190 = new Ya.Metrika({id:32757190, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/32757190" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-68209295-1', 'auto');ga('send', 'pageview');
</script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</body>
</html>
