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
			
							<hr>
								<H2 class="align-center"><?php echo $this->lang->line('editsubject');?></H2>
								<hr>
								<form action="<?php echo base_url().'index.php/Csubject/edit_subject/'.$subject['sub_id'];?>" method="post">
                                
                                <div class="field half first">
								<input type="text" name="name" value="<?=$subject['sub_name']?>">
									</div> 
                                <div class="field half">
								<input type="text" name="midterm" value="<?=$subject['midterm']?>">
                                </div> 
                                <div class="field half first">
								<input type="text" name="final_exam" value="<?=$subject['final_exam']?>">
									</div> 
                                <div class="field half">
								<input type="text" name="presentage" value="<?=$subject['presentage']?>">
								</div> 
                                <div class="field half first">
								<input type="text" name="class_activity" value="<?=$subject['class_activity']?>">
								</div>
								<input type="submit" value="<?php echo $this->lang->line('edit');?>" />
					
                                <a href="<?=base_url();?>index.php/Csubject/index" class="button special scrolly"><?php echo $this->lang->line('cancel');?></a>	
	
                                </form>
                                                            
								
							
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