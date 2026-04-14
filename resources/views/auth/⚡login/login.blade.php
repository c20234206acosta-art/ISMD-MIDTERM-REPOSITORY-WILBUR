<div>
    <div class="rounded-xl shadow-2xs border-3 bg-gray-200 dark:bg-neutral-800">
        <!-- Sign In -->
        <div class="p-4 sm:p-7 l">
            <div class="text-center rounded-xl bg-white dark:bg-black mb-6">
                <h3 id="hs-modal-signin-label" class="block text-2xl font-bold text-black dark:text-white mb-1">
                    Sign in
                </h3> 
            </div>

            <div class="mt-5">
                <!-- Form -->
                <form wire:submit.prevent="login" class="grid gap-y-4">
                    <div class="grid gap-y-4">
                        <!-- Form Group -->
                        <div>
                            <label for="email" class="block text-sm mb-2 text-black dark:text-white">
                                Email Address
                            </label>
                            <div class="relative">
                                <input wire:model.defer='email' type="email" id="email" name="email"
                                    class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-black border-black dark:border-white rounded-lg sm:text-sm text-black dark:text-white placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                                    required aria-describedby="email-error">
                                    @error('email')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div>
                            <div class="flex flex-wrap items-center gap-2">
                                <label for="password"
                                    class="block text-sm mb-2 text-black dark:text-white">
                                    Password
                                </label>
                            </div>
                            <div class="relative">
                                <input wire:model.defer='password' type="password" id="password" name="password"
                                    class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-black border-black dark:border-white rounded-lg sm:text-sm text-black dark:text-white placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                                    required aria-describedby="password-error">
                                    @error('password')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <!-- End Form Group -->

                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-black dark:bg-white border border-transparent text-white dark:text-black focus:outline-hidden focus:bg-blue-700 dark:focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                            Sign in
                        </button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Sign In -->
    </div>
</div>
