{{-- extend the main layout --}}
@extends('layouts.app')

{{-- Page title --}}
@section('title', 'Todos')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Todos
    </h2>
@endsection

@section('content')
    <div id="app" style="">
        <main-app></main-app>
    </div>
    <script src="{{ mix('js/todos.js') }}"></script>
@endsection