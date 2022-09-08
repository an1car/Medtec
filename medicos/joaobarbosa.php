
<?php
include "../class/Consulta.php";

$get_consulta = Consulta::GetConsulta();
$get_consultaMarcadas = Consulta::GetConsultaMarcadas();


?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-br"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>João Barbosa</title>
    <link rel="stylesheet" href="../css/mycss.css" media="screen">
    <link rel="stylesheet" href="../css/joaobarbosa.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script class="u-script" type="text/javascript" src="../JS/popup.js" defer=""></script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contato">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="pt">
    <section class="u-clearfix u-image u-section-1" id="sec-6f39" data-image-width="1920" data-image-height="405">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-flip-horizontal u-shape u-shape-svg u-text-white u-shape-1">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 100" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6a4e"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 100" x="0px" y="0px" id="svg-6a4e" style="enable-background:new 0 0 160 100;"><g><path d="M109.2,99.9L160,50L109.2,0H75.6l38.7,38H0v24.2h114L75.6,100L109.2,99.9z"></path>
</g></svg>
        </div>
      </div>
    </section>
    <!-- INFORMAÇÕES DO MÉDICO -->
    <section class="u-clearfix u-section-2" id="sec-e9d5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-round u-radius-30 u-image-1" src="../css/images/Imagem31.png" alt="" data-image-width="451" data-image-height="384">
        <button data-page-id="821229681" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-20 u-btn-1">CONTRATAR</button>
        <h6 class="u-text u-text-default u-text-1">JOÃO BARBOSA</h6>
        <img class="u-image u-image-round u-radius-20 u-image-2" src="../css/images/Imagem18.png" alt="" data-image-width="1174" data-image-height="1536">
        <img class="u-image u-image-round u-radius-20 u-image-3" src="../css/images/Imagem19.png" alt="" data-image-width="1515" data-image-height="1600">
      </div>
    </section>
    <!-- POP-UP DE HORÁRIOS -->
  <div class="popup-wrapper">
    <div class="popup">
      <div class="popup-close">X</div>
      <div class="popup-content"></div>
        <h2></br>SELECIONE A FORMA DE PAGAMENTO</h2>
          <center><select name="select" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-20 u-btn-1">
            <option value="valor0">Selecione forma de pagamento</option> 
            <option value="valor1">Boleto</option>
            <option value="valor2">Cartão de Crédito</option>
            <option value="valor3">Cartão de Débito</option>
          </select>
      <h2>HORÁRIOS DISPONÍVEIS</h2>
              <!--HORÁRIO DISPONÍVEIS NO BANCO DE DADOS  -->
              <?php
                while ($row = $get_consulta->fetch()) {
                ?>
            <tbody>
                <tr class = "text-center">
                <td>Inicio: <?php echo($row["inicio"])."H<br>"; ?></td>
                <td>Data: <?php echo($row["data"])."<br>"; ?></td>
                <td>Valor da Consulta: R$<?php echo($row["preco"])."<br>"; ?></td>
                <td>    
                <a href="MarcarConsulta.php?id=<?php echo($row["id"]); ?>" id="marcarConsulta"><buttonA data-page-id="821229681" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-20 u-btn-1">Marcar Consulta</buttonA></a>      
                </td>
                </tr>
            </tbody>
        <?php
            } ?>
            <!-- CancelarConsulta -->
            <?php
                while ($row = $get_consultaMarcadas->fetch()) {
                ?>
            <tbody>
                <tr class = "text-center">
                <td>Inicio: <?php echo($row["inicio"])."H<br>"; ?></td>
                <td>Data: <?php echo($row["data"])."<br>"; ?></td>
                <td>Valor da Consulta: R$<?php echo($row["preco"])."<br>"; ?></td>
                <td>    
                <a href="CancelarConsulta.php?id=<?php echo($row["id"]); ?>" id="CancelarConsulta" data-page-id="821229681" class="u-border-none u-btn u-custom-color-1 u-hover-palette-1-light-1 u-radius-20 u-btn-1">Cancelar Consulta</a>      
                </td>
                </tr>
            </tbody>
        <?php
            } ?>

  
             
    </div>
  </div>
    <!-- DEVERIA SER O POP-UP DE CONFIRMAR CONCULTAS -->
  <div class="popup-wrapperA">
    <div class="popupA">
      <div class="popup-closeA">X</div>
      <div class="popup-contentA"></div>
        <h2>Forma de pagamento: Cartão de Crédito: Final 3232</h2><br/>
        <p>Data da consulta: 15 de setembro de 2022 / 14 horas</p><br/>
        <button>CONFIRMAR</button>
    </div>
  </div>
  
</body></html>
