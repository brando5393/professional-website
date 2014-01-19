<html>
<?php
include  './head.php'
?>
<body>
<?php
include  './nav.php';
include_once("analyticstracking.php");
?>
	<!--  Marketing  messaging  and  featurettes
        ==================================================  -->
        <!--  Wrap  the  rest  of  the  page  in  another  container  to  center  all  the  content.  -->

        <div  class="container  marketing">
<form name="contactform" method="post" action="email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">
 
 </td>
 
</tr>
 
</table>
 
</form>
<?php
include  './footer.php'
?>

        </div><!--  /.container  -->


        <!--  Bootstrap  core  JavaScript
        ==================================================  -->
        <!--  Placed  at  the  end  of  the  document  so  the  pages  load  faster  -->
        <script  src="../../assets/js/jquery.js"></script>
        <script  src="../../dist/js/bootstrap.min.js"></script>
        <script  src="../../assets/js/holder.js"></script>

</body>
</html>