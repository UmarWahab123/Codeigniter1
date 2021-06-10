<?php include 'header.php';?>
<div class="container" style="margin-top: 50px;">
<div class="row">
  <a href="connect" class="btn btn-success">Add Student</a>

</div>
</div>

<html>
<head>

      <title>Student List</title>

</head>
<body>
<div class="container" style="margin-top: 50px;">
<div class="table">
<table>
<thead>
<tr>
<th>Std Name</th>
<th>Edit</th>
<th>Delete</th>
</tr>
      <tbody>
      <?php if (count($articles)): ?>
     <?php foreach ($articles as $art): ?>

        <tr>

       <td><?=  $art->username;?></td>
       <td>
        <a href='edituser/<?=$art->id?>' class="btn btn-success">
          Edit
        </a>
       <!-- <?=
form_open('admin/edituser'),
form_hidden('id', $art->id),
form_submit(['name' => 'submit', 'value' => 'Edit', 'class' => 'btn btn-success']),
form_close();
?> -->
       <td>
       <?=
form_open('admin/deluser'),
form_hidden('id', $art->id),
form_submit(['name' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-danger']),
form_close();
?>
       </tr>
       <?php endforeach;?>
       <?php endif;?>
     </tbody>

</thead>
</table>
</div>
</div>
</body>
</html>
<?php include 'footer.php';?>


