<?php

namespace App\Models;

use CodeIgniter\Model;

class UmumModel extends Model
{
    protected $table            = 'umum';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('umum')->like('value', $keyword);
    }

    public function jumlahUmum()
    {
        return $this->table('umum')->get()->getNumRows();
    }
}
