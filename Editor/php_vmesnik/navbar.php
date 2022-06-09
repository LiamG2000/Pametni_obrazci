<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li>
                    <a href="./index.php">Domov</a>
                </li>
                <?php 
                if(checkAdmin($con) == true){
                    echo '<li>';
                        echo '<a href="uporabniki.php">Uporabniki</a>';
                    echo '</li>';
                }
                if(checkVerify($con) == false){
                    echo '<li>';
                        echo '<a style="background-color: red; color: white;" href="./potrditevEmail.php">Potrdi email</a>';
                    echo "</li>";
                }
                ?>
                <li>
                    <a href="./datoteke.php">Moje datoteke</a>
                </li>
                <li>
                    <a href="../../Engine/php/index.php">Naloži pdf</a>
                </li>
            </ul>
            <div id="je_prijavljen" style=" color: white; margin-left: 85%; font-family: 'Times New Roman', Times, serif ;font-size: 20px;">
                Prijavljen/a: <?php echo($user_data['uporabnisko_ime'] . "!"); ?>
                <span id="ime_uporabnika"></span>
                <button class="btn btn-sm btn-primary btn-block" style="width: 88%; border-width: 2px;" onClick="window.location.href = './logout.php'">Odjava</button>
            </div>
            <br />
        </div>
    </div>
</nav>