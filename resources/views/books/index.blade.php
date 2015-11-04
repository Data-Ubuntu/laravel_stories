<form action="book/add" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <input type="file" name="filefield">
    <input type="submit">
</form>
 
 <h1> Pictures list</h1>
 <div class="row">
    <ul>
        @foreach($books as $book)
            <li>{{$book->filename}}</li>
        @endforeach
    </ul>
 </div>