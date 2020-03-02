$(function () {
    var form = $('#form');
    var formUrl = form.attr('action');
    var btn = form.find('.btn');
    var loading = '<div class="loading">' +
        '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>' +
        'Cargando...' +
        '</div>';
    var alerts = form.find('.alerts');
    var categoriesSelect = form.find('#category');
    var subcategoriesSelect = form.find('#subcategory');

    //Fill the Category Select
    $.get('api/categories', function (response) {
        let data = response.data;

        data.forEach(element => {
            categoriesSelect.append('<option value="'+element.name+'" data-id="'+element.id+'">'+element.name+'</option>');
        });
    });

    //Fill the Subcategory Select when select a Category option
    categoriesSelect.on('change', function () {
        let optionSelected = $(this).find('option:selected');
        let categoryId = optionSelected.data('id');

        subcategoriesSelect.html('<option value="">-- Seleccionar Subcategoría --</option>');
        subcategoriesSelect.removeAttr('disabled');

        $.get('api/categories/'+categoryId+'/subcategories', function (response) {
            let data = response.data;

            data.forEach(element => {
                subcategoriesSelect.append('<option value="'+element.name+'" data-id="'+element.id+'">'+element.name+'</option>');
            });
        });
    });

    //OnSubmit Form
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
