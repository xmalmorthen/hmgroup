<style type="text/css">
    #nuestro_hotel{text-align: center;}
    #nuestro_hotel img.icon {border-radius: 50%;border:3px solid #cacaca;width: 200px;height: 200px;display: inline-block;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;cursor: pointer;margin-bottom: 1em;}
    .styledomicilio{font-size: 1.3em; font-weight: bold;}
    .stylecolciudad{font-size: .8em; font-weight: bold;}
</style>

<div id="nuestro_hotel" class="content-back-color">
    <div class="container">
        <br/><br/><br/>
        <div class="row">            
            <?php foreach ($data as $key => $value) {?>
                <div class="col-sm-3" style="border-left: 1px solid #EAEAEA; border-right: 1px solid #EAEAEA;">
                    <a href="<?php echo site_url("hmgroup/habitaciones_y_tarifas/" . strtolower(str_replace(' ','', $key))); ?>"><img class="icon bk1" src="<?php echo base_url(PATH_TO_GALLERY . $value->icon); ?>"></a>
                    <h2><?php echo $key; ?></h2>

                    <div style="min-height: 40px; max-height: 40px; overflow: hidden;">
                        <span class="styledomicilio"> <?php echo $value->calle . " # " . $value->numero; ?> </span>
                    </div>
                    <div style="min-height: 40px; max-height: 40px; overflow: hidden;">
                        <span class="stylecolciudad"><?php echo $value->colonia . ",  " . $value->municipio . ", " . $value->ciudad; ?></span>                        
                    </div>
                    <div style="min-height: 100px; max-height: 100px; overflow: hidden;">
                        <span class="stylecolciudad pull-left" style="padding-left: 15px;"> Teléfono(s): </span>
                        <br/><br/>
                        <span class="styledomicilio"> 
                            <?php 
                            $tels = '';
                            foreach ($value->telefonos as $__key => $__value) {
                                $tels.= $__value . " ";
                            }
                            echo $tels;
                            ?>
                        </span>
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo site_url("hmgroup/habitaciones_y_tarifas/" . strtolower(str_replace(' ','', $key))); ?>" class="btn btn-default">Habitaciones</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="spacer">
            <div style="max-height: 650px; overflow: hidden;">
                <img src="<?php echo base_url(PATH_TO_GALLERY . '/hotelitoinn/6.jpg'); ?>" class="img-responsive" style="display: inline;">
            </div>
            <!--<div class="embed-responsive embed-responsive-16by9"><iframe width="560" height="315" src="//www.youtube.com/embed/QuEsELHbyrA" frameborder="0" allowfullscreen></iframe></div>-->
        </div>
    </div>
</div>
