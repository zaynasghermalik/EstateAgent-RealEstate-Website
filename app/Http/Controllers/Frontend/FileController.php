<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller; 


class FileController extends Controller
{
    //

    public function files()
    {
        $files = File::all();
        return view('file/file', compact('files'));
    }

    public function create()
    {
        return view('file/create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required', // Add validation rule for the title
        'cover' => 'required|file', // Add validation rule for the cover file
    ]);

    $file = [
        'uuid' => (string)Uuid::generate(),
        'title' => $request->title,
    ];

    if ($request->hasFile('cover')) {
        $file['cover'] = $request->cover->getClientOriginalName();
        $request->cover->storeAs('files', $file['cover']);
    }

    File::create($file);

    return redirect('file/file');
}

    public function download($uuid)
    {
        $file = File::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app/files/' . $file->cover);
        return response()->download($pathToFile);
    }

    public function delete($id)
    {
        File::destroy($id);
        return redirect('file/file');
    }

   
}
