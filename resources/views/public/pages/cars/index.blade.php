@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            @foreach ($cars as $car)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm p-3">
                        {{-- Placeholder gambar kosong --}}
                        <img src="{{ asset('') }}" class="card-img-top" alt="Car Image">

                        <div class="card-body">
                            <h5 class="fw-bold mb-1">{{ $car->brand }} {{ $car->type }}</h5>

                            <ul class="list-unstyled mb-3">
                                <li><strong>Tahun:</strong> {{ $car->year }}</li>
                                <li><strong>No. Polisi:</strong> {{ $car->plate_number }}</li>
                                <li><strong>Warna:</strong> {{ $car->color ?? '-' }}</li>
                                <li><strong>Bahan Bakar:</strong> {{ ucfirst($car->fuel_type) }}</li>
                                <li><strong>Transmisi:</strong> {{ ucfirst($car->transmission) }}</li>
                                <li><strong>Kapasitas Kursi:</strong> {{ $car->seat_capacity }} seat</li>
                                <li><strong>Status:</strong>
                                    <span class="badge bg-{{ $car->status === 'available' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($car->status) }}
                                    </span>
                                </li>
                            </ul>

                            <p class="fw-bold text-primary mb-2">
                                Rp {{ number_format($car->price_per_day, 0, ',', '.') }} / hari
                            </p>

                            <a href="#" class="btn btn-primary w-100">Booking</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
