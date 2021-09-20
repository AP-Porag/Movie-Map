@extends('layouts.main')
@section('content')
    <div class="about-page">
        <div class="container mx-auto px-4">
            <div class="mt-32">
                <div class="image-box">
                    <!-- Website Logo -->
                    <div class="content">
                        <h2>Hi there,</h2>
                        <img class="image" src="{{asset('img/about-hero.png')}}" width="902" height="298">

                        <h3>Let's talk about this app</h3>
                    </div>
                </div>
                <div class="info-box">
                    <div class="info">
                        <h1 class="section-header">Project Name</h1>
                        <p><a href="https://movie-mapping.herokuapp.com/">Movie-Mapping</a></p>
                    </div>
                    <div class="info">
                        <h1 class="section-header">Project Description</h1>
                        <p>The Movie mapping is a application for knowing movie and TV information. <br>Every piece of data has been coming from amazing the movie database Api. <br>The Movie Database (TMDB) is a community built movie and TV database.TMDb's strong international focus and breadth of data is largely unmatched. <br>I Put this app simple, I fetch data from the api and use them to build this amazing Api driven application.</p>
                    </div>
                    <div class="pt-8 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 pb-16">
                        <div class="item">
                            <h1 class="section-header">Language</h1>
                            <div class="">
                                <ul>
                                    <li>
                                        <p>php</p>
                                    </li>
                                    <li>
                                        <p>javascript</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="section-header">Framework</h1>
                            <div class="">
                                <ul>
                                    <li>
                                        <p>Laravel (Backend)</p>
                                    </li>
                                    <li>
                                        <p>Alpine js (Frontend)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="section-header">Document Object Model (DOM)</h1>
                            <div class="">
                                <ul>
                                    <li>
                                        <p>HTML5</p>
                                    </li>
                                    <li>
                                        <p>CSS3</p>
                                    </li>
                                    <li>
                                        <p>Javascript</p>
                                    </li>
                                    <li>
                                        <p>Tailwind CSS</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="section-header">Functionality or Module</h1>
                            <div class="">
                                <ul>
                                    <li>
                                        <p>Showing popular, trending, new coming, upcoming movies</p>
                                    </li>
                                    <li>
                                        <p>Showing TV series</p>
                                    </li>
                                    <li>
                                        <p>Showing actors</p>
                                    </li>
                                    <li>
                                        <p>search movies</p>
                                    </li>
                                    <li>
                                        <p>Showing single movie,TV series and actor's information</p>
                                    </li>
                                    <li>
                                        <p>Showing leaderboard information</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="section-header">Database</h1>
                            <div class="">
                                <ul>
                                    <li>
                                        <p>The Movie Database (TMDB) used by Api</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="section-header">Hosting</h1>
                            <div class="">
                                <ul>
                                    <li>
                                        <p>Heroku</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="section-header">Api</h1>
                            <div class="">
                                <ul>
                                    <li>
                                        <a href="https://www.themoviedb.org/">themoviedb.org</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <h1 class="section-header">Laravel Packages</h1>
                            <div class="">
                                <ul>
                                    <li>
                                        <a href="https://www.themoviedb.org/">Laravel Livewire</a>
                                    </li>
                                    <li>
                                        <a href="https://www.themoviedb.org/">Laravel view model</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .about-page{
        padding-top: 70px;
        box-sizing: border-box;
        width: 100%;
        background-image: url(/img/about-bg.svg);
        background-position: center -250px;
        background-repeat: no-repeat;
        position: relative;
        top: 0;
        left: 0;
        z-index: 2;
    }
    .info-box .info p{
        text-align: justify;
    }
    .content{
        color: #fff;
        padding: 20px 0 70px 0;
        width: 800px;
        margin: 0 auto;
        text-align: center;
    }
    .content h2{
        height: 233px;
        line-height: 233px;
        font-family: 'Shrikhand', cursive;
        font-size: 10em;
        font-weight: 400;
        position: relative;
        top: 0;
        left: 0;
        text-transform: capitalize;
    }
    .content img{
        position: relative;
        top: 0;
        left: 0;
        margin-top: -140px;
    }
    .content h3{
        font-size: 4em;
        margin-top: 40px;
        margin-bottom: 20px;
        font-weight: 700;
        text-transform: capitalize;
    }
</style>
