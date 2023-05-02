<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Courses extends Model
{
    use HasFactory;
    // ini kalau nga mau pake konsep prural dan singular
    // protected $table = "artikel";

    

    // ini buat ngasih tau larafel kalau primary key nya ini
    // protected $primaryKey = "artikel_id";
    protected $table ="courses";
    public $timestamps = false;
    // protected $fillable = ['judul_artikel', 'isi', 'gambar'];
    //jika field nya lebih dari 10 maka kita bisa menggunakan teknik seperti 

    // protected $table = 'artikels';
    // protected $primaryKey = 'id';
    // protected $guarded = ['gambar']
    function teacher(){
        // has many adalah one to many
        return $this->belongsTo(Teacher::class,'teacher_id','id');
    }
}