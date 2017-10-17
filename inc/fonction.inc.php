<?php  

// fonction pour voir si un utilisateur est connecte:
function userConnecte(){
	if(isset($_SESSION['membre'])){
		return TRUE;
	}
	else{
		return FALSE;
	}
}



?>