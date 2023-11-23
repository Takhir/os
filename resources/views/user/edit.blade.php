@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать пользователя</h1>
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
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input value="{{ $user->name ?? old('name') }}" name="name" type="text" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input value="{{ $user->surname ?? old('surname') }}" name="surname" type="text" class="form-control" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input value="{{ $user->patronymic ?? old('patronymic') }}" name="patronymic" type="text" class="form-control" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input value="{{ $user->age ?? old('age') }}" name="age" type="text" class="form-control" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input value="{{ $user->address ?? old('address') }}" name="address" type="text" class="form-control" placeholder="Адрес">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Пол</option>
                            <option {{ $user->gender == 1 || old('gender') == 1 ? 'selected' : '' }} value="1">Мужской</option>
                            <option {{ $user->gender == 2 || old('gender') == 2 ? 'selected' : '' }} value="2">Женский</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
