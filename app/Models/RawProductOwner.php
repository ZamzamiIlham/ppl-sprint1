<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawProductOwner extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function RawProduct()
    {
        return $this->belongsTo(RawProduct::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
