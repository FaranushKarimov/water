<?php

namespace App\Exports;

use App\Models\WaterBasinZone;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WaterBasinZoneExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return WaterBasinZone::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Название бассейна на русском',
            'Название бассейна на таджикском',
            'Название бассейна на английском',
            'Код водного объекта',
            'Площадь (га)',
            'Дата создания',
            'Дата обновления',
        ];
    }
}
