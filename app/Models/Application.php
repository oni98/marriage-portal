<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function religion(){
        return $this->belongsTo(Religion::class);
    }

    public function maritalStatus(){
        return $this->belongsTo(MaritalStatus::class);
    }

    public function education(){
        return $this->belongsTo(Education::class);
    }

    public function profession(){
        return $this->belongsTo(Profession::class);
    }
}
