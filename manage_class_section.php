<?php 

include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM class_section where id=".$_GET['id']);
	foreach ($qry->fetch_array() as $key => $value) {
		$meta[$key] = $value;
	}
}
?>

<div class="container-fluid">
	<form action="" id="manage-class_section">
		<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
		<div class="form-group">
			<label for="class" class="control-label">Class</label>
			<input type="text" id="class" name="class" class="form-control" value="<?php echo isset($meta['class']) ? $meta['class'] : '' ?>" required>
		</div>
		<div class="form-group">
			<label for="section" class="control-label">Section</label>
			<input type="text" id="section" name="section" class="form-control" value="<?php echo isset($meta['section']) ? $meta['section'] : '' ?>" required>
		</div>
	</form>
</div>
<script>
	$('#manage-class_section').submit(function(e){
		e.preventDefault();

		start_load()
		$.ajax({
			url:'ajax.php?action=save_class_section',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
			},
			success:function(resp){
				resp = JSON.parse(resp)
				if(resp.status == 1){
					$('.modal').modal('hide')
					end_load()
					alert_toast('Data successfully saved','success');
					load_tbl()

				}else{
					end_load()
					alert_toast(resp.msg,'danger');

				}
			}
		})

	})
</script>