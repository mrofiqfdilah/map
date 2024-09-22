<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regencies extends Model
{
    use HasFactory;
    protected $table = 'regencies';

    protected $fillable = ['province_id','name', 'cover'];

    public function provincies()
    {
        return $this->belongsTo(Provincies::class, 'province_id');
    }

    public function places()
    {
        return $this->hasMany(Places::class);
    }
}
