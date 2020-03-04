<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });
    $(document).ready(function() {
        $('#dataTableMenu').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?= base_url('menu/get_ajax'); ?>",
                type: "POST"
            },
            "columnDefs": [{
                    "targets": [0, 2, 3, 4, 5],
                    "orderable": false,
                },
                {
                    "targets": [4],
                    "className": "text-center",
                }
            ],
        });
    });
</script>