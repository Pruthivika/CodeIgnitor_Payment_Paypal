<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  Welcome extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->model('payment_mod');
    }
    
    
    public function index(){
        $data = array();
        
        $data['title'] = 'Payment';
        
        //load the list page view
       
        $this->load->view('pay-view');
      
    }


    
    
    /*
     * Add content
     */

     public function add1()
     {
         $paid="paid";

                //prepare post data
            $postData = array(
                'cname' => $this->input->post('cardholder'),
                'cnumber' => $this->input->post('cardnumber'),
                'exp_date' => $this->input->post('date'),
                'digits' => $this->input->post('cvv'),
                'state' => $paid

               
            );



            $this->load->model("Payment_mod");
            $this->Payment_mod->insert($postData);
            //redirect(base_url()."Welcome/index");

            $this->load->view('success');    

         
     }

     public function add2()
     {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('cardnumber' , 'Card Number' ,'required|numeric|max_length[16]|min_length[13]');
        $this->form_validation->set_rules('cvv' , 'CVV / CVC *' ,'required|numeric|exact_length[3]');


        if($this->form_validation->run()==TRUE)
        {
            $paid="paid";

                //prepare post data
            $postData = array
            (
                'cname' => $this->input->post('cardholder'),
                'cnumber' => $this->input->post('cardnumber'),
                'exp_date' => $this->input->post('date'),
                'digits' => $this->input->post('cvv'),
                'state' => $paid
            );



            $this->load->model("Payment_mod");
            $suc=$this->Payment_mod->insert($postData);
            //redirect(base_url()."Welcome/index");

            if($suc)
            {
                $this->load->view('success');
            }

            else{
                $this->load->view('payment_error');
            }

            
        }

        else
        {
            $this->load->view('pay-view');
        }       

        

     }


     public function test()
     {
        $this->load->view('payment_error');

     }


    
    
    
    
  
}