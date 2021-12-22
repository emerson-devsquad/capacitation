export default function (el) {
    const mask = () => {
        let { value }        = el;
        const localElement = el;
        value              = value.toString().replace(/[^0-9]/g, '');
        localElement.value = value;
    };

    el.addEventListener('keypress', () => {
        setTimeout(mask, 1);
    });

    mask();
}
