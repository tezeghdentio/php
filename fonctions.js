function verif()
{
    var i=document.getElementById("carnet").selectedIndex;
    if (i == -1)
        alert("veuillez sélectionner un élément SVP ");
    else
    {
    i=document.getElementById("carnet").selectedIndex;
    email=document.getElementById("carnet").options[i].value;
    np=document.getElementById("carnet").options[i].text;
    alert("L'adresse mail de " + np + " est :"+email);
    }
    
}
function supprimer()
{
    var i=document.getElementById("carnet").selectedIndex;
    if (i == -1)
        alert("veuillez sélectionner un élément SVP");
    else
    {
        document.getElementById("carnet").options[sel] = null;
    }
}