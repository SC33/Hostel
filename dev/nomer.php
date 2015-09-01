<?php $root='../';
include("var.php");
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<!-- SLIDER -->
<div class="slider">
	<div class="slider-img"><img src="img/glav.jpg" class="slider-responsive" alt="<?php echo $nomera[$id]['name'];?>"></div>
	<div class="container-fluid"><div id="_pmsWidget_"></div></div>
	<div class="description">
		<div class="container"><div class="row">
			<div class="col-sm-7 col-md-7 col-lg-9 col-sm-offset-5 col-md-offset-5 col-lg-offset-3 hidden-xs">
				<p class="h1"><?php echo $nomera[$id]['name'];?></p>
				<p class="h2"><b><?php echo $nomera[$id]['cost'];?></b> рублей за сутки</p>
			</div>
		</div></div>
	</div>
	<div class="container"><div class="row">
		<div class="col-sm-7 col-md-7 col-lg-9 col-sm-offset-5 col-md-offset-5 col-lg-offset-3 hidden-xs">
			<p class="h2">Просторная комната с зоной отдыха. Завтрак включен в стоимость.</p>
		</div>
	</div></div>
</div>
<!-- SLIDER -->
<div class="row">
	<ul class="list-inline text-center">
<?php $images = scandir('img/');
if (false !== $images) {
    $imgarray = preg_grep('/\\.(?:jpe?g)$/', $images);
	foreach($imgarray as $row) { ?>  
		<li class="nomer-image">
			<a href="<?php echo 'img/',htmlspecialchars(urlencode($row));?>" class="fancybox-thumb" rel="group" title="<?php echo $nomera[$id]['name'];?>">
				<img height="100px" src="<?php echo 'img/',htmlspecialchars(urlencode($row));?>" alt="<?php echo $nomera[$id]['name'];?>">
			</a>
		</li>
<?php }} ?>
	<ul>
</div>

<!-- НОМЕРА -->
<div class="container">
<?php echo $text;?>
</div>
<!-- НОМЕРА -->

<!-- FEATURES -->
<div class="container features">
	<h2>В стоимость проживания включено</h2>
	<div class="row">
<?php $inclusive = [['i1","Завтраки'],['i2","Горячий душ'],['i3","Полотенца и белье'],['i4","Кухня'],['i5","Бесплатный Wi-Fi'],['i6","Гостевой компьютер'],['i7","24/7 ресепшн'],['i8","Хранение багажа'],['i9","Телевизор'],['i10","Карта города'],['i11","Настольные игры'],['i12","Локеры']];
foreach($inclusive as $key => $row) {
	if ($key>0) {
		$clearfix='';
		if ($key % 2 == 0) {$clearfix = $clearfix.' visible-xs';}
		if ($key % 4 == 0) {$clearfix = $clearfix.' visible-sm';}
		if ($key % 6 == 0) {$clearfix = $clearfix.' visible-md visible-lg';}
		if ($clearfix != '') {echo '<div class="clearfix'.$clearfix.'"></div>';}
	} ?>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/<?php echo $row[0];?>.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text"><?php echo $row[1];?></div>
		</div>
<?php } ?>
	</div>
</div>
<!-- FEATURES -->

<!-- MAP -->
<!-- <div class="container-fluid map">
	<div class="row">
		<h2>Расположение хостела</h2>
		<div class="map_yandex">
		<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=qnghkP4W_wvwMGKITCXQ_h-IQKXUOdZo&width=auto&height=350"></script>
		</div>
	</div>
</div> -->
<!-- MAP -->

<script src="https://pmscloud.com/app/pbb/js/pmsbook.js"></script>
<script> var Pms = new _Pms('705486'); var params = { hotelId: '705486', button: '2195456', height:350, textColor:'#000', width:300, hostname: "https://pmscloud.com/app/form"}; Pms.widget("_pmsWidget_", params); </script>

<?php include($root."blocks/footer.php"); ?>
