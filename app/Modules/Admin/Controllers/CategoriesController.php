<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Laracasts\Flash\Flash;
use App\Category;
use App\Services\ImageService;

class CategoriesController extends Controller {
    use FormBuilderTrait;

    /*
     * @return Response
     */
    public function index()
    {   
        $title = "Danh sach category";
        $categories = Category::all();
        return view("Admin::categories.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = "Thêm mới category";
        return view('Admin::categories.create', compact('form', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create(ImageService::uploadImage($request, 'image'));
        $category->id ? Flash::success(trans('admin.create.success')) : Flash::error(trans('admin.create.fail'));
        return redirect(route('admin.categories.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('Admin::categories.edit', compact('category'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->fill(ImageService::uploadImage($request, 'image'));
        $category->save() ? Flash::success(trans('admin.update.success')) : Flash::error(trans('admin.update.fail'));
        return redirect(route('admin.categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect(route('admin.categories.index'));
    }
    
}
