<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Heroku app</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Signika:400,600'>
  <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"-->
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="public/css/home.css">

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script  src="public/js/main.js"></script>
  
  <!--script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script-->
<!--script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4643531401452174",
    enable_page_level_ads: true
  });
</script-->
  
</head>
<body>
<header style="height: 30px;">
  <span class="menu"><i class="material-icons">menu</i></span>
  <span style="font-style: italic;font-family: cursive;font-size: 20px;"><a href="index.php" style="color: black;text-decoration: unset;">Xcotang</a></span>
  <section class="main" style="padding-top: 0px;">
  <aside class="keep">
    <ul>
      <li>
        <a href="admin">
          <span><i class="fas fa-file-signature"></i></span>
           Viết Bài
          <span class="notif red">1</span>
        </a>
      </li>      
      <li>
        <a id="Web" href="index.php?controller=search" onclick="">
          <span ><i class="fas fa-globe-americas fa-spin"></i></span>
           Search
          <span class="notif yellow">2</span>
        </a>
      </li>
      <li>
        <a id="Asm" href="#" onclick="">
          <span ><i class="fas fa-code fa-spin"></i></span>
           asm
          <span class="notif green">6</span>
        </a>
      </li>      
      <li>
        <a href="#" onclick="">
          <span><i class="fab fa-ubuntu fa-spin"></i></span>
           linux
        </a>
      </li>     
      <li>
        <a href="#" onclick="">
          <span><i class="material-icons">import_contacts</i></span>
           forensic
        </a>
      </li>
      <li>
        <a href="#" onclick="">
          <span><i class="material-icons">photo</i></span>
           photo
        </a>
      </li> 
      <li>
        <a href="#" onclick="">
          <span><i class="material-icons">event</i></span>
           event
        </a>
      </li>      
      <li>
        <a href="" onclick="">
          <span><i class="fas fa-tools fa-spin"></i></span>
           tool
        </a>
      </li>      
      <li>
        <a href="#" onclick="">
          <span><i class="material-icons">textsms</i></span>
           textsms
        </a>
      </li>      
      <li>
        <a href="#" onclick="">
          <span><i class="material-icons">receipt</i></span>
           Receipt
        </a>
      </li>
    </ul>
  </aside>
</section>

</header>
<div id="main" style="margin: 50px 75px;padding-top: 45px;padding-left: 50px;padding-right: 50px;">

	<div class="">			
        <?php
            if(file_exists($controller))
                include $controller;
        ?>            
	</div>
</div>
</body>

</html>



