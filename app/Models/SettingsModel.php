<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table            = 'settings';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'owner',
        'slogan',
        'nama_mtalent',
        'no_mtalent',
        'nama_medpart',
        'no_medpart',
        'ymail',
        'gmail',
        'alamat',
        'twitter',
        'facebook',
        'instagram',
        'youtube',
        'spotify',
        'whatsapp',
        'blogger',
        'line',
        'tiktok',
        'streaming',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps    = true;
}
