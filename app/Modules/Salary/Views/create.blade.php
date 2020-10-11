@extends('layouts.layouts')

@section('content')
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <h3 class="page-title">{{ $title }}</h3>
            </div>
        </div>
        @include('includes.error_messages')
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-small mb-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('salary.store') }}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="price">Оплата</label>
                                                <input type="text" class="form-control" name="price" id="price" placeholder="Оплата"> </div>
                                            <div class="form-group col-md-6">
                                                <label for="type">Тип оплаты</label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="0">Выберите тип оплаты</option>
                                                    <option value="salary">Зарплата</option>
                                                    <option value="prepayment">Предоплата</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="employee_id">Сотрудники</label>
                                                <select name="employee_id" id="employee_id" class="form-control">
                                                    <option value="0">Выберите Сотрудника</option>
                                                    @foreach($employees as $employee)
                                                        <option value="{{ $employee->id }}">{{ $employee->name }} {{ $employee->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="payroll_date">Дата расчета</label>
                                                <input type="date" name="payroll_date" id="payroll_date" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-accent">Добавить</button>
                                        <a href="{{ route('salary') }}" class="btn btn-danger">Назад</a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Default Light Table -->
    </div>
@endsection
