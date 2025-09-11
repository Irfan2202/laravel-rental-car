<?php

namespace App\Livewire\Admin\Cars;

use App\Models\Car;
use Livewire\Component;

class CarEdit extends Component
{
    public $carId, $brand, $type, $year, $plate_number, $color, $fuel_type,
        $transmission, $seat_capacity, $price_per_day, $status;

    public function mount($id)
    {
        $car = Car::findOrFail($id);

        $this->carId        = $car->id;
        $this->brand        = $car->brand;
        $this->type         = $car->type;
        $this->year         = $car->year;
        $this->plate_number = $car->plate_number;
        $this->color        = $car->color;
        $this->fuel_type    = $car->fuel_type;
        $this->transmission = $car->transmission;
        $this->seat_capacity = $car->seat_capacity;
        $this->price_per_day = $car->price_per_day;
        $this->status       = $car->status;
    }

    public function update()
    {
        $this->validate([
            'brand'        => 'required',
            'type'         => 'required',
            'year'         => 'required|numeric',
            'plate_number' => 'required',
            'seat_capacity' => 'required|numeric',
            'price_per_day' => 'required|numeric',
            'status'       => 'required',
        ]);

        $car = Car::findOrFail($this->carId);

        $car->update([
            'brand'        => $this->brand,
            'type'         => $this->type,
            'year'         => $this->year,
            'plate_number' => $this->plate_number,
            'color'        => $this->color,
            'fuel_type'    => $this->fuel_type,
            'transmission' => $this->transmission,
            'seat_capacity' => $this->seat_capacity,
            'price_per_day' => $this->price_per_day,
            'status'       => $this->status,
        ]);

        session()->flash('success', 'Data mobil berhasil diperbarui.');
        return redirect()->route('admin.cars.index');
    }

    public function render()
    {
        return view('livewire.admin.cars.car-edit');
    }
}
