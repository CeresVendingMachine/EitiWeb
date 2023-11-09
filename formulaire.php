<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
    </head>
    <body>
    <section class="title">
        <h1 class="bigTitle">CERES</h1>
            
    </section>
        <div class="row h-0 p-0">
            
           
    <main class="col h-0 p-0">
       
      <!-- Insérez ici le contenu principal du site ou de l'application -->
	  <section class='sectionInscription'>
	<article class='inscription'>
		<h2 align="center">Contacter le staff</h2><hr/>
		<form action='formulaire.php' method="post">
        <form method="post" action="envoyer_email.php">
        <label for="texte">Entrez le texte du mail :</label>
        <textarea name="texte" id="texte"></textarea>
        <br>
        <input type="submit" value="Envoyer">
        </form>
        <?php
        if(isset($_POST['texte'])) {
            $to = "ceresaide@gmx.fr";
            $subject = "Demande d'aide";
            $message = $_POST['texte'];
            $headers = "From: client@ceres.fr\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
            mail($to, $subject, $message, $headers);
            echo "Le message a été envoyé avec succès.";
        }
        ?>
		</form>
	</article>
</section>
        
    </main>
</div>
        
         <section class="footerMe">
            <h4 class="title-footer">© Groupe Cérès</h4>
             <br>
             <h6 class="subtitle-footer">Fait à Epita Toulouse</h6>
        </section>

    </body>
</html>

<?php 


?>
