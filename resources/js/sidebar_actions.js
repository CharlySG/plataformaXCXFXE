'use strict';
function getView(url){
    $.ajax({
        type:'GET',
        url:`${url}`,
        timeout:60000,
        success:data =>{
            $('#renderme').html(data.html);
        },
        error:data=>{
            M.toast({
                html:'No Disponible Ahora',
                classes:'rounded red'
            });
        }
    });
}
