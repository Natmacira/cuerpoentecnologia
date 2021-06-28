document.addEventListener('DOMContentLoaded', function () {

    const respuestaNo              = document.querySelector("#respuestaNO");

    const respuestaSi              = document.querySelector ("#respuestaSI")

    const inputsRespuesta          = document.querySelectorAll(".respuesta");

    const actividadFisica          = document.querySelector("#queActividadHaces");

    const inputsRespuestaActividad = document.querySelectorAll(".respuestaActividad");

    const formulario               = document.querySelector("#form")


    function formSIoNO() {

        for (let i = 0; i < inputsRespuesta.length; i++) {
            inputsRespuesta[i].addEventListener('change', function () {
                if (this.value === 'no') {
                    respuestaNO.classList.add('mostrar');
                }
                else {
                    respuestaNO.classList.remove('mostrar');  
                }


            });

        }

        for (let i = 0; i < inputsRespuesta.length; i++) {
            inputsRespuesta[i].addEventListener('change', function () {
                if (this.value === 'yes') {
                    respuestaSI.classList.add('mostrar');
                    formulario.classList.add('form-abierto');
                }
                else {
                    respuestaSI.classList.remove('mostrar');  
                    formulario.classList.remove('form-abierto');
                }


            });
            
            
        }


        }

        formSIoNO();

     function actividad()   {
        for (let i = 0; i < inputsRespuestaActividad.length; i++) {
            inputsRespuestaActividad[i].addEventListener('change', function () {
                if (this.value === 'yes') {
                    actividadFisica.classList.add('mostrarActividad');
                }
                else {
                    actividadFisica.classList.remove('mostrarActividad');  
                }


            });

        }
     }

     actividad();
         
     


    


});