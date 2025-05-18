@extends('layouts.app')

@section('title', 'Calendar')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-8 space-y-8">
  <!-- Header Section -->
  <div>
    <h2 class="text-3xl font-bold text-gray-800">Your Schedule & Calendar</h2>
    <p class="text-gray-600 text-sm">
      Stay on top of your tutoring schedule, assignments, and SAT practice sessions. Check out your upcoming events below.
    </p>
  </div>

  <!-- Interactive Calendar Widget -->
  <div class="bg-gray-50 p-4 rounded-lg border shadow-sm">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Monthly Overview</h3>
    <div id="calendar" class="bg-white rounded-lg shadow-md"></div>
  </div>

  <!-- Upcoming Sessions -->
  <div class="bg-gray-50 p-4 rounded-lg border shadow-sm">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Upcoming Sessions</h3>
    <ul class="divide-y divide-gray-200">
      <li class="py-2 flex justify-between">
        <span class="text-gray-700">📖 SAT Math Practice</span>
        <span class="text-gray-500 text-sm">March 5, 2025 - 3:00 PM</span>
      </li>
      <li class="py-2 flex justify-between">
        <span class="text-gray-700">📝 Writing & Language Tutoring</span>
        <span class="text-gray-500 text-sm">March 7, 2025 - 2:00 PM</span>
      </li>
      <li class="py-2 flex justify-between">
        <span class="text-gray-700">🔬 Science Reasoning Review</span>
        <span class="text-gray-500 text-sm">March 10, 2025 - 1:00 PM</span>
      </li>
    </ul>
    <a href="#" class="mt-4 inline-block text-blue-600 font-medium hover:underline">View Full Schedule →</a>
  </div>

  <!-- Tutor Availability -->
  <div class="bg-gray-50 p-4 rounded-lg border shadow-sm">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Tutor Availability</h3>
    <ul class="divide-y divide-gray-200">
      <li class="py-2 flex justify-between">
        <span class="text-gray-700">👩‍🏫 Mr. Anderson - Math & Science</span>
        <span class="text-gray-500 text-sm">Available: Mon, Wed, Fri (4-6 PM)</span>
      </li>
      <li class="py-2 flex justify-between">
        <span class="text-gray-700">👨‍🏫 Ms. Carter - Writing & Reading</span>
        <span class="text-gray-500 text-sm">Available: Tue, Thu (3-5 PM)</span>
      </li>
    </ul>
    <a href="#" class="mt-4 inline-block text-blue-600 font-medium hover:underline">Check Availability →</a>
  </div>
</div>
@endsection

@push('scripts')
<!-- Sertakan FullCalendar dari CDN -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: [
            {
                title: 'SAT Math Practice',
                start: '2025-03-05T15:00:00'
            },
            {
                title: 'Writing & Language Tutoring',
                start: '2025-03-07T14:00:00'
            },
            {
                title: 'Science Reasoning Review',
                start: '2025-03-10T13:00:00'
            }
            // Tambahkan event lainnya sesuai kebutuhan
        ],
        eventClick: function(info) {
            alert('Event: ' + info.event.title);
            info.jsEvent.preventDefault(); // mencegah redirect jika event memiliki URL
        }
    });
    calendar.render();
});
</script>
@endpush
