@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4 pb-32">

        <div class="popular-actors py-8">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularActors as $actor)
                    <div class="actor mt-8">
                        <a href="{{ route('actor', $actor['id']) }}">
                            <img src="{{ $actor['profile_path'] }}" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('actor', $actor['id']) }}" class="text-lg hover:text-gray-300">{{ $actor['name'] }}</a>
                            <div class="text-sm truncate text-gray-400">{{ $actor['known_for'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- end popular-actors -->

{{--        loadmore pagination--}}
        <div class="page-load-status my-8">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
            </div>
            <p class="infinite-scroll-last text-lg text-red-800">End of content</p>
            <p class="infinite-scroll-error text-lg text-red-800">Error</p>
        </div>

    </div>


@endsection
@section('script')
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        var elem = document.querySelector('.grid');
        var infScroll = new InfiniteScroll( elem, {
            path: '/actors/page/@{{#}}',
            append: '.actor',
            status: '.page-load-status',
            // history: false,
        });
    </script>
@endsection
