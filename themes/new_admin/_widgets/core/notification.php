<?php if ($this->message) { ?>
    <div class="toast message-toast toast-notification fade hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <span class="rounded me-2 d-inline-block <?php echo (0 === strpos($this->message, 'Error')) ? 'bg-danger' : 'bg-success'; ?>" style="width:20px;height:20px;"></span>
            <strong class="me-auto">Thông báo</strong>
            <!-- <small>11 mins ago</small> -->
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?php echo $this->message;?>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.toast-notification').toast('show');
        })
    </script>
<?php
}
?>
