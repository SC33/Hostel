<?php $dir_img= 'image'.$dir; include($root."template/blocks/meta.php"); include($root."template/blocks/header.php");?><div class="slider"><div class="slider-img"><img src="<?php echo '/',$dir_img;?>glav.jpg" class="slider-responsive" alt="<?php echo $nomera[$id]['name'];?>"></div><div class="container-fluid"><div id="_pmsWidget_" class="pmsWidget"></div></div><div class="slider-content"><div class="description hidden-xs"><div class="container"><div class="row"><div class="col-sm-7 col-md-7 col-lg-9 hidden-xs"><p class="h1"><?php echo $nomera[$id]['name'];?></p><p class="h2"><b><?php echo $nomera[$id]['cost'];?></b><?php echo $lang['slider-cost'];?></p></div></div></div></div><div class="container hidden-xs"><div class="row"><div class="col-sm-7 col-md-7 col-lg-9"><p class="h2"><?php echo $lang['slider-h2'];?></p></div></div></div></div></div><ul class="list-inline text-center"><?php $images = scandir($root.$dir_img); if (false !== $images) { $imgarray = preg_grep('/\\.(?:jpe?g)$/', $images); foreach($imgarray as $row) { ?><li class="nomer-image"><a href="<?php echo '/',$dir_img,htmlspecialchars(urlencode($row));?>" class="fancybox-thumb" rel="group" title="<?php echo $nomera[$id]['name'];?>"><img height="100px" src="<?php echo '/',$dir_img,htmlspecialchars(urlencode($row));?>" alt="<?php echo $nomera[$id]['name'];?>"></a></li><?php }} ?></ul><div class="container"><?php include("common.php"); ?></div><div class="container features"><h2><?php echo $lang['features-h2'];?></h2><div class="row"><?php $key = 0; foreach($inclusive as $num => $row) { if ($key>0) { $clearfix=''; if ($key % 2 == 0) {$clearfix = $clearfix.' visible-xs';} if ($key % 4 == 0) {$clearfix = $clearfix.' visible-sm';} if ($key % 6 == 0) {$clearfix = $clearfix.' visible-md visible-lg';} if ($clearfix != '') {echo '<div class="clearfix'.$clearfix.'"></div>';} } $key++; ?><div class="col-xs-6 col-sm-3 col-md-2"><div class="features_icon"><img src="/img/<?php echo $num;?>.png" alt="" class="img-responsive center-block"></div><div class="features_text"><?php echo $row;?></div></div><?php } ?></div></div><?php include($root."template/blocks/footer.php"); ?>