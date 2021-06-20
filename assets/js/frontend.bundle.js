/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./js/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/index.js":
/*!*********************!*\
  !*** ./js/index.js ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _sass_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../sass/styles.scss */ \"./sass/styles.scss\");\n/* harmony import */ var _sass_styles_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_sass_styles_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _modules_navigation__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/navigation */ \"./js/modules/navigation.js\");\n/* harmony import */ var _modules_topSlider__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/topSlider */ \"./js/modules/topSlider.js\");\n/* harmony import */ var _modules_search__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/search */ \"./js/modules/search.js\");\n/* harmony import */ var _modules_customSelect__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/customSelect */ \"./js/modules/customSelect.js\");\n/* harmony import */ var _modules_filter__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./modules/filter */ \"./js/modules/filter.js\");\n/* harmony import */ var _modules_category__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./modules/category */ \"./js/modules/category.js\");\n/* harmony import */ var _modules_rangeSlider__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./modules/rangeSlider */ \"./js/modules/rangeSlider.js\");\n/* harmony import */ var _modules_gallery__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./modules/gallery */ \"./js/modules/gallery.js\");\n\n\n\n\n\n\n\n\n\nObject(_modules_navigation__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\nObject(_modules_topSlider__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\nObject(_modules_search__WEBPACK_IMPORTED_MODULE_3__[\"default\"])();\nObject(_modules_customSelect__WEBPACK_IMPORTED_MODULE_4__[\"default\"])();\nObject(_modules_filter__WEBPACK_IMPORTED_MODULE_5__[\"default\"])();\nObject(_modules_category__WEBPACK_IMPORTED_MODULE_6__[\"default\"])();\nObject(_modules_rangeSlider__WEBPACK_IMPORTED_MODULE_7__[\"default\"])();\nObject(_modules_gallery__WEBPACK_IMPORTED_MODULE_8__[\"default\"])();\n\n//# sourceURL=webpack:///./js/index.js?");

/***/ }),

/***/ "./js/modules/category.js":
/*!********************************!*\
  !*** ./js/modules/category.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar category = function category() {\n  var category = document.querySelectorAll('.category-navigation li');\n  var categoryFilters = document.querySelectorAll('.category-filter');\n  var brandForm = document.querySelectorAll('.category-filter');\n  var categoryBtn = document.querySelector('.category-mobile-btn');\n\n  var hasSubNav = function hasSubNav() {\n    category.forEach(function (item) {\n      if (item.children[1]) {\n        item.classList.add('category-sub-nav');\n      }\n    });\n  };\n\n  hasSubNav();\n\n  var dropdownMenu = function dropdownMenu() {\n    var menuItems = document.querySelectorAll('.category-sub-nav');\n    menuItems.forEach(function (item) {\n      try {\n        item.addEventListener('click', function (e) {\n          e.preventDefault();\n          e.target.parentElement.classList.toggle('active-nav');\n        });\n      } catch (e) {}\n    });\n  };\n\n  var filters = function filters(element, form) {\n    element.forEach(function (item, index) {\n      try {\n        item.addEventListener('change', function () {\n          console.log(form[index]);\n          form[index].submit();\n        });\n      } catch (e) {}\n    });\n  };\n\n  filters(categoryFilters, brandForm);\n  dropdownMenu();\n\n  var categorySidebar = function categorySidebar() {\n    try {\n      categoryBtn.addEventListener('click', function () {\n        document.body.classList.toggle('open-filter');\n      });\n    } catch (e) {}\n  };\n\n  categorySidebar();\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (category);\n\n//# sourceURL=webpack:///./js/modules/category.js?");

/***/ }),

/***/ "./js/modules/customSelect.js":
/*!************************************!*\
  !*** ./js/modules/customSelect.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar customSelect = function customSelect() {\n  var x, i, j, l, ll, selElmnt, a, b, c;\n  /* Look for any elements with the class \"custom-select\": */\n\n  x = document.getElementsByClassName(\"custom-select\");\n  l = x.length;\n\n  for (i = 0; i < l; i++) {\n    selElmnt = x[i].getElementsByTagName(\"select\")[0];\n    ll = selElmnt.length;\n    /* For each element, create a new DIV that will act as the selected item: */\n\n    a = document.createElement(\"DIV\");\n    a.setAttribute(\"class\", \"select-selected\");\n    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;\n    x[i].appendChild(a);\n    /* For each element, create a new DIV that will contain the option list: */\n\n    b = document.createElement(\"DIV\");\n    b.setAttribute(\"class\", \"select-items select-hide\");\n\n    for (j = 1; j < ll; j++) {\n      /* For each option in the original select element,\r\n      create a new DIV that will act as an option item: */\n      c = document.createElement(\"DIV\");\n      c.innerHTML = selElmnt.options[j].innerHTML;\n      c.addEventListener(\"click\", function (e) {\n        /* When an item is clicked, update the original select box,\r\n        and the selected item: */\n        var y, i, k, s, h, sl, yl;\n        s = this.parentNode.parentNode.getElementsByTagName(\"select\")[0];\n        sl = s.length;\n        h = this.parentNode.previousSibling;\n\n        for (i = 0; i < sl; i++) {\n          if (s.options[i].innerHTML == this.innerHTML) {\n            s.selectedIndex = i;\n            h.innerHTML = this.innerHTML;\n            y = this.parentNode.getElementsByClassName(\"same-as-selected\");\n            yl = y.length;\n\n            for (k = 0; k < yl; k++) {\n              y[k].removeAttribute(\"class\");\n            }\n\n            this.setAttribute(\"class\", \"same-as-selected\");\n            break;\n          }\n        }\n\n        h.click();\n      });\n      b.appendChild(c);\n    }\n\n    x[i].appendChild(b);\n    a.addEventListener(\"click\", function (e) {\n      /* When the select box is clicked, close any other select boxes,\r\n      and open/close the current select box: */\n      e.stopPropagation();\n      closeAllSelect(this);\n      this.nextSibling.classList.toggle(\"select-hide\");\n      this.classList.toggle(\"select-arrow-active\");\n    });\n  }\n\n  function closeAllSelect(elmnt) {\n    /* A function that will close all select boxes in the document,\r\n    except the current select box: */\n    var x,\n        y,\n        i,\n        xl,\n        yl,\n        arrNo = [];\n    x = document.getElementsByClassName(\"select-items\");\n    y = document.getElementsByClassName(\"select-selected\");\n    xl = x.length;\n    yl = y.length;\n\n    for (i = 0; i < yl; i++) {\n      if (elmnt == y[i]) {\n        arrNo.push(i);\n      } else {\n        y[i].classList.remove(\"select-arrow-active\");\n      }\n    }\n\n    for (i = 0; i < xl; i++) {\n      if (arrNo.indexOf(i)) {\n        x[i].classList.add(\"select-hide\");\n      }\n    }\n  }\n  /* If the user clicks anywhere outside the select box,\r\n  then close all select boxes: */\n\n\n  document.addEventListener(\"click\", closeAllSelect);\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (customSelect);\n\n//# sourceURL=webpack:///./js/modules/customSelect.js?");

/***/ }),

/***/ "./js/modules/filter.js":
/*!******************************!*\
  !*** ./js/modules/filter.js ***!
  \******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar filter = function filter() {\n  var filters = document.querySelectorAll('.filter-select .select-items div');\n  var form = document.querySelector('.filters');\n\n  try {\n    filters.forEach(function (filter) {\n      filter.addEventListener('click', function () {\n        document.querySelectorAll('.filters select option').forEach(function (item) {\n          if (event.target.textContent === item.value) {\n            form.submit();\n          }\n        });\n      });\n    });\n  } catch (e) {}\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (filter);\n\n//# sourceURL=webpack:///./js/modules/filter.js?");

/***/ }),

/***/ "./js/modules/gallery.js":
/*!*******************************!*\
  !*** ./js/modules/gallery.js ***!
  \*******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar gallery = function gallery() {\n  var allImages = document.querySelectorAll('.gallery-img');\n  var modal = document.createElement('div');\n  var modalImg = document.createElement('img');\n  var closeBtn = document.createElement('span');\n  var arrows = document.createElement('div');\n  arrows.classList.add('gallery-arrow-holder');\n  var leftArrow = document.createElement('i');\n  var rightArrow = document.createElement('i');\n  leftArrow.classList.add('icon-keyboard_arrow_left');\n  rightArrow.classList.add('icon-keyboard_arrow_right');\n  var overlay = document.createElement('div');\n  overlay.classList.add('overlay');\n  closeBtn.classList.add('close-gallery', 'icon-clear');\n  modal.classList.add('modalGallery');\n  modal.prepend(closeBtn);\n  modal.append(modalImg);\n  arrows.append(leftArrow);\n  arrows.prepend(rightArrow);\n  modal.append(arrows);\n  var slideIndex = 0;\n\n  var addModal = function addModal(src) {\n    document.body.append(modal);\n    modalImg.setAttribute('src', src);\n    document.body.append(overlay);\n    document.body.classList.add('modal-active');\n  };\n\n  var closeGallery = function closeGallery() {\n    modal.remove();\n    overlay.remove();\n    document.body.classList.remove('modal-active');\n  };\n\n  var galleryEvent = function galleryEvent() {\n    allImages.forEach(function (image, index) {\n      image.addEventListener('click', function (e) {\n        e.preventDefault();\n        addModal(image.getAttribute('href'));\n      });\n    });\n\n    if (!closeBtn && !overlay) {\n      return;\n    }\n\n    function removeLetters(element) {\n      return +element.replace(/\\D/g, '');\n    }\n\n    closeBtn.addEventListener('click', closeGallery);\n    overlay.addEventListener('click', closeGallery);\n  };\n\n  galleryEvent();\n\n  if (!leftArrow || !rightArrow) {\n    return;\n  }\n\n  var gallerySlider = function gallerySlider() {\n    leftArrow.addEventListener('click', function () {\n      if (slideIndex === 0) {\n        slideIndex = allImages.length;\n      } else {\n        slideIndex--;\n      }\n\n      if (typeof allImages[slideIndex] === 'undefined') {\n        addModal(allImages[allImages.length - 1].getAttribute('href'));\n      } else {\n        addModal(allImages[slideIndex].getAttribute('href'));\n      }\n    });\n    rightArrow.addEventListener('click', function () {\n      if (slideIndex === allImages.length) {\n        slideIndex = 0;\n      } else {\n        slideIndex++;\n      }\n\n      if (typeof allImages[slideIndex] === 'undefined') {\n        addModal(allImages[1].getAttribute('href'));\n      } else {\n        addModal(allImages[slideIndex].getAttribute('href'));\n      }\n    });\n  };\n\n  gallerySlider();\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (gallery);\n\n//# sourceURL=webpack:///./js/modules/gallery.js?");

/***/ }),

/***/ "./js/modules/navigation.js":
/*!**********************************!*\
  !*** ./js/modules/navigation.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar navigation = function navigation() {\n  var isMobile = false;\n  var navigationList = document.querySelectorAll('.nav-holder li');\n  var listLink = document.createElement('a');\n  var clonedSub = document.querySelectorAll('.cloned-sub');\n  var navigation = document.querySelectorAll('.top-nav li');\n  var backButton = document.createElement('li');\n  backButton.classList.add('back-btn');\n  var list = document.createElement('li');\n  list.classList.add('cloned-sub');\n  backButton.insertAdjacentHTML('beforeend', \"<a href=\\\"#\\\"><i class=\\\"icon-keyboard_backspace\\\"></i>\\u041D\\u0430\\u0437\\u0430\\u0434</a>\");\n  list.append(listLink);\n\n  var hasSubNav = function hasSubNav() {\n    navigationList.forEach(function (item) {\n      if (item.children[1]) {\n        item.classList.add('sub-nav');\n      }\n    });\n  };\n\n  var removeArrows = function removeArrows() {\n    if (!isMobile) {\n      var allArrows = document.querySelectorAll('.sub-nav .icon-keyboard_arrow_right');\n      allArrows.forEach(function (item) {\n        item.remove();\n      });\n    }\n  };\n\n  var hoverState = function hoverState() {\n    if (!isMobile) {\n      var allSubNavs = document.querySelectorAll('.sub-nav');\n      allSubNavs.forEach(function (item) {\n        try {\n          item.addEventListener('mouseover', function () {\n            item.classList.add('hover-menu-active');\n            setTimeout(function () {\n              item.classList.remove('hover-menu-active');\n            }, 1000);\n          });\n        } catch (e) {}\n      });\n    }\n  };\n\n  var addArrowSubNav = function addArrowSubNav() {\n    if (!navigationList) {\n      return;\n    }\n\n    navigationList.forEach(function (item) {\n      var arrow = document.createElement('span');\n      arrow.classList.add('icon-keyboard_arrow_right');\n\n      if (item.classList.contains('sub-nav') && isMobile) {\n        if (!item && item === 'undefined' && item === null) {\n          return;\n        }\n\n        if (item.children[0].children.length < 1) {\n          item.children[0].append(arrow);\n        } else {\n          arrow.remove();\n        }\n      }\n    });\n  };\n\n  var mobileNavigation = function mobileNavigation() {\n    var navTrigger = document.querySelector('.hamburger-holder');\n\n    try {\n      navTrigger.addEventListener('click', function () {\n        document.body.parentElement.classList.toggle('nav-active');\n        document.body.classList.toggle('nav-active');\n      });\n    } catch (e) {}\n  };\n\n  var isActiveMobile = function isActiveMobile() {\n    isMobile = window.innerWidth <= 1448 ? true : false;\n  };\n\n  var removeClone = function removeClone() {\n    clonedSub.forEach(function (item) {\n      document.body.removeChild(item);\n      list.inerHTML = '';\n    });\n  };\n\n  var removeBackBtn = function removeBackBtn() {\n    if (!backButton) {\n      return;\n    }\n\n    if (!isMobile) {\n      backButton.remove();\n    }\n  };\n\n  var resize = function resize() {\n    var resizeTimer;\n    window.addEventListener('resize', function () {\n      clearTimeout(resizeTimer);\n      resizeTimer = setTimeout(function () {\n        isActiveMobile();\n        addArrowSubNav();\n        removeArrows();\n        removeBackBtn();\n        hoverState();\n      }, 250);\n    });\n  };\n\n  var mobileNav = function mobileNav() {\n    navigationList.forEach(function (item) {\n      item.classList.remove('active-sub-nav');\n      removeClone();\n\n      try {\n        item.addEventListener('click', function (event) {\n          if (item.classList.contains('sub-nav') && isMobile) {\n            var listParent = item.children[1];\n            listLink.setAttribute('href', item.children[0].getAttribute('href'));\n            listLink.textContent = item.children[0].textContent;\n            list.classList.remove('active-sub-nav');\n            listParent.prepend(list);\n            listParent.prepend(backButton);\n            console.log(event.target.parentElement);\n\n            if (event.target.parentElement.classList.contains('sub-nav')) {\n              event.preventDefault();\n              event.target.parentElement.classList.add('active-sub-nav');\n              console.log(event.target.parentElement);\n            }\n          }\n        });\n      } catch (e) {}\n    });\n\n    try {\n      backButton.addEventListener('click', function (event) {\n        event.preventDefault();\n        removeClone();\n        navigationList.forEach(function (item) {\n          item.classList.remove('active-sub-nav');\n        });\n      });\n    } catch (e) {}\n  };\n\n  mobileNav();\n  resize();\n  mobileNavigation();\n  hasSubNav();\n  removeArrows();\n  addArrowSubNav();\n  removeClone();\n  removeBackBtn();\n  isActiveMobile();\n  hoverState();\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (navigation);\n\n//# sourceURL=webpack:///./js/modules/navigation.js?");

/***/ }),

/***/ "./js/modules/rangeSlider.js":
/*!***********************************!*\
  !*** ./js/modules/rangeSlider.js ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar rangeSlider = function rangeSlider() {\n  var sliderLeft = document.querySelectorAll('.left-slide');\n  var sliderRight = document.querySelectorAll('.right-slide');\n  var range = document.querySelectorAll('.range');\n  var leftThumb = document.querySelectorAll('.left-thumb');\n  var rightThumb = document.querySelectorAll('.right-thumb');\n  var leftCount = document.querySelectorAll('.left-count');\n  var rightCount = document.querySelectorAll('.right-count');\n  console.log(leftCount);\n\n  var setValue = function setValue(firstElement, secondElement, thumb, range, count, position) {\n    var currentElement = firstElement,\n        min = parseInt(currentElement.min),\n        max = parseInt(currentElement.max);\n\n    if (position === 'left') {\n      currentElement.value = Math.min(parseInt(currentElement.value), parseInt(secondElement.value) - 1);\n    } else if (position === 'right') {\n      currentElement.value = Math.max(parseInt(currentElement.value), parseInt(secondElement.value) - 1);\n    }\n\n    var percent = (currentElement.value - min) / (max - min) * 100;\n\n    if (position === 'left') {\n      thumb.style.left = \"\".concat(percent, \"%\");\n      range.style.left = \"\".concat(percent, \"%\");\n      count.style.left = \"\".concat(percent, \"%\");\n      count.innerText = parseInt(percent);\n    } else if (position === 'right') {\n      thumb.style.right = 100 - percent + '%';\n      range.style.right = 100 - percent + '%';\n      count.style.right = 100 - percent + '%';\n      count.innerText = parseInt(percent);\n    }\n  };\n\n  try {\n    sliderLeft.forEach(function (item, index) {\n      item.addEventListener('input', function () {\n        setValue(item, sliderRight[index], leftThumb[index], range[index], leftCount[index], 'left');\n      });\n      setValue(item, sliderRight[index], leftThumb[index], range[index], leftCount[index], 'left');\n    });\n    sliderRight.forEach(function (item, index) {\n      item.addEventListener('input', function () {\n        setValue(item, sliderLeft[index], rightThumb[index], range[index], rightCount[index], 'right');\n      });\n      setValue(item, sliderLeft[index], rightThumb[index], range[index], rightCount[index], 'right');\n    });\n  } catch (e) {}\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (rangeSlider);\n\n//# sourceURL=webpack:///./js/modules/rangeSlider.js?");

/***/ }),

/***/ "./js/modules/search.js":
/*!******************************!*\
  !*** ./js/modules/search.js ***!
  \******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar search = function search() {\n  var searchBtn = document.querySelector('.search');\n  var searchContainer = document.querySelector('.search-form-holder');\n  var overlay = document.createElement('div');\n  overlay.classList.add('searcgh-overlay');\n\n  var closeSearch = function closeSearch() {\n    searchContainer.classList.remove('open-search');\n  };\n\n  searchBtn.addEventListener('click', function (e) {\n    e.stopPropagation();\n    searchBtn.classList.toggle('active-btn');\n    searchContainer.classList.toggle('open-search');\n\n    if (searchContainer.classList.contains('open-search')) {\n      document.body.append(overlay);\n    } else {\n      overlay.remove();\n    }\n  });\n  searchContainer.addEventListener('click', function (e) {\n    e.stopPropagation();\n  });\n  document.body.addEventListener('click', function () {\n    searchBtn.classList.remove('open-search');\n    searchBtn.classList.remove('active-btn');\n    closeSearch();\n    overlay.remove();\n  });\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (search);\n\n//# sourceURL=webpack:///./js/modules/search.js?");

/***/ }),

/***/ "./js/modules/topSlider.js":
/*!*********************************!*\
  !*** ./js/modules/topSlider.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar topSlider = function topSlider() {\n  var slider = document.querySelector('#top-slider');\n\n  try {\n    new Splide(slider, {\n      type: 'loop',\n      perPage: 1,\n      drag: false,\n      navigation: false,\n      pagination: false\n    }).mount();\n  } catch (e) {}\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (topSlider);\n\n//# sourceURL=webpack:///./js/modules/topSlider.js?");

/***/ }),

/***/ "./sass/styles.scss":
/*!**************************!*\
  !*** ./sass/styles.scss ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./sass/styles.scss?");

/***/ })

/******/ });