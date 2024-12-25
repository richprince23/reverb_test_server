import './bootstrap';


const eventList = document.querySelector('.event-list');

const event = document.createElement('div');
event.classList.add('event');
event.innerHTML = `
        <div class="flex flex-col gap-2">
            <div class="flex justify-between items-center">
                <span class="text-sm text-blue-700">Hellllllo</span>
            </div>
        </div>`;


eventList.appendChild(event);


Echo.channel('test-channel').listen('TestEvent', (e) => {
    const event = document.createElement('div');
    event.classList.add('event');
    event.innerHTML = `
            <div class="flex flex-col gap-2">
                <div class="flex justify-between items-center">
                    <span class="text-sm text-blue-700">Another</span>
                </div>
            </div>`;


    eventList.appendChild(event);
    console.log(e);
});
