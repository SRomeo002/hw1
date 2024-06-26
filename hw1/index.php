<?php 
    require_once 'hw1_auth.php';
    if (!$userid = checkAuth())  {
        header("Location: LOGIN/hw1_login.php");
        exit;
    }

   
?>

<html>
<?php 
        // Carico le informazioni dell'utente loggato
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        $userid = mysqli_real_escape_string($conn, $userid);
        $query = "SELECT * FROM users WHERE id = $userid ";
        $res_1 = mysqli_query($conn, $query) or die("Errore: ".mysqli_error($conn));
        $userinfo = mysqli_fetch_assoc($res_1);   
    ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW1 ROMEO</title>
    <link rel="icon" href="IMAGES/Favicon_32x32.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.shopify.com/s/files/1/0353/5929/3499/files/FontsFree-Net-MikaMelvas-MonteriaRegular.woff2?v=1668166233" rel="style">
  
</head>



<body>
<!-- -------- FONT ------------->
<style>
  @font-face {
    font-family: 'FontsFree Net MikaMelvas MonteriaRegular';
    src: url("https://cdn.shopify.com/s/files/1/0353/5929/3499/files/FontsFree-Net-MikaMelvas-MonteriaRegular.woff2?v=1668166233") format("woff2");
    font-display: swap;
  }
  
  @font-face {
    font-family: 'obrazec';
    src: url("https://cdn.shopify.com/s/files/1/0353/5929/3499/files/obrazec.woff2?v=1668166304") format("woff2");
    font-display: swap;
   }
  
   @font-face {
  font-family: "DIN Neuzeit Grotesk LT W01 Lt";
  src: url("https://db.onlinewebfonts.com/t/76e8830038ab225cdb852f902d207c72.eot");
  src: url("https://db.onlinewebfonts.com/t/76e8830038ab225cdb852f902d207c72.eot?#iefix")format("embedded-opentype"),
  url("https://db.onlinewebfonts.com/t/76e8830038ab225cdb852f902d207c72.woff2")format("woff2"),
  url("https://db.onlinewebfonts.com/t/76e8830038ab225cdb852f902d207c72.woff")format("woff"),
  url("https://db.onlinewebfonts.com/t/76e8830038ab225cdb852f902d207c72.ttf")format("truetype"),
  url("https://db.onlinewebfonts.com/t/76e8830038ab225cdb852f902d207c72.svg#DIN Neuzeit Grotesk LT W01 Lt")format("svg");
   }


    @font-face {
      font-family: 'Poppins';
      src: url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')


    }

    </style>
    


<!-- --------BARRA DI NAVIGAZIONE ------------->
<nav>
  <div class="logo">
    <img src="https://meatcrew.it/cdn/shop/files/Loghetto_sito_38aa99b6-2c60-4e9c-88a5-04e0101fce65_400x.png?v=1623400663" alt="logo" width="109px">
  </div>

  
  <div class="menu-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="30px" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M3 5a1 1 0 000 2h14a1 1 0 100-2H3zm0 6a1 1 0 100 2h14a1 1 0 100-2H3zm0 6a1 1 0 100 2h14a1 1 0 100-2H3z" clip-rule="evenodd" />
    </svg>
  </div>
  
  <div class="menu">
    <div><a href="index.php">Home</a></div>
    <div><a href="PAGES/foodtruck.php">Food Truck</a></div>
    <div><a href="PAGES/feedback.php">Feedback</a></div>
    <div><a href="PAGES/about_us.php">About us</a></div>
    <div><a href="MENU/menu.php"> Menù</a></div>

    <div id="profilo">
         <?php echo "<a> welcome ".$userinfo['username']."</a>" ?>
      </div>
        <div class="logout"><a href="LOGIN/hw1_logout.php">LOGOUT</a></div>
    
  </div>
  

  <div class="cart-icon">
    <svg width="101px" height="30px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ffffff" d="M704 320v96a32 32 0 0 1-32 32h-32V320H384v128h-32a32 32 0 0 1-32-32v-96H192v576h640V320H704zm-384-64a192 192 0 1 1 384 0h160a32 32 0 0 1 32 32v640a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V288a32 32 0 0 1 32-32h160zm64 0h256a128 128 0 1 0-256 0z"></path><path fill="#ffffff" d="M192 704h640v64H192z"></path></g></svg>
  </div>

 
 
</nav>



<!-- --------HEADER E BENNER (IMG,BOX,SCRITTE) ------------->

<header>

  <div class="container_banner">

    <div class="banner">
        <img src="https://cdn.shopify.com/s/files/1/0353/5929/3499/t/10/assets/8b5a8497-1679991432306.jpg?v=1679991459" alt="banner">
      </div>


    <div class="red_block">

          <div class="txt_red_block">

              <a class="titolo">I MIEI FAST FOOD</a>
                <a class="sottotitolo">Meat Crew</a>
                 <a class="sottotitolo">American Burger</a>

           </div>

       </div>
      </div>
    </div>

 </header>

  
<!-- --------INNDICAZIONI MAPS ------------->

  <section class="home-maps-section">


    <div class="flex-container1-maps">

      <div class="map1">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2798.9099852899762!2d9.189761!3d45.45147!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c54ca129080b%3A0x999e0ccbe44dd5fd!2sMeat%20Crew%20-%20American%20Burger!5e0!3m2!1sit!2sit!4v1711200052966!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
          <div class="item-container1-map">
            <div class="waypoint1"><img src="IMAGES/waypoint.png" height=150px></div>
            <a>Viale Bligny 18 (MI)</a>
          </div>

        </div>

    
        

    <div class="flex-container2-maps">
                
        <div class="item-container2-map"> 

          <div class="waypoint2"><img src="IMAGES/waypoint.png" height=150px></div>
            <a>Via Carmagnola 13 (MI)</a>
           </div>

          <div class="map2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5594.27418534147!2d9.186809!3d45.487184!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c10014892ddb%3A0xf60c90fca29c498f!2sMeat%20Crew%20-%20American%20Burger!5e0!3m2!1sit!2sit!4v1711200146171!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
         
      </div>

      <div class="txt-finale">
      <p> Vivi la <b>vera esperienza americana</b> nel mio fast food. Smash burger, Hot dog, Milkshake, tutto quello che ti ho sempre mostrato nei miei viaggi su YouTube, ora puoi finalmente assaggiarlo da Meat Crew - American Burger: <b>DEVASTANTE!</b>
      </p>
    </div>

</section> 



<!-- -------- PHOTO GALLERY SLIDER ------------->

    <section class="home-gallery-section">


  
    
        <div class="flex-container-gallery">
      
              <div id="back">
                  <svg fill="currentColor" height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 459.00 459.00" xml:space="preserve" stroke="#000000" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.754"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M229.5,0C102.751,0,0,102.751,0,229.5S102.751,459,229.5,459C356.25,459,459,356.249,459,229.5S356.25,0,229.5,0z M351.738,246.077c-0.063,0.071-0.122,0.144-0.185,0.214c-0.659,0.723,4.184-4.144-85.051,85.091 c-9.757,9.757-25.586,9.77-35.356,0c-9.763-9.763-9.763-25.592,0-35.355l41.527-41.527h-146.7c-13.808,0-25-11.193-25-25 s11.192-25,25-25h146.701l-41.527-41.527c-9.763-9.763-9.763-25.592,0-35.355c9.764-9.763,25.592-9.763,35.356,0 c89.798,89.798,84.708,84.629,85.852,86.022C360.134,223.129,359.904,236.87,351.738,246.077z"></path> </g> </g> </g></svg>
              </div>
        
              <div id="next">
                  <svg fill="currentColor" height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 459.00 459.00" xml:space="preserve" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.754"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M229.5,0C102.751,0,0,102.751,0,229.5S102.751,459,229.5,459C356.25,459,459,356.249,459,229.5S356.25,0,229.5,0z M351.738,246.077c-0.063,0.071-0.122,0.144-0.185,0.214c-0.659,0.723,4.184-4.144-85.051,85.091 c-9.757,9.757-25.586,9.77-35.356,0c-9.763-9.763-9.763-25.592,0-35.355l41.527-41.527h-146.7c-13.808,0-25-11.193-25-25 s11.192-25,25-25h146.701l-41.527-41.527c-9.763-9.763-9.763-25.592,0-35.355c9.764-9.763,25.592-9.763,35.356,0 c89.798,89.798,84.708,84.629,85.852,86.022C360.134,223.129,359.904,236.87,351.738,246.077z"></path> </g> </g> </g></svg>
              </div>
      
            <!-- div per le immagini -->
        
              <div class="flex-item"><img id="image1"></div>
              <div class="flex-item"><img id="image2"></div>
              <div class="flex-item"><img id="image3"></div>
              <div class="flex-item"><img id="image4"></div> 
            
          </div>
      
          
        
          <div class="indicator-flex">
            <div class="indicator" data-index="0"></div>
            <div class="indicator" data-index="1"></div>
            <div class="indicator" data-index="2"></div>
            <div class="indicator" data-index="3"></div>
            <div class="indicator" data-index="4"></div>
            <div class="indicator" data-index="5"></div>
          </div>
      
        <div class="menu_button"><a href ="MENU/menu.php">GUARDA IL MENÙ</a></div>
      
      
        
      
      </section>






<!-- -------- FOOTER ------------->

<footer>
 
  <div class="footer_content">
  <img src="https://meatcrew.it/cdn/shop/files/Loghetto_sito_38aa99b6-2c60-4e9c-88a5-04e0101fce65_400x.png?v=1623400663" alt="logo" width="140px";>
  
  <div class= "f_txt1">
    <div><a href="#Policy">Policy Privacy</a></div>
    <div><a href="#Uso">Condizioni generali d'uso</a></div>
    <div><a href="#Condizioni">Condizioni di vendita</a></div>
  </div>
   
  
  
  <div class="social_container">
  
    
    <div class="social_icon">
      <div class="facebook"><a href="https://facebook.com/meatcrewshop" target="_blank">
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="18" viewBox="0 0 22 22" fill="currentColor">
          <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
           </svg></a></div>
  
  
           <div class="instagram"><a href="http://instagram.com/meatcrewshop" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 32 32" fill="currentColor">
              <path d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z"></path>
              </svg></a></div>
  
            </div>
  
          </a></div>
  
    
  
  <div class= "f_txt2">
    <div><a>This is America S.r.l.,</a></div>
    <div><a>P.IVA 12427420968</a></div>
  
  </div>
  </div>
  
  </div>  
  </footer>

  <script src="JS/script.js"></script>
</body>
</html>

<?php 
    mysqli_free_result($res_1);
    mysqli_close($conn); 
?>