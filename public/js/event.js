function seleccionarMenu(url) {
    $('ul.nav-sidebar a').filter(function () {
        return this.href == url;
    }).parent().addClass('active');

    $('ul.nav-treeview a').filter(function () {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open');
}

function mensaje($element, $class, $message) {
    $($element).html('<div class="alert '+ $class +'"><span class="close" data-dismiss="alert" aria-label="close">×</span>'+ $message +'</div>');
}

function notify (tipo, mensaje) {
    Lobibox.notify(tipo, {
        size: 'mini',
        rounded: true,
        sound: false,
        delayIndicator: false,
        iconSource: 'fontAwesome',
        msg: mensaje
    });
}

function confirmTC(title) {
    return Swal.fire({
        title: title,
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Actualizar TC',
        denyButtonText: 'Cancelar',
        showLoaderOnConfirm: true,
        preConfirm: (isConfirm) => {
            return isConfirm;
        }
    }).then((result) => {
        return result.value;
    });
}

function changePassword() {
    $("#form-password")[0].reset();
    $("#modal-password").modal("show");
    $('#modal-password').on('shown.bs.modal', function () {
        $("[name=profile_password]").focus();
    });
}