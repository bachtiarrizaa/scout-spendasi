<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="./node_modules/preline/dist/preline.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>

<div class="min-h-full">
  {{-- <x-navbar></x-navbar> --}}

    {{-- <x-header>{{ $title }}</x-header> --}}

    <main>
      {{-- <x-heroes></x-heroes> --}}
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        {{ $slot }}
      </div>
    </main>
  </div>
  <x-footer></x-footer>
</body>
</html>
