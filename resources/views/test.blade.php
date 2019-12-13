@extends('layouts.app')

@section('content')
<h1>test</h1>
<div id="app">
    <example-component :test='@json($test)'
                        :auth='@json(Auth::user())'></example-component>
</div>
@endsection