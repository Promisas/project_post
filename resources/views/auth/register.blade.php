@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <Input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('name') border-red-500 @enderror" value="{{ old('name')}}"></Input>

                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

            
            <div class="mb-4">
                <label for="username" class="sr-only">username</label>
                <Input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('username')}}"></Input>
                
                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror

            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <Input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('email')}}"></Input>
                
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
                
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Passowrd</label>
                <Input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value=""></Input>
                
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror

            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password again</label>
                <Input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value=""></Input>
            
                @error('password_confirmation')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            
          

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>

        </form>

    </div>

</div>

@endsection