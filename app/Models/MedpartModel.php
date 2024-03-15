<?php

namespace App\Models;

use CodeIgniter\Model;

class MedpartModel extends Model
{
    protected $table            = 'medpart';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('medpart')->like('value', $keyword);
    }

    public function jumlahMedpart()
    {
        return $this->table('medpart')->get()->getNumRows();
    }
}
