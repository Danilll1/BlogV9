@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
    <div class="card">
        <form action="{{ route('register.store') }}" method='post'>
            @csrf
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-controller" placeholder="Name" name="name"
                        value="{{ old('name') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email"
                        value="{{ old('email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Пароль" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Повторите пароль"
                        name="password_confirmation">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-blok">Зарегистрироваться</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@if (session(->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@endsection
