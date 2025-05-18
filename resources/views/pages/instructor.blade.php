@extends('layouts.app')

@section('title', 'Instructor Dashboard')

@section('content')
<div class="flex flex-col md:flex-row gap-6">
  <!-- Sidebar Filters (Left) -->
  <aside class="w-full md:w-1/4 bg-white p-6 shadow-lg rounded-lg md:sticky md:top-20">
    <h3 class="text-xl font-semibold mb-4 text-gray-800">Filter Instructors</h3>
    
    <form action="{{ route('instructor') }}" method="GET" class="space-y-4">
      <!-- Category & Training Level -->
      <div>
        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
        <select name="category" id="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
          <option value="">All Categories</option>
          <option value="math">Math</option>
          <option value="english">English</option>
          <option value="writing">Writing</option>
        </select>
      </div>
      
      <div>
        <label for="training_level" class="block text-sm font-medium text-gray-700">Training Level</label>
        <select name="training_level" id="training_level" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
          <option value="">Any Level</option>
          <option value="beginner">Beginner</option>
          <option value="intermediate">Intermediate</option>
          <option value="advanced">Advanced</option>
        </select>
      </div>

      <!-- Instructor Gender & Age -->
      <div>
        <label for="instructor_gender" class="block text-sm font-medium text-gray-700">Instructor Gender</label>
        <select name="instructor_gender" id="instructor_gender" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
          <option value="">Any</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      <div>
        <label for="instructor_age" class="block text-sm font-medium text-gray-700">Instructor Age</label>
        <input type="number" name="instructor_age" id="instructor_age" placeholder="e.g., 30" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
      </div>

      <!-- Preferred Level -->
      <div>
        <label for="preferred_level" class="block text-sm font-medium text-gray-700">Preferred Level</label>
        <select name="preferred_level" id="preferred_level" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
          <option value="">Any Level</option>
          <option value="beginner">Beginner</option>
          <option value="intermediate">Intermediate</option>
          <option value="advanced">Advanced</option>
        </select>
      </div>

      <!-- Apply Filters Button -->
      <div class="mt-4">
        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
          Apply Filters
        </button>
      </div>
    </form>
  </aside>

  <!-- Instructor List (Right - Vertical List) -->
  <section class="w-full md:w-3/4">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold text-gray-800">Available Instructors</h2>
    </div>

    <!-- List of Instructors -->
    <div class="space-y-4">
      @foreach ($instructors as $instructor)
        <div class="bg-white p-4 shadow-lg rounded-lg flex items-center gap-4 hover:shadow-xl transition">
          <!-- Profile Icon: tampilkan gambar jika ada, jika tidak tampilkan ikon default -->
          @if(!empty($instructor->profile_picture))
            <img src="{{ $instructor->profile_picture }}" 
                 alt="{{ $instructor->name }}" 
                 class="w-16 h-16 rounded-full object-cover border border-gray-300 shadow-sm">
          @else
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          @endif

          <!-- Instructor Details -->
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-gray-800">{{ $instructor->name }}</h3>
            <p class="text-gray-600 text-sm">{{ $instructor->specialization }}</p>
            <p class="text-gray-500 text-xs">Experience: {{ $instructor->experience }} years</p>
            <div class="flex items-center gap-1 mt-1">
              <p class="text-gray-500 text-xs">Rating:</p>
              @for ($i = 0; $i < 5; $i++)
                @if($instructor->rating > $i)
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.978a1 1 0 00.95.69h4.21c.969 0 1.371 1.24.588 1.81l-3.404 2.47a1 1 0 00-.364 1.118l1.286 3.978c.3.921-.755 1.688-1.54 1.118l-3.404-2.47a1 1 0 00-1.176 0l-3.404 2.47c-.785.57-1.84-.197-1.54-1.118l1.286-3.978a1 1 0 00-.364-1.118L2.01 9.405c-.783-.57-.38-1.81.588-1.81h4.21a1 1 0 00.95-.69l1.286-3.978z" />
                  </svg>
                @else
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.978a1 1 0 00.95.69h4.21c.969 0 1.371 1.24.588 1.81l-3.404 2.47a1 1 0 00-.364 1.118l1.286 3.978c.3.921-.755 1.688-1.54 1.118l-3.404-2.47a1 1 0 00-1.176 0l-3.404 2.47c-.785.57-1.84-.197-1.54-1.118l1.286-3.978a1 1 0 00-.364-1.118L2.01 9.405c-.783-.57-.38-1.81.588-1.81h4.21a1 1 0 00.95-.69l1.286-3.978z" />
                  </svg>
                @endif
              @endfor
              <span class="text-gray-500 text-xs">({{ $instructor->reviews }})</span>
            </div>
          </div>

          <!-- Book Button -->
          <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 text-sm">
            Book Session
          </button>
        </div>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-6">
      {{ $instructors->links() }}
    </div>
  </section>
</div>
@endsection
