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
            "ajax": {
                url: "<?= base_url('Deb_perusahaan/get_ajax'); ?>",
                type: "POST"
            },
        });
    });
</script>