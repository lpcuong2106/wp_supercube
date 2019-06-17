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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/main.js":
/*!********************!*\
  !*** ./js/main.js ***!
  \********************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function ($) {
  $("body").addClass("preloader-site");
});
$(window).on("load", function () {
  $(".lds-ring").fadeOut("slow", function () {
    $("body").removeClass("preloader-site");
  });
});
jQuery(function ($) {
  $("#main_menu li").addClass("nav-item");
  $("#main_menu li a").addClass("nav-link");
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 6000,
    animateOut: "fadeIn",
    animateIn: "fadeIn",
    autoplayHoverPause: true,
    navText: ['<span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="carousel-control-text">Previous</span>', '<span class="carousel-control-next-icon" aria-hidden="true"></span><span class="carousel-control-text">Previous</span>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
  $(window).scroll(function () {
    $(".scrollToTop").css({
      display: "block"
    });

    if ($(window).scrollTop() > 10) {
      $(".sticky-wrapper").addClass("fixedTop");
      $(".scrollToTop").css({
        bottom: "5px"
      });
      $("#navbarNav").css({
        justifyContent: "flex-start"
      });
    } else {
      $(".sticky-wrapper").removeClass("fixedTop");
      $(".scrollToTop").css({
        bottom: "-100px"
      });
      $("#navbarNav").css({
        justifyContent: "flex-end"
      });
    }
  });
  $(".scrollToTop").click(function (e) {
    $("html,body").animate({
      scrollTop: 0
    }, 500);
  });
  $(".sub-menu").addClass("animated slideInUp");
  $("#main_menu li ul.sub-menu").addClass("dropdown-menu");
  $("#view_price").submit(function (e) {
    e.preventDefault();

    var UIController = function UIController() {
      return {
        valInput: $("select#room-select").val(),
        showUI: function showUI(obj) {
          var firstContentPrice = document.querySelector("#content_price").firstElementChild;

          while (firstContentPrice) {
            firstContentPrice.remove();
            firstContentPrice = document.querySelector("#content_price").firstElementChild;
          } // document.querySelector('#content_price').empty();


          document.querySelector("#content_price").insertAdjacentHTML("beforeend", obj.content.rendered);
        }
      };
    };

    var Controller = function (UIctr, Handctr) {
      // get vale
      var domain = document.location.origin + document.location.pathname;
      var ValSelectForm = UIctr().valInput; // show flowing val

      $.ajax({
        type: "GET",
        url: "http://localhost/training/supercube/wp-json/wp/v2/posts/" + ValSelectForm,
        success: function success(data) {
          UIctr().showUI(data);
        },
        error: function error(_error) {
          throw _error;
        }
      });
      return {
        init: function init() {
          console.log("application has started");
        }
      };
    }(UIController);

    Controller.init();
  });
  $('#main_menu>li').hover(function () {
    $(this).append('<span class="active-line" style="margin-left: auto; margin-right: auto; left: 0; right: 0;"></span>');
  }, function () {
    $(this).children().last().remove();
  }); // for(let i =0; i<objList.length; i++ ){
  //  if(objList[i].hasClass('current-menu-parent')){
  //    console.log('k có lam gì');
  //  }else{
  //    console.log('fjdfhsdf');
  //  }
  //     console.log('da hover phan tu thu' + i);
  //     if(objList[i].hasClass('current-menu-parent')){
  //       console.log('bỏ qua');
  //     }
  //   });
  // }

  if ($("#main_menu li").hasClass("current-menu-parent")) {
    $("#main_menu li.current-menu-parent").append('<span class="active-line" style="margin-left: auto; margin-right: auto; left: 0; right: 0;"></span>');
  }

  if ($("#main_menu li ul.sub-menu").hasClass("dropdown-menu")) {
    $("#main_menu li ul.sub-menu").prev().addClass("dropdown-toggle");
  }

  $(".slider-caption p").addClass("wow fadeInUp animated");
  $(".slider-caption p").attr("data-wow-duration", "1s");
});

/***/ }),

/***/ "./js/test.js":
/*!********************!*\
  !*** ./js/test.js ***!
  \********************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

jQuery(document).ready(function ($) {
  var Search =
  /*#__PURE__*/
  function () {
    function Search() {
      _classCallCheck(this, Search);

      this.artist = $('input#searchA');
      this.song = $('input#searchT');
      this.btnSearch = $('#searchSongs');
      this.events();
    } // events


    _createClass(Search, [{
      key: "events",
      value: function events() {
        this.artist.on('keydown', this.getValArtist.bind(this));
        this.song.on('keydown', this.getValSong.bind(this));
        this.btnSearch.on('click', this.typingLogic.bind(this));
      } // methods

    }, {
      key: "getValArtist",
      value: function getValArtist() {
        var artist = this.artist.val();
      }
    }, {
      key: "getValSong",
      value: function getValSong() {
        var song = this.song.val();
      }
    }, {
      key: "typingLogic",
      value: function typingLogic() {
        console.log("da clci");
        $.ajax({
          url: 'https://supercube.biz/wp-admin/admin-ajax.php?searchA=&searchT=hello&action=supercube_search_songs&security=741ca62478',
          type: 'GET',
          dataType: 'jsonp',
          contentType: "text/html; charset=UTF-8",
          success: function success(data) {
            alert(data); //process the JSON data etc
          }
        });
      }
    }]);

    return Search;
  }();

  var buttonNav =
  /*#__PURE__*/
  function () {
    function buttonNav() {
      _classCallCheck(this, buttonNav);

      this.buttonNav = $('button.navbar-toggler');
      this.eventClick();
    } // events


    _createClass(buttonNav, [{
      key: "eventClick",
      value: function eventClick() {
        var btn = this.buttonNav;
        this.buttonNav.on('click', function () {
          var collapse = btn.attr('aria-expanded');
          console.log(collapse);

          if (collapse == "false") {
            $('.sticky-wrapper').css({
              background: 'black',
              height: '100vh',
              zIndex: 99
            });
          } else {
            $('.sticky-wrapper').css({
              background: 'none',
              height: 'auto'
            });
          }
        });
      }
    }]);

    return buttonNav;
  }();

  var search = new Search();
  var collapse = new buttonNav();
});

/***/ }),

/***/ "./source/app.scss":
/*!*************************!*\
  !*** ./source/app.scss ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************************!*\
  !*** multi ./js/main.js ./js/test.js ./source/app.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\training\supercube_traing_1\supercube_proj_1\wp-content\themes\supercube\js\main.js */"./js/main.js");
__webpack_require__(/*! C:\xampp\htdocs\training\supercube_traing_1\supercube_proj_1\wp-content\themes\supercube\js\test.js */"./js/test.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\training\supercube_traing_1\supercube_proj_1\wp-content\themes\supercube\source\app.scss */"./source/app.scss");


/***/ })

/******/ });
//# sourceMappingURL=main.js.map