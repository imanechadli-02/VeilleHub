<?php require_once(__DIR__ . '/../../partials/header.php'); ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-900 min-h-screen">
    <div class="container px-6 py-8 mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-4xl font-extrabold text-white">Students</h3>

            <!-- Search input -->
            <form method="GET" class="flex items-center">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <input type="text" name="userToSearch" onchange="this.form.submit()" class="w-64 pl-10 py-2 pr-4 rounded-lg bg-gray-800 text-white border border-gray-700 focus:border-blue-500 focus:outline-none" placeholder="Search" value="<?= isset($_GET['userToSearch']) ? htmlspecialchars($_GET['userToSearch']) : '' ?>">
                </div>
            </form>
        </div>

        <div class="bg-gray-800 shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Role</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Nbr of Presentation</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-300 uppercase tracking-wider">Delete</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800 divide-y divide-gray-700">
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-gray-600 text-white text-xl rounded-full flex justify-center items-center uppercase">
                                        <?= htmlspecialchars($user['nom'])[0] . htmlspecialchars($user['prenom'])[0] ?>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-white"><?= htmlspecialchars($user['nom']); ?></div>
                                        <div class="text-sm text-gray-400"><?= htmlspecialchars($user['prenom']); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-white"><?= htmlspecialchars($user['email']); ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form method="POST" action="/teacher/students/changeStatus" style="display:inline;">
                                    <input type="hidden" name="block_user_id" value="<?= $user['id_user']; ?>">
                                    <input type="hidden" name="status_user" value="<?= $user['is_Vlalide']; ?>">
                                    <button type="submit" name="bnt_user_block" class="inline-flex px-2 text-xs font-semibold leading-5 rounded-full <?= $user['is_Vlalide'] == 1 ? 'bg-green-500 text-white' : 'bg-red-500 text-white' ?>">
                                        <?= $user['is_Vlalide'] == 1 ? 'Active' : 'Blocked' ?>
                                    </button>
                                </form>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                <?= $user['role']; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                <?= $user['nombre_participations']; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form method="POST" action="/teacher/students/delete" style="display:inline;">
                                    <input type="hidden" name="remove_user" value="<?= $user['id_user']; ?>">
                                    <button type="submit" name="delete_user" class="text-red-500 hover:text-red-700">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php require_once(__DIR__ . '/../../partials/footer.php'); ?>