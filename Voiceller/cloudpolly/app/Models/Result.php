<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'title', 
        'text', 
        'text_raw', 
        'language', 
        'voice', 
        'voice_id',
        'gender', 
        'vendor', 
        'file_name', 
        'vendor_id', 
        'vendor_img',
        'storage', 
        'result_url',
        'result_ext',
        'characters',
        'voice_type',
        'plan_type',
        'audio_type',
        'mode',
    ];

    /**
     * Result belongs to a user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
