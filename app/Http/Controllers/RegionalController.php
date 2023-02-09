<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Regencie;
use App\Models\Village;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    public function getProvinces()
    {
        $data = Province::orderBy('name')->get();
        return response()->json([
            'message' => 'Success Fetch !',
            'data' => $data,
        ]);
    }

    public function getRegencies($id)
    {
        $data = Regencie::where('province_id', $id)->orderBy('name')->get();
        return response()->json([
            'message' => 'Success Fetch !',
            'data' => $data,
        ]);
    }

    public function getDistricts($id)
    {
        $data = District::where('regency_id', $id)->orderBy('name')->get();
        return response()->json([
            'message' => 'Success Fetch !',
            'data' =>  $data,
        ]);
    }

    public function getVillages($id)
    {
        $data = Village::where('district_id', $id)->orderBy('name')->get();
        return response()->json([
            'message' => 'Success Fetch !',
            'data' => $data,
        ]);
    }
}
