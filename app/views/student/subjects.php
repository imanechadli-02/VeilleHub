<?php require_once(__DIR__ . '/../partials/header.php'); ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-900 min-h-[600px] text-white">

    <div class="font-[sans-serif] p-4 min-h-screen bg-gray-900">
        <div class="max-w-6xl mx-auto">

            <div class="flex justify-between">
                <h3 class="text-3xl font-extrabold text-white inline-block">Subjects</h3>

                <!-- Search input -->
                <form method="GET">
                    <div class="relative mx-4 lg:mx-0 border-b border-gray-600">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        <input type="text" name="subToSearch" onchange="this.form.submit()" class="w-32 pl-10 py-1 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600 focus:outline-none bg-gray-800 text-white" placeholder="Search" value="<?= isset($_GET['userToSearch']) ? htmlspecialchars($_GET['userToSearch']) : '' ?>">
                    </div>
                </form>

                <!-- Filter select -->
                <form method="GET">
                    <select name="filter" class="rounded-lg px-2 py-1 focus:outline-none bg-gray-800 text-white" onchange="this.form.submit()">
                        <option value="all" <?= isset($_GET['filter']) && $_GET['filter'] == 'all' ? 'selected' : '' ?>>ALL</option>
                        <option value="A venir" <?= isset($_GET['filter']) && $_GET['filter'] == 'A venir' ? 'selected' : '' ?>>A venir</option>
                        <option value="Passé" <?= isset($_GET['filter']) && $_GET['filter'] == 'Passé' ? 'selected' : '' ?>>Passé</option>
                    </select>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-12 max-lg:max-w-3xl max-md:max-w-md mx-auto ">

                <?php foreach ($subjects as $subject): ?>
                    <div class="p-6 bg-gray-800 bg-opacity-80 border-none rounded-xl shadow-xl shadow-black hover:shadow-lg">
                        <span class="text-sm block mb-2 text-gray-400 font-semibold"><?= $subject->date_realisation; ?> | Status : <?= $subject->status; ?></span>
                        <a href="/student/actions/showPresentation?id_presentation=<?= $subject->id_presentation; ?>">
                            <h3 class="text-xl font-bold text-indigo-400 hover:text-green-500"><?= $subject->titre; ?></h3>
                        </a>
                        <div class="mt-4">
                            <p class="text-gray-300 text-sm "><?= $subject->description; ?></p>
                        </div>
                        <?php if ($subject->status == 'Passé'): ?>
                            <div class="mt-4">
                                <p class="text-gray-300 text-sm ">link : <a href="<?= $subject->lien_presentation; ?>" class="text-indigo-400 hover:text-green-500">Click here</a></p>
                            </div>
                        <?php endif; ?>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

</main>

<?php require_once(__DIR__ . '/../partials/footer.php'); ?>
