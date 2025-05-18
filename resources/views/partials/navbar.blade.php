<div class="bg-white shadow border-b border-gray-200">
  <div class="max-w-full mx-auto px-4 py-3 flex items-center justify-between">
    <!-- Left Side: Dashboard Title -->
    <div class="w-64">
      <h1 class="text-xl font-bold text-gray-800">Dashboard</h1>
    </div>

    <!-- Right Side: Notifications, Settings, User Info & Logout -->
    <div class="flex items-center space-x-4">
      <!-- Notifications Dropdown -->
      <div class="relative" x-data="{ open: false }">
        <a href="#" @mouseenter="open = true" @mouseleave="open = false" class="relative group">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 hover:text-gray-800 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
          </svg>
          <span class="absolute top-0 right-0 -mt-1 -mr-1 bg-red-500 text-white text-xs font-bold px-1.5 py-0.5 rounded-full">3</span>
        </a>

        <!-- Dropdown -->
        <div x-show="open" @mouseenter="open = true" @mouseleave="open = false"
          class="absolute right-0 mt-2 w-72 bg-white shadow-lg rounded-lg border border-gray-200 z-50">
          <div class="p-4">
            <h3 class="text-gray-800 font-semibold">Recent Notifications</h3>
          </div>

          <div class="divide-y divide-gray-200">
            <a href="#" class="block px-4 py-3 hover:bg-gray-100">
              <div class="text-gray-800 font-medium">📩 New Message</div>
              <p class="text-sm text-gray-600">You have a new message from your instructor.</p>
              <span class="text-xs text-gray-400">Just now</span>
            </a>
            <a href="#" class="block px-4 py-3 hover:bg-gray-100">
              <div class="text-gray-800 font-medium">⏳ Assignment Deadline</div>
              <p class="text-sm text-gray-600">Your assignment is due soon!</p>
              <span class="text-xs text-gray-400">2 hours ago</span>
            </a>
            <a href="#" class="block px-4 py-3 hover:bg-gray-100">
              <div class="text-gray-800 font-medium">🎓 New Course Added</div>
              <p class="text-sm text-gray-600">A new SAT Prep course is available.</p>
              <span class="text-xs text-gray-400">Yesterday</span>
            </a>
          </div>

          <div class="border-t border-gray-200">
            <a href="{{ route('notifications') }}" class="block text-center py-3 text-blue-500 font-semibold hover:bg-gray-50">
              View All Notifications
            </a>
          </div>
        </div>
      </div>

      <!-- Settings -->
      <a href="{{ route('settings') }}" class="group">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 text-gray-600 hover:text-gray-800 transition-colors">
          <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
        </svg>
      </a>

      <!-- User Info -->
      <span class="text-gray-700">Hello, John</span>

      <!-- Logout -->
      <a href="#" class="px-4 py-2 bg-accent text-white rounded hover:bg-accent-dark transition-colors duration-200">
        Logout
      </a>
    </div>
  </div>
</div>
