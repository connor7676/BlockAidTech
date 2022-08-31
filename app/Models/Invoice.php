<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'address',
        'price',
        'status',
        'user_id',
    ];

    public function users()
    {
        // return $this->belongsToMany(User::class,'invoice_user','invoice_id','user_id');
        return $this->belongsTo(User::class);
    }
}
