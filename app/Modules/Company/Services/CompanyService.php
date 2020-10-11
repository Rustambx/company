<?php

namespace App\Modules\Company\Services;

use App\Modules\Company\Models\Company;
use App\Modules\Company\Requests\CompanyRequest;

class CompanyService
{
    public function all ()
    {
        $companies = Company::all();

        return $companies;
    }

    public function find ($id)
    {
        $company = Company::find($id);

        return $company;
    }


    public function create (CompanyRequest $request)
    {
        $data = $request->except('_token');

        if (empty($data)) {
            return ['error' => 'Нет данных'];
        }

        if (Company::create($data)) {
            return ['status' => 'Компания добавлена'];
        } else {
            return ['error' => 'Ошибка при сохранении'];
        }
    }

    public function update (CompanyRequest $request, $id)
    {
        $data = $request->except('_token');

        if (empty($data)) {
            return ['error' => 'Нет данных'];
        }

        $company = Company::find($id);
        if ($company->update($data)) {
            return ['status' => 'Компания обновлена'];
        } else {
            return ['error' => 'Ошибка при обновлении'];
        }
    }

    public function delete ($id)
    {
        $company = Company::find($id);

        if ($company->delete()) {
            return ['status' => 'Компания удалена'];
        } else {
            return ['error' => 'Ошибка при обновлении'];
        }
    }
}
