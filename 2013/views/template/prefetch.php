<?php
$prefetch_images = array('bali','bangkok','hongkong','india','kualalumpur','osaka','seoul','singapore','taiwan','vietnam');
foreach ($prefetch_images as $p) {
?>
<link rel="prefetch" href="{{base_uri}}images/banners/<?php echo $p; ?>.jpg">
<link rel="prerender" href="{{base_uri}}images/banners/<?php echo $p; ?>.jpg">
<?php
}