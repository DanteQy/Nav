<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta name="author" content="Davide D'Osvaldo">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <!--caricamento dei file css-->
    <style>@import url(css/informations.css);</style>
    <style>@import url(css/links.css);</style>
    <style>@import url(css/stili.css);</style>
    <style>@import url(css/totalinfo.css);</style>
    <!--caricamento dei file javascript-->
    <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
    <script type="text/JavaScript" src="javascript/global.js"></script>
    <script type="text/JavaScript" src="javascript/resize.js"></script>
    <script type="text/JavaScript" src="javascript/updating.js"></script>
    <script type="text/JavaScript">
      $(document).ready(function(){
        $('#a1').addClass('selected');
      });
      //funzione di aggiornamento dei dati
      function refreshInformations(){
        $('#aws').text(awsV);
        $('#sow').text(sowV);
        $('#awa').text(awaV);
        $('#mh').text(mhV);
        $('#tws').text(twsV);
        $('#twa').text(twaV);
        $('#sog').text(sogV);
        $('#cog').text(cogV);
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
          <div class="n"><abbr title="Apparent wind speed">AWS</abbr> [kt]</div>
          <div class="v" id="aws"></div>
        </td>
        <td class="center top">
          <div class="n"><abbr title="True wind speed">TWS</abbr> [kt]</div>
          <div class="v" id="tws"></div>
        </td>
        <td class="right top">
          <div class="n"><abbr title="Magnetic heading">MH</abbr> [&#176;]</div>
          <div class="v" id="mh"></div>
        </td>
      </tr>
      <tr>
        <td class="left middle">
          <div class="n"><abbr title="Apparent wind angle">AWA</abbr> [&#176;]</div>
          <div class="v" id="awa"></div>
        </td>
        <td class="center middle">
          <div class="n"><abbr title="True wind angle">TWA</abbr> [&#176;]</div>
          <div class="v" id="twa"></div>
        </td>
        <td class="right middle">
          <div class="n"><abbr title="Speed over water">SOW</abbr> [kt]</div>
          <div class="v" id="sow"></div>
        </td>
      </tr>
      <tr>
        <td class="left middle">
          <div class="n"><abbr title="Speed over ground">SOG</abbr> [kt]</div>
          <div class="v" id="sog"></div>
        </td>
        <td class="center middle">
          <div class="n"><abbr title="Target Speed">DVMG</abbr> [%]</div>
          <div class="v" id="sogp"></div>
        </td>
        <td class="right middle">
          <div class="n"><abbr title="Curse over ground">COG</abbr> [&#176;]</div>
          <div class="v" id="cog"></div>
        </td>
      </tr>
      <tr>
        <td class="left bottom">
          <div class="n"><abbr title="Data 1">DVPP [%]</abbr></div>
          <div class="v" id="data1"></div>
        </td>
        <td class="center bottom">
          <div class="n"><abbr title="Target Angle">DANG</abbr> [Deg]</div>
          <div class="v" id="togp"></div>
        </td>
        <td class="right bottom">
          <div class="n"><abbr title="Data 2">VMG [kt]</abbr></div>
          <div class="v" id="data2"></div>
        </td>
      </tr>
    </table>
    <div id="right">
      <?php
        include 'links2.php';
      ?>
    </div>
  </body>
</html>