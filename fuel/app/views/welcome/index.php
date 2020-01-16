<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FuelPHP Framework</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


	</head>

    <div class="container">
        <h3>First FuelPHP CRUD</h3><br><br>
        <a href="/add" class="btn btn-primary">Add New</a>
	    <table class="table">
            <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Action</th>
                        </tr>
            </thead>

            <tbody>
            <?php foreach ($person as $p) { ?>
                    <tr>
                        <td>

                            <?php
                            //echo Asset::img($p->image,array('class'=>'img-responsive', 'alt'=>'...'));
                            ?>
                            <img src="/assets_rn/2de3bcf2d60a579341ec22160d012676.jpg" alt="testing image"style="border: 1px solid red;" width="100px" height="100px">
                        </td>
                        <td><?php echo($p->name); ?></td>
                        <td><?php echo($p->age); ?></td>
                        <td><?php echo($p->gender); ?></td>
                        <td>
                        <a href="/edit/<?php echo($p->id); ?>"class="btn btn-success">edit</a>
                        <a href="/delete/<?php echo($p->id); ?>"class="btn btn-danger">delete</a>
                        </td>
                    </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>
