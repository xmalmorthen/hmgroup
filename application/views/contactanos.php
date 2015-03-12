<script src='https://www.google.com/recaptcha/api.js'></script>
<style type="text/css">
    .error{color:red;}
    .contactformselect {opacity: 1!Important;font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;font-size: 15px!Important;line-height: 15px!Important;color: #73726C!Important;padding-left: 7px!Important;}
    #nuestro_hotel{text-align: center;}
    #nuestro_hotel img.icon {border-radius: 50%;border:3px solid #cacaca;width: 200px;height: 200px;display: inline-block;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;margin-bottom: 1em;}
    .styledomicilio{font-size: 1.3em; font-weight: bold;}
    .stylecolciudad{font-size: .8em; font-weight: bold;}
    .roundborder {-moz-border-radius: 15px 15px 15px 15px;-webkit-border-radius: 15px 15px 15px 15px;border-radius: 15px 15px 15px 15px;border: 1px solid #cacaca;}
</style>

<?php if (!isset($partial) || !$partial) { ?>
<div class="content-back-color">
    <div class="container">
        <h1 class="title" style="font-size: 3.5em!Important;">Contáctanos</h1>
        <!-- form -->
        <div class="contact">
            <div class="row">       	
                <div class="col-sm-12">                    
                    <div class="col-sm-7 col-sm-offset-3 roundborder">
                        <div class="spacer">   		
                            <h4>Escríbenos</h4>
                            <?php
                                $attributes = array('role' => 'form', 'id' => 'contactanos_master');
                                echo form_open('', $attributes); ?>
                                    <div class="form-group">
                                        * Hotel
                                        <?php echo form_dropdown('contact_hotel', $infoHotels,$setselect,'class="form-control contactformselect" id="contact_hotel"'); ?>
                                    </div>        
                                    <div class="form-group">
                                        * Nombre
                                        <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Nombre" value="<?php echo set_value('contact_name'); ?>">
                                        <?php echo form_error('contact_name'); ?>
                                    </div>
                                    <div class="form-group">
                                        * Correo electrónico
                                        <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Correo electrónico" value="<?php echo set_value('contact_email'); ?>">
                                        <?php echo form_error('contact_email'); ?>
                                    </div>
                                    <div class="form-group">
                                        Teléfono
                                        <input type="phone" class="form-control" id="contact_phone" name="contact_phone" placeholder="Teléfono" value="<?php echo set_value('contact_phone'); ?>">
                                        <?php echo form_error('contact_phone'); ?>
                                    </div>
                                    <div class="form-group">
                                        * Mensaje
                                        <textarea type="text" class="form-control" id="contact_message" name="contact_message"  placeholder="Mensaje" rows="4"><?php echo set_value('contact_message',''); ?></textarea>
                                        <?php echo form_error('contact_message'); ?>
                                    </div>
                                    <span style="color: rgb(155, 1, 1);"> 
                                        * Información requerida.
                                    </span>
                                    <br/><br/>
                                    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                                    <?php 
                                    if (strlen($flashSuccess) != 0) {?>
                                        <div class="error">
                                            <i class="fa fa-exclamation-triangle"></i>
                                            <span style="color: red;"><?php echo $flashSuccess; ?></span>
                                        </div>
                                    <?php } ?>
                                    
                                    <br/>
                                    <button type="submit" class="btn btn-default pull-right">Enviar</button>
                          <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="margin: 40px 0;">
                    <div id="nuestro_hotel" class="content-back-color">
                        <?php foreach ($data as $key => $value) {?>
                            <div class="col-sm-3" style="border-left: 1px solid #EAEAEA; border-right: 1px solid #EAEAEA;">
                                <img class="icon bk1" src="<?php echo base_url(PATH_TO_GALLERY . $value->icon); ?>">
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
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="map col-sm-12" >
                    <iframe src="https://www.google.com/maps/d/embed?mid=zn7vLIFSG_Rw.kP-o2y9vyOrc" width="100%" height="500" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- form -->
    </div>
</div>
<?php } else { ?>
    <h3>Escríbenos</h3> 
    <?php 
    $attributes = array('role' => 'form', 'id' => 'contactanos_master');
    echo form_open('', $attributes); ?>
        <div class="form-group">
            * Hotel
            <?php echo form_dropdown('contact_hotel', $infoHotels,'','class="form-control contactformselect" id="contact_hotel"'); ?>
        </div>        
        <div class="form-group">
            * Nombre
            <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Nombre">
            <?php echo form_error('contact_name'); ?>
        </div>
        <div class="form-group">
            * Correo electrónico
            <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Correo electrónico">
            <?php echo form_error('contact_email'); ?>
        </div>
        <div class="form-group">
            Teléfono
            <input type="phone" class="form-control" id="contact_phone" name="contact_phone" placeholder="Teléfono">
            <?php echo form_error('contact_phone'); ?>
        </div>
        <div class="form-group">
            * Mensaje
            <textarea type="text" class="form-control" id="contact_message" name="contact_message"  placeholder="Mensaje" rows="4"></textarea>
            <?php echo form_error('contact_message'); ?>
        </div>
        <span style="color: rgb(155, 1, 1);"> 
            * Información requerida.
        </span>
        <br/><br/>
        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
        <br/>
        <button type="submit" class="btn btn-default pull-right">Enviar</button>
    <?php echo form_close(); ?>
<?php }?>