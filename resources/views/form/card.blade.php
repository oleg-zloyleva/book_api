@extends('layouts.index')

@section('content')

    <card-component
        init_data="{{ $data }}"
    ></card-component>

@endsection