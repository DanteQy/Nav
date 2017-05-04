function rotation(awa, twa, togp, mh, cog) {
    $('#awa').animate({
        textIndent: 0
    }, {
        step: function () {
            $(this).css('-webkit-transform', 'rotate(' + awaV + 'deg)');
            $(this).css('transform', 'rotate(' + awaV + 'deg)');
            $(this).css('-o-transform', 'rotate(' + awaV + 'deg)');
            $(this).css('-ms-transform', 'rotate(' + awaV + 'deg)');
            $(this).css('-moz-transform', 'rotate(' + awaV + 'deg)');
        }
    }, 'linear');
    $('#twa').animate({
        textIndent: 0
    }, {
        step: function () {
            $(this).css('-webkit-transform', 'rotate(' + twaV + 'deg)');
            $(this).css('transform', 'rotate(' + twaV + 'deg)');
            $(this).css('-moz-transform', 'rotate(' + twaV + 'deg)');
            $(this).css('-o-transform', 'rotate(' + twaV + 'deg)');
            $(this).css('-ms-transform', 'rotate(' + twaV + 'deg)');
        }
    }, 'linear');
    $('#togp').animate({
        textIndent: 0
    }, {
        step: function () {
            $(this).css('-webkit-transform', 'rotate(' + togpV + 'deg)');
            $(this).css('transform', 'rotate(' + togpV + 'deg)');
            $(this).css('-moz-transform', 'rotate(' + togpV + 'deg)');
            $(this).css('-o-transform', 'rotate(' + togpV + 'deg)');
            $(this).css('-ms-transform', 'rotate(' + togpV + 'deg)');
        }
    }, 'linear');
    $('#cog').animate({
        textIndent: 0
    }, {
        step: function () {
            $(this).css('-webkit-transform', 'rotate(' + cogV + 'deg)');
            $(this).css('transform', 'rotate(' + cogV + 'deg)');
            $(this).css('-moz-transform', 'rotate(' + cogV + 'deg)');
            $(this).css('-o-transform', 'rotate(' + cogV + 'deg)');
            $(this).css('-ms-transform', 'rotate(' +cogV + 'deg)');
        }
    }, 'linear');
    $('#mh').animate({
        textIndent: 0
    }, {
        step: function () {
            $(this).css('-webkit-transform', 'rotate(' + mhV + 'deg)');
            $(this).css('transform', 'rotate(' + mhV + 'deg)');
            $(this).css('-moz-transform', 'rotate(' + mhV + 'deg)');
            $(this).css('-o-transform', 'rotate(' + mhV + 'deg)');
            $(this).css('-ms-transform', 'rotate(' + mhV + 'deg)');
        }
    }, 'linear');
}