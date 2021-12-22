export default (params) => ({
    initialValue: null,
    selectedItem: null,
    value: null,
    withInfinityScroll: true,
    open: false,
    name: null,
    loading: true,
    route: null,
    items: [],
    activeIndex: 0,
    selectedIndex: 0,
    activeDescendant: null,
    wireModel: null,
    wire: null,
    search: null,
    withSearch: null,
    defaultPicture: null,
    withPicture: null,
    data: {
        meta: {
            current_page: null,
            from: null,
            last_page: null,
            links: {},
            path: null,
            per_page: null,
            to: null,
            total: null,
        },
        links: {
            first: null,
            last: null,
            next: null,
        },
    },
    init(wire) {
        this.wire = wire;
        this.getOptions().then((data) => {
            this.items = data;
        });

        this.$watch("activeIndex", (index) => {
            this.open &&
                (null !== this.activeIndex
                    ? (this.activeDescendant = this.$refs.ul.children[
                          this.activeIndex
                      ].id)
                    : (this.activeDescendant = ""));
        });
    },
    get optionCount() {
        return this.items.length;
    },
    get selected() {
        if (!this.value) {
            this.selectedItem = {
                id: null,
                name: "Select an option",
            };

            if (this.withPicture) {
                this.selectedItem = Object.assign(this.selectedItem, {
                    picture_url: this.defaultPicture,
                });
            }

            return this.selectedItem;
        }

        let name =
                this.initialValue?.name ||
                this.selectedItem?.name ||
                "Select an option";

            this.selectedItem = {
                id: this.value,
                name: name,
            };

            if (this.withPicture) {
                this.selectedItem = Object.assign(this.selectedItem, {
                    picture_url:
                        this.initialValue?.picture_url || this.defaultPicture,
                });
            }

        this.selectedIndex = this.items.findIndex(
            (s) => s.id.toString() === this.value.toString()
        );

        let foundItem = this.items.find(
            (s) => s.id.toString() === this.value.toString()
        );

        return foundItem || this.selectedItem;
    },
    async getOptions(route = null) {
        let url = route || this.route;
        if (this.search) {
            url += url.includes("?") ? "&" : "?";
            url += new URLSearchParams({ search: this.search });
        }

        let response = await fetch(url);
        let json = await response.json();

        let { meta, links, data } = json;

        this.data = { meta, links };
        this.loading = false;

        return data;
    },
    async infinityScroll() {
        if (!this.withInfinityScroll) {
            return;
        }

        let scroll = this.$refs.ul.scrollTop;
        let scrollHeight = this.$refs.ul.scrollHeight;
        let clientHeight = this.$refs.ul.clientHeight;

        if (scroll >= scrollHeight - clientHeight) {
            this.loading = true;
            await this.loadMore();
        }
    },
    async loadMore() {
        let data = await this.getOptions(this.data.links.next);
        this.items = [...this.items, ...data];
    },
    async doSearch() {
        this.items = await this.getOptions();
    },
    // --
    // Keyboard Actions
    openList() {
        if (this.open) {
            this.open = false;
            return;
        }
        this.open = true;

        this.$nextTick(() => {
            if (this.withSearch) {
                this.$refs.search.focus();
            }

            let index = this.items.findIndex(
                (s) => s.id.toString() === this.selectedItem.id?.toString()
            );

            this.$refs.ul.children[index]?.scrollIntoView({
                block: "center",
            });
        });

        // scroll to the selected element
    },
    listBoxFocus() {
        this.$refs.ul.focus();

        let index = this.items.findIndex(
            (s) => s.id.toString() === this.selectedItem.id.toString()
        );

        this.$refs.ul.children[index]?.scrollIntoView({
            block: "nearest",
        });
    },
    onEscape() {
        this.open = false;
        this.$refs.button.focus();
    },
    choose(index) {
        this.selectedIndex = index;
        this.open = false;
        this.selectedItem = this.items[this.selectedIndex];
        this.wire.set(this.wireModel, this.selectedItem["id"]);
    },
    onOptionSelect() {
        null !== this.activeIndex && (this.selectedIndex = this.activeIndex);
        this.$refs.button.focus();
        this.choose(this.activeIndex);
    },
    ...params,
});
