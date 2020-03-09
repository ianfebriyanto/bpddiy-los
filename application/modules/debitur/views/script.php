<script>
    $(function($) {
        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });
    });

    function personal() {
        $('#dataTableDeb_personal').DataTable().clear().destroy();
        $('#dataTableDeb_personal').DataTable({
            "processing": true,
            "serverSide": true,
            "scrollX": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "order": [],
            "ajax": {
                url: "<?= base_url('Deb_personal/'); ?>get_ajax",
                type: "POST"
            },
        });
    }

    function perusahaan() {
        $('#dataTableDeb_perusahaan').DataTable().clear().destroy();
        $('#dataTableDeb_perusahaan').DataTable({
            "processing": true,
            "serverSide": true,
            "scrollX": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "order": [],
            "ajax": {
                url: "<?= base_url('Deb_perusahaan/'); ?>get_ajax",
                type: "POST"
            },
        });
    }
</script>