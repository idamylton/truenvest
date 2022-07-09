$(document).ready(function(){	
    $.validator.addMethod("telefone", function (value, element) {
        value = value.replace("(", "");
        value = value.replace(")", "");
        value = value.replace("-", "");
        return this.optional(element) || /[0-9]{10}/.test(value);
    }, "Por favor, um telefone válido");
    // Celular (com 8 ou 9 dígitos)
    $.validator.addMethod("celular", function (value, element) {
    value = value.replace("(", "");
    value = value.replace(")", "");
    value = value.replace("-", "");
    value = value.replace("_", "");
    value = value.replace(" ", "");
    return this.optional(element) || /[0-9]{10}/.test(value) || /[0-9]{11}/.test(value);
    }, "Informe um celular válido.");

    var form = $("#form_cadastro");

    form.validate({
        rules: {
            nome: "required",
            email: {
                required: true,
                email: true
            },
            whatsapp: "required",
            segmento: "required",
            segmento: "required",
            financas1: "required",
            financas2: "required",
            financas3: "required",
            financas4: "required",
            mercado1: "required",
            mercado2: "required",
            mercado3: "required",
            mercado4: "required",
            mercado5: "required",
            pessoas1: "required",
            pessoas2: "required",
            pessoas3: "required",
            pessoas4: "required",
            leis1: "required",
            leis2: "required",
            leis3: "required",
            operacao1: "required",
            operacao2: "required",
            operacao3: "required",
            operacao4: "required",
            operacao5: "required",
            operacao6: "required",
            termo1: "required",
            termo2: "required"
        },
        messages: {
            cad_nome: "Por favor informe o seu nome completo.",
            cad_mae: "Por favor informe o nome completo da sua mãe.",
            cad_nascimento: "Por favor informe a sua data de nascimento.",
            cad_rg: "Por favor informe a seu RG.",
            cad_estadocivil: "Por favor selecione o seu estado civil.",
            cad_escolaridade: "Por favor selecione o seu grau de escolaridade.",
            cad_profissao: "Por favor informe sua profissão.",
            cad_email: {
                required: "Por favor informe seu e-mail.",
                email: "Por favor informe um e-mail válido"
            },
            cad_email2: {
                required: "Por favor informe novamente seu e-mail.",
                email: "Por favor informe um e-mail válido",
                equalTo: "O e-mail não confere."
            },
            cad_cpf: {
                required: "Por favor informe o seu CPF.",
                cpf: "Por favor informe um CPF válido."
            },
            cad_telefone1: "Por favor informe um telefone para contato.",
            cad_cep: {
                required: "Por favor informe o CEP da sua residência.",
                minlength: "CEP inválido."
                // digits: "Por favor informe somente os digitos do CEP."
            },
            cad_endereco: "Por favor informe o seu endereço.",
            cad_numero: "Por favor informe o nº da sua residência.",
            cad_bairro: "Por favor informe o seu bairro.",
            cad_cidade: "Por favor informe a sua cidade.",
            cad_uf: "Por favor informe o seu estado.",
            termo1: "Por favor confirme a declaração de veracidade das informações.",
            termo2: "Por favor confirme a declaração de responsabilidade."
        }
    });

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        labels: {
            cancel: "Cancelar",
            current: "current step:",
            pagination: "Paginação",
            finish: "Finalizar",
            next: "Próximo",
            previous: "Anterior",
            loading: "Carregando ..."
        },
        onInit: function (event,currentIndex) {

        },
        onStepChanging: function (event, currentIndex, newIndex)
        {

            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex)
            {
                return true;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex)
            {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
            {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3)
            {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            $.ajax({
              url: '/api/cadastros.php',
              type: 'POST',
              dataType: 'json',
              data: form.serialize()+'&a=cadastro',
              success: function(data) {
                if (data.status == true) {
                    alert(data.msg);
                    location.href="/";
                }
              }
            });
        }
    });


    $("input[name=whatsapp]").mask("(00)00000-0000");
    
});

