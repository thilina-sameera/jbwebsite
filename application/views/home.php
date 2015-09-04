<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container-fluid">

<!-- <nav class="navbar navbar-inverse">
  	<ul class="nav navbar-nav">

  		<?php foreach ($catlist as $cat): ?>
  			<?php echo '<li><a href="?pageid='.$cat->idcategory.'">'.$cat->catName.'</a>' ?>
  		<?php endforeach ?>

  	</ul>
</nav> -->
<!-- 
<?php foreach ($query as $row): ?>
	<div>
		<?php echo '<img src="../../Images/'.$row->imagePath.'" width="200" height="200" />'; ?>
	</div>
<?php endforeach ?> -->

<?php $this->load->view("nav"); ?>

<?php if(isset($items)){ ?>
<?php foreach ($items as $item): ?>
	<div class="panel panel-primary">
		<div class="panel-heading"><?php echo $item->subCatName; ?></div>
  		<div class="panel-body">  			
  			<?php echo '<img src="../../Images/'.$item->imagePath.'"</img>'?>
  			<?php echo '<a href="Pages?subpage='.$item->idsubcat.'"> <button type="button" class="btn btn-primary">Select</button></a>'; ?>
	</div>
<?php endforeach ?>	
<?php }?>

<?php if(isset($subpage)){ ?>

<?php foreach ($subpage as $sub): { ?>
	<?php echo '<img src="'.$sub->imagePath.'"/>;'; ?>	
	<?php } ?>
<?php endforeach ?>
<?php } ?>

</div>

</body>

</html>