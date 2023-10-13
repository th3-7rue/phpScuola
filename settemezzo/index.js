$(document).ready(function () {
    var puntata = $("#puntata");
    var btnPuntata = $("#btnPuntata");
    var crediti = $("#crediti");
    var btnCarta = $("#btnCarta");
    var btnStai = $("#btnStai");
    btnCarta.prop("disabled", true);
    btnStai.prop("disabled", true);
    btnPuntata.on("click", function () {
        btnPuntata.prop("disabled", true);
        puntata.prop("disabled", true);
        btnCarta.prop("disabled", false);
        btnStai.prop("disabled", false);
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
