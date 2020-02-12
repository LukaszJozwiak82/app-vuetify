@extends('layouts.app')

@section('content')
    <ad-show :adv = '@json($adv)'/>
@endsection
