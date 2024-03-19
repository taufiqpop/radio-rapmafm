<?php

namespace App\Controllers;

class User extends BaseController
{
    // Admin
    protected $usersModel;
    protected $pesanModel;

    // GMPA
    protected $gmpaModel;
    protected $suratkeluarModel;
    protected $suratmasukModel;

    // Divisi Umum
    protected $umumModel;
    protected $achievementsModel;
    protected $eventsModel;
    protected $inventarisModel;
    protected $peminjamanModel;

    // Divisi Kepenyiaran
    protected $kepenyiaranModel;
    protected $audiosModel;
    protected $programModel;
    protected $labelrekamanModel;
    protected $laguModel;
    protected $pemutaranserentakModel;
    protected $podcastModel;
    protected $videosModel;

    // Divisi Marketing
    protected $marketingModel;
    protected $dendadlibsModel;
    protected $iklanModel;
    protected $medpartModel;
    protected $mtalentModel;

    // Divisi Personalia
    protected $personaliaModel;
    protected $alumniModel;
    protected $crewModel;
    protected $pengurusModel;
    protected $maganginternalModel;
    protected $workshopbroadcastModel;

    public function __construct()
    {
        // Admin
        $this->usersModel           = new \App\Models\UsersModel();
        $this->pesanModel           = new \App\Models\PesanModel();

        // GMPA
        $this->gmpaModel            = new \App\Models\GMPAModel();
        $this->suratkeluarModel     = new \App\Models\SuratKeluarModel();
        $this->suratmasukModel      = new \App\Models\SuratMasukModel();

        // Divisi Umum
        $this->umumModel            = new \App\Models\UmumModel();
        $this->achievementsModel    = new \App\Models\AchievementsModel();
        $this->eventsModel          = new \App\Models\EventsModel();
        $this->inventarisModel      = new \App\Models\InventarisModel();
        $this->peminjamanModel      = new \App\Models\PeminjamanModel();

        // Divisi Kepenyiaran
        $this->kepenyiaranModel     = new \App\Models\KepenyiaranModel();
        $this->audiosModel          = new \App\Models\AudiosModel();
        $this->programModel         = new \App\Models\ProgramModel();
        $this->labelrekamanModel    = new \App\Models\LabelRekamanModel();
        $this->laguModel            = new \App\Models\LaguModel();
        $this->pemutaranserentakModel = new \App\Models\PemutaranSerentakModel();
        $this->podcastModel         = new \App\Models\PodcastModel();
        $this->videosModel          = new \App\Models\VideosModel();

        // Divisi Marketing
        $this->marketingModel       = new \App\Models\MarketingModel();
        $this->dendadlibsModel      = new \App\Models\DendaAdlibsModel();
        $this->iklanModel           = new \App\Models\IklanModel();
        $this->medpartModel         = new \App\Models\MedpartModel();
        $this->mtalentModel         = new \App\Models\MTalentModel();

        // Divisi Personalia
        $this->personaliaModel      = new \App\Models\PersonaliaModel();
        $this->alumniModel          = new \App\Models\AlumniModel();
        $this->crewModel            = new \App\Models\CrewModel();
        $this->pengurusModel        = new \App\Models\PengurusModel();
        $this->maganginternalModel  = new \App\Models\MagangInternalModel();
        $this->workshopbroadcastModel = new \App\Models\WorkshopBroadcastModel();
    }

    // Dashboard
    public function index()
    {
        $data = [
            'title'                 => 'Rapma FM | Dashboard',

            // Admin
            'jmlUsers'              => $this->usersModel->jumlahUsers(),
            'jmlPesan'              => $this->pesanModel->jumlahPesan(),

            // GMPA
            'jmlGMPA'               => $this->gmpaModel->jumlahGMPA(),
            'jmlSuratKeluar'        => $this->suratkeluarModel->jumlahSuratKeluar(),
            'jmlSuratMasuk'         => $this->suratmasukModel->jumlahSuratMasuk(),


            // Divisi Umum
            'jmlAchievements'       => $this->achievementsModel->jumlahAchievements(),
            'jmlUmum'               => $this->umumModel->jumlahUmum(),
            'jmlEvents'             => $this->eventsModel->jumlahEvents(),
            'jmlInventaris'         => $this->inventarisModel->jumlahInventaris(),
            'jmlPeminjaman'         => $this->peminjamanModel->jumlahPeminjaman(),

            // Divisi Kepenyiaran
            'jmlKepenyiaran'        => $this->kepenyiaranModel->jumlahKepenyiaran(),
            'jmlAudios'             => $this->audiosModel->jumlahAudios(),
            'jmlProgram'            => $this->programModel->jumlahProgram(),
            'jmlLabelRekaman'       => $this->labelrekamanModel->jumlahLabelRekaman(),
            'jmlLagu'               => $this->laguModel->jumlahLagu(),
            'jmlPemutaranSerentak'  => $this->pemutaranserentakModel->jumlahPemutaranSerentak(),
            'jmlPodcast'            => $this->podcastModel->jumlahPodcast(),
            'jmlVidoes'             => $this->videosModel->jumlahVidoes(),

            // Divisi Marketing
            'jmlMarketing'          => $this->marketingModel->jumlahMarketing(),
            'jmlDendaAdlibs'        => $this->dendadlibsModel->jumlahDendaAdlibs(),
            'jmlIklan'              => $this->iklanModel->jumlahIklan(),
            'jmlMedpart'            => $this->medpartModel->jumlahMedpart(),
            'jmlMtalent'            => $this->mtalentModel->jumlahMtalent(),

            // Divisi Personalia
            'jmlPersonalia'         => $this->personaliaModel->jumlahPersonalia(),
            'jmlAlumni'             => $this->alumniModel->jumlahAlumni(),
            'jmlCrew'               => $this->crewModel->jumlahCrew(),
            'jmlPengurus'           => $this->pengurusModel->jumlahPengurus(),
            'jmlMagangInternal'     => $this->maganginternalModel->jumlahMagangInternal(),
            'jmlWorkshopBroadcast'  => $this->workshopbroadcastModel->jumlahWorkshopBroadcast(),

        ];

        return view('user/index', $data);
    }

    // My Profile
    public function profile($id)
    {
        $data = [
            'title' => 'Rapma FM | My Profile',
            'users' => $this->usersModel->findAll(),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name, description');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query   = $builder->get();

        $data['users'] = $query->getResultArray();

        return view('user/profile', $data);
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'Rapma FM | Form Edit Data',
            'users'      => $this->usersModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('id, username, email, fullname, user_image');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['users'] = $query->getResultArray();

        return view('user/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $users = $this->usersModel->find($id);

        // Validasi Input
        if (!$this->validate([
            'images' => [
                'rules' => 'max_size[images,10240]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in'  => 'Yang Anda Pilih Bukan Gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('user/edit')->withInput()->with('validation', $validation);
        }

        $fileImgUser = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($fileImgUser->getError() == 4) {
            $namaImgUser = $this->request->getVar('imgUserLama');
        } else {
            // Generate Nama File Random
            $namaImgUser = $fileImgUser->getRandomName();

            // Pindahkan Gambar
            $fileImgUser->move('img/user', $namaImgUser);

            // Jangan Hapus File default.svg
            if ($users['user_image'] != 'default.svg') {
                unlink('img/user/' . $this->request->getVar('imgUserLama'));
            }
        }

        $data = [
            'email'         => $this->request->getVar('email'),
            'username'      => $this->request->getVar('username'),
            'fullname'      => $this->request->getVar('fullname'),
            'user_image'    => $namaImgUser,
        ];

        $this->usersModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data User Berhasil Diubah!');

        return redirect('admin');
    }
}
