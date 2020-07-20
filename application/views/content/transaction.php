<div class="mdk-drawer-layout__content page">
	<div class="container-fluid page__heading-container">
		<div class="page__heading d-flex align-items-end">
			<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">assignment</i>
			<div class="flex">
				<h5 class="m-0 content">Transactions</h5>
			</div>
		</div>
	</div>
	<div class="container-fluid page__container">
		<div class="card">
			<div class="card-body-lg">
				<table id="example" class="table" style="width:100%">
					<thead>
						<tr>
							<th><a href="javascript:void(0)" class="sort" data-sort="js-lists-values-merchant-name">Merchant Name</a></th>
							<th><a href="javascript:void(0)" class="sort" data-sort="js-lists-values-merchant-name">Total Transaction</a></th>
							<th><a href="javascript:void(0)" class="sort" data-sort="js-lists-values-merchant-name">Total Sales Volume</a></th>
							<th><a href="javascript:void(0)" class="sort" data-sort="js-lists-values-merchant-name">Total Incentive</a></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($transactions as $trx) {
						?>
							<tr>
								<td style="color: #00aced;"><a type="button" data-toggle="modal" data-target="#modal-details"><?= $trx->distributor_name ?></a></td>
								<td style="color: #000000;"><?= $trx->total_selling_merchants ?></td>
								<td style="color: #000000;"><?= formatRupiah($trx->total_sales_idr)  ?></td>
								<td style="color: #000000;"><?= formatRupiah($trx->total_incentive_idr)  ?></td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table>
				<ul class="pagination m-0">
					<li class="page-item disabled">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true" class="material-icons">chevron_left</span>
							<span class="sr-only">Prev</span>
						</a>
					</li>
					<li class="page-item active">
						<a class="page-link" href="#" aria-label="1">
							<span>1</span>
						</a>
					</li>

					<li class="page-item">
						<a class="page-link" href="#" aria-label="2">
							<span>2</span>
						</a>
					</li>

					<li class="page-item">
						<a class="page-link" href="#" aria-label="3">
							<span>3</span>
						</a>
					</li>

					<li class="page-item">
						<a class="page-link" href="#" aria-label="4">
							<span>4</span>
						</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span class="sr-only">Next</span>
							<span aria-hidden="true" class="material-icons">chevron_right</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>