// logeo
let cerrariniciarsesion = document.getElementById("cerrariniciarsesion");
let cerrarregistrarme = document.getElementById("cerrarregistrarme");
let iniciarsesion = document.getElementById("iniciarsesion");
let registrarme = document.getElementById("registrarme");
let btniniciarsesion = document.getElementById("btniniciarsesion") ? document.getElementById("btniniciarsesion") : null;
let btnregistrarme = document.getElementById("btnregistrarme") ? document.getElementById("btnregistrarme") : null;

if(btniniciarsesion != null){
    btniniciarsesion.addEventListener("click", ()=>{
        if(registrarme.style.display == "none") iniciarsesion.style.display = "flex";
        else{
            registrarme.style.display = "none";
            iniciarsesion.style.display = "flex";
        }
    });
}
if(btnregistrarme != null){
btnregistrarme.addEventListener("click", ()=>{
    if(iniciarsesion.style.display == "none") registrarme.style.display = "flex";
    else{
        iniciarsesion.style.display = "none";
        registrarme.style.display = "flex";
    }
});
}

cerrarregistrarme.addEventListener("click", ()=>{
    registrarme.style.display = "none";
});
cerrariniciarsesion.addEventListener("click", ()=>{
    iniciarsesion.style.display = "none";
});

// contador
let contador = document.getElementById("contador");

let url = "http://localhost/usdtmining/contador.php";

const postData = {
    title: "titulo del post",
    content: "contenido del post",
    nombre: "ca"
}

const requestOptions = {
    method: "post",
    headers: {
        "Content-Type": "application/json"
    },
    body: JSON.stringify(postData)
}

if(contador.textContent != "-"){
    setInterval(()=>{

        fetch(url, requestOptions)
      .then(response => {
        if (!response.ok) {
          throw new Error(`Error al enviar el post: ${response.status}`);
        }
        return response.text(); // .json() ó .text()
      })
      .then(data => {
        console.log('Respuesta del servidor:', data);
        contador.textContent = data;
      })
      .catch(error => {
        console.error('Error en la solicitud:', error);
      });
    }, 1000);
}

// cerrar sesion
let cerrarsesion = document.getElementById("cerrarsesion");
cerrarsesion.addEventListener("click", ()=>{
    window.location.href = 'cerrarsesion.php';
});