// Xoay icon khi có class show
document.addEventListener('DOMContentLoaded', function () {
    const collapseElements = document.querySelectorAll('.collapse');
    
    collapseElements.forEach(collapse => {
        collapse.addEventListener('shown.bs.collapse', function () {
            const icon = this.previousElementSibling.querySelector('.collapse-icon');
            icon.style.transform = 'rotate(180deg)';
        });

        collapse.addEventListener('hidden.bs.collapse', function () {
            const icon = this.previousElementSibling.querySelector('.collapse-icon');
            icon.style.transform = 'rotate(0deg)';
        });
    });
});