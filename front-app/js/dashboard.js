$(".cerrar-sesion").click(function(){
    fetchAPI("https://localhost/uber-web-app/front-app/session-end.php", "POST", "")
    .then((data) => {
        if(data.estatus == "ok")
            location.href = "index.php";
    });
});