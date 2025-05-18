protected function redirectTo($request)
{
    // Misalnya, arahkan ke halaman dashboard jika tidak terautentikasi
    if (! $request->expectsJson()) {
        return route('dashboard');
    }
}
