<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    use HasFactory;
    protected $table = 'places';

    protected $fillable = ['regency_id','category_id','name','images'];

    public function regencies()
    {
        return $this->belongsTo(Regencies::class, 'regency_id');
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function details()
    {
        return $this->hasOne(Places_detail::class);
    }
  
}
