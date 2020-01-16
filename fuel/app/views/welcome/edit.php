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

    <form class="form-group" action="/edit/<?php echo $person->id?>"method="post"enctype="multipart/form-data">

        <label>Name</label>
        <input class="form-control" value="<?php echo $person->name?>" name="name" placeholder="name">
        <label>Age:</label>
        <input class="form-control" value="<?php echo $person->age?>"name="age" placeholder="age">
        <label>Gender</label>
        <input class="form-control"value="<?php echo $person->gender?>" name="gender" placeholder="gender">
        <br>
        <a href="/" class="btn btn-warning">Back to List</a>
        <button type="submit" class="btn btn-success">Update</button>
    </form>

</div>
