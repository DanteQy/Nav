<!DOCTYPE html>
<html>
  <head>
    <title>Target</title>
    <meta name="author" content="Davide D'Osvaldo">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <!--caricamento dei file css-->
    <style>@import url(css/informations.css);</style>
    <style>@import url(css/links.css);</style>
    <style>@import url(css/stili.css);</style>
    <style>@import url(css/contenuto.css);</style>
    <!--caricamento dei file javascript-->
    <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
    <script type="text/JavaScript" src="javascript/global.js"></script>
    <script type="text/JavaScript" src="javascript/resize.js"></script>
    <script type="text/JavaScript" src="javascript/updating.js"></script>
    <script type="text/JavaScript">
      $(document).ready(function(){
        $('#a4').addClass('selected');
      });
      //funzione di aggiornamento dei dati
      function refreshInformations(){
        $('#sow').text(sowV);
        $('#sog').text(sogV);
        $('#sogp').text(sogpV);
        $('#togp').text(togpV);
        $('#lat').text(lat);
        $('#long').text(lon);
        $('#data1').text(data1);
        $('#data2').text(data2);
      }
      (function($){
        //funzione di inizializzazione delle dimensioni e dei dati
        $(document).ready(function(){
          resizeWindow();
          refreshInformations();
          updatingData();
        });
        //funzione che si attiva al ridimensionamento della pagina
        $(window).resize(function(){
          resizeWindow();
          refreshInformations();
        });
      })(jQuery);
    </script>
  </head>
  <body>
    <?php
      include 'Informations.php';
    ?>
    <div id="left">
      <?php
        include 'links.php';
      ?>
    </div>
    <table id="contenuto">
      <tr>
        <td class="left top">
          <div class="name">Delta VMG [%]</div>
          <div class="value" id="sogp"></div>
        </td>
        <td class="right top">
          <div class="name">Delta ANGLE [Deg]</div>
          <div class="value" id="togp"></div>
        </td>
      </tr>
      <tr>
      <td class="left bottom">
          <div class="name">Delta VPP [%]</div>
          <div class="value" id="data1"></div>
        </td>
        <td class="right bottom">
          <div class="name">VMG [kt]</div>
          <div class="value" id="data2"></div>
        </td>
      </tr>
        <!--
        <td colspan="2" class="bottom">
          <div class="name">SPEED OVER GROUND [kt]</div>
          <div class="value" id="sog"></div>
        </td>
        -->
      </tr>
    </table>
    <div id="right">
      <?php
        include 'links2.php';
      ?>
    </div>
  </body>
</html>