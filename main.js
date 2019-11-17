$(document).ready(function() {
    $.getJSON('curso.php', function (result) {
        $.each(result, function (key, curso) {
            $('#lista').append('<li>'+curso.nome+' - <button class="btExcluir" data-id="'+curso.id_curso+'">Excluir</button> <button class="btAlt" data-id="'+curso.id_curso+'">Alterar</button></li>')
        })
        console.log(result)
        
        $('.btExcluir').click(function(){
            alert('curso/'+$(this).attr('data-id'))
        })
        $('.btAlt').click(function(){
            alert('cursos/'+$(this).attr('data-id'))
        })
    } )
})