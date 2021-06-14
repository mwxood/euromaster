const search = () => {
    const searchBtn = document.querySelector('.search');
    const searchContainer = document.querySelector('.search-form-holder');
    const overlay = document.createElement('div');
    overlay.classList.add('searcgh-overlay');


    const closeSearch = () => {
        searchContainer.classList.remove('open-search');
    };

    searchBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        searchBtn.classList.toggle('active-btn');
        searchContainer.classList.toggle('open-search');
        if(searchContainer.classList.contains('open-search')) {
            document.body.append(overlay);
        } else {
            overlay.remove();
        }
       
    });

    searchContainer.addEventListener('click', (e) => {
        e.stopPropagation();
    });

    document.body.addEventListener('click', () => {
        searchBtn.classList.remove('open-search');
        searchBtn.classList.remove('active-btn');
        closeSearch();
        overlay.remove();
    });
};

export default search;