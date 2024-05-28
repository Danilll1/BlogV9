@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Авторизация</h3>
          </div>
        <form action="{{ route('login') }}" method='post'>
            @csrf
            <div class="card-body">

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

                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-blok">Авторизоваться</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection