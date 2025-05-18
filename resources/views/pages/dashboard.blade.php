@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

{{-- Bagian Top Bar --}}
<div class="bg-slate-700 text-white rounded-md p-4 flex justify-between items-center">
    <div>
        <h1 class="text-xl font-bold">Welcome Back, User👋</h1>
        <p class="text-sm text-gray-200 mt-1">
            Your mission is to excel on the ISEE exam and secure admission to top schools.
        </p>
        <p class="text-xs text-gray-400 mt-1">Your Readiness Score: <strong class="text-yellow-300">Moderate</strong></p>
    </div>
    <div class="space-x-2 flex">
        <button class="bg-white text-slate-700 px-4 py-2 rounded-md font-semibold hover:bg-gray-100">
            New Assignment
        </button>
        <button class="bg-emerald-500 px-4 py-2 rounded-md font-semibold hover:bg-emerald-600">
            Start Exam
        </button>
    </div>
</div>

{{-- Ringkasan Progress --}}
<div class="mt-4 grid grid-cols-4 gap-4">
    <div class="bg-white p-4 rounded-md shadow">
        <h2 class="text-sm font-semibold text-gray-500">Completed Exams</h2>
        <div class="flex items-baseline space-x-2">
            <span class="text-2xl font-bold">2/15</span>
            <span class="text-sm text-gray-500">exams</span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
            <div class="bg-emerald-500 h-2 rounded-full" style="width: 13%;"></div>
        </div>
    </div>

    <div class="bg-white p-4 rounded-md shadow">
        <h2 class="text-sm font-semibold text-gray-500">Upcoming Sessions</h2>
        <div class="flex items-baseline space-x-2">
            <span class="text-2xl font-bold">6</span>
            <span class="text-sm text-gray-500">sessions</span>
        </div>
        <p class="text-xs text-gray-600 mt-1">Next session: Mar 18, 10:00 AM</p>
    </div>

    <div class="bg-white p-4 rounded-md shadow">
        <h2 class="text-sm font-semibold text-gray-500">Upcoming Questions</h2>
        <div class="flex items-baseline space-x-2">
            <span class="text-2xl font-bold">3</span>
            <span class="text-sm text-gray-500">deadlines</span>
        </div>
        <p class="text-xs text-gray-600 mt-1">Next due: Mar 20</p>
    </div>

    <div class="bg-white p-4 rounded-md shadow">
        <h2 class="text-sm font-semibold text-gray-500">Readiness Score</h2>
        <div class="flex items-baseline space-x-2">
            <span class="text-2xl font-bold text-yellow-500">Moderate</span>
        </div>
        <p class="text-xs text-gray-600 mt-1">Keep practicing to improve your score.</p>
    </div>
</div>
{{-- Recommended Resources --}}
<div class="mt-6 bg-white p-4 rounded-md shadow">
    <div class="flex justify-between items-center">
        <h2 class="text-lg font-bold">Recommended Resources</h2>
        <p class="text-sm text-gray-600">Based on your recent performance</p>
    </div>
    <div class="mt-4 space-y-3">
        <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-md">
            <div class="bg-blue-500 text-white w-10 h-10 flex justify-center items-center rounded-md">
                📖
            </div>
            <div>
                <p class="text-sm font-semibold">10 Reading Strategies for ISEE</p>
                <p class="text-xs text-gray-600">5 min read</p>
            </div>
        </div>
        <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-md">
            <div class="bg-green-500 text-white w-10 h-10 flex justify-center items-center rounded-md">
                🎥
            </div>
            <div>
                <p class="text-sm font-semibold">Math Problem Solving Techniques</p>
                <p class="text-xs text-gray-600">Video - 12 min</p>
            </div>
        </div>
    </div>
</div>

{{-- Exam List Section --}}
<div x-data="{ examType: 'scheduled' }" class="mt-6">
  <!-- Tab Navigation -->
  <div class="flex space-x-4 mb-4">
    <button 
      @click="examType = 'scheduled'" 
      :class="examType === 'scheduled' ? 'bg-accent text-white' : 'bg-white text-gray-700'"
      class="px-4 py-2 border rounded text-sm transition-colors duration-200">
      Scheduled Exams
    </button>
    <button 
      @click="examType = 'flexible'" 
      :class="examType === 'flexible' ? 'bg-accent text-white' : 'bg-white text-gray-700'"
      class="px-4 py-2 border rounded text-sm transition-colors duration-200">
      Flexible Exams
    </button>
  </div>

  <!-- Tab Content -->
  <div>
    <!-- Scheduled Exams Content -->
    <template x-if="examType === 'scheduled'">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @for($i = 0; $i < 6; $i++)
          <div class="exam-card bg-white p-4 rounded-md shadow">
            <h4 class="text-lg font-bold">ISEE</h4>
            <p class="text-sm"><strong>Start:</strong> 06:00 AM, Tue, Mar 16</p>
            <p class="text-gray-600 text-sm mt-1">Contains repeated questions related to the ISEE</p>
            <p class="text-xs font-semibold text-gray-500 mt-1">
              Status: <span class="text-emerald-500">In Progress</span>
            </p>
            <div class="tags flex flex-wrap gap-2 mt-2">
              <span class="tag bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Verbal</span>
              <span class="tag bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Quantitative</span>
            </div>
            <div class="actions flex justify-between items-center mt-4">
              <p class="text-sm text-gray-600">100+ enrolled | 1.5 Hrs</p>
              <button class="bg-emerald-500 text-white px-4 py-2 rounded hover:bg-emerald-600 text-sm">
                Start Now
              </button>
            </div>
          </div>
        @endfor
      </div>
    </template>

    <!-- Flexible Exams Content -->
    <template x-if="examType === 'flexible'">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @for($i = 0; $i < 6; $i++)
          <div class="exam-card bg-white p-4 rounded-md shadow">
            <h4 class="text-lg font-bold">Math Exam</h4>
            <p class="text-sm"><strong>Start:</strong> 07:00 AM, Wed, Mar 17</p>
            <p class="text-gray-600 text-sm mt-1">Practice math problems to improve your quantitative skills</p>
            <p class="text-xs font-semibold text-gray-500 mt-1">
              Status: <span class="text-emerald-500">Available</span>
            </p>
            <div class="tags flex flex-wrap gap-2 mt-2">
              <span class="tag bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Algebra</span>
              <span class="tag bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Geometry</span>
              <span class="tag bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Trigonometry</span>
            </div>
            <div class="actions flex justify-between items-center mt-4">
              <p class="text-sm text-gray-600">80+ enrolled | 1.0 Hrs</p>
              <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-emerald-600 text-sm">
                $99
              </button>
            </div>
          </div>
        @endfor
      </div>
    </template>
  </div>

  <!-- Pagination -->
  <div class="pagination mt-6 flex justify-center items-center space-x-2">
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">Previous</button>
    <button class="px-3 py-1 bg-accent text-white border rounded text-sm">1</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">2</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">3</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">...</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">15</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">Next</button>
  </div>
</div>

@endsection
