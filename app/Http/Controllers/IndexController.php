<?php

namespace App\Http\Controllers;

use App\Modules\Company\Models\Company;
use App\Modules\Employee\Models\Employee;
use App\Modules\Salary\Models\Salary;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ()
    {
        $month = \DB::table('salaries')->whereDate('payroll_date', '>', Carbon::now()->subMonth())->get();
        $priceMonth = $month->sum('price');
        $employee_count = Employee::all()->count();
        $company_count = Company::all()->count();
        $salary = Salary::all()->pluck('price')->sum();
        $title = $this->title('Dashboard');
        $this->view('index');

        return $this->render(compact('title', 'employee_count', 'company_count', 'salary', 'priceMonth'));
    }
}
