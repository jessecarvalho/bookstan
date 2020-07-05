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
                if(response.success === true){
                    document.getElementById("genrePage").style.display = "none";
                    document.getElementById("targetPage").style.display = "block";

                } else{
                    $('#exampleModal').modal('show');
                    document.getElementById("error").innerHTML = response.message;
                }
                console.log(response);
            }
        });

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
                if(response.success === true){
                    document.getElementById("targetPage").style.display = "none";
                    document.getElementById("tagsPage").style.display = "block";
                } else{
                    $('#exampleModal').modal('show');
                    document.getElementById("error").innerHTML = response.message;
                }
                console.log(response);
            }
        });
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
                if(response.success === true){
                    document.getElementById("tagsPage").style.display = "none";
                    document.getElementById("otherTagsPage").style.display = "block";
                } else{
                    $('#exampleModal').modal('show');
                    document.getElementById("error").innerHTML = response.message;
                }
                console.log(response);
            }
        });
    });
});


$(function () {
    $('form[name="otherTagsForm"]').submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: '{{route("otherTagsController")}}',
            type: "get",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                if(response.success === true){
                    window.location.href = "{{route("similiarity")}}"
                } else{
                    $('#exampleModal').modal('show');
                    document.getElementById("error").innerHTML = response.message;
                }
                console.log(response);
            }
        });
    });
});




</script>


