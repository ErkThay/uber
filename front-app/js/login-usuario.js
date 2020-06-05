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
                    let url = "https://localhost/uber-web-app/back-app/";
                    let data = new FormData(forms[0]);
                    data.append("opcion","loginUsuario");
                    fetchAPI(url,"POST",data)
                    .then((data)=>{
                        if(data.estatus == "ok"){
                            console.log("tienes acceso");
                            location.href = "dashboard.php";
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