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
                <h1 class="section-header">trending</h1>
                <div class="pt-8 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">

                    <div class="">
                        <h6 class="mr-8 mt-1">Avengers</h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-green-800 text-xs leading-none py-1 text-center text-white" style="width: 75%">75%</div>
                        </div>
                    </div>

                    <div class="">
                        <h6 class="mr-8 mt-1">F9</h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-pink-800 text-xs leading-none py-1 text-center text-white" style="width: 45%">45%</div>
                        </div>
                    </div>

                    <div class="">
                        <h6 class="mr-8 mt-1">Avengers</h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-blue-800 text-xs leading-none py-1 text-center text-white" style="width: 85%">85%</div>
                        </div>
                    </div>

                    <div class="">
                        <h6 class="mr-8 mt-1">Avengers</h6>
                        <div class="shadow w-full bg-yellow-500 mt-2">
                            <div class="bg-red-800 text-xs leading-none py-1 text-center text-white" style="width: 65%">65%</div>
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
