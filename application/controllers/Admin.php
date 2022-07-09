<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hitung_siswa'] = $this->db->get('data_siswa')->num_rows();
        $data['hitung_lulus'] = $this->db->get_where('data_siswa', ['status_lulus' => 1])->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function cetaksiswa($id)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;

        $data['siswa'] = $this->db->get_where('data_siswa', ['id_user' => $id])->row_array();
        $data['sekolah'] = $this->db->get_where('data_sekolah', ['id_user' => $id])->row_array();
        $data['ortu'] = $this->db->get_where('data_ortu', ['id_user' => $id])->row_array();

        $ceksiswa = $this->db->get_where('data_siswa', ['id_user' => $id])->num_rows();
        $cekortu = $this->db->get_where('data_ortu', ['id_user' => $id])->num_rows();
        $ceksekolah = $this->db->get_where('data_sekolah', ['id_user' => $id])->num_rows();
        if ($ceksiswa != 1) {
            redirect('admin/lihat/'.$id);
        }else if ($cekortu != 1) {
            redirect('admin/lihat/'.$id);
        }else if ($ceksekolah != 1) {
            redirect('admin/lihat/'.$id);
        }else{
            $this->load->view('admin/cetaksiswa', $data);
        }
    }

    public function verif()
    {
        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;
        $data['data_siswa'] = $this->db->get('data_siswa')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/verif', $data);
        $this->load->view('templates/footer');
    }

    public function caridata()
    {
        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;

        $query = "SELECT * FROM data_siswa where nama_lengkap like '%" . $this->input->post('cari') . "%'";
        $data['cari'] = $this->db->query($query)->result_array();
        $data['hitung'] = $this->db->query($query)->num_rows();
        $data['text'] = $this->input->post('cari');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/caridata', $data);
        $this->load->view('templates/footer');
    }

    public function lihat($id){
        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;
        $data['siswa'] = $this->db->get_where('data_siswa', ['id_user' => $id])->row_array();
        $data['ortu'] = $this->db->get_where('data_ortu', ['id_user' => $id])->row_array();
        $data['cekortu'] = $this->db->get_where('data_ortu', ['id_user' => $id])->num_rows();
        $data['sekolah'] = $this->db->get_where('data_sekolah', ['id_user' => $id])->row_array();
        $data['ceksekolah'] = $this->db->get_where('data_sekolah', ['id_user' => $id])->num_rows();
        $data['berkas'] = $this->db->get_where('data_berkas', ['id_user' => $id])->row_array();
        $data['cekberkas'] = $this->db->get_where('data_berkas', ['id_user' => $id])->num_rows();
        $data['ijazah'] = $this->db->get_where('data_berkas', ['ijazah' => ''])->num_rows();
        $data['kk'] = $this->db->get_where('data_berkas', ['kk' => ''])->num_rows();
        $data['akta'] = $this->db->get_where('data_berkas', ['akta' => ''])->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/lihat', $data);
        $this->load->view('templates/footer');
    }

    public function tambahdata()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahdata', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time(),
            ];

            $this->db->insert('user', $data);

            $this->db->from('user');
            $this->db->order_by('id', 'desc');
            $cek = $this->db->get()->row_array();
            
            redirect('Admin/tambahsiswa/'.$cek['id']);
        }
    }

    public function tambahsiswa($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('anak_ke', 'Anak ke', 'required');
        $this->form_validation->set_rules('jumlah_saudara', 'Jumlah Saudara', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('hobi', 'Hobi', 'required');
        $this->form_validation->set_rules('cita_cita', 'Cita Cita', 'required');
        $this->form_validation->set_rules('jarak_rumah', 'Jarak Rumah', 'required');
        $this->form_validation->set_rules('transportasi', 'Trasportasi', 'required');


        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;
        
        $data['ambil'] = $this->db->get_where('user', ['id' => $id])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahsiswa', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_lengkap' => htmlspecialchars($this->input->post('nama', true)),
                'nisn' => htmlspecialchars($this->input->post('nisn', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'anak_ke' => htmlspecialchars($this->input->post('anak_ke', true)),
                'jumlah_saudara' => htmlspecialchars($this->input->post('jumlah_saudara', true)),
                'agama' => htmlspecialchars($this->input->post('agama', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'hobi' => htmlspecialchars($this->input->post('hobi', true)),
                'cita_cita' => htmlspecialchars($this->input->post('cita_cita', true)),
                'jarak_rumah' => htmlspecialchars($this->input->post('jarak_rumah', true)),
                'transportasi' => htmlspecialchars($this->input->post('transportasi', true)),
                'id_user' => $id,
            ];

            $this->db->insert('data_siswa', $data);

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Siswa Berhasil Ditambahkan!</div>');
            redirect('Admin/verif');
        }
    }

    public function editsiswa($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');


        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;
        $siswa = $this->db->get_where('data_siswa', ['id_siswa' => $id])->row_array();
        $data['siswa'] = $siswa;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editsiswa', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_siswa' => $this->input->post('id'),
                'nama_lengkap' => htmlspecialchars($this->input->post('nama', true)),
                'nisn' => htmlspecialchars($this->input->post('nisn', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
            ];

            $this->db->set($data);
            $this->db->where('id_siswa', $this->input->post('id'));
            $this->db->update('data_siswa');

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Siswa Berhasil diupdate!</div>');
            redirect('Admin/lihat/'. $siswa['id_user']);
        }
    }

    public function tambahortu($id)
    {
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan Ayah', 'required');
        $this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan Ibu', 'required');
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
        $this->form_validation->set_rules('penghasilan', 'Penghasilan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Ortu', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Telp Ortu', 'required|trim');

        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahortu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true)),
                'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu', true)),
                'pendidikan_ayah' => htmlspecialchars($this->input->post('pendidikan_ayah', true)),
                'pendidikan_ibu' => htmlspecialchars($this->input->post('pendidikan_ibu', true)),
                'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaan_ayah', true)),
                'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaan_ibu', true)),
                'penghasilan_perbulan' => htmlspecialchars($this->input->post('penghasilan', true)),
                'alamat_ortu' => htmlspecialchars($this->input->post('alamat', true)),
                'nomor_ortu' => htmlspecialchars($this->input->post('nomor', true)),
                'id_user' => $id,
            ];

            $this->db->insert('data_ortu', $data);

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Orang Tua Berhasil Ditambahkan!</div>');
            redirect('admin/lihat/'. $id);
        }
    }

    public function editortu($id)
    {
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan Ayah', 'required');
        $this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan Ibu', 'required');
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
        $this->form_validation->set_rules('penghasilan', 'Penghasilan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Ortu', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Telp Ortu', 'required|trim');

        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;
        $ortu = $this->db->get_where('data_ortu', ['id_ortu' => $id])->row_array();
        $data['ortu'] = $ortu;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editortu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true)),
                'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu', true)),
                'pendidikan_ayah' => htmlspecialchars($this->input->post('pendidikan_ayah', true)),
                'pendidikan_ibu' => htmlspecialchars($this->input->post('pendidikan_ibu', true)),
                'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaan_ayah', true)),
                'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaan_ibu', true)),
                'penghasilan_perbulan' => htmlspecialchars($this->input->post('penghasilan', true)),
                'alamat_ortu' => htmlspecialchars($this->input->post('alamat', true)),
                'nomor_ortu' => htmlspecialchars($this->input->post('nomor', true)),
            ];

            $this->db->set($data);
            $this->db->where('id_ortu', $id);
            $this->db->update('data_ortu');

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Orang Tua Berhasil Diupdate!</div>');
            redirect('admin/lihat/'. $ortu['id_user']);
        }
    }

    public function tambahsekolah($id)
    {
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'required');
        $this->form_validation->set_rules('status_sekolah', 'Status Sekolah', 'required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
        $this->form_validation->set_rules('nomor_ijazah', 'Nomor Ijazah', 'required');
        $this->form_validation->set_rules('jalur', 'Jalur Pendaftaran', 'required');

        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahsekolah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'asal_sekolah' => htmlspecialchars($this->input->post('asal_sekolah', true)),
                'alamat_sekolah' => htmlspecialchars($this->input->post('alamat_sekolah', true)),
                'status_sekolah' => htmlspecialchars($this->input->post('status_sekolah', true)),
                'tahun_lulus' => htmlspecialchars($this->input->post('tahun_lulus', true)),
                'nomor_ijazah' => htmlspecialchars($this->input->post('nomor_ijazah', true)),
                'jalur_pendaftaran' => htmlspecialchars($this->input->post('jalur', true)),
                'id_user' => $id,
            ];

            $this->db->insert('data_sekolah', $data);

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Sekolah Berhasil Ditambahkan!</div>');
            redirect('admin/lihat/'. $id);
        }
    }

    public function editsekolah($id)
    {
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'required');
        $this->form_validation->set_rules('status_sekolah', 'Status Sekolah', 'required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
        $this->form_validation->set_rules('nomor_ijazah', 'Nomor Ijazah', 'required');
        $this->form_validation->set_rules('jalur', 'Jalur Pendaftaran', 'required');

        $data['title'] = 'Verifikasi Data Siswa';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;
        $sekolah = $this->db->get_where('data_sekolah', ['id_sekolah' => $id])->row_array();
        $data['sekolah'] = $sekolah;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editsekolah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'asal_sekolah' => htmlspecialchars($this->input->post('asal_sekolah', true)),
                'alamat_sekolah' => htmlspecialchars($this->input->post('alamat_sekolah', true)),
                'status_sekolah' => htmlspecialchars($this->input->post('status_sekolah', true)),
                'tahun_lulus' => htmlspecialchars($this->input->post('tahun_lulus', true)),
                'nomor_ijazah' => htmlspecialchars($this->input->post('nomor_ijazah', true)),
                'jalur_pendaftaran' => htmlspecialchars($this->input->post('jalur', true)),
            ];

            $this->db->set($data);
            $this->db->where('id_sekolah', $id);
            $this->db->update('data_sekolah');

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Sekolah Berhasil Diupdate!</div>');
            redirect('admin/lihat/'. $sekolah['id_user']);
        }
    }

    public function setujui($id)
    {
        $data = [
            'status_verif' => 1,
            'status_lulus' => 0,
        ];
        $this->db->set($data);
        $this->db->where('id_siswa', $id);
        $this->db->update('data_siswa');

        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Status Berhasil diubah!</div>');
        redirect('Admin/verif');
    }

    public function batalkan($id)
    {
        $data = [
            'status_verif' => 0,
            'status_lulus' => 0,
        ];
        $this->db->set($data);
        $this->db->where('id_siswa', $id);
        $this->db->update('data_siswa');

        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Status Berhasil diubah!</div>');
        redirect('Admin/verif');
    }

    public function hapusdata($id)
    {
        $where = array('id_user' => $id);
        $where2 = array('id' => $id);
        $this->db->where($where);
        $this->db->delete('data_siswa');
        $this->db->where($where);
        $this->db->delete('data_ortu');
        $this->db->where($where);
        $this->db->delete('data_sekolah');
        $this->db->where($where);
        $this->db->delete('data_berkas');
        $this->db->where($where2);
        $this->db->delete('user');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil dihapus!</div>');
        redirect('Admin/verif');
    }

    public function pengumuman()
    {
        $data['title'] = 'Setting Pengumuman';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;
        $data['data_siswa'] = $this->db->get_where('data_siswa', ['status_verif' => 1])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pengumuman', $data);
        $this->load->view('templates/footer');
    }

    public function lulus($id)
    {
        $data = [
            'status_lulus' => 1,
        ];
        $this->db->set($data);
        $this->db->where('id_siswa', $id);
        $this->db->update('data_siswa');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Status Berhasil diubah!</div>');
        redirect('Admin/pengumuman');
    }

    public function tidaklulus($id)
    {
        $data = [
            'status_lulus' => 0,
        ];
        $this->db->set($data);
        $this->db->where('id_siswa', $id);
        $this->db->update('data_siswa');

        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Status Berhasil diubah!</div>');
        redirect('Admin/pengumuman');
    }

    public function cetak()
    {
        $data['title'] = 'Cetak Laporan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['data_siswa'] = $this->db->get_where('data_siswa', ['status_verif' => 1])->result_array();

        $this->load->view('admin/cetak', $data);
    }

    public function setting()
    {
        $data['title'] = 'Pengaturan';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/setting', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];

            $this->db->set($data);
            $this->db->where('id', $user['id']);
            $this->db->update('user');

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Password Berhasil Diupdate!</div>');
            redirect('admin/verif');
        }
    }

    public function tambahadmin()
	{
        $data['title'] = 'Tambah Admin';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user;

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has already registered! '
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == false) {
            $data['admin'] = $this->db->get_where('user', ['role_id' => 1])->result_array();
			$this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahadmin', $data);
            $this->load->view('templates/footer');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'is_active' => 1,
				'date_created' => time(),
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Akun Admin Berhasil Ditambahkan</div>');
			redirect('admin/verif');
		}
	}
}
