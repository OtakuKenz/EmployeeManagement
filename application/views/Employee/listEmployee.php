<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-6">
       <h5 class="card-title">Employee Masterlist</h5>
      </div>
      <div class="col-6 text-right">
        <button type="button" class="btn btn-outline-secondary">Add Employee</button>
      </div>
    </div>
    <br>
     <table id='table'>
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Hire Date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($table as $data) ?>
          <td><?php echo $data->FirstName." ".$data->MiddleName." ".$data->LastName?></td>
          <td><?php echo $data->Birthdate?></td>
          <td><?php echo $data->HireDate?></td>
        </tbody>
      </table>
  </div>
</div>
<script type="text/javascript" src="<?php echo '../js/datatable.js'; ?>" ></script>
