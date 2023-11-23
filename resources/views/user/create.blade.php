@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить пользователя</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input value="{{ old('name') }}" name="name" type="text" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input value="{{ old('email') }}" name="email" type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input value="{{ old('password') }}" name="password" type="text" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input value="{{ old('password_confirmation') }}" name="password_confirmation" type="text" class="form-control" placeholder="Подтверждения пароля">
                    </div>
                    <div class="form-group">
                        <input value="{{ old('surname') }}" name="surname" type="text" class="form-control" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input value="{{ old('patronymic') }}" name="patronymic" type="text" class="form-control" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input value="{{ old('age') }}" name="age" type="text" class="form-control" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input value="{{ old('address') }}" name="address" type="text" class="form-control" placeholder="Адрес">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Пол</option>
                            <option {{ old('gender') == 1 ? 'selected' : '' }} value="1">Мужской</option>
                            <option {{ old('gender') == 2 ? 'selected' : '' }} value="2">Женский</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
