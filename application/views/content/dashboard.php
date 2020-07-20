<div class="mdk-drawer-layout__content page">
	<div class="container-fluid page__heading-container">
		<div class="page__heading d-flex align-items-end">
			<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">home</i>
			<div class="flex">
				<h5 class="m-0 content">Dashboard</h5>
			</div>
		</div>
	</div>
	<div class="container-fluid page__container">
		<div class="row card-group-row">
			<div class="col-xl-3 col-md-6 card-group-row__col">
				<div class="card card-group-row__card card-body flex-row align-items-center">
					<div class="position-relative mr-2">
						<img src="<?= base_url(); ?>assets/images/logos/shop.png" alt="Logo Merchant" width="35px" height="45px">
					</div>&nbsp;&nbsp;
					<div class="flex">
						<div class="text-amount">Total Selling Merchant</div>
						<div class="mt-1"><b><?php echo $sellingMerchants ?></b></div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 card-group-row__col">
				<div class="card card-group-row__card card-body flex-row align-items-center">
					<div class="position-relative mr-2">
						<img src="<?= base_url(); ?>assets/images/logos/sales.png" alt="Logo Merchant" width="45px" height="45px">
					</div>&nbsp;&nbsp;
					<div class="flex">
						<div class="text-amount">Total Sales Number</div>
						<div class="mt-1"><b><?php echo $totalNumbers ?></b></div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 card-group-row__col">
				<div class="card card-group-row__card card-body flex-row align-items-center">
					<div>
						<img src="<?= base_url(); ?>assets/images/logos/money.png" alt="Logo Merchant" width="42px" height="40px">
					</div>&nbsp;&nbsp;
					<div class="flex">
						<div class="text-amount">Total Sales Amount</div>
						<div class="mt-1"><b><?php echo formatRupiah($salesAmounts) ?></b></div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 card-group-row__col">
				<div class="card card-group-row__card card-body flex-row align-items-center">
					<div>
						<img src="<?= base_url(); ?>assets/images/logos/dolar.png" alt="Logo Merchant" width="45px" height="50px">
					</div>&nbsp;&nbsp;
					<div class="flex">
						<div class="text-amount">Total Incentive</div>
						<div class="mt-1"><b><?php echo formatRupiah($totalIncentives) ?></b></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid page__container">
		<div class="card">
			<div class="card-body">
				<div class="d-flex align-items-center mb-3">
					<a href="#" class="avatar avatar-sm mr-3">
						<img src="<?= base_url(); ?>assets/images/logos/medal.png" alt="Icon" width="30px" height="33px">
					</a>
					<div class="flex">
						<p class="m-0">
							<a class="text-dark content"><strong>Gold Level</strong></a>
						</p>
					</div>
				</div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</p>
				<div class="col-lg-7">
					<input type="text" data-toggle="ion-rangeslider" data-min="1" data-max="10" data-from="6" data-grid="true">
				</div>
				<br><br><br>
				<div class="col-lg-8 card-form__body card-body">
					<h6 class="content"><b>Level Info</b></h6><br>
					<ul>
						<li>
							<h6 class="content"><b>Silver</b>
							</h6>
						</li>
						<p style="font-size: 12px;" class="text-muted">Transaction Amount: 1-5 Million | Incentive 15%</p>
						<li>
							<h6 class="content"><b>Gold</b>
							</h6>
							<p style="font-size: 12px;" class="text-muted">Transaction Amount: 5-10 Million | Incentive 20%</p>
						</li>
						<li>
							<h6 class="content"><b>Platinum</b>
							</h6>
							<p style="font-size: 12px;" class="text-muted">Transaction Amount: >10 Million | Incentive 25%</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
