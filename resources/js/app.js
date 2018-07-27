M.AutoInit();
document.addEventListener('DOMContentLoaded', function () {
    let elems = document.querySelectorAll('#dropnavbar');
    M.Dropdown.init(elems, {
        coverTrigger: false,
        constrainWidth: false
    });

    let modalLoadFile = document.querySelector('#modal1');
    M.Modal.init(modalLoadFile, {
        opacity: .7,
        startingTop: '25%',
        endingTop: '25%',
        dismissible: false,

    });
});



$(document).on('submit', '#formEXCEL', function (ev) {
    ev.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/reportes/saidi_por_causa/upgrade',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        timeout: 60000,
        async: true,
        beforeSend: function () {
             var instance = M.Modal.getInstance(document.getElementById('modal1'));
             instance.close();
            swal("Esto puede demorar un poco, sea paciente!", {
                buttons: false,
                content:{
                    element:'img',
                    attributes:{
                        src: 'img/index.zigzag-curve-preloader.svg',
                    }
                }
            });
        },
        success: function (data) {
            console.log(data);
            swal.close();
            swal({
                title: "La carga de los datos fué exitosa!",
                text: "La actualización quedara registrada",
                icon: "success",
                button: "ok",
            });
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
             console.log(XMLHttpRequest);

             swal.close()
             swal("Oops", `Something went wrong! ${XMLHttpRequest.responseJSON.message}`, "error");
        }
    });
});