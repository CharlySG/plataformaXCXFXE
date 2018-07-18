M.AutoInit();
document.addEventListener('DOMContentLoaded', function () {
    let elems = document.querySelectorAll('#dropnavbar');
    M.Dropdown.init(elems, {
        coverTrigger: false,
        constrainWidth: false
    });
});