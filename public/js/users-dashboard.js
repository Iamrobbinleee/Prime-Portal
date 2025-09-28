$(document).ready(function() {
    async function getAvailedServices() {
        try {
            const response = await axios.get('https://prime-portal.proj/availed-services');
            const availed_services = response.data.services;

            console.log(availed_services);

            let container = $('#services-container');
            container.empty();

            availed_services.forEach(as => {
                // let item = `
                //     <div class="mb-2">
                //         <span style="color:white;">${as.service_name}</span> - 
                //         <a href="${as.service_url}" target="_blank" style="color:black;">${as.service_url}</a>
                //     </div>
                // `;

                let item = `
                    <div class="col-md-4">
                        <a href="${as.service_url}" target="_blank" style="color:black;">
                            <div class="card">
                                <div class="card-header dark:bg-gray-700 text-white">
                                    <span>${as.service_name}</span>
                                </div>
                                <div class="card-body">
                                    <i class="bi bi-amd"></i>
                                </div>
                            </div>
                        </a>
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