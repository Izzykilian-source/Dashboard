<!DOCTYPE html>
<html lang="id">
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | Upstart SAT Prep</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Konten Utama: Navbar di atas, konten di bawah -->
    <div class="flex flex-col flex-1">
      @include('partials.navbar')
      <main class="p-6 overflow-auto">
        @yield('content')
      </main>
    </div>
  </div>
  @stack('scripts')
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
</html>
