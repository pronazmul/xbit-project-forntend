@extends('layout.app')

@section('title','HOME')

@section('content')

@include('components.homebanner')
@include('components.homegallery')
@include('components.hometestimonial')
@include('components.homecontract')

@endsection