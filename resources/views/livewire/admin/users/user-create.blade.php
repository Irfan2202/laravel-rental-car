<div class="card mb-4">
    <div class="card-header border-0 d-flex justify-content-between align-items-center">
        <h3 class="card-title">Tambah User</h3>
        <div class="card-tools">
            <a href="{{ route('admin.users.index') }}" class="btn btn-tool btn-sm" title="Back to Users">
                <i class="bi bi-arrow-left-circle"></i>
            </a>
        </div>
    </div>

    <div class="card-body table-responsive p-3">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form wire:submit.prevent="save">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" wire:model="name" class="form-control"
                        placeholder="Enter name">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" wire:model="email" class="form-control"
                        placeholder="Enter email">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" wire:model="password" class="form-control"
                        placeholder="Enter password">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" id="phone" wire:model="phone" class="form-control"
                        placeholder="Enter phone number">
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea id="address" wire:model="address" class="form-control" placeholder="Enter address"></textarea>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select id="role" wire:model="role" class="form-control">
                    <option value="owner">Owner</option>
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Save
            </button>
        </form>
    </div>
</div>
