<?php
if (isset($_GET['blogtitle'])) {
  $title = $_GET['blogtitle'];
  //echo $title;
}
?>



<div class="container">
    <h1 class="margin-top-lg">Events</h1>
    <div class="row titles"></div>
    <div class="row">

        <div class="col m12 blogposts posts content">
        </div>
    </div>
</div>


   <script type="text/javascript">
  <?php
  if (isset($_GET['blogtitle'])) {?>
     var title = "<?php echo $_GET['blogtitle'] ?>";
//     console.log(title);
     var url = "https://blogs.regularjoeseo.com/wp-json/wp/v2/posts?slug=" + title;
  $.ajax(
      {
          data:"json",
          type:'GET',
          url: url,
          success: function(data){
//              console.log("below is the data");
              console.log(data);
              $('.titles').hide();
              var response = data[0];
              var postedDate = moment(new Date(response.date)).format('M/DD/YYYY');
              var title = response.title.rendered;
              var content = response.content.rendered;
              $(".posts").append(
                  "<div class='panel panel-default'>" +
                  "<div class='panel-heading text-center'>" +
                  "<h3 class='panel-title'>" +  title + "</h3>" +
                      "<h5>" + postedDate + "</h5>" +
                  "</div>" +
                  "<div class='panel-body'>" +
                  "<p>" + content + "</p>" +
                  "</div>" +
                  "</div>" +
                  "<p><a href='./' class='btn btn-default red darken-4' role='button'>Back</a></p>");
          }
      });
  <?php } else { ?>
  $.ajax(
   {
      data:"json",
      type:'GET',
      url:'https://blogs.regularjoeseo.com/wp-json/wp/v2/posts?categories=9',
      success: function(data){
//        console.log(data);
        $(".blogposts").hide();
        /*Build title column with clickable titles that load the content*/
        for (var i = 0; i < data.length; i++) {
              var title = data[i].title.rendered;
              var slug = data[i].slug;
              var postedDate = moment(new Date(data[i].date)).format('M/DD/YYYY');
              var blogSnippet = data[i].content.rendered;


              $(".titles").append(
                  //for localhost
//                "<div class='card small grey darken-3 hoverable'> <div class='card-content grey-text text-lighten-4'> <span class='card-title' data-value='"+ i + "'>" + title + "</span> <p>" + postedDate + "<br>" + blogSnippet + "</p> </div> <div class='card-action'> <a href='http://localhost/GXMA/public_html/blog/" + slug + "'>Read more</a> </div> </div>"
            //for heroku
            "<div class='card small grey darken-3 hoverable'> <div class='card-content grey-text text-lighten-4'> <span class='card-title' data-value='"+ i + "'>" + title + "</span> <p>" + postedDate + "<br>" + blogSnippet + "</p> </div> <div class='card-action red darken-4'> <a href='http://guoxingmartialarts.com/events/" + slug + "'>Read more</a> </div> </div>"
//                  "<div class='col-md-3 text-center'>" +
//                  "<h4><a href='http://localhost/php-template-materialize/public_html/blog/" + slug + "' class='loadPosts faqlink' data-value='"+ i + "'>" + title + " <br> " + postedDate + "</a></h4>" +
//                  "</div>"
                )
        }
        /*display content when title is clicked*/
        $(".loadPosts").on("click", function(e){
          e.preventDefault;
          var post = parseInt($(this).attr('data-value'));
          var datePosted =moment(new Date(data[post].date)).format('M/DD/YYYY');
          var postTitle = data[post].title.rendered;
          var blogContent = data[post].content.rendered;
//          console.log(post);
          $(".panel-heading").html("<h3 class='panel-title'>" + datePosted + ", " + postTitle + "</h3>");
          $(".panel-body").html("<p>" + blogContent + "</p>");
        })
        }
   });



  <?php } ?>
    </script>