@extends('admin.layouts.layout')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Категории</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <form action="{{ route('register.store') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text"  class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" >
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email"  class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" >
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password"  class="form-control" placeholder="Password" name="password" value="{{ old('password') }}" >
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password"  class="form-control" placeholder="Retype password" name="password_confirmation" >
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
            </div>
        </form>
    </div>


@endsection