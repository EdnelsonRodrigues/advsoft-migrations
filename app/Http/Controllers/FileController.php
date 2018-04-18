<?php

namespace App\Http\Controllers;
use App\Modelos\File;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function create() 
    {
        return view('upload.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'mimes:doc,pdf,docx,zip'
        ]);

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/files/', $name);
                $data[] = $name;
            }
        }

        $file = new File();
        $file->filenames=json_encode($data);
        $file->save();

        return back()->with('success', 'Seus arquivos foram adicionados com sucesso');
    }
}
