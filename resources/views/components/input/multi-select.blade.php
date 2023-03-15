<div x-data="dropdown()" x-init="initComponent" x-on:click.outside="close" class="select-container">
    <select x-cloak x-ref="mainSelectForTheComponent" class="hidden">
        {{$slot}}
    </select>
    <input name="values" type="hidden" x-bind:value="selectedValues" x-on:change="console.log('test');">

    <div class="relative">
        <div x-on:click="toggle" class="w-full">
            <div class="relative">
                <div class="flex flex-auto flex-wrap">
                    <div class="form-control flex flex-wrap items-center">
                        <span x-show="selected.length === 0">Choose</span>
                        <template x-for="(selectedOption, selectedIndex) in selected.slice(0, 3)" :key="selectedIndex">
                            <div class="mx-1 pl-2 rounded bg-gray-100 border flex items-center">
                                <div class="text-xs max-w-full" x-text="selectedOption.text"></div>
                                <x-laragen::button icon="fal fa-times" size="xs" variant="plain" color="error"
                                                   x-on:click.stop="remove(selectedIndex)" class="text-xs">
                                </x-laragen::button>
                            </div>
                        </template>
                        <span x-show="selected.length > 3" x-text="`+ ${selected.length - 3} selected`"
                              class="text-xs"></span>
                    </div>
                </div>
                <div class="absolute right-0 cursor-pointer top-4">
                    <x-laragen::button x-on:click.stop="toggle" x-show="show" variant="plain" icon="fal fa-angle-up"
                                       color="gray"></x-laragen::button>
                    <x-laragen::button x-show="!show" variant="plain" icon="fal fa-angle-down"
                                       color="gray"></x-laragen::button>
                </div>
            </div>
        </div>

        <div class="w-full px-4">
            <div x-show.transition.origin.top="show"
                 class="w-full absolute right-0 z-10 rounded bg-white shadow overflow-y-auto max-h-64"
                 role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1">
                    <template x-for="(option,index) in options" :key="index" class="overflow-auto">
                        <div class="hover:bg-gray-100" :class="option.selected ? 'bg-gray-100' : ''"
                             @click="toggleOption(index, $event)">
                            <div class="relative">
                                <div class="py-1 px-4 cursor-pointer flex items-center justify-between">
                                    <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                    <i x-show="option.selected" class="fal fa-times text-red-400"></i>
                                </div>
                            </div>
                        </div>
                    </template>
                    <div x-show="options.length === 0">
                        <div class="relative">
                            <div class="py-1 px-4 cursor-pointer flex items-center justify-between">
                                <div class="mx-2 leading-6 text-sm">No options available</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function dropdown() {
        return {
            options: [],
            selected: [],
            show: false,
            initComponent() {
                this.loadOptions();
            },
            close() {
                this.show = false
            },
            toggle() {
                this.show = !this.show
                this.loadOptions();
            },
            toggleOption(index, event) {
                if (!this.options[index].selected) {
                    this.options[index].selected = true;
                    this.options[index].element = event.target;
                    this.selected.push(this.options[index]);
                } else {
                    this.selected.splice(index, 1);
                    this.options[index].selected = false
                }
            },
            remove(index) {
                this.options[index].selected = false;
                this.selected.splice(index, 1);
            },
            loadOptions() {
                const options = this.$refs.mainSelectForTheComponent.options;
                this.options = []
                for (let i = 0; i < options.length; i++) {
                    this.options.push({
                        value: options[i].value,
                        text: options[i].innerText,
                        selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                    });
                }
            },
            selectedValues() {
                return this.selected.map((option) => {
                    return option.value;
                })
            }
        }
    }
</script>
