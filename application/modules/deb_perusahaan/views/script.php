<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });
    $(document).ready(function() {
        $('#dataTableDeb_perusahaan').DataTable({
            "processing": true,
            "serverSide": true,
            "scrollX": true,
            "order": [],
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "ajax": {
                url: "<?= base_url('Deb_perusahaan/get_ajax'); ?>",
                type: "POST"
            },
            "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                },
                {
                    "targets": [5],
                    "width": "10%",
                }
            ],
        });
    });
</script>