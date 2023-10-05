window.onload = function () {
    $.ajax({
        url: "script.php",
        type: "POST",
        success: function (data) {
            data = JSON.parse(data);
            document.body.innerHTML += data;

            console.log("works");
        }
    });
}
