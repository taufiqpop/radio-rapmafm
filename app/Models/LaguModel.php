<?php

namespace App\Models;

use CodeIgniter\Model;

class LaguModel extends Model
{
    protected $table            = 'lagu';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'tahun', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('lagu')->like('value', $keyword)->orLike('tahun', $keyword);
    }

    public function jumlahLagu()
    {
        return $this->table('lagu')->get()->getNumRows();
    }
}
