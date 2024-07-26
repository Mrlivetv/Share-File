<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Check for update -->
<script language="javascript">
var myVar=setInterval(function(){chekUpdate()},1000); // at 1s intervals
var stat_old = "";
function chekUpdate()
{
    $("#stat").load("dir_stat.php",function(){
        var stat_new = $("#stat").html();
        if((stat_old != "") && (stat_old != stat_new)){
            refreshSlideShow();
        }
        stat_old = stat_new;
    });
}

function refreshSlideShow()
{
    // you can refresh your slideshow here.
window.location.reload();
refreshSlideShow2();
}
  ;(function refreshSlideShow2() {

        var reloads = [3000, 4000],
            storageKey = 'reloadIndex',
            reloadIndex = parseInt(localStorage.getItem(storageKey), 10) || 0;

        if (reloadIndex >= reloads.length || isNaN(reloadIndex)) {
            localStorage.removeItem(storageKey);
            return;
        }

        setTimeout(function(){
            window.location.reload();
        }, reloads[reloadIndex]);

        localStorage.setItem(storageKey, parseInt(reloadIndex, 10) + 1);
    }());

</script>
<body>
<div id="stat" style="display:none;"> 
</div>
</body>