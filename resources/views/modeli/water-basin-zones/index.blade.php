@extends('adminlte::page')

{{-- @extends('layouts.app')  Подключение общего шаблона --}}

@section('title', 'Водные зоны бассейна')

@section('content_header')
    <h1 id="printPageTitle">Водные зоны бассейна</h1>
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

<!-- Форма для импорта из Excel -->
<form action="{{ route('import.excel') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="excel_file" accept=".xlsx, .xls">
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-file-excel"></i> Импорт из Excel</button>
</form>


<div style="display: none;" id="printLogo">
    <div class="row">
      <div class="col">
        <div class="login-logo">
            <img width="100" src="{{ asset('img/logo.jpg') }}">
            <h3>Институт водных проблем, гидроэнергетики и экологии</h3>
            <br>
            <h2>Водные бассейны Республики Таджикистан</h2>
        </div>
      </div>
    </div>
  </div>
<div class="row">
<div class="col-md-12">
<div class="box">
  <div class="box-header">
    {{-- <h3 class="box-title">Водные зоны бассейна</h3>
    <br> --}}
    <div class="box-tools">
      {{ $waterBasinZones->links() }}
    </div>
    <br>
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addNewItemModal">
        <i class="fas fa-plus"></i> Добавить
      </button>
      {{-- Add export button --}}
      <button type="button" class="btn btn-success btn-sm" onclick="exportToExcel()">
        <i class="fas fa-file-excel"></i> Экспорт в Excel
    </button>
    <button  type="submit" class="btn btn-info btn-lg" onclick="printContent('tablePrint')"><i class="fas fa-print"></i> Печатать</button>
    {{-- <a href="{{ route('export-pdf')}}" class="btn btn-success btn-sm" onclick="exportToPDF()">
        <i class="far fa-file-pdf"></i> Экспорт в PDF
    </a> --}}
  </div>
  <div class="box-body table-responsive" id="tablePrint">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="no-print">Изменить</th>
          <th style="width: 30px">{{ $columns["id"] }}</th>
          <th>{{ $columns["name_ru"] }}</th>
          <th>{{ $columns["name_tj"] }}</th>
          <th>{{ $columns["name_en"] }}</th>
          <th>{{ $columns["woc"] }}</th>
          <th>{{ $columns["area"] }}</th>
          <th>{{ $columns["created_at"] }}</th>
          <th style="width:10px;">{{ $columns["updated_at"] }}</th>
        </tr>
      </thead>
      @foreach($waterBasinZones as $zone)
      <tr class="item-data-row">
        <td class="no-print">
          <div class="btn-group-vertical">
            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteItemModal" onclick="deleteItem({{ $zone->id }})"><i class="fas fa-trash"></i></button>
            <a href="{{ route('water-basin-zones.edit',$zone->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
          </div>
        </td>
        <td class="h4">{{ $zone->id }}</td>
        <td>{{ $zone->name_ru }}</td>
        <td>{{ $zone->name_tj }}</td>
        <td>{{ $zone->name_en }}</td>
        <td>{{ $zone->woc }}</td>
        <td>{{ $zone->area }}</td>
        <td>{{ $zone->created_at }}</td>
        <td>{{ $zone->updated_at }}</td>
      </tr>
      @endforeach
    </table>
  </div>
  <div class="box-footer">
    <div class="text-right">
      {{ $waterBasinZones->links() }}
    </div>
  </div>
</div>
</div>
</div>

<div class="modal fade" id="addNewItemModal" tabindex="-1" role="dialog" aria-labelledby="addNewItemModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
          {{-- <h4 class="modal-title" id="addNewItemModalLabel">Добавить</h4> --}}
        </div>
        <form role="form" method="POST" id="addItemForm" action="{{ route('water-basin-zones.store') }}" accept-charset="UTF-8">
          @csrf
          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <label for="add_name_ru">{{ $columns["name_ru"] }}</label>
                <input type="text" class="form-control" id="add_name_ru" name="name_ru" placeholder='{{ $columns["name_ru"] }}'>
              </div>
              <div class="form-group">
                <label for="add_name_tj">{{ $columns["name_tj"] }}</label>
                <input type="text" class="form-control" id="add_name_tj" name="name_tj" placeholder='{{ $columns["name_tj"] }}'>
              </div>
              <div class="form-group">
                <label for="add_name_en">{{ $columns["name_en"] }}</label>
                <input type="text" class="form-control" id="add_name_en" name="name_en" placeholder='{{ $columns["name_en"] }}'>
              </div>
              <div class="form-group">
                <label for="add_woc">{{ $columns["woc"] }}</label>
                <input type="text" class="form-control" id="add_woc" name="woc" placeholder='{{ $columns["woc"] }}'>
              </div>
              <div class="form-group">
                <label for="add_area">{{ $columns["area"] }}</label>
                <input type="text" class="form-control" id="add_area" name="area" placeholder='{{ $columns["area"] }}'>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Отмена</button>
            <button type="submit" class="btnSubmit btn btn-primary" onclick="submitItemForm()">Добавить</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal modal-danger fade" id="deleteItemModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
            <span aria-hidden="true">×</span></button>
          {{-- <h4 class="modal-title">Подтверждение</h4> --}}
        </div>
        <div class="modal-body">
          <p>Вы действительно хотите удалить?</p>
        </div>
        <div class="modal-footer">
          <form id="deleteItemForm" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="button" class="btn btn-info pull-left" data-dismiss="modal">Отмена</button>
            <button type="button" class="btn btn-danger" onclick="submitDeleteItemForm()">Удалить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script type="text/javascript">
    function deleteItem(id)
     {
         var id = id;
         var url = '{{ route("water-basin-zones.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteItemForm").attr('action', url);
     }
     function submitDeleteItemForm() {
      $("#deleteItemForm").submit();
    }

    // function submitItemForm() {
    //   $('.btnSubmit').prop('disabled', true);
    // }
    function submitItemForm() {
        $('#addItemForm').submit();
    }

    function exportToExcel() {
        window.location.href = '{{ route("export.excel") }}';
    }
</script>
<script type="text/javascript">
    // print
    function printContent(id) {
      var t = document.getElementById("printPageTitle").innerHTML;
      var l = document.getElementById("printLogo").innerHTML;
      var str = document.getElementById(id).innerHTML;
      var newwin = window.open('', 'printwin', 'left=100,top=100,width=2480,height=3508'); // A4 size
      newwin.document.write('<HTML>\n<HEAD>\n');
      newwin.document.write('<link rel="stylesheet" type="text/css" href="{{ asset("vendor/adminlte/dist/css/AdminLTE.min.css") }}"/>');
      newwin.document.write('<link rel="stylesheet" type="text/css" href="{{ asset("vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css") }}"/>');
      newwin.document.write('<TITLE></TITLE>\n');
      newwin.document.write('<script>\n');
      newwin.document.write('function chkstate(){\n');
      newwin.document.write('if(document.readyState=="complete"){\n');
      newwin.document.write('window.focus();\n'); // Фокусируем окно перед печатью
      newwin.document.write('window.print();\n');
      newwin.document.write('window.onafterprint = function(){ window.close(); }\n'); // Закрываем окно после печати
      newwin.document.write('}\n');
      newwin.document.write('else{\n');
      newwin.document.write('setTimeout("chkstate()",2000)\n');
      newwin.document.write('}\n');
      newwin.document.write('}\n');
      newwin.document.write('function print_win(){\n');
      newwin.document.write('window.print();\n');
      newwin.document.write('chkstate();\n');
      newwin.document.write('}\n');
      newwin.document.write('<\/script>\n');
      newwin.document.write('</HEAD>\n');
      newwin.document.write('<BODY onload="print_win()">\n');
      newwin.document.write(l);
      newwin.document.write(str);
      newwin.document.write('</BODY>\n');
      newwin.document.write('</HTML>\n');
      newwin.document.close();
    }
  </script>
@stop
@section('css')
    <style type="text/css">
        .table > thead > tr > th {
            vertical-align: middle !important;
            text-align: center;
        }
        .table > tbody >tr > td {
            vertical-align: middle !important;
            text-align: center !important;
        }

         .no-print {
            display: table-cell;
          }

          @media print {
              .no-print {
                  display: none;
              }
          }
    </style>
@stop
