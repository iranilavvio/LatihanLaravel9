<div class="card mb-4">
    <div class="card-body">
        <img src="{{ $book->image }}" class="img-fluid rounded mb-2" alt="">
        <h6 class="mt-1">
            <a href="{{ route('book.detail', $book->slug) }}"
                class="text-dark text-decoration-none">{{ $book->name }}</a>
        </h6>
        <p class="text-muted">{{ str()->limit($book->slug, 20) }}</p>
        <a href="{{ route('category.detail', $book->category->id) }}"
            class="card-text btn btn-primary btn-sm rounded-pill">
            {{ $book->category->name }}</a>
        <p>Review ({{ $book->reviews_count }})</p>
    </div>
</div>
