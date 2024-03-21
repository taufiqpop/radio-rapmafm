<?php

namespace App\Models;

use CodeIgniter\Model;

class KontenModel extends Model
{
    protected $table            = 'konten';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('konten')->like('value', $keyword);
    }

    public function jumlahKonten()
    {
        return $this->table('konten')->get()->getNumRows();
    }
}
