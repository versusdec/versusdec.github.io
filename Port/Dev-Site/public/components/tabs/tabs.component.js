export function tabsManager(tabsWrapper) {
    $(tabsWrapper).find('.tab').on('click', function () {
        $(tabsWrapper).find('.tab').removeClass('active-tab').eq($(this).index()).addClass('active-tab');
        $(tabsWrapper).find('.tab-content').removeClass('active-tab-content').eq($(this).index()).addClass('active-tab-content');
    })
}