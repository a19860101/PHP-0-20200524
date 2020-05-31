<?php
    $str = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, minus? Nulla quis numquam, eum unde culpa nam? Molestias quos eius velit, id labore sit cum similique quas. Quasi molestias sed atque accusantium et, cupiditate non, praesentium pariatur aperiam harum reiciendis aspernatur cum nemo ducimus ratione nihil animi earum dignissimos aliquam assumenda perferendis nostrum! Praesentium, adipisci mollitia! Ut, nisi! Eaque distinctio, suscipit tempore alias culpa ad reprehenderit, quo minima non aspernatur voluptatum voluptates excepturi consequatur reiciendis. Accusantium asperiores distinctio voluptates, numquam odio dolorum commodi magnam natus corrupti aperiam inventore enim excepturi esse quibusdam maxime facere qui saepe quod necessitatibus consequatur aliquam iure voluptatibus nesciunt nulla. Et veritatis sapiente similique ipsum totam ex nostrum, assumenda hic nihil? Dolor porro illo mollitia expedita qui, voluptates eos maxime quasi minima, veritatis, aliquid non vitae. Minima praesentium expedita assumenda error voluptate. Repellat exercitationem praesentium illum, temporibus voluptas assumenda, est soluta, magni qui libero tenetur nostrum sunt! Molestiae minus sequi tempora, non accusantium quas voluptates voluptate nostrum quidem veritatis in. Repudiandae dicta ea tenetur temporibus vel consequatur nisi id iure maiores, voluptates, itaque perspiciatis corporis accusantium corrupti assumenda eaque quibusdam numquam? Quos labore adipisci aspernatur odio eveniet tempore quidem, modi nostrum corporis architecto error culpa facere incidunt quis asperiores ad, minus voluptatem amet optio a esse temporibus et. Vero, error ipsa? Veritatis, eaque neque, excepturi at harum similique obcaecati recusandae quam laborum sequi architecto iusto cumque. Dolores nesciunt porro accusamus voluptatum ullam aliquid possimus pariatur rerum eaque nostrum at, earum hic cum nemo corrupti. Doloribus illo commodi consectetur ex enim hic deleniti praesentium ducimus iusto odit, possimus quaerat recusandae dignissimos voluptates distinctio, ut soluta! Voluptatibus quisquam soluta nihil vel, enim fugiat. Reiciendis consequatur cumque nihil soluta, praesentium libero totam inventore quo expedita maiores reprehenderit animi optio corporis ea laboriosam eveniet voluptates molestiae in repellat harum quam?";
    $str_2 = "統一獅隊今晚在台南棒球場1329人的見證下，潘武雄在八局下代打轟出的右外野兩分砲，達成隊史第1萬4000分打點的里程碑，連第1萬4001分打點也一起進帳。

    統一獅隊打完七局原以3：5落後，不過隊史打點已累積到1萬3999分，八局下面對中繼投手陳禹勳，陳傑憲先敲出二壘安打，潘武雄上場代打，把球轟到右外野，一道漂亮的弧線落在「感謝防疫人員」的大帆布上，一口氣達成並超過里程碑。
    
    獅隊成為中職第一支達成1萬4000分打點的球隊，貢獻最多的打者是現役的高國慶，生涯為獅隊敲出856分打點，潘武雄加今天兩打點，以629分打點排第三，第二名則是653分打點的羅敏卿。";
    // echo substr($str_2,0,10);
    // echo mb_substr($str_2,0,10,"utf-8");

    // echo nl2br($str_2);
    // $pw = "dvopiuj231lk@938_dasS";
    // echo $pw;
    // echo "<br>";
    // echo md5($pw);
    // echo sha1($pw);
    // echo md5(md5(sha1($pw)));
    // echo crypt($pw,"hello");
    // echo "<br>";
    // echo crypt($pw,"qwert");

    $s = "<h1>哈囉你好</h1>";
    // echo $s;
    // echo mb_substr($s,0,3,"utf-8");
    echo mb_substr(strip_tags($s),0,3,"utf-8");
