<?php
include_once(ROOT."/template/php/header.php");
if ($_SESSION['login'] == '')
    header("location: /login");
?>
<button class="btn btn-primary">add</button>
<div class="container_fluid m-0 p-0">
    <div class="row m-0 p-0">
      <div class="col-md-3 m-0 p-0">
        
      </div>
      <div class="col-md-9 col-sm-6  m-0 p-0">
        <div class="grid">
         <?php
          foreach ($res as $items) {
            ?>
            <?php if (isset($items['notes_id'])) :?>
              <div class="item">
                <div class="item-content">
                  <div >
                    <?php
                      if (isset($items['notes_name']))
                        echo "<p style='margin: 0px'>".addslashes($items['notes_name'])."</p>";
                      else
                        echo "No Name";?>
                    <hr style="margin: 0px">
                  </div>
                  <div style="padding: 10px 10px">
                    <?php echo $items['notes_text'];?>
                  </div>
                </div>
              </div>
            <?php endif; ?>

         <?php  } ?>
        </div>
      </div>
    </div>
</div>
<?php
include_once(ROOT."/template/php/footer.php");
?>