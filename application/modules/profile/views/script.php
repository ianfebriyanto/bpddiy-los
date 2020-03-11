<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });
    $(document).ready(function() {
        $('#dataTableUser').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "scrollX": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "ajax": {
                url: "<?= base_url('user/get_ajax'); ?>",
                type: "POST"
            },
            "columnDefs": [{
                    "targets": [0, 4, 5, 6, 7, 8],
                    "orderable": false,

                },
                {
                    "targets": [7],
                    "className": "text-center",
                }
            ],
        });
    });
</script>