<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BookRequest extends Model
{

    use HasFactory;

    protected $primaryKey = 'RequestID';

    protected $fillable = [
        'UserID',
        'PropertyType',
        'HouseType',
        'Budget',
        'RealEstateID',
        'AppointmentDate',
        'AppointmentTime',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function realEstate()
    {
        return $this->belongsTo(RealEstate::class, 'RealEstateID');
    }
}
