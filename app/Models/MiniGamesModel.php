<?php

namespace App\Models;

use CodeIgniter\Model;

class MiniGamesModel extends Model
{
    protected $table            = 'minigames';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('minigames')->like('value', $keyword);
    }

    public function jumlahMiniGames()
    {
        return $this->table('minigames')->get()->getNumRows();
    }
}
