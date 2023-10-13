$(document).ready(function () {
    var puntata = $("#puntata");
    var btnPuntata = $("#btnPuntata");
    var crediti = $("#crediti");

    btnPuntata.on("click", function () {
        btnPuntata.prop("disabled", true);
        puntata.prop("disabled", true);
        var puntataValue = puntata.val();
        $.ajax({
            url: "script.game.php",
            method: "POST",
            data: {
                puntata: puntataValue
            },
            success: function (data) {
                if (data) {

                    crediti.html('Crediti disponibili: ' + data);
                }
            }
        });
    });
});
