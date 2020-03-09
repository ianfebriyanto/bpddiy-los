<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });
    $(document).ready(function() {
        $('#dataTableDeb_personal').DataTable({
            "processing": true,
            "serverSide": true,
            "scrollX": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "order": [],
            "ajax": {
                url: "<?= base_url('deb_personal/get_ajax'); ?>",
                type: "POST"
            },

        });
    });
</script>