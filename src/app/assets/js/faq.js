$(document).ready(function() {
  $(".faq").each(function() {
    let idFaq = $(this).attr("id");
    if (idFaq !== "faq-1") {
      $(this).hide();
    }
  });

  $(".faq-menu").click(function() {
    let attr = $(this).attr("id");
    let num = attr.split("-")[1];

    $(this).addClass("active");
    $(`#faq-${num}`).show();
    $(".problem").hide();
    $(".fa-chevron-down").removeClass("gira");

    $(".faq").each(function() {
      let attrFaqEach = $(this).attr("id");
      if (attrFaqEach != `faq-${num}`) {
        $(this).hide();
      }
    });

    $(".faq-menu").each(function() {
      let attrMenuEach = $(this).attr("id");

      if (attrMenuEach != `faqitem-${num}`) {
        $(this).removeClass("active");
      }
    });
  });

  $(".fa-chevron-down").click(function() {
    let idseta = $(this).attr("id");
    let classSeta = $(this).attr("class");
    let num = idseta.split("-")[1];

    classSeta.indexOf("gira") == -1
      ? $(this).addClass("gira")
      : $(this).removeClass("gira");

    $(`#problem-${num}`)
      .stop()
      .slideToggle("fast");

    $(".problem").each(function() {
      let idproblem = $(this).attr("id");
      if (idproblem != `problem-${num}`) {
        $(`#${idproblem}`)
          .stop()
          .slideUp("fast");
      }
    });

    $(".fa-chevron-down").each(function() {
      let idsetaEach = $(this).attr("id");
      if (idsetaEach != idseta) {
        $(this).removeClass("gira");
      }
    });
  });
});
