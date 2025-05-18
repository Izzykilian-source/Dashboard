<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Feedback; // Pastikan model sudah ada
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
{
    $feedbacks = collect([
        (object)[
            'instructor' => (object)[
                'name' => 'John Doe',
                'profile_picture' => 'https://randomuser.me/api/portraits/men/32.jpg',
                'rating' => 5
            ],
            'message' => 'Great job on your recent assignments! Your problem-solving skills are improving, and I can see you are putting in extra effort. Keep practicing, and try to challenge yourself with more difficult problems.',
            'created_at' => now()->subDays(1)
        ],
        (object)[
            'instructor' => (object)[
                'name' => 'Dr. Emily Carter',
                'profile_picture' => 'https://randomuser.me/api/portraits/women/45.jpg',
                'rating' => 4
            ],
            'message' => 'Your essay had a well-structured argument and strong supporting evidence. However, pay more attention to grammar and sentence fluency. I recommend reading aloud to catch awkward phrasing.',
            'created_at' => now()->subDays(3)
        ],
        (object)[
            'instructor' => (object)[
                'name' => 'Michael Brown',
                'profile_picture' => '',
                'rating' => 5
            ],
            'message' => 'I was really impressed by your participation in class discussions. Your insights were thoughtful and demonstrated deep understanding of the topic. Keep it up!',
            'created_at' => now()->subWeek()
        ],
        (object)[
            'instructor' => (object)[
                'name' => 'Sarah Johnson',
                'profile_picture' => 'https://randomuser.me/api/portraits/women/39.jpg',
                'rating' => 3
            ],
            'message' => 'You have potential in mathematics, but I noticed you struggled with some advanced algebra concepts. Consider reviewing past materials and practicing daily exercises.',
            'created_at' => now()->subDays(5)
        ],
        (object)[
            'instructor' => (object)[
                'name' => 'Prof. Robert Wilson',
                'profile_picture' => '',
                'rating' => 4
            ],
            'message' => 'Your presentation was well-researched and engaging, but you should work on maintaining eye contact with the audience. Also, try to slow down when explaining key points.',
            'created_at' => now()->subWeek()
        ],
        (object)[
            'instructor' => (object)[
                'name' => 'Lisa Thompson',
                'profile_picture' => 'https://randomuser.me/api/portraits/women/50.jpg',
                'rating' => 5
            ],
            'message' => 'Excellent improvement in your coding skills! Your logic in problem-solving has become more structured and efficient. Try experimenting with different approaches to further enhance your understanding.',
            'created_at' => now()->subDays(2)
        ]
    ]);

    return view('pages.feedback', compact('feedbacks'));
}
}
