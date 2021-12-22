export default function (value) {
    const container = document.createElement('textarea');

    container.value = value;
    container.setAttribute('readonly', '');
    container.style.cssText =        'position:fixed;pointer-events:none;z-index:-9999;opacity:0;';

    document.body.appendChild(container);

    if (
        !(navigator.userAgent && navigator.userAgent.match(/ipad|ipod|iphone/i))
    ) {
        container.select();
        document.execCommand('copy');
        document.body.removeChild(container);
        return;
    }

    container.contentEditable = true;
    container.readOnly        = true;
    const range               = document.createRange();
    range.selectNodeContents(container);
    const selection = window.getSelection();
    selection.removeAllRanges();
    selection.addRange(range);
    container.setSelectionRange(0, 999999);

    document.execCommand('copy');
    document.body.removeChild(container);
}
