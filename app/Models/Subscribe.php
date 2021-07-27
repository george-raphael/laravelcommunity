<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'status'
    ];

    /**
     * Register subscriber to the register.
     *
     * @param $email
     */
    function register($email) {
        $this->firstOrCreate([
            'email' => $email
        ]);
    }
}
