<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?= $title; ?></h1>
		</div>

		<div class="section-body">
			<div class="card">
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>
					<div class="table-responsive">
						<table class="table table-bordered table-md datatables" id="datatables">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Nama Alternatif</th>
									<th>Total Nilai</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($perankingan as $rank) : ?>
									<tr>
										<td class="text-center"><?= $no++; ?></td>
										<td><?= $rank['nama_alternatif']; ?></td>
										<td class="text-center"><?= $rank['total_nilai']; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>