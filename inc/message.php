<?php
    session_start();    // session is started
    if(isset($_SESSION['message'])): //check if the session message is set or not, if set, perform the operation bellow..
?>

<div class="alert alert-<?php echo $_SESSION['msg_type'];?>"> <!--In the line 6, php tag takes the bootstrap alert type(danger/success) declared in the delete_record and data_entry files.-->
    
    <?php

        echo $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
</div>
    <?php endif ?>  <!--End of if loop-->