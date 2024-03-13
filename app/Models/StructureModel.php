<?php

namespace App\Models;

use CodeIgniter\Model;

class StructureModel extends Model
{
    protected $table            = 'structure';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('structure')->like('value', $keyword);
    }
}
