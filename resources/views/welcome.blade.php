@extends('layouts.app')

@section('content')
<img src="{{ asset('storage/fjiipkTxIB8cVbmUsVZQHTzW8pMbfvZflrqAVYkH.jpeg') }} " alt="qqqqqq"/>
<img src="{{ asset('storage/admin@admin.pl/fjiipkTxIB8cVbmUsVZQHTzW8pMbfvZflrqAVYkH.jpeg') }} " alt="tttttttt"/>
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
