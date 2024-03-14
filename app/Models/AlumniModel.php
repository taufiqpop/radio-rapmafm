<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{
    protected $table            = 'alumni';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'tahun', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('alumni')->like('value', $keyword)->orLike('tahun', $keyword);
    }

    public function jumlahAlumni()
    {
        return $this->table('alumni')->get()->getNumRows();
    }
}
