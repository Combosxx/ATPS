<?php 
include "menu.php";
//require "menu.php";
session_start();
?>
<?php
  $image_path = 'path/to/your/image.jpg';
  $image_alt = 'Your Image'; // Replace with your image alt text
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/css/intlTelInput.css" integrity="sha512-s51TDsIcMqlh1YdQbF3Vj4StcU/5s97VyLEEpkPWwP0CJfjZ/C5zAaHnG+DZroGDn1UagQezDEy61jP4yoi4vQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput.js" integrity="sha512-xi5w2NwusrPUdyIeJqXcFCPIHSzt3Gilx81G7gMp3AxcQ1nlIEPU2rJWbLHdQ2ooiYoZ6Eua48EEJM1kxXQ53A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <title>ATPS</title>
</head>
<body>
  <div class="container">
  <div class="grid grid-cols-2 gap-2">
<div>
    <pre class="mt-9 w-max">
    Est une espace qui met en relation les émployes,
          les condidats et l'entreprise...... &#128512; 

          Que vous soyez un profetionnel chevronné ou un jeune talent ambitieux,
          nous encourageons les condidats de tous horizons à postuler en accédents à ce lieu &#8595;  

    </pre>
    <button class="btn btn-danger" data-bs-toggle="modal" href="#postuler">Postuler</button>
</div>
<div class="w-52 h-52 ml-[12rem]">
    <img src="images/image3.jfif" class="w-22 h-22" id="slider"/>
</div>
</div>
  </div>
<!-- Modal -->
<div class="modal fade" id="postuler" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Postuler ici</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="postuler.php" enctype="multipart/form-data">
          <div class="rows">
            <div class="form-group col-12">
              <label>Nom</label>
              <input type="text" name="nomC" class="form-control" required/>
            </div>
            <div class="form-group col-12">
              <label>Email</label>
              <input type="email" name="emailC" class="form-control" required/>
            </div>
            <div class="form-group col-12">
              <label>Télécharger votre cv</label>
              <input type="file" name="cvC" class="form-control" required/>
            </div>

            <div class="form-group col-12">
              <label>Lettre de motivation</label>
              <textarea rows="3" class="form-control" name="lettreMC"></textarea>
            </div>
          </div>
          <br>
          <div class="rows">
          <div class="form-group col-6">
             
              <input type="submit" value="Envoyer une demande" class="form-control btn btn-outline-danger" name="" />
            </div>
          </div>
        </form>
      </div>
 
    </div>
  </div>
</div>

<?php 
/**isset :c'est uen focntion php utilisé pour testetr si varaible ou bine session 
 * différent de vide(NULL)
 */
if(isset($_SESSION['message'])){
$message=$_SESSION['message'];
/**unset:fonction php utilié pour déteruire session */
unset($_SESSION['message']);

echo "
<script>

alert('$message');
</script>

";

}
?>
<?php 
if(isset($_SESSION['erreur'])){
  $erreur=$_SESSION['erreur'];
  unset($_SESSION['erreur']);
echo "
  <script>
  alert('$erreur');
  </script> ";
}



include "footer.php";
?>

<script>
  let tab=['image22.jpg','image3.jfif'];
  let slider=document.getElementById('slider');
  let index=0;
  let changerImage=() => { 
    
    if(index < tab.length){
    slider.src="images/"+tab[index];
    index ++;

  }
else {
  index=0;
}
  }
  setInterval(changerImage, 1000);
</script>
<!-- Modal Connexion-->
<div class="modal fade" id="connexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="postuler.php" enctype="multipart/form-data">
          <div class="rows">
          
            <div class="form-group col-12">
              <label>Email</label>
              <input type="email" name="emailE" class="form-control" required/>
            </div>
            <div class="form-group col-12">
              <label>Mot de passe</label>
              <div class="relative">
              <input type="password" name="mdpE" id="mpdE" class="form-control" required/>
              <div class="absolute top-2 right-4">
              <i class="fa-solid fa-eye" onclick="
              
              let mdpE=document.getElementById('mpdE');
              if(mdpE.type == 'password'){
                mdpE.type='text';
                
                }
                else {
                  mdpE.type='password';
                }

              
              
              "></i>
            </div>
            </div>
            </div>

         
          </div>
          <br>
          <div class="rows">
          <div class="form-group col-6">
             
              <input type="submit" value="Se connecter" class="form-control btn btn-outline-danger" name="" />
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <a href="#">Mot de passe oublié</a>
        <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" href="#inscription">S'inscrire</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Iscription -->
<div class="modal fade" id="inscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="inscription.php" enctype="multipart/form-data">
          <div class="rows">
          <div class="form-group col-12">
              <label>Photo</label>
              <input type="file" name="photoE"  id="photoE" class="form-control" required/>
            </div>
            <div class="form-group col-12">
              <label>Nom</label>
              <input type="text" name="nomE" id="nomE" class="form-control" required/>
            </div>
            <div class="form-group col-12">
              <label>Numéro téléphone</label>
              <input type="tel" name="telE" id="phone" class="form-control" required/>
            </div>
            <div class="form-group col-12">
              <label>Département</label>
              <select name="depE" id="depE" class="form-control">
                <option>Informatique</option>
                <option>Electronique</option>
                <option>Ressources humaine</option>
              </select>

             
            </div>
            <div class="form-group col-12">
              <label>Post</label>
              <input type="text" name="posteE" id="posteE" class="form-control" />
            </div>
            <div class="form-group col-12">
              <label>Email</label>
              <input type="email" name="emailE" id="emailE" class="form-control" />
            </div>
            <div class="form-group col-12">
              <label>Mot de passe</label>
              <div class="relative">
              <input type="password" name="mdpE" id="mpdE1" class="form-control" />
              <div class="absolute top-2 right-4">
              <i class="fa-solid fa-eye" onclick="
              
              let mdpE1=document.getElementById('mpdE1');
              if(mdpE1.type == 'password'){
                mdpE1.type='text';
                
                }
                else {
                  mdpE1.type='password';
                } 
              "></i>
            </div>
            </div>
            </div>
              </div>
            <div class="form-group col-12">
              <label>Confirmer mot de passe</label>
              <div class="relative">
              <input type="password" name="mdpE" id="mpdE2" class="form-control" />
              <div class="absolute top-2 right-4">
              <i class="fa-solid fa-eye" onclick="
              
              let mdpE2=document.getElementById('mpdE2');
              if(mdpE2.type == 'password'){
                mdpE2.type='text';
                
                }
                else {
                  mdpE2.type='password';
                }   
              "></i>
            </div>
            </div>
            </div>
         
     
          <br>
          <div class="rows">
          <div class="form-group col-6">
             
              <input type="submit" value="S'inscrire" id="inscrire"  class="form-control btn btn-outline-danger" name="" />
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded",() => {
  let phone=document.querySelector('#phone');
  intlTelInput(phone,{
    utilsScript:"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.min.js",
  }
  )

  })
</script>


<script>

document.querySelector("#inscrire").onclick= function () {
  let photoE=document.querySelector('#photoE').value,
  nomE=document.querySelector('#nomE').value,
 phone=document.querySelector('#phone').value,
 depE=document.querySelector('#depE').value,
 posteE=document.querySelector('#posteE').value,
 emailE=document.querySelector('#emailE').value,
 mpdE1=document.querySelector('#mpdE1').value,
 mpdE2=document.querySelector('#mpdE2').value;

if(photoE == "" || nomE == "" || phone == "" || depE == "" || posteE == "" || emailE == "" || mdpE1 == "" || mdpE2 == ""){
  alert('Il faut remplir tous les champs');
  return false ;
}
 else if(mpdE1 != mpdE2){
  alert('Mot de passe et confirmation ne sont pas correspondant');
  return false;
 }
 else {
return true;
 }

}

</script>
</body>
</html>

