<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoIpController extends Controller{

    public function run(Request $request){
        logs()->info(json_encode($request->request));
        logs()->info(json_encode($request->query));
        logs()->info(json_encode($request->query('data')));
        logs()->info(json_encode($request->get('data')));
        logs()->info('Call run GeoIp...');
        return response([
            "message"=>'geo_ip_call',
            "info1"=>gettype($request),
            "info2"=>json_encode($request->query),
            "info3"=>json_encode($request->query('data')),
            "info4"=>json_encode($request->get('data')),
            "info5"=>json_encode($request->get()),
            "info6"=>$request['data']
        ]);
    }

}
