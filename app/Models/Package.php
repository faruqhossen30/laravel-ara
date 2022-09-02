<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'day', 'type', 'price'];

    public function services()
    {
        return $this->hasMany(PackageService::class, 'package_id', 'id');
    }
}
