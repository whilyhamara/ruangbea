<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->ion_auth->logged_in()){
			redirect('auth');
		}
        else 
  //       if ( !$this->ion_auth->is_admin() && !$this->ion_auth->in_group('dosen') )
  //       {
		// 	show_error('Hanya Administrator Kunam dan dosen yang diberi hak untuk mengakses halaman ini, <a href="'.base_url('dashboard').'">Kembali ke menu awal</a>', 403, 'Akses Terlarang');
		// }
		$this->load->library(['datatables', 'form_validation']);// Load Library Ignited-Datatables
		$this->load->helper('my');// Load Library Ignited-Datatables
		$this->load->model('Master_model', 'master');
		$this->load->model('Materi_model', 'materi');
		$this->form_validation->set_error_delimiters('','');
	}

	public function output_json($data, $encode = true)
	{
        if($encode) $data = json_encode($data);
        $this->output->set_content_type('application/json')->set_output($data);
    }

    public function index()
	{
        $user = $this->ion_auth->user()->row();
		$data = [
			'user' => $user,
			'judul'	=> 'Materi',
			'subjudul'=> 'Materi Manajemen'
        ];
        
        if($this->ion_auth->logged_in()){
            //Jika admin maka tampilkan semua matkul
            $data['matkul'] = $this->master->getAllMatkul();
        }else{
            //Jika bukan maka matkul dipilih otomatis sesuai matkul dosen
            $data['matkul'] = $this->materi->getMatkulDosen($user->username);
        }

		$this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('materi/data');
		$this->load->view('_templates/dashboard/_footer.php');
    }
    
    public function detail($id)
    {
        $user = $this->ion_auth->user()->row();
		$data = [
			'user'      => $user,
			'judul'	    => 'Materi',
            'subjudul'  => 'Edit Materi',
            'materi'      => $this->materi->getMateriById($id),
        ];

        $this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('Materi/detail');
		$this->load->view('_templates/dashboard/_footer.php');
    }
    
    public function add()
	{
        $user = $this->ion_auth->user()->row();
		$data = [
			'user'      => $user,
			'judul'	    => 'Materi',
            'subjudul'  => 'Buat Materi'
        ];

        if($this->ion_auth->logged_in()){
            //Jika admin maka tampilkan semua matkul
            // $data['dosen'] = $this->materi->getAllDosen();
            $data['matkul'] = $this->materi->getAllMatkul();
        }else{
            //Jika bukan maka matkul dipilih otomatis sesuai matkul dosen
            // $data['dosen'] = $this->materi->getMatkulDosen($user->username);
            $data['matkul'] = $this->materi->getAllMatkul();
        }

		$this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('materi/add');
		$this->load->view('_templates/dashboard/_footer.php');
    }

    public function edit($id)
	{
		$user = $this->ion_auth->user()->row();
		$data = [
			'user'      => $user,
			'judul'	    => 'Materi',
            'subjudul'  => 'Edit Materi',
            'materi'      => $this->materi->getMateriById($id),
        ];
        
        if($this->ion_auth->logged_in()){
            //Jika admin maka tampilkan semua matkul
            $data['dosen'] = $this->materi->getAllDosen();
        }else{
            //Jika bukan maka matkul dipilih otomatis sesuai matkul dosen
            $data['dosen'] = $this->materi->getMatkulDosen($user->username);
        }

		$this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('materi/edit');
		$this->load->view('_templates/dashboard/_footer.php');
	}

	public function data($id=null)
	{
		$this->output_json($this->materi->getDataMateri($id), false);
    }

    public function validasi()
    {
        if($this->ion_auth->is_admin()){
            $this->form_validation->set_rules('dosen_id', 'Dosen', 'required');
        }
        $this->form_validation->set_rules('judul_materi', 'judul materi', 'required');
        $this->form_validation->set_rules('isi_materi', 'isi_materi', 'required');
        // $this->form_validation->set_rules('jawaban_b', 'Jawaban B', 'required');
        // $this->form_validation->set_rules('jawaban_c', 'Jawaban C', 'required');
        // $this->form_validation->set_rules('jawaban_d', 'Jawaban D', 'required');
        // $this->form_validation->set_rules('jawaban_e', 'Jawaban E', 'required');
        $this->form_validation->set_rules('isi_materi', 'Isi Materi', 'required');
        // $this->form_validation->set_rules('bobot', 'Bobot Soal', 'required|max_length[2]');
    }

    public function file_config()
    {
        $allowed_type 	= [
            "image/jpeg", "image/jpg", "image/png", "image/gif",
            "audio/mpeg", "audio/mpg", "audio/mpeg3", "audio/mp3", "audio/x-wav", "audio/wave", "audio/wav",
            "video/mp4", "application/octet-stream"
        ];
        $config['upload_path']      = FCPATH.'uploads/bank_soal/';
        $config['allowed_types']    = 'jpeg|jpg|png|gif|mpeg|mpg|mpeg3|mp3|wav|wave|mp4';
        $config['encrypt_name']     = TRUE;
        
        return $this->load->library('upload', $config);
    }
    
    public function save()
    {
        $method = $this->input->post('method', true);
        $this->validasi();
        $this->file_config();
        if($this->form_validation->run() === FALSE){
            $method==='add'? $this->add() : $this->edit();
        }else{
            $data = [
                'judul_materi' => $this->input->post('judul_materi', true),
                'isi_materi'   => $this->input->post('isi_materi', true),
                // 'bobot'     => $this->input->post('bobot', true),
            ];
            
            // $abjad = ['a'];
            
            // // Inputan Opsi
            // foreach ($abjad as $abj) {
            //     $data['isi_materi'.$abj]    = $this->input->post('judul_materi'.$abj, true);
            // }

            // $i = 0;
            // foreach ($_FILES as $key => $val) {
            //     $img_src = FCPATH.'uploads/bank_soal/';
            //     $getmateri = $this->materi->getMateriById($this->input->post('id_materi', true));
                
            //     $error = '';
            //     if($key === 'file_materi'){
            //         if(!empty($_FILES['file_materi']['name'])){
            //             if (!$this->upload->do_upload('file_materi')){
            //                 $error = $this->upload->display_errors();
            //                 show_error($error, 500, 'File Materi Error');
            //                 exit();
            //             }else{
            //                 if($method === 'edit'){
            //                     if(!unlink($img_src.$getsoal->file)){
            //                         show_error('Error saat delete gambar <br/>'.var_dump($getsoal), 500, 'Error Edit Gambar');
            //                         exit();
            //                     }
            //                 }
            //                 $data['file'] = $this->upload->data('file_name');
            //                 $data['tipe_file'] = $this->upload->data('file_type');
            //             }
            //         }
            //     }else{
            //         $file_abj = 'file_'.$abjad[$i];
            //         if(!empty($_FILES[$file_abj]['name'])){    
            //             if (!$this->upload->do_upload($key)){
            //                 $error = $this->upload->display_errors();
            //                 show_error($error, 500, 'File Opsi '.strtoupper($abjad[$i]).' Error');
            //                 exit();
            //             }else{
            //                 if($method === 'edit'){
            //                     if(!unlink($img_src.$getmateri->$file_abj)){
            //                         show_error('Error saat delete gambar', 500, 'Error Edit Gambar');
            //                         exit();
            //                     }
            //                 }
            //                 $data[$file_abj] = $this->upload->data('file_name');
            //             }
            //         }
            //         $i++;
            //     }
            // }
                
            if($this->ion_auth->logged_in()){
                //$pecah = $this->input->post('dosen_id', true);
                // $data['dosen_id'] = 1;
                $data['matkul_id'] = $this->input->post('matkul_id', true);
            }else{
                // $data['dosen_id'] = $this->input->post('dosen_id', true);
                $data['matkul_id'] = $this->input->post('matkul_id', true);
            }

            if($method==='add'){
                //push array
                $data['created_on'] = time();
                $data['update_on'] = time();
                //insert data
                $this->master->create('tb_materi', $data);
            }else if($method==='edit'){
                //push array
                $data['update_on'] = time();
                //update data
                $id_materi = $this->input->post('id_materi', true);
                $this->master->update('tb_materi', $data, 'id_materi', $id_materi);
            }else{
                show_error('Method tidak diketahui', 404);
            }
            redirect('materi');
        }
    }

    public function delete()
    {
        $chk = $this->input->post('checked', true);
        
        // Delete File
        foreach($chk as $id){
            $abjad = ['a'];
            $path = FCPATH.'uploads/bank_soal/';
            $materi = $this->materi->getMateriById($id);
            // Hapus File Soal
            if(!empty($materi->file)){
                if(file_exists($path.$materi->file)){
                    unlink($path.$materi->file);
                }
            }
            //Hapus File Opsi
            $i = 0; //index
            foreach ($abjad as $abj) {
                $file_opsi = 'file_'.$abj;
                if(!empty($materi->$file_opsi)){
                    if(file_exists($path.$materi->$file_opsi)){
                        unlink($path.$materi->$file_opsi);
                    }
                }
            }
        }

        if(!$chk){
            $this->output_json(['status'=>false]);
        }else{
            if($this->master->delete('tb_materi', $chk, 'id_materi')){
                $this->output_json(['status'=>true, 'total'=>count($chk)]);
            }
        }
    }
}