$(document).ready(init);

function init() {
  getData();
}

function printData(data) {
  console.log(data);
  var template = $('#template-match').html();
  var templateScript = Handlebars.compile(template);
  for(var i=0; i<data.length;i++){
    var post = data[i];
    var html = templateScript(post);
    $(".container .row").append(html);
  }
}

function getData() {
  $.ajax({
    url: "../getPost.php",
    method: "GET",
    success: function(data) {
      printData(data);  
    },
    error: function(error) {
      console.log("error", error);
    }
  });
}

