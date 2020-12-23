@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-3/12 bg-white p-4 rounded-lg">
        <form action="/register" method="post">
            @csrf
            <div class="mb-4">
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 p-3 w-full rounded-lg text-gray-500 @error('name') border-red-400 @enderror" autocomplete="off">
                @error('name')
                <div class="text-red-400 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 p-3 w-full rounded-lg text-gray-500 @error('email') border-red-400 @enderror" autocomplete="off">
                @error('email')
                <div class="text-red-400 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 p-3 w-full rounded-lg text-gray-500 @error('username') border-red-400 @enderror" autocomplete="off">
                @error('username')
                <div class="text-red-400 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 p-3 w-full rounded-lg text-gray-500 @error('password') border-red-400 @enderror">
                @error('password')
                <div class="text-red-400 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" name="password_confirmation" id="password" placeholder="Confirm password" class="bg-gray-100 border-2 p-3 w-full rounded-lg text-gray-500">
            </div>
            <div>
                <button type="submit" class="bg-blue-400 text-white px-3 py-2 rounded w-full">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
