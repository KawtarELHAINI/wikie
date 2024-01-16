<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/wikie/app/service/TagService.php");


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-blue-100 min-h-screen flex items-center justify-center">
   
               
  <div class="bg-white flex-1 flex flex-col space-y-5 lg:space-y-0 lg:flex-row lg:space-x-10 max-w-6xl sm:p-6 sm:my-2 sm:mx-4 sm:rounded-2xl">
    <!-- Navigation -->
    <div class="bg-gray-100 px-2 lg:px-4 py-2 lg:py-10 sm:rounded-xl flex lg:flex-col justify-between">
    <nav class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-2">
    <nav class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-2">
                            <div class="flex items-center">
                                <img src="../../public/images/wikielogo.png" alt="Logo" class="w-16 h-16 ml-4">
                            
                            </div>
                            <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../view/home.php">
                                Home
                                </a>
                                <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../view/visiteur.php">
                                Latest
                                </a>
                                        <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../view/visiteurWikis.php">
                                Wikie
                                </a>
                    <!-- Active: bg-gray-800 text-white, Not active: text-white/50 -->
                    <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover"  href="../view/visiteurCategory.php">
                    Category
                    </a>
                    <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../view/visiteurTag.php">
                    Tags
                    </a>
                    
                    <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="/wikie/public/login.php">
                    login
                    </a>
                    <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="/wikie/public/register.php">
                    Sign UP
                    </a>
                </nav>
     
      
    </div>
    
            <div>
      <div class="flex justify-between items-center">
      <h3 class="text-3xl font-extralight text-gray-800">Tags</h3>  
        </div>

            </div>

            <div class="flex-1 p-4 w-full md:w-1/2">
            
        
            

                <div class="flex flex-wrap -mx-4">
                    <?php
                    $TagService = new TagService;
                    $Tags = $TagService->display();
                    foreach ($Tags as $Tag): ?>
                        <div class="flex-1  p-4  min-w-md max-w-md">
                            <div class="mt-8">
                            <div class="relative group bg-blue-300 py-3 px-2 w-32 flex flex-col space-y-1 items-center cursor-pointer rounded-md ">
                                    <div >

                                        <span class="text-black text-1xl font-bold capitalize text-center ">
                                            <?= $Tag['nameTag']; ?>
                                            <div class="flex">
                                                <p class="px-2 text-sm">id:<?= $Tag['idTag']; ?>
                                                </p>
                                               
                                                
                                            </div>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        
    
</body>

</html>