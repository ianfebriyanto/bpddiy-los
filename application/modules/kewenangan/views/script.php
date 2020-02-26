<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });

    function simpan(id) {
        $('#dataTableKewenangan').DataTable({
            "processing": true,
            "serverSide": true,
            "destroy": true,
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
</script>