<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="arrow_box">
<?php

 dynamic_sidebar( 'sidebar-1' ); 

?>

</div>
