@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('content')
<h4>Dashboard Page</h4>
<p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>
@endsection
