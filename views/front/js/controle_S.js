function verif()
{
	if (f.nom.value=='')
	{
		alert("entrer un nom valide");
		return false;
	}
	else if(f.prenom.value=='')
	{
		alert("entrer un prenom valide");
		return false;
	}
	else if(f.refe.value=='')
	{
		alert("entrer une reference valide");
		return false;
	}
	else if (f.message.value=='')
	{
		alert("entrer un message valide");
		return false;
	}
	return true;
}