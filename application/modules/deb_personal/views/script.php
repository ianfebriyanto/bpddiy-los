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
            "order": [],
            "ajax": {
                url: "<?= base_url('deb_personal/get_ajax'); ?>",
                type: "POST"
            },
            "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                },
                {
                    "targets": [6],
                    "width": "10%",
                }
            ],
        });
    });
</script>