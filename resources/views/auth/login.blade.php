@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-3/12 bg-white p-4 m-40 rounded-lg">
        <form action="/login" method="post">
            @csrf
            <div class="mb-4">
                <input type="email" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 p-3 w-full rounded-lg text-gray-500 @error('email') border-red-400 @enderror" autocomplete="off">
                @error('email')
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
            <div>
                <button type="submit" class="bg-blue-400 text-white px-3 py-2 rounded w-full">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
