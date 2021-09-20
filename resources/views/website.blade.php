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
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                </ul>
            </section>

            <section class="trending-trailer">
                <h1 class="section-header">trending trailer</h1>
                <div id="scroll-progress"></div>
                <ul id="scroller">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                </ul>
            </section>

            <section class="all-trending">
                <h1 class="section-header">trending</h1>
                <div id="scroll-progress"></div>
                <ul id="scroller">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                </ul>
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
