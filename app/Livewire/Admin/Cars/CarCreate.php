<?php

namespace App\Livewire\Admin\Cars;

use App\Models\Car;
use Livewire\Component;

class CarCreate extends Component
{


    public $brand, $type, $year, $plate_number, $color, $fuel_type, $transmission, $seat_capacity, $price_per_day, $status;

    public function store()
    {
        $this->validate([
            'brand'         => 'required|string|max:255',
            'type'          => 'required|string|max:255',
            'year'          => 'required|numeric|min:1900|max:' . (date('Y') + 1),
            'plate_number'  => 'required|string|max:50|unique:cars,plate_number',
            'color'         => 'required|string|max:50', // jadi wajib
            'fuel_type'     => 'required|in:Petrol,Diesel,Electric,Hybrid', // wajib
            'transmission'  => 'required|in:Manual,Automatic', // wajib
            'seat_capacity' => 'required|numeric|min:1',
            'price_per_day' => 'required|numeric|min:0',
            'status'        => 'required|in:available,booked,rented,maintenance', // wajib
        ]);

        Car::create([
            'brand'         => $this->brand,
            'type'          => $this->type,
            'year'          => $this->year,
            'plate_number'  => $this->plate_number,
            'color'         => $this->color,
            'fuel_type'     => $this->fuel_type,
            'transmission'  => $this->transmission,
            'seat_capacity' => $this->seat_capacity,
            'price_per_day' => $this->price_per_day,
            'status'        => $this->status,
        ]);

        session()->flash('success', 'Data mobil berhasil ditambahkan.');
        return redirect()->route('admin.cars.index');
    }

    public function render()
    {
        return view('livewire.admin.cars.car-create');
    }
}
