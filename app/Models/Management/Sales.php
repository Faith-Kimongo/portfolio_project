<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Sales extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'sales';
    
}
