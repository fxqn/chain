<?php
include_once 'header.inc.php';
?>

<head>
<link rel="shortcut icon" type="image/ico" href=favicon.ico>
</link>
</head>


      <div class="jumbotron">
        <h1>网址缩短</h1>
        <form name="sina" method="get" action="short.php" onsubmit="return urlcheck()" >
        <p class="lead ">
            <input name="url" class="form-control" placeholder="在这里输入长网址..." >
        </p>
        <p><button class="btn btn-lg btn-primary" type="submit"  >立即缩短</button></p>
        </form>
      </div>


<?php
include_once 'footer.inc.php';
?>