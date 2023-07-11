<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Homepage</title>
    <link rel="stylesheet" href="CSS/main_style.css">
  </head>
  <body>
   <!-- <img src="Images/IMG-20230405-WA0004.jpg" alt="bg-image" />-->
    <?php include('header.php'); ?>
    
   
   <main>
     
     <div class="photo1">
       <div class="pickup-line">
         <p class="pickup-line-text">
           Vous avez toujours rêvé d'être à la pointe de la mode,
         </p>
         <p class="pickup-line-text">D'être unique dans votre manière de vous habiller !?</p>
         <p class="pickup-line-text">
           Eh bien ici commence l'Aventure ! 
         </p>
         
         <button class="take_action"type="submit" name="je_me_lance"><a href="Articles.php?page=articles">Je me lance</a></button>
        </div>
     </div>
       
       <div class="help-command">
         <h1 class="help-command-title">
           Commander un Article <span>help</span>
         </h1>
         <p class="help-command-text">
           Vous voyez un article que vous aimez?
           Pour le commander c'est simple <strong>vous n'avez qu'à presser votre doigt dessus</strong> (si vous êtes sur smartphone) jusqu'à ce qu'une fenêtre d'options apparaissent comme ceci.
         </p>
         <img src="CSS/Images/Polish_20210728_063527622.png" alt="">
         <p> Ensuite vous cliquez sur <strong>copier l'adresse du lien</strong> et vous me l'envoyez par <a href="tel:+509 40 47 5349">WhatsApp</a>.</p>
       </div>
       
    
     <div class="parent-suggestions-container">
       <h2 style="color:white">Articles qui pourraient vous plaire</h2>
        <hr>
    
       <div class="child-suggestions-container">
         <div class="">
           <a href="CSS/Images/men_section/1682278273920.jpg"><img src="CSS/Images/men_section/1682278273920.jpg" alt=""></a>
         </div>
         <div class="CSS/Images/1682278276877.jpg">
           <a href="CSS/Images/1682278276877.jpg"><img src="CSS/Images/1682278276877.jpg" alt=""></a>
         </div>
       </div>
       
       <div class="child-suggestions-container">
         <div class="">
           <a href="CSS/Images/1682278276408.jpg"><img src="CSS/Images/1682278276408.jpg" alt=""></a>
         </div>
         <div class="">
           <a href="CSS/Images/1682278275666.jpg"><img src="CSS/Images/1682278275666.jpg" alt=""></a>
         </div>
       </div>
       
       <div class="child-suggestions-container">
         <div class="">
           <a href="CSS/Images/1682278276048.jpg"><img src="CSS/Images/1682278276048.jpg" alt=""></a>
         </div>
         <div class="">
           <a href="CSS/Images/women_section/1682278268250.jpg"><img src="CSS/Images/women_section/1682278268250.jpg" alt=""></a>
         </div>
       </div>
       
       <div class="child-suggestions-container">
         <div class="">
           <a href="CSS/Images/1682278278748.jpg"><img src="CSS/Images/1682278278748.jpg" alt=""></a>
         </div>
         <div class="">
           <a href="CSS/Images/men_section/1682278266871.jpg"><img src="CSS/Images/men_section/1682278266871.jpg" alt="" height="40%"></a>
         </div>
       </div>
       
       <div class="child-suggestions-container">
         <div class="">
           <a href="CSS/Images/1682278277097.jpg"><img src="CSS/Images/1682278277097.jpg" alt=""></a>
         </div>
         <div class="">
           <a href="CSS/Images/1682278277751.jpg"><img src="CSS/Images/1682278277751.jpg" alt=""></a>
         </div>
       </div>


     </div>
   </main>
   
   <?php include('footer.php') ?>
  </body>
</html>