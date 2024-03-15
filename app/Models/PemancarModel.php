<?php

namespace App\Models;

use CodeIgniter\Model;

class PemancarModel extends Model
{
    protected $table            = 'pemancar';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('pemancar')->like('value', $keyword);
    }

    public function jumlahPemancar()
    {
        return $this->table('pemancar')->get()->getNumRows();
    }
}
