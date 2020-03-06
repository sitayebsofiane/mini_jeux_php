var form = document.querySelector("form");
form.addEventListener("submit",function(e){
        var alertText="";
        var date = document.getElementById("date").value;
        var salaire = document.getElementById("salaire").value;
        var verbe = document.getElementById("verbe").value;
        var finVerbe = verbe.substring(verbe.length-2);
        if(date===""){alertText=alertText+"1-please enter date de naissance\n";}    
        if(salaire===""){alertText+="2-please enter salaire brut\n";}    
        if(verbe.length<=2 || finVerbe !=="er"){alertText+="3-please enter verbe premier groupe\n";}        
        if(isNaN(salaire)){ 
            window.alert(" The salaire c'est NOT Number");
            e.preventDefault(); // Annulation de l'envoi des données
        }
        if(alertText !== ""){
            alert(alertText);
            e.preventDefault(); // Annulation de l'envoi des données
        }
});