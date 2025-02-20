<?php require_once(__DIR__ . '/../../partials/header.php'); ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-900 min-h-screen">
    <div class="container px-6 py-8 mx-auto">
        <div class="flex flex-col justify-between">
            <h3 class="text-4xl font-extrabold text-white mb-8">Statistics</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold">Total Presentations</h2>
                    <p class="text-4xl font-bold mt-4"><?= $statistics[0]; ?></p>
                </div>

                <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold">Most Active Student</h2>
                    <p class="text-lg mt-4">👨‍🎓 <?= $statistics[2][0]['nom'] . ' ' . $statistics[2][0]['prenom']; ?></p>
                    <p class="text-4xl font-bold"><?= $statistics[2][0]['nombre_sujets']; ?> topics</p>
                </div>

                <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold">Participation Rate</h2>
                    <p class="text-4xl font-bold mt-4"><?= $statistics[1]; ?>%</p>
                </div>
            </div>

            <div class="mt-10 p-8 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-white mb-6">Most Active Students</h2>
                <table class="w-full border-collapse bg-gray-700 text-white rounded-lg">
                    <thead class="bg-gray-600">
                        <tr>
                            <th class="p-4 text-left">Last Name</th>
                            <th class="p-4 text-left">First Name</th>
                            <th class="p-4 text-left">Number of Topics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($statistics[2] as $user): ?>
                            <tr class="border-b border-gray-600">
                                <td class="p-4"><?= $user['nom']; ?></td>
                                <td class="p-4"><?= $user['prenom']; ?></td>
                                <td class="p-4"><?= $user['nombre_sujets']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php require_once(__DIR__ . '/../../partials/footer.php'); ?>