@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            @forelse ($cars as $car)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm p-3">
                        <div>{{ $car->id }}</div>
                        <div class="fw-bold">{{ $car->brand ?? $car->name }}</div>
                        <div>{{ $car->type ?? '' }}</div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">Belum ada mobil tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
