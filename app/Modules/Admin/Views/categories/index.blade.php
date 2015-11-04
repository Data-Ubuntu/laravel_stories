@extends('Admin::layout')
@section('content')
<div class="onecolumn">
    <div class="header">
        <span>Danh sách danh mục truyện</span>
        <ul id="control">
            <li><a href="{{ route('admin.categories.create') }}"><img src="/admin/images/icon_add_big.png" alt="Thêm danh mục" title="Thêm danh mục" /></a></li>
        </ul>
    </div>

    <table class="data" width="100%" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th style="width:20%; vertical-align: middle;">Tên danh mục</th>
                <th style="width:15%; vertical-align: middle;">URL Rewrite</th>
                <th style="width:10%; vertical-align: middle;">Hình ảnh</th>
                <th style="width:5%; vertical-align: middle;">Số Truyện</th>
                <th style="width: 7%; vertical-align: middle;">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr class="class_jpage">
                    <td class="middle">{{ $category->name }}</td>
                    <td class="middle">{{ $category->url_rewrite }}</td>
                    <td class="middle" align="center"><img src="{{ $category->image }}" width="100" /></td>
                    <td class="middle" align="center">{{ $category->products->count() }}</td>
                    <td class="middle">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.categories.destroy', $category->id], 'class' => 'form-inline']) !!}
                            {!! Form::submit('Xóa', ['class' => 'btn btn-default btn-xs black']) !!}
                        {!! Form::close() !!}
                        &nbsp;&nbsp;
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="edit_button">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection