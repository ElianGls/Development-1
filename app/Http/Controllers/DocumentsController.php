<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documents;

class DocumentsController extends Controller
{
    public function index(){

        return view('documents.index');

    }


    public function store(Request $request){
        $documento = new Documents();

        if($request->hasFile('boleta')){
            $file =$request->file('boleta');
            $destinationPath = 'documentos/';
            $filename= time() . '-' . $file->getClientOriginalName();
            $uploadSuccess =$request->file('boleta')->move($destinationPath,$filename);

           $documento->name = $destinationPath . $filename;
           $documento->path = $destinationPath . $filename;
        }
        

        $documento->save();

        return redirect()->back();

    }
}
