export default (params) => ({
    open:      false,
    container: null,
    dispatch:  null,
    wire:      null,
    init($dispatch, $wire) {
        this.dispatch           = $dispatch;
        this.wire               = $wire;
        this.container          = this.$refs.container;
        this.container.onscroll = () => {
            const height = this.container.scrollHeight;
            const scroll = this.container.scrollHeight + this.container.offsetHeight;
            if (scroll + 10 >= height) {
                this.dispatch('load-more');
            }
        };
    },
    ...params,
});
