@extends("frontend.master")

@section("title", "Blog - " . config('app.sitesettings')::first()->site_title)

@section("content")
<section class="post-list">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                @foreach($posts as $post)
                    <div class="post-item">
                        <h2><a href="{{ route('frontend.post', $post->slug) }}">{{ $post->title }}</a></h2>
                        <p>{{ Str::limit($post->content, 150) }}</p>
                        <a href="{{ route('frontend.post', $post->slug) }}">Read more</a>
                    </div>
                @endforeach

                <!-- Pagination Links -->
                <div class="pagination">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
