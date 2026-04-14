<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.app-shop-owner')] class extends Component
{
     #[Computed]
    public function employees()
    {
        // Fetch all users with the 'employee' role using Spatie Permission
        return User::role('employee')->with('roles')->paginate(5);
    }
};
