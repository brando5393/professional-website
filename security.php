<html>
<?php
include  './head.php'
?>
<body>
<?php
include  './nav.php';
include_once("analyticstracking.php");
?>
        <div  class="container">

            <div  class="row  row-offcanvas  row-offcanvas-right">

                <div  class="col-xs-12  col-sm-9">
                    <p  class="pull-right  visible-xs">
                        <button  type="button"  class="btn  btn-primary  btn-xs"  data-toggle="offcanvas">Toggle  nav</button>
                    </p>
                    <div  class="jumbotron">
                        <h1>Security</h1>
                        <p>Computer  security  is  information  security  as  applied  to  computers  and  networks.</p>
                    </div>
                    <div  class="row">
                        <div  class="col-6  col-sm-6  col-lg-4">
                            <h2>Snort</h2>
                            <p>Snort  is  a  <b>free</b>  open  source  network  intrusion  prevention  and  detection  system  (IDS/IPS).  I  would  be  happy  to  install  and  configure  this  software  for  you  to  help  keep  your  systems  safe.</p>
                        </div><!--/span-->
                        <div  class="col-6  col-sm-6  col-lg-4">
                            <h2>Splunk</h2>
                            <p>I  use  Splunk  as  a  front  end  for  monitoring  snort  or  Tshark  captures.  I  highly  recommend  this  product  to  anyone  who  is  not  familiar  with  a  command  line  interface  or  wants  to  view  multiple  sets  of  data  in  one  secure  location.  </p>
                        </div><!--/span-->
                        <div  class="col-6  col-sm-6  col-lg-4">
                            <h2>Wireshark</h2>
                            <p>Wireshark is a network protocal analyzer that will give in detail information about the individual packets going through the wires of your network. I will preform captures for <b>Research purposes only.</b> </p>
                        </div><!--/span-->
                        <div  class="col-6  col-sm-6  col-lg-4">
                            <h2>Tshark</h2>
                            <p>Tshark is a text based version of Wireshark altough it does require a more command line based background to use, it is quite effective if you still want to watch network trafic without slowing down your system(s) with GUIs.</p>
                        </div><!--/span-->
                        <div  class="col-6  col-sm-6  col-lg-4">
                            <!--
			    <h2>Heading</h2>
                            <p>Donec  id  elit  non  mi  porta  gravida  at  eget  metus.  Fusce  dapibus,  tellus  ac  cursus  commodo,  tortor  mauris  condimentum  nibh,  ut  fermentum  massa  justo  sit  amet  risus.  Etiam  porta  sem  malesuada  magna  mollis  euismod.  Donec  sed  odio  dui.  </p>
                            <p><a  class="btn  btn-default"  href="#"  role="button">View  details  &raquo;</a></p>
                        </div><!--/span-->
                        <div  class="col-6  col-sm-6  col-lg-4">
                            <!--
			    <h2>Heading</h2>
                            <p>Donec  id  elit  non  mi  porta  gravida  at  eget  metus.  Fusce  dapibus,  tellus  ac  cursus  commodo,  tortor  mauris  condimentum  nibh,  ut  fermentum  massa  justo  sit  amet  risus.  Etiam  porta  sem  malesuada  magna  mollis  euismod.  Donec  sed  odio  dui.  </p>
                            <p><a  class="btn  btn-default"  href="#"  role="button">View  details  &raquo;</a></p>
                        </div><!--/span-->
                    </div><!--/row-->
                </div><!--/span-->
                </div><!--/span-->
            </div><!--/row-->

            <hr>
<?php
include  './footer.php'
?>
</body>
</html>