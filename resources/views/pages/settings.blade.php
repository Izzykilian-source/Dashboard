@extends('layouts.app')

@section('title', 'Account Settings')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-10 space-y-10">
  
  <!-- Profile Information -->
  <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Profile Information</h3>
    <form action="{{ route('settings.profile.update') }}" method="POST" class="space-y-5">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="first_name" class="text-sm font-medium text-gray-600">First Name</label>
          <input type="text" name="first_name" id="first_name" value="John" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" />
        </div>
        <div>
          <label for="last_name" class="text-sm font-medium text-gray-600">Last Name</label>
          <input type="text" name="last_name" id="last_name" value="Doe" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" />
        </div>
      </div>
      <div>
        <label for="email" class="text-sm font-medium text-gray-600">Email Address</label>
        <input type="email" name="email" id="email" value="john.doe@example.com" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" />
      </div>
      <button type="submit" class="w-full mt-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
        Update Profile
      </button>
    </form>
  </div>

  <!-- Security -->
  <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Security</h3>
    <form action="{{ route('settings.security.update') }}" method="POST" class="space-y-5">
      @csrf
      <div>
        <label for="current_password" class="text-sm font-medium text-gray-600">Current Password</label>
        <input type="password" name="current_password" id="current_password" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" />
      </div>
      <div>
        <label for="new_password" class="text-sm font-medium text-gray-600">New Password</label>
        <input type="password" name="new_password" id="new_password" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" />
      </div>
      <div>
        <label for="confirm_password" class="text-sm font-medium text-gray-600">Confirm New Password</label>
        <input type="password" name="confirm_password" id="confirm_password" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" />
      </div>
      <button type="submit" class="w-full mt-4 py-3 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition duration-300">
        Change Password
      </button>
    </form>
  </div>

  <!-- Notifications -->
  <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Notification Settings</h3>
    <form action="{{ route('settings.notifications.update') }}" method="POST">
      @csrf
      <div class="flex items-center justify-between py-3 border-b">
        <label for="email_notifications" class="text-gray-700">Email Notifications</label>
        <input type="checkbox" name="email_notifications" id="email_notifications" class="form-checkbox h-5 w-5 text-blue-600" checked>
      </div>
      <div class="flex items-center justify-between py-3">
        <label for="sms_notifications" class="text-gray-700">SMS Notifications</label>
        <input type="checkbox" name="sms_notifications" id="sms_notifications" class="form-checkbox h-5 w-5 text-blue-600">
      </div>
      <button type="submit" class="w-full mt-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
        Save Notifications
      </button>
    </form>
  </div>

  <!-- Privacy & Preferences -->
  <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Privacy & Preferences</h3>
    <form action="{{ route('settings.preferences.update') }}" method="POST">
      @csrf
      <div class="mb-5">
        <label for="profile_visibility" class="text-sm font-medium text-gray-600">Profile Visibility</label>
        <select name="profile_visibility" id="profile_visibility" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
          <option value="public">Public</option>
          <option value="private">Private</option>
          <option value="friends">Friends Only</option>
        </select>
      </div>
      <div>
        <label for="language" class="text-sm font-medium text-gray-600">Language Preference</label>
        <select name="language" id="language" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
          <option value="en">English</option>
          <option value="es">Spanish</option>
          <option value="fr">French</option>
        </select>
      </div>
      <button type="submit" class="w-full mt-4 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition duration-300">
        Save Preferences
      </button>
    </form>
  </div>

</div>
@endsection
