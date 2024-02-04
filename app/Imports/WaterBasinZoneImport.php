<?php

namespace App\Imports;
use App\Models\WaterBasinZone;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class WaterBasinZoneImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            WaterBasinZone::create([
                'name_ru' => $row[0], // Замените индексы на соответствующие столбцы в вашем Excel-файле
                'name_tj' => $row[1],
                'name_en' => $row[2],
                'woc'     => $row[3],
                'area'    => $row[4],
                // Добавьте другие столбцы по необходимости
            ]);
        }
    }
}
