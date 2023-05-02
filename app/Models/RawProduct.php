<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawProduct extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function RawProductOwners()
    {
        return $this->hasMany(RawProductOwner::class);
    }
}
