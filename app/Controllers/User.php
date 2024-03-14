<?php

namespace App\Controllers;

class User extends BaseController
{
    protected $achievementsModel;
    protected $eventsModel;
    protected $programModel;
    protected $usersModel;
    protected $pesanModel;

    public function __construct()
    {
        $this->achievementsModel = new \App\Models\AchievementsModel();
        $this->eventsModel       = new \App\Models\EventsModel();
        $this->programModel      = new \App\Models\ProgramModel();
        $this->usersModel        = new \App\Models\UsersModel();
        $this->pesanModel        = new \App\Models\PesanModel();
    }

    // Dashboard
    public function index()
    {
        $data = [
            'title'             => 'Rapma FM | Dashboard',
            'jmlAchievements'   => $this->achievementsModel->jumlahAchievements(),
            'jmlEvents'         => $this->eventsModel->jumlahEvents(),
            'jmlProgram'        => $this->programModel->jumlahProgram(),
            'jmlUsers'          => $this->usersModel->jumlahUsers(),
            'jmlPesan'          => $this->pesanModel->jumlahPesan(),
        ];

        return view('user/index', $data);
    }

    // My Profile
    public function profile($id)
    {
        $data = [
            'title' => 'Rapma FM| My Profile',
            'users' => $this->usersModel->findAll(),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
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

        $this->usersModel->save([
            'id'            => $id,
            'email'         => $this->request->getVar('email'),
            'username'      => $this->request->getVar('username'),
            'fullname'      => $this->request->getVar('fullname'),
            'user_image'    => $namaImgUser,
        ]);

        session()->setFlashdata('pesan', 'Data User Berhasil Diubah!');

        return redirect('admin');
    }
}
