<div class="card mb-4">
    <div class="card-header border-0 d-flex justify-content-between align-items-center">
        <h3 class="card-title">Edit User</h3>
        <div class="card-tools">
            <a href="{{ route('admin.users.index') }}" class="btn btn-tool btn-sm">
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

        <form wire:submit.prevent="update">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" wire:model="email" class="form-control">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Password (kosongkan jika tidak diubah)</label>
                    <input type="password" wire:model="password" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" wire:model="phone" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <textarea wire:model="address" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>
                <select wire:model="role" class="form-control">
                    <option value="owner">Owner</option>
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Update
            </button>
        </form>
    </div>
</div>
