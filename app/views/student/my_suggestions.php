<?php require_once(__DIR__ . '/../partials/header.php'); ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-900 min-h-[600px]">

    <div class="container px-6 py-8 mx-auto ">

        <div class="flex justify-between">
            <h3 class="text-3xl font-extrabold text-gray-100 inline-block">My Suggestions</h3>

            <form method="GET">
                <div class="relative mx-4 lg:mx-0 border-b">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <input type="text" name="suggToSearch" onchange="this.form.submit()" class="w-32 pl-10 py-1 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600 focus:outline-none text-gray-800 bg-gray-700" placeholder="Search" value="<?= isset($_GET['userToSearch']) ? htmlspecialchars($_GET['userToSearch']) : '' ?>">
                </div>
            </form>

            <form method="GET">
                <select name="filter" class="rounded-lg px-2 py-1 focus:outline-none bg-gray-700 text-gray-100" onchange="this.form.submit()">
                    <option value="all" <?= isset($_GET['filter']) && $_GET['filter'] == 'all' ? 'selected' : '' ?>>ALL</option>
                    <option value="Proposé" <?= isset($_GET['filter']) && $_GET['filter'] == 'Proposé' ? 'selected' : '' ?>>Proposé</option>
                    <option value="Validé" <?= isset($_GET['filter']) && $_GET['filter'] == 'Validé' ? 'selected' : '' ?>>Validé</option>
                    <option value="Rejeté" <?= isset($_GET['filter']) && $_GET['filter'] == 'Rejeté' ? 'selected' : '' ?>>Rejeté</option>
                </select>
            </form>
        </div>


        <div class="flex justify-end my-4">
            <button class="addSubjects px-4 py-2 h-14 w-max border-0 rounded-md bg-indigo-600 hover:border-indigo-500 hover:bg-transparent hover:border-2 text-white hover:text-indigo-600">
                Add subject
            </button>
        </div>


        <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b-2 border-indigo-600 shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <thead class="bg-indigo-600 whitespace-nowrap">
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-100 uppercase border-b-2 border-indigo-600 ">
                                    Title</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-100 uppercase border-b-2 border-indigo-600 ">
                                    Description</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-100 uppercase border-b-2 border-indigo-600 ">
                                    Propose by</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-100 uppercase border-b-2 border-indigo-600 ">
                                    Status</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-right text-gray-100 uppercase border-b-2 border-indigo-600 ">
                                    Delete</th>
                            </tr>
                        </thead>

                        <tbody class="bg-gray-800">
                            <!-- users -->
                            <?php foreach ($suggestions as $suggestion): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b-2 border-indigo-600">
                                        <div class="text-sm font-medium leading-5 text-gray-100"><?= htmlspecialchars($suggestion->titre); ?></div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b-2 border-indigo-600">
                                        <div class="text-sm leading-5 text-gray-100 w-full"><?= htmlspecialchars($suggestion->description); ?></div>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-400 whitespace-no-wrap border-b-2 border-indigo-600">
                                        <?= $suggestion->nom . ' ' . $suggestion->prenom; ?>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b-2 border-indigo-600">
                                        <button type="submit" name="btn_status_sugg" class="inline-flex px-2 text-xs font-semibold leading-5 bg-green-100 rounded-full <?= $suggestion->status == 'Proposé' ? 'text-blue-400' : ($suggestion->status == 'Validé' ? 'text-green-400' : 'text-red-400'); ?>">
                                            <?= $suggestion->status ?>
                                        </button>
                                    </td>

                                    <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b-2 border-indigo-600">
                                        <form method="GET" action="/student/actions/updateSgg" style="display:inline;">
                                            <input type="hidden" name="titleForm" value="<?= htmlspecialchars($suggestion->titre); ?>">
                                            <input type="hidden" name="DescriptionForm" value="<?= htmlspecialchars($suggestion->description); ?>">
                                            <button class="edit_sugg mr-4" name="updateForm" value="<?= htmlspecialchars($suggestion->id_sujet); ?>" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                                    <path d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z" data-original="#000000" />
                                                </svg>
                                            </button>
                                        </form>

                                        <form method="POST" action="/student/my_suggestions/delete" style="display:inline;">
                                            <input type="hidden" name="id_sujets" value="<?= $suggestion->id_sujet; ?>">
                                            <button class="mr-4" title="Delete" name="btn_delete_sugg" onclick="return confirm('Are you sure?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                                    <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2H8v2H4a1 1 0 0 0-1 1h16a1 1 0 0 0-1-1Z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</main>

<?php require_once(__DIR__ . '/../partials/footer.php'); ?>
