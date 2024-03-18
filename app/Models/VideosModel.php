<?php

namespace App\Models;

use CodeIgniter\Model;

class VideosModel extends Model
{
    protected $table            = 'videos';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'type', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('videos')->like('value', $keyword)->orLike('type', $keyword);
    }

    public function jumlahVideos()
    {
        return $this->table('videos')->get()->getNumRows();
    }
}
