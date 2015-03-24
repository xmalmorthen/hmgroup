<?php defined('BASEPATH') OR exit('No direct script access allowed');
class tipo_habitaciones_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function tipohabitacion($tipohabitacion){
        $data = NULL;
        switch ($tipohabitacion) {
            case 'city':
                $data['title'] = "Habitación City";                
                $data['gallery'][0] = base_url(PATH_TO_GALLERY . "montroi/city/3.jpg");
                $data['gallery'][1] = base_url(PATH_TO_GALLERY . "montroi/city/3.jpg");                    
            break;        
            case 'express_tipo1':
                $data['title'] = "Habitación Express tipo 1";                
                $data['gallery'][0] = base_url(PATH_TO_GALLERY . "montroi/express/3.jpg");
                $data['gallery'][1] = base_url(PATH_TO_GALLERY . "montroi/express/3.jpg");                    
            break;
            case 'express_tipo2':
                $data['title'] = "Habitación Express tipo 2";                
                $data['gallery'][0] = base_url(PATH_TO_GALLERY . "montroi/express/2.jpg");
                $data['gallery'][1] = base_url(PATH_TO_GALLERY . "montroi/express/2.jpg");                    
            break;
            case 'hmhotel_tipo1':
                $data['title'] = "Habitación hmhotel";                
                $data['gallery'][0] = base_url(PATH_TO_GALLERY . "hmhotel/2.jpg");
                $data['gallery'][1] = base_url(PATH_TO_GALLERY . "hmhotel/2.jpg");
            break;
        }
        return $data;
    }
}
