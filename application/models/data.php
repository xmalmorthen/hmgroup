<?php defined('BASEPATH') OR exit('No direct script access allowed');
class data extends CI_Model{
    
    private $info = NULL;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('file');
        
        if (file_exists(INFO_JSON)) {
            $json = read_file(INFO_JSON);
            if (strlen($json) > 0) {
                $this->info = json_decode($json);
            }
        } else {
            show_error("No se encontró archivo de información, favor de contactar con el administrador...",500,"Ocurrío un error");
        }        
    }

    public function all_info(){
        return $this->info;        
    }
    
    public function hotel_info($hotel){
        $data = NULL;
        foreach ($this->info as $key => $value) {
            if (strtolower(str_replace(' ','', $key)) == strtolower($hotel)){
                $data[$key] = $value;
                break;
            }
        }
        return $data;
    }
        
    public function gallery_pics($hotel = NULL){
        $data = NULL;
        if (!$hotel){
            foreach ($this->info as $key => $value) {
                $data[$key] = $value->galeria;
            }
        } else {
            $data[$hotel] = $this->info->$hotel->galeria;
        }
        return $data;
    }
    
    public function detalle_habitacion($hotel,$tipohabitacion){
        $detalle = NULL;
        $data = $this->hotel_info($hotel);        
        foreach ($data as $key => $value) {
            foreach ($value->habitaciones as $habitacion => $value) {
                $_hotel = explode('_', $tipohabitacion);
                $cat = '';
                for ($i = 1; $i < count($_hotel); $i++) {
                    $cat .= $_hotel[$i] . ' ';
                }                
                if (trim($cat) == strtolower($habitacion)){
                    $detalle = (array)$value;
                    $detalle['title'] = 'Habitación ' . $habitacion;
                }
            }
        }
        return $detalle;
    }
}
