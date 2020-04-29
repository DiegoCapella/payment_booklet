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
            <div class="form-row mt-4">
              <div class="form-group col">
                <label for="">Nome</label>
                <input type="text" class="form-control form-control-sm" name="nome_empresa" required placeholder="Nome da Empresa ou Vendedor">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">Endereço</label>
                <input type="text" class="form-control form-control-sm" name="nome_empresa" required placeholder="Rua A, 123, Centro, Cidade - UF">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">Telefone</label>
                <input type="text" class="form-control form-control-sm" name="nome_empresa" required placeholder="75 99999-9999">
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
            <div class="form-row mt-4">
              <div class="form-group col">
                <label for="">Nome</label>
                <input type="text" class="form-control form-control-sm" name="nome_empresa" required placeholder="Nome da Empresa ou Vendedor">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">Endereço</label>
                <input type="text" class="form-control form-control-sm" name="nome_empresa" required placeholder="Rua A, 123, Centro, cidade - UF">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">CPF / CNPJ</label>
                <input type="text" class="form-control form-control-sm" name="nome_empresa" required placeholder="123.456.789-01">
              </div>
              <div class="form-group col">
                <label for="">Valor da parcela</label>
                <input type="text" class="form-control form-control-sm" name="nome_empresa" required placeholder="R$ 10,99">
              </div>
              <div class="form-group col">
                <label for="">Quantidade de parcelas</label>
                <input type="number" class="form-control form-control-sm" name="nome_empresa" required placeholder="2">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="">Dia de vencimento</label>
                <input type="number" class="form-control form-control-sm" name="nome_empresa" required placeholder="5">
              </div>
              <div class="form-group col">
                <label for="">Mês de início</label>
                <select name="" id="" class="form-control form-control-sm">
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
                <select name="" id="" class="form-control form-control-sm">
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
      </form>
    </div>
  </main>

  <footer>

  </footer>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>