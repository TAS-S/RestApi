<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'NIP', 'address', 'city', 'zip_code'];

    public function workers()
    {
        return $this->hasMany(Workers::class);
    }
}
