function showToast(type, message) {
  // Get the toast element and its components
  const toastEl = document.getElementById('successToast');
  const toastIcon = toastEl.querySelector('.fas');
  const toastHeader = toastEl.querySelector('.me-auto');
  const toastBody = document.getElementById('toastBody');

  // Update the toast icon and header based on the type
  if (type === 'success') {
    toastIcon.className = 'fas fa-check-circle text-success me-2';
    toastHeader.textContent = 'Success';
  } else if (type === 'error') {
    toastIcon.className = 'fas fa-times-circle text-danger me-2';
    toastHeader.textContent = 'Error';
  }

  // Set the toast body to the message
  toastBody.textContent = message;

  // Create a new Bootstrap toast and show it
  const toast = new bootstrap.Toast(toastEl);
  toast.show();

  // Add the fadeInUp animation to the toast
  toastEl.classList.add('animate__animated', 'animate__fadeInUpBig');
}

// Listen for 'message' event from the window
window.addEventListener('message', event => {
  // Check if the event contains detail
  if (event.detail) {
    // Extract the error, success, and type from the event detail
    const { error, success, type } = event.detail;

    // If the event contains a success detail
    if (success) {
      showToast('success', success);
    } else if (error) {
      // Display an error message using Swal.fire
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: error
      });
    }
  }
});
