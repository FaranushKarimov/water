<?php

namespace App\Http\Controllers\Modeli;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WaterBasinZone;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\WaterBasinZoneExport;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Imports\WaterBasinZoneImport;

class WaterBasinZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $columns = array(
            "id" => "Код водного бассейна",
            "name_ru" => "Название бассейна на русском",
            "name_tj" => "Название бассейна на таджикском",
            "name_en" => "Название бассейна на английском",
            "woc" => "Код водного объекта",
            "area" => "Площадь (га)",
            "created_at" => "Время создание записи",
            "updated_at" => "Время обновления записи",
        );
        $waterBasinZones = WaterBasinZone::orderBy('id', 'asc')->paginate(20);
        // $waterBasinZones = WaterBasinZone::all();
        // return view('modeli.water-basin-zones.index', compact('waterBasinZones'));
        return view("modeli.water-basin-zones.index", [
            "waterBasinZones" => $waterBasinZones,
            "columns" => $columns,
        ]);
    }

    public function downloadPDF()
    {
        set_time_limit(120); // 2 минуты
        $columns = array(
            "id" => "Код водного бассейна",
            "name_ru" => "Название бассейна на русском",
            "name_tj" => "Название бассейна на таджикском",
            "name_en" => "Название бассейна на английском",
            "woc" => "Код водного объекта",
            "area" => "Площадь (га)",
            "created_at" => "Время создания записи",
            "updated_at" => "Время обновления записи",
        );

        $waterBasinZones = WaterBasinZone::paginate(10);

        $pdf = PDF::loadView('modeli.water-basin-zones.pdf_template', compact('columns','waterBasinZones'));

        $pdf->setPaper('a4', 'landscape');

        return $pdf->download('water-bazin-zones.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modeli.water-basin-zones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Валидация данных из формы создания записи
        $request->validate([
            'name_ru' => 'required',
            'name_tj' => 'required',
            'name_en' => 'required',
            'woc' => 'nullable',
            'area' => 'nullable|numeric',
        ]);

        // Создание новой записи
        $waterBasinZone = WaterBasinZone::create($request->all());

        // Редирект на страницу просмотра созданной записи
        // return redirect()->route('water-basin-zones.show', $waterBasinZone->id);
        return redirect()->back()->with('message', 'Добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $waterBasinZone = WaterBasinZone::findOrFail($id);
        return view('modeli.water-basin-zones.show', compact('waterBasinZone'));
    }

    // Методы для редактирования, обновления и удаления записей аналогичными

    // ...

    // Пример метода для редактирования записи
    public function edit($id)
    {
        $waterBasinZone = WaterBasinZone::findOrFail($id);
        return view('modeli.water-basin-zones.edit', compact('waterBasinZone','id'));
    }

    public function update(Request $request, $id)
    {
        $waterBasinZone = WaterBasinZone::findOrFail($id);

        // Валидация данных из формы редактирования записи
        $request->validate([
            'name_ru' => 'required',
            'name_tj' => 'required',
            'name_en' => 'required',
            'woc' => 'nullable',
            'area' => 'nullable|numeric',
        ]);

        // Обновление записи
        $waterBasinZone->update($request->all());

        // Редирект на страницу просмотра обновленной записи
        return redirect()->route('water-basin-zones.index')->with('message', 'Сохранено!');
    }

    // Пример метода для удаления записи
    public function destroy($id)
    {
        $waterBasinZone = WaterBasinZone::findOrFail($id);
        $waterBasinZone->delete();

        // Редирект на страницу со списком записей
        return redirect()->route('water-basin-zones.index');
    }

    public function exportExcel()
    {
        return Excel::download(new WaterBasinZoneExport, 'water_basin_zones.xlsx');
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('excel_file');

        try {
            Excel::import(new WaterBasinZoneImport, $file);

            return redirect()->route('water-basin-zones.index')->with('message', 'Данные успешно импортированы.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Произошла ошибка при импорте данных. ' . $e->getMessage());
        }
    }

}
