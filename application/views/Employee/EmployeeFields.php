<div class="form-row">
<input type="text" name="Id" value="<?php echo isset($Id)?$Id:null;?>" hidden>
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">First name</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="First Name" name="firstname" value="<?php echo isset($FirstName)?$FirstName:null;?>" required>
        <div class="invalid-feedback">
            Must Enter First Name
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationCustom02">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Middle Name" name="middlename" value="<?php echo isset($MiddleName)?$MiddleName:null;?>" required>
        <div class="invalid-feedback">
            Must Enter Middle Name. If middle name not present, enter "N/A"
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationCustom03">Last name</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="Last Name" name="lastname" value="<?php echo isset($LastName)?$LastName:null;?>" required>
        <div class="invalid-feedback">
            Must Enter Last Name
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-5 mb-4">
        <label for="validationCustom04">Birthdate</label>
        <input type="date" class="form-control" id="validationCustom04" placeholder="Birthdate" name="birthdate" value="<?php echo isset($Birthdate)?$Birthdate:null;?>" required>
        <div class="invalid-feedback">
            Must Enter Birthdate
        </div>
    </div>
    <div class="col-md-5 mb-4">
        <label for="validationCustom05">Hire Date</label>
        <input type="date" class="form-control" id="validationCustom05" placeholder="Hire Date" name="hiredate" value="<?php echo isset($HireDate)?$HireDate:null;?>" required>
        <div class="invalid-feedback">
            Must Enter Hire Date
        </div>
    </div>
</div>