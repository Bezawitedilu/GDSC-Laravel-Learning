<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen items-center justify-center">
  <div class="bg-white w-full max-w-sm p-6 rounded-md shadow-md">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">Create an Account</h2>

    <form class="space-y-4" action="#" method="POST">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-600">Full Name</label>
        <input id="name" name="name" type="text" autocomplete="name" required
               class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-indigo-500">
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-600">Email address</label>
        <input id="email" name="email" type="email" autocomplete="email" required
               class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-indigo-500">
      </div>

      <div class="flex justify-between">
        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
      </div>
      <input id="password" name="password" type="password" autocomplete="new-password" required
             class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-indigo-500">

      <div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:border-indigo-500">
          Sign up
        </button>
      </div>
    </form>

    <p class="mt-4 text-center text-sm text-gray-600">
      Already have an account? <a href="login.php" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
    </p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/focus-visible@7.0.2/dist/focus-visible.min.js" defer></script>

</body>
</html>
