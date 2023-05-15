@props(['active'])

<div x-data="{
        activeTab: '{{ \Illuminate\Support\Str::slug($active) }}',
        tabHeadings: [],
     }"
     x-title="LaraGEN-Tabs"
>
    <div class="tab-list" role="tablist"
    >
        <template x-for="(tab, index) in tabHeadings" :key="index">
            <div class="tab-list__item">
                <button
                        @click="activeTab = tab.id;"
                        class="border-b-2 border-transparent py-4"
                        :class="tab.id === activeTab ? 'text-blue-400 font-medium border-blue-400' : 'text-gray-400'"
                        :id="`tab-${tab.id}`"
                        role="tab"
                        :aria-selected="(tab.id === activeTab).toString()"
                        :aria-controls="`tab-panel-${tab.id}`"
                >
                    <i x-show="tab.icon" :class="tab.icon"></i>
                    <span x-text="tab.name" :class="tab.icon ? 'ml-2':''"></span>
                </button>
            </div>
        </template>
    </div>

    <div x-ref="tabs">
        {{ $slot }}
    </div>
</div>
