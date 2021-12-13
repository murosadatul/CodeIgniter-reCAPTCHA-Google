<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('form_validation','session');
    }
    
    public function index()
    {
        //https://www.google.com/recaptcha/admin
        $data['sitekey']   = '';
        $this->load->view('view_login',$data);
    }
    
    public function validation()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if(empty($username))
        {
            $response = ['status'=>'danger','message'=>'Please Fill Username.']; 
        }
        else if(empty($password)) 
        {
            $response = ['status'=>'danger','message'=>'Please Fill Password.'];
        }
        else
        {
            
            $captcha_response = trim($this->input->post('g-recaptcha-response'));

            if($captcha_response != '')
            {
                $keySecret = ''; 

                $check = array(
                        'secret'		=>	$keySecret,
                        'response'		=>	$this->input->post('g-recaptcha-response')
                );

                $startProcess = curl_init();

                curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

                curl_setopt($startProcess, CURLOPT_POST, true);

                curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

                curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

                curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

                $receiveData = curl_exec($startProcess);

                $finalResponse = json_decode($receiveData, true);

                if($finalResponse['success'])
                {
                    // make user login validation here
                }
                else
                {
                    $response = ['status'=>'danger','message'=>'reCAPTCHA Validation Failed.']; 
                }
            }
            else
            {
                    $response = ['status'=>'danger','message'=>'Please Fill in reCAPTCHA., Please Try Again.']; 
            }
        }
        $this->session->set_flashdata('message', $response);
        $this->session->set_flashdata('username', $username);
        redirect('login');
    }
    
}
/* End of file ${TM_FILENAME:${1/(.+)/Login.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Login/:application/controllers/${1/(.+)/Login.php/}} */






