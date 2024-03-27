<form id="filter_form" class="row pl-0 pb-2" action="<?php echo $this->link_list ?>" method="POST">
    <div class="col-lg-11 col-sm-12">
        <div class="input-group input-group-navbar">
            <div class="pe-2">
                <div class="row">
                    <div class="col-auto">
                        <a href="<?php echo $this->link_form .'/0';?>" class="align-middle btn border border-1" type="button">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pe-2">
                <div class="row">
                    <div class="col-auto">
                        <button id="delete_selected" data-bs-placement="top" title="Delete Selected" data-bs-toggle="tooltip" class="btn border border-1" type="button">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pe-2">
                <?php $this->ui->field('status');  ?>
            </div>
            <div class="pe-2">
                <?php $this->ui->field('sort');  ?>
            </div>
            <div class="pe-2">
                <?php $this->ui->field('group');  ?>
            </div>
            <div class="pe-2">
                <?php $this->ui->field('search');  ?>
            </div>
            <button type='Submit' data-bs-toggle="tooltip" title="Filter" class=" align-middle btn border border-1" type="button">
                <i class="fa-solid fa-filter"></i>
            </button>
            <button data-bs-toggle="tooltip" title="Clear Filter" id="clear_filter" class="align-middle btn border border-1 ms-2" type="button">
                <i class="fa-solid fa-filter-circle-xmark"></i>
            </button>
        </div>
    </div>
    <div class="col-lg-1 col-sm-12 text-right pb-1 ">
        <div class="d-flex justify-content-end">
            <?php $this->ui->field('limit');  ?>
        </div>
    </div>
</form>
<?php echo $this->render('backend.user.list.javascript', []); ?>