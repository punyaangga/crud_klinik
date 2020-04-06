<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class M_kelolaDataDokter extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }
    public function cariOrang(){
        $cari = $this->input->GET('cari',TRUE);
        $data = $this->db->query("SELECT * FROM dokter Where namaDokter like '%$cari%' ");
        return $data->result();
    }
    public function simpan($data){
        
    }

    public function tampilDataDokter()
    {
        
        $query = $this->db->get('dokter');
        return $query;
    }
    public function editDataDokter($idDokter)
    {
    	$query = $this->db->get_where('dokter',array('idDokter'=>$idDokter));
    	return $query;
    }
    public function update($idDokter, $data)
	{
		$this->db->update('dokter',$data, array('idDokter' => $idDokter));
	}
	public function hapus($id)
    {
    
    }

}
?>