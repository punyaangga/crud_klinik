<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class DataDokter extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->model('M_kelolaDataDokter');
        $this->load->helper('url');
    }
    public function cari(){
    	$this->load->view('data_dokter');
    }
    public function hasil(){
    	$data2['cari'] = $this->M_kelolaDataDokter->cariOrang();
    	$this->load->view('result',$data2);
    }

    
    public function index() //tampil itu index
    {
        $data['query'] = $this->M_kelolaDataDokter->tampilDataDokter();
        $this->load->view('data_dokter', $data);
    }

    public function simpan(){
		$data = array('namaDokter'=>$this->input->post('namaDokter'),'jenisKelamin'=>$this->input->post('jenisKelamin'),'tempatLahir'=>$this->input->post('tempatLahir'),'tglLahir'=>$this->input->post('tglLahir'),'alamat'=>$this->input->post('alamat'),'noTelp'=>$this->input->post('noTelp'),'noIjinPraktek'=>$this->input->post('noIjinPraktek'));
		$proses=$this->M_kelolaDataDokter->simpan($data);
		if (!$proses) {
			header('Location: index');
		} else {
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/DataDokter/index/')."'>Kembali ke form</a>";
		}
	}

    public function edit(){
    	$idDokter=$this->uri->segment(3);
    	$data['query'] = $this->M_kelolaDataDokter->editDataDokter($idDokter);
    	$this->load->view('crud_edit',$data);
    }
    public function update(){

	$idDokter = $this->input->post('idDokter');
	$data = array('namaDokter' => $this->input->post('namaDokter'), 'jenisKelamin' => $this->input->post('jenisKelamin')
		,'tempatLahir' => $this->input->post('tempatLahir'),'tglLahir' => $this->input->post('tglLahir'),
		'alamat' => $this->input->post('alamat'),'noTelp' => $this->input->post('noTelp'),
		'noIjinPraktek' => $this->input->post('noIjinPraktek'));
	
	$proses = $this->M_kelolaDataDokter->update($idDokter, $data);
		if (!$proses) {
			header('Location: index');
		} else {
			echo "Data Gagal Diupdate";
			echo "<br>";
			echo "<a href='".base_url('index.php/DataDokter/index/')."'>Tampil data</a>";
		}
	
	}

	//cari data
	public function search(){
			$keyword = $this->input->post('keyword');
			$this->load->view('search',$data);
	}


	public function hapus()
	{
		$id = $this->uri->segment(3);
		$proses = $this->M_kelolaDataDokter->hapus($id);
	if (!$proses) {
			redirect(base_url('index.php'));
	} else {
		echo "Data Gagal dihapus";
		echo "<br>";
		echo "<a href='".base_url('index.php/tampilDataDokter')."'>Tampil data Dokter</a>";
	}
}
?>