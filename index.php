<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
    <h2 class="text-3xl font-bold text-center text-purple-600 mb-6">Create Account</h2>

    <!-- Form -->
    <form action="submit.php" method="POST" class="space-y-4">
      <?php if (isset($_GET['error'])): ?>
        <div class="bg-red-100 text-red-600 p-2 rounded"><?= htmlspecialchars($_GET['error']) ?></div>
      <?php endif; ?>

      <input type="text" name="name" placeholder="Full Name" class="w-full p-3 border border-gray-200 rounded-xl" required>
      <input type="email" name="email" placeholder="Email" class="w-full p-3 border border-gray-200 rounded-xl" required>
      <input type="password" name="password" placeholder="Password" class="w-full p-3 border border-gray-200 rounded-xl" required>

      <button type="submit" class="w-full bg-purple-500 text-white py-3 rounded-xl hover:bg-purple-600">Sign Up</button>
    </form>
  </div>

</body>
</html>
