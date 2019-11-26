<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>JRS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
	</head>
	<body>
	<!-- Header -->
	<header id="header" >
	<div class="logo"><a href="<?=base_url()?>index.php/Caccount/index"><?php echo $this->lang->line('home');?></a></div>
	<a href="<?=base_url()?>index.php/Caccount/login_user"><?php echo $this->lang->line('login');?></a>
			
				<a href="<?php echo base_url();?>index.php/Cptotection/index"><?php echo $this->lang->line('protection');?></a>
			
				<?php echo anchor('Caccount/lang_load/english',"English");?>
			<?php echo anchor('Caccount/lang_load/dari',"Dari");?>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
		<nav id="menu">
		<ul class="links">
				<li><a href="<?=base_url()?>index.php/Ccourse/index"><?php echo $this->lang->line('courses');?></a></li>
					<li><a href="<?=base_url()?>index.php/Cclass/index"><?php echo $this->lang->line('classes');?></a></li>
					<li><a href="<?=base_url()?>index.php/Cteacher/index"><?php echo $this->lang->line('teachers');?></a></li>
					<li><a href="<?=base_url()?>index.php/Csubject/index"><?php echo $this->lang->line('subjects');?></a></li>
					<li><a href="<?=base_url()?>index.php/Caccount/listAccount"><?php echo $this->lang->line('accounts');?></a></li>
					<li><a href="<?=base_url()?>index.php/Caccount/admin"><?php echo $this->lang->line('editaccount');?></a></li>
					<li><a href="<?=base_url()?>index.php/Caccount/login_user"><?php echo $this->lang->line('loginuser');?></a></li>
					<li><a href="<?php echo base_url();?>index.php/Caccount/logout_admin"><?php echo $this->lang->line('logoutadmin');?></a></li>
					<li><a href="<?php echo base_url();?>index.php/Cprotection/index"><?php echo $this->lang->line('protection');?></a></li>
				</ul>
			</nav>

		<!--Create account -->
				<section id="one" class="wrapper style2">
				<div class="inner">
					<div>
						<div class="box">
							<div class="image fit">
								<img src="images/pic01.jpg" alt="" />
							</div>
					<section>
						<div class="box">
							<div class="content">
							<a href="<?php echo base_url(),"index.php/Caccount/login"; ?>" class="button special scrolly"><?php echo $this->lang->line('newaccount');?></a>
							<hr>
							
								<H2 class="align-center"><?php echo $this->lang->line('allaccount');?></H2>
								<hr>
								<table data-role="table" data-mode="columntoggle" class="ui-responsive" id="myTable">
									<thead>
										<tr>
										<th><?php echo $this->lang->line('id');?></th>
										<th ><?php echo $this->lang->line('name');?></th>
										<th ><?php echo $this->lang->line('lastname');?></th>
										<th ><?php echo $this->lang->line('username');?></th>
										<th ><?php echo $this->lang->line('password');?></th>
										<th><?php echo $this->lang->line('email');?></th>
										<th> <?php echo $this->lang->line('edit');?></th>
										<th> <?php echo $this->lang->line('delete');?></th>
										</tr>
									</thead>
									<tbody>
                                    <?php
                                    foreach($account as $row){?>
                                    </tr>
                                      <td> <?= $row->acc_id; ?></td>
									  <td> <?= $row->acc_name; ?></td>
                                      <td> <?= $row->acc_lastname; ?></td>
									  <td> <?= $row->username; ?></td>
									  <td> <?= $row->password; ?></td>
									  <td> <?= $row->acc_email; ?></td>
									  
                                      <td>
                                           <a href="<?php echo base_url().'index.php/Caccount/edit/'.$row->acc_id;?>" ><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></td>
										   <td>     <a href="<?php echo base_url().'index.php/Caccount/drop_account/'.$row->acc_id;?>"> <button data-toggle="tooltip" title="Delete" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        </td>
                                      </tr>  
                                   <?php }
                                    ?>
														
										
										</tr>
									</tbody>
									</table>
									<div class="custom-pagination">
							
									<h1> <?php echo $this->pagination->create_links();?><h1>
									</div>
							</div>
									
								
								
                            </div>
								
							
						</div>
				
					</section>
					</div>
				</div>
				</section>	
				</div>
			</section>




		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					
					
				</div>
			</footer>

		<!-- Scripts -->
			<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/skel.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/util.js"></script>
			<script src="<?php echo base_url();?>assets/js/main.js"></script>

	</body>
</html>