export function equalizeHeight(elements) {
    $(elements).each(function () {
        let maxHeight = 0;
        $(this).each(function () {
            let height = $(this).innerHeight();
            if (height > maxHeight) {
                maxHeight = height;
            }
        })
        $(this).each(function () {
            $(this).css('min-height', maxHeight)
        })
    });
    /*$(elements).each(function(){
        $(this).each(function(){
            $(this).css('min-height', maxHeight)
        })
    });*/
}