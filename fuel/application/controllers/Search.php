<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Search
 *
 * @author dhar
 */
class Search extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->load->library("security");
        $this->load->helper('form');
    }
    function index()
    {
        echo "ya its me";exit;
        die('--------------');
    }
}
