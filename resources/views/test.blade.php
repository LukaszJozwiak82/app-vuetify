@extends('layouts.app')

@section('content')
    <example-component :test='@json($test)'
                        :auth='@json(Auth::user())'></example-component>
@endsection