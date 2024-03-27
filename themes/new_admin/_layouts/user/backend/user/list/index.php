<div class="page-breadcrumb p-0 pt-4 mb-4">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Users</h3>
        </div>
        <div class="col-5 align-self-center"></div>
    </div>
</div>
<?php echo $this->renderWidget('core::notification');?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
				<?php echo $this->render('backend.user.list.filter', []);?>
				<form action="<?php echo $this->link_list ?>" method="POST" id="formList">
					<input type="hidden" value="<?php echo $this->token ?>" name="token">
					<input type="hidden" value="DELETE" name="_method">
					<table id="datatables-buttons" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th width="10px">
									<input type="checkbox" id="select_all">
								</th>
								<th>Username</th>
								<th>Name</th>
								<th>Email</th>
								<th>Groups</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php while($this->list->hasRow()) echo $this->render('backend.user.list.row', []); ?> 
						</tbody>
					</table>
				</form>
				<div class="row g-3 align-items-center">
					<?php echo $this->renderWidget('core::pagination'); ?>
				</div>
			</div>
		</div>
	</div>
</div>