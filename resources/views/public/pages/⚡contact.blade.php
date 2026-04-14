<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
  <!-- Contact Hero -->
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center">
      
      <!-- Text + Form -->
      <div class="lg:col-span-3">
        <h1 class="block text-3xl font-bold text-black dark:text-white sm:text-4xl md:text-5xl lg:text-6xl">
          Contact Us
        </h1>
        <p class="mt-3 text-lg">
          Have questions or need support?  
          <br>We’re here to help you with sales, inventory, and customer service concerns.
        </p>

        <!-- Contact Form -->
        <form class="mt-5 space-y-4">
          <div>
            <label for="name" class="block text-sm font-medium ">Name</label>
            <input type="text" id="name" name="name"
              class="mt-1 block w-full rounded-lg  bg-gray-200 dark:bg-neutral-700 px-4 py-2  placeholder:text-neutral-200 focus:border-green-700 focus:ring-green-700 sm:text-sm"
              placeholder="Your name">
          </div>

          <div>
            <label for="email" class="block text-sm font-medium ">Email</label>
            <input type="email" id="email" name="email"
              class="mt-1 block w-full rounded-lg bg-gray-200 dark:bg-neutral-700 px-4 py-2  placeholder:text-neutral-200 focus:border-green-700 focus:ring-green-700 sm:text-sm"
              placeholder="you@example.com">
          </div>

          <div>
            <label for="message" class="block text-sm font-medium">Message</label>
            <textarea id="message" name="message" rows="4"
              class="mt-1 block w-full rounded-lg bg-gray-200 dark:bg-neutral-700 px-4 py-2  placeholder:text-neutral-200 sm:text-sm"
              placeholder="Write your message here..."></textarea>
          </div>

          <button id="no-border" type="submit"
            class="w-full py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-black dark:bg-white focus:outline-hidden text-white dark:text-black">
            Send Message
          </button>
        </form>
      </div>

      <!-- Image -->
      <div class="lg:col-span-4 mt-10 lg:mt-0">
        <img class="w-full rounded-xl"
          src="https://images.pexels.com/photos/6633283/pexels-photo-6633283.jpeg"
          alt="Contact Image">
      </div>
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Contact Hero -->
</div>
