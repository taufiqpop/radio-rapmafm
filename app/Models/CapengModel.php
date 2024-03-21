<?php

namespace App\Models;

use CodeIgniter\Model;

class CapengModel extends Model
{
    protected $table            = 'capeng';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('capeng')->like('value', $keyword);
    }

    public function jumlahCapeng()
    {
        return $this->table('capeng')->get()->getNumRows();
    }
}
