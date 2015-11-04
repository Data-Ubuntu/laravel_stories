@extends('Admin::layout')
@section('content')
<div class="onecolumn">
<div class="header">
    <span>Danh sách truyện</span>
    <ul id="control">
        <li><a href="{{ route('admin.products.create') }}"><img src="/admin/images/icon_add_big.png" alt="Thêm danh mục" title="Thêm danh mục" /></a></li>
    </ul>
</div>

<table class="data" width="100%" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th style="width:10%; vertical-align: middle;">Hình ảnh</th>
            <th style="width:20%; vertical-align: middle;">Tên truyện</th>
            <th style="width:15%; vertical-align: middle;">URL Rewrite</th>
            <th style="width:10%; vertical-align: middle;">Danh mục</th>
            <th style="width:5%; vertical-align: middle;">Số chapter</th>
            <th style="width: 8%; vertical-align: middle;">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr class="class_jpage">
                <td class="middle"><img src="{{ $product->image }}" width="100" /></td>
                <td class="middle">{{ $product->title }}</td>
                <td class="middle">{{ $product->url_rewrite }}</td>
                <td class="middle">{{ $product->category->name }}</td>
                <td class="middle" align="center">{{ $product->chapters->count() }}</td>
                <td class="middle">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.products.destroy', $product->id], 'class' => 'form-inline']) !!}
                        {!! Form::submit('Xóa', ['class' => 'btn btn-default btn-xs black']) !!}
                    {!! Form::close() !!}
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="edit_button">Sửa</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection