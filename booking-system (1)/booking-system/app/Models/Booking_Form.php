<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'bookingid',
        'FirstName',
        'LastName',
        'MiddleName',
        'Suffix',
        'Gender',
        'CheckInDate',
        'CheckOutDate',
        'HomestayName',
        'Address',
        'ContactNumber',
        'Created_At',
        'Updated_At'


    ];

    protected $table = 'booking';

    protected $primaryKey= 'bookingid';
}
