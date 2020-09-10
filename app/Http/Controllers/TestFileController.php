<?php

namespace App\Http\Controllers;

use App\Models\TestFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;

class TestFileController extends Controller
{
    public function create()
    {
        return view('create_test');
    }

    public function store()
    {
        $path = request()->file('file')->store('files', 'local');
        
        return TestFile::create(
            [
                'filename' => basename($path),
                'url' => $path,
            ]
        );
    }

    public function show(TestFile $file)
    {
        return Storage::response($file->url);
    }
}
