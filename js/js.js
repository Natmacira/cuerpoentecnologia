document.addEventListener('DOMContentLoaded', function () {

    const respuestaNo = document.querySelector("#respuestaNO")

    const menuItems = document.querySelectorAll("#no")

    function formSIoNO() {

        menuItems.addEventListener('click', function () {
            document.body.#respuestaNO.classList.toggle('respuesta-no');
        });



        /*
        menuItems.forEach(function (menuItem) {
            menuItem.addEventListener('click', function () {
                document.body.classList.remove('mobile-menu-active');

                let currentItem = document.querySelector('.active');
                currentItem.classList.remove('active');
                this.classList.add('active');

            })
        })

    }

    navResponsive();
    */
}});