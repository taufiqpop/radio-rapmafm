<?php

namespace App\Models;

use CodeIgniter\Model;

class AchievementsModel extends Model
{
    protected $table            = 'achievements';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'tahun', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('achievements')->like('value', $keyword)->orLike('tahun', $keyword);
    }

    public function jumlahAchievements()
    {
        return $this->table('achievements')->get()->getNumRows();
    }
}
