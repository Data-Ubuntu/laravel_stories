@extends('Admin::layout')
@section('content')
<div class="onecolumn">
    <div class="header">
        <span>Danh sách Ebook</span>
        <ul id="control">
            <li>
                <a href="{{ route('admin.books.create') }}">
                    <img src="/admin/images/icon_add_big.png" alt="Thêm Ebook" title="Thêm Ebook" />
                </a>
            </li>
        </ul>
    </div>
    <table class="data" width="100%" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th style="width:20%; vertical-align: middle;">Hình ảnh</th>
                <th style="width:15%; vertical-align: middle;">Tên sách</th>
                <th style="width:10%; vertical-align: middle;">File Epub</th>
                <th style="width:5%; vertical-align: middle;">File Prc</th>
                <th style="width: 8%; vertical-align: middle;">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr class="class_jpage">
                    <td class="middle"><img src="{{ $book->image }}" width="100" /></td>
                    <td class="middle">{{ $book->book_title }}</td>
                    <td class="middle" align="center">
                        <a href="{{ $book->prc_file }}">Download</a>
                    </td>
                    <td class="middle" align="center">
                        <a href="{{ $book->pdf_file }}">Download</a>
                    </td>
                    <td class="middle">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.books.destroy', $book->id], 'class' => 'form-inline']) !!}
                            {!! Form::submit('Xóa') !!}
                        {!! Form::close() !!}
                        <a href="{{ route('admin.books.edit', $book->id) }}" class="edit_button">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
