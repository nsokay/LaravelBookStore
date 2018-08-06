@extends ('layouts.master')

@section('content')

    <h1>Create a book</h1>

    <hr>

    <form method="POST" action="/books">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="bookTitle">Title</label>
            <input type="text" class="form-control" id="bookTitle" name="title" autocomplete="off"
                   aria-describedby="emailHelp" placeholder="Enter book title">
        </div>

        <div class="form-group">
            <label for="bookDescription">Description</label>
            <textarea name="description" id="bookDescription" class="form-control"
                      placeholder="Enter book description"></textarea>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add a Book</button>
        </div>

        @include('layouts.errors')
    </form>

@endsection