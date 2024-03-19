<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyiarModel extends Model
{
    protected $table            = 'penyiar';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
