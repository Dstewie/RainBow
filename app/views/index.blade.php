@extends('main_layout')

@section('header')
	@include('path/header')
@stop

@section('title')
	Велоклуб Радуга
@stop

@section('main_search')
	@include('path/form_main_search')
@stop

@section('search_telephone')
	@include('path/search_telephone')
@stop

@section('content')
	@include ('path/content	')
@stop