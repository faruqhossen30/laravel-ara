<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'day_id', 'type', 'price'];

    public function services()
    {
        $this->hasMany(PackageService::class,'package_id');
    }
}
