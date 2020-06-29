<?php
class Backup_db extends CI_Controller
{
    public function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/v_backup_db');
        $this->load->view('admin/footer');
    }
    function backup(){
        // Load Clas Utilitas Database
        $this->load->dbutil();
 
        // nyiapin aturan untuk file backup
        $aturan = array(    
                'format'      => 'zip',            
                'filename'    => 'toko-fivem.sql'
              );
 
 
        $backup =& $this->dbutil->backup($aturan);
 
        $nama_database = 'DB_Toko-fivem_Backup'.'.zip';
        $simpan = '/backup'.$nama_database;
 
        $this->load->helper('file');
        write_file($simpan, $backup);
 
 
        $this->load->helper('download');
        force_download($nama_database, $backup); 
    }
}