<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'salutation',
        'full_name',
        'role'
    ];

    public function department()
    {
        return $this->belongsToMany(Department::class);
    }
}
