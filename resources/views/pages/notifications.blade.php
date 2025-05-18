@extends('layouts.app')

@section('title', 'Notifications')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10">
  <h2 class="text-3xl font-semibold text-gray-800 mb-6">🔔 Notifications</h2>

  <!-- Notification List -->
  <div class="space-y-6">
    <!-- Notification Item -->
    <div class="bg-white p-6 shadow-md rounded-lg flex items-start justify-between border-l-4 border-blue-500">
      <div class="flex space-x-4">
        <div class="text-blue-500 text-2xl">
          📩
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">New Message</h3>
          <p class="text-gray-600">You have a new message from your instructor.</p>
          <span class="text-sm text-blue-500">Just now</span>
        </div>
      </div>
      <button class="text-sm text-gray-500 hover:text-gray-700 transition">Mark as Read</button>
    </div>

    <div class="bg-white p-6 shadow-md rounded-lg flex items-start justify-between border-l-4 border-red-500">
      <div class="flex space-x-4">
        <div class="text-red-500 text-2xl">
          ⏳
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">Upcoming Deadline</h3>
          <p class="text-gray-600">Your assignment deadline is approaching.</p>
          <span class="text-sm text-red-500">2 hours ago</span>
        </div>
      </div>
      <button class="text-sm text-gray-500 hover:text-gray-700 transition">Mark as Read</button>
    </div>

    <div class="bg-white p-6 shadow-md rounded-lg flex items-start justify-between border-l-4 border-green-500">
      <div class="flex space-x-4">
        <div class="text-green-500 text-2xl">
          ✅
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">Assignment Submitted</h3>
          <p class="text-gray-600">Your assignment has been successfully submitted!</p>
          <span class="text-sm text-green-500">Yesterday</span>
        </div>
      </div>
      <button class="text-sm text-gray-500 hover:text-gray-700 transition">Mark as Read</button>
    </div>

    <div class="bg-white p-6 shadow-md rounded-lg flex items-start justify-between border-l-4 border-yellow-500">
      <div class="flex space-x-4">
        <div class="text-yellow-500 text-2xl">
          🎓
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">New Course Available</h3>
          <p class="text-gray-600">A new SAT prep course has been added to your dashboard.</p>
          <span class="text-sm text-yellow-500">2 days ago</span>
        </div>
      </div>
      <button class="text-sm text-gray-500 hover:text-gray-700 transition">Mark as Read</button>
    </div>
  </div>

  <!-- Clear Notifications Button -->
  <div class="mt-8 text-center">
    <button class="px-6 py-3 bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition">
      Clear All Notifications
    </button>
  </div>
</div>
@endsection
