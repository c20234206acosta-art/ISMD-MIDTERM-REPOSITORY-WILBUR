<div>
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="mt-12 max-w-full mx-auto">
      <!-- Card -->
      <div class="flex flex-col border border-black dark:border-white rounded-xl p-4 sm:p-6 lg:p-8 bg-gray-200 dark:bg-neutral-800 shadow-2xs">

        <!-- Back Button -->
        <div class="mb-4">
          <a href="{{ route('admin.user.view') }}"
            class="inline-flex items-center gap-x-2 px-3 py-2 text-sm font-medium rounded-lg bg-black dark:bg-white text-white dark:text-black hover:bg-neutral-700 dark:hover:bg-gray-200 focus:outline-hidden">
            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M15 15l-6-6 6-6" />
            </svg>
            <span>Back</span>
          </a>
        </div>

        <!-- Title -->
        <h2 class="mb-8 text-xl font-semibold text-black dark:text-white">
          Update User
        </h2>

        <!-- Form -->
        <form wire:submit.prevent='update'>
          <div class="grid gap-4 lg:gap-6">
            
            <!-- Name -->
            <div>
              <label for="hs-name"
                class="block mb-2 text-sm font-medium text-black dark:text-white">Name</label>
              <input wire:model.defer='name' type="text" name="hs-name" id="hs-name"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-black border-black rounded-lg sm:text-sm text-black dark:text-white placeholder:text-neutral-400 focus:border-green-600 focus:ring-green-600">
                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Email -->
            <div class="mt-5">
              <label for="hs-email"
                class="block mb-2 text-sm font-medium text-black dark:text-white">Email</label>
              <input wire:model.defer='email' type="email" name="hs-email" id="hs-email"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-black border-black rounded-lg sm:text-sm text-black dark:text-white placeholder:text-neutral-400 focus:border-green-600 focus:ring-green-600">
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Password -->
            <div class="mt-5">
              <label for="hs-password"
                class="block mb-2 text-sm font-medium text-black dark:text-white">Password</label>
              <input wire:model.defer='password' type="password" name="hs-password" id="hs-password"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-black border-black rounded-lg sm:text-sm text-black dark:text-white placeholder:text-neutral-400 focus:border-green-600 focus:ring-green-600">
                @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Password Confirmation -->
            <div class="mt-5">
              <label for="hs-password_confirmation"
                class="block mb-2 text-sm font-medium text-black dark:text-white">Confirm Password</label>
              <input wire:model.defer='password_confirmation' type="password" name="hs-password_confirmation" id="hs-password_confirmation"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-black border-black rounded-lg sm:text-sm text-black dark:text-white placeholder:text-neutral-400 focus:border-green-600 focus:ring-green-600">
                @error('password_confirmation') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Role -->
            <div class="mt-5">
              <h2 class="mb-1 text-lg font-semibold text-black dark:text-white">
                Assign Role
              </h2>

              @error('selectedPermissions')
                <div>
                  <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                </div>
              @enderror
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-2">
              @forelse ($this->roles as $role)
                <label class="flex items-center p-3 w-full bg-black dark:bg-gray-200 rounded-lg text-sm hover:bg-neutral-700 dark:hover:bg-gray-200 transition">
                  <input type="checkbox" 
                        value="{{ $role->name }}"
                        x-data
                        x-init="$watch('$wire.selectedRole', value => {
                            $el.checked = value === '{{ $role->name }}';
                        })"
                        @checked($selectedRole === $role->name)
                        @click="$wire.set('selectedRole', '{{ $role->name }}')"
                        class="shrink-0 size-4 rounded-sm text-primary">
                        <span class="ms-3 text-muted-foreground-1 text-white dark:text-black">
                            {{ Str::ucfirst($role->name) }}
                        </span>
                </label>
              @empty
                <p class="text-black dark:text-white">No Roles Found</p>
              @endforelse
            </div>
          </div>

          <!-- Save Button -->
          <div class="mt-6 grid">
            <button type="submit"
              class="w-50 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-black dark:bg-white text-white dark:text-black hover:bg-neutral-700 dark:hover:bg-gray-200 focus:outline-hidden">
              Save
            </button>
          </div>
        </form>
      </div>
      <!-- End Card -->
    </div>
  </div>
</div>