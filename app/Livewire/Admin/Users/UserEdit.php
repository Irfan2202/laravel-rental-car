<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserEdit extends Component
{
    public $userId, $name, $email, $password, $phone, $address, $role;

    // load data user ke form
    public function mount($id)
    {
        $user = User::findOrFail($id);

        $this->userId  = $user->id;
        $this->name    = $user->name;
        $this->email   = $user->email;
        $this->phone   = $user->phone;
        $this->address = $user->address;
        $this->role    = $user->role;
    }

    public function update()
    {
        $this->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'role'  => 'required',
        ]);

        $user = User::findOrFail($this->userId);

        $user->update([
            'name'     => $this->name,
            'email'    => $this->email,
            'phone'    => $this->phone,
            'address'  => $this->address,
            'role'     => $this->role,
            'password' => $this->password ? Hash::make($this->password) : $user->password,
        ]);

        session()->flash('success', 'User berhasil diperbarui.');
        return redirect()->route('admin.users.index');
    }


    public function render()
    {
        return view('livewire.admin.users.user-edit');
    }
}
