export default function (el) {
    const mask = () => {
        let { value } = el;
        const localElement = el;

        value = value.toString().replace(/[^0-9/]/g, '');
        if (value === undefined || value === null || value.length === 0) {
            localElement.value = value;
            return;
        }

        if (value.match(/^\d{2}$/) !== null) {
            value += '/';
        } else if (value.match(/^\d{2}\/\d{2}$/) !== null) {
            value += '/';
        }

        if (value.toString().length > 10) {
            value = value.slice(0, -1);
        }

        localElement.value = value;
    };

    el.addEventListener('keypress', () => {
        setTimeout(mask, 1);
    });

    mask();
}
