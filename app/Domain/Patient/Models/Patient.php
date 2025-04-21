<?php
namespace App\Domain\Patient\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 
        'date_of_birth', 'gender', 'address', 'blood_group'
    ];
}
