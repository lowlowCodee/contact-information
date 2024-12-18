var editModal = document.getElementById('editModal');
editModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget; // Button na nag-trigger ng modal
    var id = button.getAttribute('data-id');
    var name = button.getAttribute('data-name');
    var phone = button.getAttribute('data-phone');
    var address = button.getAttribute('data-address');

    // Populate the modal fields
    document.getElementById('edit-id').value = id;
    document.getElementById('edit-name').value = name;
    document.getElementById('edit-phone').value = phone;
    document.getElementById('edit-address').value = address;