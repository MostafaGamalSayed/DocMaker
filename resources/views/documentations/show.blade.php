@extends('layouts.app')

@section('title')
  {{ $documentation->title }}

@endsection

@section('sidebar')
  @sidebar(['doc' => $documentation])
  @endsidebar
@endsection


@section('content')
@endsection
