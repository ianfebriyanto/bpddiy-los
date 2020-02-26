<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });

    function simpan(id) {
        $('#dataTableKewenangan').DataTable().clear().destroy();
        $('#dataTableKewenangan').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?= base_url('kewenangan/get_ajax'); ?>",
                type: "POST",
                data: {
                    "id": id
                }
            },
            "columnDefs": [{
                "targets": [0, 3, 4, 5, 6],
                "orderable": false,
            }],
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