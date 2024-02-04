@extends('adminlte::page')

{{-- @section('title', '') --}}

@section('content_header')
    <h1>Водные зоны бассейна</h1>
@stop

@section('content')
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
  @endif
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif
      <div class="box">
        <form role="form" id="editItemForm" action="{{ route('water-basin-zones.update',$id) }}" method="POST" accept-charset="UTF-8">
          <div class="box-header">
            <h4 class="box-title">Изменить</h4>
          </div>
          <div class="box-body">
            @csrf
            {{ method_field('PATCH') }}
            <div class="box-body">
              <div class="form-group">
                <label for="edit_id">Код водного бассейна</label>
                <input readonly="true" type="text" class="form-control" id="edit_id" name="id" value="{{ $waterBasinZone->id }}" placeholder="id">
              </div>
              <div class="form-group">
                <label for="edit_name_ru">Название бассейна на русском</label>
                <input type="text" class="form-control" id="edit_name_ru" name="name_ru" value="{{ $waterBasinZone->name_ru }}" placeholder="name_ru">
              </div>
              <div class="form-group">
                <label for="edit_name_tj">Название бассейна на таджикском</label>
                <input type="text" class="form-control" id="edit_name_tj" name="name_tj" value="{{ $waterBasinZone->name_tj }}" placeholder="name_tj">
              </div>
              <div class="form-group">
                <label for="edit_name_en">Название бассейна на английском</label>
                <input type="text" class="form-control" id="edit_name_en" name="name_en" value="{{ $waterBasinZone->name_en }}" placeholder="name_en">
              </div>
              <div class="form-group">
                <label for="edit_woc">Код водного объекта</label>
                <input type="text" class="form-control" id="edit_woc" name="woc" value="{{ $waterBasinZone->woc }}" placeholder="woc">
              </div>
              <div class="form-group">
                <label for="edit_area">Площадь (га)</label>
                <input type="text" class="form-control" id="edit_area" name="area" value="{{ $waterBasinZone->area }}" placeholder="area">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="{{ route('water-basin-zones.index') }}" class="btn btn-danger">Назад</a>
            <button class="btn btn-primary" type="submit" onclick="submitItemForm()">Сохранить</button>
          </div>
        </form>
      </div>

@stop



@section('js')
	<script type="text/javascript">
    function submitItemForm(e) {
      e.preventDefault();
      $("#editItemForm").submit();
      $('.btnSubmit').prop('disabled', true);
    }
	</script>

@stop
