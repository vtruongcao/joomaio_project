<?php 
$this->theme->add($this->url . 'assets/css/select2.min.css', '', 'select2-css');
$this->theme->add($this->url . 'assets/js/select2.full.min.js', '', 'bootstrap-select2');
?>
<div class="row">
    <label class="col-lg-3 form-label">Assignee</label>
    <div class="col-lg-9">
        <select name="assignee[]" class="select-tag w-100" multiple id="assign_user">
            <optgroup label="User">
                <?php foreach($this->users as $user) :?>
                <option value="user_<?php echo $user['id']; ?>" <?php echo in_array($user['id'], $this->assign_user) ? 'selected' : ''; ?>><?php echo $user['name']; ?></option>
                <?php endforeach;?>
            </optgroup>
            <optgroup label="User Group">
                <?php foreach($this->user_groups as $group) :?>
                    <option value="group_<?php echo $group['id']; ?>" <?php echo in_array($group['id'], $this->assign_user_group) ? 'selected' : ''; ?>><?php echo $group['name']; ?></option>
                <?php endforeach;?>
            </optgroup>
        </select>
    </div>
</div>
<?php echo $this->renderWidget('share_note::backend.javascript'); ?>