<div
    x-data="{
            options: [],
            selectedOptions: [],
            show: false,
            init(){
                const selectElement = this.selectInput
                this.loadOptions()
                const handleMutation = (mutationsList) => {
                    for (const mutation of mutationsList) {
                        if (mutation.type === 'childList') {
                            this.selectedOptions = []
                            this.loadOptions()
                            break;
                        }
                    }
                };

                this.observer = new MutationObserver(handleMutation);
                this.observer.observe(selectElement, { childList: true });
            },
            get selectInputOptions() {
                return this.selectInput.options
            },
            get selectInput() {
                return this.$refs.mainSelectForTheComponent;
            },
            toggle() {
                this.show = !this.show
            },
            toggleOption(value) {

                const index = this.options.findIndex(option => option.value === value);

                const selectElement = this.selectInput;
                const option = selectElement.querySelector(`option[value='${value}']`);
                if (option.selected) {
                    option.selected = false;
                    this.options[index].selected = false;
                } else {
                    option.selected = true;
                    this.options[index].selected = true;
                }
                // Dispatch the input event to notify Livewire of the change
                const inputEvent = new Event('input', { bubbles: true });
                selectElement.dispatchEvent(inputEvent);

                this.markOptionsAsSelected();

            },
            markOptionsAsSelected(){
               this.selectedOptions = [...this.selectInputOptions].filter(option => option.selected)
                    .map(option => ({
                        value: option.value,
                        text: option.innerText,
                        selected: option.selected
                    }));
            },
            loadOptions() {
                this.options = [...this.selectInputOptions].map(option => ({
                    value: option.value,
                    text: option.innerText,
                    selected: option.selected
                }));

                this.markOptionsAsSelected();
            },
            beforeDestroy() {
                if (this.observer) {
                    this.observer.disconnect();
                }
            },
        }"
    x-init="init"
    x-title="LaraGEN-MultiSelect"
    x-on:click.outside="show = false"
    {{$attributes->merge(['class' => 'select-container'])->class(['error' => !!$error,])}}
>
    <select x-cloak x-ref="mainSelectForTheComponent" class="hidden" multiple {{$attributes->except(['class', 'error'])}} >
        {{$slot}}
    </select>
    <div class="relative">
        <div x-on:click="toggle" class="w-full">
            <div class="relative">
                <div class="flex flex-auto flex-wrap">
                    <div class="form-control flex flex-wrap items-center">
                        <span x-show="selectedOptions.length === 0">Choose</span>
                        <template x-for="selectedOption in selectedOptions.slice(0, 3)" :key="selectedOption.value">
                            <div class="mx-1 pl-2 rounded bg-gray-100 border flex items-center">
                                <div class="text-xs max-w-full" x-text="selectedOption.text"></div>
                                <x-laragen::button type="button" icon="fal fa-times" size="xs" variant="plain" color="error"
                                                   x-on:click.stop="toggleOption(selectedOption.value)" class="text-xs">
                                </x-laragen::button>
                            </div>
                        </template>
                        <span x-show="selectedOptions.length > 3" x-text="`+ ${selectedOptions.length - 3} selected`"
                              class="text-xs"></span>
                    </div>
                </div>
                <div class="absolute right-0 cursor-pointer top-4">
                    <x-laragen::button type="button" x-show="show" variant="plain" icon="fal fa-angle-up"
                                       color="gray"></x-laragen::button>
                    <x-laragen::button type="button" x-show="!show" variant="plain" icon="fal fa-angle-down"
                                       color="gray"></x-laragen::button>
                </div>
            </div>
        </div>

        <div class="w-full px-4">
            <div x-show.transition.origin.top="show"
                 class="w-full absolute right-0 z-10 rounded bg-white shadow overflow-y-auto max-h-64"
                 role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1">
                    <template x-for="option in options" :key="option.value" class="overflow-auto">
                        <div class="hover:bg-gray-100" :class="option.selected ? 'bg-gray-100' : ''"
                             @click="toggleOption(option.value)">
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
