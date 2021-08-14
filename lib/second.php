<?php
#---pozivanje klase---#
$eng = new ng1np();
#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = 'second, second page, page';
$eng->author = 'hightech';
$eng->description = 'Short description of api page';
$eng->title = 'SECOND';

$eng->sadrzaj = array( 
	array(
	"proces1" => "1111",
	"proces2" => "0110",
	"proces3" => "1001",
	"proces4" => "0000"
	),
	array(
	"proces1" => "0110",
        "proces2" => "1111",
        "proces3" => "1001",
        "proces4" => "0000"
	),
	array(
	"proces1" => "1111",
        "proces2" => "0000",
        "proces3" => "0110",
        "proces4" => "1001"
	)
);

$eng->strana = array( 
        array(
        "server1" => "0001",
        "server2" => "1110",
        "server3" => "1000"
        ),
        array(
        "server1" => "0010",
        "server2" => "1010",
        "server3" => "1011"
        )
);



#---render metoda---#
echo $eng->render('up/second.tpl');

