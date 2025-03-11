<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SoftCraft Lab</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header class="bg-white">
        <div class="container mx-auto py-4">
            <h1 class="text-3xl font-bold text-center">Welcome to SoftCraft Lab</h1>
        </div>
    </header>

    <main class="container mx-auto py-6">
        <section class="text-center">
            <h2 class="text-2xl font-semibold">Your Partner in Custom Software Development</h2>
            <p class="mt-4">Explore our services and projects to see how we can help your business thrive.</p>
        </section>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-bold">Services</h3>
                <p>Discover our range of software development services tailored to your needs.</p>
                <a href="{{ route('services') }}" class="text-blue-500">Learn More</a>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-bold">Projects</h3>
                <p>Check out our latest projects and see our expertise in action.</p>
                <a href="{{ route('projects') }}" class="text-blue-500">View Projects</a>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-bold">Contact Us</h3>
                <p>Have questions? Get in touch with our team for more information.</p>
                <a href="{{ route('contact') }}" class="text-blue-500">Contact Us</a>
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-4 text-center">
        <p>&copy; {{ date('Y') }} SoftCraft Lab. All rights reserved.</p>
    </footer>
</body>
</html>