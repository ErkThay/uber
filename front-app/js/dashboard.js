$(".cerrar-sesion").click(function(e){
    fetchAPI("http://localhost/uber-web-app/front-app/session-end.php", "POST")
    .then((data)=>{
        if(data.estatus == "ok"){
            location.href = "index.php";
        }
    });
})