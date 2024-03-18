<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonaliaModel extends Model
{
    protected $table            = 'personalia';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('personalia')->like('value', $keyword);
    }

    public function jumlahPersonalia()
    {
        return $this->table('personalia')->get()->getNumRows();
    }
}
