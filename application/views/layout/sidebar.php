<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
	<div class="mdk-drawer__content">
		<div class="sidebar sidebar-left simplebar sidebar-light bg-light" data-simplebar>
			<div class="sidebar-heading sidebar-m-t">Menu</div>
			<div class="sidebar-block p-0 mb-0">
				<ul class="sidebar-menu" id="components_menu">
					<li <?php if($this->uri->segment(1)=="Welcome"){echo 'class="active"';}?> class="sidebar-menu-item">
						<a class="sidebar-menu-button" href="<?= site_url('Welcome') ?>">
							<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">home</i>
							<span class="sidebar-menu-text">Dashboard</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(1)=="Transaction"){echo 'class="active"';}?> class="sidebar-menu-item">
						<a class="sidebar-menu-button" href="<?= site_url('Transaction') ?>">
							<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">assignment</i>
							<span class="sidebar-menu-text">Transaction</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
