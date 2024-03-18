<?php

namespace App\Models;

use CodeIgniter\Model;

class KepenyiaranModel extends Model
{
    protected $table            = 'kepenyiaran';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('kepenyiaran')->like('value', $keyword);
    }

    public function jumlahKepenyiaran()
    {
        return $this->table('kepenyiaran')->get()->getNumRows();
    }
}
