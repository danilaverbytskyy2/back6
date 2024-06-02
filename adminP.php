<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Users data</h2>

<table id="userTable">
  <thead>
    <tr>
      <th>ФИО</th>
      <th>Email</th>
      <th>Год</th>
      <th>Гендер</th>
      <th>Языки</th>
      <th>Биография</th>
      <th>Согласие</th>
      <th>Действия</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach ($users as $user) :?>
  <tr class="item_row">
        <td> <?php echo $user['fio']; ?></td>
        <td> <?php echo $user['email']; ?></td>
        <td> <?php echo $user['year']; ?></td>
        <td> <?php echo $user['gender']; ?></td>
        <td> <?php echo $user['field-multiple-language']; ?></td>
        <td> <?php echo $user['biography']; ?></td>
        <td> <?php echo $user['checkcontract']; ?></td>
        <td>
        <form action="" method="post"> 
          <button class="btn tur btn-reset" name="Edit" type="submit">Изменить</button>  |
          <button class="btn tur btn-reset" name="Delete"  type="submit">Удалить</button> 
          <input name="id" value="<?=$user['id']?>" type="hidden"/>
          <input name="fio" value="<?=$user['fio']?>" type="hidden"/>
          <input name="email" value="<?=$user['email']?>" type="hidden"/>
          <input name="year" value="<?=$user['year']?>" type="hidden"/>
          <input name="gender" value="<?=$user['gender']?>" type="hidden"/>
          <input name="field-multiple-language" value="<?=$user['field-multiple-language']?>" type="hidden"/>
          <input name="biography" value="<?=$user['biography']?>" type="hidden"/>
          <input name="checkcontract" value="<?=$user['checkcontract']?>" type="hidden"/>
        </form>
      </td>
  </tr>
<?php endforeach;?>
  </tbody>
</table>
<div class="stat">
<table>
    <tr>
        <th>Язык</th>
        <th>Количество</th>
    </tr>
    <?php foreach ($result as $name => $count) :?>
    <tr>
        <td><?=$name?></td>
        <td><?=$count?></td>
    </tr>
    <?php endforeach;?>
</table>
</div>

</body>
</html>