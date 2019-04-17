@extends('layouts.index')

@section('content')

    <card-component
        :data="{{ $data }}"
    ></card-component>

@endsection