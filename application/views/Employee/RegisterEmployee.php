<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('Employee'); ?>">Employee List</a></li>
    <li class="breadcrumb-item active" aria-current="page">Register Employee</li>
  </ol>
</nav>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12" id="AlertDiv">
            </div>
        <div class="col-12">
            <h5 class="card-title">Register Employee</h5>
        </div>
        </div>
        <div class="container">
            <form class="needs-validation" novalidate id="form" method="POST">
                <?php echo $EmployeeFields; ?>
                <a href="<?php echo base_url('Employee') ?>" class="btn btn-secondary" >Back</a>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>



<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }else{
            event.preventDefault();
            $.ajax({
                type:"POST",
                url: "<?php echo base_url('Employee/Register') ?>",
                data: $("#form").serialize(),
                success: function(result){
                    $("#form").trigger("reset");
                    $("#AlertDiv").html('<div class="alert alert-success" role="alert">Employee Registered<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                },
                error: function(result){
                    alert("error");
                }
            });
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
</script>

