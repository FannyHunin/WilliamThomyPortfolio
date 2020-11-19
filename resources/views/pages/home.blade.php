@extends('template')

@section('pageTitle')
    Accueil
@endsection

@include('sections.sectionHeader')

@section('content')
    @include('sections.carousel')
@endsection