<script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>    
    
<main class="grid w-full min-h-screen text-gray-100 place-content-center">

    <section x-data="skillDisplay"
        class="p-1 space-y-2 rounded-xl md:grid md:grid-cols-1 md:gap-4 sm:space-y-0">
        <div class="grid grid-cols-2 gap-6">
            <template x-for="skill in skills">
                <button x-text="skill.title"
                    class="px-4 py-2 text-xl text-gray-100 transition bg-blue-600 rounded-md h-14 w-44 hover:bg-blue-700"
                    :class="(currentSkill.title == skill.title) && 'font-bold ring-2 ring-gray-100'"
                    @click="currentSkill = skill"></button>
            </template>
        </div>

        <div class="flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120 }">
            <svg class="transform -rotate-90 w-72 h-72">
                <circle cx="145" cy="145" r="120" stroke="currentColor" stroke-width="30" fill="transparent"
                    class="text-gray-700" />

                <circle cx="145" cy="145" r="120" stroke="currentColor" stroke-width="30" fill="transparent"
                    :stroke-dasharray="circumference"
                    :stroke-dashoffset="circumference - currentSkill.percent / 100 * circumference"
                    class="text-blue-500 " />
            </svg>
            <span class="absolute text-5xl" style="color: red;" x-text="`${currentSkill.percent}%`"></span>
    </section>
</main>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('skillDisplay', () => ({
            skills: [{
                    'title': 'Orders Done',
                    'percent': '65',
                },
                {
                    'title': 'Orders Left',
                    'percent': '35',
                },
            ],
            currentSkill: {
                'title': 'Orders Done',
                'percent': '65',
            }
        }));
    });
</script>