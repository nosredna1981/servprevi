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
          <h2>APOSENTADORIA POR TEMPO OU IDADE</h2>
          <form action="/senders/aposentadoria.php" method="POST" class="formee" id="validate">
            <div class="grid-12-12">
              <label for="">Sexo:</label>
              <select name="txtGenero" id="sltGenero">
                <option value="Selecionar">Selecionar</option>  
                <option value="Masculino">Masculino</option>  
                <option value="Feminino">Feminino</option>  
              </select>
            </div>
            <div class="grid-12-12">
              <label for="">Nome:</label>
              <input type="text" name="txtNome" maxlength="50" required>
            </div>
            <div class="grid-5-12">
              <label for="">Nascimento:</label>
              <input type="text" name="txtNascimento" required id="data">
            </div>
            <div class="grid-3-12">
              <label for="">Idade:</label>
              <input type="text" name="txtIdade" maxlength="2" required id="idadeM" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            </div>
            <div class="grid-4-12">
              <label for="">CPF:</label>
              <input type="text" name="txtCpf" required id="cpf">
            </div>
            <div class="grid-3-12">
              <label for="">Contribuição:</label>
              <input type="text" name="txtTempo" maxlength="2" id="tempo" maxlength="3" required onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            </div>
            <div class="grid-5-12">
              <label for="">Celular:</label>
              <input type="text" name="txtTel" required id="celular">
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
    
