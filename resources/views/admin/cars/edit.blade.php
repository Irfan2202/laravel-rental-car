@extends('layouts.admin')
@section('content')
    @livewire('admin.cars.car-edit', ['id' => $id])
@endsection
