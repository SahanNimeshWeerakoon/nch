@extends('layouts.app')
    @section('content')

        @if (Session('success'))
            <div class="alert alert-success">
                You will be contacted sooner.
                <a href="/" class="btn btn-success"> OKAY </a>
            </div>
        @endif
    
        @include('sections/nav')

        @include('sections/carousel')        

        @include('sections/about')

        @include('sections/courses')

        @include('sections/career')

        @include('sections/studymore')

        @include('sections/students')

        @include('sections/team')
        
        @include('sections/contact')

        @include('sections/footer')

    @endsection