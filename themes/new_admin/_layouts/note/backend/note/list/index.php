<div class="page-breadcrumb p-0 pt-4 mb-4">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Notes</h3>
        </div>
        <div class="col-5 align-self-center"></div>
    </div>
</div>
<?php echo $this->renderWidget('core::notification'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
				<?php echo $this->render('backend.note.list.filter', []); ?>
				<form action="<?php echo $this->link_list ?>" method="POST" id="formList">
					<input type="hidden" value="<?php echo $this->token ?>" name="token">
					<input type="hidden" value="DELETE" name="_method">
					<table id="datatables-buttons" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th width="10px">
									<input type="checkbox" id="select_all">
								</th>
								<th>Title</th>
								<th>Type</th>
								<th>Tags</th>
								<th>Author</th>
								<th>Created At</th>
								<?php if($this->mode != 'share-note'): ?>
								<th>Action</th>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php while ($this->list->hasRow()) echo $this->render('backend.note.list.row', []); ?>
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

<div class="modal fade" id="noteNewModal" aria-labelledby="noteNewModalTitle" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="noteNewModalTitle">Create Note</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-around">
				<?php foreach($this->types as $type) : ?>
					<h4 class="text-nowrap">
						<a class="mx-3" href="<?php echo $type['link']?>"><?php echo $type['title']?></a>
					</h4>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<form class="hidden" method="POST" id="form_delete">
    <input type="hidden" value="<?php echo $this->token ?>" name="token">
    <input type="hidden" value="DELETE" name="_method">
</form>
<?php echo $this->render('backend.note.list.javascript', []); ?>
