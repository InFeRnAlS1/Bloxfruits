 document.getElementById("formulaire").addEventListener("submit",function(e) {
   e.preventDefault();

   var erreur
    var inputs = document.getElementsByTagName ("input");
    for (var i = 0; i< inputs.length; i++){if (!inputs [i].value){

      erreur = "Veuillez renseigner tous les champs";
    }
   
  
  }
        


   if (erreur) {
    e.preventDefault();
  document.getElementById("erreur").innerHTML = erreur;

}
})
X