$(document).ready(function()
{
    function calculateColumn()
    {
        var total = 0;
        $('.cost-field').each(function()
        {
            var value = parseInt($(this).text());
            total += value;
        });

        $('#total-field').text('Total: ' + total);
    }

    calculateColumn();
});

var re=/\d/,
    allowedCodes = [37, 39, 8, 9], // left and right arrows, backspace and tab
    text = document.getElementById('text');

text.onkeydown = function(e) {
    var code;
    if(window.event) { // IE8 and earlier
        code = e.keyCode;
    } else if(e.which) { // IE9/Firefox/Chrome/Opera/Safari
        code = e.which;
    }
    if(allowedCodes.indexOf(code) > -1) {
        return true;
    }
    return !e.shiftKey && re.test(String.fromCharCode(code));
};


var re=/\d/,
    allowedCodes = [37, 39, 8, 9, 189], // left and right arrows, backspace and tab
    text = document.getElementById('text1');

text.onkeydown = function(e) {
    var code;
    if(window.event) { // IE8 and earlier
        code = e.keyCode;
    } else if(e.which) { // IE9/Firefox/Chrome/Opera/Safari
        code = e.which;
    }
    if(allowedCodes.indexOf(code) > -1) {
        return true;
    }
    return !e.shiftKey && re.test(String.fromCharCode(code));
};

//# sourceMappingURL=app.js.map
