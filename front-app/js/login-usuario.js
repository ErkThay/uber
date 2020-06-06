(() => {
    'use strict';
    window.addEventListener('load', () => {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation-login');
        // Loop over them and prevent submission
        Array.prototype.filter.call(forms,  (form) => {
            form.addEventListener('submit',  (event)  => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let url = "http://localhost/uber-web-app/back-app/";
                    let data = new FormData(forms[0]);
                    data.append("opcion","loginUsuario");
                    fetchAPI(url,"POST",data)
                        .then((data)=>{
                            if(data.estatus == "ok"){
                            let dataSession = new FormData();
                            dataSession.append("idUser", data.mensaje.id_user);
                            dataSession.append("idTypeUser", data.mensaje.id_type_user);
                            fetchAPI("http://localhost/uber-web-app/front-app/session-start.php", "POST", dataSession)
                            .then((data)=>{
                                if(data.estatus == "ok"){
                                    location.href = "dashboard.php";
                                }
                            });
                            }else{
                                Notify(data.mensaje, null, null, 'danger');
                            }
                        })
                    .catch((e)=>console.log(e));
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();