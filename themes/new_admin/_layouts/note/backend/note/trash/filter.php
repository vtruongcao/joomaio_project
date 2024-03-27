<?php
    $this->theme->add($this->url . 'assets/css/select2.min.css', '', 'select2-css');
    $this->theme->add($this->url . 'assets/js/select2.full.min.js', '', 'bootstrap-select2');
?>
<form id="filter_form" class="row pe-0 pb-2" action="<?php echo $this->link_list ?>" method="POST">
    <div class="col-lg-9 col-sm-12">
        <div class="input-group input-group-navbar">
            <div class="pe-2 pb-2">
                <div class="row">
                    <div class="col-auto">
                        <a href="<?php echo $this->link_back ?>" data-bs-placement="top" title="Back" data-bs-toggle="tooltip" class="btn border border-1" type="button">
                            Back
                        </a>
                    </div>
                </div>
            </div>
            <div class="pe-2 pb-2">
                <div class="row">
                    <div class="col-auto">
                        <button id="undo_selected" data-bs-placement="top" title="Restore Note" data-bs-toggle="tooltip" class="btn border border-1" type="button">
                            <i class="fa-solid fa-rotate-left"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php if((in_array('note_manager', $this->asset) && $this->mode != 'my-note')) : ?>
            <div class="pe-2 pb-2">
                <div class="row">
                    <div class="col-auto">
                        <button id="delete_selected" data-bs-placement="top" title="Hard Delete" data-bs-toggle="tooltip" class="btn border border-1" type="button">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="pe-2 pb-2">
                <?php $this->ui->field('search');  ?>
            </div>
            <div class="pe-2 pb-2 select2-vt">
                <?php $this->ui->field('tags');  ?>
            </div>
            <div class="pe-2 pb-2 select2-vt">
                <?php $this->ui->field('note_type');  ?>
            </div>
            <?php if ($this->mode != 'my-note'): ?>
            <div class="pe-2 pb-2 select2-vt">
                <?php $this->ui->field('author');  ?>
            </div>
            <?php endif;?>
            <input type="hidden" name="clear_filter" id="input_clear_filter">
            <div class="pe-2 pb-2">
                <button type='Submit' data-bs-toggle="tooltip" title="Filter" class=" align-middle btn border border-1" type="button">
                    <i class="fa-solid fa-filter"></i>
                </button>
            </div>
            <div class="pe-2 pb-2">
                <button data-bs-toggle="tooltip" title="Clear Filter" id="clear_filter" class="align-middle btn border border-1" type="button">
                    <i class="fa-solid fa-filter-circle-xmark"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-12 text-end pb-1 ">
        <div class="d-flex justify-content-end">
            <div class="me-2">
                <?php $this->ui->field('sort');  ?>
            </div>
            <div>
                <?php $this->ui->field('limit');  ?>
            </div>
        </div>
    </div>
</form>