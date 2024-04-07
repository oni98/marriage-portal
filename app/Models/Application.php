<?php

namespace App\Models;

use Devfaysal\BangladeshGeocode\Models\District;
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

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    public function userPackage(){
        return $this->hasOne(UserPackage::class);
    }

    public function files(){
        return $this->hasMany(ApplicationFile::class);
    }
}
