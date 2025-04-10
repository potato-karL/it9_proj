<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'username',
        'password',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
