<?php

namespace App\Http\Controllers\Billing;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use DataTables;

use App\Models\Pelanggan;
use App\Models\Paket;


class PelangganController extends Controller
{
    function index(){
        $paket = Paket::all();
        $total = Pelanggan::where('id_pelanggan','!=', null)->count();
        $totalPaket = Paket::all()->count();

        Log::channel('command')->info('Open page pelanggan : ', [
            'user'  => Auth::user()->name
            ]);

        return view('billing.pelanggan', [
            'paket'=>$paket,
            'total'=>$total,
            'totalPaket'=>$totalPaket
        ]);

    }

    function getData(Request $request){
        if(request()->ajax())
        {
            if(!empty($request->get('from')) && !empty($request->get('to'))){
                $query = Pelanggan::with(['paket'])
                ->where('created_at','>=', $request->get('from'))
                ->where('created_at','<=', $request->get('to'));
            }else{
                $query = Pelanggan::with(['paket']);
            }
            $data = $query->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('paket', function($row){
                    if($row->id_paket == "1"){
                        $paketBtn ='<center><span class="badge badge-primary">'.$row->paket->nama.'</span></center>';
                    }else{
                        $paketBtn ='<center><span class="badge badge-success">'.$row->paket->nama.'</span></center>';
                    }
                    return $paketBtn;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<center><a href="javascript:void(0)" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit('.$row->id.')"><i class="fas fa-edit"></i></a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="delete_data('.$row->id.')"><i class="fas fa-trash-alt"></i></a></center>';
                    return $actionBtn;
                })
                ->rawColumns(['paket','action'])
                ->make(true);
        }
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'id_pelanggan' => 'required',
            'nik' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'id_paket' => 'required|numeric',
        ]);

        if ($validator->fails())
        {
            Log::channel('command')->notice('Validator fail : ', [
                'user'  => Auth::user()->name,
                'errors'=> $validator->errors()
                ]);
            return response()->json(['errors'=>$validator->errors()]);
        }

        Pelanggan::updateOrCreate(['id' => $request->id],
                [
                    'id_pelanggan' => $request->id_pelanggan,
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'id_paket' => "1"
                ]);    
        
        Log::channel('command')->info('POST updateOrCreate : ', [
            'user'  => Auth::user()->name,
            'id'    => $request->id,
            'id_pelanggan'  => $request->id_pelanggan
            ]);
   
        return response()->json(['status'=> true]);
        
    }

    public function edit($id)
    {
        $data = Pelanggan::find($id);
        Log::channel('command')->info('GET Data Pelanggan : ', [
            'user'  => Auth::user()->name,
            'id'    => $id
            ]);

        return response()->json($data);
    }

    public function destroy($id)
    {
        Pelanggan::find($id)->delete();
        Log::channel('command')->warning('DELETE Data Pelanggan : ', [
            'user'  => Auth::user()->name,
            'id'    => $id
            ]);

        return response()->json(['starus'=> true]);
    }

}
