<a href="/books/{{ $book->id }}" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $book->title }}</h5>
        <small>{{ $book->created_at->toFormattedDateString() }}</small>
    </div>
    <p class="mb-1">{{ $book->description }}</p>
    <small>{{ $book->user->name }}</small>
</a>