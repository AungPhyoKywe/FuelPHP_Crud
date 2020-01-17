<!DOCTYPE html>
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
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            Add Student
        </div>
        <div class="card-body">
    <form class="form-group"enctype="multipart/form-data"method="post"action="/add">
        <div class="container">
        <strong>Name</strong>
        <input class="form-control" name="name" placeholder="name">
        <span class="text-danger">please fill name</span>
        </div>
        <div class="container">
        <strong>Age:</strong>
        <input class="form-control" name="age" placeholder="age">
            <span class="text-danger">please fill age</span>
        </div>
        <div class="container">
        <strong>Gender</strong>
        <select class="form-control"name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <strong>Image:</strong><br>
        <img src="" id="profile-img-tag" style="width: 150px;height: 150px;border-bottom-color: #0c525d" /><br><br>
        <input class="form-group  btn-sm btn-link" type="file" name="image" id="profile-img">
        <br><br>
    <a href="/" class="btn btn-warning">Back to List</a>
    <button type="submit" class="btn btn-success">Save</button>
    </form>
        </div>
    </div>
    </div>
</div>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>
