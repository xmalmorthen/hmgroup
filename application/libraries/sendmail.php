<?php //defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Autor: Miguel Angel Rueda Aguilar
 * Fecha: 11-03-2015
 * Descripción: Envío de correos
 */

class sendmail {
    public static function Gmail($to,$structure)
    {
        $CI = & get_instance();
        $CI->load->library("email");
 
        $configGmail = array(
            'protocol' => 'sendmail',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => SMTP_USER,
            'smtp_pass' => SMTP_PASS,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );        
 
        $CI->email->initialize($configGmail);
        $CI->email->from(SMTP_USER);
        $CI->email->to($to);
        $CI->email->subject("Contáctanos");
        $CI->email->message($structure);
        $CI->email->send();

        return $CI->email->print_debugger();
    }
    
}
