<?php 
$this->theme->add($this->url . 'assets/css/select2.min.css', '', 'select2-css');
$this->theme->add($this->url . 'assets/js/select2.full.min.js', '', 'bootstrap-select2');
?>
<div class="row">
    <label class="col-lg-3 form-label">Tags</label>
    <div class="col-lg-9">
        <select name="tags[]" class="select-tag w-100" multiple id="tags">
            <?php foreach($this->tags as $item) : ?>
            <option value="<?php echo $item['id'] ?>" selected><?php echo $item['parent_name'] ? $item['parent_name'].':'.$item['name'] : $item['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<?php echo $this->renderWidget('tag::backend.javascript'); ?>