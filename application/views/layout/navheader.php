<div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
	<div class="mdk-header__content">
		<div class="navbar navbar-expand-sm navbar-main navbar-light bg-white  pr-0" id="navbar" data-primary>
			<div class="container-fluid p-0">
				<!-- Navbar toggler -->
				<button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Navbar Brand -->
				<a href="index.html" class="navbar-brand ">
					<img src="<?= base_url(); ?>assets/images/logos/logo-cashlez.png" alt="Logo Cashlez" width="150px" height="50px">
					<h4>Distro Merchant</h4>
				</a>
				<ul class="nav navbar-nav ml-auto d-none d-sm-flex">
					<li class="nav-item dropdown">
						<a href="#account_menu" class="btn btn-rounded btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Theoarnan <span class="caret"></span></a>
						<div id="account_menu" class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Account</a>
							<a class="dropdown-item" href="<?= site_url('login/logout')?>">Logout</a>
						</div>
					</li>
				</ul>
				<ul></ul>
			</div>
		</div>
	</div>
</div>
