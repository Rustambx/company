<?php

namespace App\Modules\Salary\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Salary\Requests\SalaryRequest;
use Salary;
use Employee;

class SalaryController extends Controller
{
    public function index ()
    {
        $salaries = Salary::all();
        $title = $this->title('Оплаты');
        $this->view('salary::index');

        return $this->render(compact('salaries', 'title'));
    }

    public function create ()
    {
        $employees = Employee::all();
        $title = $this->title('Добавление оплаты');
        $this->view('salary::create');

        return $this->render(compact('employees', 'title'));
    }

    public function store (SalaryRequest $request)
    {
        $result = Salary::create($request);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        } else {
            return redirect()->route('salary')->with($result);
        }
    }

    public function edit ($id)
    {
        $employees = Employee::all();
        $salary = Salary::find($id);
        $title = $this->title('Редактирование оплаты');
        $this->view('salary::edit');

        return $this->render(compact( 'employees','salary', 'title'));
    }

    public function update (SalaryRequest $request, $id)
    {
        $result = Salary::update($request, $id);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        } else {
            return redirect()->route('salary')->with($result);
        }
    }

    public function delete ($id)
    {
        $result = Salary::delete($id);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        } else {
            return redirect()->route('salary')->with($result);
        }
    }
}
