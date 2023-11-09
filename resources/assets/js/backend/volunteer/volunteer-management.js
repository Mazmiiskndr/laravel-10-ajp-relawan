// Initialize DataTable when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
  const columns = [
    { data: 'DT_RowIndex', name: 'DT_RowIndex', width: '10px', orderable: false, searchable: false },
    { data: 'name', name: 'name' },
    { data: 'volunteer_name', name: 'volunteer_name' },
    { data: 'nik', name: 'nik' },
    { data: 'district', name: 'district' },
    { data: 'village', name: 'village' },
    { data: 'action', name: 'action', orderable: false, searchable: false }
  ];

  dataTable = $('#myTable').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    autoWidth: false,
    order: [[0]], // order by the second column
    ajax: document.getElementById('myTable').dataset.route,
    columns: columns
  });
});

// Refresh DataTable when 'refreshDatatable' event is fired
window.addEventListener('refreshDatatable', () => {
  dataTable.ajax.reload();
});

// Function to show a modal for DETAIL!
function showVolunteer(volunteerId) {
  Livewire.dispatch('getVolunteer', volunteerId);
}
