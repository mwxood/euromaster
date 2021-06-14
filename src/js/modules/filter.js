const filter = () => {
    const filters = document.querySelectorAll('.filter-select .select-items div');
    const form = document.querySelector('.filters');

    try {
        filters.forEach(filter => {
            filter.addEventListener('click', () => {
                document.querySelectorAll('.filters select option').forEach(item => {
                    if(event.target.textContent === item.value) {
                        form.submit()
                    }
                });
            });
        });
    } catch(e) {}
};

export default filter;