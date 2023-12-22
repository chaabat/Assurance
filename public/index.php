<?php
include('config/db.php');

$clients = $pdo->query ("SELECT * FROM client")->fetchAll(PDO::FETCH_OBJ);

?>


<div class=" flex justify-evenly items-center ml-64 mb-8 p-[30px]">
    
    <table class="mt-4 w-full min-w-max table-auto text-left">
        <thead>
            <tr>
                <th class="cursor-pointer border-y border-blue-gray-100 bg-[#6c757d] p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">ID_Client 
                        </p>
                    </th>
                    <th class="cursor-pointer border-y border-blue-gray-100 bg-[#6c757d] p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Nom 
                            </th>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-[#6c757d] p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Prénom 
                            </th>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-[#6c757d] p-4 transition-colors hover:bg-blue-gray-50">
                                <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Adress 
                                    </th>
       
        <th class="cursor-pointer border-y border-blue-gray-100 bg-[#6c757d] p-4 transition-colors hover:bg-blue-gray-50">
            <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Actions</p>
        </th>
    </tr>
</thead>
<tbody>
    <?php foreach ($clients as $client): ?>
        <tr>
            <td><?= $client->id_client ?></td>
            <td><?= $client->nom ?></td>
            <td><?= $client->prenom ?></td>
            <td><?= $client->adress ?></td>

        </tr>
        <?php endforeach; ?>
</tbody>

</table>
</div>



<?php include_once('views/client.php'); ?>








