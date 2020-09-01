//console.log('correcto');

                
document.querySelector('#btnEnviar').addEventListener('click',traerDatos);
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
           let res=document.querySelector('#res')
           res.innerHTML='';
           
            if(datos.presidentes[cod].pic==src){
                res.innerHTML += "<b>INFORMACIÓN PERSONAL </b><br> " ;
                res.innerHTML += "<b>Presidente: </b> " + datos.presidentes[cod].itemLabel + "<br>";
                res.innerHTML += "<b>Nació el: </b> " + datos.presidentes[cod].fechaNaci + "<br>";
                res.innerHTML += "<b>Su padre es: </b> " + datos.presidentes[cod].padreLabel + "<br>";
                res.innerHTML += "<b>Su madre es: </b> " + datos.presidentes[cod].madreLabel + "<br>";
                res.innerHTML += "<b>Esposa: </b> " + datos.presidentes[cod].esposaLabel + "<br>";
                res.innerHTML += "<b>Fecha de muerte: </b> " + datos.presidentes[cod].fechaMuer + "<br>";             
                res.innerHTML += "<b>url de imagen: </b> <a href='"+datos.presidentes[cod].pic+"'>" + datos.presidentes[cod].pic+"</a><br>";
              
                // console.log(datos.presidentes[cod].itemLabel);
            }else{
                res.innerHTML += "<b>te equivocaste </b><br> " ;
                for(i in datos.presidentes){
                    if(datos.presidentes[cod]==datos.presidentes[i]){
                        res.innerHTML += "<b>el Presidente: </b> " + datos.presidentes[cod].itemLabel + " es <br>";
                        
                        res.innerHTML += "<figure><img src='"+datos.presidentes[cod].pic+"'> </figure><br>" ;
                        res.innerHTML += "<p> " + datos.presidentes[cod].itemDescription+" </p>";
                        
                    // res.innerHTML += "<b>Nombre: </b> " + datos.presidentes[i].itemLabel + "<br>";
                   // console.log(datos.presidentes[cod].itemLabel);
                   
                    }
                   }




                  //console.log('error');
            }
           
 
        }
    }
}