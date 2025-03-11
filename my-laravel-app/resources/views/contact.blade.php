<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SoftCraft Lab</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header class="bg-white">
        <nav class="container mx-auto py-4">
            <ul class="flex space-x-4">
                <li><a href="{{ route('index') }}" class="text-blue-500">Home</a></li>
                <li><a href="{{ route('about') }}" class="text-blue-500">About</a></li>
                <li><a href="{{ route('projects') }}" class="text-blue-500">Projects</a></li>
                <li><a href="{{ route('services') }}" class="text-blue-500">Services</a></li>
                <li><a href="{{ route('contact') }}" class="text-blue-500">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Contact Us</h1>
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" rows="4"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Send Message</button>
        </form>
    </main>

    <footer class="bg-gray-900 text-white py-4 text-center">
        <p>&copy; {{ date('Y') }} SoftCraft Lab. All rights reserved.</p>
    </footer>
</body>
</html>