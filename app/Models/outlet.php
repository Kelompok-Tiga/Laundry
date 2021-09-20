<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outlet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'tlp',
    ];
    protected $table = 'outlets';

    // protected $guarded = [];
    public function Users()
    {
        return $this->hasMany('App\Models\User');
    }       
    public function Pakets()
    {
        return $this->hasMany('App\Models\Paket');
    }       
}
