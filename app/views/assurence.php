<?php
require_once ('../config/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body >

    <?php
    include('navbar.php');
    ?>
    
<div class=" flex justify-evenly items-center ml-64 mb-8 p-[30px]">
    
    <table class="mt-4 w-full min-w-max table-auto text-left">
        <thead>
            <tr>
                <th class="cursor-pointer border-y border-blue-gray-100 bg-[#2a9d8f] p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">ID_Assurence 
                        </p>
                    </th>
                    <th class="cursor-pointer border-y border-blue-gray-100 bg-[#2a9d8f] p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Nom 
                            </th>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-[#2a9d8f] p-4 transition-colors hover:bg-blue-gray-50">
                                <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Adress 
                                    </th>
       
        <th class="cursor-pointer border-y border-blue-gray-100 bg-[#2a9d8f] p-4 transition-colors hover:bg-blue-gray-50">
            <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 ">Actions</p>
        </th>
    </tr>
</thead>

</table>
</div>


</body>
</html>