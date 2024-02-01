<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Spipu\Html2Pdf\Html2Pdf;

class SliderController extends Controller
{
    //
    public function index(){

        $slider = Slider::all();
       
        return view('slider.index',compact('slider'));
    }

    public function create(){
        return view('slider.create');
    }

    public function cetak(){
        $slider = Slider::all();

        $html2pdf = new HTML2PDF('P', 'A4', 'de', false, 'UTF-8');
        $doc = view('slider.cetak', compact('slider'));
        // echo $doc; exit;
        $html2pdf->pdf->SetTitle('Cetak Slider | PDF');
        $html2pdf->setDefaultFont('Times');
        $html2pdf->writeHTML($doc, false);
        $html2pdf->Output('CETAK_SLIDER.pdf');
    }


    public function store(Request $request){
        $data = Slider::create($request->all());
        if (!empty($request->file('foto'))){
            $nama = md5($data->id);
            $folder = 'private/storage/slider';
            $extension = $request->file('foto')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            // ini cek kalau sudah dihapus
            if(file_exists($folder."/".$file)){
                unlink($folder."/".$file);
            }
            // ini proses uploadnya
            if($request->file('foto')->move($folder, $file)){
                $data->foto = $folder."/".$file;
                $data->save();
            }
        }

        return redirect(URL('/slider'));
    }

    public function edit($id){
        $data= Slider::find($id);
        return view('slider.edit', compact('data'));
    }

    public function update($id, Request $request){
        // $data = Slider::find($id);
        // $data->update($request->all());

        $data = Slider::find($id);
        $data->judul = $request->judul;
        $data->subjudul = $request->subjudul;
        if(!empty($request->file('foto'))){ 
            $nama = md5($data->id);
            $folder = 'private/storage/slider';
            $extension = $request->file('foto')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            //ini cek kalau sdh ada hapus
            if(file_exists($folder."/".$file)) {
                unlink($folder."/".$file);
            }
            //ini proses upload nya
            if($request->file('foto')->move($folder, $file)){
                $data->foto = $folder."/".$file;
                $data->save();
            }

        }
        $data->save();

        return redirect(URL('/slider'));
    }

    public function destroy($id, Request $request){
        $data = Slider::find($id);
        if(file_exists($data->foto)){
            unlink($data->foto);
        }
        $data->delete();

        return redirect(URL('/slider'));
    }
}
