<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class grupohm extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        //$this->output->cache(1440);
    }
    
    public function index(){
        
        $data['content'] = $this->load->view('index',NULL,TRUE);
        $this->load->view('master',$data);
    }
    
    public function nuestro_hotel(){
        $data['content'] = $this->load->view('nuestro_hotel',NULL,TRUE);
        $this->load->view('master',$data);
    }
       
    public function habitaciones_y_tarifas($hotel){
        $data['content'] = $this->load->view('habitaciones_y_tarifas',array('tipohotel' => $hotel),TRUE);
        $this->load->view('master',$data);
    }
    
    public function habitaciones_y_tarifas_detalles($tipohabitacion){
        $this->load->model('tipo_habitaciones_model');
        $data['content'] = $this->load->view('habitaciones_y_tarifas_detalles',$this->tipo_habitaciones_model->tipohabitacion($tipohabitacion),TRUE);
        $this->load->view('master',$data);
    }
    
    public function galeria_de_imagenes(){
        $data['content'] = $this->load->view('galeria_de_imagenes',NULL,TRUE);
        $this->load->view('master',$data);
    }    
    
    public function contactanos(){
        $data['content'] = $this->load->view('contactanos',NULL,TRUE);
        $this->load->view('master',$data);
    }    
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */