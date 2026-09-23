function updateLocationOptions() {
    let event_modality = document.getElementById("event_modality").value;
    let event_location = document.getElementById("event_location");
    let event_remote_url = document.getElementById("event_remote_url");

    if (event_modality === "2") {
        event_location.disabled = false;
        event_remote_url.disabled = true;
        event_location.required = true;
        event_remote_url.required = false;
    }
    else if (event_modality === "1") {
        event_location.disabled = true;
        event_remote_url.disabled = false;
        event_location.required = false;
        event_remote_url.required = true;
    }
}

let events = [];
let eventBeingEdited = null;
let eventElementBeingEdited = null;

function saveEvent() {
    const modality = document.getElementById("event_modality").value;

    const eventDetails = {
        name: document.getElementById("event-name").value,
        weekday: document.getElementById("event_weekday").value,
        time: document.getElementById("event_time").value,
        modality: modality,
        location: modality === "2"
            ? document.getElementById("event_location").value
            : null,
        remote_url: modality === "1"
            ? document.getElementById("event_remote_url").value
            : null,
        attendees: document.getElementById("event_attendees").value,
        category: document.getElementById("event_category").value
    };
    if (eventBeingEdited) {
        const eventIndex = events.indexOf(eventBeingEdited);
        if (eventIndex !== -1) {
            events[eventIndex] = eventDetails;
        }
        if (eventElementBeingEdited) {
            eventElementBeingEdited.remove();
        }
        eventBeingEdited = null;
        eventElementBeingEdited = null;
    } else {
        events.push(eventDetails);
    }
    console.log(events);
    addEventToCalendarUI(eventDetails);
    document.getElementById("event_form").reset();
    const modalElement = document.getElementById('event_modal');
    const modal = bootstrap.Modal.getOrCreateInstance(modalElement);
    modal.hide();
}

function editModal(eventDetails, eventElement) {
    eventBeingEdited = eventDetails;
    eventElementBeingEdited = eventElement;

    document.getElementById("event-name").value = eventDetails.name;
    document.getElementById("event_weekday").value = eventDetails.weekday;
    document.getElementById("event_time").value = eventDetails.time;
    document.getElementById("event_modality").value = eventDetails.modality;
    document.getElementById("event_location").value = eventDetails.location || "";
    document.getElementById("event_remote_url").value = eventDetails.remote_url || "";
    document.getElementById("event_attendees").value = eventDetails.attendees;
    document.getElementById("event_category").value = eventDetails.category;
    updateLocationOptions();

    const modalElement = document.getElementById("event_modal");  // Get the modal element
    bootstrap.Modal.getOrCreateInstance(modalElement).show();  // Show the modal
}

function createEventDetailElement(label, value) {
    const element = document.createElement("div");
    element.className = "col-12";
    element.textContent = `${label}: ${value}`;
    return element;
}

function createEventCard(eventDetails) {
    const eventElement = document.createElement('div');
    eventElement.className = 'event row border rounded m-1 py-1';
    eventElement.addEventListener('click', () => editModal(eventDetails, eventElement));
    eventElement.appendChild(createEventDetailElement('Name', eventDetails.name));
    eventElement.appendChild(createEventDetailElement('Day', eventDetails.weekday));
    eventElement.appendChild(createEventDetailElement('Time', eventDetails.time));
    eventElement.appendChild(createEventDetailElement('Modality', eventDetails.modality === '1' ? 'Remote' : 'In-Person'));
    if (eventDetails.modality === '2') {
        eventElement.appendChild(createEventDetailElement('Location', eventDetails.location));
    } else if (eventDetails.modality === '1') {
        eventElement.appendChild(createEventDetailElement('Remote URL', eventDetails.remote_url));
    }
    eventElement.appendChild(createEventDetailElement('Attendees', eventDetails.attendees));
    eventElement.appendChild(createEventDetailElement('Category', eventDetails.category));
    if (eventDetails.category === 'Academic') {
        eventElement.style.backgroundColor = '#d1e7dd'; // Light green
    } else if (eventDetails.category === 'Personal') {
        eventElement.style.backgroundColor = '#f8d7da'; // Light red
    } else if (eventDetails.category === 'Work') {
        eventElement.style.backgroundColor = '#fff3cd'; // Light yellow
    } else if (eventDetails.category === 'Social') {
        eventElement.style.backgroundColor = '#cfe2ff'; // Light blue
    } else if (eventDetails.category === 'Other') {
        eventElement.style.backgroundColor = '#e2e3e5'; // Light gray
    }
    return eventElement;

}
function addEventToCalendarUI(eventInfo) {
    const weekday = String(eventInfo.weekday).trim().toLowerCase();
    const weekdayContainer = document.getElementById(weekday);

    if (weekdayContainer) {
        weekdayContainer.appendChild(createEventCard(eventInfo));
    } else {
        console.error("Weekday container not found:", weekday);
    }
}
