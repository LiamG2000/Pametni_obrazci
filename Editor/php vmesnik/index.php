<?php
session_start();
    include ("config.php");
    include ("functions.php");
    $user_data = check_login($con);
    $userID = $user_data["id"];
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../css/index.css"></script>
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="icon" href="./Slike/logo.jpg">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/lf6b19popibawemzk9qpt3cf2eqexglq9mnzakqkvi9kh17x/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Pametni obrazci</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <?php
        include ("header.php");
        include ("navBar.php");
    ?>  

    <br>
    <form method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Naziv dokumenta</label>
          <input type="text" class="form-control" name="docName" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vnesi naziv dokumenta">

          <hr>
            <!---------------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="flex">
        <aside class="h-40 sticky top-0">
            <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
                <ul class="space-y-2">
                   <li>
                      <a href="#" class="flex items-center p-2">
                        <ion-icon name="person-outline"></ion-icon>
                         <span class="flex-1 ml-3 whitespace-nowrap"><p draggable="true" id="input1"><div draggable="true" class=" hover:border-blue-500 w-44 h-7 border-2 border-gray-600 rounded-lg" id="Ime" ondragstart="dragStart(event)"> Ime</div></p></span>
                      </a>
                   </li>
                   <li>
                      <a href="#" class="flex items-center p-2">
                        <ion-icon name="person"></ion-icon>
                         <span class="flex-1 ml-3 whitespace-nowrap"><p draggable="true" id="input2"><div draggable="true" class=" hover:border-blue-500 w-44 h-7 border-2 border-gray-600 rounded-lg" id="Priimek"  ondragstart="dragStart(event)"> Priimek</div></p></span>
                      </a>
                   </li>
                   <li>
                      <a href="#" class="flex items-center p-2">
                        <ion-icon name="id-card-outline"></ion-icon>
                         <span class="flex-1 ml-3 whitespace-nowrap"><p draggable="true" id="input3"><div draggable="true" class=" hover:border-blue-500 w-44 h-7 border-2 border-gray-600 rounded-lg" id="EMŠO"  ondragstart="dragStart(event)"> EMŠO</div></p></span>
                         
                      </a>
                   </li>
                   <li>
                      <a href="#" class="flex items-center p-2">
                        <ion-icon name="calendar-outline"></ion-icon>
                         <span class="flex-1 ml-3 whitespace-nowrap"><p draggable="true" id="input4"><div draggable="true" class=" hover:border-blue-500 w-44 h-7 border-2 border-gray-600 rounded-lg" id="Datum"  ondragstart="dragStart(event)"> Datum</div></p></span>
                      </a>
                   </li>
                   <li>
                      <a href="#" class="flex items-center p-2">
                        <ion-icon name="mail-outline"></ion-icon>
                         <span class="flex-1 ml-3 whitespace-nowrap"><p draggable="true" id="input5"><div draggable="true" class=" hover:border-blue-500 w-44 h-7 border-2 border-gray-600 rounded-lg" id="Pošta"  ondragstart="dragStart(event)"> Pošta</div></p></span>
                      </a>
                   </li>
                   <li>
                      <a href="#" class="flex items-center p-2">
                        <ion-icon name="home-outline"></ion-icon>
                         <span class="flex-1 ml-3 whitespace-nowrap"><p draggable="true" id="input6"><div draggable="true" class=" hover:border-blue-500 w-44 h-7 border-2 border-gray-600 rounded-lg" id="Kraj"  ondragstart="dragStart(event)"> Kraj</div></p></span>
                      </a>
                   </li>
                   <li>
                      <a href="#" class="flex items-center p-2">
                        <ion-icon name="earth-outline"></ion-icon>
                         <span class="flex-1 ml-3 whitespace-nowrap"><p draggable="true" id="input7"><div draggable="true" class=" hover:border-blue-500 w-44 h-7 border-2 border-gray-600 rounded-lg" id="Država"  ondragstart="dragStart(event)"> Država</div></p></span>
                      </a>
                   </li>
                   <li>
                     <a href="#" class="flex items-center p-2">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span class="flex-1 ml-3 whitespace-nowrap"><p draggable="true" id="input8"><div draggable="true" class=" hover:border-blue-500 w-44 h-7 border-2 border-gray-600 rounded-lg" id="Telefon"  ondragstart="dragStart(event)"> Telefon</div></p></span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2">
                        <ion-icon name="add-circle-outline"></ion-icon>
                        <span class="flex-1 ml-3 whitespace-nowrap"><p draggable="true" id="input8"><input draggable="true" class="hover:border-blue-500" value=" Vnesi vrednost po meri" id="input_8" ondragstart="dragStart(event)"></p></span>
                     </a>
                  </li>
                 
                </ul>
                <button type="button" onclick="get_editor_content()">Shrani tekst</button>
                <br>
                <button type="button" onclick="set_editor_content()">Naloži tekst</button>
             </div>
        </aside>
        <main class="flex flex-col w-screen">
            <div contenteditable="true" id="text_editor"></div>
        </main>
    </div>

    <div class="m-10">
      <div x-data="{ showModal : false }">
         
          <button type="button" @click="showModal = !showModal" class="invisible" id="gumb123">Open Modal</button>
  
          
          <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-indigo-600 bg-opacity-5 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
              
              <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-3/12 mx-10" @click.away="showModal = false;delete_input()" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-70 translate-y-1" x-transition:enter-end="opacity-80 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-70 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                 
                  <span class="font-bold block text-2xl mb-3">Vpišite vprašanje</span>
                  
                  <input type="text" id="vprasanje_input" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  
                  
                  <div class="text-right space-x-5 mt-5">
                      <button type="button" @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo" onclick="delete_input()">Cancel</button>
                      <button type="button" @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo" onclick="add_id_to_input();vpis_vprasanja()">OK</button>
                  </div>
              </div>
          </div>
      </div>
  
      <div class="mb-10 pb-10 border-b border-gray-200"></div>
  </div>

  <div class="m-10">
      <div x-data="{ showModal : false }">
         
          <button type="button" @click="showModal = !showModal" class="invisible" id="gumb1234">Open Modal</button>
  
          
          <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-indigo-600 bg-opacity-5 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
              
              <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-3/12 mx-10" @click.away="showModal = false;delete_input()" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-70 translate-y-1" x-transition:enter-end="opacity-80 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-70 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                 
                  <span class="font-bold block text-2xl mb-3">Vpišite vprašanje</span>
                  
                  <input type="text" id="vprasanje_input2" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                     <span class="font-bold block text-2xl mb-3">Vpišite vrednost po meri</span>
                     <input type="text" id="input_placeholder" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  
                  
                  <div class="text-right space-x-5 mt-5">
                      <button type="button" @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo" onclick="delete_input()">Cancel</button>
                      <button type="button" @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo" onclick="add_id_to_input();vpis_vprasanja()">OK</button>
                  </div>
              </div>
          </div>
      </div>
  
      <div class="mb-10 pb-10 border-b border-gray-200"></div>
  </div>
  <br><br><br><br><br><br><br><br>
  <!------------------------------------------------------------------------------------------------------------------------------------------- -->

        <div class="form-group" id="placljivo">
          <label for="check">Plačljivo</label>
          <input type="checkbox" class="form-control" value="check" name="check" onclick="prikaziCeno(this)">
          <input type="hidden" name="vprasanja" id="vprasanja">
          <input type="hidden" name="poljeString" id="poljeString">
          <input type="hidden" name="besedilo" id="besedilo">

          <br>
        </div>
        
        <?php
            if(checkVerify($con) == true){
                echo '<div><button type="submit" class="btn btn-primary" name="submitbtn">Shrani</button></div>';
            }else{
                echo "Za shranjevanje je potrebno potrditi račun. To lahko storite" . ' <a href="potrditevEmail.php">tukaj</a>' ;
                echo "<br>";
            }

        ?>
    </form>

    <script type="text/JavaScript">

        $('#vprasanje_input').keypress(function (e) {                                       
               if (e.which == 13) {
                    e.preventDefault();
                    //do something   
                    }
                });

        function prikaziCeno(me) {
            let input = document.createElement("input");
            input.setAttribute("type", "number");
            input.setAttribute("placeholder", "Vnesi ceno");
            input.setAttribute("name", "docPrice");
            let box = me;
            let div = document.getElementById("placljivo");
            if(box.checked == true){
                div.appendChild(input);
            }else{
                div.removeChild(div.lastChild);
            }
        }
    </script>


    <?php
        if(isset($_POST["submitbtn"])){
            $docName = strtolower($_POST["docName"]);
            $docPrice = 0;
            $docId = genNewDocId($con);
            $vprasanja = $_POST["vprasanja"];
            $poljeString = $_POST["poljeString"];
            $coded = base64_encode($poljeString);
            $html = $_POST["besedilo"];
            $besedilo = base64_encode($html);

            
            if(isset($_POST["docPrice"])){
                $docPrice = $_POST["docPrice"];
            }

            $query = "insert into dokument (naziv, cena, stevilkaDokumenta, vprasanja, poljeString, besedilo, tk_uporabnik) values ('$docName', '$docPrice', '$docId', '$vprasanja', '$coded', '$besedilo', '$userID')";

            if(mysqli_query($con, $query) == true){
                echo "Datoteka uspešno shranjena. Za dostop do nje uporabite sledečo identifikacijsko številko: ";
                echo "<br>";
                echo $docId;
                echo "<br>";
            }else{
                echo mysqli_error($con);
            }
        }

        

    ?>
    


<?php
include ("footer.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js " integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0 " crossorigin="anonymous "></script>
    <script src="../js/index.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  
</body>

</html>
