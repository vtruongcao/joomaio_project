<div class="modal fade" id="formEditTag" aria-labelledby="formEditTagLabel" tabindex="-1" aria-hidden="true" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add new Tag</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="form_tag">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                                <?php $this->ui->field('name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-md-2 col-form-label">Description</label>
                            <div class="col-md-10">
                                <?php $this->ui->field('description'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 col-form-label">Parent Tag</label>
                            <div class="col-md-10">
                                <?php $this->ui->field('parent_id'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php $this->ui->field('token'); ?>
                    <input class="form-control rounded-0 border border-1" id="_method" type="hidden" name="_method" value="POST">
                    <div class="row">
                        <div class="col-6 text-right pr-0">
                            <button type="button" class="btn btn-outline-secondary fs-4" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-6 text-right pr-0 ">
                            <button type="submit" class="btn btn-outline-success fs-4">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>