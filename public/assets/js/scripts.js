/******/ (function(modules) { // webpackBootstrap
/******/ 	// install a JSONP callback for chunk loading
/******/ 	function webpackJsonpCallback(data) {
/******/ 		var chunkIds = data[0];
/******/ 		var moreModules = data[1];
/******/ 		var executeModules = data[2];
/******/
/******/ 		// add "moreModules" to the modules object,
/******/ 		// then flag all "chunkIds" as loaded and fire callback
/******/ 		var moduleId, chunkId, i = 0, resolves = [];
/******/ 		for(;i < chunkIds.length; i++) {
/******/ 			chunkId = chunkIds[i];
/******/ 			if(Object.prototype.hasOwnProperty.call(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 				resolves.push(installedChunks[chunkId][0]);
/******/ 			}
/******/ 			installedChunks[chunkId] = 0;
/******/ 		}
/******/ 		for(moduleId in moreModules) {
/******/ 			if(Object.prototype.hasOwnProperty.call(moreModules, moduleId)) {
/******/ 				modules[moduleId] = moreModules[moduleId];
/******/ 			}
/******/ 		}
/******/ 		if(parentJsonpFunction) parentJsonpFunction(data);
/******/
/******/ 		while(resolves.length) {
/******/ 			resolves.shift()();
/******/ 		}
/******/
/******/ 		// add entry modules from loaded chunk to deferred list
/******/ 		deferredModules.push.apply(deferredModules, executeModules || []);
/******/
/******/ 		// run deferred modules when all chunks ready
/******/ 		return checkDeferredModules();
/******/ 	};
/******/ 	function checkDeferredModules() {
/******/ 		var result;
/******/ 		for(var i = 0; i < deferredModules.length; i++) {
/******/ 			var deferredModule = deferredModules[i];
/******/ 			var fulfilled = true;
/******/ 			for(var j = 1; j < deferredModule.length; j++) {
/******/ 				var depId = deferredModule[j];
/******/ 				if(installedChunks[depId] !== 0) fulfilled = false;
/******/ 			}
/******/ 			if(fulfilled) {
/******/ 				deferredModules.splice(i--, 1);
/******/ 				result = __webpack_require__(__webpack_require__.s = deferredModule[0]);
/******/ 			}
/******/ 		}
/******/
/******/ 		return result;
/******/ 	}
/******/
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// object to store loaded and loading chunks
/******/ 	// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 	// Promise = chunk loading, 0 = chunk loaded
/******/ 	var installedChunks = {
/******/ 		"main": 0
/******/ 	};
/******/
/******/ 	var deferredModules = [];
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	var jsonpArray = window["webpackJsonp"] = window["webpackJsonp"] || [];
/******/ 	var oldJsonpFunction = jsonpArray.push.bind(jsonpArray);
/******/ 	jsonpArray.push = webpackJsonpCallback;
/******/ 	jsonpArray = jsonpArray.slice();
/******/ 	for(var i = 0; i < jsonpArray.length; i++) webpackJsonpCallback(jsonpArray[i]);
/******/ 	var parentJsonpFunction = oldJsonpFunction;
/******/
/******/
/******/ 	// add entry module to deferred list
/******/ 	deferredModules.push(["./src/js/index.js","vendors"]);
/******/ 	// run deferred modules when ready
/******/ 	return checkDeferredModules();
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/_backend.js":
/*!****************************!*\
  !*** ./src/js/_backend.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("/* WEBPACK VAR INJECTION */(function($) {$(document).ready(function () {// console.log('write right here')\n});\n/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ \"./node_modules/jquery/dist/jquery.js\")))\n\n//# sourceURL=webpack:///./src/js/_backend.js?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"./node_modules/jquery/dist/jquery.js\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var js_datepicker__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! js-datepicker */ \"./node_modules/js-datepicker/dist/datepicker.min.js\");\n/* harmony import */ var js_datepicker__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(js_datepicker__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _fancyapps_fancybox__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @fancyapps/fancybox */ \"./node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js\");\n/* harmony import */ var _fancyapps_fancybox__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_fancyapps_fancybox__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var inputmask__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! inputmask */ \"./node_modules/inputmask/index.js\");\n/* harmony import */ var inputmask__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(inputmask__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var nouislider__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! nouislider */ \"./node_modules/nouislider/distribute/nouislider.js\");\n/* harmony import */ var nouislider__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(nouislider__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var parsleyjs__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! parsleyjs */ \"./node_modules/parsleyjs/dist/parsley.js\");\n/* harmony import */ var parsleyjs__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(parsleyjs__WEBPACK_IMPORTED_MODULE_5__);\n/* harmony import */ var select2__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! select2 */ \"./node_modules/select2/dist/js/select2.js\");\n/* harmony import */ var select2__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(select2__WEBPACK_IMPORTED_MODULE_6__);\n/* harmony import */ var swiper_bundle__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! swiper/bundle */ \"./node_modules/swiper/swiper-bundle.esm.js\");\n/* harmony import */ var tooltipster__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! tooltipster */ \"./node_modules/tooltipster/dist/js/tooltipster.bundle.min.js\");\n/* harmony import */ var tooltipster__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(tooltipster__WEBPACK_IMPORTED_MODULE_8__);\n/* harmony import */ var _backend__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./_backend */ \"./src/js/_backend.js\");\n/* harmony import */ var _backend__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(_backend__WEBPACK_IMPORTED_MODULE_9__);\n\n\n\n\n\n\n\n\n\n\njquery__WEBPACK_IMPORTED_MODULE_0___default()(function () {\n  selects();\n  inputMask();\n  checkInputFill();\n  validation();\n  burgerMenu();\n  mainTopBanner();\n  anchorsFixed();\n  anchorsItemsActive();\n  anchorsSoftScroll();\n  storageSliderInit();\n  mapInit();\n  mapContactsFeedback();\n  gallery();\n  faq();\n  pricesSelectSize();\n  pricesSelectPaymentMethod();\n  pricesRangeSlider();\n  pricesDatepicker();\n});\n\nfunction selects() {\n  var selects = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.ui-select select');\n  selects.each(function () {\n    var curr = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this),\n        currWrap = curr.parent('.ui-select');\n    curr.select2({\n      minimumResultsForSearch: Infinity,\n      width: '100%',\n      dropdownAutoWidth: true,\n      dropdownParent: currWrap\n    });\n  });\n}\n\nfunction inputMask() {\n  inputmask__WEBPACK_IMPORTED_MODULE_3___default()({\n    \"mask\": \"+7 (999) 999-99-99\",\n    showMaskOnHover: false\n  }).mask('#phone');\n}\n\nfunction checkInputFill() {\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('input').on('change', function () {\n    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).val() != '') {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('filled');\n    } else {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).removeClass('filled');\n    }\n  });\n}\n\nfunction validation() {\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('form').parsley();\n}\n\nfunction burgerMenu() {\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.header-burger-button').on('click', function () {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).parents('header').toggleClass('active');\n  });\n\n  if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).width() < 1024) {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('.header-menu-item-title').on('click', function () {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).toggleClass('active');\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).siblings().slideToggle();\n    });\n  }\n}\n\nfunction mainTopBanner() {\n  if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.main-page').length) {\n    var mainTopBannerSlider = new swiper_bundle__WEBPACK_IMPORTED_MODULE_7__[\"default\"]('.top_banner-image', {\n      speed: 1000,\n      touchRatio: 0,\n      effect: 'fade',\n      fadeEffect: {\n        crossFade: true\n      },\n      autoplay: {\n        delay: 7000,\n        disableOnInteraction: false\n      }\n    });\n  }\n}\n\nfunction anchorsFixed() {\n  var anchors = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.anchors');\n\n  if (anchors.length) {\n    var anchorsPos = anchors.offset().top;\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).on('load scroll', function () {\n      if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).scrollTop() > anchorsPos && jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).scrollTop() + anchors.height() < jquery__WEBPACK_IMPORTED_MODULE_0___default()('.map').offset().top) {\n        anchors.addClass('active');\n      } else {\n        anchors.removeClass('active');\n      }\n    });\n  }\n}\n\nfunction anchorsItemsActive() {\n  var anchors = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.anchors');\n\n  if (anchors.length) {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('main .inner').find('section').each(function () {\n      var currSection = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this);\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).on('load scroll', function () {\n        if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).scrollTop() + 110 > currSection.offset().top) {\n          jquery__WEBPACK_IMPORTED_MODULE_0___default()('.anchors .container-item').siblings().removeClass('active').eq(currSection.index()).addClass('active');\n        } else {\n          currSection.removeClass('active');\n        }\n      });\n    });\n  }\n}\n\nfunction anchorsSoftScroll() {\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()(\"a[href^='#']\").click(function () {\n    var _href = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).attr(\"href\");\n\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(\"html, body\").animate({\n      scrollTop: jquery__WEBPACK_IMPORTED_MODULE_0___default()(_href).offset().top - 100 + \"px\"\n    });\n    return false;\n  });\n}\n\nfunction storageSliderInit() {\n  if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.main-page').length) {\n    var animTime = 5000,\n        animTimeCss = '' + animTime,\n        thumbsSwiper = new swiper_bundle__WEBPACK_IMPORTED_MODULE_7__[\"default\"]('.swiper-container-thumbs', {\n      slidesPerView: 3.75,\n      mousewheel: true,\n      freeMode: true,\n      breakpoints: {\n        320: {\n          spaceBetween: 12.5\n        },\n        740: {\n          spaceBetween: 25\n        }\n      }\n    }),\n        swiper = new swiper_bundle__WEBPACK_IMPORTED_MODULE_7__[\"default\"]('.swiper-container', {\n      init: false,\n      speed: 400,\n      loop: true,\n      grabCursor: true,\n      effect: 'fade',\n      fadeEffect: {\n        crossFade: true\n      },\n      autoplay: {\n        delay: animTime,\n        disableOnInteraction: false\n      },\n      pagination: {\n        el: '.swiper-pagination',\n        clickable: true,\n        renderBullet: function renderBullet(index, className) {\n          return '<span class=\"' + className + '\">' + '<svg class=\"anim\" width=\"32\" height=\"32\" viewBox=\"0 0 33 33\">' + '<circle class=\"path\" cx=\"16.5\" cy=\"16.5\" r=\"15.5\" fill=\"none\" stroke=\"#5b9739\"' + 'stroke-opacity=\"1\" stroke-width=\"2\"></circle>' + '' + '</svg></span>';\n        }\n      },\n      thumbs: {\n        swiper: thumbsSwiper\n      }\n    });\n    animTimeCss = animTimeCss.replace('000', 's');\n    swiper.on('init', function () {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.swiper-pagination-bullet-active svg .path').css('animation-duration', animTimeCss);\n    });\n    swiper.init();\n    swiper.on('slideChange', function () {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.swiper-pagination-bullet-active svg .path').css('animation-duration', animTimeCss);\n    });\n  }\n}\n\nfunction mapInit() {\n  if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('#map').length) {\n    var pos, posCenter, map, marker;\n    pos = {\n      lat: 48.730071,\n      lng: 9.244541\n    };\n    posCenter = pos;\n\n    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.main-page').length && jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).width() < 740) {\n      posCenter = {\n        lat: 48.737071,\n        lng: 9.244541\n      };\n    }\n\n    map = new google.maps.Map(document.getElementById(\"map\"), {\n      center: posCenter,\n      zoom: 14,\n      disableDefaultUI: true,\n      styles: [{\n        elementType: 'geometry',\n        stylers: [{\n          color: '#343332'\n        }]\n      }, {\n        elementType: 'labels.text.stroke',\n        stylers: [{\n          color: '#000'\n        }]\n      }, {\n        elementType: 'labels.text.fill',\n        stylers: [{\n          color: '#bfbfbf'\n        }]\n      }, {\n        featureType: 'administrative.locality',\n        elementType: 'labels.text.fill',\n        stylers: [{\n          color: '#bfbfbf'\n        }]\n      }, {\n        featureType: 'poi',\n        elementType: 'labels.text.fill',\n        stylers: [{\n          color: '#bfbfbf'\n        }]\n      }, {\n        featureType: 'poi.park',\n        elementType: 'labels.text.fill',\n        stylers: [{\n          color: '#bfbfbf'\n        }]\n      }, {\n        featureType: 'road',\n        elementType: 'geometry',\n        stylers: [{\n          color: '#454545'\n        }]\n      }, {\n        featureType: 'road',\n        elementType: 'geometry.stroke',\n        stylers: [{\n          color: '#454545'\n        }]\n      }, {\n        featureType: 'road',\n        elementType: 'labels.text.fill',\n        stylers: [{\n          color: '#454545'\n        }]\n      }, {\n        featureType: 'water',\n        elementType: 'geometry',\n        stylers: [{\n          color: '#191a1a'\n        }]\n      }, {\n        featureType: 'water',\n        elementType: 'labels.text.fill',\n        stylers: [{\n          color: '#191a1a'\n        }]\n      }, {\n        featureType: 'water',\n        elementType: 'labels.text.stroke',\n        stylers: [{\n          color: '#191a1a'\n        }]\n      }]\n    }), marker = new google.maps.Marker({\n      position: pos,\n      map: map,\n      icon: 'img/svgs/icon_marker.svg'\n    });\n  }\n}\n\nfunction mapContactsFeedback() {\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.map-contacts .form-title').on('click', function () {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).parent().addClass('active');\n  });\n}\n\nfunction gallery() {\n  var gallery = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.gallery');\n\n  if (gallery.length) {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('[data-fancybox=\"gallery\"]').fancybox({\n      idleTime: 0,\n      buttons: [\"close\"],\n      btnTpl: {\n        close: '<button data-fancybox-close class=\"fancybox-button fancybox-button--close\" title=\"{{CLOSE}}\">' + '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 42 42\"><path d=\"M41 41L1 1m0 40L41 1 1 41z\" stroke=\"currentColor\" stroke-width=\"2\"/></svg>' + \"</button>\"\n      },\n      parentEl: gallery,\n      thumbs: {\n        autoStart: true\n      },\n      caption: function caption(instance, item) {\n        var caption = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).data('caption') || '';\n\n        if (item.type === 'image') {\n          caption = (caption.length ? caption + '<br />' : '') + jquery__WEBPACK_IMPORTED_MODULE_0___default()('.gallery-container-item-descr').eq(item.index).text();\n        }\n\n        return caption;\n      }\n    });\n  }\n}\n\nfunction faq() {\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.faq-container-item-title').on('click', function () {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).toggleClass('active');\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).siblings().slideToggle();\n  });\n}\n\nfunction pricesSelectSize() {\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.unit_size-container-item').on('click', function () {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('active').siblings().removeClass('active');\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('.unit_list-container-item').removeClass('active');\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('.unit_list-container').eq(jquery__WEBPACK_IMPORTED_MODULE_0___default()('.unit_size-container-item.active').index()).slideDown().siblings().slideUp();\n  });\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.unit_list-container-item').on('click', function () {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('active').siblings().removeClass('active');\n  });\n}\n\nfunction pricesSelectPaymentMethod() {\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.pay-container-item').on('click', function () {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('active').siblings().removeClass('active');\n  });\n}\n\nfunction pricesRangeSlider() {\n  if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.prices-page .how_long').length) {\n    var pricesSlider = document.getElementById('slider-range');\n    nouislider__WEBPACK_IMPORTED_MODULE_4___default.a.create(pricesSlider, {\n      start: 11,\n      connect: 'lower',\n      step: 1,\n      range: {\n        'min': 1,\n        'max': 52\n      },\n      format: {\n        to: function to(value) {\n          return parseInt(value);\n        },\n        from: function from(value) {\n          return parseInt(value);\n        }\n      }\n    });\n    var inputFormat = document.getElementById('range-value');\n    pricesSlider.noUiSlider.on('update', function (values, handle) {\n      inputFormat.value = values[handle];\n    });\n    inputFormat.addEventListener('change', function () {\n      pricesSlider.noUiSlider.set(this.value);\n    });\n  }\n}\n\nfunction pricesDatepicker() {\n  var picker = js_datepicker__WEBPACK_IMPORTED_MODULE_1___default()('.datepicker input', {\n    startDay: 1,\n    customDays: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],\n    showAllDates: true,\n    formatter: function formatter(input, date, instance) {\n      var value = date.toLocaleDateString();\n      input.value = value;\n    }\n  });\n  var date = new Date(),\n      currYear = date.getFullYear(),\n      currMonth = date.getMonth() + 1,\n      currDay = date.getDate();\n\n  if (currMonth <= 9) {\n    currMonth = '0' + currMonth;\n  }\n\n  if (currDay <= 9) {\n    currDay = '0' + currDay;\n  }\n\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.datepicker input').val(currDay + '.' + currMonth + '.' + currYear);\n}\n\n//# sourceURL=webpack:///./src/js/index.js?");

/***/ })

/******/ });