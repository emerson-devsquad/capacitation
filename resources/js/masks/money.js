export default function (el, withDecimal = false) {
    el.setAttribute('maxlength', '14');

    const mask = () => {
        let { value }      = el;
        const localElement = el;
        value              = value.toString().replace(/[^0-9]/g, '');
        if (value === undefined || value === null || value.length === 0) {
            localElement.value = value;
            return;
        }
        value = value.replace(/^0*/g, '');
        if (!withDecimal) {
            for (let i = 0; i < 10; i++) {
                value = value.replace(/\d{1,3}(?=(\d{3})+(?!\d))/, '$&,');
            }
        } else {
            value = value.replace(/^$/, '0.00');
            value = value.replace(/^(\d)$/, '0.0$1');
            value = value.replace(/^(\d{2})$/, '0.$1');
            value = value.replace(/(\d+)(\d{2})$/, '$1.$2');
            for (let i = 0; i < 10; i++) {
                value = value.replace(/(\d)(\d{3}[.,])/, '$1,$2');
            }
        }

        localElement.value = value;
    };

    el.addEventListener('keypress', () => {
        setTimeout(mask, 1);
    });

    mask();
}
