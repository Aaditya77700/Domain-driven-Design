<?php
namespace App\Domain\Appointment\Models;

use App\Domain\Patient\Models\Patient;
use App\Domain\Doctor\Models\Doctor;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id', 'doctor_id', 'appointment_date', 'status', 'notes'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
