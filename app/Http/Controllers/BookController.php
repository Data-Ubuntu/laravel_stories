<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use League\Flysystem\AwsS3v3\AwsS3Adapte;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
 
    public function add(Request $request) 
    {
        $file = $request->file('filefield');
        $extension = $file->getClientOriginalExtension();
        
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        
        $entry = new Book();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = time(). $file->getFilename().'.'.$extension;
        $entry->save();
        return redirect('book');
    }

    public function get($filename)
    {
        $entry = Book::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);
 
        return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
    }
}
