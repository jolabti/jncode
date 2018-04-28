<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include Rest Controller library

class V1 extends CI_Controller {


	public function testapi(){
         $var = $this->db->get("jncode_user")->result();
         $arrayName = array('response' => 200, "data" => $var );

         echo json_encode($arrayName);
        // $this->response($this->db->get("jncode")->result(), REST_Controller::HTTP_OK);
	}

}
