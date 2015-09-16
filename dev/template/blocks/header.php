
<header>
	<div class="container header">
		<div class="row">
			<div class="col-xs-10 col-sm-8 col-md-4"><div class="adres"><span><?php echo $address;?></span></div></div>
			<div class="col-xs-12 col-sm-6 col-md-4">
<?php if ($meta_lang == 'en') { ?>
				<a href="/en/" class="logo"><?php echo $header_logo;?></span></a>
<?php } else { ?>
				<a href="/" class="logo"><?php echo $header_logo;?></span></a>
<?php } ?>
			</div>
			<div class="col-xs-4 col-sm-2 hidden-md col-lg-1">
<?php if ($meta_lang == 'en') { ?>
            <a href="javascript: change_lang('ru');" class="lang">RU</a><span class="lang active">EN</span>
<?php } else { ?>
            <span class="lang active">RU</span><a href="javascript: change_lang('en');" class="lang">EN</a>
<?php } ?>
			</div>
			<div class="col-xs-8 col-sm-4 col-md-4 col-lg-3">
				<div class="tel"><i class="fa fa-phone"></i><span><?php echo $header_tel;?></div>
			</div>
			<div class="col-md-2 col-md-offset-10 visible-md" style="line-height:normal;">
<?php if ($meta_lang == 'en') { ?>
            <a href="javascript: change_lang('ru');" class="lang">RU</a><span class="lang active">EN</span>
<?php } else { ?>
            <span class="lang active">RU</span><a href="javascript: change_lang('en');" class="lang">EN</a>
<?php } ?>
			</div>
		</div>
	</div>
</header>

<?php include($root."template/blocks/navbar.php");?>
