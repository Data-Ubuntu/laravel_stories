<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BookRequest;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Laracasts\Flash\Flash;
use App\Book;
use App\Services\ImageService;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class BooksController extends Controller {
    use FormBuilderTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        $books = Book::all();
        return view("Admin::books.index", compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Admin::books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(BookRequest $request)
    {
        $prc_file = $request->file('prc_file');
        $request->file('prc_file');
        $fileName = rename_file($prc_file->getClientOriginalName(), $prc_file->getClientOriginalExtension());
        $path = '/uploads/' . str_plural('prc_file');
        $move_path = public_path() . $path;
        $prc_file->move($move_path, $fileName);
        $prc_file_url = $path . $fileName;

        $pdf_file = $request->file('pdf_file');
        $request->file('pdf_file');
        $fileName = rename_file($pdf_file->getClientOriginalName(), $pdf_file->getClientOriginalExtension());
        $path = '/uploads/' . str_plural('pdf_file');
        $move_path = public_path() . $path;
        $pdf_file->move($move_path, $fileName);
        $pdf_file_url = $path . $fileName;
        
        $image = $request->file('image');
        $request->file('image');
        $fileName = rename_file($pdf_file->getClientOriginalName(), $image->getClientOriginalExtension());
        $path = '/uploads/' . str_plural('image');
        $move_path = public_path() . $path;
        $image->move($move_path, $fileName);
        $image_url = $path . $fileName;

        $book = new Book;
        $book->book_title = $request->book_title;
        $book->author = $request->author;
        $book->image = $image_url;
        $book->prc_file = $prc_file_url;
        $book->pdf_file = $pdf_file_url;
        $book->save();

        return redirect(route('admin.books.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('Admin::books.edit', compact('book'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(BookRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        if ($request->file('prc_file')) {
            $prc_file = $request->file('prc_file');
            $request->file('prc_file');
            $fileName = rename_file($prc_file->getClientOriginalName(), $prc_file->getClientOriginalExtension());
            $path = '/uploads/' . str_plural('prc_file');
            $move_path = public_path() . $path;
            $prc_file->move($move_path, $fileName);
            $prc_file_url = $path . $fileName;
            $book->prc_file = $prc_file_url;
        }

        if($request->file('pdf_file')) {
            $pdf_file = $request->file('pdf_file');
            $request->file('pdf_file');
            $fileName = rename_file($pdf_file->getClientOriginalName(), $pdf_file->getClientOriginalExtension());
            $path = '/uploads/' . str_plural('pdf_file');
            $move_path = public_path() . $path;
            $pdf_file->move($move_path, $fileName);
            $pdf_file_url = $path . $fileName;
            $book->pdf_file = $pdf_file_url;
        }
        
        if($request->file('image')) {
            $image = $request->file('image');
            $request->file('image');
            $fileName = rename_file($pdf_file->getClientOriginalName(), $image->getClientOriginalExtension());
            $path = '/uploads/' . str_plural('image');
            $move_path = public_path() . $path;
            $image->move($move_path, $fileName);
            $image_url = $path . $fileName;
            $book->image = $image_url;
        }

        $book->book_title = $request->book_title;
        $book->author = $request->author;

        $book->save() ? Flash::success(trans('admin.update.success')) : Flash::error(trans('admin.update.fail'));
        return redirect(route('admin.books.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return redirect(route('admin.books.index'));
    }
    
}
