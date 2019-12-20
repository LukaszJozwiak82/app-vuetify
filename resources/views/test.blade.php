@extends('layouts.app')

@section('content')

{{-- <?php dd($categories); ?> --}}
    <example-component :test='@json($test)'
                        :auth='@json(Auth::user())' 
                        :categories='@json($categories)'
                        ></example-component>
@endsection