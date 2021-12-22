export default (params) => ({
    dispatch:      null,
    wire:          null,
    refs:          null,
    open:          false,
    searchInput:   null,
    optionCount:   null,
    activeIndex:   null,
    placeholder:   '',
    selectedIndex: null,
    init($dispatch, $wire, $refs) {
        this.dispatch      = $dispatch;
        this.wire          = $wire;
        this.refs          = $refs;
        this.$refs.listBox = undefined;

        const mac        = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'];
        const os         = window.navigator.platform;
        this.isMac       = (mac.indexOf(os) !== -1);
        this.placeholder = `Quick Search ${this.isMac ? '⌘' : 'Ctrl'}+K`;

        window.ha = this;
    },
    search() {
        this.open = true;
        this.clearSelected();
        setTimeout(() => this.refs.quickSearch.focus(), 40);
    },
    clearSelected() {
        this.selectedIndex = null;
        this.activeIndex   = null;
    },
    cancel() {
        if (!this.refs.quickSearch.value) {
            return;
        }

        this.wire.clear();
        this.open = false;
        setTimeout(() => {
            this.refs.quickSearch.blur();
        }, 100);
    },
    onSpaceDown($event) {
        window.he = $event;
        if ($event.target.tagName === 'INPUT') {
            return;
        }
        $event.stopPropagation();
        $event.preventDefault();
        this.select();
    },
    select() {
        if (this.activeIndex === null) {
            return;
        }

        this.wire.select(this.activeIndex);
    },
    onArrowUp() {
        if (this.activeIndex === null) {
            this.activeIndex = this.optionCount - 1;
            return;
        }

        this.activeIndex = this.activeIndex - 1 < 0
            ? this.optionCount - 1
            : this.activeIndex - 1;
    },
    onArrowDown() {
        if (this.activeIndex === null) {
            this.activeIndex = 0;
            return;
        }

        this.activeIndex = (this.activeIndex + 1 > this.optionCount - 1)
            ? 0
            : this.activeIndex + 1;
    },
    updateOptionCount() {
        this.optionCount = this.$refs.listBox.getElementsByTagName('li').length;
    },
    ...params,
});
