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