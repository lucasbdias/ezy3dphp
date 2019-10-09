$(document).ready(function() {
  $(".option-menu-cliente").click(function() {
    let id = $(this)
      .attr("id")
      .split("_")[0];
    $(".option-menu-cliente").each(function() {
      let eachId = $(this)
        .attr("id")
        .split("_")[0];
      if (eachId != id) {
        $(this).removeClass("--menu-cliente-border-on");
        $(this).addClass("--menu-cliente-border-off");
        $(`#${eachId}_panel-cliente`).hide();
      } else {
        $(`#${eachId}_panel-cliente`).show();
        $(this).addClass("--menu-cliente-border-on");
        $(this).removeClass("--menu-cliente-border-off");
      }
    });
  });
});
