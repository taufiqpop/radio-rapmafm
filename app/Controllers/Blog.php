<?php

namespace App\Controllers;

class Blog extends BaseController
{
    protected $blogModel;

    public function __construct()
    {
        $this->blogModel = new \App\Models\BlogModel();
    }

    // List Blog
    public function index()
    {
        $currentPage = $this->request->getVar('page_blog') ? $this->request->getVar('page_blog') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $blog = $this->blogModel->search($keyword);
        } else {
            $blog = $this->blogModel;
        }

        $blog->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Blog',
            'blog'          => $blog->paginate(10, 'blog'),
            'pager'         => $blog->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/kepenyiaran/blog/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Blog',
        ];

        return view('control/kepenyiaran/blog/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'judul'      => $this->request->getPost('judul'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'link'       => $this->request->getPost('link'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
        ];

        $this->blogModel->insert($data);
        session()->setFlashdata('pesan', 'Data Blog Berhasil Ditambahkan!');

        return redirect('control/blog');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Blog',
            'blog'          => $this->blogModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('blog');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['blog'] = $query->getResultArray();

        return view('control/kepenyiaran/blog/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'judul'      => $this->request->getPost('judul'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'link'       => $this->request->getPost('link'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
        ];

        $this->blogModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Blog Berhasil Diubah!');

        return redirect('control/blog');
    }

    // Delete Data
    public function delete($id)
    {
        $this->blogModel->delete($id);
        session()->setFlashdata('pesan', 'Data Blog Berhasil Dihapus!');

        return redirect('control/blog');
    }
}
