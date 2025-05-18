<?php

namespace App\Http\Controllers;
use App\Models\Feedback;

use Illuminate\Http\Request;
use App\Models\Instructor;

class PageController extends Controller
{
    public function dashboard() {
        return view('pages.dashboard');
    }
    
    public function assignments() {
        return view('pages.assignments');
    }
    public function index()
{
    // Ambil feedback hanya untuk siswa yang sedang login
    $feedbacks = Feedback::where('student_id', auth()->id())
                ->with('instructor') // Pastikan relasi ke instructor ada
                ->latest()
                ->get();

                return view('pages.feedback', compact('feedbacks'));

}


    public function courses() {
        return view('pages.courses');
    }
    
    public function profile() {
        return view('pages.profile');
    }
    
    // Gunakan method instructor() untuk menampilkan halaman instruktur dengan pagination
    public function instructor() {
        $instructors = Instructor::paginate(10);
        return view('pages.instructor', compact('instructors'));
    }
    
    public function tutoring() {
        return view('pages.tutoring');
    }
    
    public function settings() {
        return view('pages.settings');
    }
    
    public function notifications() {
        return view('pages.notifications');
    }
    
    public function calendar() {
        return view('pages.calendar');
    }
    
    // Jika halaman Resources juga perlu data instruktur, pastikan variabel didefinisikan
    public function resources() {
        $instructors = Instructor::all(); // atau paginate() jika diinginkan
        return view('pages.resources', compact('instructors'));
    }
}
