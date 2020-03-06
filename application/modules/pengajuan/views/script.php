<script>
    //Initialize tooltips

    $(document).ready(function() {

        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

            var $target = $(e.target);
        });

        $(".next-step").click(function(e) {
            var $active = $('.wizard .nav-tabs .nav-item .active');
            var $activeli = $active.parent("li");

            $($activeli).next().find('a[data-toggle="tab"]').removeClass("disabled");
            $($activeli).next().find('a[data-toggle="tab"]').click();
            $('html, body').animate({
                scrollTop: 0
            }, 600)
        });


        $(".prev-step").click(function(e) {

            var $active = $('.wizard .nav-tabs .nav-item .active');
            var $activeli = $active.parent("li");

            $($activeli).prev().find('a[data-toggle="tab"]').removeClass("disabled");
            $($activeli).prev().find('a[data-toggle="tab"]').click();
            $('html, body').animate({
                scrollTop: 0
            }, 600)
        });
        $("#btn").click(function() {
            $("#Outer").show(500);

        });

    });
</script>