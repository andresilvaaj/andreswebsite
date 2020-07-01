@extends('layout.plain')

@section('content')
    <div id="background-image">
        <div id="message">
            <div class="row1">
                <div class="message-home">Hello, I am a</div>
            </div>
            <div class="row1">
                <div class="message-home-highlighted">Developer & Designer</div>
            </div>
            <div class="row1">
                <div class="message-home">From BC, Canada</div>
            </div>
        </div>
    </div>
    <div id="menu">
        <div class="section-container">
            <div id="logo-container">
                <div id="logo">Andre Araujo's</div>
                <div id="sub-logo">PORTFOLIO</div>
            </div>
            <div id="menu-container">
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="about-me.html">about me</a></li>
                    <li><a href="portfolio.html">portfolio</a></li>
                    <li><a href="contact-me.html">contact me</a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection