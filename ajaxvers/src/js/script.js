$(document).ready(init);

function init() {
  getData();
}

function printData(data) {
  var template = $('#template-disc').html();
  var templateScript = Handlebars.compile(template);
  for(var i=0; i<data.length;i++){
    var post = data[i];
    var html = templateScript(post);
    $(".container .row.tutti").append(html);
  }
}

function filter(data) {
  var template = $('#template-filter').html();
  var templateScript = Handlebars.compile(template);
  for(var i=0; i<data.length;i++){
    var post = {
      "artista" : data[i].author,
    }
    var html = templateScript(post);
    $("header .artisti").append(html);
  }
  filtraArtista();
}

function filtraArtista() {

  $("header").on("click", ".artisti a", function(){
    var artista = $(this).text();
    $("main .tutti .col-4").each(function(){
      $(this).removeClass("none");
      if(artista != $(this).find(".author").text()){
        $(this).addClass("none");
      }
    });
  });
}

function getData() {
  $.ajax({
    url: "../getPost.php",
    method: "GET",
    success: function(data) {
      printData(data);  
      filter(data);
    },
    error: function(error) {
      console.log("error", error);
    }
  });
}

