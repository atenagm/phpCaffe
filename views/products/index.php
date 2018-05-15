<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">description</th>
      <th scope="col">calories</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($products as $products): ?>
        <tr>
        <td><?php echo $products->name; ?> </td>
        <td><?php echo $products->price; ?></td>
        <td><?php echo $products->description; ?></td>
        <td><?php echo $products->calories; ?></td>
        </tr>
<?php endforeach;?>
  </tbody>
</table>
</body>
</html>
