@extends('layouts.layouts')

@section('content')
    <div class="main-content-container container-fluid px-4">
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <h3 class="page-title">{{ $title }}</h3>
            </div>
        </div>
        @include('includes.error_messages')
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
            <div class="col">
                <div class="card-body p-0 pb-3 text-center">
                    <form action="{{ route('company.update', $company->id) }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Название</label>
                            <div class="col-sm-10">
                                <input type="text" name="name"  class="form-control" id="name" value="{{ $company->name }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Обновить</button>
                        <a href="{{ route('employee') }}" class="btn btn-danger">Назад</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
