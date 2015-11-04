<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProductRequest ;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Laracasts\Flash\Flash;
use App\Product;
use App\Category;
use App\Services\ImageService;

class ProductsController extends Controller {
    use FormBuilderTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $title = "Danh sách truyện";
        $products = Product::all();
        return view("Admin::products.index", compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');
        $title = "Thêm mới truyện";
        return view('Admin::products.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create(ImageService::uploadImage($request, 'image'));
        $product->id ? Flash::success(trans('admin.create.success')) : Flash::error(trans('admin.create.fail'));
        return redirect(route('admin.products.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $categories = Category::lists('name', 'id');
        $title = "Sửa truyện";
        $product = Product::findOrFail($id);
        return view('Admin::products.edit', compact('product', 'title', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->fill(ImageService::uploadImage($request, 'image'));
        $product->save() ? Flash::success(trans('admin.update.success')) : Flash::error(trans('admin.update.fail'));
        return redirect(route('admin.products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $title = "Thông tin truyện";
        $product = Product::findOrFail($id);
        return view('Admin::products.show', compact('product', 'title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect(route('admin.products.index'));
    }
    
}
