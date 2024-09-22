<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincies extends Model
{
    use HasFactory;
    protected $table = 'provincies';

    protected $fillable = ['name', 'cover'];

    public function regencies()
    {
        return $this->hasMany(regencies::class);
    }
}
