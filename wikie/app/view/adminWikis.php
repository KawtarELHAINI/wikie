<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/wikie/app/service/WikiService.php");


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
                <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../view/adminIndex.php">
                    Home
                    </a>
                            <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../view/adminWikis.php">
                    Wikie
                    </a>
        <!-- Active: bg-gray-800 text-white, Not active: text-white/50 -->
        <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover"  href="../view/adminCategory.php">
          Category
        </a>
        <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../view/adminTags.php">
          Tags
        </a>
      </nav>
      <div class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-2">
      <button>
                    <a href="../view/archivedwikis.php">
                        <svg class="w-6 h-6 text-gray-800 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                d="M8 8v1h4V8m4 7H4a1 1 0 0 1-1-1V5h14v9a1 1 0 0 1-1 1ZM2 1h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                        </svg></a>
                </button>
                
        <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href=" /wikie/public/login.php">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
        </a>
       
      </div>
      
    </div>
    
    <div>
      <div class="flex justify-between items-center">
      <h3 class="text-3xl font-extralight text-gray-800">Wikis</h3>  
        </div>
        <!-- <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" class="w-full text-sm border border-solid px-4 py-3 rounded-md outline-grey-600 placeholder="Search" />
                    </form>
                </section> -->
            </div>
            <div >
            <form method="post" action="#">
                        <input type="text" id="search" name="query" id="query" class="w-full text-sm border border-solid px-4 py-3 rounded-md outline-grey-600" placeholder="Search" />
                    </form>
         
        </div>
            
           
            
                
            <div class="flex flex-wrap -mx-4">                    <?php
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
                                                
                                                <form action="../controller/Wiki.php" method="POST">
                                                    <input type="hidden" name="archivedWiki">
                                                    <input type="hidden" name="archived_Wiki_ID"
                                                        value="<?= $Wiki['idWiki'] ?>">
                                                    <button type="submit" >

                                                    <svg class="w-6 h-6 text-gray-800 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 15">
                                                    <path d="M1 13a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H1v7Zm5.293-3.707a1 1 0 0 1 1.414 0L8 9.586V8a1 1 0 0 1 2 0v1.586l.293-.293a1 1 0 0 1 1.414 1.414l-2 2a1 1 0 0 1-1.416 0l-2-2a1 1 0 0 1 .002-1.414ZM17 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1Z"/>
                                                    </svg>
  
                                                        
                                                    </button>
                                                </form>
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
</body>

</html>