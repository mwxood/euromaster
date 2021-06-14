const navigation = () => {
    let isMobile = false;
    let navigationList = document.querySelectorAll('.nav-holder li');
    const listLink = document.createElement('a');
    const clonedSub = document.querySelectorAll('.cloned-sub');
    const navigation = document.querySelectorAll('.top-nav li');
    let backButton = document.createElement('li');
    backButton.classList.add('back-btn');
    let list = document.createElement('li');
    list.classList.add('cloned-sub');
    backButton.insertAdjacentHTML('beforeend', `<a href="#"><i class="icon-keyboard_backspace"></i>Назад</a>`);
    list.append(listLink);

    const hasSubNav = () => {
        navigationList.forEach(item => {
            if(item.children[1]) {
                item.classList.add('sub-nav');
            }
        });
    };

    const removeArrows = () => {
        if(!isMobile) {
            const allArrows = document.querySelectorAll('.sub-nav .icon-keyboard_arrow_right');

            allArrows.forEach(item => {
                item.remove();
            });
        }
    };

    const hoverState = () => {
        if(!isMobile) {
            const allSubNavs = document.querySelectorAll('.sub-nav');

            allSubNavs.forEach(item => {
                try {
                    item.addEventListener('mouseover', () => {
                        item.classList.add('hover-menu-active');
                        setTimeout(function() {
                            item.classList.remove('hover-menu-active');
                        }, 1000);
                    });
                } catch(e) {}
            });
        }
        
    };

    const addArrowSubNav = () => {
        if(!navigationList) {
            return;
        }
        navigationList.forEach(item => {
            const arrow = document.createElement('span');
            arrow.classList.add('icon-keyboard_arrow_right');

            if(item.classList.contains('sub-nav') && isMobile) {
                if(!item && item === 'undefined' && item === null) {return}

                if(item.children[0].children.length < 1 ) {
                    item.children[0].append(arrow);
                } else {
                    arrow.remove();
                }
            }
        });
    };
    

    const mobileNavigation = () => {
        const navTrigger = document.querySelector('.hamburger');

        try {
            navTrigger.addEventListener('click', () => {
                document.body.parentElement.classList.toggle('nav-active');
                document.body.classList.toggle('nav-active');
             });
        } catch(e) {}
    };

    const isActiveMobile = () => {
        isMobile = (window.innerWidth <= 1448) ? true : false;
    };

    const removeClone = () => {
        clonedSub.forEach(item => {
            document.body.removeChild(item);
            list.inerHTML = '';
        });
    };

    const removeBackBtn = () => {
        if(!backButton) {
            return;
        }
        if(!isMobile) {
            backButton.remove();
        }
    };

    const resize = () => {
        let resizeTimer;
        window.addEventListener('resize', () =>{
            clearTimeout(resizeTimer);

            resizeTimer = setTimeout(function() {
                isActiveMobile();
                addArrowSubNav();
                removeArrows();
                removeBackBtn();
                hoverState();
             }, 250);
        });
    };

    const mobileNav = () => {

        navigationList.forEach(item => {
            item.classList.remove('active-sub-nav');
            removeClone();
           try {
               
            item.addEventListener('click', function(event) {
                
                if(item.classList.contains('sub-nav') && isMobile) {
                    let listParent = item.children[1];
                    listLink.setAttribute('href', item.children[0].getAttribute('href'))
                    listLink.textContent = item.children[0].textContent;
                    list.classList.remove('active-sub-nav');
 
                    listParent.prepend(list);
                    listParent.prepend(backButton);

                    console.log(event.target.parentElement)
 
                    if(event.target.parentElement.classList.contains('sub-nav')) {
                        event.preventDefault();
                        event.target.parentElement.classList.add('active-sub-nav');
                        console.log(event.target.parentElement);
                    }
 
                }
 
            });
           }catch(e) {}
        });

        try {
            
        backButton.addEventListener('click', (event) => {
            event.preventDefault();
            removeClone();
            navigationList.forEach(item => {
                item.classList.remove('active-sub-nav');
            });
        });
        } catch(e) {}
    };

    mobileNav();
    resize();
    mobileNavigation();
    hasSubNav();
    removeArrows();
    addArrowSubNav();
    removeClone();
    removeBackBtn();
    isActiveMobile();
    hoverState();
};

export default navigation;