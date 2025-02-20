<?php require_once(__DIR__ . '/../partials/header.php'); ?>

<div class="bg-gradient-to-r from-gray-800 to-black font-[sans-serif]">
    <div class="relative overflow-hidden">
        <div class="max-w-screen-xl mx-auto py-16 px-4 sm:px-6 lg:py-32 lg:px-8">
            <div class="relative z-10 text-center lg:text-left">
                <h1 class="text-4xl tracking-tight leading-10 font-extrabold text-indigo-300 sm:text-5xl sm:leading-none md:text-6xl lg:text-7xl">
                    Welcome to
                    <br class="xl:hidden" />
                    <span class="text-white"> Veilles Hub</span>
                </h1>
                <p class="max-w-md mx-auto text-lg text-gray-400 sm:text-xl mt-4 md:mt-6 md:max-w-3xl">
                    Discover upcoming technical topic presentations. Stay updated with the latest and relevant knowledge.
                </p>

                <div class="mt-12 flex max-sm:flex-col sm:justify-center lg:justify-start gap-4">
                    <div class="rounded-md shadow">
                        <a href="/login"><button class="w-full flex items-center justify-center px-8 py-3 text-base tracking-wide rounded-md text-indigo-600 bg-white hover:text-indigo-500 hover:bg-indigo-100 transition duration-150 ease-in-out">
                                Log IN
                            </button>
                        </a>
                    </div>
                    <div>
                        <a href="/register">
                            <button class="w-full flex items-center justify-center px-8 py-3 text-base tracking-wide rounded-md text-white bg-indigo-500 hover:bg-indigo-400 transition duration-150 ease-in-out">
                                Sign Up
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://woc.aises.org/sites/default/files/styles/image730x495/public/March2020-Professional-Illo-BLOGPOST-FNL.jpg?itok=xKX8buVr" alt="presentation image" />
        </div>
    </div>
</div>

<!-- Section 2 -->
<div class="bg-gray-900 font-[sans-serif] p-4">
    <div class="max-w-6xl mx-auto">
        <div class="text-center max-w-xl mx-auto">
            <h2 class="text-3xl font-extrabold text-white inline-block">Upcoming Presentations</h2>
        </div>

        <div class="flex justify-between">
            <!-- Search input -->
            <form method="GET">
                <div class="relative mx-4 lg:mx-0 border-b-2 border-indigo-600">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <input type="text" name="subToSearch" onchange="this.form.submit()" class="w-32 pl-10 py-1 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600 focus:outline-none bg-gray-800 text-white" placeholder="Search" value="<?= isset($_GET['userToSearch']) ? htmlspecialchars($_GET['userToSearch']) : '' ?>">
                </div>
            </form>

            <!-- Filter select -->
            <form method="GET" class="border-0 border-b-indigo-600 border-b-2">
                <select name="filter" class="px-2 py-1 bg-gray-800 text-white focus:outline-indigo-600" onchange="this.form.submit()">
                    <option value="all" <?= isset($_GET['filter']) && $_GET['filter'] == 'all' ? 'selected' : '' ?>>ALL</option>
                    <option value="A venir" <?= isset($_GET['filter']) && $_GET['filter'] == 'A venir' ? 'selected' : '' ?>>A venir</option>
                    <option value="Passé" <?= isset($_GET['filter']) && $_GET['filter'] == 'Passé' ? 'selected' : '' ?>>Passé</option>
                </select>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-12 max-lg:max-w-3xl max-md:max-w-md mx-auto">

            <?php foreach ($subjects as $subject): ?>
                <div class="bg-gray-800 cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
                    <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                    <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-indigo-600 font-semibold"><?= $subject->status; ?> | BY <?= $subject->nom_enseignant; ?></span>
                        <h3 class="text-xl font-bold text-white"><?= $subject->titre; ?></h3>
                        <div class="mt-4">
                            <p class="text-gray-300 text-sm"><?= $subject->description; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php require_once(__DIR__ . '/../partials/footer.php'); ?>
