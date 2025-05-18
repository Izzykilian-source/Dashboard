<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route untuk halaman publik
Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/assignments', [PageController::class, 'assignments'])->name('assignments');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/instructor', [PageController::class, 'instructor'])->name('instructor');
Route::get('/tutoring', [PageController::class, 'tutoring'])->name('tutoring');
Route::get('/notifications', [PageController::class, 'notifications'])->name('notifications');
Route::get('/calendar', [PageController::class, 'calendar'])->name('calendar');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');

// Route Settings (publik)
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::post('/settings/profile/update', [SettingsController::class, 'updateProfile'])->name('settings.profile.update');
Route::post('/settings/security/update', [SettingsController::class, 'updateSecurity'])->name('settings.security.update');
Route::post('/settings/notifications/update', [SettingsController::class, 'updateNotifications'])->name('settings.notifications.update');
Route::post('/settings/preferences/update', [SettingsController::class, 'updatePreferences'])->name('settings.preferences.update');
