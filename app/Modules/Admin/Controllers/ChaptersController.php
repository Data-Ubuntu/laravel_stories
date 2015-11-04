<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ChapterRequest ;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Laracasts\Flash\Flash;
use App\Product;
use App\Chapter;
use App\Services\ImageService;

class ChaptersController extends Controller {
    use FormBuilderTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $chapters = Chapter::all();
        return view("Admin::chapters.index", compact('chapters', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $stories = Product::lists('title', 'id');
        return view('Admin::chapters.create', compact('stories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ChapterRequest $request)
    {
        $chapter = Chapter::create(ImageService::uploadImage($request, 'image'));
        $chapter->id ? Flash::success(trans('admin.create.success')) : Flash::error(trans('admin.create.fail'));
        return redirect(route('admin.chapters.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $stories = Product::lists('title', 'id');
        $chapter = Chapter::findOrFail($id);
        return view('Admin::chapters.edit', compact('stories', 'chapter'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ChapterRequest $request, $id)
    {
        $chapter = Chapter::findOrFail($id);
        $chapter->fill(ImageService::uploadImage($request, 'image'));
        $chapter->save() ? Flash::success(trans('admin.update.success')) : Flash::error(trans('admin.update.fail'));
        return redirect(route('admin.chapters.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $chapter = Chapter::findOrFail($id);
        return view('Admin::chapters.show', compact('chapter'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Chapter::findOrFail($id)->delete();
        return redirect(route('admin.chapters.index'));
    }
    
}
