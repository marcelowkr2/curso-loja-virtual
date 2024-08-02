<?php
session_start();
define('PG', '/imagens/barra-carrinho02.png'); // Definindo a constante PG

    $irpara = isset($_GET['irpara']) ? $_GET['irpara'] : ''; // Verifica se 'irpara' está definido no array $_GET
    $irpara_parts = explode(' ', $irpara); // Dividindo a string por espaços
    $irpara = isset($irpara_parts[1]) ? $irpara_parts[1] : ''; // Verifica se há uma segunda parte e a define
?>
<div id="base-carrinho">
    <h2> <img src="/imagens/barra-carrinho02.png"> </h2>
    <h3> <img src="/imagens/identificacao.png"> </h3>
    <h4 class="fundo_azul"> Faça o seu login ou cadastre-se </h4>
    <div id="container-logar">
        <div id="carrinho-logar">
            <h2> Já sou cliente</h2>
            <div id="formulario-login">
                <form id="frmlogin" name="frmlogin" method="post" action="/logar.php">
                    <fieldset>
                        <label>
                            <span>Digite seu email</span>
                            <input type="text" name="txt_email" id="txt_email" />
                        </label>
                        <label>
                            <span> Digite sua senha</span>
                            <input type="password" name="txt_senha" id="txt_senha" />
                        </label>
                        <input type="hidden" name="irpara" value="<?php echo $irpara; ?>" />
                        <input type="submit" name="logar" id="logar" value="logar" class="botao fundo_azul">
                    </fieldset>            
                </form>
            </div>
            <p> <a href="#">esqueci minha senha</a> </p>
        </div>
        <div id="carrinho-logar">
            <h2> Ainda não sou cadastrado</h2>
            <p> Caso ainda não seja cadastrado no site, clique no botão abaixo e faça seu cadastro para poder finalizar a compra</p>
            <h5><a href="#dfsfs"><img src="/imagens/criar-novo.png"></a></h5>
        </div>
    </div>
</div>
