@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        <form action="#" method="post" class="mb-4">
            @csrf
            <div class="mb-4">
                @if(session('success'))
                <div class="bg-green-500 p-2 m-3 rounded text-white text-center">
                    {{ session('success') }}
                </div>
                @endif
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg outline-none @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>

                @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Add note</button>
            </div>
        </form>

        @forelse($notes as $note)
        <div class="mb-4">
            <a href="#" class="font-bold">zulkifli</a> <span class="text-gray-500 text-sm">2 minute</span>
            <p>{{ $note->body }}</p>
        </div>
        @empty
        <div>
            <p>No notes here</p>
        </div>
        @endforelse
    </div>
</div>
@endsection
