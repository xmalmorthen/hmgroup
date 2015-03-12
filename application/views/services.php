<!-- services -->
<div id="services" class="spacer services wowload fadeInUp">
    <div class="container">
        <div class="row">
            <?php foreach ($data as $key => $value) { ?>
                <div class="col-sm-3 spacepadding-carrousel">
                    <div id="<?php echo strtolower(str_replace(' ','', $key)); ?>" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php 
                            $band = TRUE;
                            foreach ($value as $gallery) { ?>
                                <div class="item <?php echo ($band) ? 'active' : ''; ?>"><img src="<?php echo base_url(PATH_TO_GALLERY . $gallery); ?>" class="img-responsive" alt="slide"></div>
                            <?php $band = FALSE; } ?>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#<?php echo strtolower(str_replace(' ','', $key)); ?>" role="button" data-slide="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                        <a class="right carousel-control" href="#<?php echo strtolower(str_replace(' ','', $key)); ?>" role="button" data-slide="next"><i class="fa fa-angle-right fa-2x"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption"><?php echo $key; ?><a href="<?php echo site_url('hmgroup/galeria_de_imagenes'); ?>" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- services -->