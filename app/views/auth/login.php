<?php require_once(__DIR__ . '/../partials/header.php'); ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-900 min-h-screen flex justify-center items-center">
    <div class="bg-gray-800 shadow-md rounded-lg p-10 max-w-lg w-full">
        <h2 class="text-3xl font-semibold text-center text-white mb-8">Welcome Back</h2>
        <form action="/login" method="post">
            <div class="mb-6">
                <label class="block text-gray-300 font-medium">Email Address</label>
                <input type="email" name="email" class="w-full p-3 border border-gray-600 rounded mt-2 bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div class="mb-6">
                <label class="block text-gray-300 font-medium">Password</label>
                <input type="password" name="password" class="w-full p-3 border border-gray-600 rounded mt-2 bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <button name="login" class="w-full bg-indigo-600 text-white p-3 rounded-lg hover:bg-indigo-700 transition duration-300">Log in</button>
        </form>
        <p class="text-center text-gray-400 mt-6"><a href="/forgotPassword" class="hover:underline text-indigo-400">Forgot Password?</a></p>
        <p class="text-center text-gray-400 mt-4">New here? <a href="/register" class="text-indigo-400 hover:underline">Create an account</a></p>
    </div>
</main>

<?php require_once(__DIR__ . '/../partials/footer.php'); ?>
