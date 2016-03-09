<?php
require_once("includes/funcs/includes.php");
generateHead("Testimonials");
?>
<div class="row">
<div class="col-md-12 text-center title-head"><h2>See what our students have to say about us!</h2></div>
</div>
<div class="testimonials">
<ul>
<?php
showTestimonials();
?>
</ul>
</div>
<?php
footer("","");
?>