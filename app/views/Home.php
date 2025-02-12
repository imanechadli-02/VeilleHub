<?php require_once(__DIR__ . '../partials/header.php'); ?>

<div class="bg-gradient-to-r from-green-400 to-blue-500 font-sans">
    <div class="relative overflow-hidden">
        <div class="max-w-screen-xl mx-auto py-16 px-4 sm:px-6 lg:py-32 lg:px-8">
            <div class="relative z-10 text-center lg:text-left">
                <h1 class="text-4xl tracking-tight leading-10 font-extrabold text-green-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-7xl">
                    Welcome to
                    <br class="xl:hidden" />
                    <span class="text-white">Profile Hub</span>
                </h1>
                <p class="max-w-md mx-auto text-lg text-gray-100 sm:text-xl mt-4 md:mt-6 md:max-w-3xl">
                    Discover your profile details and manage your account settings with ease. Stay connected and updated.
                </p>

                <div class="mt-12 flex max-sm:flex-col sm:justify-center lg:justify-start gap-4">
                    <div class="rounded-md shadow">
                        <a href="/edit-profile"><button class="w-full flex items-center justify-center px-8 py-3 text-base tracking-wide rounded-md text-green-600 bg-white hover:text-green-500 hover:bg-green-100 transition duration-150 ease-in-out">
                                Edit Profile
                            </button>
                        </a>
                    </div>
                    <div>
                        <a href="/logout">
                            <button class="w-full flex items-center justify-center px-8 py-3 text-base tracking-wide rounded-md text-white bg-green-500 hover:bg-green-400 transition duration-150 ease-in-out">
                                Log Out
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://via.placeholder.com/600x400" alt="Profile image" />
        </div>
    </div>
</div>

<div class="bg-white font-sans p-4">
    <div class="max-w-6xl mx-auto">
        <div class="text-center max-w-xl mx-auto">
            <h2 class="text-3xl font-extrabold text-gray-800 inline-block">Profile Details</h2>
        </div>

        <div class="flex justify-between mt-8">
            <div class="w-full lg:w-1/3 bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Personal Information</h3>
                <p class="text-gray-700">Name: John Doe</p>
                <p class="text-gray-700">Email: johndoe@example.com</p>
                <p class="text-gray-700">Location: New York, USA</p>
            </div>

            <div class="w-full lg:w-2/3 bg-gray-100 p-6 rounded-lg shadow-md ml-0 lg:ml-4 mt-4 lg:mt-0">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">About Me</h3>
                <p class="text-gray-700">I am a passionate software developer with over 5 years of experience in building web applications. I love working with modern technologies and am always eager to learn new things.</p>
            </div>
        </div>
    </div>
</div>

<?php require_once(__DIR__ . '../partials/footer.php'); ?>