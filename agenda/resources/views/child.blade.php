@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

  @component('alert')
      @slot('title')
          Title
      @endslot

      Mensagem!
  @endcomponent
@endsection
