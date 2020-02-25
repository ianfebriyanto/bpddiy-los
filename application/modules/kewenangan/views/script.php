<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });
    $(document).ready(function() {
        var hehe = $("#deatilBtn").val();
        $('#dataTableKewenangan').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?= base_url('kewenangan/get_ajax'); ?>",
                type: "POST",
                data: ({
                    hehe
                }),
            },
            "columnDefs": [{
                "targets": [0, 3, 4, 5, 6],
                "orderable": false,
            }],
        });
    });
</script>