

$.ajax({
  url : 'load.php',
type : 'POST',
 success : function (result) {
 //this is where you need to call your data which is result and not success
 console.log (result);
 },
error : function () {
 console.log ('error');
 }
 });


var modal = document.getElementsByClassName("modal");
var modalCreateFile = document.getElementById("fileModal");
var modalRessource = document.getElementById("ressourceModal");
var createFile = document.getElementById("create-file-toggler");
var close = document.getElementsByClassName("close");
var btnCreateFile = document.getElementById("btn-create-file");


btnCreateFile.onclick = () =>{
	var name = document.getElementById("nom-file-form").value.toUpperCase();
	document.getElementById("nom-file-form").value = "";
	var newFileHtml = '<div class="skin"><div id="file-1" onclick="showRessourceModal(\'file-1\')" class="column file"><svg xmlns="http://www.w3.org/2000/svg" width="52.397" height="42.573" viewBox="0 0 52.397 42.573"><g transform="translate(0 -48)"><path id="Tracé_2" data-name="Tracé 2" d="M41.134,51.573,38.158,48H26.845l-3.573,3.573v4.763H70.906V51.573Z" transform="translate(-20.89)" fill="#0d91ba"/><rect id="Rectangle_6" data-name="Rectangle 6" width="52.397" height="34.237" transform="translate(0 56.336)" fill="#25b6d2"/><rect id="Rectangle_7" data-name="Rectangle 7" width="41.679" height="2.382" transform="translate(5.358 53.954)" fill="#fff"/></g></svg><p class="file-name">'+name+'</p></div></div>'
	var screen = document.getElementsByClassName("screen")[0];

	screen.innerHTML = screen.innerHTML+=newFileHtml;
}
// When the user clicks on the button, open the modal
createFile.onclick = function() {
  modalCreateFile.style.display = "block";
}

function addRessource(){
var nom = document.getElementById("nom-ressource-form");
var lien = document.getElementById("lien-ressource-form");
var linkzone = document.getElementById("link-zone");
var newressourceHTML =  '<div onclick=\'window.open("'+lien.value+'","_blank")\' class="ressource">'+nom.value.toUpperCase()+'</div>';

nom.value = "";
lien.value = "";
linkzone.innerHTML += newressourceHTML;
}





function showRessourceModal(id){
  modalRessource.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
for(c of close){
c.onclick = function() {
  
for(m of modal)
  m.style.display = "none";
}	
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	for(m of modal)
  if (event.target == m) {
    m.style.display = "none";
  }
}

