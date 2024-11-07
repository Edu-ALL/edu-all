<section class="{{ $extClass }} overflow-auto" id="join-now">
    <div class="" style="height: 600px">
        <iframe width="{{ $width }}" height="100%"
            src="https://registration.edu-all.com/form/program?program_id={{ $prog_id }}" frameborder="0"
            scrolling='yes'></iframe>
    </div>
</section>

<script>
    $(document).ready(function() {
        // Listen for message from iframe
        var url = 'https://registration.edu-all.com/form/program?program_id={{ $prog_id }}'

        window.addEventListener('message', function(event) {
            if (event.origin === 'https://registration.edu-all.com') { // Make sure the origin matches the iframe's
                if (event.data === 'submitButtonClicked') {
                    return gtag_report_conversion(url)
                }
            }
        });
    });
</script>
