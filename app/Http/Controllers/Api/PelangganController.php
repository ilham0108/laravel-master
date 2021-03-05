<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        
        $response = [
            'success' => true,
            'data'    => $data,
            'message' => "OK",
        ];

        return response()->json($response, 200);
    }

    public function show($id)
    {
        $data = Pelanggan::find($id);
  
        if (is_null($data)) {
            $response = [
                'success' => false,
                'message' => "Data not found",
            ];
    
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data'    => $data,
            'message' => "OK",
        ];

        return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'id_pelanggan' => 'required',
            'nik'       => 'required',
            'nama'      => 'required',
            'alamat'    => 'required',
            'id_paket'  => 'required'
        ]);
   
        if($validator->fails()){
            $response = [
                'success' => false,
                'data'    => $validator->errors(),
                'message' => "error",
            ];
    
            return response()->json($response, 404);       
        }
   
        $result = Pelanggan::create($input);
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => "OK",
        ];

        return response()->json($response, 200);
    } 

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'id_pelanggan' => 'required',
            'nik'       => 'required',
            'nama'      => 'required',
            'alamat'    => 'required',
            'id_paket'  => 'required'
        ]);
   
        if($validator->fails()){
            $response = [
                'success' => false,
                'data'    => $validator->errors(),
                'message' => "error",
            ];
    
            return response()->json($response, 404);       
        }

        $pelanggan->update($request->all());
        
        $response = [
            'success' => true,
            'data'    => $request->all(),
            'message' => "OK",
        ];

        return response()->json($response, 200);
    }

    public function destroy(Pelanggan $Pelanggan)
    {
        $Pelanggan->delete();
   
        $response = [
            'success' => true,
            'message' => "Delete data success",
        ];

        return response()->json($response, 200);
    }
}
