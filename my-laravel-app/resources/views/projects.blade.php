<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - SoftCraft Lab</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header class="bg-white">
        <div class="max-w-screen-xxl px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold">Our Projects</h1>
        </div>
    </header>

    <main class="container mx-auto py-6 sm:py-0">
        <section class="py-12 px-4">
            <h2 class="text-xl font-semibold">Featured Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($projects as $project)
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="font-bold">{{ $project->title }}</h3>
                        <p>{{ $project->description }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-8 mt-10 text-center">
        <p>&copy; {{ date('Y') }} SoftCraft Lab. All rights reserved.</p>
    </footer>
</body>
</html>