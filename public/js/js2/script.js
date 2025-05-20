// Get modal and close button
var modal = document.getElementById('errorModal');
var closeModal = document.getElementById('closeModal');
var form = document.getElementById('formPendaftaran');
var namaInput = document.getElementById('nama');

// Handle form submission
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    var nama = namaInput.value;

    // Validate if name contains numbers
    if (/\d/.test(nama)) {
        // Show modal error message
        modal.style.display = "block";
    } else {
        // If no error, redirect to Google
        window.location.href = "https://www.google.com";
    }
});

// Close the modal when clicking "OK" button
closeModal.onclick = function() {
    modal.style.display = "none";
};

// Close the modal when clicking on the close button (×)
var closeBtn = document.getElementsByClassName('close-btn')[0];
closeBtn.onclick = function() {
    modal.style.display = "none";
};

// Close the modal when clicking anywhere outside the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
