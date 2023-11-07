@extends('layouts.app')

@section('titulo')
    Registrar
@endsection

@section('contenido')

    <div class="md:flex 
        md:justify-center
        md:gap-10 md:items-center">

        <div class="md:w-4/12 p-5">
            <p>imagen</p>
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div>
                    <label for="name"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Escribe tu nombre"
                        class="border p-3 w-full mb-3 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{old('name')}}"
                        >
                    @error('name')                  
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="username"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre del Usuario
                    </label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        placeholder="Escribe tu nombre de usuario"
                        class="border p-3 mb-3 w-full rounded-lg @error('username') border-red-500 @enderror">
                    @error('username')                  
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="email"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Escribe tu email"
                        class="border p-3 mb-3 w-full rounded-lg @error('email') border-red-500 @enderror">
                    @error('email')                  
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Escribe tu Contraseña"
                        class="border p-3 mb-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')                  
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir la Contraseña
                    </label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="Confirma tu Contraseña"
                        class="border p-3 mb-3 w-full rounded-lg @error('password_confirmation') border-red-500 @enderror">
                    @error('password_confirmation')                  
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit"
                value="Registrarse"
                class="bg-sky-500 hover:bg-sky-700 transition-colors w-full cursor-pointer
                uppercase font-bold p-3
                text-white
                rounded-lg">

            </form>
        
        </div>
    </div>




@endsection
