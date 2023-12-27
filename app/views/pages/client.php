<?php
require_once APPROOT . '/views/inc/header.php';
?>

<a href="#"
    class="ml-[260px] mt-8 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[#3b82f6] to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
    <span data-modal-target="crud-modal" data-modal-toggle="crud-modal"
        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
        Ajouter
    </span>
</a>




<div class=" flex justify-evenly items-center ml-56 mb-8 p-[30px]">

    <table class="mt-4 w-full min-w-max table-auto text-left">
        <thead>
            <tr>
                <th
                    class="cursor-pointer border-y border-blue-gray-100 bg-[#3b82f6] p-4 transition-colors hover:bg-blue-gray-50">
                    <p
                        class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">
                        ID_Client
                    </p>
                </th>
                <th
                    class="cursor-pointer border-y border-blue-gray-100 bg-[#3b82f6] p-4 transition-colors hover:bg-blue-gray-50">
                    <p
                        class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">
                        Nom
                </th>
                <th
                    class="cursor-pointer border-y border-blue-gray-100 bg-[#3b82f6] p-4 transition-colors hover:bg-blue-gray-50">
                    <p
                        class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">
                        Prénom
                </th>
                <th
                    class="cursor-pointer border-y border-blue-gray-100 bg-[#3b82f6] p-4 transition-colors hover:bg-blue-gray-50">
                    <p
                        class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">
                        Adress
                </th>

                <th
                    class="cursor-pointer border-y border-blue-gray-100 bg-[#3b82f6] p-4 transition-colors hover:bg-blue-gray-50">
                    <p
                        class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">
                        Actions</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $client) { ?>
                <tr>
                    <td>
                        <?= $client->id_client ?>
                    </td>
                    <td>
                        <?= $client->nom ?>
                    </td>
                    <td>
                        <?= $client->prenom ?>
                    </td>
                    <td>
                        <?= $client->adress ?>
                    </td>

                    <td class="flex gap-[10px]">
                        <a href='<?= URL_ROOT ?>/pages/deleteClient?id=<?= $client->id_client ?>'>
                            <img src="<?php echo URL_ROOT ?>/photos/supprimer.png" class="h-4 me-3 sm:h-6" />

                        </a>
                        <a href='<?= URL_ROOT ?>/pages/editClient?id_client=<?= $client->id_client ?>'>
                            <!-- <span data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"> -->

                            </span>
                            <img src="<?php echo URL_ROOT ?>/photos/editer.png" class="h-4 sm:h-6" />

                        </a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>

    </table>
</div>

<!-- pop out form  -->

<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Ajouter Client
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <form action="<?= URL_ROOT ?>/pages/addClient" method="POST" class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                        <input type="text" name="nom" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                        <input type="text" name="prenom" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adress</label>
                        <input type="text" name="adress" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir Assurence</label>
                        <select name="assurence" class=" block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md
                        dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500
                        dark:focus:border-blue-500 focus:outline-none focus:ring">
                            <option disabled selected value="0" select >select assureur</option>
                            <?php 
    
                               foreach ($asr_data as $asr) {
                                    echo "<option value='". $asr['id_assureur'] ."' >". $asr['nom'] ."</option>";
                               }

                            ?>
                           
                        </select>
                    </div>


                </div>
                <button type="submit" name="submit"
                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Add Client
                </button>
            </form>
        </div>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>