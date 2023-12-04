<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_name',
        'user_email',
        'content',
    ];

    public function humanCreated(): string
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
