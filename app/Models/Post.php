<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // table name
    protected $table = 'posts';
    // content
    protected $fillable = [
        'title',
        'body',
    ];
    // primary key
    protected $primaryKey = 'id';
    // timestamps
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
