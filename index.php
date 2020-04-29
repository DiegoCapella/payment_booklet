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
  <heade class="text-center">
    <h1 class="text-primary py-4 display-4">Gere seu Carnê</h1>
  </header>
  
  <main>
    <div class="container">
      <form role="form" action="carne.php" method="post">
        <div class="row">
          <!-- Vendedor -->
          <div class="col-md-6 col-sm-12 text-left">
            <h3 class="text-center">Vendedor</h3>
            <hr>
            <div class="form-row mt-4">
              <div class="form-group col">
                <label for="">Nome</label>
                <input name="nome_empresa" type="text" class="form-control form-control-sm" required placeholder="Nome da Empresa ou Vendedor">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">Endereço</label>
                <input name="endereco_empresa" type="text" class="form-control form-control-sm" required placeholder="Rua A, 123, Centro, Cidade - UF">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">Telefone</label>
                <input name="tel_empresa" type="text" class="form-control form-control-sm" required placeholder="75 99999-9999">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">Observações</label>
                <textarea name="obs" class="form-control" rows="2" placeholder="Após o vencimento multa de........ 2%"></textarea>
              </div>
            </div>
          </div>
          <!-- Cliente -->
          <div class="col-md-6 col-sm-12 text-left">
            <h3 class="text-center">Cliente</h3>
            <hr>
            <div class="form-row mt-4">
              <div class="form-group col">
                <label for="">Nome</label>
                <input name="nome_cliente" type="text" class="form-control form-control-sm" required placeholder="Nome da Empresa ou Vendedor">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">Endereço</label>
                <input name="endereco_cliente" type="text" class="form-control form-control-sm" required placeholder="Rua A, 123, Centro, cidade - UF">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">CPF / CNPJ</label>
                <input name="cpf_cliente" type="text" class="form-control form-control-sm" required placeholder="123.456.789-01">
              </div>
              <div class="form-group col">
                <label for="">Valor da parcela</label>
                <input name="valor_parc" type="text" class="form-control form-control-sm" required placeholder="R$ 10,99">
              </div>
              <div class="form-group col">
                <label for="">Quantidade de parcelas</label>
                <input name="qtd_parc" type="number" class="form-control form-control-sm" required value="2">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">Dia de vencimento</label>
                <input name="dia_venc" type="number" class="form-control form-control-sm" required value="5">
              </div>
              <div class="form-group col">
                <label for="">Mês</label>
                <select name="mes_venc" class="form-control form-control-sm">
                  <option value="1">Janeiro</option>
                  <option value="2">Fevereiro</option>
                  <option value="3">Março</option>
                  <option value="4">Abril</option>
                  <option value="5">Maio</option>
                  <option value="6">Junho</option>
                  <option value="7">Julho</option>
                  <option value="8">Agosto</option>
                  <option value="9">Setembro</option>
                  <option value="10">Outubro</option>
                  <option value="11">Novembro</option>
                  <option value="12">Dezembro</option>
                </select>
              </div>
              <div class="form-group col">
                <label for="">Ano</label>
                <select name="ano_venc" class="form-control form-control-sm">
                  <option value="2016">2020</option>
                  <option value="2017">2021</option>
                  <option value="2018">2022</option>
                  <option value="2019">2023</option>
                  <option value="2020">2024</option>
                  <option value="2021">2025</option>
                </select>  
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="text-center my-4">
          <button type="submit" class="btn btn-success">Gerar</button>
        </div>
      </form>
    </div>
  </main>

  <footer class="bg-light text-center py-3">
    <p class="mb-0 ">&copy 2020 - <a href="https://diegocapelladev.com">Diego Capella Dev.</a> </p>
    <a href="https://github.com/DiegoCapella">Github</a>
  </footer>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>