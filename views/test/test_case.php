<?php

include_once ROOT.'/template/php/header.php';
include_once ROOT."/template/php/modal_case.php";
?>
<div class="container-fluid">
	<div class="row">
		<div class="w-100 m-2 ml-3"><button class="btn btn-primary">Add</button></div>
		<?php foreach ($res as $items) {
			?>
			<div class="col-md-2 d-flex justify-content-center" id=<?php echo "\"".$items['id_test_case']."\"";?>>
				<div style="width: 100%;padding: 15px;border-radius: 5px; border: 1px solid black">
					<div class="w-100 d-flex justify-content-center"><p style="font-size: 20px;"><?php echo $items['name_case']; ?></p></div>
					<div style="overflow-wrap: break-word;" class="w-100"><?php echo $items['text_case']; ?></div>
				</div>
			</div>
		<?php }?>

	</div>
</div>
