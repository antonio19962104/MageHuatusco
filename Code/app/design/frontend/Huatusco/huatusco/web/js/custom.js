define([
    'jquery'
], function ($) {
    "use strict";

    $.fn.inputFilter = function (inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function () {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    };

    $(document).ready(function () {
        $("#wrapper").addClass("animated fadeIn");
    });
    function comparacionPassword() {
        alert()
        if ($('#password').val() == $('#password_confirmation').val()) {
            return true;
        } else {
            alert('El campo de las contraseñas deben coincidir, por favor digita de nuevo');
            return false;
        }
    }

    $(".numbers").inputFilter(function (value) {
        return /^\d*$/.test(value);
    });

    $(".limit").inputFilter(function (value) {
        return /^[A-Z]{1,10}$/.test(value);
    });

});