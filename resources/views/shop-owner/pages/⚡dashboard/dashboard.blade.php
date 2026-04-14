<div>
    <!-- Content -->
    <div class="w-full">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                
                <!-- Total Products Card -->
                <div class="flex flex-col justify-center bg-gray-200 dark:bg-neutral-800 border border-black dark:border-white shadow-2xs rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-black dark:text-white ">
                                Total Products
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-black dark:text-white">
                                {{ $totalProducts }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Total Laptops Card -->
                <div class="flex flex-col justify-center bg-gray-200 dark:bg-neutral-800 border border-black dark:border-white shadow-2xs rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-black dark:text-white ">
                                Total Laptops
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-black dark:text-white">
                                {{ $totalLaptops }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Total Bookings Card -->
                <div class="flex flex-col justify-center bg-gray-200 dark:bg-neutral-800 border border-black dark:border-white shadow-2xs rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-black dark:text-white ">
                                Total Parts
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-black dark:text-white">
                                {{ $totalParts }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Total Pending Bookings Card -->
                <div class="flex flex-col justify-center bg-gray-200 dark:bg-neutral-800 border border-black dark:border-white shadow-2xs rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-black dark:text-white ">
                                Total Employess
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-black dark:text-white">
                                {{ $totalEmployees }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Grid -->
            
            <!-- Charts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                <!-- Card -->
                <div
                    class="p-4 md:p-5 min-h-102.5 flex flex-col bg-gray-200 dark:bg-neutral-800 border border-black dark:border-white shadow-2xs rounded-xl">
                    <!-- Header -->
                    <div class="flex flex-wrap justify-between items-center gap-2">
                        <div>
                            <h2 class="text-sm text-black dark:text-white ">
                                Income
                            </h2>
                            <p class="text-xl sm:text-2xl font-medium text-black dark:text-white">
                                ₱0.00
                            </p>
                        </div>
                    </div>
                    <!-- End Header -->

                    <div id="hs-multiple-bar-charts"></div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div
                    class="p-4 md:p-5 min-h-102.5 flex flex-col bg-gray-200 dark:bg-neutral-800 border border-black dark:border-white shadow-2xs rounded-xl">
                    <!-- Header -->
                    <div class="flex flex-wrap justify-between items-center gap-2">
                        <div>
                            <h2 class="text-sm text-black dark:text-white ">
                                Visitors
                            </h2>
                            <p class="text-xl sm:text-2xl font-medium text-black dark:text-white">
                                0
                            </p>
                        </div>
                    </div>
                    <!-- End Header -->

                    <div id="hs-single-area-chart"></div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Charts Grid -->
        </div>
    </div>
</div>
