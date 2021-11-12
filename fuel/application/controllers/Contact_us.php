<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_us extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->load->library("security");
        $this->load->helper('form');
    }

    function index()
    {
        $vars=array();
        $vars['page_title'] = 'Search Results';
        $vars['body_class'] = 'search_results';
        $vars['layout'] = 'scarch_results';
        $vars['search_key'] = $this->input->post('key_val');
        if($vars['search_key']!='')
        {
        $vars['search_result']= $this->db->select('page_location,name,'
                . 'IF (
    LOCATE("'.strtolower($vars['search_key']).'", `content`) < 20,
    SUBSTRING(`content`, 1, 200),
    SUBSTRING(`content`, LOCATE("'.strtolower($vars['search_key']).'", `content`) - 20, 400)
)'
                . ' as content',FALSE)
                ->from('search_index')
                ->like('content',strtolower($vars['search_key']))
                ->group_by('page_location')
                ->get()->result();
        }
        else {
             $vars['search_result']=array();
        }
        // echo $this->db->last_query(); 
       //  print_r($vars);
        $this->fuel->pages->render('empty', $vars);
         
       
        
    }
    
 

    public function send() {
          
       
        $this->_contactrules();
        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'name' => $this->input->post('name', TRUE),
                'emailAddress' => $this->input->post('email', TRUE),
                'phoneNumber' => $this->input->post('phone', TRUE),
                'enquiry' => htmlentities($this->input->post('feedback', TRUE)),
                'dateAdded' => date("Y-m-d H:i:s"),
                'ipAddress' => $this->input->ip_address(),
            );

            $a = $this->Contact_model->save_contact($data);

            if ($a > 0) {
                //============================Mail Notification Send==============
                $mailTo = "shamim.btech@gmail.com";

                $mailForm = "shamim.btech@gmail.com";

                $subject = "Enquiry from ORDBA";

                $body = $this->load->view('contact_page_template', $data, TRUE);
//            
            
                
                $config = array();
                $config['useragent']           = "CodeIgniter";
                $config['mailpath']            = "/usr/sbin/sendmail -t -i"; // or "/usr/sbin/sendmail"
                $config['protocol']            = "smtp";
                $config['smtp_host']           = "localhost";
                $config['smtp_port']           = "25";
                $config['mailtype'] = 'html';
                $config['charset']  = 'utf-8';
                $config['newline']  = "\r\n";
                $config['wordwrap'] = TRUE;
        
                $this->load->library('email');
        
                $this->email->initialize($config);
        
                $this->email->from($mailForm, 'ORDBA');
                $this->email->to($mailTo);
                $this->email->subject($subject);
              

                $this->email->message($body);
        
                $this->email->send();
                
                //var_dump( $this->email);exit;
                
                
                //============================Mail Notification Send==============
            }


            $this->session->set_flashdata('message', 'Thank you for contacting us. We will get back to you soon.');
            redirect(site_url('contactus'));
        } else {


            $vars['layout'] = 'contactus';
            $vars['page_title'] = $page_title;
            $vars['caption'] = $caption;
            $vars['banner_img'] = $banner_img;

            $vars['name'] = $this->input->post('name', TRUE);
            $vars['email'] = $this->input->post('email', TRUE);
            $vars['phone'] = $this->input->post('phone', TRUE);
            $vars['feedback'] = html_entity_decode($this->input->post('feedback', TRUE));

            $this->fuel->pages->render('contact_us', $vars);
        }
    }

    public function _contactrules() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone no', 'trim|min_length[10]|numeric');
        $this->form_validation->set_rules('state', 'State', 'trim');
        $this->form_validation->set_rules('feedback', 'Feedback', 'trim|required');
        $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    function stripLineBreaks($encode) {
        $data = str_replace(' ', '+', $encode);
        
        return $data;
    }
 function post($slag)
    {
        if($slag==""){show_404();die();}
        $vars=array();
        
        $vars['content'] =$this->db->select('p.*,pr.Slug as previous,ne.Slug as next')
                ->from('fuel_posts as p')
                ->join('fuel_posts as pr','pr.id=(p.id-1)','left')
                ->join('fuel_posts as ne','ne.id=(p.id+1)','left')
                ->where('p.Slug',trim($slag))
                ->get()->row();
        if(!isset($vars['content']->id)){show_404();die();}
        else{
        $page_ids = explode(',', str_replace(array('[',']','"'), '',$vars['content']->related_posts));
        if(count($page_ids)>0){
            $vars['relateds'] =$this->db->select('title,auther,Slug,content')->from('fuel_posts')
                    ->where_in('id',$page_ids)->limit(4)
                    ->get()
                    ->result();
        }
        
       // print_r($vars['relateds']);
       
        $vars['layout'] = 'innerpages';
        $this->fuel->pages->render('blank', $vars);
        }
    }

 function search_site_reindex($pass_auth)
        {
            if(base64_encode($pass_auth)!=base64_encode('wbsd99')){show_404();}
            else   {
            $vars=array();
            $vars['to_index'] = $this->Contact_model->search_index($this->Contact_model->get_all_unique_activ_locations());
             echo "indexed"; 
            
            }
        }

   function find_site()
    {
       
        $vars=array();
        $vars['page_title'] = 'Search Results';
        $vars['body_class'] = 'search_results';
        $vars['layout'] = 'scarch_results';
        $vars['search_key'] = $this->input->post('key_val');
        $vars['search_result']= $this->db->select('page_location,name,'
                . 'IF (
    LOCATE("'.strtolower($vars['search_key']).'", `content`) < 20,
    SUBSTRING(`content`, 1, 200),
    SUBSTRING(`content`, LOCATE("'.strtolower($vars['search_key']).'", `content`) - 20, 400)
)'
                . ' as content',FALSE)
                ->from('search_index')
                ->like('content',strtolower($vars['search_key']))
                ->group_by('page_location')
                ->get()->result();
        // echo $this->db->last_query(); 
        // print_r($vars);
        $this->fuel->pages->render('empty', $vars);
    }
}
?>