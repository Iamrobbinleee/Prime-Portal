<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="background-color: black;">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="color: black;">AVAILED SERVICES</h3>
                        </div>
                        <div class="card-body" id="services-container">
                            <!-- Services will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
$(document).ready(function() {
    async function getAvailedServices() {
        try {
            const response = await axios.get('https://prime-portal.proj/availed-services');
            const availed_services = response.data.services;

            console.log(availed_services);

            let container = $('#services-container');
            container.empty();

            availed_services.forEach(as => {
                let item = `
                    <div class="mb-2">
                        <span style="color:white;">${as.service_name}</span> - 
                        <a href="${as.service_url}" target="_blank" style="color:black;">${as.service_url}</a>
                    </div>
                `;
                container.append(item);
            });

        } catch (error) {
            console.error(error);
        }
    }

    getAvailedServices();
});
</script>
