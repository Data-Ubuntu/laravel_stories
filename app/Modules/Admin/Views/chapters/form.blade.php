<table class="data" width="100%" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td width="135" class="middle">{!! Form::label('Chọn truyện') !!}</td>
            <td>
                {!! Form::select('product_id', $stories, null)!!}
                {{ $errors->first('product_id') }}
            </td>
        </tr>
        <tr>
            <td width="135" class="middle">{!! Form::label('Chapter name') !!}</td>
            <td>
                {!! Form::text('chapter_name', null) !!}
                {{ $errors->first('chapter_name') }}
            </td>
        </tr>
        <tr>
            <td width="135" class="middle">{!! Form::label('URL Rewrite') !!}</td>
            <td>
                {!! Form::text('url_rewrite', null) !!}
                {{ $errors->first('url_rewrite') }}
            </td>
        </tr>
        <tr>
            <td width="135" class="middle">{!! Form::label('Giới thiệu chung') !!}</td>
            <td>
                {!! Form::textarea('description',null) !!}
                {{ $errors->first('description') }}
            </td>
        </tr>
        <tr>
            <td width="135" class="middle">{!! Form::label('Thông tin chi tiết') !!}</td>
            <td>{!! Form::textarea('infomation',null) !!}</td>
        </tr>
        <tr>
            <td width="135" class="middle">{!! Form::label('Ảnh đại diện') !!}</td>
            <td>{!! Form::file('image') !!}</td>
        </tr>
        <tr>
            <td width="135"></td>
            <td class="middle">
            	{!! Form::submit('Lưu lại', ['class'=>'btn btn-blue']) !!}
				{!! Form::reset('Làm lại', ['class'=>'btn btn-danger']) !!}
            </td>
        </tr>
</tbody>