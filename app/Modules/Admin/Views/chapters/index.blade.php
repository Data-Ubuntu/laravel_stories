@extends('Admin::layout')
@section('content')
<div class="onecolumn">
<div class="header">
    <span>Danh sách chapter truyện</span>
    <ul id="control">
        <li><a href="{{ route('admin.chapters.create') }}"><img src="/admin/images/icon_add_big.png" alt="Thêm danh mục" title="Thêm danh mục" /></a></li>
    </ul>
</div>

<table class="data" width="100%" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th style="width:10%; vertical-align: middle;">Hình ảnh</th>
            <th style="width:20%; vertical-align: middle;">Tên chapter truyện</th>
            <th style="width:15%; vertical-align: middle;">URL Rewrite</th>
            <th style="width:10%; vertical-align: middle;">Truyện</th>
            <th style="width: 8%; vertical-align: middle;">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($chapters as $chapter)
            <tr class="class_jpage">
                <td class="middle"><img src="{{ $chapter->image }}" width="100" /></td>
                <td class="middle">{{ $chapter->chapter_name }}</td>
                <td class="middle">{{ $chapter->url_rewrite }}</td>
                <td class="middle">{{ $chapter->product->title }}</td>
                <td class="middle">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.chapters.destroy', $chapter->id], 'class' => 'form-inline']) !!}
                        {!! Form::submit('Xóa', ['class' => 'btn btn-default btn-xs black']) !!}
                    {!! Form::close() !!}
                    &nbsp;&nbsp;
                    <a href="{{ route('admin.chapters.edit', $chapter->id) }}" class="edit_button">Sửa</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
