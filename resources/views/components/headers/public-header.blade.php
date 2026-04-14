<header
  class="flex flex-wrap md:flex-nowrap z-50 w-full dark:bg-white bg-black">
  <nav
    class="relative max-w-[85rem] w-full mx-auto flex flex-wrap md:flex-nowrap md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
    
    <!-- Brand -->
    <div class="flex justify-between items-center w-full md:w-auto gap-x-1">
      <a class="flex-none font-semibold text-xl text-white dark:text-black focus:outline-hidden focus:opacity-80"
        href="#" aria-label="Brand">WILBURAT's CompShop</a>

      <!-- Collapse Button -->
      <button type="button" id="btn"
        class="hs-collapse-toggle md:hidden size-9 flex justify-center items-center rounded-lg bg-neutral-700 text-white dark:text-black hover:bg-neutral-600 focus:bg-neutral-600"
        id="hs-header-base-collapse" aria-expanded="false" aria-controls="hs-header-base"
        aria-label="Toggle navigation" data-hs-collapse="#hs-header-base">
        <!-- Hamburger -->
        <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor">
          <line x1="3" y1="6" x2="21" y2="6"/>
          <line x1="3" y1="12" x2="21" y2="12"/>
          <line x1="3" y1="18" x2="21" y2="18"/>
        </svg>
        <!-- Close -->
        <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M18 6 6 18"/>
          <path d="m6 6 12 12"/>       
        </svg>
      </button>
    </div>

    <!-- Collapse -->
    <div id="hs-header-base"
      class="hs-collapse hidden basis-full grow md:flex md:items-center md:justify-end transition-all duration-300">
      <div class="overflow-y-auto max-h-[75vh]">
        <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
          
          <!-- Links -->
          <div class="grow flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">
            <a id="no-border" class="p-2 flex items-center text-sm text-white dark:text-black hover:bg-neutral-700 rounded-lg"
              href="/">Home</a>
            <a id="no-border" class="p-2 flex items-center text-sm text-white dark:text-black hover:bg-neutral-700 rounded-lg"
              href="{{ route('about') }}">About</a>
            <a id="no-border" class="p-2 flex items-center text-sm text-white dark:text-black hover:bg-neutral-700 rounded-lg"
              href="{{ route('contact') }}">Contact</a>
            <!-- Dark Mode Buttons -->
            <button id="no-border" type="button" class="hs-dark-mode-active:hidden block hs-dark-mode font-medium text-white dark:text-black rounded-full dark:hover:bg-gray-200 hover:bg-neutral-600 focus:outline-hidden focus:bg-gray-200 dark:focus:bg-neutral-600" data-hs-theme-click-value="dark">
              <span class="group inline-flex shrink-0 justify-center items-center size-9">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
              </span>
            </button>
            <button id="no-border" type="button" class="hs-dark-mode-active:block hidden hs-dark-mode font-medium text-white dark:text-black rounded-full dark:hover:bg-gray-800 hover:bg-neutral-600 focus:outline-hidden focus:bg-gray-200 dark:focus:bg-neutral-600" data-hs-theme-click-value="light">
              <span class="group inline-flex shrink-0 justify-center items-center size-9">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
              </span>
            </button>
          </div>

          <!-- Divider -->
          <div class="my-2 md:my-0 md:mx-2">
            <div class="w-full h-px md:h-4 md:border-s border-neutral-200"></div>
          </div>

          <!-- Button Group -->
          <div class="flex flex-wrap items-center gap-x-1.5">
            <a id="btn" class="py-[7px] px-2.5 inline-flex items-center font-medium text-sm rounded-lg text-white dark:text-black"
              href="/login">Sign in</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
