<?php
session_start();

include('header.php');
?>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-6">Contact Bezawit's Blog</h1>

    <p class="text-lg leading-relaxed">
        Feel free to get in touch with us. Use the contact form below to send us a message.
    </p>

    <form action="#" method="POST" class="mt-6">
        <label for="name" class="block text-sm font-medium text-gray-700">Your Name:</label>
        <input type="text" name="name" required class="mt-1 p-2 w-full border rounded-md">

        <label for="email" class="block mt-4 text-sm font-medium text-gray-700">Your Email:</label>
        <input type="email" name="email" required class="mt-1 p-2 w-full border rounded-md">

        <label for="message" class="block mt-4 text-sm font-medium text-gray-700">Your Message:</label>
        <textarea name="message" rows="4" required class="mt-1 p-2 w-full border rounded-md"></textarea>

        <button type="submit" class="mt-6 bg-indigo-600 text-white p-2 rounded-md">Send Message</button>
    </form>

</div>

<?php include('footer.php'); ?>
