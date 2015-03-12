<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo PAGETITLE; ?></title>

        <!-- font awesome -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(PATH_TO_LIBS . "bootstrap/css/bootstrap.min.css"); ?>" />

        <!-- uniform -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(PATH_TO_LIBS . "uniform/css/uniform.default.min.css"); ?>" />

        <!-- animate.css -->
        <link rel="stylesheet" href="<?php echo base_url(PATH_TO_LIBS . "wow/animate.css"); ?>" />

        <!-- gallery -->
        <link rel="stylesheet" href="<?php echo base_url(PATH_TO_LIBS . "gallery/blueimp-gallery.min.css"); ?>">

        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(PATH_TO_IMAGES_LAYOUT . "favicon.gif"); ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url(PATH_TO_IMAGES_LAYOUT . "favicon.gif"); ?>" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo base_url(PATH_TO_LIBS . "style.css"); ?>">
    </head>
    <body id="inicio">
        <!-- header -->
        <?php echo $this->load->view('header',TRUE);?>
        <!-- header -->
        <!-- content -->
        <?php if (isset($alert_contact) && $alert_contact == 'enviado') { ?>
            <div class="alert alert-info" style="text-align: center;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <h2 style="display: inline; padding-right: 5px;"><strong>Información enviada!</strong></h2> En breve se le dará respuesta a su solicitud.
            </div>
        <?php } ?>
        <?php echo isset($content) ? $content : ''; ?>
        <!-- content -->
        <!-- footer -->
        <?php echo $this->load->view('footer',TRUE);?>
        <!-- footer -->
    </body>
</html>