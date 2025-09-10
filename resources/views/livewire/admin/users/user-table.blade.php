<div class="card mb-4">
    <div class="card-header border-0">
        <h3 class="card-title">Users</h3>
        <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm"><i class="bi bi-plus-circle"></i></a>
        </div>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card-body table-responsive p-0">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td class="text-nowrap">
                            <button class="btn btn-outline-primary btn-sm me-1">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </button>
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-trash3"></i>
                                Delete
                            </button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
