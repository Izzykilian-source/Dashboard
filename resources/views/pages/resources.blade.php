@extends('layouts.app')

@section('title', 'Resources')

@section('content')
<div class="bg-white p-6 shadow-lg rounded-lg space-y-6">
  <!-- Header Section -->
  <div>
    <h2 class="text-2xl font-bold text-gray-800">Recommended Resources</h2>
    <p class="text-gray-600 text-sm">
      Explore our curated materials to boost your SAT preparation, including study guides, video lessons, practice questions, and more.
    </p>
  </div>

  <!-- Resources Cards Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Resource Card 1: Study Guides -->
    <div class="bg-gray-50 p-4 rounded-lg border hover:shadow-lg transition">
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Study Guides</h3>
      <p class="text-sm text-gray-600">
        Comprehensive guides covering SAT Math, Reading, Writing, and Science.
      </p>
      <a href="#" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Explore Guides →</a>
    </div>

    <!-- Resource Card 2: Video Lessons -->
    <div class="bg-gray-50 p-4 rounded-lg border hover:shadow-lg transition">
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Video Lessons</h3>
      <p class="text-sm text-gray-600">
        Watch expert-led video lessons and tips to enhance your SAT strategies.
      </p>
      <a href="#" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Watch Now →</a>
    </div>

    <!-- Resource Card 3: Practice Questions -->
    <div class="bg-gray-50 p-4 rounded-lg border hover:shadow-lg transition">
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Practice Questions</h3>
      <p class="text-sm text-gray-600">
        Access thousands of practice questions with detailed explanations.
      </p>
      <a href="#" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Try Practice →</a>
    </div>

    <!-- Resource Card 4: Test Strategies -->
    <div class="bg-gray-50 p-4 rounded-lg border hover:shadow-lg transition">
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Test Strategies</h3>
      <p class="text-sm text-gray-600">
        Learn effective test-taking strategies to maximize your SAT score.
      </p>
      <a href="#" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Learn More →</a>
    </div>

    <!-- Resource Card 5: Timed Practice -->
    <div class="bg-gray-50 p-4 rounded-lg border hover:shadow-lg transition">
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Timed Practice</h3>
      <p class="text-sm text-gray-600">
        Simulate real exam conditions with timed practice tests.
      </p>
      <a href="#" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Start Now →</a>
    </div>

    <!-- Resource Card 6: FAQs & Tips -->
    <div class="bg-gray-50 p-4 rounded-lg border hover:shadow-lg transition">
      <h3 class="text-lg font-semibold text-gray-800 mb-2">FAQs & Tips</h3>
      <p class="text-sm text-gray-600">
        Get answers to common questions and expert advice for SAT success.
      </p>
      <a href="#" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Read FAQs →</a>
    </div>
  </div>
</div>
@endsection
