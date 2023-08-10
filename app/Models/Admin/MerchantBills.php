<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class merchantbills extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'name',
            'total_amount',
            'type'
    
        ];
        /**
         * Interact with the user's first name.
         *
         * @param  string  $value
         * @return \Illuminate\Database\Eloquent\Casts\Attribute
         */
        
}
