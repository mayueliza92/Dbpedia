//console.log('correcto');

                
document.querySelector('#button2').addEventListener('click',traerDatos);
function traerDatos(){
    id="main-image"
    cod = document.getElementById("presidente").value;
    src= document.getElementById(id).src;
   miArray=[cod,src];
   //console.log(cod);
    //console.log('correcto');
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'presidentes.json', true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
           // console.log(this.responseText);
            let datos= JSON.parse(this.responseText);
           // console.log(datos);
           let res=document.querySelector('#res3')
           res.innerHTML='';
           
            if(datos.presidentes[cod].pic==src){
                res.innerHTML += "<figure><img src='"+datos.presidentes[cod].picE+"'> </figure><br>" ;
                res.innerHTML += "<b>Su esposa</b> " + datos.presidentes[cod].esposaLabel + "<br>";
                res.innerHTML += "<b> fue </b> " + datos.presidentes[cod].ocuEsposaLabel + "<br>";
                res.innerHTML += "<a href='"+datos.presidentes[cod].esposa+"'>" + datos.presidentes[cod].esposa+"</a><br>";
                // console.log(datos.presidentes[cod].itemLabel);
            }else{
                res.innerHTML += "<b>te equivocaste </b><br> " ;
                for(i in datos.presidentes){
                    if(datos.presidentes[cod]==datos.presidentes[i]){
                        res.innerHTML += "<figure><img src='"+datos.presidentes[cod].picP+"'> </figure><br>" ;
                        res.innerHTML += "<figure><img src='"+datos.presidentes[cod].picE+"'> </figure><br>" ;
                        res.innerHTML += "<b>Su esposa</b> " + datos.presidentes[cod].esposaLabel + "<br>";
                        res.innerHTML += "<b> fue </b> " + datos.presidentes[cod].ocuEsposaLabel + "<br>";
                        res.innerHTML += "<a href='"+datos.presidentes[cod].esposa+"'>" + datos.presidentes[cod].esposa+"</a><br>";

                    // res.innerHTML += "<b>Nombre: </b> " + datos.presidentes[i].itemLabel + "<br>";
                   // console.log(datos.presidentes[cod].itemLabel);
                   
                    }
                   }




                  //console.log('error');
            }
           
 
        }
    }
}