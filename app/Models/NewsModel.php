<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table            = 'news';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'tahun', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('news')->like('value', $keyword)->orLike('tahun', $keyword);
    }

    public function jumlahNews()
    {
        return $this->table('news')->get()->getNumRows();
    }
}
