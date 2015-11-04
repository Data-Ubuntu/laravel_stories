<table class="data" width="100%" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
        	<td width="125">{!! Form::label('Chọn danh mục') !!}</td>
            <td>
                {!! Form::select('category_id', $categories, null)!!}
                {{ $errors->first('category_id') }}
            </td>
        </tr>
        <tr>
        	<td width="125">{!! Form::label('Tên truyện') !!}</td>
            <td>
                {!! Form::text('title', null, ['size'=>'150']) !!}
                {{ $errors->first('title') }}
            </td>
        </tr>
        <tr>
        	<td width="125">{!! Form::label('URL Rewrite') !!}</td>
            <td>
                {!! Form::text('url_rewrite', null, ['size'=>'150']) !!}
                {{ $errors->first('url_rewrite') }}
            </td>
        </tr>
        <tr>
        	<td width="125">{!! Form::label('Tác giả') !!}</td>
            <td>
                {!! Form::text('author', null, ['size'=>'150']) !!}
                {{ $errors->first('author') }}
            </td>
        </tr>
        <tr>
        	<td width="125" class="middle">{!! Form::label('Thông tin truyện') !!}</td>
            <td>{!! Form::textarea('description',null) !!}</td>
        </tr>
        <tr>
        	<td width="125">{!! Form::label('Ảnh đại diện') !!}</td>
            <td>{!! Form::file('image') !!}</td>
        </tr>
        <tr>
        	<td width="125">{!! Form::label('Ảnh đại diện') !!}</td>
            <td>{!! Form::submit('Lưu lại', ['class'=>'btn btn-blue']) !!}
            	{!! Form::reset('Làm lại', ['class'=>'btn btn-danger']) !!}
            </td>
        </tr>
    </tbody>
</table>
