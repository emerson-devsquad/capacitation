export default (params) => ({
    editor:       null,
    toolbarState: {},
    dispatch:     null,
    wire:         null,
    init($dispatch, $wire) {
        this.dispatch = $dispatch;
        this.wire     = $wire;

        const container = this.$refs.container;
        const toolbar   = this.$refs.toolbar;

        const Font     = window.Quill.import('formats/font');
        Font.whitelist = ['roboto'];
        window.Quill.register(Font, true);

        this.editor = new window.Quill(container, {
            modules: {
                toolbar,
                mention: {
                    allowedChars:           /^[A-Za-z\sÅÄÖåäö]*$/,
                    mentionDenotationChars: ['@'],
                    isolateCharacter:       true,
                    renderItem(item) {
                        return `<span title='${item.value}'>${item.value}</span>`;
                    },
                    renderLoading() {
                        return 'Loading...';
                    },
                    async source(searchTerm, renderList) {
                        const { data } = await window.axios.get(`{{route('mentions')}}?term=${searchTerm}`);
                        renderList(data);
                    },
                    onSelect(item, insertItem) {
                        insertItem(item);
                    },
                },
            },
        });

        const onToolbarStateUpdate = (newState) => {
            this.toolbarState = newState;
        };

        const onContentUpdate = () => {
            this.dispatch('text-change', this.editor.root.innerHTML);
        };

        this.editor.on('selection-change', () => {
            if (!this.editor.hasFocus()) {
                return;
            }
            const state = this.editor.getFormat();
            onToolbarStateUpdate(state);
        });

        this.editor.on('text-change', (delta, oldDelta, source) => {
            const state = this.editor.getFormat();
            onToolbarStateUpdate(state);
            onContentUpdate(delta, source);
        });
    },
    ...params,
});
