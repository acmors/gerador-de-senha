<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Gerador de senha</h2>

        <label for="number">Quantos caracteres</label>
        <input type="number" id="number" name='number' placeholder="digite um número">

        <button type="button" class="btn" id="btn-enviar">Gerar senha</button>
        <p class="senha" id="senha-gerada"></p>
        <button type="button" id="btn-copiar" disabled>Copiar senha</button>
    </div>
    <script>
        $('#btn-enviar').click(() => {
            $.ajax({
                url: 'gerador.php',
            type: 'POST',
            dataType: 'json',
            data: {number: $('#number').val()},
            success: function(data){
                $('#number').val('');
                $('#senha-gerada').html(data.senha_gerada);
                $('#btn-copiar').removeAttr('disabled');
            }
            });
        });

        $('#btn-copiar').click(() => {
            window.getSelection().selectAllChildren(document.getElementById('senha-gerada'));
            document.execCommand('Copy');
            alert('Senha copiada');

        }) 
    </script>
</body>
</html>