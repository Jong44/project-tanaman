<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tanaman;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TanamanController extends Controller
{
    public function viewAddTanaman(){
        return view('admin.addTanaman');
    }

    public function prosesAddTanaman(Request $request){

        $slug = $request->nama;
        $slug = str_replace(' ', '-', $slug);
        $slug = strtolower($slug);

        $taksanomi = json_encode(array(
            'kingdom' => $request->kingdom,
            'subkingdom' => $request->subkingdom,
            'division' => $request->division,
            'subdivisi' => $request->subdivisi,
            'kelas' => $request->kelas,
            'famili' => $request->famili,
            'genus' => $request->genus,
            'species' => $request->species,
        ));
        $indexImage = 0;
        $images = array();
        if($request->hasFile('images')){
            foreach($request->file('images') as $file){
                $nama_file = $request->nama.$indexImage.'.'.$file->getClientOriginalExtension();
                $path = $file->storeAs('public/images', $nama_file);
                array_push($images, $path);
                $indexImage++;
            }
            $images = json_encode($images);

            $tanaman = new Tanaman;
            $tanaman->nama = $request->nama;
            $tanaman->slug = $slug;
            $tanaman->nama_latin = $request->nama_latin;
            $tanaman->images = $images;
            $tanaman->taksanomi = $taksanomi;
            $tanaman->deskripsi = $request->deskripsi;
            $tanaman->asalsebaran = $request->asalsebaran;
            $tanaman->habitat = $request->habitat;
            $tanaman->morfologi = $request->morfologi;
            $tanaman->manfaat = $request->manfaat;
            $tanaman->sumber = $request->sumber;
            $tanaman->save();

            return redirect()->route('home');

        }else{
            return redirect()->back();
        }
    }

    public function viewTanaman($slug){
        $tanaman = Tanaman::where('slug', $slug)->first();
        return view('tanaman.index', compact('tanaman'));
    }

    public function deleteTanaman($id){
        $tanaman = Tanaman::find($id);
        $images = json_decode($tanaman->images);
        foreach($images as $image){
            $path = str_replace('storage', 'public', $image);
            unlink(storage_path('app/'.$path));
        }
        $tanaman->delete();
        return redirect()->route('home');
    }


}
