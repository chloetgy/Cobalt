function afficheMenuDeroulant(obj){

	var idMenuDeroulant     = obj.id;
	var idSousMenuDeroulant = 'sous' + idMenuDeroulant;
	var sousMenuDeroulant   = document.getElementById(idSousMenuDeroulant);

	/*****************************************************/
	/**	on cache tous les sous-menus pour n'afficher    **/
	/** que celui dont le menu correspondant est cliqu� **/
	/** o� 4 correspond au nombre de sous-menus         **/
	/*****************************************************/
	for(var i = 1; i <= 3; i++){
		if(document.getElementById('sousmenuderoulant' + i) && document.getElementById('sousmenuderoulant' + i) != sousMenuDeroulant){
			document.getElementById('sousmenuderoulant' + i).style.display = "none";
		}
	}

	if(sousMenuDeroulant){
		//alert(sousMenuDeroulant.style.display);
		if(sousMenuDeroulant.style.display == "block"){
			sousMenuDeroulant.style.display = "none";
		}
		else{
			sousMenuDeroulant.style.display = "block";
		}
	}

}
