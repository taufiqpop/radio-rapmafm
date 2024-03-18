<?php

namespace App\Models;

use CodeIgniter\Model;

class GMPAModel extends Model
{
    protected $table            = 'gmpa';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('gmpa')->like('value', $keyword);
    }

    public function jumlahGMPA()
    {
        return $this->table('gmpa')->get()->getNumRows();
    }
}
