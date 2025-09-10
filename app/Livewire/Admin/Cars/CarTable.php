<?php

namespace App\Livewire\Admin\Cars;

use App\Models\Car;
use Livewire\Component;

class CarTable extends Component
{
    public function render()
    {
        $cars = Car::all();
        return view('livewire.admin.cars.car-table', compact('cars'));
    }
}
