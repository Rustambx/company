<?php

namespace App\Modules\Employee\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Employee\Requests\EmployeeRequest;
use Employee;
use Company;

class EmployeeController extends Controller
{
    public function index ()
    {
        $employees = Employee::all();
        $title = $this->title('Сотрудники');
        $this->view('employee::index');

        return $this->render(compact('employees', 'title'));
    }

    public function create ()
    {
        $companies = Company::all();
        $title = $this->title('Добавление Сотрудника');
        $this->view('employee::create');

        return $this->render(compact('companies', 'title'));
    }

    public function store (EmployeeRequest $request)
    {
        $result = Employee::create($request);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        } else {
            return redirect()->route('employee')->with($result);
        }
    }

    public function edit ($id)
    {
        $companies = Company::all();
        $employee = Employee::find($id);
        $title = $this->title('Редактирование Сотрудника');
        $this->view('employee::edit');

        return $this->render(compact('companies', 'employee', 'title'));
    }

    public function update (EmployeeRequest $request, $id)
    {
        $result = Employee::update($request, $id);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        } else {
            return redirect()->route('employee')->with($result);
        }
    }

    public function delete ($id)
    {
        $result = Employee::delete($id);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        } else {
            return redirect()->route('employee')->with($result);
        }
    }
}
