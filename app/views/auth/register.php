<?php require_once(__DIR__ . '/../partials/header.php'); ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-900 min-h-screen flex justify-center items-center">
    <div class="bg-gray-800 shadow-xl rounded-lg p-10 max-w-lg w-full">
        <h2 class="text-4xl font-extrabold text-center text-white mb-12">Sign Up</h2>
        <form action="/register" method="post">
            <div class="mb-8">
                <label class="block text-gray-300 font-medium mb-2">Last Name</label>
                <input type="text" name="nom" class="w-full p-4 border border-gray-600 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your last name" required>
            </div>
            <div class="mb-8">
                <label class="block text-gray-300 font-medium mb-2">First Name</label>
                <input type="text" name="prenom" class="w-full p-4 border border-gray-600 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your first name" required>
            </div>
            <div class="mb-8">
                <label class="block text-gray-300 font-medium mb-2">Email Address</label>
                <input type="email" name="email" class="w-full p-4 border border-gray-600 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
            </div>
            <div class="mb-8">
                <label class="block text-gray-300 font-medium mb-2">Role</label>
                <select name="role" class="w-full p-4 border border-gray-600 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="" class="text-gray-500 bg-gray-700">Select your role</option>
                    <option value="Enseignant">Teacher</option>
                    <option value="Etudiant">Student</option>
                </select>
            </div>
            <div class="mb-8">
                <label class="block text-gray-300 font-medium mb-2">Password</label>
                <input type="password" name="password" class="w-full p-4 border border-gray-600 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
            </div>
            <div class="mb-8">
                <label class="block text-gray-300 font-medium mb-2">Confirm Password</label>
                <input type="password" name="password2" class="w-full p-4 border border-gray-600 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirm your password" required>
            </div>
            <button name="signup" class="w-full bg-blue-600 text-white py-4 rounded-lg hover:bg-blue-700 transition duration-300">Sign Up</button>
        </form>
        <p class="text-center text-gray-400 mt-8">Already have an account? <a href="/login" class="text-blue-400 hover:underline">Log in</a></p>
    </div>
</main>

<?php require_once(__DIR__ . '/../partials/footer.php'); ?>
