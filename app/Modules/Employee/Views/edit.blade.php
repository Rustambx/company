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
                                    <form action="{{ route('employee.update', $employee->id) }}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Имя</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{ $employee->name }}" placeholder="Имя">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="LastName">Фамилия</label>
                                                <input type="text" class="form-control" name="last_name" id="LastName" value="{{ $employee->last_name }}" placeholder="Фамилия">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{ $employee->email }}" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="phone">Номер телефона</label>
                                                <input type="text" class="form-control" name="phone" id="phone" value="{{ $employee->phone }}" placeholder="Номер телефона">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="address">Адрес</label>
                                                <input type="text" class="form-control" name="address" id="address" value="{{ $employee->address }}" placeholder="Адрес">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">Должность</label>
                                                <input type="text" class="form-control" name="position" id="position" value="{{ $employee->position }}" placeholder="Должность">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feInputState">Компании</label>
                                                <select id="company" name="company_id" class="form-control">
                                                    <option value="0">Выбрать Компанию</option>
                                                    @foreach($companies as $company)
                                                        <option value="{{ $company->id }}" @if($employee->company_id == $company->id) selected @endif>{{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-accent">Обновить</button>
                                        <a href="{{ route('employee') }}" class="btn btn-danger">Назад</a>
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
