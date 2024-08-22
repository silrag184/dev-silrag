
<!-- JS ============================================ -->
<script src="{{ asset('/') }}website/assets/js/vendor/jquery.js"></script>
<script src="{{ asset('/') }}website/assets/js/vendor/modernizer.min.js"></script>
<script src="{{ asset('/') }}website/assets/js/vendor/feather.min.js"></script>
<script src="{{ asset('/') }}website/assets/js/vendor/slick.min.js"></script>
<script src="{{ asset('/') }}website/assets/js/vendor/bootstrap.js"></script>
<script src="{{ asset('/') }}website/assets/js/vendor/text-type.js"></script>
<script src="{{ asset('/') }}website/assets/js/vendor/wow.js"></script>
<script src="{{ asset('/') }}website/assets/js/vendor/aos.js"></script>
<script src="{{ asset('/') }}website/assets/js/vendor/particles.js"></script>
<script src="{{ asset('/') }}website/assets/js/vendor/jquery-one-page-nav.js"></script>
<!-- main JS -->
<script src="{{ asset('/') }}website/assets/js/main.js"></script>


<!-- include libraries(jQuery, bootstrap) -->

<!-- include summernote css/js -->
<script src="{{ asset('/') }}website/assets/js/summernote.js"></script>


<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>--}}

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            tabsize: 2,
            height: 250,
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'italic', 'clear']],
                ['color', ['color']],
                ['fontsize', ['fontsize']],
                ['para', ['ul', 'ol', 'li', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
