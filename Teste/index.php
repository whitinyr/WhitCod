<html>
<head>Converter</head>
<body>
  <form method="post">
    VALOR A CONVERTER:
    <input type="text" name="valor" size="5" /> <input type="submit" value="calcular" name="calcular">
    <br><br>
    DE
    <select name="tipo">
      <option selected="selected" value="real">real</option>
      <option value="dollar">dollar</option>
    </select>

    PARA
    <select name="tipo1">
      <option  selected="selected" value="dollar">dollar</option>
      <option  value="real">real</option>
    </select>
  </form>


  <?php
  $calcular = isset($_POST['calcular']);

  if($calcular != ""){
    $V1 = 0;
    $V2 = 0;
    $V  = $_POST['valor'];
    $V1 = $_POST['tipo'];
    $V2 = $_POST['tipo1'];
    calc();
  }

  function calc()
  {
    global $V;
    global $V1;
    global $V2;
    if ($V1 == "real"){
      $mbase = 1;
      if ($V2 == "dollar"){
        $resultado = ($V * $mbase / 25);
        if ($resultado < 1) {
          $w = ( 50 * $resultado);
          echo "$resultado <div style='background-image:url(https://http2.mlstatic.com/estados-unidos-1-moeda-1-dolar-circulavel-john-f-kennedy-D_NQ_NP_646813-MLB25905636194_082017-Q.jpg);width: $w; height: 50px; max-width:100%; background-size: cover; background-repeat-x: inherit;'>";
        }
        else{
          $w = ( 50 * $resultado);
          echo "$resultado <div style='background-image:url(https://http2.mlstatic.com/estados-unidos-1-moeda-1-dolar-circulavel-john-f-kennedy-D_NQ_NP_646813-MLB25905636194_082017-Q.jpg);width: $w; height: 50px; max-width:100%; background-size: contain; background-repeat-x: inherit;'>";
        }

      }
    }
    if ($V1 == "dollar"){
      $mbase = 1;
      if ($V2 =="real"){
        $resultado = ($V * $mbase * 25);
        if ($resultado) {
          $w = ( 50 * $resultado);
        }
        echo "$resultado <div style='background-image:url(https://http2.mlstatic.com/estados-unidos-1-moeda-1-dolar-circulavel-john-f-kennedy-D_NQ_NP_646813-MLB25905636194_082017-Q.jpg);width: $w; height: 50px; max-width:100%; background-size: contain; background-repeat-x: inherit;'>";
      }
    }
  }



  ?>
  <!--<div style="
  background-image: url('https://http2.mlstatic.com/estados-unidos-1-moeda-1-dolar-circulavel-john-f-kennedy-D_NQ_NP_646813-MLB25905636194_082017-Q.jpg');
  width: 50px;
  height: 30px;
  background-size: contain;
  background-repeat-x: inherit;
  "> -->
</div>
</body>
<html>
