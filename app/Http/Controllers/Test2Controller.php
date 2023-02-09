<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Test2Controller extends Controller
{
    public function index()
    {
        return view('test2');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|min:10|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => "Input Error"]);
        }

        $request['ip'] = \Request::getClientIp(true);

        $input = $request->all();
        Subscription::create($input);
        return response()->json([
            'message' => 'Success Subscibe!',
        ]);
    }
}
