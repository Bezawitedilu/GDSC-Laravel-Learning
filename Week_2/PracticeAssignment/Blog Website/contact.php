<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-indigo-600 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <a href="#" class="text-2xl font-bold">Your Blog</a>
            <div>
                <a href="#" class="mx-2">Home</a>
                <a href="#" class="mx-2">Categories</a>
                <a href="about.php" class="mx-2">About</a>
                <a href="contact.php" class="mx-2">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-8 p-8 bg-white rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
        <p class="text-gray-700">Have questions, suggestions, or just want to say hello? We'd love to hear from you! Feel free to reach out to us using the contact form below or send us an email at <a href="mailto:info@yourblog.com" class="text-indigo-600">info@yourblog.com</a>.</p>

        <!-- Contact Form (Replace with your actual form implementation) -->
        <form action="#" method="POST" class="mt-8">
            <label for="name" class="block text-sm font-medium text-gray-600">Your Name</label>
            <input id="name" name="name" type="text" required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-indigo-500 mb-4">

            <label for="email" class="block text-sm font-medium text-gray-600">Your Email</label>
            <input id="email" name="email" type="email" required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-indigo-500 mb-4">

            <label for="message" class="block text-sm font-medium text-gray-600">Your Message</label>
            <textarea id="message" name="message" rows="4" required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-indigo-500 mb-4"></textarea>

            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:border-indigo-500">Send
                Message</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Your Blog. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/focus-visible@7.0.2/dist/focus-visible.min.js" defer></script>

</body>

</html>
