var httpRequest;
if (window.XMLHttpRequest) { // Mozilla, Safari, IE7+...
    httpRequest = new XMLHttpRequest();
}
else if (window.ActiveXObject) { // IE 6 et antérieurs
    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
}
console.log("test");
document.getElementById("bouton_rnd").addEventListener('click', e => {
    console.log(e);
    prixAleatoires(e);
});
function prixAleatoires(e){
    e.preventDefault();
    if (!httpRequest) {
      alert('Abandon :( Impossible de créer une instance de XMLHTTP');
      return false;
    }

    httpRequest.onreadystatechange = ReponseAide;
    httpRequest.open('GET', './Ajx/rand_25.php');
    httpRequest.send();
}
function ReponseAide(){
    if (httpRequest.readyState === 4) {
        if (httpRequest.status === 200) {
            console.log(httpRequest.response);
            var elmt = document.getElementById("nobels");
            console.log(elmt);
            elmt.innerHTML = httpRequest.response;
            //elmt.appendChild();
            //alert("Vous-êtes entrés dans le colisée !");
        } else {
          alert('Il y a eu un problème avec la requête. Status:' + httpRequest.status);
        }
      }
} 









































