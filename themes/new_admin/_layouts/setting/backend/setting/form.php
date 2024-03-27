<div class="page-breadcrumb p-0 pt-4 mb-4">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Setting</h3>
        </div>
        <div class="col-5 align-self-center"></div>
    </div>
</div>
<?php echo $this->renderWidget('core::notification'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form id="form-update" enctype='multipart/form-data' action="<?php echo  $this->link_form ?>" method="POST">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php
                        $count = 0;
                        foreach ($this->settings as $index => $fields) :
                            $count++;
                        ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?php echo $count == 1 ? 'active' : ''; ?>" id="setting-<?php echo $count; ?>-tab" data-bs-toggle="tab" data-bs-target="#setting-<?php echo $count; ?>" type="button" role="tab" aria-controls="setting-<?php echo $count; ?>" aria-selected="true"><?php echo $index ?></button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content mt-3">
                        <?php $count = 0;
                        foreach ($this->settings as $index => $fields) {
                            $count++;
                        ?>
                            <div class="tab-pane fade <?php echo $count == 1 ? 'show active' : ''; ?>" id="setting-<?php echo $count; ?>" role="tabpanel" aria-labelledby="setting-<?php echo $count; ?>-tab">
                                <div class="row">
                                <?php foreach ($fields as $key => $value) { ?>
                                    <div class="mb-3 col-lg-6 col-sm-12 col-12 mx-auto label-bold">
                                        <?php $this->ui->field($key); ?>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".btn_apply").click(function(e) {
            e.preventDefault();
            $('#form-update').submit();
        });
    });
</script>