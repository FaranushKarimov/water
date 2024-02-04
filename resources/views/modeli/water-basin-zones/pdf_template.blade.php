<!DOCTYPE html>
<html>
<head>
    <title>Water Basin Zones PDF</title>
    <style>
        /* Общие стили */
        body {
            font-family: 'DejaVu Sans', sans-serif;
        }
        .table {
            font-size: 10px;
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        /* Стили для скрытия элементов при печати */
        @media print {
            .no-print {
                display: none;
            }
        }

        .logo {
            text-align: center;
            margin-top: 20px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>


<div class="logo">
    <img src="./public/img/logo.jpg" alt="Институт водных проблем, гидроэнергетики и экологии">
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">{{ $columns["id"] }}</th>
            <th>{{ $columns["name_ru"] }}</th>
            <th>{{ $columns["name_tj"] }}</th>
            <th>{{ $columns["name_en"] }}</th>
            <th>{{ $columns["woc"] }}</th>
            <th>{{ $columns["area"] }}</th>
            <th>{{ $columns["created_at"] }}</th>
            <th>{{ $columns["updated_at"] }}</th>
        </tr>
    </thead>
    @foreach($waterBasinZones as $zone)
        <tr>
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
<script type="text/javascript">
</script>
</body>
</html>
