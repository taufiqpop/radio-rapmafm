<?php

namespace App\Models;

use CodeIgniter\Model;

class AudiosModel extends Model
{
    protected $table            = 'audios';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'type', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('audios')->like('value', $keyword)->orLike('type', $keyword);
    }

    public function jumlahAudios()
    {
        return $this->table('audios')->get()->getNumRows();
    }
}
