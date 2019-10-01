export function onclickActivate(clickedElement, clickedElementClassname, targetElement, targetElementClassname, callback) {
    $(clickedElement).on('click', function(){
        $(this).toggleClass(clickedElementClassname);
        if(targetElement){
            $(targetElement).toggleClass(targetElementClassname);
        }
        if(callback){
            callback();
        }
    })
}