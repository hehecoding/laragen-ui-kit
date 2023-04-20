<div
    x-data="{
        notices: [],
        visible: [],
        add(notice) {
            notice.id = Date.now();
            this.notices.push(notice);
            this.fire(notice.id);
        },
        fire(id) {
            this.visible.push(this.notices.find(notice => notice.id === id));
            const timeShown = 2000 * this.visible.length;
            setTimeout(() => {
                this.remove(id);
            }, timeShown);
        },
        remove(id) {
            const notice = this.visible.find(notice => notice.id === id);
            const index = this.visible.indexOf(notice);
            this.visible.splice(index, 1);
        }
    }"
    x-init="() => {
        window.addEventListener('show-toast', event => {
            add(event.detail);
        });
    }"
    class="w-80 flex flex-col items-end space-y-4 fixed bottom-4 right-4"
    xmlns:x-laragen="http://www.w3.org/1999/html">
    <template x-for="notice of notices" :key="notice.id">
        <div
            x-show="visible.includes(notice)"
            x-transition:enter="transition ease-in duration-200"
            x-transition:enter-start="transform opacity-0 translate-y-2"
            x-transition:enter-end="transform opacity-100"
            x-transition:leave="transition ease-out duration-500"
            x-transition:leave-start="transform translate-x-0 opacity-100"
            x-transition:leave-end="transform translate-x-full opacity-0"
            class="mb-2 pointer-events-auto w-full overflow-hidden rounded bg-white shadow ring-1 ring-black ring-opacity-5"
        >
            <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="h-6 w-6" :class="{
                'fa-light fa-circle-check text-green-400': notice.type === 'success',
                'fa-light fa-circle-info text-blue-400': notice.type === 'info',
                'fa-light fa-circle-exclamation text-orange-400': notice.type === 'warning',
                'fa-light fa-circle-xmark text-red-400': notice.type === 'error'
             }"></i>
                    </div>
                    <div class="ml-3 w-0 flex-1">
                        <p class="text-sm font-medium text-gray-600" x-text="notice.text"></p>
                    </div>
                    <div class="ml-4 flex flex-shrink-0">
                        <x-laragen::button @click="remove(notice.id)" icon="fa-light fa-times" variant="text"
                                           type="button" color="gray" size="icon">
                        </x-laragen::button>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>
