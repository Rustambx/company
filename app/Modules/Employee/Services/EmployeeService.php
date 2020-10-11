<?php

namespace App\Modules\Employee\Services;

use App\Modules\Employee\Models\Employee;
use App\Modules\Employee\Requests\EmployeeRequest;

class EmployeeService
{
    public function all ()
    {
        $employees = Employee::all();

        return $employees;
    }

    public function find ($id)
    {
        $employee = Employee::find($id);

        return $employee;
    }

    public function create (EmployeeRequest $request)
    {
        $data = $request->except('_token');
        if (empty($data)) {
            return ['error' => 'Нет данных'];
        }

        if (Employee::create($data)) {
            return ['status' => 'Сотрудник добавлен'];
        } else {
            return ['error' => 'Ошибка при сохранении'];
        }
    }

    public function update (EmployeeRequest $request, $id)
    {
        $employee = Employee::find($id);
        $data = $request->except('_token');
        if (empty($data)) {
            return ['error' => 'Нет данных'];
        }

        if ($employee->update($data)) {
            return ['status' => 'Сотрудник обновлен'];
        } else {
            return ['error' => 'Ошибка при сохранении'];
        }
    }

    public function delete ($id)
    {
        $employee = Employee::find($id);

        if ($employee->delete()) {
            return ['status' => 'Сотрудник удален'];
        } else {
            return ['error' => 'Ошибка при удалении'];
        }
    }
}
