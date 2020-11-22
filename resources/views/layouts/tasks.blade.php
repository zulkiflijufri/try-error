@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Semua Tugas
    </div>
    <ul class="list-group list-group-flush">
        @forelse($tasks as $item)
        <li class="list-group-item"><a href="/task/{{ $item->id }}">{{ $item->task }}</a></li>
        </li>
        @empty
        <h6 class="text-center text-bold my-4">Belum ada tugas baru</h6>
        @endforelse
    </ul>
</div>
@endsection
