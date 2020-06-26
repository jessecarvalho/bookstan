<script>
$(function () {
    $('form[name="genreForm"]').submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: '{{route("genreController")}}',
            type: "get",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                console.log(response);
            }
        });
        document.getElementById("genrePage").style.display = "none";
        document.getElementById("targetPage").style.display = "block";
    });
});

$(function () {
    $('form[name="targetForm"]').submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: '{{route("targetController")}}',
            type: "get",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                console.log(response);
            }
        });
        document.getElementById("targetPage").style.display = "none";
        document.getElementById("tagsPage").style.display = "block";
    });
});

$(function () {
    $('form[name="tagsForm"]').submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: '{{route("tagsController")}}',
            type: "get",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                window.location.href = "{{route("similiarity")}}"
            }
        });
    });
});
</script>
