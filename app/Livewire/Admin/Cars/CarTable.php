<?php

namespace App\Livewire\Admin\Cars;

use App\Models\Car;
use Livewire\Component;

class CarTable extends Component
{

    public function delete($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        session()->flash('success', 'User berhasil dihapus.');
        return redirect()->route('admin.cars.index');
    }

    public function render()
    {
        $cars = Car::all();
        return view('livewire.admin.cars.car-table', compact('cars'));
    }
}
