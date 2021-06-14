const category = () => {
    const category = document.querySelectorAll('.category-navigation li');
    const categoryFilters = document.querySelectorAll('.category-filter');
    const brandForm = document.querySelectorAll('.category-filter');
    const categoryBtn = document.querySelector('.category-mobile-btn');

    const hasSubNav = () => {
        category.forEach(item => {
            if(item.children[1]) {
                item.classList.add('category-sub-nav');
            }
        });
    };

    hasSubNav();

    const dropdownMenu = () => {
        const menuItems = document.querySelectorAll('.category-sub-nav');

        menuItems.forEach(item => {
            try {
                item.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.target.parentElement.classList.toggle('active-nav');
                });
            } catch(e) {}
        });
    };

    const filters = (element, form) => {
        element.forEach((item, index) => {
            try {
                item.addEventListener('change', () => {
                    console.log(form[index]);
                    form[index].submit();
                });
            } catch(e) {}
        });
    };

    filters(categoryFilters, brandForm);

    dropdownMenu();

    const categorySidebar = () => {
        try {
            categoryBtn.addEventListener('click', () => {
                document.body.classList.toggle('open-filter');
            });
        } catch(e) {}
    };

    categorySidebar();
};

export default category;