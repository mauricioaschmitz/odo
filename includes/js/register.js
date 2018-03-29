/**
 * 2018
 * Desenvolvido por: Maurício Antonioli Schmitz
 * Analista de TI da Faculdade de Odontologia
 */

function checkCPF() {
    var cpf = $('#cpf').val();
    if (cpf.length !== 14) { //se o cpf possui todos os digitos
        $("#divErroCpf").show(); //validar cpf
    } else {
        $.ajax({
            url: getBaseUrl() + "index.php/register/checkCpf", //arquivo onde serão buscados os dados
            type: 'POST',
            dataType: 'json', //tipo de retorno
            scriptCharset: 'UTF-8',
            data: {
                cpf: cpf
            },
            success: function (dados) {
                if (dados) {
                    $("#divErroCpf").hide();
                    $("#divCadastrar").hide();
                    $("#divButtons").show();
                    $('#cpf').attr('readonly', 'true');
                } else {
                    $("#divCadastrar").show();
                }
            }
        });
    }
}

function showData() {
    $("#divCadastrar").show();
}

function showInsertImages() {
    $("#divInsertImages").show();
}

function cleanForm() {
    $('#cpf').val('');
    $('#cpf').prop('readonly', false);
    $("#divErroCpf").hide();
    $("#divCadastrar").hide();
    $("#divButtons").hide();
}

$(document).ready(function () {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function (event, label) {

        var input = $(this).parents('.input-group').find(':text'),
                log = label;

        if (input.length) {
            input.val(log);
        } else {
            if (log)
                alert(log);
        }

    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#fileUpload").change(function () {
        readURL(this);
    });
});
