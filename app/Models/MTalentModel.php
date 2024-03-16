<?php

namespace App\Models;

use CodeIgniter\Model;

class MTalentModel extends Model
{
    protected $table            = 'mtalent';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('mtalent')->like('value', $keyword);
    }

    public function jumlahMTalent()
    {
        return $this->table('mtalent')->get()->getNumRows();
    }
}
