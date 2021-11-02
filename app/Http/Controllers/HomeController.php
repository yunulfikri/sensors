<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docs;
use Carbon\Carbon;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Docs::orderBy('created_at', 'desc')->get();
        return view('home', ['data' => $data]);
    }

    public function dashboard(Request $request)
    {
        # code...
        if ($request->input('date') == null) {

            $start = Carbon::parse('2021/07/24');
            $end = Carbon::parse('2021/07/25');

            $data = Docs::whereDate('created_at', '=', $start->format('y-m-d'))->get();


        } else {
            # code...
            if ($request->input('enddate') == null) {
                # code...
                try {
                    //code...
                    $start = Carbon::parse($request->input('date'));
                    
                } catch (\Throwable $th) {
                    //throw $th;
                    return abort(404);
    
                }       
                $data = Docs::whereDate('created_at', '=', $start->format('y-m-d'))->get();
                $end = Carbon::parse($request->input('date'));

            }else{
                try {
                    //code... for between date
                    $start = Carbon::parse($request->input('date'));
                    $end = Carbon::parse($request->input('enddate'));
                    $end = $end->addDay(1);
                } catch (\Throwable $th) {
                    //throw $th;
                    return abort(404);
    
                }       
                $data = Docs::whereBetween('created_at', [$start->format('y-m-d'), $end->format('y-m-d')])->get();

            }
            
            
        }
            if (!$data) {
                # code...
                return abort(404);
            }
            $time = [];
            $timefull = [];

            $vocData = [];
            $vbebanData = [];
            $ibebanData = [];
            $suhuData = [];

            $irradiasiData = [];
            $dayaData = [];
            $kelembabanData = [];



            foreach ($data as $key => $value) {
                # code...
                array_push($time, $value['created_at']->format('d-m-y H:i'));
                array_push($timefull, $value['created_at']->format('y-m-d H:i'));
                array_push($vocData, $value['voc']);
                array_push($vbebanData, $value['vbeban']);
                array_push($ibebanData, $value['ibeban']);
                array_push($suhuData, $value['suhu']);
                array_push($irradiasiData, $value['irradiasi']);
                array_push($dayaData, $value['daya']);
                array_push($kelembabanData, $value['kelembaban']);

            }


            $warna = [
                ['green'],
                ["blue"],
                ["orange"],
                ["red"],
                ["black"],
                ["violet"],
                ["maroon"]
            ];

            $annotation = [];

            $number = 0;
            $day = 1;

            $tempTimeCurrent = [];
            
            for ($i=8; $i <= count($time); $i+=9) {
                array_push($tempTimeCurrent, $time[$i]);
            }

            foreach ($tempTimeCurrent as $key) {
                $test = [
                    "type" => 'line',
                    "mode" => 'vertical',
                    "scaleID" => 'x-axis-0',
                    "value" => $key,
                    "borderColor" => $warna[$number++],
                    "borderWidth" => 2,
                    "label" => [
                        "enabled" => true,
                        // "content" => $hari, 
                        "position" => 'top',
                    ]
                ];
                array_push($annotation, $test);
            }
            return view('dashboard', [
                'time' => json_encode($time,JSON_NUMERIC_CHECK),
                'timefull' => json_encode($timefull,JSON_NUMERIC_CHECK), 
                'voc' =>json_encode($vocData,JSON_NUMERIC_CHECK),
                'vbeban' => json_encode($vbebanData,JSON_NUMERIC_CHECK),
                'ibeban' => json_encode($ibebanData,JSON_NUMERIC_CHECK),
                'suhu' => json_encode($suhuData,JSON_NUMERIC_CHECK),
                'irradiasi' => json_encode($irradiasiData,JSON_NUMERIC_CHECK),
                'daya' => json_encode($dayaData,JSON_NUMERIC_CHECK),
                'kelembaban' => json_encode($kelembabanData,JSON_NUMERIC_CHECK),
                'data' => $data,
                'dateStart' => $start,
                'dateEnd' => $end->subDay(1),
                'warna' => json_encode($annotation),
            ]);
            
       
        
    }
}
