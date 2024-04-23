// // T&C Modal
// var myModal = new bootstrap.Modal(document.getElementById('T&CModal'), {})
// myModal.toggle()

// modal accept terms
document.getElementById('agreeCheckbox').addEventListener('change', function() {
    var acceptButton = document.getElementById('acceptButton');
    if (this.checked) {
        acceptButton.classList.remove('disabled');
    } else {
        acceptButton.classList.add('disabled');
    }
});

// Function to check if the user has already accepted the terms
function hasAcceptedTerms() {
    // Check if 'termsAccepted' key exists in local storage
    return localStorage.getItem('termsAccepted') === 'true';
}

// Function to set that the user has accepted the terms
function setAcceptedTerms() {
    // Set 'termsAccepted' key in local storage to true
    localStorage.setItem('termsAccepted', 'true');
}

// Function to display the modal
function displayModal() {
    // Get the modal element
    var myModal = new bootstrap.Modal(document.getElementById('T&CModal'), {});

    // Toggle the modal
    myModal.toggle();
}

// Check if the user has not already accepted the terms
if (!hasAcceptedTerms()) {
    // Display the modal
    displayModal();

    // Add event listener to the accept button
    document.getElementById('acceptButton').addEventListener('click', function() {
        // Set that the user has accepted the terms
        setAcceptedTerms();
    });
}
