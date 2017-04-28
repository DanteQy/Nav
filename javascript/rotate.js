function rotation(awa, twa, togp, mh) {
   $('#awa').animate({
                textIndent: 0
            }, {
                step: function () {
                    $(this).css('-webkit-transform', 'rotate(' + awaV + 'deg)');
                }
            }, 'linear');
            $('#twa').animate({
                textIndent: 0
            }, {
                step: function () {
                    $(this).css('-webkit-transform', 'rotate(' + twaV + 'deg)');
                }
            }, 'linear');
            $('#togp').animate({
                textIndent: 0
            }, {
                step: function () {
                    $(this).css('-webkit-transform', 'rotate(' + togpV + 'deg)');
                }
            }, 'linear');
            $('#mh').animate({
                textIndent: 0
            }, {
                step: function () {
                    $(this).css('-webkit-transform', 'rotate(' + mhV + 'deg)');
                }
            }, 'linear');
}