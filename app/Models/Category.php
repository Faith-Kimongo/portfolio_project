<?php

namespace App\Models;

use App\Models\Admin\Merchants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'photo',
        'restaurant_id'

    ];

    public function merchants()
    {
        return $this->hasOne(Merchants::class);
    }
}
