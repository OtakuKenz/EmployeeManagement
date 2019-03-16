<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('register'); ?>
<h5>
    <input type="text" name="fname" value="" size="50" />
</h5>
<h5>
    <input type="text" name="mname" value="" size="50" />
</h5>
<h5>
    <input type="text" name="lname" value="" size="50" />
</h5>
<div><input type="submit" value="Submit" /></div>
</form>

