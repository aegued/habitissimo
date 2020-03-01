$(function () {
    var form = $('#form');
    var formUrl = form.attr('action');
    var btn = form.find('.btn');
    var loading = '<div class="loading">' +
        '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>' +
        'Cargando...' +
        '</div>';
    var alerts = form.find('.alerts');

    form.on('submit', function (e) {
        e.preventDefault();

        form.find('.form-control').removeClass('is-invalid');
        alerts.html('');

        $.ajax({
            url: formUrl,
            data: form.serialize(),
            method: 'POST',
            beforeSend: function () {
                btn.html(loading);
            },
            success: function (response) {
                btn.html('Enviar');
                alerts.html('<div class="alert alert-primary" role="alert">'+response.message+'</div>');
            },
            error: function (response) {
                let errors = response.responseJSON.data;

                alerts.html('<div class="alert alert-danger" role="alert">Ha ocurrido un error. Por favor revise los campos en rojo.</div>');

                for (element in errors){
                    let field = $('#'+element);

                    field.addClass('is-invalid');
                    field.next().html(`${errors[element]}`);
                }

                btn.html('Enviar');
            }
        });

    });
});
