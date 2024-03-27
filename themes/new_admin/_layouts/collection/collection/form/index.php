
<?php
    $this->theme->add($this->url . 'assets/css/select2.min.css', '', 'select2-css');
    $this->theme->add($this->url . 'assets/js/select2.full.min.js', '', 'bootstrap-select2');
?>
<div class="page-breadcrumb p-0 pt-4 mb-4">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit collection</h3>
        </div>
        <div class="col-5 align-self-center"></div>
    </div>
</div>
<?php echo $this->renderWidget('core::notification'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form enctype="multipart/form-data" action="<?php echo $this->link_form . '/' . $this->id ?>" method="post" id="form_submit">
                    <input id="_method" type="hidden" name="_method" value="<?php echo $this->id ? 'PUT' : 'POST' ?>">
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-lg-2 form-label">Name</label>
                            <div class="col-lg-10">
                                <?php $this->ui->field('name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-lg-2 form-label">Select Object</label>
                            <div class="col-lg-10">
                                <?php $this->ui->field('select_object'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-lg-2 form-label">Date range</label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-6 hidden-label">
                                        <?php $this->ui->field('start_date'); ?>
                                    </div>
                                    <div class="col-lg-6 hidden-label">
                                        <?php $this->ui->field('end_date'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-lg-2 form-label">Filters</label>
                            <div class="col-lg-10">
                                <select class="selectpicker d-block form-select" multiple name="filters[]" id="filters"  >
                                    <?php foreach($this->filters as $filter) : ?>
                                        <option selected value="<?php echo $filter['id'] ?>"><?php echo $filter['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-lg-2 form-label">Tags</label>
                            <div class="col-lg-10">
                                <select class="selectpicker d-block form-select" multiple name="tags[]" id="tags"  >
                                    <?php foreach($this->tags as $tag) : ?>
                                        <option selected value="<?php echo $tag['id'] ?>"><?php echo $tag['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-lg-2 form-label">Creator</label>
                            <div class="col-lg-10 hidden-label">
                                <?php $this->ui->field('creator'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-lg-2 form-label">Assignment</label>
                            <div class="col-lg-10 hidden-label">
                                <?php $this->ui->field('assignment'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-lg-2 form-label">Shares</label>
                            <div class="col-lg-10 hidden-label">
                                <?php $this->ui->field('shares'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <label class="col-lg-2 form-label"></label>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-4">
                                        <?php $this->ui->field('shortcut_name'); ?>
                                    </div>
                                    <div class="col-4">
                                        <input name="shortcut_link" type="text" id="shortcut_link" placeholder="Shortcut Link" value="<?php echo $this->data ? $this->url('collection/'. $this->data['filter_link']) : ''; ?>" class="form-control" disabled="">
                                    </div>
                                    <div class="col-4">
                                        <?php $this->ui->field('shortcut_group'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <input id="save_close" type="hidden" name="save_close">
                        <button id="button_save" class="btn btn-success d-none1" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $this->render('collection.form.javascript'); ?>