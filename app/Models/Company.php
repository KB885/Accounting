<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
    ];

    public function users()
    {
        // Do pivot
       return $this->belongsToMany(User::class);
    }

    public function earnings()
    {
       return $this->hasMany(Earning::class);
    }

    public function spendings()
    {
       return $this->hasMany(Spending::Class);
    }

    public function recurrings()
    {
       return $this->HasMany(Recurring::class);
    }

    public function getAbbreviatedNameAttribute() : string
    {
       return Str::limit($this->title, 3);
    }
}
