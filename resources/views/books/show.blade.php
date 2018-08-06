@extends ('layouts.master')

@section ('content')

    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $book->title }}</h5>
            <small>{{ $book->created_at->toFormattedDateString() }}</small>
        </div>
        <p class="mb-1">{{ $book->description }}</p>

    </div>

    <hr>

    <div class="comments">

        <ul class="list-group">

            @foreach($book->comments as $comment)

                <li class="list-group-item" style="background:black;">
                    <strong>
                        {{ $book->user->name }} on {{$comment->created_at->diffForHumans()}} : &nbsp;

                    </strong>

                    {{ $comment->body }}
                </li>
            @endforeach

        </ul>

    </div>

    <hr>

    <div class="card">

        <div class="card-block">

            <form method="POST" action="/books/{{$book->id}}/comments">

                {{ csrf_field() }}

                <div class="form-group">
                    <textarea class="form-control" name="body" placeholder="Leave a comment here"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>

            </form>

        </div>

        @include('layouts.errors')

    </div>

@endsection