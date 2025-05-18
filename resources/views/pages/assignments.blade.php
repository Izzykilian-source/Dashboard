@extends('layouts.app')

@section('title', 'Assignments')

@section('content')
<div class="bg-white p-6 shadow-lg rounded-lg">
  <h2 class="text-2xl font-bold mb-6">Your Assignments</h2>

  <!-- Grid layout untuk assignment cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Assignment Card 1 -->
    <div class="assignment-card bg-gray-50 p-4 rounded-lg border border-gray-200 hover:shadow-xl transition-shadow duration-200">
      <div class="flex justify-between items-center mb-2">
        <h3 class="text-lg font-semibold text-gray-800">Assignment 1: Essay Draft</h3>
        <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Pending</span>
      </div>
      <p class="text-gray-600 text-sm mb-4">Write an initial draft for your persuasive essay. Focus on outlining key arguments.</p>
      <div class="flex justify-between items-center text-sm">
        <span class="text-gray-500"><strong>Due:</strong> Feb 28, 2025</span>
        <a href="#" class="bg-emerald-500 hover:bg-emerald-600 text-white px-3 py-1 rounded-md">Submit</a>
      </div>
    </div>

    <!-- Assignment Card 2 -->
    <div class="assignment-card bg-gray-50 p-4 rounded-lg border border-gray-200 hover:shadow-xl transition-shadow duration-200">
      <div class="flex justify-between items-center mb-2">
        <h3 class="text-lg font-semibold text-gray-800">Assignment 2: Math Practice</h3>
        <span class="px-2 py-1 text-xs font-medium text-red-700 bg-red-100 rounded-full">Overdue</span>
      </div>
      <p class="text-gray-600 text-sm mb-4">Complete the practice worksheet for algebra and geometry. Review mistakes from the last test.</p>
      <div class="flex justify-between items-center text-sm">
        <span class="text-gray-500"><strong>Due:</strong> Mar 5, 2025</span>
        <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded-md">Review</a>
      </div>
    </div>

    <!-- Assignment Card 3 -->
    <div class="assignment-card bg-gray-50 p-4 rounded-lg border border-gray-200 hover:shadow-xl transition-shadow duration-200">
      <div class="flex justify-between items-center mb-2">
        <h3 class="text-lg font-semibold text-gray-800">Assignment 3: Reading Analysis</h3>
        <span class="px-2 py-1 text-xs font-medium text-blue-700 bg-blue-100 rounded-full">Submitted</span>
      </div>
      <p class="text-gray-600 text-sm mb-4">Analyze the main themes of the provided reading passage and submit your analysis.</p>
      <div class="flex justify-between items-center text-sm">
        <span class="text-gray-500"><strong>Due:</strong> Mar 10, 2025</span>
        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md">View Feedback</a>
      </div>
    </div>

    <!-- Assignment Card 4 -->
    <div class="assignment-card bg-gray-50 p-4 rounded-lg border border-gray-200 hover:shadow-xl transition-shadow duration-200">
      <div class="flex justify-between items-center mb-2">
        <h3 class="text-lg font-semibold text-gray-800">Assignment 4: Science Lab Report</h3>
        <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">In Review</span>
      </div>
      <p class="text-gray-600 text-sm mb-4">Draft your lab report with observations, methodology, and results from the recent experiment.</p>
      <div class="flex justify-between items-center text-sm">
        <span class="text-gray-500"><strong>Due:</strong> Mar 12, 2025</span>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md">Edit Report</a>
      </div>
    </div>
  </div>
  
  <!-- Pagination -->
  <div class="mt-8 flex justify-center items-center space-x-2">
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">Previous</button>
    <button class="px-3 py-1 bg-accent text-white border rounded text-sm">1</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">2</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">3</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">...</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">10</button>
    <button class="px-3 py-1 bg-white border rounded hover:bg-gray-200 text-sm">Next</button>
  </div>
</div>
@endsection
