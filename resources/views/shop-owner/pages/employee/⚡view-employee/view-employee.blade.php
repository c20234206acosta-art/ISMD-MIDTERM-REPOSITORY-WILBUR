<div>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col rounded-xl border border-black dark:border-white p-4 sm:p-6 lg:p-8 bg-gray-200 dark:bg-neutral-800 shadow-2xs">
            <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-md bg-gray-200 dark:bg-neutral-800">
                <div class="min-w-full inline-block align-middle">
                    <div
                        class="rounded-xl shadow-2xs overflow-hidden">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center">
                            <div>
                                <h2 class="text-xl font-semibold text-black dark:text-white">
                                    All Employees
                                </h2>
                                <p class="text-sm text-black dark:text-white">
                                    Manage all Employees
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-black dark:bg-white text-white dark:text-black shadow-2xs hover:bg-neutral-700 dark:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden dark:border-neutral-700 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        href="#">
                                        View all
                                    </a>
                                    @can('create', App\Models\User::class)
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-black dark:bg-white text-white dark:text-black hover:bg-neutral-700 dark:bg-gray-200 focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none"
                                        href="{{ route('shop-owner.employee.create') }}">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Add Employee
                                    </a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full text-xs sm:text-sm">
                            <thead class="bg-black dark:bg-white">
                                <tr>
                                    <th class="ps-2 sm:ps-6 py-3 text-start font-semibold uppercase text-white dark:text-black">
                                        ID
                                    </th>
                                    <th class="ps-2 sm:ps-6 py-3 text-start font-semibold uppercase text-white dark:text-black">
                                        Name
                                    </th>
                                    <th class="hidden sm:table-cell px-2 sm:px-6 py-3 text-start font-semibold uppercase text-white dark:text-black">
                                        Email
                                    </th>
                                    <th class="hidden sm:table-cell px-2 sm:px-6 py-3 text-start font-semibold uppercase text-white dark:text-black">
                                        Role
                                    </th>
                                    <th class="hidden md:table-cell px-2 sm:px-6 py-3 text-start font-semibold uppercase text-white dark:text-black">
                                        Created
                                    </th>
                                    <th class="px-2 sm:px-6 py-3 text-end"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-600">
                                @forelse ($this->employees as $employee)
                                    <tr>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block font-semibold text-black dark:text-white">
                                                EMP{{ ($employee->id) }}
                                            </span>
                                        </td>
                                        </td>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block font-semibold text-black dark:text-white">
                                                {{ ($employee->name) }}
                                            </span>
                                        </td>
                                        <td class="hidden sm:table-cell px-2 sm:px-6 py-3">
                                            <span class="block text-black dark:text-white">
                                                {{ $employee->email }}
                                            </span>
                                        </td>
                                        <td class="hidden sm:table-cell px-6 py-3">
                                            <span class="block text-sm text-black dark:text-white">
                                                {{ \Illuminate\Support\Str::ucfirst($employee->roles->pluck('name')->join(', ') ?: 'No role') }}
                                            </span>
                                        </td>
                                        <td class="hidden md:table-cell px-2 sm:px-6 py-3">
                                            <span class="text-black dark:text-white">
                                                {{ $employee->created_at->diffForHumans() }}
                                            </span>
                                        </td>
                                        <td class="px-2 sm:px-6 py-1.5 text-start">
                                            @can('update', $employee)
                                            <a href="{{ route('admin.employee.edit', $employee->id) }}"
                                            class="text-black dark:text-white hover:underline">
                                                Edit
                                            </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-2 sm:px-6 py-4 text-center text-black dark:text-white">
                                            No employees found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-600">
                            <div>
                                <p class="text-sm text-black dark:text-white">
                                    <span class="font-semibold text-black dark:text-white">
                                        {{ $this->employees->total() }}
                                    </span>
                                    results
                                </p>  
                            </div>
                            <div>
                                <div class="inline-flex gap-x-2">
                                    
                                    {{-- Prev Button --}}
                                    @if($this->employees->onFirstPage()) 
                                        <button disabled
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-gray-200 dark:bg-neutral-800 text-gray-400 cursor-not-allowed">
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 15l-6-6 6-6" />
                                            </svg>
                                            Prev
                                        </button>
                                    @else
                                        <button wire:click="previousPage"
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-gray-200 hover:shneutral-800md transition-all duration-200 dark:bg-black dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700">
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 15l-6-6 6-6" />
                                            </svg>
                                            Prev
                                        </button>
                                    @endif

                                    {{-- Next Button --}}
                                    @if($this->employees->hasMorePages())
                                        <button wire:click="nextPage"
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md border bg-gray-200 hover:shneutral-800md transition-all duration-200 dark:bg-black dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700">
                                            Next
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 3l6 6-6 6" />
                                            </svg>
                                        </button>
                                    @else
                                        <button disabled
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md border bg-gray-200 dark:bg-neutral-800 text-gray-400 cursor-not-allowed">
                                            Next
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 3l6 6-6 6" />
                                            </svg>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</div>
