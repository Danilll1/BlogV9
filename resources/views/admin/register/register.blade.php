@extends('admin.layouts.layout')

@section('content')
<form action="{{ route('register.store') }}" method='post'>
@csrf
<div class="input-group mb-3">
    <input type="text" class="form-controller" placeholder="Name" name="name" value="{{ old('name') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
    </div>
</div>

<div class="input-group mb-3">
    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
    </div>
</div>

<div class="input-group mb-3">
    <input type="password" class="form-control" placeholder="Пороль" name="password">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
    </div>
</div>

<div class="input-group mb-3">
    <input type="password" class="form-control" placeholder="Повторите пороль" name="password-conformation" value="{{ old('email') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <button type="submit" class="btn btn-primary btn-blok">Зарегестрироваться</button>
    </div>
</div>



</form>

@if(session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
@endif

@endsection