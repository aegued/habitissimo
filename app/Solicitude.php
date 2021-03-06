<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    protected $fillable = ['title','description','category','subcategory','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
