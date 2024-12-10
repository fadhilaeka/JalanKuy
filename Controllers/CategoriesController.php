<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class CategoriesController extends Controller
{
    public function categories(){
        $categories=Categories::all();

        return view ('categories',compact('categories'));
    }

    public function entrycategories(){
        
        return view('entry-categories');
    }

    public function post(Request $request){
        $data=Categories::create([
            'transportation'=>$request->transportation,
            'kelas'=>$request->kelas,
            'fasilitas'=>$request->fasilitas,
            'harga'=>$request->harga,
        ]);
        return redirect ('categories');
    }
    public function update(Request $request,$id){
        $data=Categories::find($id);
        $data->update([
            'transportation'=>$request->transportation,
            'kelas'=>$request->kelas,
            'fasilitas'=>$request->fasilitas,
            'harga'=>$request->harga,
        ]);
        return redirect ('categories');
    }
    public function delete(Request $request,$id){
        $data=Categories::find($id);
        $data->delete();
        return redirect ('categories');
    }
    public function editcategories($id){
        $data=Categories::find($id);
        return view('edit-categories',compact('data'));
    }

    public function cetak(){
        $categories=Categories::all();
        $pdf=Pdf::loadview('cetak',compact('categories'));
        return $pdf->download('laporan.pdf');
    }

}
