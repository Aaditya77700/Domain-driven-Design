<?php 
namespace App\Domain\Doctor\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 
        'specialization', 'address'
    ];
}
