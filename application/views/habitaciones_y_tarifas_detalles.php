<div class="content-back-color">
    <div class="container">
        <h1 class="title"><?php echo $data['title']; ?></h1>

        <!-- RoomDetails -->
        <div id="RoomDetails" class="carousel slide" data-ride="carousel" style="width: 80%;margin: 0 auto;">
            <div class="carousel-inner">
                <?php 
                    $active=true;
                    foreach ($data['imagenes'] as $value) {?>
                        <div class="item <?php echo ($active ? 'active' : 'height-full'); ?>"><img src="<?php echo base_url(PATH_TO_GALLERY . $value); ?>" class="img-responsive" alt="slide"></div>
                <?php 
                    $active = false;                
                    }; ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left fa-3x"></i></a>
            <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right fa-3x"></i></a>
        </div>
        <!-- RoomCarousel-->

        <div class="room-features spacer">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <p><?php echo $data['descripcion']; ?></p>                    
                </div>
                <div class="col-sm-6 col-md-3 amenitites"> 
                    <h3>Servicios</h3>
                    <ul>
                        <?php foreach ($data['servicios'] as $value) { ?>
                            <li><?php echo $value; ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="size-price">Dimensiones<span><?php echo $data['dimensiones']; ?></span></div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="size-price">Precio<span>$ <?php echo $data['costo']; ?></span>incluye impuestos</div>
                </div>                
            </div>
            <div class="pull-right" style="margin: 25px 0px;">
                <a href="javascript:history.back();" class="btn btn-default">Regresar</a>
            </div>
        </div>        
    </div>    
</div>