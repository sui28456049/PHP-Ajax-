<?
//替换自己即可
$connect=mysql_connect("localhost","root","root");
mysql_select_db('test',$connect);
/*数据库连接参数*/
$last = $_POST['last'];
$amount = $_POST['amount'];
// echo $last;
// echo $amount;
$query = mysql_query("select * from news order by id desc limit $last,$amount");
while ($row = mysql_fetch_array($query)) {
    $sayList[] = array(
        'title' => $row['title'],
        'author' => $row['id'],
        'date' => date('m-d H:i', $row['submitTime'])
    );
}
echo json_encode($sayList);
?>