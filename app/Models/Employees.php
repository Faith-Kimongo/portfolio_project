<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Employees extends Model
{
        use HasApiTokens, HasFactory, Notifiable;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'name',
            'occupation',
            'photo',
            // 'Availability',
            'type'
    
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
    }

