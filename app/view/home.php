<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/wikie/app/service/WikiService.php");
include_once($_SERVER["DOCUMENT_ROOT"] . "/wikie/app/service/HomeService.php");
include_once($_SERVER["DOCUMENT_ROOT"] . "/wikie/app/service/CategoryService.php");

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
            
                            <div class="bg-gray-100 px-2 lg:px-4 py-2 lg:py-10 sm:rounded-xl flex lg:flex-col justify-between">
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
                
   
            
                <div >
            <form method="post" action="#">
                        <input type="text" id="search" name="query" id="query" class="w-full text-sm border border-solid px-4 py-3 rounded-md outline-grey-600" placeholder="Search" />
                    </form>
         
        
        
                <div class="flex-1 p-4 m-4 min-w-md max-w-md">
                <h3 class="text-3xl font-extralight text-gray-800">Tags</h3>  
                <div id="tag-wrapper" class="flex flex-wrap -mx-4">
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
                
            
                <div>
                <div class="flex justify-between items-center">
                    <h3 class="text-3xl font-extralight text-gray-800">Categories</h3>  
                        </div>
                        <div id="category-wrapper" class="flex flex-wrap -mx-4">
                    <?php
                    $categoryService = new CategoryService;
                    $categories = $categoryService->display();
                    foreach ($categories as $categorie): ?>
                   <div class="flex-1  p-4  min-w-md max-w-md">
                            <div class="mt-8">
                                <div class="flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                                    <div class="relative group bg-blue-300 py-5 sm:py-4 px-2 sm:px-2 flex flex-col space-y-1 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                                        <h2 class="flex justfy-between text-gray-500 text-lg font-semibold pb-1">
                                            
                                        </h2><span class=" flex justify-between py-2 px-8 bg-grey-lightest font-bold uppercase
                                            text-l text-grey-light ">
                                            <?= $categorie['nameCategory']; ?>
                                            <div class="flex">
                                                <p class="px-4">id:<?= $categorie['idCategory']; ?>
                                                </p>
                          
                                            </div>
                                        </span>
                                        <div class="bg-gradient-to-r from-blue-300 to-blue-500 h-px mb-6"></div>
                                        <div class="flex">
                                            <div class="my-1">
                                                <?= $categorie['description']; ?>
                                            </div>
                                        </div>
                                        <h3
                                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-gray-500 border-b border-grey-light">
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                </div>
                <div>
  <div class="flex justify-between items-center">
      <h3 class="text-3xl font-extralight text-gray-800">Wikis</h3>  
        </div>
        <div id="wiki-wrapper" class="flex flex-wrap -mx-4">                   
                 <?php
                    $WikiService = new WikiService;
                    $Wikis = $WikiService->display();
                    foreach ($Wikis as $Wiki): ?>
                  <div class="flex-1  p-4  min-w-md max-w-md">
                            <div class="mt-8">
                            <div class="flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                                    <div class="relative group bg-blue-300 py-5 sm:py-4 px-2 sm:px-2 flex flex-col space-y-1 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                                        
                                    <h2 class="flex justfy-between text-gray-500 text-lg font-semibold pb-1">
                                                <?= $Wiki['dateCreated']; ?>
                                        </h2><span class=" flex justify-between py-2 px-8 bg-grey-lightest font-bold uppercase
                                            text-l text-grey-light ">
                                            <?= $Wiki['title']; ?>
                                            <div class="flex">
                                                <p class="px-4">id:<?= $Wiki['idWiki']; ?>
                                                </p>
                                                
                             
                                            </div>
                                        </span>
                                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                                       
                                        <h3
                                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-gray-500 border-b border-grey-light">
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                </div>
        
        </div>
        </div>     
 
    
    <script src="/wikie/public/js/main.js"></script>
    <script src="/wikie/public/js/ajax.js"></script>

</body>

</html>