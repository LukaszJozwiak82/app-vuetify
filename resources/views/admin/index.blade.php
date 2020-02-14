@extends('layouts.admin')

@section('content')
<admin-component
    :mi = '@json($menuItems)'
>
</admin-component>
@endsection
