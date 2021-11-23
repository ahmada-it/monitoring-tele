<?php

namespace App\Http\Controllers\Tele1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Tele1Repository;
use App\Models\Tele1;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    protected $_tele1;
    public function __construct(Tele1Repository $tele1)
    {
        $this->_tele1 = $tele1;
    }

    public function index()
    {
        // $results =  $this->_tele1->getPaginate($request);

        // Sensor MQ-7
        $MQ7 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/1.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ7 = json_decode($MQ7, TRUE);
        $data_MQ7 = ($json_MQ7['feeds']);
        $jml_MQ7 = sizeof($data_MQ7);
        $jml_arr_MQ7 = $data_MQ7[$jml_MQ7-1]['field1'];
        // $conv_jml_data = (int)$jml_arr;
        // dd($data_MQ7);

        // Sensor MQ-131
        $MQ131 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/2.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ131 = json_decode($MQ131, TRUE);
        $data_MQ131 = ($json_MQ131['feeds']);
        $jml_MQ131 = sizeof($data_MQ131);
        $jml_arr_MQ131 = $data_MQ131[$jml_MQ131-1]['field2'];
        
        // Sensor MQ-136
        $MQ136 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/3.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ136 = json_decode($MQ136, TRUE);
        $data_MQ136 = ($json_MQ136['feeds']);
        $jml_MQ136 = sizeof($data_MQ136);
        $jml_arr_MQ136 = $data_MQ136[$jml_MQ136-1]['field3'];
        
        // Sensor NH3
        $NH3 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/5.json?api_key=1S7HYWX3RR862Y0W');
        $json_NH3 = json_decode($NH3, TRUE);
        $data_NH3 = ($json_NH3['feeds']);
        $jml_NH3 = sizeof($data_NH3);
        $jml_arr_NH3 = $data_NH3[$jml_NH3-1]['field5'];
        
        // Sensor NO2
        $NO2 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/6.json?api_key=1S7HYWX3RR862Y0W');
        $json_NO2 = json_decode($NO2, TRUE);
        $data_NO2 = ($json_NO2['feeds']);
        $jml_NO2 = sizeof($data_NO2);
        $jml_arr_NO2 = $data_NO2[$jml_NO2-1]['field6'];
        
        // Sensor Dust
        $DUST = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/4.json?api_key=1S7HYWX3RR862Y0W');
        $json_DUST = json_decode($DUST, TRUE);
        $data_DUST = ($json_DUST['feeds']);
        $jml_DUST = sizeof($data_DUST);
        $jml_arr_DUST = $data_DUST[$jml_DUST-1]['field4'];
        
        // // Sensor DHT-22
        // $MQ131 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/2.json?api_key=1S7HYWX3RR862Y0W');
        // $json_MQ131 = json_decode($MQ131, TRUE);
        // $data_MQ131 = ($json_MQ131['feeds']);
        // $jml_MQ131 = sizeof($data_MQ131);
        // $jml_arr_MQ131 = $data_MQ131[$jml_MQ131-1]['field2'];
        
        // // Sensor BME280
        // $MQ131 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/2.json?api_key=1S7HYWX3RR862Y0W');
        // $json_MQ131 = json_decode($MQ131, TRUE);
        // $data_MQ131 = ($json_MQ131['feeds']);
        // $jml_MQ131 = sizeof($data_MQ131);
        // $jml_arr_MQ131 = $data_MQ131[$jml_MQ131-1]['field2'];
        
        // // Sensor Rain
        // $MQ131 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/2.json?api_key=1S7HYWX3RR862Y0W');
        // $json_MQ131 = json_decode($MQ131, TRUE);
        // $data_MQ131 = ($json_MQ131['feeds']);
        // $jml_MQ131 = sizeof($data_MQ131);
        // $jml_arr_MQ131 = $data_MQ131[$jml_MQ131-1]['field2'];
        
        // Sensor Anemo
        $ANEMO = HTTP::GET('https://api.thingspeak.com/channels/1552255/fields/1.json?api_key=FM35EP4FE99QAXFT');
        $json_ANEMO = json_decode($ANEMO, TRUE);
        $data_ANEMO = ($json_ANEMO['feeds']);
        $jml_ANEMO = sizeof($data_ANEMO);
        $jml_arr_ANEMO = $data_ANEMO[$jml_ANEMO-1]['field1'];
        
        // Sensor Wind_direct
        $WIND_DIRECT = HTTP::GET('https://api.thingspeak.com/channels/1552255/fields/2.json?api_key=FM35EP4FE99QAXFT');
        $json_WIND_DIRECT = json_decode($WIND_DIRECT, TRUE);
        $data_WIND_DIRECT = ($json_WIND_DIRECT['feeds']);
        $jml_WIND_DIRECT = sizeof($data_WIND_DIRECT);
        $jml_arr_WIND_DIRECT = $data_WIND_DIRECT[$jml_WIND_DIRECT-1]['field2'];
        
        return view("pages.tele1.index", compact(
            // view MQ-7
            'data_MQ7',
            'jml_arr_MQ7',
            // view MQ-131
            'data_MQ131',
            'jml_arr_MQ131',
            // view MQ-136
            'data_MQ136',
            'jml_arr_MQ136',
            // view NH3
            'data_NH3',
            'jml_arr_NH3',
            // view NO2
            'data_NO2',
            'jml_arr_NO2',
            // view DUST
            'data_DUST',
            'jml_arr_DUST',
            // view ANEMO
            'data_ANEMO',
            'jml_arr_ANEMO',

            // view WIND_DIRECT
            'data_WIND_DIRECT',
            'jml_arr_WIND_DIRECT'
        ));
        // return view('pages.tele1.index')->with('nodes_tele_1', $results);
    }

    // public function cetak_pdf()
    // {
    //     $admin = Admin::all();
    //     $pdf = PDF::loadview('pages.admin.cetak_pdf',['Admin'=>$admin]);
    //     return $pdf->download('report-admin.pdf');
    // }
}