<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class hmgroup extends CI_Controller {
    private $cnfg = NULL;
    
    function __construct()
    {
        parent::__construct();
        $this->cnfg = ini_cnfg::parse();        
    }
    
    public function inicio(){ 
        $this->load->helper('form');
		
        if ($this->input->post()){
            $this->contactanos();
        }
        
        $infoHotels = array();
        foreach ($this->data->all_info() as $key => $value) {
            $infoHotels[$value->contacto] = $key;
        }
        $data['content'] = $this->load->view('index',array('data' => $this->data->gallery_pics(),'infoHotels' => $infoHotels),TRUE);
        $this->load->view('master',$data);
    }
    
    public function nuestro_hotel(){  
        if ($cnfg->general['environment'] != 'development') $this->output->cache(1440);	
        $data['content'] = $this->load->view('nuestro_hotel',array('data' => $this->data->all_info()),TRUE);
        $this->load->view('master',$data);
    }
       
    public function habitaciones_y_tarifas($hotel = NULL){
        if ($this->cnfg->general['environment'] != 'development') $this->output->cache(1440);
        if (!$hotel){        
            $data['content'] = $this->load->view('habitaciones_y_tarifas',array('data' => $this->data->all_info(),'hotel' => $hotel),TRUE);
        } else {
            $data['content'] = $this->load->view('habitaciones_y_tarifas_hotel',array('data' => $this->data->hotel_info($hotel)),TRUE);
        }
        $this->load->view('master',$data);
    }
    
    public function habitaciones_y_tarifas_detalles($hotel = NULL,$tipohabitacion = NULL){        
        if ($this->cnfg->general['environment'] != 'development') $this->output->cache(1440);
        $data['content'] = $this->load->view('habitaciones_y_tarifas_detalles',array('data' => $this->data->detalle_habitacion($hotel, $tipohabitacion)),TRUE);
        $this->load->view('master',$data);
    }
    
    public function galeria_de_imagenes(){
        if ($this->cnfg->general['environment'] != 'development') $this->output->cache(1440);        
        $data['content'] = $this->load->view('galeria_de_imagenes',array('data'=> $this->data->gallery_pics()),TRUE);
        $this->load->view('master',$data);
    }    
    
    public function contactanos($alert_contact = NULL){
        $this->load->helper('form');
        $_msg = NULL;        
        if ($this->input->post()){            
            $response = $this->contact($_msg);   			
            if ($response){
                redirect("hmgroup/contactanos/enviado");
            }
        }        
        $infoHotels = array();
        foreach ($this->data->all_info() as $key => $value) {
            $infoHotels[$value->contacto] = $key;
        }            
        $data['content'] = $this->load->view('contactanos',array('infoHotels' => $infoHotels, 'setselect' => $this->input->post('contact_hotel'), 'flashSuccess' => $_msg, 'alert_contact' => $alert_contact,'data' => $this->data->all_info()),TRUE);
        $this->load->view('master',$data);
    }    
    
    private function contact(&$_msg){  
        $response = FALSE;
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', ' El dato es requerido');
        $this->form_validation->set_message('numeric', ' El dato sólo debe contener números');
        $this->form_validation->set_message('max_length','El dato supera el límite de caracteres permitidos');
        $this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-exclamation-triangle"></i><span style="color: red;">','</span></div>');
        $this->form_validation->set_rules('contact_name', 'Nombre',                 'trim|required|max_length[100]|xss_clean');
        $this->form_validation->set_rules('contact_email', 'Correo electrónico',    'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('contact_phone', 'Teléfono',              'trim|numeric|max_length[12]|xss_clean');
        $this->form_validation->set_rules('contact_message', 'Mensaje',             'trim|required|max_length['.LENGTHLEYENDA.']|xss_clean');
        if ( $this->form_validation->run() ) {            
            
            $this->load->spark('restclient/2.1.0');
            $this->load->library('rest');
            $this->rest->initialize(array('server' => 'https://www.google.com/','ssl_verify_peer' => FALSE));

            $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));            
            $userIp=$this->input->ip_address();
            $secret=RECAPTCHA_SECRETKEY;
            
            $captcha_response = $this->rest->get("recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp);            
            if($captcha_response->success){
                $this->load->library('sendmail');
                $to = $this->input->post('contact_hotel');
                $nombre = $this->input->post('contact_name');
                $email = $this->input->post('contact_email');
                $tel = $this->input->post('contact_phone');
                $msg = $this->input->post('contact_message');
                $structure = "<h2>{$nombre}</h2><br/>Correo: {$email} - Teléfono: {$tel}<hr><br>$msg";                        
                
//                $to = 'askmeyou15@hotmail.com';
                
                $response = sendmail::Gmail( $to, $structure);            
                log_message('info', $response);
                $response = TRUE;
            }else{
                $_msg = 'reCAPTCHA incorrecto';
            }
        }
        return $response;
    }    
    
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */