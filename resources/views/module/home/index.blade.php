@extends('frontend')

@section('style')

@stop

@section('content')
    <!-- Slider -->
    @include('partial.slider')
    <!--/#home-slider-->

    <!-- Services -->
    @include('partial.services')
    <!--/#services-->

    <!-- Actions -->
    @include('partial.actions')
    <!--/#action-->

    <!-- Features -->
    @include('partial.features')
    <!--/#features-->

    <!-- Clients -->
    @include('partial.partners')
    <!--/#clients-->
    
@stop

@section('script')

@stop
