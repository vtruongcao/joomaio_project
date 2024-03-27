<div class="page-breadcrumb p-0 pt-4 mb-4">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Note Upload</h3>
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
                    <input id="input_title" type="hidden" name="title" required>
                    <input id="_method" type="hidden" name="_method" value="<?php echo $this->id ? 'PUT' : 'POST' ?>">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-12">
                            <?php if (!$this->id) : ?>
                                <?php $this->ui->field('file'); ?>
                            <?php else : ?>
                                <div class="text-center mb-2">
                                    <a href="<?php echo $this->url($this->data['path']);?>">
                                        <?php if($this->isImage) : ?>
                                            <img class="img-fuild" src="<?php echo $this->url .'/'. $this->data['path']; ?>" alt="<?php echo basename($this->data['path'])?>">
                                        <?php else : ?>
                                            <img class="img-fuild" width="300px" src="<?php echo $this->url .'/media/default/default_file.png'; ?>" alt="<?php echo basename($this->data['path'])?>">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="text-center">
                                    <a href="<?php echo $this->url($this->data['path']);?>"><?php echo basename($this->data['path'])?></a>
                                </div>
                            <?php endif; ?>
                            <div class="mt-3">
                                <?php echo $this->renderWidget('tag::backend.tags'); ?>
                            </div>
                            <div class="mt-3">
                                <?php echo $this->renderWidget('share_note::backend.share_note'); ?>
                            </div>
                            <div class="mt-3">
                                <?php $this->ui->field('notice'); ?>
                            </div>
                            <input id="save_close" type="hidden" name="save_close">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $this->render('backend.form.javascript'); ?>

