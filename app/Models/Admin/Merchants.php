<?php

namespace App\Models\Admin;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Merchants extends Model
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
            'phone',
            'user_id',
            'location',
            'photo',
            'type'
    
        ];
        /**
         * Interact with the user's first name.
         *
         * @param  string  $value
         * @return \Illuminate\Database\Eloquent\Casts\Attribute
         */
        public function categories()
        {
            return $this->hasMany(Category::class);
        }
}
