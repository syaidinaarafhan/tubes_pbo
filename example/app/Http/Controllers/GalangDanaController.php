<?php

namespace App\Http\Controllers;

use App\Models\GalangDanaModel;
use Illuminate\Http\Request;

class GalangDanaController extends Controller
{
    public function view(){
        return view('galangdana.page');
    }

    public function tahap1(){

    return view('galangdana.tahap1');
    }

    public function storeTahap1(Request $request){

        $request->validate([
            'namaKTP' => ['required', 'string'],
            'noTelfon' => ['required', 'string'],
            'status' => ['required', 'string'],
            'akunMedsos' => ['required', 'string'],
        ]);
        $user_id = auth()->user()->id;

        session()->put('galang_dana_data', array_merge($request->all(), ['user_id' => $user_id]));

        return redirect()->route('galangdana.tahap2');
    }

    public function tahap2(){
        return view('galangdana.tahap2');
    }

    public function storetahap2(Request $request)
    {
        $request->validate([
            'judulKampanye' => ['required', 'string'],
            'Tujuan' => ['required', 'string'],
            'Lokasi' => ['required', 'string'],
            'perkiraanWaktu' => ['required', 'string'],
            'rincianPenggunaanDana' => ['required', 'string'],
            'fotoGalangDana' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5000'],
        ]);

        $data = session()->get('galang_dana_data');
    
        if ($request->hasFile('fotoGalangDana')) {
            $file = $request->file('fotoGalangDana');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('Kampanye'), $fileName);
            $data['fotoGalangDana'] = $fileName;
        }
        $data = array_merge($data, $request->except('fotoGalangDana'));
        session()->put('galang_dana_data', $data);
    
        return redirect()->route('galangdana.tahap3');
    }
    

    public function tahap3(){
        return view('galangdana.tahap3');
    }

    public function storeTahap3(Request $request){
        $request->validate([
            'fotoKTP' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5000'],
            'berkasLainnya' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:5000'],
        ]);
    
        $data = session()->get('galang_dana_data');
    
        if ($request->hasFile('fotoKTP')) {
            $file = $request->file('fotoKTP');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('KTP'), $fileName);
            $data['fotoKTP'] = $fileName;
        }
    
        if ($request->hasFile('berkasLainnya')) {
            $file = $request->file('berkasLainnya');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('Berkas'), $fileName);
            $data['berkasLainnya'] = $fileName;
        }
    
        if (session()->has('galang_dana_data')) {
            $createData = GalangDanaModel::create($data);
            session()->forget('galang_dana_data');
    
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors('Data validation failed.');
        }
    }

    public function getFoto(){
        $data = session()->get('galang_dana_data');

        $imagePaths = [];

        if (isset($data['fotoGalangDana']) && is_array($data['fotoGalangDana'])) {
            foreach ($data['fotoGalangDana'] as $fileName) {
                $imagePaths[] = public_path('Kampanye/' . $fileName);
            }
        }

        return view('galangdana.fotoKamp', ['imagePaths' => $imagePaths]);
    }
    
}
