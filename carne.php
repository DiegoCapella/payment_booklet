<?php

if (!$_POST['nome_empresa']) { 
  $nome_empresa = ""; 
} else { 
  $nome_empresa = addslashes($_POST['nome_empresa']); 
}

if( !$_POST['endereco_empresa'] ) {
  $endereco_empresa = "";
} else {
  $endereco_empresa = addslashes($_POST['endereco_empresa']);
}

if( !$_POST['tel_empresa'] ) {
  $tel_empresa = "";
} else {
  $tel_empresa = addslashes($_POST['tel_empresa']);
}

if( !$_POST['obs'] ) {
  $obs = "";
} else {
  $obs = addslashes($_POST['obs']);
}

if( !$_POST['nome_cliente'] ) {
  $nome_cliente = "";
} else {
  $nome_cliente = addslashes($_POST['nome_cliente']);
}

if( !$_POST['endereco_cliente'] ) {
  $endereco_cliente = "";
} else {
  $endereco_cliente = addslashes($_POST['endereco_cliente']);
}

if( !$_POST['cpf_cliente'] ) {
  $cpf_cliente = "";
} else {
  $cpf_cliente = addslashes($_POST['cpf_cliente']);
}

if( !$_POST['valor_parc'] ) {
  $valor_parc = "";
} else {
  $valor_parc = addslashes($_POST['valor_parc']);
}

if( !$_POST['qtd_parc'] ) {
  $qtd_parc = "";
} else {
  $qtd_parc = addslashes($_POST['qtd_parc']);
}

if( !$_POST['dia_venc'] ) {
  $dia_venc = "";
} else {
  $dia_venc = addslashes($_POST['dia_venc']);
}

if( !$_POST['mes_venc'] ) {
  $mes_venc = "";
} else {
  $mes_venc = addslashes($_POST['mes_venc']);
}

if( !$_POST['ano_venc'] ) {
  $ano_venc = "";
} else {
  $ano_venc = addslashes($_POST['ano_venc']);
}

$data = date("d/m/y");

if( $qtd_parc > 24 ) {
  header( "Location: index.php?error=qtd_limite");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carnê Simples</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="bg-dark ">
    <div class="container">
    <div class="btn-topo text-center text-white py-3">
      <h1 class="mb-4">Imprima o seu Carnê</h1>
      <button class="btn btn-warning mr-5" onclick="window.history.back()">Voltar</button>
      <button class="btn btn-success" onclick="window.print()">Imprimir</button>
    </div>
    </div>
  </header>
  
  <?php
    // $dia_venc = date("d");
    $cont = 1;
    $ano = $ano_venc;
    $mes = $mes_venc - 1;

    while( $cont <= $qtd_parc ) {
      
      $quebra_pg = 0;

      if( $mes == 12 ) {
        $ano = $ano_venc + 1;
        $mes = 1; 
      } else {
        $mes++;
      }

      echo "
      <div class=\"parcela\">
        <div class=\"grid\">
          <div class=\"col4\">
            <div class=\"destaca\">
              <table width=\"100%\">
                <tr>
                  <td>
                    <small>Parcela</small>
                    <br>{$cont} / {$qtd_parc}
                  </td>
                <td>
                  <small>Valor</small>
                  <br>{$valor_parc}
                </td>
                </tr>
                <tr>
                  <td colspan=\"2\">
                    <small>Vencimento</small>
                    <br>{$dia_venc}/{$mes}/{$ano}
                  </td>
                </tr>
                <tr>
                  <td colspan=\"2\">
                    <small>Observações</small>
                    <br><br>
                  </td>
                </tr>
                <tr>
                  <td colspan=\"2\">
                  <div class=\"nome_parc\">{$nome_cliente}, {$cpf_cliente}, {$endereco_cliente}</div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class=\"col8\">
            <table width=\"100%\">
              <tr>
                <td colspan=\"2\">
                  <small>Nome do cedente</small>
                  <br>{$nome_empresa}
                </td>
                <td>
                  <small>Parcela</small>
                  <br>{$cont} / {$qtd_parc}
                </td>
                <td>
                  <small>Valor</small>
                  <br>{$valor_parc}
                </td>
              </tr>
              <tr>
                <td>
                  <small>Data do Documento</small>
                  <br>{$data}
                </td>
                <td>
                  <small>Tipo de Documento</small>
                  <br>Carnê
                </td>
                <td colspan=\"2\">
                  <small>Vencimento</small>
                  <br>{$dia_venc}/{$mes}/{$ano}
                </td>
              </tr>
              <tr>
                <td colspan=\"4\">
                  <small>As informações contidas neste carnê, são de responsabilidade do cedente</small>
                  <br>{$obs}
                </td>
              </tr>
              <tr>
                <td colspan=\"4\">
                <div class=\"nome\">{$nome_cliente}, {$cpf_cliente}, {$endereco_cliente}</div>
                </td>
              </tr>
            </table>
            
          </div>
        </div>
      </div>";

      if( !$quebra_pg ) {
        $quebra_pg = 0;
      }
      $quebra_pg++;
      if( $quebra_pg == 5 ) {
        echo "<div class=\"quebra-pag\"></div>";
        $quebra_pg = 0;
      }

      $cont++;
    }

  ?>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>