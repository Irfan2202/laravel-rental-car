<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('success', 'User berhasil dihapus.');
        return redirect()->route('admin.users.index');
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.admin.users.user-table', compact('users'));
    }
}
