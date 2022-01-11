<!doctype html>
<html>
<head>
	<title>Share</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css"/>
</head>


<body>
	<!-- Creation Dossier -->
	<div class="navbar">
		<svg id="create-file-toggler" class="btn-add" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 27 27">
			<g data-name="Groupe 2" transform="translate(-1579 -916)">
				<rect id="Rectangle_11" data-name="Rectangle 11" class="cls-1" width="27" height="27" rx="13.5" transform="translate(1579 916)"/>
				<text id="_" data-name="+" class="cls-2" transform="translate(1587 937)"><tspan x="0" y="0">+</tspan></text>
			</g>
		</svg>
	</div>


<div class="screen"> 
	<!-- Dossiers -->
	<div class="skin">
	<div id="file-1" onclick="showRessourceModal('file-1')" class="column file">
	<svg xmlns="http://www.w3.org/2000/svg" width="52.397" height="42.573" viewBox="0 0 52.397 42.573">
  <g id="dossier" transform="translate(0 -48)">
    <path id="Tracé_2" data-name="Tracé 2" d="M41.134,51.573,38.158,48H26.845l-3.573,3.573v4.763H70.906V51.573Z" transform="translate(-20.89)" fill="#0d91ba"/>
    <rect id="Rectangle_6" data-name="Rectangle 6" width="52.397" height="34.237" transform="translate(0 56.336)" fill="#25b6d2"/>
    <rect id="Rectangle_7" data-name="Rectangle 7" width="41.679" height="2.382" transform="translate(5.358 53.954)" fill="#fff"/>
  </g>
</svg>
<p class="file-name">DOSSIER</p>
</div>
</div>
</div>



<!-- fileModal -->

<div id="fileModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content file-modal-content">
    <span class="close hide">&times;</span>


    <div class="column">
    
    <input id="nom-file-form" placeholder="ENTRER UN NOM DE DOSSIER" type="text">
    <div id="btn-create-file"> <span class="text-vertical-align-center"> créer le dossier </span></div>

  </div>
</div>
</div>

<!-- ressourceModal -->

<div id="ressourceModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close hide">&times;</span>

    <span id="link-zone">
    <div onclick='window.open("https://www.google.com/search?client=opera&q=uppercase+js&sourceid=opera&ie=UTF-8&oe=UTF-8","_blank")' class="ressource">PODCAST</div>
   </span>

    <div id="ressource-form">
    	<input id="nom-ressource-form" placeholder="ENTRER UN NOM DE RESSOURCE" type="text">
    	<input id="lien-ressource-form" placeholder="ENTRER UN LIEN" type="text">
    	<svg onclick="addRessource()" class="btn-add" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 27 27">
			<g data-name="Groupe 2" transform="translate(-1579 -916)">
				<rect id="Rectangle_11" data-name="Rectangle 11" class="cls-3" width="27" height="27" rx="13.5" transform="translate(1579 916)"/>
				<text id="_" data-name="+" class="cls-2" transform="translate(1587 937)"><tspan x="0" y="0">+</tspan></text>
			</g>
		</svg>
    </div>
  </div>
</div>

<!-- Libs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="main.js"></script>
</body>

</html>