<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  $cars = array(
    array(
      'Make' => 'Toyota',
      'Mode' => 'Corolle',
      'Color' => 'White',
      'Mileage' => 2400,
      "Status" => "Sold"
    ),
    array(
      'Make' => 'Toyota',
      'Mode' => 'Camay',
      'Color' => 'Black',
      'Mileage' => 56000,
      "Status" => "Available"
    ),
    array(
      'Make' => 'Honda',
      'Mode' => 'Accord',
      'Color' => 'White',
      'Mileage' => 15000,
      "Status" => "Sold"
    )
  );
  ?>
  <table>
    <tr>
      <td><?php echo $cars[0]["Make"] ?></td>
      <td><?php echo $cars[0]["Mode"] ?></td>
      <td><?php echo $cars[0]["Color"] ?></td>
      <td><?php echo $cars[0]["Mileage"] ?></td>
      <td><?php echo $cars[0]["Status"] ?></td>
    </tr>
    <tr>
      <td><?php echo $cars[1]["Make"] ?></td>
      <td><?php echo $cars[1]["Mode"] ?></td>
      <td><?php echo $cars[1]["Color"] ?></td>
      <td><?php echo $cars[1]["Mileage"] ?></td>
      <td><?php echo $cars[1]["Status"] ?></td>
    </tr>

    <tr>
      <td><?php echo $cars[2]["Make"] ?></td>
      <td><?php echo $cars[2]["Mode"] ?></td>
      <td><?php echo $cars[2]["Color"] ?></td>
      <td><?php echo $cars[2]["Mileage"] ?></td>
      <td><?php echo $cars[2]["Status"] ?></td>
    </tr>
  </table>
</body>

</html>