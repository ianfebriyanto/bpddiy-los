<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });

    function simpan(id) {
        $('#dataTableKewenangan' + id).DataTable().clear().destroy();
        $('#dataTableKewenangan' + id).DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "scrollX": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "ajax": {
                url: "<?= base_url('kewenangan/get_ajax'); ?>",
                type: "POST",
                data: {
                    "id": id
                }
            },
            "columnDefs": [{
                    "targets": [0, 2, 3, 4, 5],
                    "orderable": false,
                },
                {
                    "targets": [2, 3, 4],
                    "className": "text-center",
                }
            ],
        });
    }
    $(document).on('show.bs.modal', '.modal', function() {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });
</script>