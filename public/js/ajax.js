
// console.log(1);
const URLROOT = 'http://localhost/wikie';
let str = document.getElementById('search');

function tagSearch(){
  let tagWrapper = document.getElementById("tag-wrapper");
  tagWrapper.innerHTML="";

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
          let response = JSON.parse(this.responseText);
          // document.getElementById("content-wrapper").innerHTML=this.responseText;
          // console.log(response);

          response.forEach((tag) => {
              let html = `<div class="flex-1  p-4  min-w-md max-w-md">
                            <div class="mt-8">
                            <div class="relative group bg-blue-300 py-3 px-2 w-32 flex flex-col space-y-1 items-center cursor-pointer rounded-md ">
                                    <div >

                                        <span class="text-black text-1xl font-bold capitalize text-center ">
                                              ${tag['nameTag']}
                                            <div class="flex">
                                                <p class="px-2 text-sm">id: ${tag['idTag']}
                                                </p>
                                              
                                                
                                            </div>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>`;
              tagWrapper.innerHTML += html;
          })

          
      }
  }
  xmlhttp.open("GET", URLROOT + "/app/controller/Tag.php?search=" + str.value, true);
  xmlhttp.send();
}

function categorySearch(){
  let categoryWrapper = document.getElementById("category-wrapper");
  categoryWrapper.innerHTML="";

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
          let response = JSON.parse(this.responseText);
          // document.getElementById("content-wrapper").innerHTML=this.responseText;
          // console.log(response);

          response.forEach((category) => {
              let html = `<div class="flex-1  p-4  min-w-md max-w-md">
                            <div class="mt-8">
                                <div class="flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                                    <div class="relative group bg-blue-300 py-5 sm:py-4 px-2 sm:px-2 flex flex-col space-y-1 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                                        <h2 class="flex justfy-between text-gray-500 text-lg font-semibold pb-1">
                                            
                                        </h2><span class=" flex justify-between py-2 px-8 bg-grey-lightest font-bold uppercase
                                            text-l text-grey-light ">
                                              ${category['nameCategory']}
                                            <div class="flex">
                                                <p class="px-4">id: ${category['idCategory']}
                                                </p>
                          
                                            </div>
                                        </span>
                                        <div class="bg-gradient-to-r from-blue-300 to-blue-500 h-px mb-6"></div>
                                        <div class="flex">
                                            <div class="my-1">
                                                ${category['description']}
                                            </div>
                                        </div>
                                        <h3
                                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-gray-500 border-b border-grey-light">
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>`;
              categoryWrapper.innerHTML += html;
          })

          
      }
  }
  xmlhttp.open("GET", URLROOT + "/app/controller/Category.php?search=" + str.value, true);
  xmlhttp.send();
}

function wikiSearch(){
  let wikiWrapper = document.getElementById("wiki-wrapper");
  wikiWrapper.innerHTML="";

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
          let response = JSON.parse(this.responseText);
          // document.getElementById("content-wrapper").innerHTML=this.responseText;
          console.log(response);

          response.forEach((wiki) => {
              let html = `<div class="flex-1  p-4  min-w-md max-w-md">
                            <div class="mt-8">
                            <div class="flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                                    <div class="relative group bg-blue-300 py-5 sm:py-4 px-2 sm:px-2 flex flex-col space-y-1 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                                        
                                    <h2 class="flex justfy-between text-gray-500 text-lg font-semibold pb-1">
                                                ${wiki['dateCreated']}
                                        </h2><span class=" flex justify-between py-2 px-8 bg-grey-lightest font-bold uppercase
                                            text-l text-grey-light ">
                                              ${wiki['title']}
                                            <div class="flex">
                                                <p class="px-4">id:${wiki['idWiki']}
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
                        </div>`;
            wikiWrapper.innerHTML += html;
          })

          
      }
  }
  xmlhttp.open("GET", URLROOT + "/app/controller/Wiki.php?search=" + str.value, true);
  xmlhttp.send();
}


str.addEventListener('input', () => {
    if (str.value != '') {
      tagSearch();
      wikiSearch();
      categorySearch();
    } else {
      window.location.href = URLROOT + "/app/view/home.php";
    }
})