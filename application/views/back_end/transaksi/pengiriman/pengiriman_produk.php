<!-- Page-header start -->
<div class="page-header">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<div class="d-inline">
					<h4>Pengiriman Produk</h4>
					<span>Management Data Pengiriman Produk</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="page-header-breadcrumb">
				<ul class="breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('admin') ?>"> <i class="feather icon-home"></i> </a>
					</li>
					<li class="breadcrumb-item"><a href="#!">Transaksi</a>
					</li>
					<li class="breadcrumb-item"><a href="<?php echo base_url('back_end/produk/Pengiriman_produk') ?>">Pengiriman Produk</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Page-header end -->

<!-- Page-body start -->
<div class="page-body">
	<!-- DOM/Jquery table start -->
	<div class="card">
		
		<div class="card-block">
			
			<?= $this->session->flashdata('pesan'); ?>

			<div class="table-responsive dt-responsive">
				<table id="dom-jqry" class="table table-striped table-bordered nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>No Faktur</th>
							<th>Customer</th>
							<th>Status</th>
							<th>Resi</th>
							<th>Edit Status & Resi</th>
							<th>Detail</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i=1;
						foreach ($pengiriman as $data):?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?php echo $data->penjualan_id; ?></td>
								<td><?php echo substr($data->penjualan_penerima,0,10) ?></td>
								<td><?php echo $data->penjualan_status; ?></td>
								<td><?php echo substr($data->penjualan_resi,0,15) ?></td>

								<td><a class="edit" href="<?= site_url(); ?>back_end/Pengiriman_produk/edit/<?= $data->penjualan_id ?>"><button class="btn btn-success"><i class="feather icon-edit"></i></button></a></td>
								
								<td><a class="detail" href="<?= site_url(); ?>back_end/penjualan/detail/<?= $data->penjualan_id; ?>"><button class="btn btn-info"><i class="feather icon-info"></i></button></a></td>

								<td><a class="delete" onclick="deleteConfirm('<?= site_url(); ?>back_end/Penjualan/delete/<?= $data->penjualan_id ?>')" href="#!"><button class="btn btn-danger"><i class="feather icon-trash"></i></button></a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- DOM/Jquery table end -->
</div>