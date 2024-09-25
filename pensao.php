<!-- HEAD -->
<?php include_once "modulos/head.php"; ?>
<!-- HEADER -->
<?php include_once "modulos/header.php"; ?>
  
  <main>  
    <section class="sections-inside area2">
      <div class="content">
        <?php include "modulos/groupBts.php"; ?>
      </div>
      <div class="contentMin">
        <div class="row gForm">
          <h2>PENSÃO</h2>
          <form action="/senders/pensao.php" method="POST" class="formee" id="validate">
            <div class="grid-12-12">
              <label for="">Sexo:</label>
              <select name="txtGenero" id="">
                <option value="Selecionar">Selecionar</option>  
                <option value="Masculino">Masculino</option>  
                <option value="Feminino">Feminino</option>  
              </select>
            </div>
            <div class="grid-12-12">
              <label for="">Nome:</label>
              <input type="text" name="txtNome" maxlength="50" required>
            </div>
            <div class="grid-6-12">
              <label for="">Nascimento:</label>
              <input type="text" name="txtNascimento" required id="data">
            </div>
            <div class="grid-6-12">
              <label for="">CPF:</label>
              <input type="text" name="txtCpf" required id="cpf">
            </div>
            <div class="grid-6-12">
              <label for="">Celular:</label>
              <input type="text" name="txtTel" required id="celular">
            </div>
            <div class="grid-6-12">
              <label for="">Relação com o Falecido:</label>
              <select name="txtOpt2">
                <option value="Casado">Casado</option>
                <option value="União Estável">União Estável</option>
                <option value="Companheiro(a)">Companheiro(a)</option>
                <option value="Mãe">Mãe</option>
                <option value="Pai">Pai</option>
                <option value="Filho">Filho</option>
              </select>  
            </div>
            <div class="grid-12-12">
              <label for="">Nome do Falecido:</label>
              <input type="text" name="txtNome2" maxlength="50" required>
            </div>
            <div class="grid-4-12">
              <label for="">CPF:</label>
              <input type="text" name="txtCpf2" required id="cpf2">
            </div>
            <div class="grid-4-12">
              <label for="">Nº do Benefício:</label>
              <input type="text" name="txtNum" required id="beneficio">
            </div>
            <div class="grid-4-12">
              <label for="">Data do Óbito:</label>
              <input type="text" name="txtObito" required id="dataObt">
            </div>
            <div class="grid-5-12">
              <input type="submit" class="btnEnviar">
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <?php include_once "modulos/footer.php"; ?>
    