<!-- http://localhost:8888/php_test/index.php -->

  <?php
//連想配列
    $array_member2 = [
      '1kumi'=>[
        '本田'=>[
          'height'=>'170',
          'hoby'=>'サッカー'
        ],
        '香川'=>[
          'height'=>'165',
          'hoby'=>'サッカー'
        ]
      ],
      '2kumi'=>[
        '長友'=>[
          'height'=>'160',
          'hoby'=>'サッカー'
        ],
        '乾'=>[
          'height'=>'168',
          'hoby'=>'サッカー'
        ]
      ]
    ];
    echo $array_member2['2kumi']['長友']['height'];
    echo'<pre>';
    var_dump($array_member2);
    echo'<pre>';
  ?>
</body>

