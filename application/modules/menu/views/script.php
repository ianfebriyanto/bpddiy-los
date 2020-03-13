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
            "scrollX": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "ajax": {
                url: "<?= base_url('menu/get_ajax'); ?>",
                type: "POST"
            },
            "scrollX": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "columnDefs": [{
                    "targets": [0, 2, 3, 5, 6],
                    "orderable": false,
                },
                {
                    "targets": [5, 6],
                    "className": "text-center",
                },
                {
                    "targets": [6],
                    "width": "10%",
                }

            ],

        });

    });
</script>