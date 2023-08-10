<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'phone',
        // 'status',
        // 'photo',
        'type'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin", "management", "staff"][$value],
        );
    }

    public function isAdmin()
    {
        return $this->type === 'admin'; // Replace 'type' with the actual column name that holds the user role ('admin' or 'user')
    }

    public function tables()
    {
        return $this->hasMany(Tables::class, 'restaurant_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }


    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Products::class, 'category');
    }
} 
