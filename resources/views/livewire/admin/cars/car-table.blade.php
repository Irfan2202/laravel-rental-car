<div class="card mb-4">
    <div class="card-header border-0">
        <h3 class="card-title">Cars</h3>
        <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm"><i class="bi bi-plus-circle"></i></a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Year</th>
                    <th>Plate Number</th>
                    <th>Color</th>
                    <th>Fuel Type</th>
                    <th>Transmission</th>
                    <th>Seats</th>
                    <th>Price/Day</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->type }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->plate_number }}</td>
                        <td>{{ $car->color }}</td>
                        <td>{{ $car->fuel_type }}</td>
                        <td>{{ $car->transmission }}</td>
                        <td>{{ $car->seat_capacity }}</td>
                        <td>{{ $car->price_per_day }}</td>
                        <td>
                            @php
                                $status = strtolower($car->status);
                                $badgeClass = match ($status) {
                                    'available' => 'text-bg-success',
                                    'booked' => 'text-bg-warning',
                                    'rented' => 'text-bg-danger',
                                    'maintenance' => 'text-bg-secondary',
                                    default => 'text-bg-light',
                                };
                            @endphp
                            <span class="badge {{ $badgeClass }}">{{ ucfirst($car->status) }}</span>
                        </td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="bi bi-eye"></i></a>
                            <a href="#" class="text-warning me-2"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="text-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
