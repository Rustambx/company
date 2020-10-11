<?php

namespace App\Modules\Salary\Models;

use App\Modules\Employee\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = ['price', 'type', 'payroll_date', 'employee_id'];

    public function employee ()
    {
        return $this->belongsTo(Employee::class);
    }
}
