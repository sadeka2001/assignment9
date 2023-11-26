@extends('layouts.master')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>Sadeka Akther</h1>
      <h2>I'm a professional Developer from Bangladesh</h2>
      <a href="{{ url('about') }}" class="btn-about">About Me</a>
    </div>
  </section>

@endsection