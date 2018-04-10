<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'nama' => "Nabila Nurfajrina",
            'alamat' => "Prambon Nganjuk",
            'email' => "nabilafajrina9898@gmail.com"
        );

        $data["tugas"] = array('Ngoding', 'Nyuci', 'bobo siang');
        $this->load->view('home', $data);
        
    }

}

/* End of file Controllername.php */
?>