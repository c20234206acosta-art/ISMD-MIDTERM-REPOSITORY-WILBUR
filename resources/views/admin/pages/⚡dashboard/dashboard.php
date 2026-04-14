<?php

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-admin')] class extends Component
{
    public int $totalUsers;
    public int $totalRoles;
    public int $totalOwners;
    public int $totalEmployees;

    public function mount()
    {
        $this->totalUsers = User::count();
        $this->totalRoles = Role::count();
        $this->totalOwners = User::role('shop owner')->count();
        $this->totalEmployees = User::role('employee')->count();
    }
};
