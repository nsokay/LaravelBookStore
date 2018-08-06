@extends('layouts.master')

@section('content')
    <main role="main" class="inner cover">


        <div class="list-group">

            @foreach($books as $book)
                @include('books.book')
            @endforeach

                {{ $books->links() }}

        </div>

    </main>
@endsection