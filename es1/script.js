var select = document.getElementById("select");
select.addEventListener("change", function () {
    $.ajax({
        url: "script.php",
        type: "POST",
        data: { select: select.value },
        success: function (data) {
            // Do something with data
            doccument.getElementById("table").innerHTML = data;
        }
    });
});