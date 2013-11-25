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

<!-- Place this tag where you want both of the search box and the search results to render -->
<gcse:search></gcse:search>
      

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
		  error:	 function(message,number,debug) {
			alert(message + ' ' +number + '  ' +debug);
		  }
		});
	});
});

</script>
<table width='100%'>
<tr>
	<td width='50%'></td>
	<td width='50%'>
		<table>
		<tr>
			<td>
			<input type='text' name='keyword' id='keyword' value=''>

			<div id='result'></div>
			
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>

https://www.googleapis.com/customsearch/v1?key=AIzaSyAsgnmYyhV4lF0PQTX8XRpGeliOk70Xo_Y&cx=017985859914464491403:bqgglrgkkgc&q=oryxn

  "template": "https://www.googleapis.com/customsearch/v1?q={searchTerms}&num={count?}&start={startIndex?}&lr={language?}&safe={safe?}&cx={cx?}&cref={cref?}&sort={sort?}&filter={filter?}&gl={gl?}&cr={cr?}&googlehost={googleHost?}&c2coff={disableCnTwTranslation?}&hq={hq?}&hl={hl?}&siteSearch={siteSearch?}&siteSearchFilter={siteSearchFilter?}&exactTerms={exactTerms?}&excludeTerms={excludeTerms?}&linkSite={linkSite?}&orTerms={orTerms?}&relatedSite={relatedSite?}&dateRestrict={dateRestrict?}&lowRange={lowRange?}&highRange={highRange?}&searchType={searchType}&fileType={fileType?}&rights={rights?}&imgSize={imgSize?}&imgType={imgType?}&imgColorType={imgColorType?}&imgDominantColor={imgDominantColor?}&alt=json"