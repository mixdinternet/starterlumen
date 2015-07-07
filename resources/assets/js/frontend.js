$(document).ready(function(){

    /* Validation */
    if ($('.jq-form-validate').length > 0) {
        $('.jq-form-validate').each(function () {
            var id = $(this).attr('id');
            $("#" + id).validate({
                errorPlacement: function (error, element) {
                    error.insertAfter(element);
                }
            });
        });
    }

    if ($.mask) {
        $('.mask-telefone').focusout(function () {
            var phone, element;
            element = $(this);
            element.unmask();
            phone = element.val().replace(/\D/g, '');
            if (phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");
            }
        }).trigger('focusout');
        $(".mask-data").mask("99/99/9999");
        $(".mask-CEP").mask("99999-999");
        $(".mask-CPF").mask("999.999.999-99");
        $(".mask-CNPJ").mask("99.999.999/9999-99");
        $(".mask-hora").mask("99:99");
    }

    if ($.maskMoney) {
        $(".mask-dinheiro").maskMoney({
            symbol: "R$ ",
            decimal: ",",
            thousands: ".",
            showSymbol: "true"
        });
        $(".mask-medida").maskMoney({
            symbol: "",
            decimal: "",
            thousands: ".",
            showSymbol: "false",
            precision: 0
        });
        $(".mask-inteiro").maskMoney({
            symbol: "",
            decimal: "",
            thousands: "",
            showSymbol: "false",
            precision: 0
        });
        $(".mask-float").maskMoney({
            symbol: "",
            decimal: ",",
            thousands: "",
            showSymbol: "false",
            precision: 2
        });
    }


});