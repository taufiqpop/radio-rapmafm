<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaWebModel extends Model
{
    protected $table            = 'beritaweb';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('beritaweb')->like('value', $keyword);
    }

    public function jumlahBeritaWeb()
    {
        return $this->table('beritaweb')->get()->getNumRows();
    }
}
