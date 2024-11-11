const selectescola = document.getElementById('codescola');
const selecturma = document.getElementById('turmas');
const stepone = document.getElementById('bar-step-1');
const steptwo = document.getElementById('bar-step-2');
stepone.style.transition = 'width 1s ease-in-out';
steptwo.style.transition = 'width 1s ease-in-out';
stepone.style.width = '0%';
steptwo.style.width = '0%';
loadscholl();

function validacampos() {
    if (selecturma.value == "") {
        Swal.fire({
            title: 'Opss!',
            text: "SELECIONE A TURMA!",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok!'
        });
        return false;

    } else {
        steptwo.style.width = '100%'
        setTimeout(() => {
            Swal.fire({
                title: 'Mensagem',
                text: "Buscado com sucesso!",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok!'
            }).then((result) => {
                setTimeout(() => {
                    stepone.style.width = '0%';
                    steptwo.style.width = '0%';
                    selectescola.value = 0;
                    buscarTurmas(selectescola.value);
                }, "1500");

                if (result.isConfirmed) {

                } else {

                }
            });
        }, "1500");
    }
}

function loadscholl() {
    var token = localStorage.getItem('token');
    // console.log(window.process.env);
    let url = "/findscholl";
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        // headers: {"Authorization": localStorage.getItem('token')},
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "buscarescolas": "s"
        },
        success: function (response) {

            response.forEach(element => {
                $(selectescola).append($('<option>', {
                    value: element.ed18_i_codigo,
                    text: element.ed18_c_nome
                }));
            });
            buscarTurmas(selectescola.value);
        },
        error: function (data) {

            if (data.status === 422) {

                var errors = $.parseJSON(data.responseText);

                $.each(errors, function (index, value) {
                    //console.log(value);
                });

                let url = "public/";

                // location.href = url;



            }
            return false;
        }
    })
}

function buscarTurmas(codigo) {
    stepone.style.width = '0%';
    let url = "/findturmas";
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "codescola": codigo
        },
        success: function (response) {
            document.getElementById("turmas").options.length = 0;
            response.forEach(element => {
                $(selecturma).append($('<option>', {
                    value: element.ed57_i_codigo,
                    text: element.ed57_c_descr
                }));
            });
            if (selecturma.value == "") {
                stepone.style.width = '0%';
                $(selecturma).append($('<option>', {
                    value: "",
                    text: "SEM DADOS ..."
                }));
            } else {
                setTimeout(() => {
                    stepone.style.width = '100%'
                }, "500")

            }

        },
        error: function (data) {

            if (data.status === 422) {

                var errors = $.parseJSON(data.responseText);

                $.each(errors, function (index, value) {
                    //console.log(value);
                });
                cpf_responsavel = '';
                let url = "public/";
                // location.href = url;
            }
            return false;
        }
    })
}