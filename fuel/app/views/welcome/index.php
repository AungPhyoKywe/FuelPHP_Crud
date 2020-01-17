<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FuelPHP Framework</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


</head>

    <div class="container">


        <h3>First FuelPHP CRUD</h3><br><br>
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-header">
        <a href="/add" class="btn-sm btn-primary">Add New</a>
            </div>
            <div class="card-body ">
	    <table class="table table-hover">
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
                            <img src="/assets/img/2de3bcf2d60a579341ec22160d012676.jpg"width="100px" height="100px">
                        </td>
                        <td><?php echo($p->name); ?></td>
                        <td><?php echo($p->age); ?></td>
                        <td><?php echo($p->gender); ?></td>
                        <td>
                        <a href="/edit/<?php echo($p->id); ?>"class="btn-sm btn-success">edit</a>
                        <a href="#"onclick="confirmation(<?php echo($p->id); ?>)" class="btn-sm btn-danger">delete</a>
                        </td>
                    </tr>
            <?php }?>
            </tbody>
        </table>
            </div>
    </div>
    </div>
</body>
</html>

<script>
    function confirmation($id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Shortlisted!',
                    text: 'Candidates are successfully shortlisted!',
                    icon: 'success'
                }).then(function () {
                    window.location.href='/delete/'+$id;
                })
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        })
    }
</script>
