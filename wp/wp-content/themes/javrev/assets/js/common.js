/*!
 * jquery v3.7.1
 */

// breakPoint
//=====================================================
$windowWidth = window.innerWidth;
$breakPointA = 1024;
$breakPointB = 1024;
isSP = ($windowWidth < $breakPointA);
isTB = ($windowWidth <= $breakPointB) && ($windowWidth > $breakPointA);
isPC = ($windowWidth > $breakPointB);
isSPTB = ($windowWidth < $breakPointB);

// sample
//=====================================================
// if(isPC) {
//   ここに記述
// }

// OS判定
//=====================================================
var ua = window.navigator.userAgent.toLowerCase();
if(ua.indexOf("windows nt") !== -1) {
  //console.log("「Microsoft Windows」をお使いですね!");
  $('body').addClass('os-windows');
} else if(ua.indexOf("android") !== -1) {
  //console.log("「Android」をお使いですね!");
  $('body').addClass('os-android');
} else if(ua.indexOf("iphone") !== -1 || ua.indexOf("ipad") !== -1) {
  //console.log("「iOS」をお使いですね!");
  $('body').addClass('os-ios');
} else if(ua.indexOf("mac os x") !== -1) {
  //console.log("「macOS」をお使いですね!");
  $('body').addClass('os-mac');
} else {
  //console.log("何をお使いなのですか?");
}

// sp 100vh
//=====================================================
// リサイズ対応
// 関数定義
function setHeight() {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}
// 初期化
setHeight();
// ブラウザのサイズが変更された時・画面の向きを変えた時に再計算する
window.addEventListener('resize', setHeight);

// 1回のみ取得
// 関数定義
function setHeight2() {
  const vh2 = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh2', `${vh2}px`);
}
// 初期化
setHeight2();

// PCの場合のみリサイズ時に再計算
if (/Windows|Macintosh|Linux|X11/i.test(navigator.userAgent)) {
  window.addEventListener('resize', setHeight2);
}




// g-nav modal
//=====================================================
document.addEventListener('DOMContentLoaded', function () {
  const hamburger = document.querySelector('.gnav__hamburger');
  const modal = document.querySelector('.gnav__modal');
  const bg = document.querySelector('.gnav__bg');
  const body = document.body;
  let scrollY = 0; // 現在のスクロール位置を保持

  // モーダルの開閉処理を関数化
  function openModal() {
    scrollY = window.scrollY; // 現在のスクロール位置を記録
    body.style.top = `-${scrollY}px`; // bodyの位置をスクロール位置に合わせる
    modal.classList.add('is--open');
    bg.classList.add('is--visible');
    body.classList.add('is--fixed');
  }

  function closeModal() {
    modal.classList.remove('is--open');
    bg.classList.remove('is--visible');
    body.classList.remove('is--fixed');
    body.style.top = ''; // topスタイルをリセット
    window.scrollTo(0, scrollY); // 元のスクロール位置に戻す
  }

  // ハンバーガーメニューのクリックでメニューの開閉
  hamburger.addEventListener('click', function () {
    if (modal.classList.contains('is--open')) {
      closeModal(); // モーダルが開いている場合は閉じる
    } else {
      openModal(); // モーダルが閉じている場合は開く
    }
  });

  // 背景エリアをクリックでメニューを閉じる
  bg.addEventListener('click', closeModal);
});

// lang-menu
//=====================================================
document.querySelector('.acmenu').addEventListener('click', function () {
  const menu = document.querySelector('.lang-menu');
  
  // ボタンとメニューにis--openクラスを切り替え
  this.classList.toggle('is--open');
  menu.classList.toggle('is--open');
  
  // aria-expanded属性を更新
  this.setAttribute('aria-expanded', menu.classList.contains('is--open') ? 'true' : 'false');
});

// gnav__search
//=====================================================
document.addEventListener('DOMContentLoaded', function () {
  const searchBtn = document.querySelector('.gnav__searchbtn');
  const searchModal = document.querySelector('.gnav__search');
  const closeBtn = document.querySelector('.gnav__search .closebtn');

  // モーダルの開閉をトグルする関数
  function toggleSearchModal() {
    if (searchModal.classList.contains('is--open')) {
      closeSearchModal();
    } else {
      openSearchModal();
    }
  }

  // 検索フォームを開く関数
  function openSearchModal() {
    searchModal.classList.add('is--open');
    searchBtn.classList.add('is--open');
  }

  // 検索フォームを閉じる関数
  function closeSearchModal() {
    searchModal.classList.remove('is--open');
    searchBtn.classList.remove('is--open');
  }

  // 検索ボタンのクリックでモーダルを開閉
  searchBtn.addEventListener('click', toggleSearchModal);

  // 閉じるボタンのクリックでモーダルを閉じる
  closeBtn.addEventListener('click', closeSearchModal);
});

// js--acmenu
//=====================================================
$(function () {
  // タイトルをクリックすると
  $('.js--acmenu').on('click', function () {
    $(this).next().slideToggle(300);
    $(this).toggleClass('is--open', 300);
  });
});

// scroll smoos
//=====================================================
$(function(){
  $('a[href^="#"]').click(function(){
    const speed = 500;
    const href= $(this).attr("href");
    const target = $(href == "#" || href == "" ? 'html' : href);
    const position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

// カレント付与 共通js ※URL完全一致
//=====================================================
$(function(){
  $('.js--current li a').filter(function(){return $(this).prop('href')==location.href}).parents().addClass('is--current');
});

// カレント付与 共通js ※こっちはURLが下層でも親のURLにカレント付与
//=====================================================
$(function(){

  var pageURL = location.pathname,
  pageURLArr = pageURL.split('/'), //パスを分割して配列化する
  pageURLArrCategory = pageURLArr[1]; //パスから第1階層を取得

  $('.js--current2 li a').each(function (i, v) {
    var selfhref = $(v).attr('href'),
      hrefArr = selfhref.split('/'), //href属性の値を分割して配列化する
      hrefArrCategory = hrefArr[1]; //href属性の第1階層を取得

    //パスの第2階層とhref属性の第2階層を比較して同じ値であればcurrentを付与する
    if (pageURLArrCategory === hrefArrCategory) {
      $(this).parent().addClass('is--current');
    }

  });

});

// ページネーションに対応
//=====================================================
$(function(){
  const currentPath = location.pathname.replace(/\/page\/\d+\/?$/, '').replace(/\/$/, ''); // ページネーション部分と末尾のスラッシュを除去
  $('.js--current3 li a').filter(function(){
    const linkPath = $(this).prop('pathname').replace(/\/$/, ''); // リンクの末尾のスラッシュを除去
    return currentPath === linkPath || location.pathname.startsWith(linkPath + '/page/'); // 完全一致またはページネーションでの一致判定
  }).closest('li').addClass('is--current'); // `li` 要素にクラスを付与
});





// flex spacebetween対策
//=====================================================
$(function(){
  var elem = "";
  for (var i = -1; ++i < 3;) {
    elem += '<span class="empty"></span>';
  }
  $('.emptybox').append(elem);
});

// aタグの中でリンクを機能させたい場合
//=====================================================
$('.js--link').on('click', function(e){
  //伝播をストップ
  e.stopPropagation();
  e.preventDefault();

  //リンクを取得して飛ばす
  location.href = $(this).attr('data-url');
})

// 星の評価システム
// ==============================
document.addEventListener('DOMContentLoaded', function () {
  const ratingElements = document.querySelectorAll('.icon__rate');

  ratingElements.forEach(ratingElement => {
    const starsContainer = ratingElement.querySelector('.stars');
    const ratingValue = parseFloat(ratingElement.dataset.rating);
    const maxRating = 5;

    // data-ratingが数値でない場合は処理を中断
    if (isNaN(ratingValue)) return;

    // 既存の星をクリア
    starsContainer.innerHTML = '';

    for (let i = 1; i <= maxRating; i++) {
      const starDiv = document.createElement('div');
      starDiv.classList.add('star');

      if (i <= Math.floor(ratingValue)) {
        starDiv.classList.add('star-filled');
      } else if (i - ratingValue < 1) {
        starDiv.classList.add('star-half');
      } else {
        starDiv.classList.add('star-outline');
      }

      starsContainer.appendChild(starDiv);
    }
  });
});





// swiper
// ==============================
document.addEventListener('DOMContentLoaded', function () {
  // すべてのカードを取得
  const cards = document.querySelectorAll('.card__normal');

  cards.forEach((card, index) => {
    // メインスライダーとサムネイルスライダーのクラス名をユニークにする
    const mainSliderElement = card.querySelector('.mainslider');
    const thumbSliderElement = card.querySelector('.tmbslider');

    if (mainSliderElement && thumbSliderElement) {
      // サムネイルスライダーの初期化
      const thumbSlider = new Swiper(thumbSliderElement, {
        spaceBetween: 12,
        slidesPerView: 3,
        watchSlidesProgress: true,
        slideToClickedSlide: true,
        preventClicks: true,
        preventClicksPropagation: true,
      });

      // メインスライダーの初期化
      const mainSlider = new Swiper(mainSliderElement, {
        effect: 'fade',
        fadeEffect: {
          crossFade: true,
        },
        thumbs: {
          swiper: thumbSlider, // サムネイルスライダーと連携
        },
      });
    }
  });
});


// const swiperfv = new Swiper('.js--swiper-fv', {
//   speed: 500,
//   centeredSlides: true,
//   loop: true,
//   autoplay: {
//     delay: 4000,
//     pauseOnMouseEnter: true
//   },
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
//   pagination: {
//     el: '.swiper-pagination',
//     type: 'bullets',
//     clickable: true,
//   }
// });

// const swiper = new Swiper('.js--swiper', {
//   speed: 500,
//   slidesPerView: 1.35,
//   spaceBetween: 20,
//   pagination: {
//     el: ".js--swiper-pagination",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: '.js--swiper-button-next',
//     prevEl: '.js--swiper-button-prev',
//   },
//   breakpoints: {
//     640: {
//       //loop: false,
//       slidesPerView: 1.65,
//       spaceBetween: 25,
//       //centeredSlides: false
//     },
//     768: {
//       //loop: false,
//       slidesPerView: 2.2,
//       spaceBetween: 30,
//       //centeredSlides: false
//     },
//     1024: {
//       //loop: true,
//       slidesPerView: 2.2,
//       spaceBetween: 30,
//       //centeredSlides: true
//     },
//     1100: {
//       //loop: true,
//       slidesPerView: 2.5,
//       spaceBetween: 30,
//       //centeredSlides: true
//     },
//     1280: {
//       //loop: true,
//       slidesPerView: 3.2,
//       spaceBetween: 30,
//       //centeredSlides: true
//     },
//     1680: {
//       //loop: true,
//       slidesPerView: 4.2,
//       spaceBetween: 30,
//       //centeredSlides: true
//     }
//   }
// });

// const swiper2 = new Swiper('.js--swiper2', {
//   speed: 500,
//   slidesPerView: 1.35,
//   spaceBetween: 20,
//   pagination: {
//     el: ".js--swiper-pagination2",
//     clickable: true,
//   },
//   breakpoints: {
//     640: {
//       loop: false,
//       slidesPerView: 1.65,
//       spaceBetween: 25,
//       centeredSlides: false,
//       allowSlideNext: true,  // 次へのスライドを無効化
//       allowSlidePrev: true  // 前へのスライドを無効化
//     },
//     768: {
//       loop: false,
//       slidesPerView: 2.2,
//       spaceBetween: 30,
//       centeredSlides: false,
//       allowSlideNext: true,  // 次へのスライドを無効化
//       allowSlidePrev: true  // 前へのスライドを無効化
//     },
//     1024: {
//       loop: true,
//       slidesPerView: 2.2,
//       spaceBetween: 30,
//       centeredSlides: true,
//       allowSlideNext: true,  // 次へのスライドを無効化
//       allowSlidePrev: true  // 前へのスライドを無効化
//     },
//     1100: {
//       loop: true,
//       slidesPerView: 2.5,
//       spaceBetween: 30,
//       centeredSlides: true,
//       allowSlideNext: true,  // 次へのスライドを無効化
//       allowSlidePrev: true  // 前へのスライドを無効化
//     },
//     1280: {
//       loop: true,
//       slidesPerView: 3.2,
//       spaceBetween: 30,
//       centeredSlides: true,
//       allowSlideNext: false,  // 次へのスライドを無効化
//       allowSlidePrev: false  // 前へのスライドを無効化
//     },
//     1680: {
//       loop: true,
//       slidesPerView: 4.2,
//       spaceBetween: 30,
//       centeredSlides: true,
//       allowSlideNext: false,  // 次へのスライドを無効化
//       allowSlidePrev: false  // 前へのスライドを無効化
//     }
//   }
// });

// swiper02
//=====================================================
const swiperSlides02 = document.getElementsByClassName("swiper-slide");
const breakPoint02 = 1024; // ブレークポイントを設定
let swiper02;
let swiperBool02;

window.addEventListener(
  "load",
  () => {
    if (breakPoint02 < window.innerWidth) {
      swiperBool02 = false;
    } else {
      createSwiper02();
      swiperBool02 = true;
    }
  },
  false
);

window.addEventListener(
  "resize",
  () => {
    if (breakPoint02 < window.innerWidth && swiperBool02) {
      swiper02.destroy(false, true);
      swiperBool02 = false;
    } else if (breakPoint02 >= window.innerWidth && !swiperBool02) {
      createSwiper02();
      swiperBool02 = true;
    }
  },
  false
);

const createSwiper02 = () => {
  swiper02 = new Swiper(".js--swiper-sponly", {
    speed: 500,
    slidesPerView: 1.35,
    spaceBetween: 20,
    pagination: {
      el: ".js--swiper-pagination",
    },
    breakpoints: {
      640: {
        loop: false,
        slidesPerView: 1.65,
        spaceBetween: 25,
        centeredSlides: false
      },
      768: {
        loop: false,
        slidesPerView: 2.2,
        spaceBetween: 30,
        centeredSlides: false
      },
      1024: {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 0,
        centeredSlides: false
      },
      1100: {
        loop: true,
        slidesPerView: 3.6,
        spaceBetween: 0,
        centeredSlides: false
      },
      1280: {
        loop: true,
        slidesPerView: 3.2,
        spaceBetween: 0,
        centeredSlides: false
      },
      1680: {
        loop: true,
        slidesPerView: 4.2,
        spaceBetween: 0,
        centeredSlides: false
      }
    }
  });
};

// scroll add class
//=====================================================
// window.addEventListener('load', () => {
//   setTimeout(function(){
//     $('.common__header').addClass('is--onload');
//     $('.js--underttl').addClass('is--active');
//   },2800);
// })

// 汎用スクロールエフェクト
var EffectH = 100;
$(window).on('scroll load', function() {
  var scTop = $(this).scrollTop();
  var scBottom = scTop + $(this).height();
  var effectPos = scBottom - EffectH;

  $('.scroll__blur').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(100).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__blur-s1').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(250).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__blur-s2').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(400).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__blur-bg').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(1000).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__pc_black').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).delay(1000).addClass("text_done")
      ).done(function() {
        // $(this).delay(1000).queue(function(){
        //   $(this).addClass("text_done")
        // })
      });
    }
  });

  $('.scroll__blur-small').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(100).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__blur-small-s1').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(580).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__fadeinbottom').each( function() {
    var thisPos = $(this).offset().top - 100;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(100).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__fadeinblur-left').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(100).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__bgfadeinblur').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(100).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__top-s1').each( function() {
    var thisPos = $(this).offset().top - 200;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(280).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__top-s2').each( function() {
    var thisPos = $(this).offset().top - 200;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(480).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__top-s3').each( function() {
    var thisPos = $(this).offset().top - 200;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(680).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

  $('.scroll__brightness-saturate').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(900).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });

});

