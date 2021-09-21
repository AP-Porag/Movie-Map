@extends('layouts.main')
@section('content')
    <div class="home-page">
        <div class="container mx-auto px-4">
            <section class="hero-section">
                <h4 class="welcome-text">
                    Welcome.
                </h4>
                <h5 class="brand-text">Millions of movies, TV shows and people to discover. Explore now.</h5>
                <livewire:search-dropdown class="search-box"/>
            </section>
            <section class="all-popular">
                <h1 class="section-header">what's popular</h1>
                <div id="scroll-progress"></div>
                <ul id="scroller">
                    @foreach($popularMovies as $popular)
                        <li>
                            <div class="mt-8">
                                <a href="{{route('single-movie',$popular['id'])}}">
                                    <img src="{{'https://image.tmdb.org/t/p/w500/'.$popular['poster_path']}}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="mt-2 popular_movie_box">
                                    <a href="{{route('single-movie',$popular['id'])}}" class="text-lg mt-2 hover:text-gray-300 capitalize">{{$popular['title']}}</a>
                                    <div class="flex items-center text-gray-400 text-sm mt-1">
                                        <svg class="fill-current text-yellow-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                        <span class="ml-1">{{$popular['vote_average']}}</span>
                                        <span class="mx-2">|</span>
                                        <span>{{$popular['release_date']}}</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>

            <section class="trending-trailer">
                <h1 class="section-header">trending Now</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach($AllTrending as $trending)
                        <div class="mt-8">
                            <a href="{{$trending['media_type'] === 'movie' ? route('single-movie', $trending['id']) : route('tv-show', $trending['id'])}}">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$trending['poster_path']}}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="{{$trending['media_type'] === 'movie' ? route('single-movie', $trending['id']) : route('tv-show', $trending['id'])}}" class="text-lg mt-2 hover:text-gray-300 capitalize">{{$trending['media_type'] === 'movie' ? $trending['title'] : $trending['name']}}</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <svg class="fill-current text-yellow-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                    <span class="ml-1">{{$trending['vote_average']}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="leaderboard pb-16">
                <h1 class="section-header">All Time Leaderboard</h1>
                <div class="pt-8 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">The Shawshank Redemption (1994) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-green-800 text-xs leading-none py-1 text-center text-white" style="width: 93%">93%</div>
                        </div>
                    </div>

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">The Godfather (1972) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-indigo-800 text-xs leading-none py-1 text-center text-white" style="width: 90%">90%</div>
                        </div>
                    </div>

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">The Godfather: Part II (1974) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-pink-800 text-xs leading-none py-1 text-center text-white" style="width: 87%">87%</div>
                        </div>
                    </div>

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">The Dark Knight (2008) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-blue-800 text-xs leading-none py-1 text-center text-white" style="width: 83%">83%</div>
                        </div>
                    </div>

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">Angry Men (1957) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-red-800 text-xs leading-none py-1 text-center text-white" style="width: 85%">85%</div>
                        </div>
                    </div>

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">Schindler's List (1993) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-purple-800 text-xs leading-none py-1 text-center text-white" style="width: 78%">78%</div>
                        </div>
                    </div>

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">The Lord Of The Rings: The Return Of The King (2003) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-gray-800 text-xs leading-none py-1 text-center text-white" style="width: 89%">89%</div>
                        </div>
                    </div>

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">Pulp Fiction (1994) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-red-500 text-xs leading-none py-1 text-center text-white" style="width: 83%">83%</div>
                        </div>
                    </div>

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">The Good, The Bad And The Ugly (1966) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-pink-400 text-xs leading-none py-1 text-center text-white" style="width: 75%">75%</div>
                        </div>
                    </div>

                    <div class="l-item">
                        <h6 class="mr-8 mt-1">The Lord Of The Rings: The Fellowship Of The Rings (2001) </h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-blue-100 text-xs leading-none py-1 text-center text-white" style="width: 72%">72%</div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
<style>

</style>
@section('script')
    <script>
        document
            .getElementById("scroller")
            .addEventListener("scroll", function () {
                var scrollerWrapper = document.getElementById("scroller");
                scrollPercent =
                    (scrollerWrapper.scrollLeft /
                        (scrollerWrapper.scrollWidth - scrollerWrapper.clientWidth)) *
                    100;
                document.getElementById("scroll-progress").style.width =
                    scrollPercent + "%";
            });
    </script>
@endsection
