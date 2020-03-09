<?php
// berikut adalah baris kode yang mencegah akses langsung pada controller
defined('BASEPATH') OR exit('No direct script access allowed');
//  berikut ini adalah controller yang menerapkan sub download file pada bkpm
class Download extends CI_Controller {
	// function ini adallah function yang akan di jalankan pertama kali dan otomatis di jalankan
	function __construct(){
		parent::__construct();
		// Function untuk memanggil helper
		$this->load->helper(array('url','download'));				
	}
	//ini adalah method yang akan diakses saat controller ini diakses tanpa menyertakan method  
	public function index(){		
		$this->load->view('v_download');
	}
	// method yang di jalankan ketika link gambar di klik
	public function lakukan_download(){	
		//method yang akan memungkinkan pengguna mengunduh gambar yang di unduh
        force_download('gambar/merah_putih.png',NULL);
	}	
 
}