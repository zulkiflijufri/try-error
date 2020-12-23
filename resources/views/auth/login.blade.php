@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="lg:w-3/12 bg-white p-4 m-25 rounded-lg md:w-4/12 sm:w-6/12">
        <form action="/login" method="post">
            @csrf
            <div class="mb-4">
                @if(session('error'))
                <div class="bg-red-500 rounded mb-3 p-3 text-white text-center w-full">
                    <p>{{ session('error') }}</p>
                </div>
                @endif
                <input type="text" name="username" id="email" placeholder="Username" class="bg-gray-100 border-2 p-3 w-full rounded-lg text-gray-500 outline-none @error('username') border-red-400 @enderror" value="{{ old('username') }}" autocomplete="off">
                @error('username')
                <div class="text-red-400 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 p-3 w-full rounded-lg text-gray-500 outline-none @error('password') border-red-400 @enderror">
                @error('password')
                <div class="text-red-400 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-400 text-white px-3 py-2 rounded w-full">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
