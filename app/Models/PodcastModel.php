<?php

namespace App\Models;

use CodeIgniter\Model;

class PodcastModel extends Model
{
    protected $table            = 'podcast';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'tahun', 'program', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('podcast')->like('value', $keyword)->orLike('tahun', $keyword)->orLike('program', $keyword);
    }

    public function jumlahPodcast()
    {
        return $this->table('podcast')->get()->getNumRows();
    }
}
