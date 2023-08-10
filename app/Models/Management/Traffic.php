<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Traffic extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'traffic';
}
