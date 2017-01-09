<style type="text/css">
    #gallery-images h2 {font-size: 3em;line-height: 1.3em;border-bottom: 3px solid #D4D7D8;margin: 15px 0 10px 0px;}
</style>
<div id="gallery-images" class="content-back-color">
    <div class="container">
        <br/>
        <?php foreach ($data as $key => $value) {?>
			<div id="<?php echo str_replace(' ','_',$key); ?>">
				<h2><?php echo $key; ?></h2>              
				<div class="row gallery">
					<?php foreach ($value['gallery'] as $img) { ?>
						<div class="col-sm-3 wowload fadeInUp"><a href="<?php echo base_url(PATH_TO_GALLERY . $img); ?>" title="<?php echo $key; ?>" class="gallery-image" data-gallery><img src="<?php echo base_url(PATH_TO_GALLERY . $img); ?>" class="img-responsive"></a></div>
					<?php } ?>
				</div>
			</div>
			<?php if ($value['face'] !== null) {?>
				<div style="text-align-last: right;">
					<span style="font-size: 1.7em;">Visita nuestra página de FaceBook</span>&nbsp;&nbsp; <a target="_blank" href="<?php echo $value['face']; ?>"><i class="fa fa-facebook-square fa-4x" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
				</div>
			<?php } ?>
			<br/>
			<br/>
        <?php } ?>
    </div>
</div>