document.addEventListener('DOMContentLoaded', function() {
    // Confirm before deletion
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            if (!confirm('Delete this cat permanently?')) {
                e.preventDefault();
            }
        });
    });
});
