@extends('layouts.app')

@section('title', 'Instructor Feedback')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-8 space-y-8">
  <!-- Header Section -->
  <div>
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Instructor Feedback</h2>
    <p class="text-gray-600 text-sm">
      See the latest feedback provided by your instructors to help you improve your performance and track your progress.
    </p>
  </div>
  
  <!-- Feedback List -->
  <div class="space-y-6">
    @foreach ($feedbacks as $feedback)
      <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
        <div class="flex items-center">
          <!-- Instruktur Profile: tampilkan gambar jika ada, jika tidak ikon fallback -->
          <div class="w-12 h-12 flex-shrink-0">
            @if(!empty($feedback->instructor->profile_picture))
              <img src="{{ $feedback->instructor->profile_picture }}" alt="{{ $feedback->instructor->name }}" class="w-12 h-12 rounded-full object-cover">
            @else
              <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            @endif
          </div>
          <div class="ml-4 flex-1">
            <div class="flex justify-between items-center">
              <h3 class="text-xl font-semibold text-gray-800">{{ $feedback->instructor->name }}</h3>
              <span class="text-sm text-gray-500">{{ $feedback->created_at->diffForHumans() }}</span>
            </div>
            <div class="flex items-center mt-1">
              <span class="text-yellow-400 mr-1">
                @for($i = 0; $i < 5; $i++)
                  @if($feedback->instructor->rating > $i)
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.978a1 1 0 00.95.69h4.21c.969 0 1.371 1.24.588 1.81l-3.404 2.47a1 1 0 00-.364 1.118l1.286 3.978c.3.921-.755 1.688-1.54 1.118l-3.404-2.47a1 1 0 00-1.176 0l-3.404 2.47c-.785.57-1.84-.197-1.54-1.118l1.286-3.978a1 1 0 00-.364-1.118L2.01 9.405c-.783-.57-.38-1.81.588-1.81h4.21a1 1 0 00.95-.69l1.286-3.978z" />
                    </svg>
                  @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.978a1 1 0 00.95.69h4.21c.969 0 1.371 1.24.588 1.81l-3.404 2.47a1 1 0 00-.364 1.118l1.286 3.978c.3.921-.755 1.688-1.54 1.118l-3.404-2.47a1 1 0 00-1.176 0l-3.404 2.47c-.785.57-1.84-.197-1.54-1.118l1.286-3.978a1 1 0 00-.364-1.118L2.01 9.405c-.783-.57-.38-1.81.588-1.81h4.21a1 1 0 00.95-.69l1.286-3.978z" />
                    </svg>
                  @endif
                @endfor
              </span>
              <span class="text-sm text-gray-500">({{ $feedback->instructor->rating }})</span>
            </div>
          </div>
        </div>
        <div class="mt-4 text-gray-700">
          <p>{{ $feedback->message }}</p>
        </div>
      </div>
    @endforeach

    @if ($feedbacks->isEmpty())
      <p class="text-gray-600">No feedback available yet.</p>
    @endif
  </div>
</div>
@endsection
