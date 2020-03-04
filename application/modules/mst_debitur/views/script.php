<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });
    $(document).ready(function() {
        $('#dataTableMst_debitur').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?= base_url('mst_debitur/get_ajax'); ?>",
                type: "POST"
            },
            "columnDefs": [{
                "targets": [0, 12],
                "orderable": false,
            }],
        });
    });
</script>