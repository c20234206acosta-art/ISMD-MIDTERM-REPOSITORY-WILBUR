<?php

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-shop-owner')] class extends Component
{
    public int $totalEmployees;
    public int $totalProducts;
    public int $totalLaptops;
    public int $totalParts;

    public function mount()
    {
        $this->totalEmployees = User::role('employee')->count();
        $this->totalProducts = 0;
        $this->totalLaptops = 0;
        $this->totalParts = 0;
    }
};
