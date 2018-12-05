<?php

include_once ROOT.'/template/php/header.php';
?>
<div class="container-fluid">
	<div class="row">
		<div class="w-100 m-2 ml-3"><button class="btn btn-primary">Add</button></div>
		<?php foreach ($res as $items) {
			?>
			<div class="col-md-2 d-flex justify-content-center">
				<button class="btn btn-success w-100 mt-2" 
				id=<?php echo "\"".$items['id_test_suite']."\"";?>
					><div style="width: 100%; display: flex;justify-content: center;padding: 15px">
					<p><?php echo $items['name_suite']; ?></p>
				</div>
				</button>
			</div>
		<?php }?>

	</div>
</div>


<script type="text/javascript">
	$('.btn-primary').click(function(){
		var data = prompt("");

		var request = new XMLHttpRequest();

        request.onreadystatechange = function () {
           if (request.readyState == '4'){
                alert("Yes");
            }
        }

        request.open('POST', '/test/addtest');
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        request.send('text='+ data);
	});
</script>