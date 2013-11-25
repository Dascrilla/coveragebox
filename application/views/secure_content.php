<!-- Put the following javascript before the closing </head> tag. -->
<script>
  (function() {
    var cx = '017985859914464491403:bqgglrgkkgc';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>

      

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://www.google.com/jsapi?key=AIzaSyAsgnmYyhV4lF0PQTX8XRpGeliOk70Xo_Y" type="text/javascript">
 <script type="text/javascript">
      google.load("search", "1");
</script>

<?php
//echo '<pre>'; oryxn
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
?>
<script>
$(document).ready(function() {
    $("#keyword").keyup(function(){
      $.ajax({
      url: 'https://www.googleapis.com/customsearch/v1?key=AIzaSyAsgnmYyhV4lF0PQTX8XRpGeliOk70Xo_Y&q='+$("#keyword").val()+'&cx=017985859914464491403:bqgglrgkkgc&alt=json',
      success: function(data) {     
      $('#result').html(data);
      //alert('Load was performed.');
      },
      error:   function(message,number,debug) {
      alert(message + ' ' +number + '  ' +debug);
      }
    });
  });
});
</script>

<style>
.google {
    background-color: #F5F5F5;
}
.ui-widget-content a {
  float:left;
  color:#0088CC;
  font-size:12px;
}
.ui-widget-content {
    text-align: left;
    font-size:12px;
}
.news{
  text-align:left;
}
.web{
  text-align:left;
}
.exist{
	background-color: gray;
}
</style>
<div class="row-fluid">

<div id="droppable" class="span6 offset1 list well" style="min-height:600px;">
      
      <!-- <div  style="float:right; margin-top:500px;"><input type="button" id="save_btn" value="Save" onClick="save_content();"/></div> -->

  </div>

  <div class="span4 google well" style="min-height:600px">
    <!-- <h1>this is where search will go</h1> -->
    <input type="text" placeholder="search..." class="input-home search-query" id="query" name="query">
    <button class="btn btn-success" type="submit" id="submit_btn">GO</button>
      <div id="search-content">
        <div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
          <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="web-content" aria-labelledby="ui-id-1" aria-selected="true"><a href="#web-content" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Web</a></li>
            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="news-content" aria-labelledby="ui-id-2" aria-selected="false"><a href="#news-content" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">News</a></li>
            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="anytime-content" aria-labelledby="ui-id-3" aria-selected="false"><a href="#anytime-content" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">AnyTime</a></li>
          </ul>
          <div id="web-content" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="" aria-expanded="true" aria-hidden="false">
            <p></p>
          </div>
          <div id="news-content" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
            <p></p>
          </div>
          <div id="anytime-content" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
            <p></p>
          </div>
        </div>
      </div>
  </div>

</div>


    