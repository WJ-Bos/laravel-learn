<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    /** @use HasFactory<\Database\Factories\CommunityFactory> */
    use HasFactory;

    protected $fillable =[
        'name',
        'description'
    ];

    public function members()
    {
        return $this->belongsToMany(User::class)
            ->using(CommunityMember::class)
            ->withPivot('role');
    }
}
