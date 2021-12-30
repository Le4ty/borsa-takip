<?php
$decode = json_decode(file_get_contents('https://finans.truncgil.com/today.json'), true);
$decode2 = json_decode(file_get_contents('https://www.barimeks.com/api/ticker'),true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Anlık Döviz - Altın bilgileri</title>
</head>
<style>
  
</style>
<body>
    <div id="container" class="container">
        <h1 class="title text-center">Döviz</h1>
<table class="table table-striped w-50 h-50 mx-auto">
<thead>
    <tr>
      <th scope="col">Birim</th>
      <th scope="col">Alış</th>
      <th scope="col">Satış</th>
      <th scope="col">Değişim</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Dolar</th>
      <td><?php print_r( $decode["USD"]["Alış"] )?></td>
      <td><?php print_r( $decode["USD"]["Satış"] )?></td>
      <td><?php print_r( $decode["USD"]["Değişim"] )?></td>
    </tr>
    <tr>
      <th scope="row">Euro</th>
      <td><?php print_r( $decode["EUR"]["Alış"] )?></td>
      <td><?php print_r( $decode["EUR"]["Satış"] )?></td>
      <td><?php print_r( $decode["EUR"]["Değişim"] )?></td>
    </tr>
    <tr>
      <th scope="row">Sterlin</th>
      <td><?php print_r( $decode["GBP"]["Alış"] )?></td>
      <td><?php print_r( $decode["GBP"]["Satış"] )?></td>
      <td><?php print_r( $decode["GBP"]["Değişim"] )?></td>
    </tr>
    
  </tbody>
</table>
<hr>
<h1 class="title text-center">Altın</h1>
<table class="table table-striped w-50 h-50 mx-auto">
<thead>
    <tr>
      <th scope="col">Birim</th>
      <th scope="col">Alış</th>
      <th scope="col">Satış</th>
      <th scope="col">Değişim</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Gram</th>
      <td><?php print_r( $decode["gram-altin"]["Alış"] )?></td>
      <td><?php print_r( $decode["gram-altin"]["Satış"] )?></td>
      <td><?php print_r( $decode["gram-altin"]["Değişim"] )?></td>
    </tr>
    <tr>
      <th scope="row">Çeyrek</th>
      <td><?php print_r( $decode["ceyrek-altin"]["Alış"] )?></td>
      <td><?php print_r( $decode["ceyrek-altin"]["Satış"] )?></td>
      <td><?php print_r( $decode["ceyrek-altin"]["Değişim"] )?></td>
    </tr>
    <tr>
      <th scope="row">Yarım</th>
      <td><?php print_r( $decode["yarim-altin"]["Alış"] )?></td>
      <td><?php print_r( $decode["yarim-altin"]["Satış"] )?></td>
      <td><?php print_r( $decode["yarim-altin"]["Değişim"] )?></td>
    </tr>
    <tr>
      <th scope="row">Tam</th>
      <td><?php print_r( $decode["tam-altin"]["Alış"] )?></td>
      <td><?php print_r( $decode["tam-altin"]["Satış"] )?></td>
      <td><?php print_r( $decode["tam-altin"]["Değişim"] )?></td>
    </tr>
    <tr>
      <th scope="row">Cumhuriyet</th>
      <td><?php print_r( $decode["cumhuriyet-altini"]["Alış"] )?></td>
      <td><?php print_r( $decode["cumhuriyet-altini"]["Satış"] )?></td>
      <td><?php print_r( $decode["cumhuriyet-altini"]["Değişim"] )?></td>
    </tr>
  </tbody>
</table>

</div>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>