<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="University Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.js"></script>

</head>
<body>
<!-- banner -->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>  
<div class="banner">	  
	 <div class="header">
			 <div class="logo">
				 <a href="users"><img src="images/logo.jpg" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="users">Home</a></li>
					 <li><a href="appeals">Appeals</a></li>
					 <li><a href="Donors">Donors</a></li>
					 <li><a href="Memorials">Memorials</a></li>
					 <li><a href="items">Items</a></li>
					 <li><a href="libraries">Libraries</a></li>
					 <li><a href="transactions">Transactions</a></li>
					 <li><a href="report_manager/reports">Download Report</a></li>
					 <li><?php 
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
?></li>
				 </ul>
			 </div>
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->

			 <div class="clearfix"></div>
	 </div>
	 <div class="slider">
		 <div class="caption">
			 <div class="container">
				  <div class="callbacks_container">
					  <ul class="rslides" id="slider">
						    <li><h3>Omaha Public Library</h3></li>
							<li><h3>Open your world</h3></li>	
							<li><h3>For the people. By the people</h3></li>	
					  </ul>	
						<div class="clearfix"></div>
				  </div>
			  </div>
		  </div>
	  </div>
	  <div class="banner-grids">
		  <div class="container">
			 <div class="col-md-4 banner-grid">
				 <h3>Author visit</h3>
				 <div class="banner-grid-sec">
					 <div class="grid_info">
						 <div class="blg-pic">
							 <img src="images/m1.jpg" class="img-responsive" alt="">
						 </div>
						 <div class="blg-pic-info">
							 <h4><a href="#">Explore Nature with T.A. Barron at N.P. Dodge Park</a></h4>
							 <p>
T. A. Barron, nature lover and author of the Merlin, Heartlight and Atlantis sagas, will join us at N.P. Dodge Park Pavilion for an afternoon of exploring how every person, young or old, has the power to make a difference in the world and be a hero.  After the main presentation</p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="grid_info">
						 <div class="blg-pic">
							 <img src="images/m2.jpg" class="img-responsive" alt="">
						 </div>
						 <div class="blg-pic-info">
							 <h4><a href="#">Patrick Dobson Author Visit</a></h4>
							 <p>
Join us for an author talk and book signing at the Lewis and Clark National Historic Trail Visitor Center with Patrick Dobson, author of "Canoeing the Great Plains: A Missouri River Summer."</p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 </div>
			 </div>
			 <div class="col-md-4 banner-grid">
				 <h3>Library Card</h3>
				 <div class="banner-grid-sec">
					 <div class="news-grid">
						 <h4><a href="http://omahalibrary.org/my-library/request-library-card">Register for Library CARD</a></h4>
						 <p>If you are a resident of Douglas County, Nebraska and you have never had an Omaha Public Library card, the application below is for you. 
If you are not a resident of Douglas County, Nebraska, please click above to see available options.
If you have had an Omaha Public Library account before, please do not use the application below. Click above for instructions about how to report a lost or stolen card and/or to replace it.
If you are a new applicant who resides in Douglas County, Nebraska, once you have completed and submitted the online application below, your library card will be mailed to you.  </p>
					 </div>
				
				 </div>
			 </div>
			 <div class="col-md-4 banner-grid">
				 <h3>News Letter</h3>
				 <div class="banner-grid-sec news_sec">
					 <div class="news-ltr">
						 <h4><a href="#">Please enter your email address</a></h4>
						 <p>For monthly offer and updates enter your email address below</p>
					 </div>
					 <form>
						 <input type="text" placeholder="Email Address*" required="">
						 <input type="submit" value="SEND">
					 </form>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		  </div>
	  </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		
<div class="users form">
<h1>Users</h1>
<table>
    <thead>
		<tr>
			<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'Username');?>  </th>
			<th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
			<th><?php echo $this->Paginator->sort('created', 'Created');?></th>
			<th><?php echo $this->Paginator->sort('modified','Last Update');?></th>
			<th><?php echo $this->Paginator->sort('status','Status');?></th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>						
		<?php $count=0; ?>
		<?php foreach($users as $user): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			<td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
			<td><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?></td>
			<td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
			<td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
			<td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['modified']); ?></td>
			<td style="text-align: center;"><?php echo $user['User']['status']; ?></td>
			<td >
			<?php if ( $current_user ['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
			<?php echo $this->Html->link(    "Edit",   array('action'=>'edit', $user['User']['id']) ); ?> | 
			<?php
				if( $user['User']['status'] != 0){ 
					echo $this->Html->link(    "Delete", array('action'=>'delete', $user['User']['id']));}else{
					echo $this->Html->link(    "Re-Activate", array('action'=>'activate', $user['User']['id']));
					}
			?>
			<?php endif; ?>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($user); ?>
	</tbody>
</table>



<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
</div>				
<?php echo $this->Html->link( "Add A New User.",   array('action'=>'add'),array('escape' => false) ); ?>

<br/>
</div>
</div>
<!---->
<!---->
</body>
</html>
