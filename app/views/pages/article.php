<?php
require_once APPROOT . '/views/inc/header.php';
?>

<a href="#" class="ml-[260px] mt-8 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[#3b82f6] to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
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
                        ID Article
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
                        ID Assereur
                </th>
                <th
                    class="cursor-pointer border-y border-blue-gray-100 bg-[#3b82f6] p-4 transition-colors hover:bg-blue-gray-50">
                    <p
                        class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">
                        ID Client
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
        <?php foreach($data as $article){ ?>
                        <tr>
                            <td><?= $article->id_article  ?></td>
                            <td><?= $article->nom ?></td>
                            <td><?= $article->id_assureur ?></td>
                            <td><?= $article->id_client ?></td>

                            <td class="flex gap-[10px]">
                                <a href='<?=URL_ROOT?>/pages/deleteArticle?id=<?= $article->id_article ?>' class='flex items-center justify-center bg-rose-500 text-white w-[40px] h-[40px]'>
                                    <i class='fa-solid fa-trash'></i>
                                </a>
                                <a href='<?=URL_ROOT?>/editUser?id=<?= $article->id_article ?>' class='flex items-center justify-center bg-green-500 text-white w-[40px] h-[40px]'>
                                    <i class='fa-solid fa-pen'></i>
                                </a>
                            </td>
                        </tr>  
                <?php  } ?>

        </tbody>

    </table>
</div>
