<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    protected $table = "listings";
    protected $fillable = [
        'name', 'address', 'email','phone','bio','website','user_id','created_at','updated_at'
    ];
    protected $hidden =['created_at','updated_at'];
    public $timestamps = true;

    public function user(){
        
        return $this -> belongsTo('App\User','user_id');
    }
}
