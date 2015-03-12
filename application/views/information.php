<!-- reservation-information -->
<div id="informacion" class="spacer reserve-info ">
    <div class="container">
        <h1>
            HM Group
        </h1>
        <div class="row">
            <div class="col-sm-7 col-md-8" style="max-height: 570px; overflow: hidden;">
                <img src="<?php echo base_url(PATH_TO_GALLERY . '/hmhotel/8.jpg'); ?>" class="img-responsive" style="padding-top: 15px; ">                
                <!--<div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe width="560" height="315" src="//www.youtube.com/embed/QuEsELHbyrA" frameborder="0" allowfullscreen></iframe></div>-->
            </div>
            <div class="col-sm-5 col-md-4 contactanos" >
                <?php echo $this->load->view('contactanos',array('partial' => TRUE)); ?>
            </div>
        </div>  
    </div>
</div>
<!-- reservation-information -->