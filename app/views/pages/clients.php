<?php
require_once APPROOT .'/views/inc/header.php';
?>


   
    <button type="button" class="top-10 mb-8 ml-[260px] relative px-8 py-4 ml-4 overflow-hidden font-semibold  bg-[#fdba74]">Ajouter
</button>
<div class=" flex justify-evenly items-center ml-64 mb-8 p-[30px]">
    
    <table class="mt-4 w-full min-w-max table-auto text-left">
        <thead>
            <tr>
                <th class="cursor-pointer border-y border-blue-gray-100 bg-[#fdba74] p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">ID_Client 
                        </p>
                    </th>
                    <th class="cursor-pointer border-y border-blue-gray-100 bg-[#fdba74] p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Nom 
                            </th>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-[#fdba74] p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Prénom 
                            </th>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-[#fdba74] p-4 transition-colors hover:bg-blue-gray-50">
                                <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Adress 
                                    </th>
       
        <th class="cursor-pointer border-y border-blue-gray-100 bg-[#fdba74] p-4 transition-colors hover:bg-blue-gray-50">
            <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Actions</p>
        </th>
    </tr>
</thead>
<tbody>
    <?php
$clients = $pdo->query ("SELECT * FROM client")->fetchAll(PDO::FETCH_OBJ);

     foreach ($clients as $client): ?>
        <tr>
            <td class="p-4 border-b border-blue-gray-50"><?= $client->id_client ?></td>
            <td class="p-4 border-b border-blue-gray-50"><?= $client->nom ?></td>
            <td class="p-4 border-b border-blue-gray-50"><?= $client->prenom ?></td>
            <td class="p-4 border-b border-blue-gray-50"><?= $client->adress ?></td>

        </tr>
        <?php endforeach; ?>
</tbody>

</table>
</div>


</body>
</html>