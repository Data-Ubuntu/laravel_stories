<table class="data" width="100%" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td width="125">
                {!! Form::label('Tên sách') !!}
            </td>
            <td>
                {!! Form::text('book_title', null) !!}
                {{ $errors->first('book_title') }}
            </td>
        </tr>
        <tr>
            <td width="125">
                {!! Form::label('Tác giả') !!}
            </td>
            <td>
                {!! Form::text('author') !!}
                {{ $errors->first('author') }}
            </td>
        </tr>
        <tr>
            <td width="125">
                {!! Form::label('Chọn file Epub') !!}
            </td>
            <td>
                {!! Form::file('prc_file') !!}
            </td>
        </tr>
        <tr>
            <td width="125">
                {!! Form::label('Chọn file Pdf') !!}
            </td>
            <td>
                {!! Form::file('pdf_file') !!}
            </td>
        </tr>
        <tr>
            <td width="125">
                {!! Form::label('Ảnh đại diện') !!}
            </td>
            <td>
                {!! Form::file('image') !!}
            </td>
        </tr>
        <tr>
            <td width="125"></td>
            <td>
                {!! Form::submit('Lưu lại', ['class'=>'btn btn-blue']) !!}
                {!! Form::reset('Làm lại', ['class'=>'btn btn-danger']) !!}
            </td>
        </tr>