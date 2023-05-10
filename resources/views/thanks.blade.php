@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        @if (session()->has('success'))
                 <div class="alert " style=" color: $teal-400; ">
                  {{ session()->get('thank') }}
                 </div>
             @endif
    </div>
</div>