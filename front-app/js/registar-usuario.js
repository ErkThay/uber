(() => {
    'use strict';
    window.addEventListener('load', () => {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        Array.prototype.filter.call(forms,  (form) => {
            form.addEventListener('submit',  (event)  => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let url = "http://localhost/uber-web-app/back-app/";
                    
                    let data = new FormData(forms[0]);
                    data.append("opcion","registrarUsuario");
                    fetchAPI(url,"POST",data)
                    .then((data)=>{
                        if (data.estatus == "ok") {
                            Notify(data.mensaje, null, null, 'success');
                            $(".needs-validation")[0].reset();
                            $(".needs-validation").removeClass("was-validated");
                        }
                    })
                    .catch((e)=>console.log(e));
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();