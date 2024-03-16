<?php

namespace App\Models;

use CodeIgniter\Model;

class MagangInternalModel extends Model
{
    protected $table            = 'maganginternal';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('maganginternal')->like('value', $keyword);
    }

    public function jumlahMagangInternal()
    {
        return $this->table('maganginternal')->get()->getNumRows();
    }
}
