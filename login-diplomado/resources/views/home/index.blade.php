@extends('layouts.app')

@section('titulo')
    Home
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                1
            </div>
            <div class="md:w-8/12 lq:w-6/12 px-5">
                <p class="text-gray-700 text-2x1">{{auth()->user()->username }}</p>
            </div>    
        </div>
    </div>


@endsection