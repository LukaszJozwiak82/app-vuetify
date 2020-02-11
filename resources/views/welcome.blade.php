@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">

            <main-component
                        :auth='@json(Auth::user())'
                        :categories='@json($categories)'
                        :advertisements = '@json($advertisements)'
                        />

        </div>
    </div>
@endsection
