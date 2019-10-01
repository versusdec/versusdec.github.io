export function changeView() {
    $('.catalog-handler__change-view').on('click', function(){
        if($(this).hasClass('active')){
            return;
        }
        const handler = $(this).parent().parent();
        const list = $(handler).next().find($('.list-to-handle'));
        $(handler).find($('.catalog-handler__change-view')).removeClass('active');
        $(this).addClass('active');
        if($(this).hasClass('column')){
            $(list).addClass('column');
        }
        else if($(this).hasClass('table')){
            $(list).removeClass('column');
        }
    })
}