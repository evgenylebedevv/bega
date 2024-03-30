
    window.BXDEBUG = true;
    BX.ready(function(){
    var oPopup = new BX.PopupWindow('call_feedback', window.body, {
    autoHide : true,
    offsetTop : 1,
    offsetLeft : 0,
    lightShadow : true,
    closeIcon : true,
    closeByEsc : true,
    overlay: {
    backgroundColor: '#6f42c1', opacity: '80'
}
});
    oPopup.setContent(BX('hideBlock'));
    BX.bindDelegate(
    document.body, 'click', {className: 'css_popup' },
    BX.proxy(function(e){
    if(!e)
    e = window.event;
    oPopup.show();
    return BX.PreventDefault(e);
}, oPopup)
    );


});
