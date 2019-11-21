$(document).ready(function () {
    $.getJSON('curso.php', function (result) {
        $.each(result, function (key, curso) {
            $('#lista').append('<li class="list-group-item d-flex justify-content-between"><div>' + curso.nome + '</div><div><button class="btExcluir btn btn-dark" data-id="' + curso.id_curso + '">Excluir</button> <button class="btAlt btn btn-dark" data-id="' + curso.id_curso + '">Alterar</button></div></li>');
        })
        //        console.log(result)
        $('.btExcluir').click(function () {
            $.ajax({
                method: 'DELETE',
                url: 'curso/' + $(this).attr('data-id'),
                success: function(){
                    window.location.href = 'http://localhost/ifc-cursos/';
                }
            })
        })
        $('.btAlt').click(function () {

            $.ajax({
                method: 'GET',
                url: 'curso/' + $(this).attr('data-id')
            }).done(function (data) {
                $('#lista').css({
                    'display': 'none'
                })

                $('#div-form').css({
                    'display': 'block'
                })

                $('#btn-add').css({
                    'display': 'none'
                })

                $('#nome').val(data.nome);
                $('#grau').val(data.grau);
                $('#campus').val(data.campus);
                $('#semestres').val(data.semestres);
                $('#cargaHoraria').val(data.cargaHoraria);
                $('#vagas').val(data.vagas);
                $('#turno').val(data.turno);
                $('#btn-alterar').attr('data-id', data.id_curso)
            })
        })
        $('#btn-alterar').click(function (e) {
            e.preventDefault();
            var json;
            json = {
                nome: $('#nome').val(),
                grau: $('#grau').val(),
                campus: $('#campus').val(),
                semestres: $('#semestres').val(),
                cargaHoraria: $('#cargaHoraria').val(),
                vagas: $('#vagas').val(),
                turno: $('#turno').val()
            }
            
            $.ajax({
                method: 'PUT',
                url: 'curso/' + $(this).attr('data-id'),
                datatype: 'json',
                data: JSON.stringify(json),
                headers: {
                    "Content-Type": "application/json"
                },
                success: function(){
                    window.location.href = 'http://localhost/ifc-cursos/';
                }
            })
        })
        $('#btn-new').click(function (e) {
            e.preventDefault();
            var json;
            json = {
                nome: $('#new-nome').val(),
                grau: $('#new-grau').val(),
                campus: $('#new-campus').val(),
                semestres: $('#new-semestres').val(),
                cargaHoraria: $('#new-cargaHoraria').val(),
                vagas: $('#new-vagas').val(),
                turno: $('#new-turno').val()
            }
            
            $.ajax({
                method: 'POST',
                url: 'curso/' + $(this).attr('data-id'),
                datatype: 'json',
                data: JSON.stringify(json),
                headers: {
                    "Content-Type": "application/json"
                }
            }).done(function () {
                window.location.href = 'http://localhost/ifc-cursos/';
            })
        })
    })


})
