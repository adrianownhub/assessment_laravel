<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function listData()
    {
        $data = Files::get()->where('user_id', '=', session('id'));

        $processedData = new Collection;
        foreach ($data as $chunk) {

            $processedData->push([
                'filename' => $chunk->filename,
                'filepath' => $chunk->filepath,
            ]);
        }

        return datatables()->of($processedData)
            ->addIndexColumn()
            ->make(true);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'uploadFile' => 'required',
            'uploadFile.*' => 'mimes:jpg,jpeg,png,bmp,tiff|max:4096',
        ]);

        $files = $request->file('uploadFile');
        if ($request->hasFile('uploadFile')) {
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $path = $file->storeAs('uploads', $filename, 'public');

                // Save file information to database
                Files::create([
                    'user_id' => session('id'), // assuming the user is authenticated
                    'filename' => $filename,
                    'filepath' =>'storage/uploads/' . $filename,
                ]);
            }
        }

        return back()->with('success', 'Files have been uploaded successfully');
    }
    
}
