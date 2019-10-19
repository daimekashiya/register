@extends('layouts.theme.header1')

@section('content')
    @auth
        @permission('approve_company')
            @include('membership.index')
        @else
            
            @include('membership.edit')
        @endpermission
    @else
        @include('membership.index')
    @endauth
@endsection
