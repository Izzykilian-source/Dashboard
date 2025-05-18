@php
  $menuItems = [
    ['route' => route('dashboard'), 'label' => 'Dashboard', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4v11H3zM10 3h4v18h-4zM17 10h4v11h-4z"/></svg>'],
    ['route' => route('assignments'), 'label' => 'Assignments', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v3a2 2 0 002 2m10 0v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6"/></svg>'],
    ['route' => route('courses'), 'label' => 'Courses', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/></svg>'],
    // Calendar dengan icon baru
    ['route' => route('calendar'), 'label'=> 'Calendar', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M3 11h18M5 11v10a2 2 0 002 2h10a2 2 0 002-2V11"/></svg>'],
    ['route' => route('instructor'), 'label' => 'Instructor', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zM12 14l6.16-3.422a12.083 12.083 0 01.84 6.078L12 18l-7-2.344a12.083 12.083 0 01.84-6.078L12 14z"/></svg>'],
    // Menu baru: Resources
    ['route' => route('resources'), 'label' => 'Resources', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-5-9-5-9 5 9 5z"/></svg>'],
    // Gantikan FAQ dengan Feedback
    ['route' => route('feedback'), 'label' => 'Feedback', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.99 9.99 0 01-7.446-3.243L3 20l1.243-3.554A9.99 9.99 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>'],
    ['route' => route('profile'), 'label' => 'Profile', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>'],
  ];
@endphp

<div id="sidebar" class="bg-primary text-white transition-all duration-300 h-full w-64 flex flex-col">
  <!-- Header Sidebar -->
  <div class="p-4 border-b border-gray-700 flex items-center">
    <!-- Tombol Toggle Sidebar di kiri -->
    <button id="toggleSidebar" class="focus:outline-none p-2 rounded-full bg-gray-800 hover:bg-gray-700 transition-transform duration-300 mr-2">
      <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <!-- Mulai dengan Chevron Left (sidebar expanded) -->
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
      </svg>
    </button>
    <!-- Header Logo & Text -->
    <a href="{{ route('dashboard') }}" class="flex items-center space-x-2">
      <!-- Full header: ditampilkan saat expanded -->
      <span class="header-full text-2xl font-bold">Upstart SAT Prep</span>
      <!-- Header singkat: kosong saat collapsed -->
      <span class="header-abbr text-2xl font-bold hidden"></span>
    </a>
  </div>

  <!-- Menu -->
  <nav class="flex-1 p-4 overflow-y-auto">
    @foreach ($menuItems as $item)
      <a href="{{ $item['route'] }}"
         class="flex items-center space-x-3 p-2 mb-2 rounded hover:bg-gray-700 transition-colors duration-200 {{ request()->url() == $item['route'] ? 'bg-accent' : '' }}">
        <span class="text-lg" aria-hidden="true">{!! $item['icon'] !!}</span>
        <span class="font-medium sidebar-text">{{ $item['label'] }}</span>
      </a>
    @endforeach
  </nav>

  <!-- Footer Sidebar: Profil singkat -->
  <div class="p-4 border-t border-gray-700">
    <a href="{{ route('profile') }}" class="flex items-center space-x-3">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>
      <span class="font-medium sidebar-text">John</span>
    </a>
  </div>
</div>

@push('scripts')
<script>
  const toggleBtn = document.getElementById('toggleSidebar');
  const sidebar = document.getElementById('sidebar');
  const sidebarTexts = document.querySelectorAll('.sidebar-text');
  const headerFull = document.querySelector('.header-full');
  const toggleIcon = document.getElementById('toggleIcon');

  toggleBtn.addEventListener('click', () => {
    if (sidebar.classList.contains('w-64')) {
      // Collapse sidebar: set width to w-20
      sidebar.classList.remove('w-64');
      sidebar.classList.add('w-20');
      sidebarTexts.forEach(el => el.style.display = 'none');
      headerFull.classList.add('hidden');
      // Change icon to Chevron Right
      toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>';
    } else {
      // Expand sidebar: set width to w-64
      sidebar.classList.remove('w-20');
      sidebar.classList.add('w-64');
      sidebarTexts.forEach(el => el.style.display = 'inline');
      headerFull.classList.remove('hidden');
      // Change icon to Chevron Left
      toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>';
    }
  });
</script>
@endpush
