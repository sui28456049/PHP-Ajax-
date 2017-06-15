<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
  <style type="text/css">
            #more{margin:10px auto;width: 560px;  border: 1px solid #999;}               
            .single_item{padding: 20px; border-bottom: 1px dotted #d3d3d3;}
            .author{position: absolute; left: 0px; font-weight:bold; color:#39f}
            .date{position: absolute; right: 0px; color:#999}
            .content{line-height:20px; word-break: break-all;}
            .element_head{width: 100%; position: relative; height: 20px;}
            .get_more{margin:10px; text-align:center}
            .more_loader_spinner{width:20px; height:20px; margin:10px auto; background: url(loader.gif) no-repeat;}
        </style>
<body>
         <div class="container">
                <div id="more">
                    <div class="single_item">
                        <div class="element_head">
                            <div class="date"></div>
                            <div class="author"></div>
                        </div>
                        <div class="title"></div>
                    </div>
                    <a href="javascript:;" class="get_more">加载更多</a>
            </div> 
</body>
        <script src="jquery.js" type="text/javascript"></script>
        <script type="text/javascript" src="jquery.more.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#more').more({'address': 'ajax.php'})
            });
        </script>
</html>