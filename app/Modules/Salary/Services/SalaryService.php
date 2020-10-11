<?php

namespace App\Modules\Salary\Services;

use App\Modules\Salary\Models\Salary;
use App\Modules\Salary\Requests\SalaryRequest;

class SalaryService
{
    public function all ()
    {
        $salaries = Salary::all();

        return $salaries;
    }

    public function find ($id)
    {
        $salary = Salary::find($id);

        return $salary;
    }

    public function create (SalaryRequest $request)
    {
        $data = $request->except('_token');

        if (empty($data)) {
            return ['error' => 'Нет данных'];
        }

        if (Salary::create($data)) {
            return ['status' => 'Оплата добавлена'];
        } else {
            return ['error' => 'Ошибка при сохраненеии'];
        }
    }

    public function update (SalaryRequest $request, $id)
    {
        $salary = Salary::find($id);
        $data = $request->except('_token');
        if (empty($data)) {
            return ['error' => 'Нет данных'];
        }

        if ($salary->update($data)) {
            return ['status' => 'Оплата обновлена'];
        } else {
            return ['error' => 'Ошибка при сохранении'];
        }
    }

    public function delete ($id)
    {
        $salary = Salary::find($id);

        if ($salary->delete()) {
            return ['status' => 'Оплата удалена'];
        } else {
            return ['error' => 'Ошибка при удалении'];
        }
    }
}
