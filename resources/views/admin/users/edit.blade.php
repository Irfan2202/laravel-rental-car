@extends('layouts.admin')

@section('content')
    @livewire('admin.users.user-edit', ['id' => $id])
@endsection
