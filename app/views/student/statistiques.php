<?php require_once(__DIR__ . '/../partials/header.php'); ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gradient-to-r from-teal-800 to-purple-800 min-h-[600px] py-12 px-6">
    <div class="max-w-7xl mx-auto bg-gradient-to-r from-gray-800 to-black shadow-2xl rounded-3xl p-10">
        <h1 class="text-4xl font-extrabold text-white text-center mb-12">📊 Statistiques Étudiant</h1>

        <!-- Nombre de suggestions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-10">
            <div class="bg-gradient-to-r from-teal-500 to-blue-500 p-8 rounded-xl shadow-xl transform hover:scale-105 transition-transform duration-300">
                <p class="text-2xl font-semibold text-white">Nombre de suggestions :</p>
                <p class="text-5xl font-extrabold text-white mt-2" id="totalSuggestions"><?= $statistics['total_suggestions']; ?></p>
            </div>

            <!-- Présentations à venir -->
            <div class="bg-gradient-to-r from-green-500 to-yellow-500 p-8 rounded-xl shadow-xl transform hover:scale-105 transition-transform duration-300">
                <p class="text-2xl font-semibold text-white">Présentations à venir :</p>
                <p class="text-5xl font-extrabold text-white mt-2" id="presentationsAvenir"><?= $statistics['presentations_A_venir']; ?></p>
            </div>

            <!-- Présentations passées -->
            <div class="bg-gradient-to-r from-red-500 to-pink-500 p-8 rounded-xl shadow-xl transform hover:scale-105 transition-transform duration-300">
                <p class="text-2xl font-semibold text-white">Présentations passées :</p>
                <p class="text-5xl font-extrabold text-white mt-2" id="presentationsPassees"><?= $statistics['presentations_Passe']; ?></p>
            </div>
        </div>

        <!-- Taux d'acceptation des suggestions -->
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-8 rounded-xl shadow-xl mb-10 transform hover:scale-105 transition-transform duration-300">
            <p class="text-2xl font-semibold text-white">Taux d'acceptation :</p>
            <p class="text-5xl font-extrabold text-white mt-2" id="tauxAcceptation"><?= $statistics['taux_acceptation']; ?>%</p>
        </div>

        <!-- Classement des étudiants -->
        <div class="bg-gradient-to-r from-gray-600 to-gray-800 p-8 rounded-xl shadow-xl">
            <h2 class="text-3xl font-bold text-white mb-6">🏆 Classement des étudiants</h2>
            <table class="w-full border-collapse border border-gray-600">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="border border-gray-600 px-6 py-3 text-left text-white">#</th>
                        <th class="border border-gray-600 px-6 py-3 text-left text-white">Nom</th>
                        <th class="border border-gray-600 px-6 py-3 text-left text-white">Prénom</th>
                        <th class="border border-gray-600 px-6 py-3 text-left text-white">Présentations</th>
                    </tr>
                </thead>
                <tbody id="classementTable">
                    <?php $count = 1 ;foreach ($statistics['classement'] as $classement) : ?>
                        <tr class="bg-gray-800 hover:bg-gray-700 transform hover:scale-105 transition-transform duration-300">
                            <td class="border border-gray-600 px-6 py-4 text-center text-white"><?= $count++; ?></td>
                            <td class="border border-gray-600 px-6 py-4 text-white"><?= $classement['nom']; ?></td>
                            <td class="border border-gray-600 px-6 py-4 text-white"><?= $classement['prenom']; ?></td>
                            <td class="border border-gray-600 px-6 py-4 text-center text-white"><?= $classement['total_presentations']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php require_once(__DIR__ . '/../partials/footer.php'); ?>
