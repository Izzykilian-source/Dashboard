@extends('layouts.app')

@section('title', 'Profile & Tutoring Info')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-8 space-y-8">
  
  <!-- Header Profile -->
  <div class="bg-white p-6 shadow-lg rounded-lg relative">
    <div class="absolute left-0 top-0 h-2 w-1/4 bg-blue-500 rounded-tr-lg rounded-bl"></div>
    <h2 class="text-2xl font-bold text-gray-800 flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
      </svg>
      Student Profile
    </h2>
    <p class="text-gray-600 text-sm mt-2">
      Welcome, <strong>John Doe</strong>. Here is an overview of your tutoring program and progress.
    </p>
  </div>

  <!-- Tutoring Program Overview -->
  <div class="bg-white p-6 shadow-lg rounded-lg relative">
    <div class="absolute left-0 top-0 h-2 w-1/4 bg-green-500 rounded-tr-lg rounded-bl"></div>
    <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
      <div>
        <h3 class="text-xl font-semibold text-gray-800 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8h2m4 0h2m4 0h2m4 0h2m-6-5h2a2 2 0 012 2v1"/>
          </svg>
          SAT - March
        </h3>
        <p class="text-gray-500 text-sm mt-1">Time to Test: <strong>2 months and 3 weeks</strong></p>
        <p class="text-gray-500 text-sm">Practice Tests Taken: <strong>3</strong></p>
        <p class="text-xs text-gray-400 mt-1">*Your last practice test was 1 week ago</p>
      </div>
      <div class="mt-4 md:mt-0 flex space-x-4">
        <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Schedule Next Test</a>
        <a href="#" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">View Progress</a>
      </div>
    </div>

    <!-- Subjects & Progress -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
      <!-- Math Progress Card -->
      <div class="p-4 bg-gray-50 rounded-lg border hover:shadow-md transition-shadow">
        <h4 class="font-semibold text-gray-800 mb-2">Math Progress</h4>
        <p class="text-sm text-gray-600"><strong>5</strong> Completed Lessons</p>
        <p class="text-sm text-gray-600"><strong>2</strong> Scheduled Lessons</p>
        <p class="text-sm text-gray-600"><strong>3</strong> Expected Lessons</p>
        <hr class="my-3">
        <div class="text-sm text-gray-500">
          <p>Math Tutor: <strong>Jane Hall</strong></p>
          <p>📱 <strong>(555) 867-5309</strong></p>
          <p>✉ <a href="mailto:compass.jane@gmail.com" class="text-blue-600 hover:underline">compass.jane@gmail.com</a></p>
        </div>
      </div>
      <!-- Reading & Writing Progress Card -->
      <div class="p-4 bg-gray-50 rounded-lg border hover:shadow-md transition-shadow">
        <h4 class="font-semibold text-gray-800 mb-2">Reading/Writing Progress</h4>
        <p class="text-sm text-gray-600"><strong>6</strong> Completed Lessons</p>
        <p class="text-sm text-gray-600"><strong>1</strong> Scheduled Lesson</p>
        <p class="text-sm text-gray-600"><strong>2</strong> Expected Lessons</p>
        <hr class="my-3">
        <div class="text-sm text-gray-500">
          <p>Reading & Writing Tutor: <strong>Chris Date</strong></p>
          <p>📱 <strong>(555) 300-0310</strong></p>
          <p>✉ <a href="mailto:chris.tutor@gmail.com" class="text-blue-600 hover:underline">chris.tutor@gmail.com</a></p>
        </div>
      </div>
      <!-- Another Subject or Combined Info (e.g., Billing, Director Communication) -->
      <div class="p-4 bg-gray-50 rounded-lg border hover:shadow-md transition-shadow">
        <h4 class="font-semibold text-gray-800 mb-2">Billing & Communication</h4>
        <p class="text-sm text-gray-600"><strong>Billing:</strong> Active, Next Payment due on <strong>Mar 15</strong></p>
        <p class="text-sm text-gray-600 mt-2"><strong>Director Communication:</strong></p>
        <ul class="list-disc list-inside text-sm text-gray-600">
          <li>Call scheduled on Mar 20, 2 PM</li>
          <li>Q&A with Director via Zoom on Mar 25</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Detailed Sessions & Practice Tests -->
  <div class="bg-white p-6 shadow-lg rounded-lg relative">
    <div class="absolute left-0 top-0 h-2 w-1/4 bg-yellow-500 rounded-tr-lg rounded-bl"></div>
    <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3v1H5.405c-1.49 0-2.298 1.77-1.283 2.871l5.307 5.856a1 1 0 001.444 0l5.307-5.856c1.015-1.101.207-2.871-1.283-2.871H15v-1c0-1.657-1.343-3-3-3z"/>
      </svg>
      Detailed Tutoring Sessions
    </h3>
    <div class="space-y-4">
      <!-- Session 1 -->
      <div class="border p-4 rounded-lg bg-gray-50 hover:shadow-md transition-shadow">
        <div class="flex justify-between">
          <div>
            <h4 class="font-semibold text-gray-700">Lesson #13: Reading/Writing Session</h4>
            <p class="text-sm text-gray-500">Scheduled - March 7, 2025 (2:00 PM)</p>
          </div>
          <span class="text-sm text-gray-600">Location: Online</span>
        </div>
        <p class="text-sm text-gray-600 mt-2">
          Homework Assigned for Next Lesson: <br>
          - Read chapters 5-6, and re-check grammar mistakes in last essay. <br>
          - Practice rewriting 2 paragraphs with focus on sentence structure.
        </p>
      </div>
      <!-- Session 2 -->
      <div class="border p-4 rounded-lg bg-gray-50 hover:shadow-md transition-shadow">
        <div class="flex justify-between">
          <div>
            <h4 class="font-semibold text-gray-700">Practice SAT #2</h4>
            <p class="text-sm text-gray-500">Completed - March 1, 2025</p>
          </div>
          <span class="text-sm text-gray-600">Score: 1390</span>
        </div>
        <p class="text-sm text-gray-600 mt-2">
          ERW: 690 | Math: 700 | Total: 1390 <br>
          View <a href="#" class="text-blue-600 hover:underline">Score Report</a>
        </p>
      </div>
      <!-- Session 3 -->
      <div class="border p-4 rounded-lg bg-gray-50 hover:shadow-md transition-shadow">
        <div class="flex justify-between">
          <div>
            <h4 class="font-semibold text-gray-700">Lesson #14: Math Focus</h4>
            <p class="text-sm text-gray-500">Planned - March 10, 2025 (4:00 PM)</p>
          </div>
          <span class="text-sm text-gray-600">Location: Laguna Hills</span>
        </div>
        <p class="text-sm text-gray-600 mt-2">
          Topics to Cover: Algebra II, Geometry Review <br>
          Homework: Assign problem set #7, reading p.190-216, analyzing sample questions
        </p>
      </div>
    </div>
  </div>

  <!-- Performance Insights -->
  <div class="mt-6 bg-gray-50 p-6 rounded-lg border relative">
    <div class="absolute left-0 top-0 h-2 w-1/4 bg-purple-500 rounded-tr-lg rounded-bl"></div>
    <h3 class="text-lg font-semibold text-gray-800 flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18"/>
      </svg>
      📊 Performance Insights
    </h3>
    <p class="text-sm text-gray-600">Your progress over time:</p>
    
    <!-- Chart Canvas -->
    <div class="mt-4 h-64 relative">
      <canvas id="performanceChart" class="w-full h-full"></canvas>
    </div>

    <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-white p-3 rounded-md shadow hover:shadow-lg transition-shadow">
        <h4 class="text-md font-semibold text-gray-700">Math Performance</h4>
        <p class="text-sm text-gray-600">Last Score: 700</p>
        <p class="text-sm text-gray-600">Improvement: +30</p>
      </div>
      <div class="bg-white p-3 rounded-md shadow hover:shadow-lg transition-shadow">
        <h4 class="text-md font-semibold text-gray-700">Reading & Writing</h4>
        <p class="text-sm text-gray-600">Last Score: 650</p>
        <p class="text-sm text-gray-600">Improvement: +20</p>
      </div>
      <div class="bg-white p-3 rounded-md shadow hover:shadow-lg transition-shadow">
        <h4 class="text-md font-semibold text-gray-700">Time Management</h4>
        <p class="text-sm text-gray-600">Average Completion Time: 45 mins</p>
        <p class="text-sm text-gray-600">Faster than 70% of students</p>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<!-- Sertakan Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  var ctx = document.getElementById('performanceChart').getContext('2d');
  var performanceChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Test 1', 'Test 2', 'Test 3', 'Test 4', 'Test 5'],
      datasets: [{
        label: 'SAT Score',
        data: [1250, 1300, 1350, 1280, 1320],
        borderColor: 'rgba(54, 162, 235, 1)',
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderWidth: 2,
        fill: true
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: false,
          suggestedMin: 1200,
          suggestedMax: 1400
        }
      }
    }
  });
});
</script>
@endpush
