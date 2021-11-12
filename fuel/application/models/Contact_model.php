<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

    private $encryption_key;

    function __construct() {
        parent::__construct();
        // if(!isset($_SESSION)){session_start();}  
       // $this->load->library('encrypt');
        //$this->encryption_key = $this->config->item('encryption_key');
        $this->load->database();
    }

    function save_contact($data) {

        $this->db->insert("fuel_contactus", $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    public function getPageDetails($page_id) {
        $conditions = "page_id = '" . $page_id . "'";
        $this->db->select('*');
        $this->db->from('fuel_page_variables');
        $this->db->where($conditions);
        $query = $this->db->get();
        //echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            $res = $query->result_array();
            return $res;
        } else {

            return array();
        }
    }
    
   function search_index($pages) {
        $data = array();

        foreach ($pages as $loc => $pg) {

            if (!in_array($loc, array("#", ""))) {
                //  die("----3");	
                $data_row = array();
                $data_row['page_location'] = $loc;
                $data_row['date_added'] = date("Y-m-d H:i:s");
                $data_row['name'] = $pg->name;
                 
                try {
                    $content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $this->crowl($loc));
                    $dom = new DOMDocument;                          // init new DOMDocument
                    @$dom->loadHTML($content);
                } catch (Exception $ex) {
                  // echo $loc."<br>";
                }
                
                //die("----2");			
                // load HTML into it
                $rep = $dom->getElementById('menu-top-menu');
                if ($rep != NULL) {
                    $rep->parentNode->removeChild($rep);
                }
                $rep = $dom->getElementById('menu-products');
                if ($rep != NULL) {
                    $rep->parentNode->removeChild($rep);
                }
               /* $rep = $dom->getElementById('menu-footer-menu');
                if ($rep != NULL) {
                    $rep->parentNode->removeChild($rep);
                }*/
                $rep = $dom->getElementById('crumbs');
                if ($rep != NULL) {
                    $rep->parentNode->removeChild($rep);
                }
                $rep = $dom->getElementsByTagName('footer');

                $elements = $dom->getElementsByTagName('form');
                for ($i = $elements->length; --$i >= 0;) {
                    $href = $elements->item($i);
                    $href->parentNode->removeChild($href);
                }
                $elements = $dom->getElementsByTagName('script');
                for ($i = $elements->length; --$i >= 0;) {
                    $href = $elements->item($i);
                    $href->parentNode->removeChild($href);
                }
                $elements = $dom->getElementsByTagName('script');
                for ($i = $elements->length; --$i >= 0;) {
                    $href = $elements->item($i);
                    @$href->parentNode->removeChild($href);
                }
                $xpath = new DomXPath($dom);
                foreach ($xpath->query('//div[contains(attribute::class, "invester_nav")]') as $e) {
                    $e->parentNode->removeChild($e);
                }
                foreach ($xpath->query('//div[contains(attribute::class, "headerstrip")]') as $e) {
                    $e->parentNode->removeChild($e);
                }
                foreach ($xpath->query('//section[contains(attribute::class, "about_header")]') as $e) {
                    $e->parentNode->removeChild($e);
                }
 
                $content = $dom->saveHTML();
           
                $content = strtolower(remove_extra_spacess(strip_tags($content)));

                $data_row['content'] = $content;
                $data[] = $data_row;
                $pages[$loc]->size = strlen($content);
            } else {
                unset($pages[$loc]);
            }
        }
        $this->db->reconnect();
        $this->db->trans_start();
        $this->db->truncate('search_index');
        $this->db->insert_batch('search_index', $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }


        unset($data);
        return $pages;
    }

    function get_all_unique_activ_locations() {
        $all_locations = array();
        $this->db->select('location,label as name')->from('fuel_navigation')
                ->where(array('published' => 'yes'))->order_by('precedence');
        foreach ($this->db->get()->result() as $loc) {
            $all_locations[$loc->location] = $loc;
        }
        $this->db->select('location,pv.value as name')
                ->from('fuel_pages')
                ->join('fuel_page_variables as pv', 'pv.page_id=fuel_pages.id and pv.name="page_title"')
                ->where(array('published' => 'yes'))->order_by('name');
        foreach ($this->db->get()->result() as $loc) {
            $all_locations[$loc->location] = $loc;
        }
        $set = $this->db->select('id,title,Slug')
                        ->from('fuel_posts')
                        ->order_by('id')
                        ->get()->result();
        foreach ($set as $cat) {
            $node = new stdClass();
            $node->name = $cat->title;
            $node->location = 'contact_us/post/'.$cat->Slug;
            $all_locations[$node->location] = $node;
        }
        return $all_locations;
    }

    function crowl($location) {
        $url = base_url($location);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

   

}