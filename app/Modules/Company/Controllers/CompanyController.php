<?php

namespace App\Modules\Company\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Company\Requests\CompanyRequest;
use Company;

class CompanyController extends Controller
{
    public function index ()
    {
        $companies = Company::all();

        $title = $this->title('Компании');
        $this->view('company::index');

        return $this->render(compact('title', 'companies'));
    }

    public function create ()
    {
        $title = $this->title('Добавление Компании');
        $this->view('company::create');

        return $this->render(compact('title'));
    }

    public function store (CompanyRequest $request)
    {
        $result = Company::create($request);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        } else {
            return redirect()->route('company')->with($result);
        }
    }

    public function edit ($id)
    {
        $company = Company::find($id);
        $title = $this->title('Редактирование Компании');
        $this->view('company::edit');

        return $this->render(compact('company', 'title'));
    }

    public function update (CompanyRequest $request, $id)
    {
        $result = Company::update($request, $id);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with('error');
        } else {
            return redirect()->route('company')->with($result);
        }
    }

    public function delete ($id)
    {
        $result = Company::delete($id);

        if (is_array($result) && !empty($result['error'])) {
            return back()->with('error');
        } else {
            return redirect()->route('company')->with($result);
        }
    }
}
