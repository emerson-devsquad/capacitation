export default function (el) {
    el.setAttribute('maxlength', '14');

    const mask = () => {
        let { value }        = el;
        const localElement = el;
        value              = value.toString().replace(/[^0-9]/g, '');
        if (value === undefined || value === null || value.length === 0) {
            localElement.value = value;
            return;
        }

        value = value.replace(/^(\d{3})(\d)/g, '($1) $2');
        value = value.replace(/^(\(\d{3}\)\s)(\d{3})(\d)/, '$1$2-$3');
        value = value.replace(/^(\(\d{3}\)\s)(\d{3})-(\d{4})/, '$1$2-$3');

        localElement.value = value;
    };

    el.addEventListener('keypress', () => {
        setTimeout(mask, 1);
    });

    mask();
}
