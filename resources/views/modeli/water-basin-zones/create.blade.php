@extends('adminlte::page')

@section('title', 'Добавление новой водосборной зоны')

@section('content_header')
    <h1>Добавление новой водосборной зоны</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{ route('water-basin-zones.store') }}" method="POST">
            @csrf

            {{-- Здесь разместите поля формы для создания новой записи --}}
            {{-- Пример: --}}
            <div class="form-group">
                <label for="name_ru">Название</label>
                <input type="text" name="name_ru" id="name_ru" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="woc">WOC</label>
                <input type="text" name="woc" id="woc" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="area">Площадь</label>
                <input type="number" name="area" id="area" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@stop
