<table class="data" width="100%" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td width="125">
                {!! Form::label('Tên danh mục') !!}
            </td>
            <td>
                {!! Form::text('name', null, ['size'=>'150']) !!}
                {{ $errors->first('name') }}
            </td>
        </tr>
        <tr>
            <td width="125">
                {!! Form::label('URL Rewrite') !!}
            </td>
            <td>
                {!! Form::text('url_rewrite', null, ['size'=>'150']) !!}
                {{ $errors->first('url_rewrite') }}
            </td>
        </tr>
        <tr>
            <td width="125" style="vertical-align: middle;">
                {!! Form::label('Thông tin mô tả') !!}
            </td>
            <td>
                {!! Form::textarea('description',null, ['class'=>'summernote']) !!}
            </td>
        </tr>
        <tr>
            <td width="125" style="vertical-align: middle;">
                {!! Form::label('Ảnh đại diện') !!}
            </td>
            <td>
                {!! Form::file('image') !!}
            </td>
        </tr>
        <tr>
            <td width="125" style="vertical-align: middle;">
            </td>
            <td>
                {!! Form::submit('Lưu lại', ['class'=>'btn btn-blue']) !!}
                {!! Form::reset('Làm lại', ['class'=>'btn btn-danger']) !!}
            </td>
        </tr>
    </tbody>
</table>