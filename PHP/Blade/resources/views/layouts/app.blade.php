<!DOCTYPE html>
<html class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="h-full">
    <x-header />
    <main class="-mt-24 pb-8">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <h1 class="sr-only">Page title</h1>
          <!-- Main 3 column grid -->
          <div class="grid grid-cols-1 items-start gap-4 lg:grid-cols-2 lg:gap-8">
            <!-- Left column -->
            <div class="grid grid-cols-1 gap-4 lg:col-span-2">
              <section aria-labelledby="section-1-title">
                <h2 class="sr-only" id="section-1-title">Section title</h2>
                <div class="overflow-hidden rounded-lg bg-white shadow">
                  <div class="p-6">
                    @yield('content')
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </main>
      <x-footer />
    </div>
</body>
</html>