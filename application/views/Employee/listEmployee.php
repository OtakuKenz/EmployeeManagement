<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Employee List</li>
  </ol>
</nav>

<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-6">
       <h5 class="card-title">Employee Masterlist</h5>
      </div>
      <div class="col-6 text-right">
        <a id="add-new-Employee" class="btn btn-outline-secondary" href="Employee/RegisterEmployee"><i class="fas fa-plus"></i>&nbsp Add Employee</a>
      </div>
    </div>
    <br>
     <table id='table' class="table table-striped">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Hire Date</th>
            <th scope="col" width="150"></th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
  </div>
</div>



<script type="text/javascript">

$.ajax({
        type: "POST",
        url: "Employee/EmployeeDataTable",
        cache: false,
        success: function(html){
            //html is a json_encode array so we need to parse it before using
            var result = jQuery.parseJSON(html);
            $('#table').DataTable( {
                //here is the solution
                "data": result,
                "columns" : [
                      { data: "FirstName" },
                      { data: "MiddleName" },
                      { data: "LastName" },
                      { data: "Birthdate" },
                      { data: "HireDate" },
                      {data: "Id" , render : function ( data, type, row, meta ) {
                          var ret = '<div class="row">';
                          ret +='<form method="POST" action="<?php echo base_url('Employee/EmployeeEdit');?>"><div class="col-12 text-center"><input hidden name="Id" value="'+data+'"></input><button type="submit" class="btn btn-outline-warning"><i class="fas fa-pen"></i>&nbsp Edit</button></div>';
                          ret += '</form></div>';
                          return ret;
                        }}
                   ]
            });
        }
    });
    
</script>
