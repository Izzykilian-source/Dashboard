@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  <!-- Course Card 1: SAT Math -->
  <div class="bg-white p-6 shadow-lg rounded-lg">
    <div class="mb-4">
      <h3 class="text-lg font-semibold text-gray-800">SAT Math</h3>
      <p class="text-sm text-gray-500">Master essential math concepts and problem-solving techniques for the SAT.</p>
    </div>
    <div class="mb-4">
      <div class="w-full bg-gray-200 rounded-full h-2">
        <div class="bg-blue-500 h-2 rounded-full" style="width: 30%;"></div>
      </div>
      <p class="text-xs text-gray-600 mt-1">30% Completed</p>
    </div>
    <a href="#" class="inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-4 py-2 rounded">
      Continue Course
    </a>
  </div>

  <!-- Course Card 2: SAT English -->
  <div class="bg-white p-6 shadow-lg rounded-lg">
    <div class="mb-4">
      <h3 class="text-lg font-semibold text-gray-800">SAT English</h3>
      <p class="text-sm text-gray-500">Improve reading comprehension and writing skills with targeted exercises.</p>
    </div>
    <div class="mb-4">
      <div class="w-full bg-gray-200 rounded-full h-2">
        <div class="bg-green-500 h-2 rounded-full" style="width: 50%;"></div>
      </div>
      <p class="text-xs text-gray-600 mt-1">50% Completed</p>
    </div>
    <a href="#" class="inline-block bg-green-500 hover:bg-green-600 text-white text-sm font-medium px-4 py-2 rounded">
      Continue Course
    </a>
  </div>

  <!-- Course Card 3: SAT Writing -->
  <div class="bg-white p-6 shadow-lg rounded-lg">
    <div class="mb-4">
      <h3 class="text-lg font-semibold text-gray-800">SAT Writing</h3>
      <p class="text-sm text-gray-500">Enhance your grammar and writing skills to boost your SAT Writing score.</p>
    </div>
    <div class="mb-4">
      <div class="w-full bg-gray-200 rounded-full h-2">
        <div class="bg-purple-500 h-2 rounded-full" style="width: 70%;"></div>
      </div>
      <p class="text-xs text-gray-600 mt-1">70% Completed</p>
    </div>
    <a href="#" class="inline-block bg-purple-500 hover:bg-purple-600 text-white text-sm font-medium px-4 py-2 rounded">
      Continue Course
    </a>
  </div>

  <!-- Course Card 4: SAT Science (Optional) -->
  <div class="bg-white p-6 shadow-lg rounded-lg">
    <div class="mb-4">
      <h3 class="text-lg font-semibold text-gray-800">SAT Science</h3>
      <p class="text-sm text-gray-500">Learn to analyze scientific data and interpret graphs effectively.</p>
    </div>
    <div class="mb-4">
      <div class="w-full bg-gray-200 rounded-full h-2">
        <div class="bg-red-500 h-2 rounded-full" style="width: 40%;"></div>
      </div>
      <p class="text-xs text-gray-600 mt-1">40% Completed</p>
    </div>
    <a href="#" class="inline-block bg-red-500 hover:bg-red-600 text-white text-sm font-medium px-4 py-2 rounded">
      Continue Course
    </a>
  </div>
</div>
@endsection
