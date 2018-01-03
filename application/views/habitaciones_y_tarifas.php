<style type="text/css">
    #habitaciones_y_tarifas h2 {font-size: 3em;line-height: 2em;font-size: 3em;line-height: 1.3em;border-bottom: 3px solid #D4D7D8;margin: 15px 0 10px 0px; }
    .size-price{background-color: #C7C5BB;padding:0; height: auto; text-align: center;color: #fff;line-height: 2.5em;margin-bottom: 5px;}
    .size-price span {display: block;}
</style>

<div id="habitaciones_y_tarifas" class="content-back-color">
    <div class="container">
        <?php foreach ($data as $key => $value) { ?>
            <h2><?php echo $key; ?></h2>
            
            <br/>
            <h3><b>Reservaciones</b></h3>
            <br/><br/>
            <div class="row">
                <div class="col-sm-8 col-md-8 col-md-offset-2">
                <!-- widget -->
                        <div id="widget<?php echo str_replace(' ','_',$key); ?>"></div>
                <!-- widget -->
                </div>
            </div>
            <br/><br/>
            
            <div class="row">
                <?php foreach ($value->habitaciones as $habitacion => $valor) { ?>
                    <div class="col-sm-4 wowload fadeInUp">
                        <div class="rooms">
                            <div>
                                <img src="<?php echo base_url(PATH_TO_GALLERY . $valor->icon); ?>" class="img-responsive" >
                            </div>    
                            <div class="info">
                                <h3><?php echo $habitacion; ?></h3>
                                <p><?php echo substr($valor->descripcion, 0,80) . ' ...';  ?></p>                                
                                <div class="size-price">
                                    <span style="font-size: 1.3em">Precio </span>
                                    <span style="font-size: 2.5em; font-weight: bold;">$ <?php echo $valor->costo; ?> </span>
                                    <span style="font-size: 1em">incluye impuestos *</span>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo site_url('hmgroup/habitaciones_y_tarifas_detalles/' . strtolower(str_replace(' ','', $key)) . '/habitacion_' . strtolower(str_replace(' ','_', $habitacion))); ?>" class="btn btn-default">Mostrar detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
             </div>
            <strong>* Tarifas de temporada baja. Sujeto a cambio sin previo aviso.</strong>
            <br/><br/>
        <?php } ?>
    </div>
</div>
