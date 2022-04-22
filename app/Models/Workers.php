<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;

    protected $fillable = ['contacts_id', 'name', 'email', 'phone'];

    public function contacts()
    {
        return $this->belongsTo(Contact::class, 'contacts_id');
    }
}
