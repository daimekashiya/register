@extends('layouts.membership')

@section('content')
    @auth
        @permission('approve_company')
            @include('membership.index')
        @else
            @include('membership.menu')
            @include('membership.edit')
        @endpermission
    @else
        @include('membership.index')
    @endauth
@endsection
