<?php

namespace App\Models;

use CodeIgniter\Model;

class InfografisModel extends Model
{
    protected $table            = 'infografis';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('infografis')->like('value', $keyword);
    }

    public function jumlahInfografis()
    {
        return $this->table('infografis')->get()->getNumRows();
    }
}
