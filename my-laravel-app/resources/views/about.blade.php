<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SoftCraft Lab</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header class="bg-white">
        <div class="max-w-screen-xxl px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-center py-6">About Us</h1>
        </div>
    </header>

    <main class="container mx-auto py-6 sm:py-0">
        <section class="relative bg-gradient-to-r from-blue-900 to-teal-800 text-white text-center py-12 px-4 sm:py-20 overflow-hidden">
            <h2 class="text-2xl font-semibold">Who We Are</h2>
            <p class="mt-4">We are a team of dedicated professionals committed to delivering high-quality software solutions.</p>
        </section>

        <section class="container mx-auto py-16 px-4">
            <h3 class="text-xl font-semibold">Our Mission</h3>
            <p class="mt-4">Our mission is to empower businesses through innovative technology and exceptional service.</p>
        </section>

        <section class="bg-gray-200 py-16 px-4">
            <h3 class="text-xl font-semibold">Why Choose Us</h3>
            <p class="mt-4">We prioritize our clients' needs and strive to exceed their expectations with every project.</p>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-8 text-center">
        <p>&copy; {{ date('Y') }} SoftCraft Lab. All rights reserved.</p>
    </footer>
</body>
</html>