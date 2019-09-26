<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $title_for_layout; ?></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      
        <?php echo $this->Html->css('style'); ?>
    </head>
    <body>

        <div id="wrap">
            <!-- start header -->
            <div id="header">
                <!-- Insert website name here-->
                <div id="logo"><h1 style="color:#fff; font-size:40px;"><a href="#">CakePHP</a></h1></div>	
            </div>

            <!-- end header -->
            <div id="content">
                <!-- Start Side Column-->	
                <div class="side-col">  	
                    <h2>Navigation</h2>
                    <ul>
                        <li class="grey"><a href="/cakephp">Front Page</a></li>
                        <li class="grey">
                        <?php if (isset($username)):?> Welcome, <?php echo $username; ?> <br>
                            <a href="/cakephp/users/logout">Logout</a> 
                        <?php else: ?>
                            Welcome, Guest. <br>
                            
                            <a href="/cakephp/users/login">Login</a>
                        <?php endif; ?>
                        </li>
                    </ul>

                </div>

                <div class="main-col">
                    <h2><?php echo $page_title; ?></h2>
                    <p> 
                        <?php echo $this->Flash->render(); ?>

			             <?php echo $this->fetch('content'); ?>
                    </p>
                </div>

                <div class="clearfix">

                </div></div>	
            <!--Start Footer-->  
            <div id="footer">
                <!--Copyright Notice-->
                <p style="float:left;">
                    � 2014. All Rights Reserved. 
                </p> 
            </div>
            <!-- /footer -->
        </div>
    </body>
</html>


<?php echo $this->Html->charset(); ?>