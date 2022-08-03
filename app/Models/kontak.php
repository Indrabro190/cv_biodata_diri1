<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    use HasFactory;
    // dibawah ini adalah perintah data yang bisa dirubah saja
    // protected $fillable = ['title', 'category_id', 'slug', 'excerpt', 'body'];
    // dibawah ini adalah perintah data yang tidak boleh dirubah
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
