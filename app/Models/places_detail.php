<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class places_detail extends Model
{
    use HasFactory;
    protected $table = 'places_details';
    protected $fillable = ['place_id','images','description','address','latitude','longitude'];
    
    public function places()
    {
        return $this->belongsTo(Places::class, 'place_id');
    }
}
