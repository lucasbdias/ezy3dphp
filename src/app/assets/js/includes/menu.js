$(document).ready(function() {
  let lastScrollTop = 0;
  $(window).scroll(function() {
    let altura = $(window).scrollTop();
    if (altura != 0) {
      $("nav").addClass("background-color-menu-scroll");
      $(".btn-option").addClass("color-000-scroll");
      $("#btn-language").addClass("color-000-scroll");
    } else {
      $(".btn-option").removeClass("color-000-scroll");
      $("#btn-language").removeClass("color-000-scroll");
      $("nav").removeClass("background-color-menu-scroll");
    }
  });

  $(".btn-option").hover(function() {
    let separate = $(this).attr("id");
    let atual = separate.split("-")[1];

    $(".btn-option").addClass("color-000");
    $("#btn-language").addClass("color-000");
    $(`#li-${atual}`).addClass("border-color-ffa500");
    $("nav").addClass("background-color-menu");
    $("main").addClass("main-opacity");
    if (atual == "support" || atual == "contact") {
      $(`#container-${atual}`)
        .stop()
        .fadeOut("fast");
      $(`#panel`)
        .stop()
        .fadeOut("fast");
    } else {
      $(`#panel`)
        .stop()
        .slideDown("fast", function() {
          $(`#container-${atual}`)
            .stop()
            .fadeIn(500);
        });
    }
    $("#container-language").hide();

    $(".btn-option").each(function() {
      let eachSeparate = $(this).attr("id");
      let eachAtual = eachSeparate.split("-")[1];

      if (eachAtual != atual) {
        $(`#li-${eachAtual}`).removeClass("border-color-ffa500");
        $(`#container-${eachAtual}`).hide();
      }
    });
  });

  $("#btn-language").hover(function() {
    $(".btn-option").each(function() {
      let eachSeparate = $(this).attr("id");
      let eachAtual = eachSeparate.split("-")[1];

      $(`#btn-${eachAtual}`).removeClass("color-000");
      $("#btn-language").removeClass("color-000");
      $(`#li-${eachAtual}`).removeClass("border-color-ffa500");
      $("nav").removeClass("background-color-menu");
      $("main").removeClass("main-opacity");
      $(`#container-${eachAtual}`)
        .stop()
        .fadeOut("fast");
      $(`#panel`)
        .stop()
        .fadeOut("fast");
    });
  });

  $("#btn-faq").hover(function() {
    $(".btn-option").each(function() {
      let eachSeparate = $(this).attr("id");
      let eachAtual = eachSeparate.split("-")[1];

      $(`#btn-${eachAtual}`).removeClass("color-000");
      $("#btn-language").removeClass("color-000");
      $(`#li-${eachAtual}`).removeClass("border-color-ffa500");
      $("nav").removeClass("background-color-menu");
      $("main").removeClass("main-opacity");
      $(`#container-${eachAtual}`)
        .stop()
        .fadeOut("fast");
      $(`#panel`)
        .stop()
        .fadeOut("fast");
    });
  });

  $("#btn-language").click(function() {
    $("#container-language").toggle();
  });

  $("main").click(function() {
    $("#container-language").hide();
  });

  $("main").hover(function() {
    $(".btn-option").each(function() {
      let eachSeparate = $(this).attr("id");
      let eachAtual = eachSeparate.split("-")[1];

      $(`#btn-${eachAtual}`).removeClass("color-000");
      $("#btn-language").removeClass("color-000");
      $(`#li-${eachAtual}`).removeClass("border-color-ffa500");
      $("nav").removeClass("background-color-menu");
      $("main").removeClass("main-opacity");
      $(`#container-${eachAtual}`)
        .stop()
        .fadeOut("fast");
      $(`#panel`)
        .stop()
        .fadeOut("fast");
    });
  });

  // ACCESSORY
  $(".category-accessory").hover(function() {
    $(".category-accessory").removeClass("category-accessory-active");
    $(this).addClass("category-accessory-active");

    $(".category-accessory").each(function() {
      let classCategoryAccessory = $(this).attr("class");
      let id = $(this).attr("id");
      let num = id.split("-")[1];
      if (classCategoryAccessory.indexOf("category-accessory-active") != -1) {
        $(`#itensAccessory-${num}`).show();
        $(`#setasAccessory-${num}`)
          .stop()
          .show(350);
        $(`#fotoAccessory-${num}`)
          .stop()
          .show();
      } else {
        $(`#itensAccessory-${num}`).hide();
        $(`#setasAccessory-${num}`)
          .stop()
          .hide(350);
        $(`#fotoAccessory-${num}`)
          .stop()
          .hide();
      }
    });
  });

  $(".category-accessory").each(function() {
    let classCategoryAccessory = $(this).attr("class");
    let id = $(this).attr("id");
    let num = id.split("-")[1];
    if (classCategoryAccessory.indexOf("category-accessory-active") != -1) {
      $(`#itensAccessory-${num}`).show();
      $(`#setasAccessory-${num}`).show();
      $(`#fotoAccessory-${num}`).show();
    } else {
      $(`#itensAccessory-${num}`).hide();
      $(`#setasAccessory-${num}`).hide();
      $(`#fotoAccessory-${num}`).hide();
    }
  });

  // APLICATIONS
  $(".category-application").hover(function() {
    $(".category-application").removeClass("category-application-active");
    $(this).addClass("category-application-active");

    $(".category-application").each(function() {
      let classCategoryApplication = $(this).attr("class");
      let id = $(this).attr("id");
      let num = id.split("-")[1];
      if (
        classCategoryApplication.indexOf("category-application-active") != -1
      ) {
        $(`#itensApplication-${num}`).show();
        $(`#setasApplication-${num}`)
          .stop()
          .show(350);
        $(`#fotoApplication-${num}`)
          .stop()
          .show();
      } else {
        $(`#itensApplication-${num}`).hide();
        $(`#setasApplication-${num}`)
          .stop()
          .hide(350);
        $(`#fotoApplication-${num}`)
          .stop()
          .hide();
      }
    });
  });

  $(".category-application").each(function() {
    let classCategoryApplication = $(this).attr("class");
    let id = $(this).attr("id");
    let num = id.split("-")[1];
    if (classCategoryApplication.indexOf("category-application-active") != -1) {
      $(`#itensApplication-${num}`).show();
      $(`#setasApplication-${num}`).show();
      $(`#fotoApplication-${num}`).show();
    } else {
      $(`#itensApplication-${num}`).hide();
      $(`#setasApplication-${num}`).hide();
      $(`#fotoApplication-${num}`).hide();
    }
  });
});
