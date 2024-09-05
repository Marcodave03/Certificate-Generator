<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $table = 'participants';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
