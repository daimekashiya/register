@extends('layouts.theme.header1')

@section('content')
    @auth
        @if(Auth::user()->permissions()->where('name','approve_company')->count() > 0 )
            @include('membership.index')
        @else 
            @include('membership.edit')
        @endif
    @else
        @include('membership.index')
    @endauth
@endsection
