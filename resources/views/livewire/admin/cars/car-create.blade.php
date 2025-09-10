<div class="card mb-4">
    <div class="card-header border-0">
        <h3 class="card-title">Tambah Mobil</h3>
        <div class="card-tools">
            <a href="{{ route('admin.cars.index') }}" class="btn btn-tool btn-sm">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
        </div>
    </div>
    <div class="card-body">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form wire:submit.prevent="store">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Brand</label>
                    <input type="text" wire:model="brand" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Type</label>
                    <input type="text" wire:model="type" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Year</label>
                    <input type="number" wire:model="year" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Plate Number</label>
                    <input type="text" wire:model="plate_number" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Color</label>
                    <input type="text" wire:model="color" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Fuel Type</label>
                    <select wire:model="fuel_type" class="form-select">
                        <option value="">-- pilih --</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Electric">Electric</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Transmission</label>
                    <select wire:model="transmission" class="form-select">
                        <option value="">-- pilih --</option>
                        <option value="Manual">Manual</option>
                        <option value="Automatic">Automatic</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Seat Capacity</label>
                    <input type="number" wire:model="seat_capacity" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Price/Day</label>
                    <input type="number" wire:model="price_per_day" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select wire:model="status" class="form-select">
                        <option value="">-- pilih --</option>
                        <option value="available">Available</option>
                        <option value="booked">Booked</option>
                        <option value="rented">Rented</option>
                        <option value="maintenance">Maintenance</option>
                    </select>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Simpan
                </button>
                <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
