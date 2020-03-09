<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });
    $(document).ready(function() {
        $('#dataTableGrup').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "scrollX": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "ajax": {
                url: "<?= base_url('grup/get_ajax'); ?>",
                type: "POST"
            },
            "columnDefs": [{
                "targets": [0, 2, 3],
                "orderable": false,
            }],
        });
    });
</script>