<div class="page-breadcrumb p-0 pt-4 mb-4">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Add new User group</h3>
        </div>
        <div class="col-5 align-self-center"></div>
    </div>
</div>
<?php echo $this->renderWidget('core::notification');?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo $this->link_form . '/' . $this->id ?>" method="post">
                    <div class="form-group row mb-3">
                        <label class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                            <?php $this->ui->field('name'); ?>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-2 col-form-label">Right Access</label>
                        <div class="col-md-10 pt-2">
                            <?php $this->ui->field('access'); ?>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-2 col-form-label">Description</label>
                        <div class="col-md-10">
                            <?php $this->ui->field('description'); ?>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-2 col-form-label">Status</label>
                        <div class="col-md-10">
                            <?php $this->ui->field('status'); ?>
                        </div>
                    </div>
                    <?php $this->ui->field('token'); ?>
                    <div class="text-end">
                        <a href="<?php echo $this->link_list ?>">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </a>
                        <input type="hidden" name="save_close" id="save_close">
                        <button type="submit" class="btn btn-success btn_save_close">Save & Close</button>
                        <button type="submit" class="btn btn-danger">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".btn_save_close").click(function() {
                $("#save_close").val(1);
            });
    });
</script>