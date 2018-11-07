'use strict';
let statusNI = 1;
$(document).ready(function () {
    $('#OrderByBtnNI').on('click', function (ev) {
        if (statusNI == 1) {
            order('NI', statusNI);
            $('#orderIconArrow').text('keyboard_arrow_down');
            statusNI = 2;
        }
        else {
            order('NI', statusNI);
            $('#orderIconArrow').text('keyboard_arrow_up');
            statusNI = 1;
        }
    });
});

function order(column, status) {
    $.ajax({
        method: 'POST',
        url: '/reportes/saidi_por_causa/order',
        timeout: 60000,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            column: column,
            Order: status
        },
        success: function (data) {
            M.toast({
                html: `${data.message}`,
                classes: 'green rounded'
            });
            $('#tableRenderSaidi').html(data.html);
        },
        error: function (error) {
            M.toast({
                html: 'Ocurrio un error inesperado',
                classes: 'red rounded'
            });
        }
    });
}