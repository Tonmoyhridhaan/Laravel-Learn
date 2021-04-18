<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ Division;
use App\Models\ District;

class LocationController extends Controller
{
    public function divisions(){
        $divisions = Division::all();
        return response() -> json([
            'divisions' => $divisions,
            'message' => 'Divisions retrieved'
        ]);
    }
    public function createDivisions(Request $request){
        $name = $request->name;
        $obj = new Division();
        $obj->name = $name;
        if($obj->save()){
            return response()->json([
                'division' => $obj,
                'message' => 'Division created'
            ]);
        }
    }
    public function districts(){

    }
    public function createDistricts(Request $request){
        $obj = new District();
        $obj->name = $request->districtname;
        $obj->division_id = $request->division;

        if($obj->save()){
            return response()->json([
                'district' => $obj,
                'message' => 'District created'
            ]);
        }
    }
    public function getDistricts($divisionId){
        $districts = District::where('division_id', '=', $divisionId)
                    ->get();
        return response() -> json([
            'districts' => $districts
        ]);
    }

}
